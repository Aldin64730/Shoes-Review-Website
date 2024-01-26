<?php
session_start();
include("rfconnection.php");
session_unset();
session_destroy();
header("Location: Login.php");
die;