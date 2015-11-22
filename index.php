<?php

session_start();

if(!isset($_SESSION['adminname']) && !isset($_SESSION['adminpass']))
{
	header("location:admin.php");

}

else if(isset($_SESSION['adminname']) && isset($_SESSION['adminpass']))
{
     $message = "Hello ".$_SESSION['adminname']." !";
}

else 
{
	$message = "Error processing your request, please try logging in again from admin page.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Allcure Lifescience</title>
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"/>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 

	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-override.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/components.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/menubar.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/body.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/aboutus.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/products.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/home.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/contactus.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/hover-min.css"/>

</head>

<body ng-app="navapp" ng-controller="AppCtrl">
<!-- 				<nav class="navbar navbar-default navbar-fixed-top">
		      		<div class="container">
		        		<div class="navbar-header">
					          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					          </button>
					          <a class="navbar-brand" href="#">
					          <span class="logo-text">Allcure Lifescience</span>
					          <img alt="Allcure LifeSscience" src="assets/img/favicon.png" height="40px" width="40px" />
					          </a>
		        		</div>
		        		<div class="form-group"><input type="text" class="form-control" placeholder="Search" ng-model="searchKeyword"></div></div>
				        <div id="navbar" class="navbar-collapse collapse in">
				          <ul class="nav navbar-nav navbar-right">
				            <li class="active"><a href="#">Home</a></li>
				            <li><a href="#aboutus">About Us</a></li>
				            <li><a href="#products">Products</a></li>
				            <li><a href="#contactus">Contact Us</a></li>
				          </ul>
				        </div>
				    </div>
		    	</nav>
 -->

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <img class = "navbar-brand logo-img" alt="Allcure Lifescience" src="assets/img/favicon.png" height="40px" width="40px" />
      <a class="navbar-brand logo-text" href="#">Allcure Lifescience</a>
      
      
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form  id="searchform" class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="search" class="form-control" placeholder="Search" ng-model="keyword">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#/aboutus">About Us</a></li>
        <li><a href="#/products">Products</a></li>
        <li><a href="#/contactus">Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

		<!--==================================Menu===================================-->

		<!--==================================Body===================================-->

		<div class="body-outer">
			<div class="container" style="padding-top:4%">	
				<div class="body-container">
					<div class="col-md-12 col-sm-12 col-xs-12 pview" style="padding-bottom:50px;" ng-view></div>
				</div>
			</div>
		</div>

		<!--==================================Body===================================-->

		<!--==================================Footer===================================-->

		<div class="footer-outer">
			<div class="container">	
				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						  <img alt="Allcure LifeScience" src="assets/img/logo.png" height="45px" />
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="row">
							<div class="hidden-xs hidden-sm col-md-12 col-lg-12 center-block">
								<div class="pagelinks">
									<a href="#">Home</a> &nbsp / &nbsp
						            <a href="#aboutus">About Us</a> &nbsp / &nbsp
						            <a href="#products">Products</a> &nbsp / &nbsp
						            <a href="#contactus">Contact Us</a> &nbsp / &nbsp
						            <a href="">Admin</a>
								</div>						
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block">
								<div class="ksquare">
									Website Designed and Developed by <span class="ksq">KSquare Developers</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 publicity-block">
					<div class="media-icons" onclick="goToFacebook()"> <i class="fa fa-facebook-square icon-hov facebook"></i></div>
						<div class="media-icons" onclick="goToTwitter()"><i class="fa fa-twitter-square icon-hov twitter"></i></div>
						<div class="media-icons" onclick="goToGooglePlus()"><i class="fa fa-google-plus-square icon-hov googleplus"></i></div>
						<div class="media-icons" onclick="goToLinkedIn()"><i class="fa fa-linkedin-square icon-hov linkedin"></i></div>
					</div>

				</div>
			</div>
		</div>

		<!--==================================Footer===================================-->

	</div>
</body>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="http://stephband.info/jquery.event.move/js/jquery.event.move.js"></script>

<script src="assets/javascripts/scripts/jquery.event.swipe.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>			<!-- Angular JS CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28//angular-route.min.js"></script>	<!-- Angular routing sript -->
<script src="https://code.angularjs.org/1.0.3/angular-sanitize.js"></script>							<!-- Angular sanitize sript -->
<script src="assets/javascripts/app.js"></script>														<!--App js , all angular coding -->

<script src="assets/javascripts/scripts/script.js"></script>

<!-- route links  -->
<script src="assets/javascripts/controllers/controller.js"></script>
<script src="assets/javascripts/controllers/homecontroller.js"></script>
<script src="assets/javascripts/controllers/admincontroller.js"></script>
<script src="assets/javascripts/controllers/contactuscontroller.js"></script>
<script src="assets/javascripts/controllers/aboutuscontroller.js"></script>
<script src="assets/javascripts/controllers/productcontroller.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#searchform").hide();
		$(".ui-loader").hide();
		//$('div:jqmData(role="page")').attr({'data-url':'localhost/'});
	});

	function goToFacebook(){
		window.open('http://www.facebook.com','_blank');
	}
		function goToTwitter(){
		window.open('http://www.twitter.com','_blank');
	}
		function goToLinkedIn(){
		window.open('http://www.linkedin.com','_blank');
	}
	function goToGooglePlus(){
		window.open('http://plus.google.com/','_blank');
	}
	
</script>


</html>