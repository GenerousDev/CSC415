<?php
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: ../welcome.php?error=User Name is Required");
	} else if (empty($password)) {
		header("Location: ../welcome.php?error=Password is Required");
	} else {

		// Hashing the password
		// $password = md5($password);
		
		$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql);
		echo mysqli_num_rows($result);
		if (mysqli_num_rows($result) >= 1) {
			// the user name must be unique
			$row = mysqli_fetch_assoc($result);
			if ($row['password'] === $password && $row['role'] == $role) {
				$_SESSION['id'] = $row['id'];
				$_SESSION['role'] = $row['role'];
				$_SESSION['username'] = $row['username'];
				if ($row['role'] === "admin") {
					header("Location: ../admin.php");
				} else {
					header("Location: ../examiner.php");
				}
			} else {
				header("Location: ../welcome.php?error=Incorrect Username or password");
			}
		} else {
			header("Location: ../welcome.php?error=Incorrect User name or password");
		}
	}
} else {
	header("Location: ../welcome.php");
}
