<?php
session_start();
include "db_conn.php";

if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['matricnumber']) && isset($_POST['password'])) {

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$fullname = test_input($_POST['fullname']);
	$password = test_input($_POST['password']);
	$matricnumber = test_input($_POST['matricnumber']);
	$email = test_input($_POST['email']);

	if (empty($fullname)) {
		header("Location: ../student/createstudentpage.php?error=fullname is Required");
	} else if (empty($password)) {
		header("Location: ../student/createstudentpage.php?error=Password is Required");
	} else if (empty($matricnumber)) {
		header("Location: ../student/createstudentpage.php?error=matricnumber is Required");
	} else if (empty($email)) {
		header("Location: ../student/createstudentpage.php?error=email is Required");
	} else {

		// Hashing the password
		$password = md5($password);
		$value = "SELECT * FROM studentuser WHERE matricnumber='$matricnumber'";
		$deets = mysqli_query($conn, $value);

		if (mysqli_num_rows($deets) >= 1) {
			header("Location: ../adminfile/admin.php?error=Matric Number already exists");
		}

		$sql = "INSERT INTO studentuser(fullname, email, password, matricnumber) 
		VALUES('$fullname', '$email','$password', '$matricnumber')";


		$result = mysqli_query($conn, $sql);
		if ($result) {
			$sqlvalue = "INSERT INTO studentscore( matricnumber) 
		    VALUES( '$matricnumber')";
			$resultvalue = mysqli_query($conn, $sqlvalue);
			if ($resultvalue) {
				header("Location: ../adminfile/admin.php?success=Student Successfully created");
			}
		} else {
			header("Location: ../student/createstudentpage.php?error=unknown error occurred&$user_data");
		}
	}
} else {
	header("Location:  ../student/createstudentpage.php?error=Please fill in all required fields");
}
