<?php
	error_reporting(0);
	session_start();

	include "IndeedAPI.php";
	
	if($_SESSION["odl_class"]=="") $_SESSION["odl_class"]="local";
	
	if(($_GET["odl_from"]=="web")||($_GET["odl_from"]=="local")){
	  $_SESSION["odl_class"]=$_GET["odl_from"];
	}
	
	$class=array("local"=>"","web"=>"");
	$class[$_SESSION["odl_class"]]="class=\"active\"";  

	if($_SESSION["odl_class"]=="web"){
		/* ------------- INDEED --------------- */	
		$indeedAPI = new IndeedAPI( "6703735145249700" );
		$indeedAPI->setDefaultParams( array(
			'co' => 'it'
		) );

		// Pass a basic query
		// $output = $indeedAPI->query('web developer');
		// print_r($output);
		if($_SESSION["limit"]=="") $_SESSION["limit"]=10; 
		if($_SESSION["start"]=="") $_SESSION["start"]=0; 
		if($_SESSION["q"]==""){ $_SESSION["q"]="developer"; $q_placeholder="Professione, parole chiave o società"; } else {$q_placeholder="";}
		if($_SESSION["l"]==""){ $_SESSION["l"]="Venezia"; $l_placeholder="città, regione o codice postale";} else {$l_placeholder="";}
		if($_POST["limit"]!="") $_SESSION["limit"]=$_POST["limit"]+0;
		if($_POST["start"]!="") $_SESSION["start"]=$_POST["start"]+0;
		if($_POST["q"]!="") $_SESSION["q"]=$_POST["q"];
		if($_POST["l"]!="") $_SESSION["l"]=$_POST["l"];
		// print_r($_POST);
		// Pass in more options
		$output = $indeedAPI->query(array(
			'q' => ''.$_SESSION["q"].'',
			'l' => ''.$_SESSION["l"].'',
			'start' => $_SESSION["start"],
			'limit' => $_SESSION["limit"],
			'sort' => 'date'
			 
		));
		// print_r($output->results);
		
			$client = new IndeedAPI2("6703735145249700");
				$params = array(
					"jobkeys" => array($jobOpportunity->jobkey)
				);
				$results = $client->jobs($params);
		
		
		foreach($output->results as $jobOpportunity){
			
			
		
		$webListResult.="
		<br>
			<div class=\"panel panel-default\">
				<div class=\"panel-heading\">
					<h3 class=\"panel-title\"><b>".$jobOpportunity->jobtitle." <small style=\"color: #ffffff;\">(".$jobOpportunity->formattedRelativeTime.")</small></b></h3>
				</div>
				<div class=\"panel-body\">
					<h4>".strtoupper($jobOpportunity->company)."<br>". $jobOpportunity->formattedLocation."</h4><br>
					".$jobOpportunity->snippet."
					<br><br>
					 <a href=\"index.html?mode=detail&jobkey=".$jobOpportunity->jobkey."\" class=\"btn btn-info pull-left\" role=\"button\">Vedi Dettaglio Annuncio</a><a href=\"".$jobOpportunity->url."\" class=\"btn btn-default pull-right\" role=\"button\">Vedi Annuncio Originale</a>
				</div>
				
	
	
			</div>
		";
		
		}

	/* ------------- INDEED --------------- */		
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lavoro - Informatica sarà lei!</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Navigation -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(function () {
            $("#navigation_bar").load("../navigation_bar.html");
            $("#footer").load("../footer.html");
        });
    </script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
<div id="navigation_bar"></div>
<!--- Inserimento navbar ---->

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lavoro
                <small>Sottotitolo</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="../index.html">Home</a>
                </li>
                <li class="active">Lavoro</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
	<!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
			<form class="navbar-form navbar-left" role="search" method="POST">
			  <div class="form-group">
				<input id="q" name="q" type="text" class="form-control" placeholder="<?php echo $q_placeholder; ?>" value="<?php echo $_SESSION["q"];?>">
				<input id="l" name="l" type="text" class="form-control" placeholder="<?php echo $l_placeholder; ?>" value="<?php echo $_SESSION["l"];?>">
			  </div>
			  <button type="submit" class="btn btn-default">Cerca</button>
			</form>
		</div>
	</div>
	<!-- /.row -->
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
			<ul class="nav nav-tabs">
				<li role="presentation" <?php echo $class["local"]; ?>><a href="index.html?odl_from=local">Opportunità dalla nostra redazione</a></li>
				<li role="presentation" <?php echo $class["web"]; ?>><a href="index.html?odl_from=web">Opportunità dal web</a></li>
			</ul>
        </div>
    </div>
    <!-- /.row -->
	<!-- Content Row -->
	<div class="row">
        <div class="col-lg-12">		
			<?php echo $webListResult; ?>
	    </div>
	</div>	
	 <!-- /.row -->
	<!-- Content Row -->
	<div class="row">
        <div class="col-lg-12 text-center">		
			<select class="form-control">
			  <option>1</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
	    </div>
	</div>	
	 <!-- /.row -->	
	<br>
	<!-- .Share Icons -->
	<span class='st_sharethis_large pull-right' displayText='ShareThis'></span>
	<span class='st_facebook_large pull-right' displayText='Facebook'></span>
	<span class='st_twitter_large pull-right' displayText='Tweet'></span>
	<span class='st_linkedin_large pull-right' displayText='LinkedIn'></span>
	<span class='st_pinterest_large pull-right' displayText='Pinterest'></span>
	<span class='st_email_large pull-right' displayText='Email'></span>

	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ur-e18a4005-e3c7-d8a0-fb82-de08e68896d1", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	<!-- /.Share Icons -->

<br>	

	<hr>

</div>
<!-- /.container -->

<!-- Footer -->
<div id="footer"></div>
<!--- Inserimento navbar ---->

<!-- End Footer -->
	
<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

</body>

</html>