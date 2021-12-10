<?php 
	require_once('header.php');

	$st_id = $_REQUEST['myid'];


	if(isset($_POST['update_data'])){

		$new_full_name = $_POST['new_full_name'];
		$new_email = $_POST['new_email'];
		$new_passwords = $_POST['new_passwords'];
		$new_types = $_POST['new_types'];
		$new_types = $_POST['new_types'];


		$data = $connection->query("UPDATE fromlogininformation  SET full_name='$new_full_name',email='$new_email',passwords='$new_passwords',types='$new_types' WHERE id=$st_id");


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

					$data=$connection->query("SELECT * FROM fromlogininformation WHERE id=$st_id");

					while($content=$data->fetch_object()){
						$full_name = $content->full_name;
						$email = $content->email;
						$passwords = $content->passwords;
						$types = $content->types;
					}

					?>


					<form action="" method="POST">
							<input type="text" name="new_full_name" placeholder="New User Name" class="form-control" id="" value="<?php echo $full_name;?>" required>

							<input type="text" name="new_email" placeholder="New email" class="form-control" id="" value="<?php echo $email;?>" required>

							<input type="text" name="new_passwords" placeholder="New Passwords" class="form-control" value="<?php echo $passwords;?>" required>

							<input type="text" name="new_types" placeholder="New Types" class="form-control" value="<?php echo $types;?>">

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