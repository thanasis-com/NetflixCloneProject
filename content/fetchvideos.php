<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}
$connection = new Mongo("mongodb://172.17.0.3");
$db = $connection->CATALOGUE;
$collection = $db->movies;
$cursor = $collection->find();
foreach ($cursor as $document) {
    if($document["visibility"]==$_SESSION['role'] || $_SESSION['role']=="prime" || $_SESSION['role']=="admin"){
		
      echo '<p class="title">'.$document["title"].'</p>'.'<video class="video-js vjs-default-skin" width="640px" height="267px" controls preload="auto" poster="img/bbb.png" data-setup="{}"> <source src="rtmp://netflixcloneproject.cloudapp.net:1935/vod2/'.$document["filename"].'" type="rtmp/mp4" /></video>'.'<p><div class="label">Description: </div>'.$document["description"].'</p>'.'<p><div class="label">Genre: </div>'.$document["genre"].'</p>'.'<p><div class="label">Likes: </div>'.$document["likes"].'</p>'.'<p><input type="image" id="likebutton" name="likebutton" value="'.$document["_id"].'" src="/img/likebutton.png" onclick="like(this.value);sendmail(this.value);" /><hr>';                           
    }
   }
?>
