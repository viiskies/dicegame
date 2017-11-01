<?php
$login_alert = false;
session_start();

// after registration jump straight into page
if (isset($_SESSION['username'])) {
	$_POST['username'] = $_SESSION['username'];
	$_POST['password'] = $_SESSION['password'];
}

if (isset($_POST['username']) ) {

	$db_servername = "localhost";
	$db_database = "dices";
	$db_username = "root";
	$db_password = "";

	try {
		include("inc/connection.php");

		$sql = "SELECT * FROM users";

		$sql .= " WHERE username='" . $_POST['username'] . "'";
		$statement = $conn->query($sql);
		$response = $statement->fetch(PDO::FETCH_ASSOC);

		$conn = null;

	} catch(PDOException $e) { 
		echo $e->getMessage(); 
	}
	$hash = $response['password'];
	$password = $_POST['password'];

	if ( password_verify($password, $hash) && $_POST['password'] != "") {

		$_SESSION['username'] = $_POST['username'];
		$_SESSION['last_login'] = date("Y-m-d H:m:s");

		// setcookie("sausainis_username", $response['username'], time() + (60*60*24), "/");

	} else {
		$login_alert = true;
	}
	

} elseif (isset($_POST['logout'])) {

	session_destroy();
	$_SESSION = null;
} 

if(isset($_SESSION['username']) && $_SESSION['username'] != "") {
	header("Location: index.php");
} else {
	// echo "You are guest";
}
$guest = true;
$page_title = 'Dices Login';
include("inc/header.php"); ?>

	<div class="container">

		<form class="form-signin" method="POST">
			<?php if($login_alert){ ?>
			<div class="alert alert-danger my-5" role="alert">
				Login Failed
			</div>
			<?php } ?>

			<h2 class="form-signin-heading my-3">Please sign in</h2>

			<label for="username" class="sr-only">Username</label>
			<input type="text" id="username" name="username" class="form-control" placeholder="Email username" autofocus="">

			<label for="password" class="sr-only">Password</label>
			<input type="password" id="password" class="form-control" name="password" placeholder="Password">

			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<a class="btn btn-lg btn-success btn-block" href="register.php">Register</a>
		</form>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>