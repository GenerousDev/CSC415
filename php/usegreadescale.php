<?php

include "db_conn.php";
$id =  1;
$sql = "SELECT * FROM grade WHERE id = $id";
$result = mysqli_query($conn, $sql);
