function validateForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (email.trim() === "" || password.trim() === "") {
        alert("Email and password are required");
        return false;
    }

    if (password.length < 6) {
        alert("Password should be at least 6 characters");
        return false;
    }
    alert("You have logged in successfully!");
    return true;
}

let i = 0;
let imgArray = [
    'logot per ads/adidas logo.png',
    'logot per ads/justdoit.png',
    'logot per ads/Nike-Logo.png',
    'logot per ads/puma logo.png',
    'logot per ads/lacostelogo.png',
    'logot per ads/tnlogo.png',
    'logot per ads/reeboklogo.png',
    'logot per ads/offwhite.png'
];

function changeImg() {
    document.getElementById('slideshow').src = imgArray[i];

    if (i < imgArray.length - 1) {
        i++;
    } else {
        i = 0;
    }
}

setInterval(changeImg, 3000);

window.addEventListener('load', changeImg);