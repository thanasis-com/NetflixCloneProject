<?php

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$age=$_POST['age'];
$country=$_POST['country'];
$role=$_POST['role'];
if($_POST['animated']==true)
{
    $animated=1;
}
else
{
    $animated=0;
}
if($_POST['documentary']==true)
{
    $documentary=1;
}
else
{
    $documentary=0;
}
if($_POST['music']==true)
{
    $music=1;
}
else
{
    $music=0;
}

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
header("Location:index.php");
?>
