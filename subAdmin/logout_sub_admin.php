<?php
session_start();
ob_start();
unset($_SESSION['EmailSubAdmin']);
header("Location:../HomePageAdmin.php");
?>