<?php
$servername = "localhost";
$username = "root";
$password = ""; // If you set a password for your MySQL, enter it here
$dbname = "db";

$conn = new mysqli("localhost","root","","db");

if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO login_data(email, Password) VALUES('$email', '$password')";
// $result = $conn->query($sql);

if (mysqli_query($conn,$sql)) {
    echo "login successful!";
} else {
    echo "Invalid login credentials.";
}

$conn->close();
?>