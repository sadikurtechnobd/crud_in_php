<?php require_once('header.php');?>


<?php 
	
	define('USERNAME','sadikur');
	define('PASSWORD','123456');


	if(isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['password'];

		if(USERNAME != $user || PASSWORD !=$pass){
			$error =  "username or password is wrong! Please try again";
		}else{

			session_start();
			$_SESSION['username'] = "sadikur";

			header('location:view.php');
		}

	}

 ?>

	<div class="main-area" style="margin:50px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-3">
					<div class="form-area">
						<h3 class="text-center">Log In</h3>
						<hr>
						<form action="" method="POST">
							<input type="text" name="user" placeholder="Username" class="form-control" id="" required>

							<input type="password" name="password" placeholder="Password" class="form-control" id="" required>


							<input type="submit" name="login" value="Login" class="btn btn-outline-primary" id="">

						</form>
						<?php if(isset($success)) :?>
							<div class="alert alert-success" role="alert">
							   <?php echo $success;?>
							</div>
						<?php endif;?>

						<?php if(isset($error)) :?>
							<div class="alert alert-danger" role="alert">
							   <?php echo $error;?>
							</div>
						<?php endif;?>

					</div>
				</div>
			</div>
		</div>
	</div>


<?php require_once('footer.php');?>