<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
	
require_once ('/home/src/jpgraph.php');
require_once ('/home/src/jpgraph_pie.php');
require_once ('/home/src/jpgraph_pie3d.php');
	
	
	
?>
