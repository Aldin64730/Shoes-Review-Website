<?php
include("rfconnection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myemail = mysqli_real_escape_string($conn, $_POST['emaili']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['passwordi']);

    $sql = "SELECT id FROM users WHERE email = ? AND password = ?";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $myemail, $mypassword);
    $stmt->execute();
    $stmt->store_result();
    
    $count = $stmt->num_rows;
    $stmt->bind_result($userId);
    $stmt->fetch();
    $stmt->close();

    if ($count == 1) {
        $_SESSION['login_user'] = $myemail;
        if ($userId == '1' || $userId == '2') {
            header("location: Shoes%20Review%20Website.php");
        } else {
            header("Location: Shoes%20Review%20Website.php");
        }
    } else {
        $error = "Your Email or Password is invalid";
        echo $error;
    }
}
?>


    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shoes Review Website</title>
        <link rel="stylesheet" href="ShoesReviewWebsitecss.css">    
        <style>
    
            *{
                font-family: serif;
            }
    
            header {
                font-family: serif;
                background-blend-mode:lighten;
                background-image: url(faqja2img.jpg);
                background-size: 100% 100%;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }
    
            form {
                background-image: url(headerwllp.jpg) ;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 300px;
            }
    
            h1{
                text-align: center;
                color: #39ff14 ;
            }
    
            input, select {
                width: 100%;
                padding: 8px;
                margin-bottom: 16px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
    
            input[type="password"] {
                position: relative;
            }
    
            button {
                background-color: #39ff14;
                color: black;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 100%;
            }
    
            button:hover {
                background-color: #3da430;
            }
    
            footer{
        background-image: url(headerwllp.jpg);
        background-size: 100% 100%;
       
       display: flex;
       justify-content: space-between;
    }
    
    
    
    .footermain{
        color: rgb(255, 255, 255);
        display: flex;
        flex-wrap: wrap;
        width: 300px;
        font-family:serif;
    }
    
    .footercenter{
        display: flexbox;
        justify-items: center;
        justify-content: center;
        color: rgb(255, 255, 255);
        padding-top: 135px;
        padding-right: 80px;
        font-family:serif;
    }
    
    .footercenter a{
        color: rgb(255, 255, 255);
        text-decoration: none;
        padding: 8px 18px;
        border-radius: 18px;
    }
    
    .footercenter a:hover{
        transition: 0.25s;
        background:  #00ff00;
        color: white;
    }
    
    .Links{
        padding-top: 10px;
        padding-right: 80px;
        color: rgb(255, 255, 255);
        display: flexbox;
        justify-items:flex-end;
        font-family:serif;
    }
    
        </style>
    </head>
    <body>
        
        <header>
        <form method="post">
    
            <h1>Login here:</h1>
        
            <input type="email" id="email" name="emaili" placeholder="Email" required>
    
            <input type="password" id="password" name="passwordi" placeholder="Password" required>
            
            <button type="submit">Login</button>
        </form>
        </header>
        <footer>
            <div class="footermain">
                <h2 style="padding-left: 10px;">About our shoes review page</h2>
                <p style="padding-left: 10px;">Whether you're a sneakerhead, a fashionista, or someone simply
                in search of reliable and stylish shoes, you've landed on the right page.
                Join me on a journey through the vast world of footwear as I share insights,
                opinions, and recommendations to help you step into style with confidence.</p>
            </div>
                
            <div class="footercenter">
                <a href="Shoes Review Website.php">Home</a>
                <a href="HeaderInfo.php">Support</a>
                <a href="HeaderInfo.php">Advertise</a>
            </div>
            
            <div class="Links">
                <h4>Our links:</h4>  
                <a href="https://www.instagram.com/"><img src="Links/instalogo.png" alt="" height="30px" width="30px"></a>
                <a href="https://www.facebook.com/"><img src="Links/fblogo.png" alt="" height="30px" width="30px"></a>
                <a href="https://www.twitter.com/"><img src="Links/xlogo.jpg" alt="" height="28px" width="28px" style="border-radius: 10px;"></a>
            </div>
            </footer>
    
            
    
    </body>
    </html>

