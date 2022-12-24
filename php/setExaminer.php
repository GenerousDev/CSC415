<?php
session_start();
include "db_conn.php";

if (isset($_GET['matricnumber'] ) && isset($_GET['examinerid'] )) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // submitted/submittedsolutions.php
    $matricnumber = validate($_GET['matricnumber'] );
    $examinerid = validate($_GET['examinerid'] );

    $sql = "UPDATE studentsolution SET examinerid='$examinerid' WHERE matricnumber=$matricnumber";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../submitted/submittedsolutions.php?success=Project Successfully Assigned");
    } else {
        header("Location: ../submitted/submittedsolutions.php?error=unknown error occurred");
    }
}
