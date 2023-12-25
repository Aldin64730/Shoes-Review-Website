function validateForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var user = document.getElementById('user').value;

    if (email.trim() === "" || password.trim() === "") {
        alert("Email and password are required");
        return false;
    }

    if (password.length < 6) {
        alert("Password should be at least 6 characters");
        return false;
    }

    if (user.length < 4) {
        alert("Username should be at least 4 characters");
        return false;
    }
    alert("You have registered successfully! Please return to the home page!");
    return true;
}