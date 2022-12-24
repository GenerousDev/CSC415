<?php
session_start();
include "db_conn.php";

$id = $_SESSION['id'];

$sql = "SELECT * FROM studentsolution WHERE examinerid=$id";
$result = mysqli_query($conn, $sql);
