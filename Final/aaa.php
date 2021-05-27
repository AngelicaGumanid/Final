<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/aaastyle.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
  <!-- product -->

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  </head>
  <body>

    <div class = "content">
      <button class = "btn"><i class = "fas fa-cart-plus"></i></button>
        <h5 style="display:inline;">Continue Shopping</h5>
    </div>

    <div class = "card-wrapper">
      <div class = "card">

        <!-- card left -->

        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "sample/1.png" alt = "shoe image">
              <img src = "sample/2.png" alt = "shoe image">
              <img src = "sample/3.png" alt = "shoe image">
              <img src = "sample/4.png" alt = "shoe image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "sample/1.png" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "sample/2.png" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "sample/3.png" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "sample/4.png" alt = "shoe image">
              </a>
            </div>
          </div>
          <div class = "social-links">

            <p>Share</p> <br>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-linkedin-in"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fa fa-envelope"></i>
            </a>
    </div>
  </div>

        <!-- card right -->
      <div class = "product-content">
            <h2 class = "product-title">nike shoes</h2>
            <a href = "#" class = "product-link">visit nike store</a>
            <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
        </div>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span>$257.00</span></p>
            <p class = "new-price">New Price: <span>$249.00 (5%)</span></p>
          </div>

          <div class = "product-detail">
            <h2>about this item: </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
            <ul>
              <li>Color: <span>Black</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Shoes</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <p>Quantity</p>
            <input type = "number" min = "0" value = "1">
          </div>
              <a href="#" class="btn btn-info btn-md">
              <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
              </a>
        
              <a href="#" class="btn btn-info btn-md">
              <span class="glyphicon glyphicon-heart"></span> Add to Wishlist
              </a>
        
              <a href="#" class="btn btn-info btn-md">
              <span class="glyphicon glyphicon-shopping-cart"></span> Buy Now
              </a>
        <br><br>
              <a href="#" class="btn btn-info btn-md">
              <span class="glyphicon glyphicon-message"></span> Message
              </a>
         
             <a href="#" class="btn btn-info btn-md">
              <span class="glyphicon glyphicon-message"></span> Need Help?
              </a>
          </p> 
          </div>

          
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class = "container">
    <h2>Product Rating</h2>
    <div class="rectanglebox" style="background-color:grey; height:100px;">
        <center>
            <ul id="menu">
                <li>ALL</li>
                <li>5 Stars</li>
                <li>4 Stars</li>
                <li>3 Stars</li>
                <li>2 Stars</li>
                <li>1 Star</li>
                <li>No Rating</li>
            </ul>
        </center>  
    </div>
  </div>
  <div class="container">
    <div class="col-md-2">
        <img src="images/product/1.png" alt="" style="border-radius: 50%;">
    </div>
    <div class="col-md-10">
        <p>Username/U*****</p>
        <p>Rating</p>
        <p>Comment Comment Comment Comment Comment Comment</p>
        <ul id="smallpics">
            <li><img src="images/product/17.png" alt=""style="width:70px; height:70;"></li>
            <li><img src="images/product/17.png" alt=""style="width:70px; height:70;"></li>
            <li><img src="images/product/17.png" alt=""style="width:70px; height:70;"></li>
        </ul>
        <p>Date</p>
    </div>
  </div>
  



 
    <script src="css/aaascript.js"></script>
  </body>
</html>