<?php 
	require_once('header.php');
	session_start();
 	if(!isset($_SESSION['username'])){
 		header('location:login.php');
 	}
?>

<div class="main-area" style="margin:50px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-1">
					<h3 class="text-center">View User Data</h3>
					<hr>
					<table class="table table-bordered">
						<tr>
							<th>ID</th>
							<th>User Name</th>
							<th>Email</th>
							<th>Passwords</th>
							<th>Types</th>
						</tr>
						<?php 
							$sql = "SELECT * FROM fromlogininformation";
							$view = $connection->query($sql);
						?>

						<?php
						$i = 0;

						while($row=$view->fetch_object()) : ?>
						<?php $i++;?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $row->full_name;?></td>
							<td><?php echo $row->email;?></td>
							<td><?php echo $row->passwords;?></td>
							<td><?php echo $row->types;?></td>
							<td>
								<a href="edit.php?myid=<?php echo $row->id;?>">Edit</a> | 
								<a onclick="return myDelete()"  href="delete.php?st_id=<?php echo $row->id;?>">Delete</a>
							</td>
						</tr>

						<?php endwhile;?>
					</table>

					<?php if(isset($_REQUEST['delete_success'])) :?>
					<div class="alert alert-warning" role="alert">
					  Deleted User Data.
					</div>
					<?php endif;?>

					

				</div>
			</div>
		</div>

</div>

<?php 
	require_once('footer.php');
?>
