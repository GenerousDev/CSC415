<?php  
session_start();
include "db_conn.php";

if (isset($_POST['marticnumber']) && isset($_POST['password']) ) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$marticnumber = test_input($_POST['marticnumber']);
	$password = test_input($_POST['password']);

	if (empty($marticnumber)) {
		header("Location: ../student/student-login.php?error=Matric Number is Required");
	}else if (empty($password)) {
		header("Location: ../student/student-login.php?error=Password is Required");
	}else {

		// Hashing the password
		// $password = md5($password);
        
        $sql = "SELECT * FROM studentuser WHERE marticnumber='$marticnumber' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) >= 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['marticnumber'] = $row['marticnumber'];

        		header("Location: ../student/student.php");

        	}else {
        		header("Location: ../student/student-login.php?error=Incorrect Matricnumber or password");
        	}
        }else {
        	header("Location: ../student/student-login.php?error=Incorrect Matric number or password");
        }

	}
	
}else {
	header("Location: ../student/student-login.php");
}