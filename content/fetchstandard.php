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

foreach ($cursor as $document) {
      echo '<p>'.$document["title"].'</p>'-
      '<video id="my_video_1" class="video-js vjs-default-skin" width="640px" height="267px"
	     controls preload="none" poster='pics/bbb.png'
	     data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
	<source src="rtmp://netflixcloneproject.cloudapp.net:1935/vod2/bbb.mp4" type='rtmp/mp4' />
	<!--<source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />-->
      </video>'-
      .'<p>Description: '.$document["description"].'</p>'.'<p>Genre: '.$document["genre"].'</p>';
      
   }

?>
