<?php

session_start();
	require_once 'login.php';
    $con = new mysqli($hn, $un, $pw, $db);
	if ($con->connect_error) die($con->connect_error);
	
	if(isset($_POST['addToCart'])){
		if(isset($_SESSION ["shopping_cart"]))
		{
			$item_array_id = array_column($_SESSION["shopping_cart"], "prod_id");
			if(!in_array($_GET["id"], $item_array_id))
			{
				$count = count($_SESSION["shopping_cart"]);
				$item_array = array(
				'prod_id'			=>	$_GET["id"],
				'prod_name'			=>	$_POST["hidden_name"],
				'prod_price'		=>	$_POST["hidden_price"],
				'prod_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			}
			else
			{
				echo '<script>alert("Item Already Added")</script>';
				echo '<script>window.location="single202009.php"</script>';
			}
		}
		else
		{
			$item_array = array(
				'prod_id'			=> $_GET["id"],
				'prod_name'			=> $_POST["hidden_name"],
				'prod_price'		=> $_POST["hidden_price"],
				'prod_quantity'		=> $_POST["quantity"]
			);
			$_SESSION["shopping_cart"][0] = $item_array;
		}
	}
	if(isset($_GET["action"]))
	{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["prod_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="single202009.php"</script>';
			}
		}
	}
	if($_GET["action"] == "order")
	{
		$columns = implode(", ",array_keys($item_array));
		$values  = implode(", ", $item_array);
		$sql = "INSERT INTO `Cart`(prod_id) VALUES ('$prod_id')";

		unset($_SESSION["shopping_cart"]);
			echo '<script>alert("Order Placed")</script>';
			echo '<script>window.location="single202009.php"</script>';
		
	}
}
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Swim Wear Product</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Swim Wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
            <!-- header -->
            
            <?php
            $query = "SELECT * FROM Product WHERE prod_id = '202009'";
            $result = $con->query($query);
            
            if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result))
				{
				?>
			<div class="content">
				<div class="single">
					<div class="container">
						<div class="single-grids">
							<div class="col-md-4 single-grid">		
								<div class="flexslider">
									<ul class="slides">
									<form method="post" action="single202009.php?action=add&id=<?php echo $row["prod_id"]; ?>">
										<li data-thumb="images/<?php echo $row['image']; ?>">
											<div class="thumb-image"> <img src="images/<?php echo $row['image']; ?>" data-imagezoom="true" class="img-responsive"> </div>
										</li>
									</ul>
								</div>
							</div>	
							<div class="col-md-4 single-grid simpleCart_shelfItem">		
								<h3><?php echo $row['prod_name']; ?></h3>
									<p><?php echo $row['descr']; ?></p>
									<div class="galry">
										<div class="prices">
											<h5 class="item_price">$<?php echo $row['price']; ?></h5>
										</div>
										<div class="clearfix"></div>
									</div>
										<p class="qty"> Qty :  </p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
									<div class="btn_form">
									<input type ="hidden" name="hidden_name" value="<?php echo $row['prod_name'] ?? '1'; ?>">
									<input type ="hidden" name="hidden_price" value="<?php echo $row['price'] ?? '1'; ?>">
									<input type="submit" class="item_add items" name="addToCart" value="ADD TO CART">
									</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
                </div>

				<?php
						}
						}
                        ?>
					</div>
		
			<div class="table-responsive">
				<table class="table table-bordered">
				<caption style="font-size:50px" >Order Details</caption>
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["prod_name"]; ?></td>
						<td><?php echo $values["prod_quantity"]; ?></td>
						<td>$ <?php echo $values["prod_price"]; ?></td>
						<td>$ <?php echo number_format($values["prod_quantity"] * $values["prod_price"], 2);?></td>
						<td><a href="single202009.php?action=delete&id=<?php echo $values["prod_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["prod_quantity"] * $values["prod_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="left">$ <?php echo number_format($total, 2); ?></td>
						<td><a href="single202009.php?action=order&id=<?php echo $values["prod_id"]; ?>"><span class="text-danger">Place Order</span></a></td>
					</tr>
					<?php
					}
					?>

				</table>
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

<?php

  $result->close();
  $con->close();
  
  function get_post($con, $var)
  {
    return $con->real_escape_string($_POST[$var]);
  }
?>