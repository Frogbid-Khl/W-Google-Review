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