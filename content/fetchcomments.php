<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
	
try{
$connection = new Mongo("mongodb://172.17.0.7:27001");
$db = $connection->COMMENTS;
$collection = $db->comments;
$cursor = $collection->find();
echo $cursor;
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
