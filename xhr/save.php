
<?php

	header("Access-Control-Allow-Origin: *");	
	
	include "../includes/session.php";

	echo json_encode($_POST);

	$array = json_decode($_POST["data"], true);

	echo json_encode($array);

	$u = $_GET["data"];

	include "../includes/db.php";
	$sql = "CREATE TABLE IF NOT EXISTS results (id INT PRIMARY KEY AUTO_INCREMENT, userid INT, pika INT, kest INT, hyppy INT, heitto INT, aika INT);";
	mysqli_query($mysql, $sql);

	$sql = "INSERT INTO results (userid, pika, kest, hyppy, heitto, aika) VALUES (" . $array["userid"] . "," . $array["data"][0][0] . "," . 
		$array["data"][0][1] . "," . $array["data"][0][2] . "," . $array["data"][0][3] . "," . time() . ");";
	mysqli_query($mysql, $sql);

	echo $sql;
?>
