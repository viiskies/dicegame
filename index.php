<?php 
session_start();

if (isset($_SESSION['username'])) {
} else {
// user is a guest
	header('Location: login.php');
} 

$page_title = 'Lucky Dices';
$home_page = true;
include("inc/header.php"); ?>

	<div class="container">
		<div class="row">
			<div class="col d-flex justify-content-center">
				<div id="dice1" class="dice"></div>
			</div>
			<div class="col d-flex justify-content-center">
				<div id="dice2" class="dice"></div>
			</div>
			<div class="col d-flex justify-content-center">
				<div id="dice3" class="dice"></div>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col my-5 d-flex justify-content-center">
				<h2 class="p-3 bg-white">Winings: <span id="winings"></span></h2>
			</div>
			<div class="col my-5 d-flex justify-content-center">
				<h2 class="p-3 bg-white">Roll: <span id="rollNumber"></span></h2>
			</div>
		</div>
		<div class="row">
			<div class="col d-flex justify-content-center">
				<input type="button" class="btn btn-info btn-lg mx-3" id="new_game" name="new_game" value="New game">
				<input type="button" class="btn btn-primary btn-lg mx-3" id="roll_dice" name="roll_dice" value="Roll">
			</div>
		</div>
		<div class="row">
			<div class="col my-5 d-flex justify-content-center">
				<h1 id="gameresult"></h1>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/script.js" ></script>
</body>
</html>