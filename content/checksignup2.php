<?php
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$age=$_POST['age'];
$country=$_POST['country'];
$role=$_POST['role'];

$hostname="172.17.0.2";
$database="netflixcloneproject";
$username="root";
$password="999999";

// A higher "cost" is more secure but consumes more processing power
$cost = 10;

// Create a random salt
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// Prefix information about the hash so PHP knows how to verify it later.
// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
$salt = sprintf("$2a$%02d$", $cost) . $salt;

// Hash the password with the salt
$hash = crypt($password, $salt);

$conn = new mysqli($hostname, $username, $password, $database, 3306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (name, surname, email, password, age, country, role)
VALUES ('$name', '$surname', '$email', '$hash', '$age', '$country', '$role')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location:login.php");
?>
