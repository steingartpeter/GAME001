<!DOCTYPE html>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . "/GAME001/php/DBHandler.php";
	$abc123HASH = strtoupper(hash("SHA512", "abc123"));
?>
<html>
<head>

	<!-- STYLESHEETS -->
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/test.css">
	
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.0/angular.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/site.js"></script>
	
	<meta charset="UTF-8">

</head>
<body>
	<!--  NAVIGATION -->
	<div class="container">
	<nav class="navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Progress bar test</a>
			</div>
		
			<ul class="nav navbar-nav">
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menü 01<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">01-01</a></li>
						<li><a href="#">01-02</a></li>
						<li><a href="#">01-03</a></li>
						<li><a href="#">01-04</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menü 02<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">02-01</a></li>
						<li><a href="#">02-02</a></li>
						<li><a href="#">02-03</a></li>
						<li><a href="#">02-04</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menü 03<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">03-01</a></li>
						<li><a href="#">03-02</a></li>
						<li><a href="#">03-03</a></li>
						<li><a href="#">03-04</a></li>
						<li><a href="#">03-05</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menü 04<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">04-01</a></li>
						<li><a href="#">04-02</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	</div>
	<!--  END OF NAVIGATION -->
	
	<!-- ----------------------------------------------------------------------------------------------------------------------------- -->
	
	<!-- SITE CONTENT  -->
	<div class="container" id="wholePageDiv">
        
    <!-- Javscript generált progress bar -->
    <div class="row fstRow">
	<div class="col-md-12">
		<div id="barCntnr"></div>
		<button onclick="MALO0814_NS.crtPrgrBar('barCntnr','info','50','tstBar')">Teszt</button>
		<button onclick="MALO0814_NS.Tester001('tstBar')">Frisssítés</button>
        <button class="btn btn-tst">tesztGomb001</button><br/>
        <button class="btn btn-ui-normal" onclick="MALO0814_NS.moveMsgDiv('- 120 HP', 'flyRED')">Tesztgomb002</button>
        <p>
        	<?php 
        		$conType = "norm";
        		$DB = new DBHandler($conType);
        		$usr = "jozKovacs";
        		$ml = "kjozsi@tstmail.net";
        		$pwd = "an003722";
        		$respArr = array();
        		$respArr = $DB->insertUser($ml,$usr,$pwd);
        		if($respArr['FLG'] == "OK"){
        			$msg = "<p class=\"OKMsg\">";
        			$msg .= $respArr['DATA'];
        			$msg .= "</p>";
        			echo $msg;
        		}elseif($respArr['FLG'] == "NOK"){
        			$msg = "<p class=\"ERRMsg\">";
        			$msg .= $respArr['DATA'];
        			$msg .= "</p>";
        			echo $msg;
        		}else{
        			echo "<p class=\"ERRMsg\">Érdekes válasz, valami nem működik...:<br/><pre>";
        			print_r($respArr);
        			echo "</pre></p>";
        		}
        		echo "<p>HASH(abc123) = "  .  $abc123HASH . "<br/>";
        		//echo "QUERY: " . $resp . "</p>"; 
        	?>
        </p>
	</div>
	</div>
        
    <div class="row">
        <div class="col-md-12">
            <div id="imgDiv">
                <img class="defSiteImg" src="pix/dummy_badge_640.jpg">
            </div>
            
            
        </div>
    </div>
	<!-- Legegyszerűbb progress bar  -->
        <div class="row">
		<div class="col-sm-12">
			<p>Alap progress ba 52%-al</p>
			<div class="progress">
				<div class="progress-bar progress-bar-test" role="progressbar" 
					aria-valuenow="52%" 
					aria-avluemin="0" 
					aria-avluemax="100"
					style="width:52%"
					>52%</div>
			</div>
		</div>
	</div>
	<!-- END Legegyszerűbb progress bar  -->
	
    <!-- Pergamen Lap teszt -->
    <div class="row">
        <div class="col-md-12">
            <div class="pergamenSite">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/>
            </div>
        </div>
    </div>
        
	<!-- Tipusos progress bar  -->
	<div class="row">
		<div class="col-md-12">
		<p>Success</p>
		<div class="progress">
			<div class="progress-bar progress-bar-success" role="progressbar"
				aria-valuenow="31%"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width:31%"
			>31%</div>
		</div>
		
		<p>Info</p>
		<div class="progress">
			<div class="progress-bar progress-bar-info" role="progressbar"
				aria-valuenow="41%"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width:41%"
			>41%</div>
		</div>
		
		<p>Warning</p>
		<div class="progress">
			<div class="progress-bar progress-bar-warning" role="progressbar"
				aria-valuenow="51%"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width:51%"
			>51%</div>
		</div>
		
		<p>Danger</p>
		<div class="progress">
			<div class="progress-bar progress-bar-danger"
				aria-valuenow="61%"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width:61%" 
			>61%</div>
		</div>
		
		</div>
	</div>
	
	<!-- Csíkos progress bar-ok -->
	
	<div class="row">
		<div class="col-md-12">
			<h3>Csíkos progress bar-ok</h3>
			<div class="progress">
			<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
				aria-valuenow="77%"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width:77%"
			>77% Teljesítve! - Gratulálok</div>
			</div>
			
			<div class="progress">
			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
				aria-valuenow="78%"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width:78%"
			>78% Teljesítve! - Vigyázz</div>
			</div>
			
			<div class="progress">
			<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
				aria-valuenow="79%"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width:79%"
			>79% Teljesítve! - Vigyázz</div>
			</div>
			
			<div class="progress">
			<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
				aria-valuenow="89%"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width:89%"
			>89% Töltöttség! - Veszély</div>
			</div>
		</div>
	</div>
	<!-- END OF Csíkos progress bar-ok -->
	
	<div class="row">
		<div class="col-md-12">
			<h3>Csíkos + aktív progress bar-ok</h3>
			<div class="progress">
			<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
				aria-valuenow="31%"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width:31%"
			>31% Teljesítve! - Gratulálok</div>
			</div>
		</div>
	</div>
	
	</div>
	<!-- END OF SITE CONTENT  
	<div id="flyinDiv">Láthatatlan, mozgó felirat....</div>
-->
</body>
</html>
