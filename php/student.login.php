<!--    header( "Location:$location" ); -->
<?php
include "./db_conn.php";

$Username = $_GET["Username"];
$Password =  $_GET["Password"];


$Username = $conn->real_escape_string($Username);
$Password = $conn->real_escape_string($Password);

// Create database
$sqldb = "CREATE DATABASE myDB";
if ($conn->query($sqldb) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$tableName = "Student";

$sql = "CREATE TABLE $tableName (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstName varchar(30) NOT NULL,
  lastName varchar(30) NOT NULL,
)";

if($conn->query($sql) === TRUE) {
  echo "Table $tableName created successfully";
} else {
  echo "Error creating table $tableName". $conn->connect_error;
}

$conn->close();
?>