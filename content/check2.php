<?php
session_start();
function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
$hostname="172.17.0.2";
$database="netflixcloneproject";
$username="root";
$password="999999";
$user = $_POST['user'];
$pass = $_POST['pass'];

$conn = new mysqli($hostname, $username, $password, $database, 3306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo '1';

$sql="SELECT * FROM users WHERE email=:user AND password=:pass";
echo '2';
$stmt = $conn->prepare($sql);
$stmt->execute(array(
    ":user" => $user,
    ":pass" => $pass
));
echo '3';
$row = $stmt->fetch();

echo '4';
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
