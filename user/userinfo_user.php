<?php
session_start();
$Roll_no=$_SESSION['Roll_no'];

if(!isset($_SESSION['Roll_no']))
{
	header("Location:StudentLogin.php");
}

?>