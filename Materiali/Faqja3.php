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
        
        
        
        
        <div class="rubrika">
            <img src="nikes/nike tns/tn5.jpg" alt="" class="img">
            <div class="views_date">
                <p>Nike TN</p>
                <p>42,700 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="nikes/nike tns/tn8.jpg" alt="" class="img">
            <div class="views_date">
                <p>Nike TN</p>
                <p>11,420 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="nikes/nike tns/tn7.jpg" alt="" class="img">
            <div class="views_date">
                <p>Nike TN</p>
                <p>32,906 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="nikes/nike tns/tn4.jpg" alt="" class="img">
            <div class="views_date">
                <p>Nike TN</p>
                <p>50,700 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/adidas samba/s1.jpg" alt="" class="img">
            <div class="views_date">
                <p>Adidas Samba</p>
                <p>107,510 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/adidas samba/s2.jpg" alt="" class="img">
            <div class="views_date">
                <p>Adidas Samba</p>
                <p>93,245 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/adidas samba/s3.jpg" alt="" class="img">
            <div class="views_date">
                <p>Adidas Samba</p>
                <p>70,231 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/adidas samba/s4.jpg" alt="" class="img">
            <div class="views_date">
                <p>Adidas Samba</p>
                <p>10,982 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/adidas campus 00s/cmp1.jpg" alt="" class="img">
            <div class="views_date">
                <p>Adidas Campus</p>
                <p>18,006 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/adidas campus 00s/cmp2.jpg" alt="" class="img">
            <div class="views_date">
                <p>Adidas Campus</p>
                <p>21,300 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/adidas campus 00s/cmp3.jpg" alt="" class="img">
            <div class="views_date">
                <p>Adidas Campus </p>
                <p>21,204 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/adidas campus 00s/cmp4.jpg" alt="" class="img">
            <div class="views_date">
                <p>Adidas Campus </p>
                <p>32,113 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="nikes/jordans/jordan1.jpg" alt="" class="img">
            <div class="views_date">
                <p>Air Jordan 1</p>
                <p>21,204 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="nikes/jordans/jordan11.webp" alt="" class="img">
            <div class="views_date">
                <p>Jordan 11</p>
                <p>21,204 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="nikes/jordans/jordan3.jpg" alt="" class="img">
            <div class="views_date">
                <p>Jordan 3</p>
                <p>21,204 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="nikes/jordans/jordan4.jpg" alt="" class="img">
            <div class="views_date">
                <p>Jordan 4</p>
                <p>21,204 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/yeezy/y1.jpg" alt="" class="img">
            <div class="views_date">
                <p>Yeezy</p>
                <p>21,204 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/yeezy/y2.webp" alt="" class="img">
            <div class="views_date">
                <p>Yeezy</p>
                <p>21,204 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/yeezy/y3.webp" alt="" class="img">
            <div class="views_date">
                <p>Yeezy</p>
                <p>21,204 Views</p>
            </div>
        </div>
        <div class="rubrika">
            <img src="adidas/yeezy/y4.webp" alt="" class="img">
            <div class="views_date">
                <p>Yeezy</p>
                <p>21,204 Views</p>
            </div>
        </div>
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