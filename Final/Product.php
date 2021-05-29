<!DOCTYPE html>
<html>
	<head>
		<title> TAC About </title>
		<link rel = "icon" type = "image/logo.png" href = "images/logo.png" sizes = "1000x1000"/>
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src = 'https://kit.fontawesome.com/a076d05399.js' crossorigin = 'anonymous'></script>
		<link rel = "stylesheet" href = "css/navbarstyle.css">
		<link rel = "stylesheet" href = "css/footerstyle.css">
		
    <!---product--->
		<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
		<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<link rel = "stylesheet" href = "css/productstyle.css">
 
	</head>

	<!-- Header -->
	<header>
    <div id = "main">
      <div>
      <a class = "navbar-brand" href = "
        <?php echo 'Homepage.php'; ?>">
        <img src = "images/logo.png" width = "100px" height = "80px">
        </a>
      </div>
      
      <div>
        <form class = "form-inline my-2 my-sm-0">
          <input class = "form-control mr-sm-2" type = "search" placeholder = "Search" aria-label = "Search">
          <button class = "btn">
            <i class = "fas fa-search"></i>
          </button>
        </form>
      </div>

      <div>
        <button class = "btn">
          <i class = "fas fa-comments"></i>
        </button>
        <button class = "btn">
          <i class = "fas fa-heart"></i>
        </button>
        <button class = "btn">
          <i class = "fas fa-cart-plus"></i>
        </button>
      </div>

      <div>
        <a href = "<?php echo 'Login.php'; ?>" style = "color: #FFFFFF;"> Login </a>
        <a href = "<?php echo 'Signup.php'; ?>" style = "color: #FFFFFF;"><button class = "btn"> Sign Up </a></button>
			</div>
		</div>
	</header>

	<body>
		<!-- Navigation Bar -->
		<nav class = "navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
			<a class = "navbar-brand" href = "<?php echo 'Homepage.php'; ?>"> TORI ANIME COLLECTIBLES </a>
			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent"aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation"><span class = "navbar-toggler-icon"></span></button>

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

    <!-- PRODUCT -->
    <div class="container">
      <div class="col d-flex align-items-center pt-5">
        <button class ="cartbtn px-3 py-2">
          <i class ="fas fa-cart-plus"></i>
        </button>
        <h5 class="ml-3 mb-0"> Continue Shopping </h5>
      </div>
      <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
          <div class="row">
            <div class="col-lg-2 order-lg-1 order-2">
              <ul class="image_list">
                <li data-image="https://i.imgur.com/21EYMGD.jpg"><img src="https://i.imgur.com/21EYMGD.jpg" alt=""></li>
                <li data-image="https://i.imgur.com/DPWSNWd.jpg"><img src="https://i.imgur.com/DPWSNWd.jpg" alt=""></li>
                <li data-image="https://i.imgur.com/HkEiXfn.jpg"><img src="https://i.imgur.com/HkEiXfn.jpg" alt=""></li>
              </ul>
            </div>
            <div class="col-lg-4 order-lg-2 order-1">
              <div class="image_selected">
                <img src="https://i.imgur.com/qEwct2O.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6 order-3">
              <div class="product_description">
                <h3>[Status]</h3>
                <h1>Product Name</h1>
                <h4>Product Desription</h4>

                <div>
                  <span class="product_price">₹ 29,000</span>
                </div>
                <div class="product-rating">
                  <span class="badge badge-success"> <i class="fa fa-star"></i> 4.5 Star </span>
                  <span class="rating-review"> 35 Ratings & 45 Reviews </span>
                </div>
                <br>

                <div class="product_name">
                  Information such as seeries, product line, model, manufacturer, specifications, height, weight, color Shop Vouchers Shipping
                </div>

                <hr class="singleline">

                <div>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="br-dashed">
                        <div class="row">
                          <div class="col-md-3 col-xs-3">
                            <img src="https://img.icons8.com/color/48/000000/price-tag.png">
                          </div>
                          <div class="col-md-9 col-xs-9">
                            <div class="pr-info">
                              <span class="break-all">Get 5% instant discount + 10X rewards @ RENTOPC</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                    </div>
                  </div>
                  <br>
                  <h4>Shipping</h4>
                </div>

                <hr class="singleline">

                <div class="order_info d-flex flex-row">
                  <form action="#">
                </div>
                <div class="row">
                  <div class="col-xs-6" style="margin-left: 13px;">
                    <div class="rowquan">
                      <p class = "rowquan"> Quantity </p>
                      <input type = "number" min = "0" value = "1">
                    </div>
                  </div>
                  <div class ="container">
                    <a href="#" class="btn btn-info btn-md"> <span class="glyphicon glyphicon-heart"></span> Add to Wishlist </a>
                    <a href="#" class="btn btn-info btn-md"> <span class="glyphicon glyphicon-shopping-cart"></span> Add to category </a>
                    <a href="#" class="btn btn-info btn-md"> <span class="glyphicon glyphicon-shopping-cart"></span> Buy Now </a>
                    <br>
                    <br>
                    <a href="#" class="btn btn-info btn-md"> <span class="glyphicon glyphicon-message"></span> Message </a>
                    <a href="#" class="btn btn-info btn-md"> <span class="glyphicon glyphicon-message"></span> Need Help? </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
                <div class = "container">
                  <h2>Product Rating</h2>
                  <div class="rectanglebox" style="background-color:grey; height: 100 px;">
                  <center>
                    <button class="btnto ">Success</button>
                    <button class="btnto ">Info</button>
                    <button class="btnto ">Warning</button>
                    <button class="btnto ">Danger</button>
                    <button class="btnto ">Default</button>
                    <button class="btnto ">Danger</button>
                    <button class="btnto ">Default</button>
                  </center>
            </div>
        </div>
        <br>
            <div class="container">
            <div class="row">
            <div class="col-md-2">
              <img src="sample/2.png" alt="" style="border-radius: 50%;">
            </div>
            <div class="col-md-8">
              <p>Username/U*****</p>
              <p>Rating</p>
              <p>Comment Comment Comment Comment Comment Comment</p>
            <ul id="smallpics">
                <li><img src="sample/2.png" alt=""style="width:70px; height:70;"></li>
                <li><img src="sample/2.png" alt=""style="width:70px; height:70;"></li>
                <li><img src="sample/2.png" alt=""style="width:70px; height:70;"></li>
            </ul>
            <p>Date</p>
          </div>
       </div>
     </div>
     <div class= "container">
        <div class="column">
		    <div class="card">
			  <img src="images/sample.PNG" class="card-img-top" alt="...">
				<div class="container-fluid">
				<div class="row">
				<div>
					<h5 class="card-title">YOU MAY ALSO LIKE</h5>
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
					<h5 class="card-title">YOU MAY ALSO LIKE</h5>
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
					<h5 class="card-title">YOU MAY ALSO LIKE</h5>
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
					<h5 class="card-title">YOU MAY ALSO LIKE</h5>
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

<br><br><br><br><br><br><br><br><br><br>

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
                    <li class="round-btn btn-facebook"><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                    <li class="round-btn btn-linkedin"><a href="#"> <i class="fab fa-linkedin-in" aria-hidden="true"></i> </a></li>
                    <li class="round-btn btn-twitter"><a href="#"> <i class="fab fa-twitter" aria-hidden="true"></i> </a></li>
                    <li class="round-btn btn-instagram"><a href="#"> <i class="fab fa-instagram" aria-hidden="true"></i> </a></li>
                    <li class="round-btn btn-whatsapp"><a href="#"> <i class="fab fa-whatsapp" aria-hidden="true"></i> </a></li>
                    <li class="round-btn btn-envelop"><a href="#"> <i class="fa fa-envelope" aria-hidden="true"></i> </a></li>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12">
                <h3 style="text-align: right;"> Stay Connected </h3>
              </div>
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
                  <a href="=<?php echo 'Homepage.php'; ?>">| Home	</a>
                  <br>
                  <a href="=<?php echo 'Shop.php'; ?>">| Shop </a>
                  <br>
                  <a style= "margin-left: 50px;" href="<?php echo 'Sitemap.php'; ?>">Site Map</a>
                  <br>
                  <a style= "margin-left: 50px;" href="<?php echo 'Categories.php'; ?>">Categories</a>
                  <br>
                  <a style= "margin-left: 50px;" href="<?php echo 'Termsandservices.php'; ?>">Terms and Service</a>
                  <br>
                  <a style= "margin-left: 50px;" href="<?php echo 'Privacypolicies.php'; ?>">Privacy Policies</a>
                  <br>
                  <a style= "margin-left: 50px;" href="<?php echo 'Helpcenter.php'; ?>">Help Center</a>
                  <br>
                  <a href="<?php echo 'About.php'; ?>">| About</a>
                  <br>
                  <a href="<?php echo 'Torimerch.php'; ?>">| Tori Merch</a>
                  <br>
                  <a href="<?php echo 'Nau.php'; ?>">| News and Updates</a>
                  <br>
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
                    <img src="images/logo.png" alt="logo">
                  </div>
                  <p> Distributor Name </p>
                  <p> Address </p>
                  <div class="logo2">
                    <img src="images/logo.png" alt="logo">
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