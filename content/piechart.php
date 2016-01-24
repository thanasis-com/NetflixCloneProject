<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
	
require_once ('/home/src/jpgraph.php');
require_once ('/home/src/jpgraph_pie.php');
require_once ('/home/src/jpgraph_pie3d.php');

$likes=array();
$labels=array();
foreach ($cursor as $document) {

	if(in_array($document['genre'],$labels)
	{
		$likes[array_search($document['genre'], $labels)]=$likes[array_search($document['genre'], $labels)]+$document['likes'];
	}
	else
	{
		array_push($labels,$document['genre']);
		array_push($likes, $document['likes']);
	}
}
	
	
	
?>
