<?php
	
	require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Student Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<div class="header-area">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					 <span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<a class="navbar-brand" href="#">Student Database</a>
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						      <li class="nav-item active">
						        <a class="nav-link" href="index.php">Insert Data</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="view.php">View Data</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="logout.php">Logout</a>
						      </li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
		</nav>
	</div>
	