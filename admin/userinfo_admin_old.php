<?php
session_start();
$Email=$_SESSION['Email'];

if(!isset($_SESSION['Email']))
{
	header("Location:admin_login.php");
}

?>