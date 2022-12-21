<?php  

include "db_conn.php";

if(isset($_GET['id'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM studentuser
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../adminfile/admin.php?success=Student data successfully deleted");
   }else {
      header("Location: ../adminfile/admin.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../adminfile/admin.php?");
}