<?php
//Include database connection file
include 'dbconn.php';

if (isset($_POST['submit'])) {
  $username = $_POST['username'];

  // Normal Password
  $pass = $_POST['password'];

  // Securing password using password_hash
  $secure_pass = password_hash($pass, PASSWORD_BCRYPT);

  $sql = "INSERT INTO login_tb (u_username, u_password)
    VALUES('$username', '$secure_pass')";
  $result = mysqli_query($conn, $sql);
}

// Include HTML sign up form
include 'signup_form.php';
?>

<!-- server redirect -->
<?php
if ($_POST["location"]) {
  $location = $_POST["location"];
  header("Location:$location");

  exit();
}
?>




<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>


<?php } else {
  header("Location: home.php");
} ?>