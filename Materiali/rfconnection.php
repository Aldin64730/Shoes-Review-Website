<?php
$servername = "localhost";
$db = "website";
$username = "root";
$password = "";

if(!$conn = mysqli_connect($servername, $username, $password, $db)){
    die("failed to connect");
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
