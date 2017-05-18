
<?php

	include "includes/session.php";

	$u = $_POST["username"];
	$p = $_POST["password"];

	include "includes/db.php";
	$sql = "CREATE TABLE IF NOT EXISTS users (id INT PRIMARY KEY AUTO_INCREMENT, username VARCHAR(255), password VARCHAR(255), name VARCHAR(255), team VARCHAR(255));";
	mysqli_query($mysql, $sql);

	$sql = "INSERT INTO users (username, password, name, team) VALUES ('" . $u . "', '" . $p . "', 'not set', 'not set');";
	mysqli_query($mysql, $sql);

	header("Location: login.php?user=" . $u . "&&pass=" . $p);
/*
	$_SESSION["user"] = "username";
	$_SESSION["name"] = "not set";
	$_SESSION["team"] = "not set";

	header("Location: index.php");
/**/
?>
