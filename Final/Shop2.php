<!DOCTYPE html>

<html>

<head>

	<title> TAC Shop </title>
	<link rel = "icon" type = "image/logo.png" href = "images/logo.png" sizes = "1000x1000"/>
	
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = 'https://kit.fontawesome.com/a076d05399.js' crossorigin = 'anonymous'></script>
	
    <link rel = "stylesheet" href = "css/navbarstyle.css">
	<link rel = "stylesheet" href = "css/footerstyle.css">
	
	<!-- Shop -->
	<link rel = "stylesheet" href = "css/shopstyle.css">
	
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
				<input class = "form-control mr-sm-2" type = "search" placeholder = "Search" aria-label = "Search" style="width: 300px;">
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

<br>

<div class="container">
	
	<div class="search">
		
		<form class="search-form">
			<input type="text" placeholder="Related Search...">
			<input type="submit" value="Submit">
		</form>
	
	</div>
	
</div>

<br><br>

<div class="wrapper">
	
	<div class="sidebar">
	<div class="sidenav">
		
		<p style= "margin-left: 50px;"> SEARCH FILTER </p>
		<p> By Categories </p>
		
		<a style= "margin-left: 50px;" href="<?php echo 'Preorder.php'; ?>"> Pre-order </a>
		<a style= "margin-left: 50px;" href="<?php echo 'Instock.php'; ?>"> In Stock </a>
		<a style= "margin-left: 50px;" href="<?php echo 'Accessories.php'; ?>"> Accessories </a>
		<a style= "margin-left: 50px;" href="<?php echo 'Storemerc.php'; ?>"> Store Merchandise </a>

	<p>Status</p>
	
	<a style= "margin-left: 50px;" href="<?php echo 'Series.php'; ?>">Series</a>
	<a style= "margin-left: 50px;" href="<?php echo 'Figureline.php'; ?>">Figure Line</a>
	<a style= "margin-left: 50px;" href="<?php echo 'Soldout.php'; ?>">Sold Out</a>
	
	<p>Service and Offers</p>

	<a style= "margin-left: 50px;" href="<?php echo 'Discount.php'; ?>">With Discount</a>
	<a style= "margin-left: 50px;" href="<?php echo 'Voucher.php'; ?>">With Voucher Applied</a>
	<a style= "margin-left: 50px;" href="<?php echo 'Onsale.php'; ?>">On Sale</a>
	
	</div>
	</div>

	<div class="main">
		
		<h2>SORT BY</h2>
		<br>
  
			<a class="btn" style= "margin-left: 50px;" href="<?php echo 'Relevance.php'; ?>">Relevance</a>
			<a class="btn" style= "margin-left: 50px;" href="<?php echo 'Latest.php'; ?>">Latest</a>
			<a class="btn" style= "margin-left: 50px;" href="<?php echo 'Topsale.php'; ?>">Top Sale</a>

		<br><br>

	<div class="row">
		
		<div class="column">
		<div class="card">
		
			<div class="cardimage"><img src="images/product/27.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
    
		</div>
		</div>

		<div class="column">
		<div class="card">
			
			<div class="cardimage"><img src="images/product/28.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
  
		<div class="column">
		<div class="card">
			
			<div class="cardimage"><img src="images/product/29.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
		
		<div class="column">
		<div class="card">
			
			<div class="cardimage"><img src="images/product/30.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
	</div>
	
	<br><br>

	<div class="row">
		
		<div class="column">
		<div class="card">
			
		<div class="cardimage"><img src="images/product/31.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
		
		<div class="column">
		<div class="card">
			
		<div class="cardimage"><img src="images/product/32.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
		
		<div class="column">
		<div class="card">
			
		<div class="cardimage"><img src="images/product/33.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
		
		<div class="column">
		<div class="card">
			
		<div class="cardimage"><img src="images/product/34.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
	
	</div>
	
	<br><br>

	<div class="row">
		
		<div class="column">
		<div class="card">
			
		<div class="cardimage"><img src="images/product/35.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
		
		<div class="column">
		<div class="card">
			
		<div class="cardimage"><img src="images/product/36.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
		
		<div class="column">
		<div class="card">
			
		<div class="cardimage"><img src="images/product/37.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
		
		<div class="column">
		<div class="card">
			
		<div class="cardimage"><img src="images/product/38.png" alt=""></div>
			<p>Some text</p>
			<p>Soe text</p>
		
		</div>
		</div>
	
	</div>

	<div class="pagination"style="margin-left: 150px;">
	
		<a href="<?php echo 'Shop1.php'; ?>"><i class="fas fa-chevron-left"></i></a>
		<a href="<?php echo 'Shop1.php'; ?>">1</a>
		<a href="<?php echo 'Shop2.php'; ?>"style="color:#eb4d4b;">2</a>
		<a href="<?php echo 'Shop3.php'; ?>">3</a>
		
		<a href="<?php echo 'Shop3.php'; ?>"><i class="fas fa-chevron-right"></i></a>
	
	<div class="bar"></div>
	</div>
  
	</div>	

</div>


<div class="container">

	<div class="contentt">
	<div class="center">

		<h1> TORI MERCH <h1>
		
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit repudiandae sapiente explicabo aperiam veritatis adipisci, omnis debitis sint quaerat soluta necessitatibus, dolore accusamus aut neque ab? Non praesentium maxime perferendis!</p>
 
		<button type="button" style = "background-color: #7C7E82" class="btn btn-lg">SHOP NOW</button> 
	
	</div>
	</div>

</div>

<br><br>

<div class="container">
	
	<h2> FEATURED MERCH </h2>
	
	<br><br>
	
	<div class="row">
		
		<div class="column">
		<div class="card">
		
		<div class="cardimage"><img src="images/merch/MerchTshirt.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
	
		</div>
		</div>

		<div class="column">
		<div class="card">
		
		<div class="cardimage"><img src="images/merch/Tanjiro.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>

		<div class="column">
		<div class="card">
			
		<div class="cardimage"><img src="images/merch/Nezuko.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>

		<div class="column">
		<div class="card">
			
		<div class="cardimage"><img src="images/merch/MerchTshirt2.png" alt=""></div>
			<p>Some text</p>
			<p>Some text</p>
		
		</div>
		</div>
		</div>
</div>

<br><br>

<div class="container">

	<div class="contentt">
	<div class="center">
	
		<h1> VOUCHER <h1>
		<p>Shop and grab our offered vouchers for more discount and freebies</p>
		
		<button type="button" style = "background-color: #7C7E82" class="btn btn-lg">CHECK NOW</button>
	
	</div>
	</div>

</div>

<br><br>

<div class="center">

	<h3> Authenticity Guaranteed </h3>
	<h3>Why</h3>
	<h3>Tagline</h3>
	<h3>Go</h3>

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