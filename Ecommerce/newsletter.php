<!DOCTYPE HTML>
<html>
	<head><title>Sunwear Newsletter Sign Up</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/owl.carousel.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script src="js/jquery.min.js"></script>
		
		<!-- cart -->
		<script src="js/simpleCart.min.js"> </script>
		<!-- cart -->
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
		<script src="js/imagezoom.js"></script>
		
		<!-- FlexSlider -->
		<script defer src="js/jquery.flexslider.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		
		<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
		</script>
	</head>
	<body>
	<!--header-->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="top-right">
					<ul>
							<li>
								<div class="cart box_1">
									<a href="checkout.php">
										<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
									</a>
									<p>
										<a href="javascript:;" class="simpleCart_empty">Empty cart</a>
									</p>
								</div>
							</li>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<!--/.content-->
				<div class="content white">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1 class="navbar-brand"><a  href="index.php">Sunwear</a></h1>
						</div>
						<!--/.navbar-header-->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li>
									<a href="index.php">Home</a>
								</li>
								<!--Men dropdown list-->
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-1">
											<div class="row">
												<div class="col-sm-4">
													<ul class="multi-column-dropdown">
															<li><a class="list" href="productsM.php">Men</a></li>
															<li><a class="list1" href="shorts.php">Shorts</a></li>
															<li><a class="list1" href="speedo.php">Speedos</a></li>
															<li><a class="list1" href="wetsuit.php">Wetsuits</a></li>
														</ul>
													</div>
												</div>
											</ul>
										</li>
	
										<!--Women dropdown list-->
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <b class="caret"></b></a>
											<ul class="dropdown-menu multi-column columns-1">
												<div class="row">
													<div class="col-sm-4">
														<ul class="multi-column-dropdown">
															<li><a class="list" href="productsW.php">Women</a></li>
															<li><a class="list1" href="wtops.php">Tops</a></li>
															<li><a class="list1" href="wbottoms.php">Bottoms</a></li>
															<li><a class="list1" href="onepiece.php">One Piece</a></li>
													</ul>
												</div>
											</div>
										</ul>
									</li>
						
								<li><a href="contact.php">Contact</a></li>
								<li><a href="newsletter.php">Newsletter Sign Up</a></li>
							</ul>
						</div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
			   
			</div>
			<!--header-->
<!--newsletter-->
<div class="content">
	<div class="main-1">
		<div class="container">
			<div class="contact">
				<h2>Newsletter Sign Up</h2>
			</br>
		</br>
	</br>
	<script>
		function clickAlert(){
			alert("You've successfully subscribed!");
		}
	</script>
			   <div class="account_grid">
			   <div class="col-md-6 login-left">
			   </br>
				<h3>DON'T MISS OUT</h3>
				<p>Be the first to know about our amazing deals </br> and latest releases!</p>
			   </div>
			   <div class="col-md-6 login-right">
				   
				<form action="Newsletter-signup.php" method="post"> 
					<p> 
					<label>First Name:</label> 
					<input type="text" name="firstname" id="firstname"/><br><br> 
					<label>Last Name:</label> 
					<input type="text" name="lastname" id="lastname"/><br><br> 
					<label>Email:</label> 
					<input type="text" name="email" id="email"/><br> 
					<div>
					<input type="submit" onclick="clickAlert()" name=submit value="Submit"/> 
					</form> 
				</div>
			   <div class="clearfix"> </div>
			 </div>
		   </div>
		   </div>
	</div>
	</div>
<!-- newsletter -->

	 <div class="clearfix"></div>
	 </div>
</div>
</div>
<!--footer-->
			<div class="footer-section">
					<div class="container">
						<div class="footer-grids">
							<div class="col-md-2 footer-grid">
									<h4>order & returns</h4>
									<ul>
										<li><a href="#">Order Status</a></li>
										<li><a href="#">Shipping Policy</a></li>
										<li><a href="#">Return Policy</a></li>
									</ul>
						</div>
							<div class="col-md-2 footer-grid">
							<h4>service</h4>
							<ul>
								<li><a href="#">Support</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Warranty</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
							</div>
							<div class="col-md-2 footer-grid">
		
							</div>
							<div class="col-md-2 footer-grid">
		
							</div>
							<div class="col-md-4 footer-grid1">
							<div class="social-icons">
								<a href="https://www.instagram.com/" target="_blank"><i class="icon"></i></a>
								<a href="https://www.facebook.com/" target="_blank"><i class="icon1"></i></a>
								<a href="https://twitter.com/" target="_blank"><i class="icon2"></i></a>
							</div>
						<p>Copyright &copy; 2020 Sunwear. All rights reserved | Design by Michelle Hua & Hannah Stam</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--footer-->
	</body>
</html>