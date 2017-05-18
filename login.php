
<?php

	include "includes/session.php";

	include "includes/db.php";


if(isset($_POST["user"])){
	$sql = "select * from users where username = '" . $_POST["user"] . "' AND password = '" . $_POST["pass"] . "';";
	echo $sql . " post</br>";
}else{
	$sql = "select * from users where username = '" . $_GET["user"] . "' AND password = '" . $_GET["pass"] . "';";
	echo $sql . "</br>";
}

	$result = mysqli_query($mysql, $sql);

	echo json_encode($result);
	echo mysqli_num_rows($result);

	if(mysqli_num_rows($result) >= 1){
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$_SESSION["user"] = $row["username"];
		$_SESSION["name"] = $row["name"];
		$_SESSION["team"] = $row["team"];
		$_SESSION["userid"] = $row["id"];
		header("Location: index.php");
	}
	//header("Location: .?page=login");/**/

?>
