<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}

unset($_SESSION['role']);

?>
