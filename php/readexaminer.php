<?php  

include "db_conn.php";

$sql = "SELECT * FROM examineruser ORDER BY id DESC";
$results = mysqli_query($conn, $sql);