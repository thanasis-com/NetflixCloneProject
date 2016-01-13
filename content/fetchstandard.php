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

echo "Random words";

foreach ($cursor as $document) {
      echo $document["title"] . "\n"."\n";
      echo "Description: ".$document["description"]."\n";
      echo "Genre: ".$document["genre"]
   }

?>
