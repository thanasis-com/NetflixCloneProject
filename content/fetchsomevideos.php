<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}

function fetchsome($genre)
{
  $connection = new Mongo("mongodb://172.17.0.3");
  $db = $connection->CATALOGUE;
  $collection = $db->movies;
  $cursor = $collection->find();
  foreach ($cursor as $document) {
    if(($document["visibility"]==$_SESSION['role'] || $_SESSION['role']=="prime" || $_SESSION['role']=="admin")&&($document["genre"]==$genre)){
		
      echo '<p class="title">'.$document["title"].'</p>'.'<video class="video-js vjs-default-skin" width="640px" height="267px" controls preload="auto" poster="pics/bbb.png" data-setup="{}"> <source src="rtmp://netflixcloneproject.cloudapp.net:1935/vod2/'.$document["filename"].'" type="rtmp/mp4" /></video>'.'<p><div class="label">Description: </div>'.$document["description"].'</p>'.'<p><div class="label">Genre: </div>'.$document["genre"].'</p>'.'<p><div class="label">Likes: </div>'.$document["likes"].'</p>'.'<p><input type="image" src="/img/likebutton.png" /></p><hr>';
    }
   }
}
?>
