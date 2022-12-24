<?php
session_start();
include "db_conn.php";

if (
    isset($_POST['gradeA']) && isset($_POST['gradeB']) && isset($_POST['gradeC']) && isset($_POST['gradeD'])
    && isset($_POST['gradeE']) && isset($_POST['gradeF']) && isset($_POST['gradeG'])
) {

    // Escape special characters, if any
    $gradeA = $conn->real_escape_string($_POST['gradeA']);
    $gradeB = $conn->real_escape_string($_POST['gradeB']);
    $gradeC = $conn->real_escape_string($_POST['gradeC']);
    $gradeD = $conn->real_escape_string($_POST['gradeD']);
    $gradeE = $conn->real_escape_string($_POST['gradeE']);
    $gradeF = $conn->real_escape_string($_POST['gradeF']);
    $gradeG = $conn->real_escape_string($_POST['gradeG']);
    $id =  1;

    if (empty($gradeA)) {
        header("Location: ../php/gradingsystem.php?error=A is Required");
    } else if (empty($gradeB)) {
        header("Location:  ../php/gradingsystem.php?error=B is Required");
    } else if (empty($gradeC)) {
        header("Location:  ../php/gradingsystem.php?error=C is Required");
    } else if (empty($gradeD)) {
        header("Location:  ../php/gradingsystem.php?error=D is Required");
    } else if (empty($gradeE)) {
        header("Location:  ../php/gradingsystem.php?error=E is Required");
    } else if (empty($gradeF)) {
        header("Location:  ../php/gradingsystem.php?error=F is Required");
    } else if (empty($gradeG)) {
        header("Location:  ../php/gradingsystem.php?error=G is Required");
    } else {

        $sql = "UPDATE grade SET gradeA='$gradeA',gradeB='$gradeB',gradeC='$gradeC',
        gradeE='$gradeE',gradeF='$gradeF', gradeG='$gradeG'
         WHERE id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../adminfile/admin.php?success=Grading Scale updated successfully");
        } else {
            header("Location: ../adminfile/admin.php?error=unknown error occurred&$user_data");
        }
    }
} else {
    header("Location: ../adminfile/admin.php?error=Please fill in all required fields");
}
