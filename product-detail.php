<?php

session_start();

?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Giftos
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .container {
      display: flex;
      margin-top: 50px;
    }
  
    .card {
      height: 500px;
      flex-basis: 25%;
      width: 50%;
    }

  
    .second-card {
      margin-left: 100px;
      border: none;
    }
  
    /* Style for clothing size options */
    .clothing-sizes {
      margin-top: 50px;
      display: flex;
    }
  
    .clothing-sizes label {
      margin-right: 10px;
      padding: 8px 16px;
      background-color: #f0f0f0;
      border: 1px solid #ddd;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="radio"]{
        margin-right: 10px;
        accent-color: black;
    }

    
    .process-box .quantity-control{
        margin-left: 25px;
    }

    .social-links a{
      font-size: 34px; 
      padding-left: 15px; 
      color: black;

    }

    li a {
      color: black;
    }
  </style>
  
</head>
<body>



  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            Giftos
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="shop.php">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.php">
                Why Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.php">
                Testimonial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            <a href="cart.php">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!-- shop section -->

 <!-- shop section -->
    <div class="container">
      <div class="d-flex justify-content-center"> <!-- Bu satırı ekleyin -->
        <div class="card mb-3 first-card"  >
            <img src="images/p1.png" class="card-img-top" alt="" >
        </div>

        <div class="card mb-3 second-card">
        <div>
            <h2 class="product-name" style="font-weight: 600;">Product Name</h2>
        </div>
        <div >
            <h4 class="product-desc" style="font-weight: 100;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, est!</h4>
        </div>
        <div class="price">
            <h2 style="font-weight: 200;">$75</h2>
        </div>

        <!-- Clothing size options -->
        <div class="clothing-sizes">
            <input type="radio" name="size" id="size-s">
            <label for="size-s">S</label>

            <input type="radio" name="size" id="size-m">
            <label for="size-m">M</label>

            <input type="radio" name="size" id="size-l">
            <label for="size-l">L</label>
            
            <input type="radio" name="size" id="size-xl">
            <label for="size-xl">XL</label>
            <!-- Add more size options as needed -->
        </div>

        <div class="process-box" style="opacity: 1; margin-top: 40px;" >
            <div class="button-quantity-container">
              <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
              <div class="quantity-box">
                <div class="quantity-control" >
                  <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                  <span class="quantity-value">1</span>
                  <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>>



  <!-- FOOTER -->


    <footer class="footer py-5">
      <div class="container" style="margin-top: 100px;">
        <div class="row">
          <div class="col-md-4">
            <h4>About Me</h4>
            <p>Hello! I'm Marvel Sann, a passionate web designer and UI specialist. I love creating stunning user experiences and building successful products.</p>
          </div>
          <div class="col-md-4">
            <h4>Contact Information</h4>
            <p>Email: marvel@example.com</p>
            <p>Phone: +123 456 7890</p>
            <p>Address: 123 Main Street, City, Country</p>
          </div>
          <div class="col-md-4">
            <h4 style="padding-left: 65px;">Home</h4>
            <div class="social-links">
              <a href="#" class="fa fa-facebook" ></a>
              <a href="#" class="fa fa-twitter" ></a>
              <a href="#" class="fa fa-instagram" ></a>
              <a href="#" class="fa fa-github" ></a>
            </div>
          </div>
          
        </div>
      </div>
      <div class="text-center mt-4">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Home</a></li>
          <li class="list-inline-item"><a href="#">Services</a></li>
          <li class="list-inline-item"><a href="#">About</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="mb-0">Company Name &copy; 2023</p>
      </div>
    </footer>

  

  
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>