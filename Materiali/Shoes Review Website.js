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

    return true;
}

document.getElementById('RegisterButton').addEventListener('click', function() {
    var registrationForm = document.getElementById('registrationForm');
    registrationForm.style.display = (registrationForm.style.display === 'none') ? 'block' : 'none';
});

document.getElementById('RegisterForm').addEventListener('submit', function(event) {
    event.preventDefault();
});

function alidavteRegisterForm() {
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

    return true;
}


