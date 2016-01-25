<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
	
$connection = new Mongo("mongodb://172.17.0.7");
$db = $connection->CATALOGUE;
$collection = $db->movies;
$cursor = $collection->find();
echo $cursor;
?>
