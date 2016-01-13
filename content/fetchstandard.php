<?php

$connection = new Mongo("mongodb://172.17.0.4");
$db = $connection->CATALOGUE;
$collection = $db->movies;
$cursor = $collection->find();

foreach ($cursor as $document) {
      echo $document["title"] . "\n"."\n";
      echo "Description: ".$document["description"]."\n";
      echo "Genre: ".$document["genre"]
   }

?>
