<?php
	require_once 'login.php';
    $con = new mysqli($hn, $un, $pw, $db);
	if ($con->connect_error) die($con->connect_error);
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(isset($_POST['delete'])){
			//addToCart
			$deletedrecord = $Cart->deleteCart($_POST['item_id']);
		}
	}
?>
<!DOCTYPE HTML>
<html>
	<head><title>Sunwear Checkout</title>
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
										<a href="checkout.html">
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

		<!-- checkout -->
		<div class="content">
			<div class="cart-items">
				<div class="container">
					<h2>My Shopping Bag</h2>
					
					<?php
					$total = 0;
                    if (isset($_SESSION['cart'])){
                        $prod_id = array_column($_SESSION['cart'], 'prod_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($prod_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['image'], $row['prod_name'],$row['price'], $row['prod_id']);
                                    $total = $total + (int)$row['price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>
				<div class="clearfix"></div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
							
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Total</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>$<?php echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>$<?php
                            echo $total;
                            ?></h6>
                    </div>
                </div>
            </div>
						</div>
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
								<li><a href="contact.html">Contact Us</a></li>
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