<?php 
	require_once('header.php');

	$st_id = $_REQUEST['myid'];


	if(isset($_POST['update_data'])){

		$new_name = $_POST['new_name'];
		$new_roll = $_POST['new_roll'];
		$new_regi = $_POST['new_regi'];
		$new_semester = $_POST['new_semester'];
		$new_department = $_POST['new_department'];


		$data = $connection->query("UPDATE students  SET name='$new_name',roll='$new_roll',regi='$new_regi',semester='$new_semester',department='$new_department' WHERE id=$st_id");


		$success = "Student Data Update Success!";
		header('location:view.php');

	}


?>


<div class="main-area" style="margin:50px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-2">
					<h3 class="text-center">Edit Student data</h3>
					<hr>

					<?php 

					$data=$connection->query("SELECT * FROM students WHERE id=$st_id");

					while($content=$data->fetch_object()){
						$name = $content->name;
						$roll = $content->roll;
						$registration = $content->regi;
						$semester = $content->semester;
						$dep = $content->department;
					}

					?>


					<form action="" method="POST">
							<input type="text" name="new_name" placeholder="Student Name" class="form-control" id="" value="<?php echo $name;?>" required>

							<input type="text" name="new_roll" placeholder="Roll Number" class="form-control" id="" value="<?php echo $roll;?>" required>

							<input type="text" name="new_regi" placeholder="Registration Number" class="form-control" value="<?php echo $registration;?>" required>

							<input type="text" name="new_semester" placeholder="Semeter" class="form-control" value="<?php echo $semester;?>">

							<input type="text" name="new_department" placeholder="Department" class="form-control" value="<?php echo $dep;?>">

							<input type="submit" name="update_data" value="Update New Data" class="btn btn-outline-primary" id="">


						</form>

					<?php if(isset($success)) :?>
							<div class="alert alert-success" role="alert">
							   <?php echo $success;?>
							</div>
						<?php endif;?>

				</div>
			</div>
		</div>

</div>


<?php 
	require_once('footer.php');
?>