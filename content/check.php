<?php

session_start();

function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

$hostname="172.17.0.3";
$database="netflixcloneproject";
$username="root";
$password="999999";
$user = clean($_POST['user']);
$pass = clean($_POST['pass']);

$link=mysql_connect($hostname, $username, $password) or
	die ("An error occured while connecting to the server!" .mysql_error());

mysql_select_db($database,$link);

$Qcheck_user="SELECT * FROM users WHERE email='$user' AND password='$pass'";

$check_user=mysql_query($Qcheck_user, $link)or
	die("There was an error:".mysql_error());

$number=mysql_num_rows($check_user);

if($number==0)
{
	echo "Wrong password or e-mail. Please try again.<br><br>";
	echo "<a href=\"login.php\">Go back</a>";
	exit;
}
else
{
	$user=mysql_fetch_array($check_user);
	
	$role=$user["role"];
	
	$_SESSION['role'] = $user['role'];
	
	header("Location:index.php");
}

?>
