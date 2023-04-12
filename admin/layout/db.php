<?php
$servername = "localhost";
$username = "atm";
$password = "trysomething";
$db_name = "atm";
$conn = new mysqli($servername, $username, $password,$db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>