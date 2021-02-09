<?php
session_start();
ob_start();
unset($_SESSION['Roll_no']);
header("Location:StudentLogin.php");
?>