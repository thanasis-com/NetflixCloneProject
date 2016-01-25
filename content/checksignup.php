<?php

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$age=$_POST['age'];
$country=$_POST['country'];
$role=$_POST['role'];
$animated=$_POST['animated'];
$documentary=$_POST['documentary'];
$music=$_POST['music'];

$hostname="172.17.0.2";
$database="netflixcloneproject";
$username="root";
$password="999999";

$conn = new mysqli($hostname, $username, $password, $database, 3306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO users (name, surname, email, password, age, country, role, animated, documentary, music)
VALUES ('$name', '$surname', '$email', '$pass', '$age', '$country', '$role', '$animated', '$documentary', '$music')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
header("Location:login.php");
?>
