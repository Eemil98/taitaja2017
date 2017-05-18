
<?php

	include "includes/db.php";

	$sql = "select * from results where userid = " . $_SESSION["userid"] . " order by aika DESC;";

	$result = mysqli_query($mysql, $sql);



	$rows = mysqli_num_rows($result);

	if($rows > 1){
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$arr = array($row["pika"], $row["kest"], $row["hyppy"], $row["heitto"]);
	}else{
		$arr = array(0,0,0,0);
	}

	echo "[" . $arr[0] . "," . $arr[1] . "," . $arr[2] . "," . $arr[3] . "]";
/**/
?>
