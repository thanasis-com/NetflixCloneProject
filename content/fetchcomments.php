<?php
function fetchcomments($id){
	$connection = new Mongo("mongodb://172.17.0.3");
	$db = $connection->CATALOGUE;
	$collection = $db->movies;
	$cursor = $collection->find();
	foreach ($cursor as $document) {
		echo '<li><a href="#">Calvin</a></li>';
	}


?>
