<?php

session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}

$connection = new Mongo("mongodb://172.17.0.4");
$db = $connection->CATALOGUE;
$collection = $db->movies;
$cursor = $collection->find();

foreach ($cursor as $document) {
      echo '<p>'.$document["title"].'</p>'.'<p>Description: '.$document["description"].'</p>'.'<p>Genre: '.$document["genre"].'</p>';
      
   }

?>
