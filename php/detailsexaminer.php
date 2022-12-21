<?php
// session_start();
include "db_conn.php";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$id = test_input($_GET['id']);
$sql = "SELECT * FROM studentuser WHERE id=$id";

$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: ../examiner/examinerdetailpage.php?success=");
} else {
    header("Location: ../adminfile/admin.php?error=unknown error occurred&$user_data");
}
