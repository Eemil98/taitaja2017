<div class="fullh follow col-xs-12 text-blue">
	<div class="row">
		<img src="./images/logo_sul_pysty.jpg" 
	alt="no image" class="img-responsive col-xs-10 col-xs-offset-1" style="margin-top: 25px;">
	</div>
	<p><b>Nimi: </b><?php if(!isset($_SESSION["user"])){echo $_SESSION["name"];} ?></p>
	<p style="border-bottom: 1px solid #000; margin-bottom: 20px;"><b>Tiimi/seura: </b><?php if(!isset($_SESSION["user"])){echo $_SESSION["team"];} ?></p>

		<div class="col-xs-10 text-blue menulink">
			<a href=".?page=main">
				Etusivu
			</a>
		</div>
		<div class="col-xs-10 text-blue menulink">
			<a href=".?page=skillcalculator">
				Laskuri
			</a>
		</div>
		<?php 

	if(!isset($_SESSION["user"])){ ?>
		<div class="col-xs-10 text-blue menulink">
			<a href=".?page=login">
				Kirjaudu
			</a>
		</div>
		<div class="col-xs-10 text-blue menulink">
			<a href=".?page=createaccount">
				Luo käyttäjä
			</a>
		</div>
		<?php }else{ ?>

		<div class="col-xs-10 text-blue menulink">
			<a href="logout.php">
				Kirjaudu ulos
			</a>
		</div>

		<?php

		} ?>
		<div class="col-xs-10 text-blue menulink">
			<a href=".?page=profile">
				Käyttäjä
			</a>
		</div>
		<div class="col-xs-10 text-blue menulink">
			<a href=".?page=tracker">
				Seuranta
			</a>
		</div>
		<div class="col-xs-10 text-blue menulink">
			<a href=".?page=settings">
				Asetukset
			</a>
		</div>

		<div style="position: absolute; bottom: 0px; left: 0px; width:100%">
			<img src="./images/logo_sul.jpg" style="width: 100%;">
		</div>

</div>