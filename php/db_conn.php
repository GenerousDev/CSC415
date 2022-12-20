<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="assignment";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

  // echo '<script>alert("Connected")</script>';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>