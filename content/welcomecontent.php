<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}

$connection = new Mongo("mongodb://172.17.0.3");
$db = $connection->CATALOGUE;
$collection = $db->movies;
$cursor = $collection->find();

$data=array();

foreach ($cursor as $document) {
	array_push($data, $document['likes']);
}

print_r($data);



	
?>
