<?php
$connection = new Mongo("mongodb://172.17.0.4");
echo "Connection to database successfully";
$db = $connection->CATALOGUE;
echo "Database mydb selected";
$collection = $db->movies;
echo "Collection selected succsessfully";
$cursor = $collection->find();
   // iterate cursor to display title of documents
	
   foreach ($cursor as $document) {
      echo $document["title"] . "\n";
   }
?>
