<?php
session_start();
ob_start();
unset($_SESSION['EmailAdmin']);
header("Location:../HomePageAdmin.php");
?>