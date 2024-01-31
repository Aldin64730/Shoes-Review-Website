<?php
    
    session_start();
    $_SESSION;
    include("function.php");
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes Review Website</title>
    <link rel="stylesheet" href="ShoesReviewWebsitecss.css">    
</head>
<body>
    <header class="headerContainer">
        <h1 class="TopLeft">Footwear Finesse</h1>
        <?php
        if(!isUserLoggedIn()){
       echo ' <div class="LoginDheRegister" style="margin-top: 50px;">
        <form class="LoginForm">
          <p style= "color: white; font-size:medium;">Already have an account?<button class="loginbutton"><a href="Login.php">Login</a></button></p> 
        </form>
        <form id="RegisterForm">
            <p style="color: rgb(255, 255, 255);">You dont have an account yet?<button class="RegisterButton"><a href="registerform.php" class="RegisterA">Join Our Club</a></button></p></a>
        </form>
        </div> ';}
        else if(isUserLoggedIn() && isAdmin()){
          echo ' <div class="admin" style="color: white; display: flex; align-items: center; margin-bottom: 35px;">
          <div>
          <p>Welcome</p>
              <form action="logout.php" method="post">
                  <input type="submit" name="logout" value="logout" style="border-radius: 10px; height: 30px; width: 80px; margin-left: 5px;">
              </form>
              </div>
              <button style="border-radius: 10px; height: 30px; width: 80px; margin-left: 5px; margin-top: 50px;" onclick="window.location.href=\'Dashboard.php\'">Dashboard</button>
      </div>';
        }else{
            echo '<div class="user" style="color: white; display: flexbox; align-items: center; margin-top: 40px;">
             <p>Welcome</p>
             <div>
            <form action="logout.php" method="post">
            <input type="submit" name="logout" value="logout">
           </form>  
           </div>
           </div>';
        }
        ?>
        <div class="quote">
            <p>Welcome to the City of Stylish shoes, Incorporated! 
            We appreciate you joining our club. You now have exclusive access to new arrivals and sales.</p>
        <div class="opsionet">
            <a href="Faqja3.php"><p>Click here to see our Latest Shoes!</p></a>
        </div>
        </div>
    </header>
<div class="ad">
    <img src="ads/ad1.jpg" alt="">
    <img src="ads/ad2.jpg" alt="">

    <img src="ads/ad3.jpg" alt="">
    <img src="ads/ad4.jpg" alt="">
    
    <img src="ads/ad5.jpg" alt="">
    <img src="ads/ad6.jpg" alt="">
</div> 

<hr style="color: aliceblue;">
<div class="RreshtiLlogove">
    <img id="slideshow" alt="">
</div>
<hr style="color: aliceblue;">

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
<script src="Shoes Review Website.js"></script>
</body>
</html>