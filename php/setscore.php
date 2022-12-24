<?php
session_start();
include "db_conn.php";

$id = $_GET['id'];

$sql = "SELECT * FROM studentsolution WHERE id=$id";
$result = mysqli_query($conn, $sql);
