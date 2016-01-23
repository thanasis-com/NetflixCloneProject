<?php
session_start();
function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
$hostname="172.17.0.2:3306";
$database="netflixcloneproject";
$username="root";
$password="999999";
$user = $_POST['user'];
$pass = $_POST['pass'];

$link=mysql_connect($hostname, $username, $password) or
	die ("An error occured while connecting to the server!" .mysql_error());
	


$sql="SELECT * FROM users WHERE email=:user AND password=:pass";

$stmt = mysql_select_db($database,$link)->prepare($sql);
$stmt->execute(array(
    ":user" => $user,
    ":pass" => $pass
));

$row = $stmt->fetch();


if(mysql_num_rows($row)==0)
{
	header("location:login.php");
}
else
{

	
	$role=$row["role"];
	
	$_SESSION['role'] = $row['role'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['name'] = $row['name'];
	$_SESSION['surname'] = $row['surname'];
	
	header("Location:index.php");
}
?>
