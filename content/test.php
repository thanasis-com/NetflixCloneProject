<?php

$hostname="172.17.0.6:3306";
$database="netflixcloneproject";
$username="root";
$password="999999";

$link=mysql_connect($hostname, $username, $password) or
	die ("An error occured while connecting to the server!" .mysql_error());
	
echo $link;

require("TagCloud.php");
$cloud = new TagCloud();
$cloud->addTag("tag-cloud");
$cloud->addTag("programming");
echo $cloud->render();
	
	?>
