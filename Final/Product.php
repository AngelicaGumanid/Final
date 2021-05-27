<!DOCTYPE html>

<html>

<head>
	
	<title> TAC Order Details </title>
	<link rel = "icon" type = "image/logo.png" href = "images/logo.png" sizes = "1000x1000"/>

	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = 'https://kit.fontawesome.com/a076d05399.js' crossorigin = 'anonymous'></script>
	
	<link rel = "stylesheet" href = "css/navbarstyle.css">
	<link rel = "stylesheet" href = "css/footerstyle.css">

    <link rel = "stylesheet" href = "css/product.css">
    <link rel = "stylesheet" href = "css/merchstyle.css">
    <link rel = "stylesheet" href = "js/product.js">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

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

    <!--PRODUCT-->

    <div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
                    <div class = "container" style = "text-align:left;">

		    		        
<h3 class="product-title">[Status]</h3>
<h1 class="product-title">PRODUCT NAME</h1>
<h3 class="product-title">Product Description</h3> 
<h3 class="product-title">Available Stocks</h3>
<h3 class="price">P00.00</h3>
<h3 class="price">Rating | Number of Ratings</h3>

<p class="product-description">keme keme keme keme keme keme keme keme keme keme keme keme</p>
<h3 class="Shop Vouchers">Shop Vouchers</h3>
<br>
<h3 class="Shop Vouchers">Shipping</h3>

<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="input-group">
<span class="input-group-btn">
<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
      <span class="glyphicon glyphicon-minus"></span>                                        </button>
        </span>
        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
        <span class="input-group-btn">
         <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
        <span class="glyphicon glyphicon-plus"></span>
            </button>
        </span>
    </div>
</div>
</div>
</div>

<p class="font-italic">You have reached the maximum quantity available for this item</p>


<br><br>





<p>
<a href="#" class="btn btn-info btn-lg">
<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
</a>
</p> 

<p>
<a href="#" class="btn btn-info btn-lg">
<span class="glyphicon glyphicon-heart"></span> Add to Wishlist
</a>
</p> 

<p>
<a href="#" class="btn btn-info btn-lg">
<span class="glyphicon glyphicon-shopping-cart"></span> Buy Now
</a>
</p> 

<p>
<a href="#" class="btn btn-info btn-lg">
<span class="glyphicon glyphicon-message"></span> Message
</a>
</p> 
<p>
<a href="#" class="btn btn-info btn-lg">
<span class="glyphicon glyphicon-message"></span> Need Help?
</a>
</p> 

<br><br>
<h1>Product Rating</h1>
<div class = "container">
<div class="btn-group">
<a href="#!" class="btn btn-primary ">All</a>
<a href="#!" class="btn btn-primary">5 Stars</a>
<a href="#!" class="btn btn-primary">4 Stars</a>
<a href="#!" class="btn btn-primary">3 Stars</a>
<a href="#!" class="btn btn-primary">2 Stars</a>
<a href="#!" class="btn btn-primary">1 Stars</a>
<a href="#!" class="btn btn-primary">No Rating</a>
</div>
</div>
<br><br>

<div class="container">
<div class="row">
<div class="review-block">
<div class="row">
<div class="col-sm-2">
<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">


</div>

<div class="col-sm-7">
<div class="review-block-name"><a href="#">Username|*U*******</a></div>
<div class="review-block-title">this was nice in buy</div>
<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
<img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
<div class="review-block-date">January 29, 2016<br/>1 day ago</div>

</div>
</div>
<hr/>
</div>
</div>
</div>

<h1>YOU MAY ALSO LIKE</h1>


<div class = "container">
<div class = "center">

<div class="row">
<div class="column">

<div class="card">

<img src="images/sample.PNG" class="card-img-top" alt="...">

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

<img src="images/sample.PNG" class="card-img-top" alt="...">

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

<img src="images/sample.PNG" class="card-img-top" alt="...">

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

<img src="images/sample.PNG" class="card-img-top" alt="...">

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
</div>
</div>

</div>
						</div>
					</div>
				</div>
			</div>
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

    <br><br>
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