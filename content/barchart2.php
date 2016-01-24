<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
	
require_once('/home/src/jpgraph.php');
require_once('/home/src/jpgraph_bar.php');

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

// Size of graph
$width=600;
$height=500;
// Set the basic parameters of the graph
$graph = new Graph($width,$height);
$graph->SetScale('textlin');
$graph->SetFrame(false);
$top = 60;
$bottom = 30;
$left = 120;
$right = 30;
$graph->Set90AndMargin($left,$right,$top,$bottom);
// Nice shadow
$graph->SetShadow();
$graph->xaxis->SetTickLabels($labels);
// Label align for X-axis
$graph->xaxis->SetLabelAlign('right','center','right');
// Label align for Y-axis
$graph->yaxis->SetLabelAlign('center','bottom');
// Titles
$graph->title->Set('Likes per movie');
// Create a bar pot
$bplot = new BarPlot($likes);
$bplot->SetFillColor('orange');
$bplot->SetWidth(0.5);
$bplot->SetYMin(0);
 
$graph->Add($bplot);
 
$graph->Stroke();
?>
