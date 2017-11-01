<?php

if(isset($_POST['name']) && $_POST['name'] != "" && $_POST['password'] != "" && $_POST['repeatPassword'] != "") {

	try {
		include("inc/connection.php");

		$sqlq = "SELECT * FROM users WHERE username='" . $_POST['username'] . "'";
		$statement = $conn->query($sqlq);
		$response = $statement->fetch(PDO::FETCH_ASSOC);

		if(empty($response)) {
			if ($_POST['password'] == $_POST['repeatPassword']) {

				$sql = $conn->prepare("INSERT INTO users (name, username, password) VALUES (:name, :username, :password)");

				$sql->bindParam(':name', $_POST['name']);
				$sql->bindParam(':username', $_POST['username']);
				$sql->bindParam(':password', $password);

				// $name = $_POST['name'];
				// $username = $_POST['username'];
				$password = password_hash($_POST["password"], PASSWORD_DEFAULT); 

				$sql->execute();
				session_start();

				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = $password;

				$response['message'] = ['type' => 'success','body' => 'User was added'];
				$conn = null;
				header("Location: login.php");
			} else {
				$response['message'] = ['type' => 'danger', 'body' => 'Passwords don\'t match.'];
				$conn = null;
			}

		} else {
			$response['message'] = ['type' => 'danger', 'body' => 'This username is already registered. Choose another.'];
			$conn = null;
		}

	} catch(PDOException $e) {
		$response['message'] = ['type' => 'danger','body' => $e->getMessage()];
	}
} else {
	$response['message'] = ['type' => 'warning','body' => 'No user data to submit'];
} 


$guest = true;
$page_title = 'Dices Registration';
include("inc/header.php"); ?>

	<div class="container">
		<form class="form-signin" method="POST">
			<?php if(isset($response['message']) && $response['message']['type'] != 'warning'){ ?>
			<div class="alert alert-danger my-5" role="alert">
				<?php echo $response['message']['body']; ?>
			</div>
			<?php } ?>

			<h2 class="form-signin-heading">Please register</h2>

			<label for="name" class="sr-only">Name</label>
			<input type="text" id="name" name="name" class="form-control" placeholder="Enter name"  autofocus="">

			<label for="username" class="sr-only">Username</label>
			<input type="text" id="username" name="username" class="form-control" placeholder="Enter username"  autofocus="">

			<label for="password" class="sr-only">Password</label>
			<input type="password" id="password" class="form-control" name="password" placeholder="Password" >      

			<label for="repeatPassword" class="sr-only">Repeat password</label>
			<input type="password" id="repeatPassword" class="form-control" name="repeatPassword" placeholder="Repeat a password" >

			<input type="submit" name="register" value="Register" class="btn btn-lg btn-success btn-block">
			<a class="btn btn-lg btn-primary btn-block" href="login.php">Back to login</a>

		</form>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>