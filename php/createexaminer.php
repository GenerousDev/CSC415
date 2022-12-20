<?php
session_start();
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$name = test_input($_POST['name']);
	$password = test_input($_POST['password']);
	$matricnumber = test_input($_POST['username']);
	$email = test_input($_POST['email']);

	if (empty($name)) {
		header("Location: ../examiner/createexaminerpage.php?error=Name is Required");
	} else if (empty($password)) {
		header("Location:  ../examiner/createexaminerpage.php?error=Password is Required");
	} else if (empty($username)) {
		header("Location:  ../examiner/createexaminerpage.php?error=username is Required");
	} else if (empty($email)) {
		header("Location:  ../examiner/createexaminerpage.php?error=email is Required");
	} else {

		// Hashing the password
		$password = md5($password);

		$sql = "INSERT INTO examineruser(name, email, password,username) 
		VALUES('$name', '$email','$password', '$username')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("Location: ../adminfile/admin.php?success=successfully created");
		} else {
			header("Location: ../examiner/createexaminerpage.php?error=unknown error occurred&$user_data");
		}
	}
} else {
	header("Location: ../examiner/createexaminerpage.php?error=Please fill in all required fields");
}
