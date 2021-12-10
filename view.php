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
					<h3 class="text-center">View All Student Data</h3>
					<hr>
					<table class="table table-bordered">
						<tr>
							<th>Serial</th>
							<th>Name</th>
							<th>Roll Number</th>
							<th>Regi Number</th>
							<th>Semester</th>
							<th>Department</th>
							<th>Actioin</th>
						</tr>
						<?php 
							$sql = "SELECT * FROM students";
							$view = $connection->query($sql);
						?>

						<?php
						$i = 0;

						while($row=$view->fetch_object()) : ?>
						<?php $i++;?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $row->name;?></td>
							<td><?php echo $row->roll;?></td>
							<td><?php echo $row->regi;?></td>
							<td><?php echo $row->semester;?></td>
							<td><?php echo $row->department;?></td>
							<td>
								<a href="edit.php?myid=<?php echo $row->id;?>">Edit</a> | 
								<a onclick="return myDelete()"  href="delete.php?st_id=<?php echo $row->id;?>">Delete</a>
							</td>
						</tr>

						<?php endwhile;?>
					</table>

					<?php if(isset($_REQUEST['delete_success'])) :?>
					<div class="alert alert-warning" role="alert">
					  Deleted Student Data.
					</div>
					<?php endif;?>

					

				</div>
			</div>
		</div>

</div>

<?php 
	require_once('footer.php');
?>
