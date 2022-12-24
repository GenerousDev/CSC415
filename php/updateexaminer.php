<?php
session_start();
include "db_conn.php";

if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$fullname = test_input($_POST['fullname']);
	$password = test_input($_POST['password']);
	$username = test_input($_POST['username']);
	$email = test_input($_POST['email']);
	$id = test_input($_POST['id']);
	$role = "examiner";

	if (empty($fullname)) {
		header("Location: ../examiner/createexaminerpage.php?error=fullname is Required");
	} else if (empty($password)) {
		header("Location:  ../examiner/createexaminerpage.php?error=Password is Required");
	} else if (empty($username)) {
		header("Location:  ../examiner/createexaminerpage.php?error=username is Required");
	} else if (empty($email)) {
		header("Location:  ../examiner/createexaminerpage.php?error=email is Required");
	} else {

		// Hashing the password
		$password = md5($password);

		$sql = "UPDATE examineruser 
		SET fullname='$fullname', email='$email', password='$password',username='$username',role='$role'
	    WHERE id=$id";

		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("Location: ../adminfile/admin.php?success=Successfully Updated");
		} else {
			header("Location: ../examiner/createexaminerpage.php?error=unknown error occurred&$user_data");
		}
	}
} else {
	header("Location: ../examiner/createexaminerpage.php?error=Please fill in all required fields");
}
