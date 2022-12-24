<?php
// session_start();
include "db_conn.php";

// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
$matricnumber = test_input($_GET['matricnumber']);
$sql = "SELECT * FROM studentscore WHERE matricnumber=$matricnumber";

$result = mysqli_query($conn, $sql);
