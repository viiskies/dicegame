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
	<!-- jQuery first, then Tether, then Bootstrap JS. -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/script.js" ></script>
</body>
</html>