<!DOCTYPE html>

<html>

<head>
	
	<title> TAC Merch </title>
	<link rel = "icon" type = "image/logo.png" href = "images/logo.png" sizes = "1000x1000"/>

	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = 'https://kit.fontawesome.com/a076d05399.js' crossorigin = 'anonymous'></script>
	
	<link rel = "stylesheet" href = "css/navbarstyle.css">
	<link rel = "stylesheet" href = "css/footerstyle.css">
	
	<!-- Merch -->
	
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/merchstyle.css">
  
</head>

<!-- Header -->
<header>

	<div id = "main">
		
		<div>
			<a class = "navbar-brand" href = "<?php echo 'Homepage.php'; ?>">
			<img src = "images/logo.png" width = "100px" height = "80px"></a>
		</div>
	
		<div>
			<form class = "form-inline my-2 my-sm-0">
				<input class = "form-control mr-sm-2" type = "search" placeholder = "Search" aria-label = "Search">
				<button class = "btn"><i class = "fas fa-search"></i></button>
			</form>  
		</div>		

		<div>
			<button class = "btn"><i class = "fas fa-comments"></i></button>
			<button class = "btn"><i class = "fas fa-heart"></i></button>
			<button class = "btn"><i class = "fas fa-cart-plus"></i></button>
		</div>  

		<div>
			<a  href = "<?php echo 'Login.php'; ?>" style = "color: #FFFFFF;"> Login </a>
			<a  href = "<?php echo 'Signup.php'; ?>" style = "color: #FFFFFF;"><button class = "btn"> Sign Up </a></button>
		</div>
	
	</div>

</header>

<body>

<!-- Navigation Bar -->

	<nav class = "navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
		
		<a class = "navbar-brand" href = "<?php echo 'Homepage.php'; ?>"> TORI ANIME COLLECTIBLES </a>
			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent"aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
				<span class = "navbar-toggler-icon"></span>
			</button>

		<div class = "collapse navbar-collapse" id = "navbarSupportedContent">
		<div class = "navbar-nav ml-auto">
			
			<a class = "nav-link" href = "<?php echo 'Homepage.php'; ?>"> Home <span class = "sr-only">(current)</span></a>
			<a class = "nav-link" href = "<?php echo 'Shop.php'; ?>"> Shop </a>
			<a class = "nav-link" href = "<?php echo 'About.php'; ?>"> About </a>
			<a class = "nav-link" href = "<?php echo 'Merch.php'; ?>"> Merch </a>
			<a class = "nav-link" href = "<?php echo 'Nau.php'; ?>"> News and Updates </a>
			<a class = "nav-link" href = "<?php echo 'Helpcenter.php'; ?>"> Help Center </a>
			
		</div>
		</div>
	
	</nav>

	<br><br><br>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		
		<ol class="carousel-indicators">
			
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		
		</ol>
		
		<div class="carousel-inner">
		<div class="carousel-item active">
      
			<img style = "height: 490px" class="d-block w-100" src="images/banner/bannerMerch1.png" alt="First slide">
		</div>
    
		<div class="carousel-item">
			
			<img style = "height: 490px" class="d-block w-100" src="images/banner/bannerMerch1.png" alt="Second slide">
		
		</div>
    
		<div class="carousel-item">
			
			<img style = "height: 490px" class="d-block w-100" src="images/banner/bannerMerch1.png" alt="Third slide">
		
		</div>
		
		</div>
  
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
  
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
	
	</div>

	<div class = "container">
	<div class = "center">
	
		<h1 class="margin">FEATURED MERCH</h1>
		
		<div class="row">
		<div class="column">
		
			<div class="card">
			
				<img src="images/merch/MerchTshirt.png" class="card-img-top" alt="...">
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>

		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/merch/Nezuko.png" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/merch/Tanjiro.png" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/merch/MerchTshirt2.png" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
		</div>
		
<br>

	<h1 class="margin">ACCESSORIRES</h1>

		<div class="row">
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>

		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
		</div>
		
<br><br>

	<h1 class="margin">INTERESTING</h1>
		
		<div class="row">
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>

		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
		</div>
		
<br>
	
	</div>
	
<br><br>

	<center>

	<!--To Shop-->

		<div class="container">
		<div class="contenttt">
		<div class="centerr">
	
			<h1> WANT MORE COLLECTIBLES <h1>
			<h2>VISIT OUR SHOP!</h2>
		
			<button type="button" style = "background-color: #7C7E82" class="btn btn-lg">CHECK NOW</button>
 
		</div>
		</div>
		</div>
	
		<br><br>

		<div class="container">
		<div class="contentttt">
		<div class="centerrr">

			<h3> DONT MISS OUT OUR <h3>
			<h3> OFFERED VOUCHER </h3>
			<h3> AND DISCOUNTS </h3>
	
		</div>
		</div>
		</div>

	</center>

	</div>
	</div>
	
<br><br><br>

<!--footer start-->
<footer>
	
	<div class="footer-wrap">
		<div class="container first_class">
		<div class="row">
			<div class="col-md-4 col-sm-6">
		
				<h3>Contact Us</h3>
				<p>Have any concern?</p>
	
			</div>
	
			<div class="col-md-4 col-sm-6">
		
				<form class="newsletter">
					<input type="text" placeholder="Email Us"> 
					<button class="newsletter_submit_btn" type="submit"><i class="fa fa-paper-plane"></i></button>  
				</form>
	
			</div>

			<div class="col-md-4 col-sm-6">
			<div class="col-md-12">
			<div class="standard_social_links">
		
			<div>
			
				<li class="round-btn btn-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li class="round-btn btn-linkedin"><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
				<li class="round-btn btn-twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
				<li class="round-btn btn-instagram"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
				<li class="round-btn btn-whatsapp"><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
				<li class="round-btn btn-envelop"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				</li>
			
			</div>
	
			</div>  
			</div>
		
			<div class="clearfix"></div>
			<div class="col-md-12"><h3 style="text-align: right;"> Stay Connected </h3></div>
		
			</div>
		</div>
		</div>
		
		<div class="second_class">
		<div class="container second_class_bdr">
		<div class="row">
			<div class="col-md-4 col-sm-6">
			<div class="footer-logo">
				
				<img src="images/logo.png" alt="logo">
			
			</div>
				
				<p> All Rights Reserved Copyright 2021 </p>
			
			</div>

			<div class="col-md-3 col-sm-6">
				<ul class="footer-links">
				
					<a href="<?php echo 'Homepage.php'; ?>">| Home</a><br>
					<a href="<?php echo 'Shop.php'; ?>">| Shop</a><br>
					<a style= "margin-left: 50px;" href="<?php echo 'Sitemap.php'; ?>">Site Map</a><br>
					<a style= "margin-left: 50px;" href="<?php echo 'Categories.php'; ?>">Categories</a><br>
					<a style= "margin-left: 50px;" href="<?php echo 'Termsandservices.php'; ?>">Terms and Service</a><br>
					<a style= "margin-left: 50px;" href="<?php echo 'Privacypolicies.php'; ?>">Privacy Policies</a><br>
					<a style= "margin-left: 50px;" href="<?php echo 'Helpcenter.php'; ?>">Help Center</a><br>
					<a href="<?php echo 'About.php'; ?>">| About</a><br>
					<a href="<?php echo 'Torimerch.php'; ?>">| Tori Merch</a><br>
					<a href="<?php echo 'Nau.php'; ?>">| News and Updates</a><br>
			
				</ul>
			</div>

			<div class="col-md-1 col-sm-6">
				
				<ul class="footer-category"></ul>
			
			<div class="clearfix"></div>
			</div>
			
			<div class="col-md-3 col-sm-6">
				
				<ul class="footer-links">
				
					<div class="container3">
					
						<p> Products are distributed BY: </p>
					
					<div class="logo2">
					
						<img src="images/logo.png" alt="logo">	</div>
						<p> Distributor Name </p>
						<p> Address </p>
				
					<div class="logo2"> <img src="images/logo.png" alt="logo">
					</div>
					
						<p> Distributor Name </p>
						<p> Address </p>
					
					</div>
				
				</ul>
			</div>
			
		</div>
		</div>
		</div>
		
	</div> 
	
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--footer end-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Font Awesome 5 links-->
<script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>

</body>
</html>