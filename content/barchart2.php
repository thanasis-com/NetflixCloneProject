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

// Create the graph. These two calls are always required
$graph = new Graph(600,400,'auto');
$graph->SetScale("textlin");

//$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// set major and minor tick positions manually
$graph->yaxis->SetTickPositions(array(0,30,60,90,120,150), array(15,45,75,105,135));
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($labels);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($likes);

// ...and add it to the graPH
$graph->Add($b1plot);


$b1plot->SetColor("white");
$b1plot->SetFillGradient("#4B0082","white",GRAD_LEFT_REFLECTION);
$b1plot->SetWidth(45);
$graph->title->Set("Bar Gradient(Left reflection)");

// Display the graph
$graph->Stroke();



?>
