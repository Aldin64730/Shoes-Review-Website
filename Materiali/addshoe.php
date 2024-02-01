<?php
    session_start();
    include("rfconnection.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $img_path = $_POST['img_path'];
        
    
        if (!empty($name) && !empty($img_path)) {
            
            $query = "INSERT INTO shoes (img_path, name) VALUES (?, ?)";
    
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $img_path, $name);
            $stmt->execute();
    
            if ($stmt->affected_rows > 0) {
                $stmt->close();
                header("Location: Faqja3.php");
                die;
            } else {
                $stmt->close();
                echo "Failed to insert shoe.";
            }
        } else {
            echo "Ju lutem shkruani informata valide";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ShoesReviewWebsitecss.css">
    <style>
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
    </style>
</head>
<body>
<header>
    <form method="post">

        <h1>Add Shoe here:</h1>

        <input type="text" id="img_path" name="img_path" placeholder="Img_Path" required>

        <input type="text" id="name" name="name" placeholder="Name" required>
        
        <button type="submit">Add Shoe</button>
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