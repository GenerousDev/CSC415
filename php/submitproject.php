<?php

include "db_conn.php";

$sql = "SELECT * FROM studentsolution WHERE examinerid IS NULL ORDER BY id";
$result = mysqli_query($conn, $sql);
