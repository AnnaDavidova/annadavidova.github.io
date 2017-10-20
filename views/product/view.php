<?php

include("./inc/header.php");
?>

	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Главная</a></li>
					<li class="active">Product</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
			  <div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							  <ul class="slides">
								<li data-thumb="./assest/images/geroy-ukraine-zvezda.jpg">
									<div class="thumb-image"> <img src="./assest/images/geroy-ukraine-zvezda.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
							  </ul>
						</div>
						<!-- FlexSlider -->
						<script src="./assest/js/imagezoom.js"></script>
						<script defer src="./assest/js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="./assest/css/flexslider.css" type="text/css" media="screen" />

						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					</div>	
	        <div class="col-md-7 single-top-right">
		     <div class="single-para simpleCart_shelfItem">
			   <h2>Орден "Герой Украины"</h2>
				 <div class="star-on">
					
				  <div class="clearfix"> 
				  </div>
				  </div>
					
				   <p>Присвоение звания Герой Украины осуществляется указом Президента Украины. Герою Украины вручается орден «Золотая Звезда» за совершение выдающегося геройского поступка или орден Державы — за выдающиеся трудовые достижения. ... В случае, если Герой Украины удостоен ордена «Золотая Звезда» и ордена Державы, их носят оба.</p>
															
		           </div>
	               </div>
	             <div class="clearfix">
	             </div>
		</div>
				
				<div class="latestproducts">
					<div class="product-one">
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.php" class="mask"><img class="img-responsive zoom-img" src="./assest/images/geroy ukrainu.jpg" alt="" /></a>
								<div class="product-bottom">
									<h3>Орден Державы</h3>
									
									
								</div>
								
							</div>
						</div>
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.php" class="mask"><img class="img-responsive zoom-img" src="./assest/images/p-2.png" alt="" /></a>
								<div class="product-bottom">
									<h3>Smart Watches</h3>
									<p>Explore Now</p>
									
								</div>
								
							</div>
						</div>
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.php" class="mask"><img class="img-responsive zoom-img" src="./assest/images/p-3.png" alt="" /></a>
								<div class="product-bottom">
									<h3>Smart Watches</h3>
									<p>Explore Now</p>
									
								</div>
								
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
	<!--information-starts-->
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Information</h3>
					<ul>
						<li><a href="#"><p>Specials</p></a></li>
						<li><a href="#"><p>New Products</p></a></li>
						<li><a href="#"><p>Our Stores</p></a></li>
						<li><a href="contact.html"><p>Contact Us</p></a></li>
						<li><a href="#"><p>Top Sellers</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>My Account</h3>
					<ul>
						<li><a href="account.html"><p>My Account</p></a></li>
						<li><a href="#"><p>My Credit slips</p></a></li>
						<li><a href="#"><p>My Merchandise returns</p></a></li>
						<li><a href="#"><p>My Personal info</p></a></li>
						<li><a href="#"><p>My Addresses</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Store Information</h3>
					<h4>The company name,
						<span>Lorem ipsum dolor,</span>
						Glasglow Dr 40 Fe 72.</h4>
					<h5>+955 123 4567</h5>	
					<p><a href="mailto:example@email.com">contact@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->

<?php

include("./inc/footer.php");
?>