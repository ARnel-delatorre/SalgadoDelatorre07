
<?php
$conn = mysqli_connect('fdb1033.awardspace.net','4425606_sms','LAlove100722','4425606_sms');
if (isset($_POST['submit'])) {
		if (!empty($_POST['roll']) && !empty($_POST['fullname'])) {
		
			include ('../dbcon.php');
			$id = $_POST['id'];
			$roll=$_POST['roll'];
			$name=$_POST['fullname'];
			$city=$_POST['city'];
			$pphone=$_POST['pphone'];
			$standard=$_POST['standard'];

			$sql = "UPDATE student SET rollno = '$roll', name = '$name', city='$city', pcontact = '$pphone', standard = '$standard' WHERE id = '$id'";

			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				echo '<script>alert("data updated successfully");window.location.href="admindash.php";</script>';

			}


		}

	}





   
?>