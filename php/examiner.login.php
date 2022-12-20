<?php
include "db_conn.php";

$Username = $_GET["Username"];
$Password =  $_GET["txtPassword"];

$Username = $conn->real_escape_string($Username);
$Password = $conn->real_escape_string($Password);

// Create database
$sqldb = "CREATE DATABASE myDB";
if ($conn->query($sqldb) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$tableName = "Examiner";

$sql = "CREATE TABLE $tableName (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstName varchar(30) NOT NULL,
  lastName varchar(30) NOT NULL,
  email varchar(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql) === TRUE) {
  echo "Table $tableName created successfully";
} else {
  echo "Error creating table $tableName". $conn->connect_error;
}

$conn->close();
?>