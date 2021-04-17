<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: 03_login_normal.php");

?>