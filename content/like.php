<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
?>

$connection = new Mongo("mongodb://172.17.0.3");
$db = $connection->CATALOGUE;
$collection = $db->movies;

$criteria = array("_id"=>1);
$newdata = array('$inc'=>array("likes"=>1));

$collection->update(
            $criteria,
            $newdata,
          );

?>
