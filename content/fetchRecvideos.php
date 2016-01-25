<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
echo '1';

echo '4';
?>
