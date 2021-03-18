<?php
session_start();
$EmailSubAdmin=$_SESSION['EmailSubAdmin'];

if(!isset($_SESSION['EmailSubAdmin']))
{
	header("Location:SubAdminLogin.php");
}

?>