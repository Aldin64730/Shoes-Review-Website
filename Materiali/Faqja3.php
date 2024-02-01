<?php


session_start();
include("rfconnection.php"); 
function isUserLoggedIn() {
    

    if (isset($_SESSION['login_user'])) {
        return true; 
    } else {
        return false; 
    }
}


function isAdmin() {
    global $conn;

    if (isset($_SESSION['login_user'])) {
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


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faqja3</title>
    <link rel="stylesheet" href="faqja3css.css">
  
    
</head>
<body>

    <header class="headerContainer">
        <h1 class="TopLeft">Footwear Finesse</h1>

        <?php
        if(isUserLoggedIn() && isAdmin()){
            echo '<button style="border-radius: 10px; height: 30px; width: 80px;
             margin-left: 5px; margin-top: 50px;" onclick="window.location.href=\'addshoe.php\'">Add Shoe</button>';
        }
        ?>

        <div class="quotedhehome">
            <div class="quote">
            <p>Welcome to the City of Stylish shoes, Incorporated! 
            We appreciate you joining our club. You now have exclusive access to new arrivals and sales.</p>
        </div>

    </header>

    <div class="fotografit">
    <?php
        
        $sql = "SELECT * FROM shoes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="rubrika">';
                echo '<img src="' . $row['img_path'] . '" alt="' . $row['name'] . '" alt="" class="img">';
                echo '<div class="views_date">';
                echo '<h2>' . $row['name'] . '</h2>';
                echo '</div>';
                echo '</div>';
         }
        } else {
         echo 'No shoes found in the database.';
        }
?>
    </div>
    <footer>
        <div class="footermain">
            <h2 style="padding-left: 10px;">About our shoes review page</h2>
            <p style="padding-left: 10px;">Whether you're a sneakerhead, a fashionista, or someone simply
            in search of reliable and stylish shoes, you've landed on the right page.
            Join me on a journey through the vast world of footwear as I share insights,
            opinions, and recommendations to help you step into style with confidence.</p>
        </div>
            
        <div class="footercenter">
            <a href="Shoes Review Website.php" class="home">Home</a>
            <a href="HeaderInfo.php" class="support">Support</a>
            <a href="HeaderInfo.php"class="advertise">Advertise</a>
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