<?php

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$age=$_POST['age'];
$country=$_POST['country'];
$role=$_POST['role'];

$hostname="172.17.0.2:3306";
$database="netflixcloneproject";
$username="root";
$password="999999";

$conn = new mysqli($hostname, $username, $password, $database);

$sql = "INSERT INTO users (name, surname, email, password, age, country, role)
VALUES ('$name', '$surname', '$email', '$pass', '$age', '$country', '$role')";

$conn->query($sql);

$conn->close();
header("Location:login.php");
?>
