<?php
session_start();
include "db_conn.php";

if (isset($_GET['matricnumber']) && isset($_GET['analysisScore']) && isset($_GET['examinerid'])) {

    // Escape special characters, if any
    $matricnumber = $conn->real_escape_string($_GET['matricnumber']);
    $analysisScore = $conn->real_escape_string($_GET['analysisScore']);
    $examinerid = $conn->real_escape_string($_GET['examinerid']);

    $sql = "UPDATE studentscore SET analysisScore='$analysisScore', examinerid=' $examinerid'
         WHERE matricnumber=$matricnumber";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../examiner/examiner.php?success=Analysis Score updated successfully");
    } else {
        header("Location: ../examiner/examiner.php?error=unknown error occurred&$user_data");
    }
} else if (isset($_GET['matricnumber']) && isset($_GET['methodologyScore']) && isset($_GET['examinerid'])) {

    // Escape special characters, if any
    $matricnumber = $conn->real_escape_string($_GET['matricnumber']);
    $methodologyScore = $conn->real_escape_string($_GET['methodologyScore']);
    $examinerid = $conn->real_escape_string($_GET['examinerid']);

    $sql = "UPDATE studentscore SET methodologyScore='$methodologyScore', examinerid=' $examinerid'
         WHERE matricnumber=$matricnumber";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../examiner/examiner.php?success=Methodology Score updated successfully");
    } else {
        header("Location: ../examiner/examiner.php?rror=unknown error occurred&$user_data");
    }
} else if (isset($_GET['matricnumber']) && isset($_GET['literatureScore']) && isset($_GET['examinerid'])) {

    // Escape special characters, if any
    $literatureScore = $conn->real_escape_string($_GET['literatureScore']);
    $matricnumber = $conn->real_escape_string($_GET['matricnumber']);
    $examinerid = $conn->real_escape_string($_GET['examinerid']);

    $sql = "UPDATE studentscore SET 
        literatureScore='$literatureScore', examinerid=' $examinerid'
         WHERE matricnumber=$matricnumber";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../examiner/examiner.php?success=Literature Score updated successfully");
    } else {
        header("Location: ../examiner/examiner.php?error=unknown error occurred&$user_data");
    }
} else if (isset($_GET['matricnumber']) && isset($_GET['conclusionScore']) && isset($_GET['examinerid'])) {

    $matricnumber = $conn->real_escape_string($_GET['matricnumber']);
    $conclusionScore = $conn->real_escape_string($_GET['conclusionScore']);
    $examinerid = $conn->real_escape_string($_GET['examinerid']);

    $sql = "UPDATE studentscore SET conclusionScore='$conclusionScore', examinerid=' $examinerid'
         WHERE matricnumber=$matricnumber";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../examiner/examiner.php?success=Conclusion Score updated successfully");
    } else {
        header("Location: ../examiner/examiner.php?error=unknown error occurred&$user_data");
    }
} else if (isset($_GET['matricnumber']) && isset($_GET['abstractScore']) && isset($_GET['examinerid'])) {

    $matricnumber = $conn->real_escape_string($_GET['matricnumber']);
    $abstractScore = $conn->real_escape_string($_GET['abstractScore']);
    $examinerid = $conn->real_escape_string($_GET['examinerid']);

    $sql = "UPDATE studentscore SET abstractScore='$abstractScore', examinerid=' $examinerid'
         WHERE matricnumber=$matricnumber";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../examiner/examiner.php?success=Abstract Score updated successfully");
    } else {
        header("Location: ../examiner/examiner.php?error=unknown error occurred&$user_data");
    }
}


// else {
//     header("Location: ../examiner/examiner.php?error=Please fill in all required fields");
// }
