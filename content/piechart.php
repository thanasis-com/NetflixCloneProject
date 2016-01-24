<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
	
require_once('/home/src/jpgraph.php');
require_once('/home/src/jpgraph_pie.php');
require_once('/home/src/jpgraph_pie3d.php');

$connection = new Mongo("mongodb://172.17.0.3");
$db = $connection->CATALOGUE;
$collection = $db->movies;
$cursor = $collection->find();

$likes=array();
$labels=array();
foreach ($cursor as $document) {

	if(in_array($document['genre'],$labels))
	{
		$likes[array_search($document['genre'], $labels)]=$likes[array_search($document['genre'], $labels)]+$document['likes'];
	}
	else
	{
		array_push($labels,$document['genre']);
		array_push($likes, $document['likes']);
	}

}

// Create the Pie Graph. 
$graph = new PieGraph(600,400);

$theme_class= new VividTheme;
$graph->SetTheme($theme_class);

// Set A title for the plot
$graph->title->Set("Likes by video genre");

// Create
$p1 = new PiePlot3D($likes);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->ExplodeSlice(1);
$graph->Stroke();	

?>
