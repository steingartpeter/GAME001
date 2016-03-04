<!DOCTYPE html>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . "/GAME001/php/DBHandler.php";
	$abc123HASH = strtoupper(hash("SHA512", "abc123"));
?>
<head>
	<!-- STYLESHEETS -->
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="/GAME001/css/test.css">  -->
	<link rel="stylesheet" type="text/css" href="/GAME001/css/base.css">
	
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.0/angular.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/GAME001/js/site.js"></script>
	
	<meta charset="UTF-8">
</head>
<body>
	<!-- NAVIGÁCIÓ -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="/GAME001/index.php">Főoldal</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Főmneü<span class="caret"></a>
				<ul class="dropdown-menu">
					<li><a href="#">Belépés</a></li>
					<li><a href="#">Kilépés</a></li>
					<li><a href="#">Regisztráció</a></li>
				</ul>
			</li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Készletek<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="/GAME001/subpages/raktar.php">Raktár</a></li>
					<li><a href="#">Lenyiló 1.2</a></li>
					<li><a href="#">Lenyiló 1.3</a></li>
					<li><a href="#">Lenyiló 1.4</a></li>
				</ul>
			</li>
			<li><a href="#">Teszt3</a></li>
			<li><a href="#">Teszt4</a></li>
		</ul>
	</div>
	</nav>
	<!-- NAVIGÁCIÓ VÉGE -->
	
	<!-- JUMBOTRON -->
	<div class="container">
		<div class="jumbotron stdJumbo" id="plyrstatJumbo">
			<h1>OLDALCÍM</h1>
			<p>Jumbotron szövege...</p>
		</div>
	</div>
	<!-- JUMBOTRON VÉGE -->
	<div class="container">
		<div class="row">
			<div class="row well">
				<div class="col-md-6"><h1>Hős neve</h1></div>
				<div class="col-md-6"><h1>Hős jellemzői</h1></div>
			</div>
			<div class="col-md-6">
				<img id="plyrPrtrt" class="plyrPortrait" src="/GAME001/pix/heroPrtrs/frame7.png">
			</div>
			<div class="col-md-6">
				<div class="statDiv well">
					<div class="statName">Statnév</div>
					<div class="statIcon"><img class="statIcon64" src="/GAME001/pix/ui/icons/eletero_icon128.jpg"></div>
					<div class="statValue">Életerő: 150</div>
				</div>
				<div class="statDiv well">
					<div class="statName">Statnév</div>
					<div class="statIcon"><img class="statIcon64" src="/GAME001/pix/ui/icons/eletero_icon128.jpg"></div>
					<div class="statValue">Életerő: 150</div>
				</div>
				<div class="statDiv well">
					<div class="statName">Statnév</div>
					<div class="statIcon"><img class="statIcon64" src="/GAME001/pix/ui/icons/eletero_icon128.jpg"></div>
					<div class="statValue">Életerő: 150</div>
				</div>
				<div class="statDiv well">
					<div class="statName">Statnév</div>
					<div class="statIcon"><img class="statIcon64" src="/GAME001/pix/ui/icons/eletero_icon128.jpg"></div>
					<div class="statValue">Életerő: 150</div>
				</div>
				<div class="statDiv well">
					<div class="statName">Statnév</div>
					<div class="statIcon"><img class="statIcon64" src="/GAME001/pix/ui/icons/eletero_icon128.jpg"></div>
					<div class="statValue">Életerő: 150</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
