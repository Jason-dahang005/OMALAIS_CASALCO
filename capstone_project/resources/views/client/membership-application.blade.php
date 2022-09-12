<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

	<title>CASALCO - Capitol Savings And Loan Cooperative</title>
	<!--
	TemplateMo 558 Klassy Cafe
	https://templatemo.com/tm-558-klassy-cafe
	-->
	<!-- Additional CSS Files -->
	<link rel="stylesheet" type="text/css" href="../klassy/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../klassy/css/font-awesome.css">
	<link rel="stylesheet" href="../klassy/css/templatemo-klassy-cafe.css">
	<link rel="stylesheet" href="../klassy/css/owl-carousel.css">
	<link rel="stylesheet" href="../klassy/css/lightbox.css">
</head>
<body>
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="index.html" class="logo">
							<img src="../klassy/images/klassy-logo.png" align="klassy cafe html template">
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						{{-- <ul class="nav">
							<li class="scroll-to-section"><a href="/" class="active">Home</a></li>
	
							<li class="submenu">
								<a href="javascript:;">Loans</a>
								<ul>
									<li><a href="/regular-loans">Regular Loans</a></li>
									<li><a href="/express-loans">Express Loans</a></li>
									<li><a href="/special-loans">Special Loans</a></li>
								</ul>
							</li>
	
							<li class="scroll-to-section"><a href="/about-us">About Us</a></li>
	
							<li class="scroll-to-section"><a href="/contact-us">Contact Us</a></li> 
									
						
	
							<li class="submenu">
								<a href="javascript:;">My Account</a>
								<ul>
									<li><a href="#">Register</a></li>
									<li><a href="#">Login</a></li>
								</ul>
							</li>
							
						</ul>         --}}
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>

	<div class="contact-form">
		<form id="contact" action="" method="post">
			<div class="row">
				<div class="col-lg-12">
						<h4>Contact Us</h4>
				</div>
				<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="name" type="text" id="name" placeholder="Your Name*" required="">
					</fieldset>
				</div>
				<div class="col-lg-6 col-sm-12">
					<fieldset>
					<input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
				</fieldset>
				</div>
				{{-- <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
					</fieldset>
				</div>
				<div class="col-md-6 col-sm-12">
					<fieldset>
						<select value="number-guests" name="number-guests" id="number-guests">
								<option value="number-guests">Number Of Guests</option>
								<option name="1" id="1">1</option>
								<option name="2" id="2">2</option>
								<option name="3" id="3">3</option>
								<option name="4" id="4">4</option>
								<option name="5" id="5">5</option>
								<option name="6" id="6">6</option>
								<option name="7" id="7">7</option>
								<option name="8" id="8">8</option>
								<option name="9" id="9">9</option>
								<option name="10" id="10">10</option>
								<option name="11" id="11">11</option>
								<option name="12" id="12">12</option>
						</select>
					</fieldset>
				</div>
				<div class="col-lg-6">
						<div id="filterDate2">    
							<div class="input-group date" data-date-format="dd/mm/yyyy">
								<input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
								<div class="input-group-addon" >
									<span class="glyphicon glyphicon-th"></span>
								</div>
							</div>
						</div>   
				</div>
				<div class="col-md-6 col-sm-12">
					<fieldset>
						<select value="time" name="time" id="time">
								<option value="time">Time</option>
								<option name="Breakfast" id="Breakfast">Breakfast</option>
								<option name="Lunch" id="Lunch">Lunch</option>
								<option name="Dinner" id="Dinner">Dinner</option>
						</select>
					</fieldset>
				</div> --}}
				<div class="col-lg-12">
					<fieldset>
						<textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
					</fieldset>
				</div>
				<div class="col-lg-12">
					<fieldset>
						<button type="submit" id="form-submit" class="main-button-icon">Send A Message</button>
					</fieldset>
				</div>
			</div>
		</form>
</div>


	<!-- jQuery -->
	<script src="../klassy/js/jquery-2.1.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="../klassy/js/popper.js"></script>
	<script src="../klassy/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="../klassy/js/owl-carousel.js"></script>
	<script src="../klassy/js/accordions.js"></script>
	<script src="../klassy/js/datepicker.js"></script>
	<script src="../klassy/js/scrollreveal.min.js"></script>
	<script src="../klassy/js/waypoints.min.js"></script>
	<script src="../klassy/js/jquery.counterup.min.js"></script>
	<script src="../klassy/js/imgfix.min.js"></script> 
	<script src="../klassy/js/slick.js"></script> 
	<script src="../klassy/js/lightbox.js"></script> 
	<script src="../klassy/js/isotope.js"></script> 
	
	<!-- Global Init -->
	<script src="../klassy/js/custom.js"></script>
	<script>

		$(function() {
			var selectedClass = "";
			$("p").click(function(){
			selectedClass = $(this).attr("data-rel");
			$("#portfolio").fadeTo(50, 0.1);
					$("#portfolio div").not("."+selectedClass).fadeOut();
			setTimeout(function() {
				$("."+selectedClass).fadeIn();
				$("#portfolio").fadeTo(50, 1);
			}, 500);
					
			});
		});

	</script>
</body>
</html>