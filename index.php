<!DOCTYPE html>
<?php 
?>
<head>
	<!-- STYLESHEETS -->
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/base.css">
	
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.0/angular.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/site.js"></script>
    <script type="text/javascript" src="js/ui.js"></script>
	
	<meta charset="UTF-8">
</head>
<body>
	<div class="container">
	<!-- NAVIGÁCIÓ -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Gyűjtögető</a>
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
	<div class="jumbotron" id="indexJumbo">
		<h1>OLDALCÍM</h1>
		<p>Jumbotron szövege...</p>
	</div>
	</div>
	<!-- JUMBOTRON VÉGE -->
	
	<!-- TANULÓ ADATAI -->
	<div class="container well">
	<div class="row fstRow">
		<div class="col-md-6">
			<div class="tantargy-leiras">
                <h2>Tantárgy neve</h2>
                <div class="tantargy-statisztika">
                    <table class="table table-striped table-bordered">
                        <tr><th>Megnevezés</th><th>Érték</th></tr>
                        <tr><td>Jelenlegi fokozat</td><td>Kopasz</td></tr>
                        <tr><td>Következő fokozat</td><td>Öreg</td></tr>
                        <tr><td>Tanulással töltött összes idő:</td><td>21:45</td></tr>
                        <tr><td>Haladás:</td><td>
                            <div class="progress">
                              <div id="tantargy-prgbr" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="33.1"
                              aria-valuemin="0" aria-valuemax="100" style="width:33.1%">33.1%
                              </div>
                            </div>
                            </td></tr>
                    </table>
                </div>
            </div>
		</div>
        <div class="col-md-6">
			<div id="badge-cimek">
                <h3>Mostanában megszerzett kitüntetések</h3>
                <div id="badge-kontener">
                    <div class="one-badge">
                        <span><img class="badge-std-img" src="pix/dummy_badge_640.png"/></span> Gratuláunk, kémiából elérted az "ORBÁNVIKTOR" szintet.
                    </div>    
                    <div class="one-badge">
                        <span><img class="badge-std-img" src="pix/dummy_badge_640.png"/></span> Gratuláunk, kémiából elérted az "ORBÁNVIKTOR" szintet.
                    </div>
                    <div class="one-badge">
                        <span><img class="badge-std-img" src="pix/dummy_badge_640.png"/></span> Gratuláunk, kémiából elérted az "ORBÁNVIKTOR" szintet.
                    </div>
                    </div>
                </div>
            </div> 
		</div>
	</div>
    <div class="row scndRow">
        <div class="col-lg-12">
            <div id="ajax-Test-Result">
            </div>
        </div>
    </div>
	</div>
	<!-- TANULÓ ADATAI VÉGE -->
	</div>
</body>
