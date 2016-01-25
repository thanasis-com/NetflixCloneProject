<?php

$hostname="172.17.0.6:3306";
$database="netflixcloneproject";
$username="root";
$password="999999";

$link=mysql_connect($hostname, $username, $password) or
	die ("An error occured while connecting to the server!" .mysql_error());
	
echo $link;

require_once('TagCloud.php');
echo '1';
try{
$cloud = new TagCloud();
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} 
echo '2';
$cloud->addTag("tag-cloud");
echo '3';
$cloud->addTag("programming");
echo '4';
echo $cloud->render();
echo '5';
	
	?>
