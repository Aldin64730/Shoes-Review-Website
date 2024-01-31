<?php


function isUserLoggedIn() {
    

    if (isset($_SESSION['login_user'])) {
        return true; 
    } else {
        return false; 
    }
}


function isAdmin() {
    

    
    if (isset($_SESSION['login_user'])) {
        include("rfconnection.php"); 

        $myemail = $_SESSION['login_user'];

        
        $sql = "SELECT id FROM users WHERE email = '$myemail'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $user = mysqli_fetch_assoc($result);
            return ($user['id'] === '1' || $user['id'] === '2');
        }
    }

    return false; 
}


