<?php
session_start();
$EmailStudent=$_SESSION['EmailStudent'];

if(!isset($_SESSION['EmailStudent']))
{
	header("Location:StudentLogin.php");
}

?>