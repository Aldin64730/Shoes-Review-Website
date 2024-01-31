<?php
$servername = "localhost";
$db = "website";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



function random_num($length){
    $text = "";
    if($length < 5){
        $length = 5;
    }
    $len = rand(4,$length);
    for($i=0;$i < $len; $i++){
        $text .= rand(0,9); 
    }
    return $text;
}

?>
