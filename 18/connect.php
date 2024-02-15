<!-- connect.php -->
<?php
$servername = "localhost";
$username = "gct";
$password = "password";
$dbname = "mydatabase";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
