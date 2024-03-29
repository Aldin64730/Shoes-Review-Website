
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>



.del {
    background-color: green;
    color: white;

}

.update {
    background-color: green;
    color: white;

}

body{
        background-image: url(faqja2img.jpg);
        background-size: 100% 100%;
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


<?php
    include("rfconnection.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        if (isset($_POST['delete_user'])) {
            $userId = $_POST['user_id'];
            
            $deleteSql = "DELETE FROM users WHERE user_id = '$userId'";
            $deleteResult = $conn->query($deleteSql);

            if ($deleteResult) {
                echo 'User deleted successfully.';
            } else {
                echo 'Error deleting user: ' . $conn->error;
            }
        }

        elseif (isset($_POST['update_user'])) {
            $userId = $_POST['user_id'];
            $newUserName = $_POST['new_user_name'];

            $updateSql = "UPDATE users SET user_name = '$newUserName' WHERE user_id = '$userId'";
            $updateResult = $conn->query($updateSql);

            if ($updateResult) {
                echo 'User updated successfully.';
            } else {
                echo 'Error updating user: ' . $conn->error;
            }
        }
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table border="1" style="background-image: url(faqja2img.jpg); color:white;
        margin-left: auto; margin-right: auto; margin-top: 100px; margin-bottom: 100px;">';
        echo '<tr><th>ID</th><th>User ID</th><th>User Name</th><th>Email</th><th>Date</th><th></th><th></th></tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['user_id'] . '</td>';
            echo '<td>' . $row['user_name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td>
                <input type="hidden" name="user_id" value="' . $row['user_id'] . '">
                <input type="submit" name="delete_user" class="del" value="Delete">
              </td>';
            echo '<td>
                <input type="hidden" name="user_id" value="' . $row['user_id'] . '">
                <input type="text" name="new_user_name" placeholder="New User Name" required>
                <input type="submit" name="update_user" class="update" value="Update">
              </td>';
            echo '</tr>';
            echo '</form>';
        }

        echo '</table>';
    } else {
        echo 'No users found in the database.';
    }
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_shoe'])) {
        $id = $_POST['id'];

        $deleteSql = "DELETE FROM shoes WHERE id = '$id'";
        $deleteResult = $conn->query($deleteSql);

        if ($deleteResult) {
            echo 'Shoe deleted successfully.';
        } else {
            echo 'Error deleting shoe: ' . $conn->error;
        }
    }

    elseif (isset($_POST['update_shoe'])) {
        $id = $_POST['id'];
        $newName = $_POST['new_name'];

        $updateSql = "UPDATE shoes SET name = '$newName' WHERE id = '$id'";
        $updateResult = $conn->query($updateSql);

        if ($updateResult) {
            echo 'Shoe name updated successfully.';
        } else {
            echo 'Error updating shoe name: ' . $conn->error;
        }
    }
}

$sql = "SELECT * FROM shoes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table border="1" style="background-image: url(faqja2img.jpg); color:white;
    margin-left: auto; margin-right: auto; margin-top: 100px; margin-bottom: 100px;">';
    echo "<tr><th>ID</th><th>Image</th><th>Name</th><th>Date</th><th></th><th></th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["img_path"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo '<td>
            <input type="hidden" name="id" value="' . $row['id'] . '">
            <input type="submit" name="delete_shoe" class="del" value="Delete">
          </td>';
        echo '<td>
            <input type="hidden" name="id" value="' . $row['id'] . '">
            <input type="text" name="new_name" placeholder="New Shoe Name" required>
            <input type="submit" name="update_shoe" class="update" value="Update">
          </td>';
        echo "</tr>";
        echo "</form>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

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

