<?php
session_start();
$Roll_no=$_SESSION['Email'];

if(!isset($_SESSION['Email']))
{
	header("Location:AdminLogin.php");
}

?>