
<?php
	
	$db = "localdb";
	$dbuser = "azure";
	$dbpass = "password";
	$dbloc = "localhost:53189";

	foreach ($_SERVER as $key => $value) {
		if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
			continue;
		}

		$dbloc = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
		$db = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
		$dbuser = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
		$dbpass = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
	}
	$mysql = mysqli_connect($dbloc, $dbuser, $dbpass, $db);
/**/

/*

	
	$db = "sul";
	$dbuser = "root";
	$dbpass = "";
	$dbloc = "localhost";
	$mysql = mysqli_connect($dbloc, $dbuser, $dbpass, $db);
	/**/
?>
