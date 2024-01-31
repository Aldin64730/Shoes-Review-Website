<?php
session_start();
include("rfconnection.php");
session_unset();
session_destroy();
header("Location: Shoes%20Review%20Website.php");
die;