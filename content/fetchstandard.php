<?php

session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}

$connection = new Mongo("mongodb://172.17.0.4");
$db = $connection->CATALOGUE;
$collection = $db->movies;
$cursor = $collection->find();

echo '<link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet"><script src="http://vjs.zencdn.net/4.11/video.js"></script>';

foreach ($cursor as $document) {
      echo '<p>'.$document["title"].'</p>'.'<video class="video-js vjs-default-skin" width="640px" height="267px" controls preload="none" poster="pics/bbb.png" data-setup="{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }"> <source src="rtmp://netflixcloneproject.cloudapp.net:1935/vod2/bbb.mp4" type="rtmp/mp4" /></video>'.'<p>Description: '.$document["description"].'</p>'.'<p>Genre: '.$document["genre"].'</p>';
      
   }

?>
