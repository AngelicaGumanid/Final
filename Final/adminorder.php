<!DOCTYPE html>

<html>

<head>
	
	<title> TAC Admin Order </title>
	<link rel = "icon" type = "image/logo.png" href = "images/logo.png" sizes = "1000x1000"/>

	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = 'https://kit.fontawesome.com/a076d05399.js' crossorigin = 'anonymous'></script>
	
	<link rel = "stylesheet" href = "css/navbarstyle.css">
	<link rel = "stylesheet" href = "css/footerstyle.css">

	<link rel = "stylesheet" href = "css/homepagestyle.css">
<!-- ADMIN ORDER -->
	<link rel = "stylesheet" href = "css/sidebarstyle.css">
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


<!--Start-->
<div class="row">
		<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin</h3>
            </div>
            <ul>
                <li>
                    <a href="<?php echo 'adminorder.php'; ?>"style="color:#7386D5;background: #fff;">Orders</a>
                </li>
                <li>
                    <a href="<?php echo 'adminproduct.php'; ?>">Products</a>
                </li>
            </ul>
        </nav>
<div id="content">
<div class="container-fluid">





<!-- DASHBOARD -->
<div class="container">
<div class="top">
<br><br><br>
        <div class="row">
            <div class="col-sm-11 mt-5">
			<button type="button" id="sidebarCollapse" class="btn btn-info">
					<i class="fas fa-align-left"></i>
					<span></span>
				</button>
                <h1>Dashboard</h1>  
                <hr>
            </div>
            <div class="col-sm-1 mt-5">
                <!-- <i class="fa fa-bell" aria-hidden="true"></i>
                <i class="fa fa-user" aria-hidden="true"></i> -->
            </div>
        </div>
    </div>
<div class="containerhot" style="margin: 50px; margin-left:80px;">
<div class="row">
	<div class="card" style="width: 15rem; height:150px;">
	<div class="top">
		<div class="card-body">
		<div class="col-sm-11 ">
			<h6 class="card-title text-muted">Today's Orders</h6>
			<h6 class="card-subtitle">2</h6>
		</div>
		</div>
		<div class="iconicon" style="float: right;">
		<div class="col-sm-1 ">
			<i class="fa fa-shopping-cart" style="font-size:36px"></i>
        </div>
		</div>
	</div>
	</div>
	<div class="card" style="width: 15rem; height:150px;margin-left:10px;">
	<div class="top">
		<div class="card-body">
		<div class="col-sm-11 ">
			<h6 class="card-title text-muted">Today's Earnings</h6>
			<h6 class="card-subtitle ">₱2000.00</h6>
		</div>
		</div>
		<div class="iconicon" style="float: right;">
		<div class="col-sm-1 ">
			<i class="fa fa-coins" style="font-size:36px"></i>
        </div>
		</div>
	</div>
	</div>
	<div class="card" style="width: 15rem; height:150px; margin-left:10px;">
	<div class="top">
		<div class="card-body">
		<div class="col-sm-11 ">
			<h6 class="card-title text-muted">Total Accounts</h6>
			<h6 class="card-subtitle ">20</h6>
		</div>
		</div>
		<div class="iconicon" style="float: right;">
		<div class="col-sm-1 ">
			<i class="fa fa-users" style="font-size:36px"></i>
        </div>
		</div>
	</div>
	</div>
	<div class="card" style="width: 15rem; height:150px; margin-left:10px;">
	<div class="top">
		<div class="card-body">
		<div class="col-sm-11 ">
			<h6 class="card-title text-muted">Total Products</h6>
			<h6 class="card-subtitle ">40</h6>
		</div>
		</div>
		<div class="iconicon" style="float: right;">
		<div class="col-sm-1 ">
			<i class="fa fa-dropbox" style="font-size:36px"></i>
        </div>
		</div>
	</div>
	</div>
</div>
</div>
</div>
<!-- TODAYS TRANSACTION -->
<div class="container">
    <div class="top">
        <div class="row">
            <div class="col-sm-11 mt-5">
                <h1>Today's Transaction</h1>  
                <hr>
            </div>
            <div class="col-sm-1 mt-5">
                <!-- <i class="fa fa-bell" aria-hidden="true"></i>
                <i class="fa fa-user" aria-hidden="true"></i> -->
            </div>
        </div>
    </div>
<br>
	<div class="card">
	<table class="table table-hover shopping-cart-wrap">
	<thead class="text-muted">
		<tr>
		<th scope="col" width="10">ID</th>
  		<th scope="col" width="370">Product Name</th>
		<th scope="col" width="160">Date</th>
  		<!-- <th scope="col" width="270">Address</th> -->
		<th scope="col" width="200">Price</th>
		<th scope="col" width="120">Quantity</th>
		<th scope="col" width="200">Total</th>
  		
        <th scope="col" width="280">Email</th>
  		<th scope="col" width="200" class="text-right">Action</th>
		</tr>
	</thead>

	<tbody>
	<tr>
	<td>
	<!-- Default checkbox -->
	<div class="form-check" style = "margin-top:30px">
        <span class="id">#1</span>
	</div>
	<!-- End Default checkbox -->
	</td>
	<td>
		<div class="media">
			<!--Product Name-->	
			<div>
				<h6 class="title text-truncate"><img src="..." alt="" style="width: 60px; height:60px;">Product Name</h6>
			</div>
			<!--Product Name-->	
		</div> 
		</td>
		<td> 
		<div>
         <div class="def-number-input number-input safari_only mb-0 w-100">
		 	<!--Date-->	
		 	<div class="ml-0 mt-1">
				<small class="text-muted font-italic">mm/dd/yy</small> 
				</div>
            </div>
			<!--Date-->	
    </div>
	</div>
		</td>
        <td> 
		<div>
         <div class="def-number-input number-input safari_only mb-0 w-100">
			<!--Price-->
			<div class="price-wrap"> 
				<var class="price">PHP 00.00</var> 
				<br>
				<small class="text-muted">(PHP00.00 each)</small> 
			</div>
			<!--Price-->
    </div>
	</div>
		</td>
		<td> 
		<!--Quantity-->
			<div>
				<h6 class="title text-center">1</h6>				
			</div>
		<!--Quantity-->
		</td>
        <td> 
		<div>
         <div class="def-number-input number-input safari_only mb-0 w-100">
		 	<!--Total-->
				<div class="price-wrap"> 
					<var class="price">PHP 00.00</var> 
					<br>
					<small class="text-muted">(PHP00.00 each)</small> 
				</div>
			<!--Total-->
            </div>
    </div>
	</div>
		</td>
		<td class="text">
			<!--Email-->
			<div>
				<h6 class="title">example@gmail.com</h6>				
			</div>
			<!--Email-->
		</td>
		<td class="text-right">
			<!--Action-->
			<a title="Remove Product" href="" class="btn btn-outline-danger"> × Remove</a>
			<!--Action-->
		</td>
		</tr>	
</tbody>

<tbody>
<tr>
	<td>
	<!-- Default checkbox -->
	<div class="form-check" style = "margin-top:30px">
        <span class="id">#2</span>
	</div>
	<!-- End Default checkbox -->
	</td>
	<td>
		<div class="media">
			<!--Product Name-->	
			<div>
			<h6 class="title text-truncate"><img src="..." alt="" style="width: 60px; height:60px;">Product Name</h6>
			</div>
			<!--Product Name-->	
		</div> 
		</td>
		<td> 
		<div>
         <div class="def-number-input number-input safari_only mb-0 w-100">
		 	<!--Date-->	
		 	<div class="ml-0 mt-1">
				<small class="text-muted font-italic">mm/dd/yy</small> 
				</div>
            </div>
			<!--Date-->	
    </div>
	</div>
		</td>
        <td> 
		<div>
         <div class="def-number-input number-input safari_only mb-0 w-100">
			<!--Price-->
			<div class="price-wrap"> 
				<var class="price">PHP 00.00</var> 
				<br>
				<small class="text-muted">(PHP00.00 each)</small> 
			</div>
			<!--Price-->
    </div>
	</div>
		</td>
		<td> 
		<!--Quantity-->
			<div>
				<h6 class="title text-center">1</h6>				
			</div>
		<!--Quantity-->
		</td>
        <td> 
		<div>
         <div class="def-number-input number-input safari_only mb-0 w-100">
		 	<!--Total-->
				<div class="price-wrap"> 
					<var class="price">PHP 00.00</var> 
					<br>
					<small class="text-muted">(PHP00.00 each)</small> 
				</div>
			<!--Total-->
            </div>
    </div>
	</div>
		</td>
		<td class="text">
			<!--Email-->
			<div>
				<h6 class="title">example@gmail.com</h6>				
			</div>
			<!--Email-->
		</td>
		<td class="text-right">
			<!--Action-->
			<a title="Remove Product" href="" class="btn btn-outline-danger"> × Remove</a>
			<!--Action-->
		</td>
		</tr>	
</tbody>

<tbody>
<tr>
	<td>
	<!-- Default checkbox -->
	<div class="form-check" style = "margin-top:30px">
        <span class="id">#3</span>
	</div>
	<!-- End Default checkbox -->
	</td>
	<td>
		<div class="media">
			<!--Product Name-->	
			<div>
			<h6 class="title text-truncate"><img src="..." alt="" style="width: 60px; height:60px;">Product Name</h6>
			</div>
			<!--Product Name-->	
		</div> 
		</td>
		<td> 
		<div>
         <div class="def-number-input number-input safari_only mb-0 w-100">
		 	<!--Date-->	
		 	<div class="ml-0 mt-1">
				<small class="text-muted font-italic">mm/dd/yy</small> 
				</div>
            </div>
			<!--Date-->	
    </div>
	</div>
		</td>
        <td> 
		<div>
         <div class="def-number-input number-input safari_only mb-0 w-100">
			<!--Price-->
			<div class="price-wrap"> 
				<var class="price">PHP 00.00</var> 
				<br>
				<small class="text-muted">(PHP00.00 each)</small> 
			</div>
			<!--Price-->
    </div>
	</div>
		</td>
		<td> 
		<!--Quantity-->
			<div>
				<h6 class="title text-center">1</h6>				
			</div>
		<!--Quantity-->
		</td>
        <td> 
		<div>
         <div class="def-number-input number-input safari_only mb-0 w-100">
		 	<!--Total-->
				<div class="price-wrap"> 
					<var class="price">PHP 00.00</var> 
					<br>
					<small class="text-muted">(PHP00.00 each)</small> 
				</div>
			<!--Total-->
            </div>
    </div>
	</div>
		</td>
		<td class="text">
			<!--Email-->
			<div>
				<h6 class="title">example@gmail.com</h6>				
			</div>
			<!--Email-->
		</td>
		<td class="text-right">
			<!--Action-->
			<a title="Remove Product" href="" class="btn btn-outline-danger"> × Remove</a>
			<!--Action-->
		</td>
		</tr>		
</tbody>
</table>
</div>
</div> 
<!-- End First Container-->


<!-- Second Container-->
<div class="container">
<hr> <!--I think this is for line-->
	<div class="card">
	<table class="table table-hover shopping-cart-wrap">
	<tbody>
	<tr>
	<td>
	<!-- Default checkbox -->
	
	<!-- End Default checkbox -->
	</td>
	
		<!--Price-->
	</td>
	<td class="text-right"> 
    <button title="Add" href="" class="btn btn-outline-dark" data-toggle="tooltip" data-original-title="Add Quantity" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
	</td>
	</tr>	
</tbody>

</table>
</div>
</div> 
<!-- End Second Container-->
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
<!-- Admin order -->
<script src="css/adminorder.js" crossorigin=""></script>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>
</html>