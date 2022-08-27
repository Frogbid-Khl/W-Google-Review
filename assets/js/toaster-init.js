let x = getCookie('alert');

function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

console.log(window.location.origin);
if (x == 1) {
    eraseCookie('alert');
    Swal.fire({
        confirmButtonColor: '#00c9bb',
        title: 'Thank you for your request!',
        text: 'We will get back to you shortly.',
        imageUrl: window.location.origin+'/images/alert-logo.png',
        imageWidth: 400,
        imageHeight: 100,
        imageAlt: 'Custom image',
    }).then(function() {
        window.location = "/";
    });
}

function eraseCookie(name) {
    document.cookie = name + '=;';
}
