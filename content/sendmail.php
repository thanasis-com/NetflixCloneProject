<?php
session_start();
if(!isset($_SESSION['role']))
{
	header("location:login.php");
	}

$id = intval($_POST['id']);

$connection = new Mongo("mongodb://172.17.0.3");
$db = $connection->CATALOGUE;
$collection = $db->movies;
$criteria = array("_id"=>$id);
$cursor = $collection->find($criteria);

foreach ($cursor as $document) {
	$title=$document["title"];
	echo 'fine1.5';
	$moviegenre=$document["genre"];
}

$cursor2 = $collection->find();

$message="Hello ".$_SESSION['name'].",\n\n We noticed that you liked ".$title.". We have more videos like this: \n\n";

$sendflag=false;
foreach ($cursor2 as $document) {
  if($moviegenre==$document['genre'] && $id!=$document['_id']){
  $sendflag=true;
  $message.=$document['title']."\n";
  }
}

if(sendflag){
mail ($_SESSION['email'],"Videos you may like!",$message,"From:netflixclone@project.com");
}

?>
