<?php
if(isset($_POST['submit'])){
$to = "event.tedx@gmail.com";
$subject = $_POST['email'];
$txt = $_POST['message'];
$headers = $_POST['name'];

mail($to,$subject,$txt,$headers);
}
?> 
<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="ted,tedx,conference,talk,ietlucknow,lucknow,iet">
  
  <meta name="IET" content="tedxietlucknow.ac.in">

  <title>TedxIETLucknow</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>


<!-- Header Start --> 

<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-xs-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<a href="https://www.facebook.com/tedxietlucknow" target="_blank"><i class="ti-facebook"></i></a>
						
						<a href="https://instagram.com/tedxietlucknow/" target="_blank"><i class="ti-instagram"></i></a>
					</div>
				</div>
				<div class="col-xs-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<!--<a href="tel:+23-345-67890">Contact Us : <span>+91-8707504523 , +91-7007560980</span></a>-->
						<!-- <a href="mailto:support@gmail.com" ><i class="fa fa-envelope mr-2"></i><span>tedx@ietlucknow.ac.i</span></a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg " id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.html">
		  	TEDx<span>IETLucknow</span>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
			  <!---- <li class="nav-item"><a class="nav-link" href="speaker.html">Speakers</a></li>--->
			   <li class="nav-item"><a class="nav-link" href="partner.html">Partners</a></li>
			   <li class="nav-item dropdown">
					
			  </li>
                <li class="nav-item"><a class="nav-link" href="team.html">Team</a></li>
			   
			</ul>

			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
			  <a href="contact.html" class="btn btn-solid-border btn-round-full">Register</a>
			</form>
		  </div>
		</div>
	</nav>
</header>

<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
         
          <h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">
       
            <div class="col-lg-6 col-md-12 col-sm-12">
                 <form id="contact-form" class="contact__form" method="post" action="">
                 <!-- form message -->
                 <h5 class="text-center text-success"><?= $result; ?></h5>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                    
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <span class="text-color">Send a message</span>
                    <h3 class="text-md mb-4">Contact Form</h3>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" class="form-control" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <input class="btn btn-main"  type="submit" name="submit" value="send">
                </form>
            </div>

            <div class="col-lg-5 col-sm-12">
                <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                    <span class="text-muted">We are Professionals</span>
                    <h2 class="mb-5 mt-2">Don’t Hesitate to contact with us for any kind of information</h2>

                    <ul class="address-block list-unstyled">
                        <li>
                            <i class="ti-direction mr-3"></i>IET Lucknow, Sitapur Road, Lucknow, 226021
                        </li>
                        <li>
                            <i class="ti-email mr-3"></i>Email: tedx@ietlucknow.ac.in
                        </li>
                        <li>
                            <i class="ti-mobile mr-3"></i>Phone:+91-7007560980, +91-8707504523
                        </li>
                    </ul>

                    <ul class="social-icons list-inline mt-5">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/tedxietlucknow"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">TedxIETLucknow</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms of use</a></li>
						<li><a href="#">Legal & Privacy</a></li>
						<li><a href="#">Marketing/Advertisement</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">About</a></li>
						<li><a href="#">Partners</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
            <div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Social Media</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="https://www.facebook.com/tedxietlucknow"><i class="ti-facebook mr-2"></i>Facebook</a></li>
						<li><a href="https://instagram.com/tedxietlucknow"><i class="ti-instagram mr-2"></i>Instagram</a></li>
						
						
					</ul>
				</div>
			</div>
			
            
            
			<div class="col-lg-3 ml-auto col-sm-6">
				<div class="widget">
					<div class="logo mb-4">
						<h3><span>TEDx</span>IETLucknow</h3>
					</div>
					<h6><a href="tel:+91-8707504523" >+91-8707504523</a></h6>
					<a href="mailto:tedx@ietlucknow.ac.in"><span class="text-color h4">tedx@ietlucknow.ac.in</span></a>
                    
				</div>
			</div>
		</div>
		
		<div class="footer-btm pt-4">
			<div class="row">
				<div class="col-lg-8">
					<div class="copyright">
						This TEDx event is independently organized.Copyright ©TEDxIETLucknow. All Rights Reserved.
					</div>
                    
				</div>
				<!------<div class="col-lg-6 text-left text-lg-right">
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://www.facebook.com/tedxietlucknow"><i class="ti-facebook mr-2"></i>Facebook</a></li>
						<li class="list-inline-item"><a href="https://instagram.com/tedxietlucknow"><i class="ti-instagram mr-2"></i>Instagram</a></li>
						
					</ul>
				</div> ----->
			</div>
		</div>
	</div>
</footer>
   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- <script src="js/contact.js"></script> -->
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>

  </body>
  </html>