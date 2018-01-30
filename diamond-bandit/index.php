<!DOCTYPE html>
<html>
	<head>
		<!-- Meta -->
		<title>Diamond Bandit</title>
		<meta name="Diamond Bandit" content="Get an Instant Appraisal for you Loose Diamond.">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">		
		<meta charset="UTF-8">	

		<!-- !!! Change this URL to PROD when deployed !!!  -->
		<meta property="og:image" content="http://scribble.studio/bandit/diamond-bandit/img/diamond-bandit-facebook.png"/>

		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
		<link rel="manifest" href="img/favicons/manifest.json">
		<link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">

		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style/css/style.css">
	</head>
	<body id="landing" class="d-flex align-items-center">
		<div class="container-fluid">
			<div id="main-section" class="container" >
				<div class="row">
					<div class="col-8 col-md-6 col-lg-4 mt-0 mb-1 mb-sm-2 mx-auto pb-3 p-md-5">
						<img src="img/diamond-bandit-logo.png" alt="Diamond Bandit Logo" class="w-100 mx-auto d-block img-responsive">
					</div>
				</div>
				<div class="row mt-2 mt-md-3 d-block">
					<div class="col-12 col-lg-10 mx-auto mt-1 mb-2 mb-md-4 pb-1 pb-md-4">
						<h2 class="text-center text-white">Get an Instant Appraisal for your</h2>
						<h1 class="text-center text-white pb-4 pb-md-5 mb-2 mb-md-5">Loose Diamond</h1>
						<h3 class="text-white text-center"> Insert your GIA Report No. to see what your diamond is worth!</h3>
					</div>
				</div>
					<div class="col-12 col-lg-8 mx-auto mb-5 mt-3 d-none d-md-block">
						<div class="input-group mb-1 mb-md-5 matchbox">
  							<input type="text" class="form-control b-primary border-right-0 mb-1 mb-md-5" placeholder="GIA Report No." aria-label="Recipient's username" aria-describedby="basic-addon2">
  							<div class="input-group-append">
   						 		<button class="btn btn-primary mb-1 mb-md-5" type="button">View Appraisal</button>
 						 	</div>
							<br />
						
						</div>
					</div>
					
					<div class="more-wrap text-center" style="margin-bottom:150px;">
						<button  id="top-anchor" rel="" class="tell-me-more text-center">Tell me more</button>
					</div>
							
					<div class="col-12 col-lg-8 mx-auto mt-md-3 d-block d-md-none matchbox">
						<div class="input-group mb-2">
  							<input type="text" class="form-control b-mobile" placeholder="GIA Report No." aria-label="Recipient's username" aria-describedby="basic-addon2">
  						</div>
   						 	<button class="input-group btn btn-mobile mb-md-5 px-auto" type="button">View Appraisal</button>
							
					</div>
			</div>
			
			<div  id="tell-me-more" class="container bg-white mt-5">
				<?php include 'inc/sample.php'; ?>
			</div>
			
			</div>
		</div>				
	</body>	
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	 <script src="js/main.js"></script>
</html>