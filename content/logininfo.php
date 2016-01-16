<?php

session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}

echo '<p>Logged in as: '.$_SESSION['name'].$_SESSION['surname'].'</p><p>User subscription: '.$_SESSION['role'];
	
?>
