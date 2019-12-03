<?php ob_start();
 $link = mysqli_connect("localhost", "root", "", "hrapp");
		if (isset($_GET['id'])($_POST['update'])) {
			$id = $_GET['id'];
			$update = "update  employee_hiring set phone = 12345678 where id = '$id'";
			mysqli_query($link, $update);
			header("location:emp_record.php");
	
	}
	?>