<?php
include("includes/dbconfig.php");
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $star = mysqli_real_escape_string($con, $_POST['star']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $number_of_review = mysqli_real_escape_string($con, $_POST['number_of_review']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $url = mysqli_real_escape_string($con, $_POST['url']);
    $page = mysqli_real_escape_string($con, $_POST['page']);

    $query = $con->query("INSERT INTO `user_request_google`( `email`, `contact_number`, `star`, `country`, `no_of_review`, `message`, `url`, `page`) VALUES ('$email','$number','$star','$country','$number_of_review','$message','$url','$page')");
    if ($query) {
        $email_to = $email;
        $subject = 'Email From Reputation Dealer';


        $headers = "From: Reputation Dealer <info@reputationdealer.com>\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $messege = "
           <html>
                <body style='background-color: #eee; font-size: 16px;'>
                <div style='max-width: 600px; min-width: 200px; background-color: #ffffff; padding: 20px; margin: auto;'>
                
                    <div style='text-align: center'>
                        <img src='https://reputationdealer.com/review.jpg' style='width:500px'/>
                    </div>
                    <h3 style='color:black'>Hi </h3>
                
                    <p style='text-align: center;color:green;font-weight:bold'>Thank you for reaching out us!</p>
                
                    <p style='color:black'>Our team is excited to join you on your journey with us!<br>
                        We look forward to speaking with you. One of our team member will contact you very soon.<br>
                        If there are any changes to your contact information or availability, please let us know by <a href='mailto:info@reputationdealer.com'>info@reputationdealer.com</a>
                        
                    </p>
                
                    <p style='color:black;text-align: center'>
                        <a href='https://reputationdealer.com/' target='_blank'><button style='padding: 20px; background-color: #341c77;color: #ffffff;' >Visit our Website</button></a>
                    </p>
                </div>
                </body>
            </html>";
        if (mail($email_to, $subject, $messege, $headers)) {
            echo "<script> alert('data inserted successfully');</script>";
            if ($page == 'google') {
                echo "<script>window.location.replace('google.php');
               </script>";
            } elseif ($page == 'facebook') {
                echo "<script>window.location.replace('facebook.php');
               </script>";
            }elseif ($page == 'yelp'){
                echo "<script>window.location.replace('yelp.php');
               </script>";
            }elseif ($page == 'trustpilot'){
                echo "<script>window.location.replace('trustpilot.php');
               </script>";
            }
        }
    } else {
        echo "<script> alert('Something Went Wrong');</script>";
        if ($page == 'google') {
            echo "<script>window.location.replace('google.php');
               </script>";
        } elseif ($page == 'facebook') {
            echo "<script>window.location.replace('facebook.php');
               </script>";
        }elseif ($page == 'yelp'){
            echo "<script>window.location.replace('yelp.php');
               </script>";
        }elseif ($page == 'trustpilot'){
            echo "<script>window.location.replace('trustpilot.php');
               </script>";
        }
    }
}