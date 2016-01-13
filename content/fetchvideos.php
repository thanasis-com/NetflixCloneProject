<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
$connection = new Mongo("mongodb://172.17.0.2");
$db = $connection->CATALOGUE;
$collection = $db->movies;
$cursor = $collection->find();
foreach ($cursor as $document) {
    if($document["role"]==$_SESSION['role'] || $_SESSION['role']==prime || $_SESSION['role']=admin){
		
      echo '<p>'.$document["title"].'</p>'.'<video class="video-js vjs-default-skin" width="640px" height="267px" controls preload="auto" poster="pics/bbb.png" data-setup="{}"> <source src="rtmp://netflixcloneproject.cloudapp.net:1935/vod2/'.$document["filename"].'" type="rtmp/mp4" /></video>'.'<p>Description: '.$document["description"].'</p>'.'<p>Genre: '.$document["genre"].'</p>';
    }
   }
?>
