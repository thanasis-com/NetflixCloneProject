<?php

	$connection = new Mongo("mongodb://172.17.0.3");
	$db = $connection->CATALOGUE;
	$collection = $db->movies;
	$cursor = $collection->find();
	foreach ($cursor as $document) {
		echo '1';
	}



?>
