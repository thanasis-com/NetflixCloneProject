<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
	
$connection = new Mongo("mongodb://172.17.0.7:27000");
$db = $connection->COMMENTS;
$collection = $db->comments;
$cursor = $collection->find();
echo $cursor;
?>
