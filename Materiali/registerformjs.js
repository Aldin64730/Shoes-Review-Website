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

    // Display a success message
    alert("You have registered successfully! Please return to the home page.");

    // Redirect to the success page
    window.location.href = "Shoes Review Website.html";

    // Return false to prevent the form from submitting in the traditional way
    return false;
}
