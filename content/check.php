<?php

session_start();

function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

$hostname="localhost";
$database="ergasiaepd";
$username="root";
$password="";
$user = clean($_POST['user']);
$pass = clean($_POST['pass']);

$link=mysql_connect($hostname, $username, $password) or
	die ("Provlhma sthn sundesh me ton server" .mysql_error());

mysql_select_db($database,$link);

$Qcheck_user="SELECT * FROM user WHERE username='$user' AND password='$pass'";

$check_user=mysql_query($Qcheck_user, $link)or
	die("Prosoxh sthn epilogh pinaka user:".mysql_error());

$number=mysql_num_rows($check_user);

if($number==0)
{
	echo "Provlima sth sundesh. Parakalw ksanaprospathiste.<br><br>";
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
