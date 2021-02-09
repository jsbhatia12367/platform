<?php
session_start();
ob_start();
unset($_SESSION['Email']);
header("Location:AdminLogin.php");
?>