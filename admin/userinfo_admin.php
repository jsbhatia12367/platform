<?php
session_start();
$EmailAdmin=$_SESSION['EmailAdmin'];

if(!isset($_SESSION['EmailAdmin']))
{
	header("Location:AdminLogin.php");
}

?>