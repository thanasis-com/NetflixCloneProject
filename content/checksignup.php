<?php

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$pass=md5($_POST['password']);
$age=$_POST['age'];
$country=$_POST['country'];
$role=$_POST['role'];

$hostname="172.17.0.2";
$database="netflixcloneproject";
$username="root";
$password="999999";

$conn = new mysqli($hostname, $username, $password, $database, 3306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*
$sql = "INSERT INTO users (name, surname, email, password, age, country, role)
VALUES ('$name', '$surname', '$email', '$pass', '$age', '$country', '$role')";
**/

$sql = "INSERT INTO users (name, surname, email, password, age, country, role)
VALUES (':name', ':surname', ':email', ':pass', ':age', ':country', ':role')";

$stmt = $db->prepare($sql);

$stmt->execute(array(
    ":name" => $name,
    ":surname" => $surname,
    ":email" => $email,
    ":pass" => $pass,
    ":age" => $age,
    ":country" => $country,
    ":role" => $role
));

/*
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
**/

$conn->close();
header("Location:login.php");
?>
