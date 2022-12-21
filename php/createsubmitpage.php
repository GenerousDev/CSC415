<?php
session_start();
include "db_conn.php";

if (isset($_POST['literature']) && isset($_POST['abstract']) && isset($_POST['methodology']) && isset($_POST['analysis']) && isset($_POST['conclusion'])) {

	// Escape special characters, if any
	$literature = $conn->real_escape_string($_POST['literature']);
	$abstract = $conn->real_escape_string($_POST['abstract']);
	$methodology = $conn->real_escape_string($_POST['methodology']);
	$analysis = $conn->real_escape_string($_POST['analysis']);
	$conclusion = $conn->real_escape_string($_POST['conclusion']);
	$matricnumber = $_SESSION['matricnumber'];

	if (empty($literature)) {
		header("Location: ../student/student.php?error=literature is Required");
	} else if (empty($abstract)) {
		header("Location:  ../student/student.php?error=abstract is Required");
	} else if (empty($methodology)) {
		header("Location:  ../student/student.php?error=methodology is Required");
	} else if (empty($analysis)) {
		header("Location:  ../student/student.php?error=analysis is Required");
	} else if (empty($conclusion)) {
		header("Location:  ../student/student.php?error=conclusion is Required");
	} else {

		$value = "SELECT * FROM studentsolution WHERE matricnumber='$matricnumber'";
		$deets = mysqli_query($conn, $value);

		if (mysqli_num_rows($deets) > 0) {
			header("Location: ../student/student.php?error=Project already submitted");
		} else {
			$sql = "INSERT INTO studentsolution(literature, abstract, analysis,conclusion,methodology, matricnumber) 
		VALUES('$literature', '$abstract','$methodology', '$analysis', '$conclusion', $matricnumber)";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				header("Location: ../student/student-login.php?success=Project Successfully Submitted");
			} else {
				header("Location: ../student/student.php?error=unknown error occurred&$user_data");
			}
		}
	}
} else {
	header("Location: ../student/student.php?error=Please fill in all required fields");
}
