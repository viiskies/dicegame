<!DOCTYPE html>
<html lang="en">
<head>

	<title><?php echo $page_title; ?></title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="index.php">
				<img src="favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
				Dice Game
			</a>
			<?php if(!isset($guest)) {?>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item <?php echo (isset($home_page) ? 'active' : ''); ?>">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item <?php echo (isset($stats_page) ? 'active' : ''); ?>">
					<a class="nav-link" href="stats.php">Stats</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<p class="text-success nav-link mb-0 font-weight-bold">Welcome, <span id="username"><?php echo strtoupper($_SESSION['username']); ?></span></p>
				<a class="btn btn-outline-success my-2 my-sm-0" href="logout.php">Logout</a>
			</form>
			<?php } ?>
		</div>
	</nav>