<!DOCTYPE html>

<html>

<head>
	
	<title> TAC Help Center </title>
	<link rel = "icon" type = "image/logo.png" href = "images/logo.png" sizes = "1000x1000"/>

	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = 'https://kit.fontawesome.com/a076d05399.js' crossorigin = 'anonymous'></script>
	
	<link rel = "stylesheet" href = "css/navbarstyle.css">
	<link rel = "stylesheet" href = "css/footerstyle.css">
	<link rel = "stylesheet" href = "css/helpcenterstyle.css">

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
		<div class = "navbar-nav mr-auto">
			
			<a class = "nav-link" href = "<?php echo 'Homepage.php'; ?>"> Home <span class = "sr-only">(current)</span></a>
			<a class = "nav-link" href = "<?php echo 'Shop.php'; ?>"> Shop </a>
			<a class = "nav-link" href = "<?php echo 'About.php'; ?>"> About </a>
			<a class = "nav-link" href = "<?php echo 'Merch.php'; ?>"> Merch </a>
			<a class = "nav-link" href = "<?php echo 'Nau.php'; ?>"> News and Updates </a>
			<a class = "nav-link" href = "<?php echo 'Helpcenter.php'; ?>"> Help Center </a>
			
		</div>
		</div>
	
	</nav>
	
	<div class="wrapper">
	
	<div class="sidebar">
	<div class="sidenav">
	
		<b>
			<a href="<?php echo 'About.php'; ?>"> About</a><br>
			<a href="<?php echo 'Letterfounder.php'; ?>"> Letter from the Founder </a><br>
			<a href="<?php echo 'Termsandpolicy.php'; ?>"> Terms and Policy </a><br>
			<a href="<?php echo 'Faq.php'; ?>"> FAQ </a><br>
			<a href="<?php echo 'Contactus.php'; ?>"> Contact Us </a><br>
			<a href="<?php echo 'Advertise.php'; ?>"> Advertise </a><br>
			<a href="<?php echo 'Bussinesspartner.php'; ?>"> Our Businesss Partners </a><br>
			<a href="<?php echo 'Iconandbanner.php'; ?>"> Icon and Banner </a><br>
			
		</b>
		
	</div>
	</div>

	<div class="main">
	
		
    <hr class="line">
          
          <div class="contact">
          
              <h3>CONTACT US</h3>
              
              <p>Important Notice</p> 
              
              <p>Keme keme keme keme keme keme keme keme keme keme keme keme keme Keme keme keme keme keme keme keme keme keme keme keme keme keme Keme keme keme keme keme keme keme keme keme keme keme keme keme Keme keme keme keme keme keme keme keme keme keme keme keme keme Keme keme keme keme keme keme keme keme keme keme keme keme keme</p>
              
              <p>1. Keme keme keme keme keme keme</p> 
          
              <p>2. Keme keme keme keme keme keme</p> 
  
              <h4>Do You Have Any Concerns?</h4>
          
              <p>Please send us your messages, response, and feedback to further improve our service. Thank you!!!</p>
              
              <form action="/action_page.php">
                  
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your first name.." style=" width:400px;">
				 	 <br>
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lastname" placeholder="Your last name.."style=" width:400px;">
					<br>
                  <label for="subject">Message</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px; width:1000px;"></textarea>
  
                  <input type="submit" value="Submit">
              
              </form>
          </div>
		  
	
			
	</div>
	
	</div>



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