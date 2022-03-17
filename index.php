<?php 
	
	require_once('header.php');

 	session_start();
 	if(!isset($_SESSION['username'])){
 		header('location:login.php');
 	}

	if(isset($_POST['insert'])){

		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$passwords = $_POST['passwords'];
		$types = $_POST['types'];

		
		$sql = "INSERT INTO fromlogininformation(full_name,email,passwords,types) VALUES('$full_name','$email','$passwords','$types')";

		
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
						<h3 class="text-center">From Login Information</h3>
						<hr>
						<form action="" method="POST">
							<input type="text" name="full_name" placeholder="User Name" class="form-control" id="" required>

							<input type="text" name="types" placeholder="Roll Number" class="form-control" id="">

							<input type="text" name="email" placeholder="Email" class="form-control" id="" required>

							<input type="text" name="passwords" placeholder="Passwords" class="form-control" id="" required>

							

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