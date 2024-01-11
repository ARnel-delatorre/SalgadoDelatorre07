<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>


<?php 

	include('../dbcon.php');
	$update_record =$_GET['Update'];
	$sql = "select * from student where id = '$update_record'";
	$result = mysqli_query($conn,$sql);

	while ($data_row = mysqli_fetch_assoc($result)) {
		$update_id = $data_row['id']; 
		$Roll = $data_row['rollno'];
		$Name = $data_row['name'];
		$City = $data_row['city'];
		$Pcontact = $data_row['pcontact'];
		$Standard = $data_row['standard'];
        $id = $data_row['id'];
	}

 ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">UPDATE STUDENT DETAIL</h2>
			<form action="update.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				      Roll No.:<input type="text" class="form-control" name="roll" value="<?php echo 
				      $Roll;?>" >
				  </div>
				  <div class="form-group">
				    
				    Full Name:<input type="text" class="form-control" name="fullname" value="<?php echo 
				    $Name;?>" placeholder="full name" required>
				  </div>
				  <div class="form-group">
				      City: <input type="text" class="form-control" name="city" value="<?php echo $City;?>"  required>
				  </div>
				  <div class="form-group">
				    
				    Parent Phone No.:<input type="text" class="form-control" name="pphone" value="<?php echo $Pcontact;?>" required>
				  </div>
				  <div class="form-group">
				    
				    Standard:<input type="number" class="form-control" name="standard" value="<?php echo $Standard;?>" required>
				  </div>
                    
                <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>" required>
				  <button type="submit" name="submit" class="btn btn-success btn-lg">UPDATE</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>


<?php 
//This php code block is for editing the data that we got after clicking on update button
	

 ?>
