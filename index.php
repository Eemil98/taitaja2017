<?php
	error_reporting(0);
	include "includes/session.php";
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--<meta http-equiv="refresh" content="10"><!-- -->
		<link rel="stylesheet" href="./includes/mainstyles.css">
		<script src="./includes/functions.js"></script>

		<!-- chart js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>

		<!-- font awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<!-- Material design -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body style="padding: 0; margin: 0;">
		<div class="visible-xs mdl-color--primary" style="min-height: 50px;">
			<div id="menubtn" class="mdl-layout__drawer-button mdl-color-text--white" style="background-color: transparent;">
				<i class="fa fa-bars fa-1x"></i>
				<div class="col-xs-9 col-sm-2 mdl-shadow--6dp" id="menunav">
					<?php
						include "includes/navigation.php";
					?>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="col-xs-9 col-sm-2 mdl-shadow--6dp hidden-xs">
			<?php
				include "includes/navigation.php";
				?>
			</div>
			<div class="col-xs-12 col-sm-10" id="mainarea">
			<?php
				if(!isset($_GET["page"])){
					header("Location: .?page=main");
				}
				/*
					Include page into main area
				*/
				$page = $_GET["page"];
				if(!file_exists("pages/" . $page . ".php")){
					include "pages/main.php";
				}else{
					include "pages/" . $page . ".php";
				}
			?>
		</div>
	</div>
	</body>
</html>