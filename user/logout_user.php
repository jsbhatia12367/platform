<?php
session_start();
ob_start();
unset($_SESSION['EmailStudent']);
header("Location:../HomePage.php");
?>