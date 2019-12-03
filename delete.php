<?php 

 $link = mysqli_connect("localhost", "root", "", "hrapp");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		
		$delete = "delete from employee_hiring where id = '$id'";
		mysqli_query($link, $delete);
		header("location:emp_record.php");
	}
 ?>