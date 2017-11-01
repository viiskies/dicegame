<?php 

$db_servername = "localhost";
$db_database = "dices";
$db_username = "root";
$db_password = "";

try {
	$conn = new PDO("mysql:host=$db_servername;dbname=$db_database", $db_username, $db_password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Unable to connect";
	// echo $e->getMessage();
	exit;
}