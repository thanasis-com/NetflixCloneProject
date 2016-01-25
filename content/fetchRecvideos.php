<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
echo '1';
$connection = new Mongo("mongodb://172.17.0.3");
$db = $connection->CATALOGUE;
$collection = $db->movies;

echo '4';
?>
