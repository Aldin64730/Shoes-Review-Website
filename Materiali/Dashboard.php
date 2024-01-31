
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="ShoesReviewWebsitecss.css">
</head>
<body>
    <?php
    include("rfconnection.php");
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo '<table border="1" style="background-color: white; margin-left: auto; margin-right: auto; margin-top: 100px; margin-bottom: 100px;">';
        echo '<tr><th>ID</th><th>User ID</th><th>User Name</th><th>Email</th><th>Date</th><th></th></tr>';
    
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['user_id'] . '</td>';
            echo '<td>' . $row['user_name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td><button>Delete</button></td>'; 
            echo '</tr>';
            
        }
    
        echo '</table>';
    } else {
        echo 'No users found in the database.';
    }
    
    ?>
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

