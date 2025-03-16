<?php
$servername = "localhost";
$username = "root";
$password = ""; // If you set a password for your MySQL, enter it here
$dbname = "sign";

$conn = new mysqli("localhost","root","","sign");

if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO login_data(username, email, Password) VALUES('$username','$email', '$password')";
// $result = $conn->query($sql);

if (mysqli_query($conn, $sql)) {
    echo "login successful!";
} else {
    echo "Invalid login credentials.";
}

$conn->close();
?>