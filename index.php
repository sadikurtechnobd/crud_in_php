<?php 
	
	require_once('header.php');

 	session_start();
 	if(!isset($_SESSION['username'])){
 		header('location:login.php');
 	}

	if(isset($_POST['insert'])){

		$st_name = $_POST['st_name'];
		$st_roll = $_POST['st_roll'];
		$st_regi = $_POST['st_regi'];
		$st_semester = $_POST['st_semester'];
		$st_department = $_POST['st_department'];

		
		$sql = "INSERT INTO students(name,roll,regi,semester,department) VALUES('$st_name','$st_roll','$st_regi','$st_semester','$st_department')";
		$send_data = $connection->query($sql);

		if($send_data){
			$success = "Student Data Insert Successfully!";
		}



	}


?>


	<div class="main-area" style="margin:50px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-3">
					<div class="form-area">
						<h3 class="text-center">Insert Student Data</h3>
						<hr>
						<form action="" method="POST">
							<input type="text" name="st_name" placeholder="Student Name" class="form-control" id="" required>

							<input type="text" name="st_roll" placeholder="Roll Number" class="form-control" id="" required>

							<input type="text" name="st_regi" placeholder="Registration Number" class="form-control" id="" required>

							<input type="text" name="st_semester" placeholder="Semeter" class="form-control" id="">

							<input type="text" name="st_department" placeholder="Department" class="form-control" id="">

							<input type="submit" name="insert" value="Insert New Data" class="btn btn-outline-primary" id="">


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
	</div>


<?php require_once('footer.php');?>