<?php

$hostname="172.17.0.2:3306";
$database="netflixcloneproject";
$username="root";
$password="999999";
$link=mysql_connect($hostname, $username, $password) or
	die ("An error occured while connecting to the server!" .mysql_error());
mysql_select_db($database,$link);

?>
