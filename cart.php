<?php

session_start();
include_once("functions/userfunctions.php");

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

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
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
  <?php include("partials/navbar.php") ?>
  <!-- end hero area -->

  <!-- Start of Cart Section -->
  <div class="container-fluid">
    <div class="row">
        <aside class="col-lg-9">
            <div class="card" id="card" style="width: 80%; margin-left: 125px; margin-top: 25px;">
                <div class="table-responsive">
                    <table class="table table-borderless table-shopping-cart">
                      <form action="admin/code.php" method="post">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" width="120">Size</th>
                                <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $user_id = $_SESSION['auth_user']['id'];
                          $cart_products = getCartById('cart', 'user_id', $user_id);
                          $total_price = 0; // Toplam fiyatı sıfırla

                          // $cart_products bir dizi mi kontrol edelim
                          if (count($cart_products) > 0) {
                            foreach ($cart_products as $cart_product) {
                              $product_id = $cart_product['product_id'];
                              $product = getProductById('product', 'id', $product_id);

                              $name = $product['name'];
                              $price = $product['original_price'];
                              $size = $cart_product['size'];
                              $image = $product['image'];
                              $quantity = $product['quantity'];
                              
                              // Ürün fiyatını toplam fiyata ekle
                              $total_price += $price;


                              ?>
                              <tr>
                                <td>
                                  <figure class="itemside align-items-center">
                                    <div class="aside"><img src="<?php echo "uploads/".$product['image']; ?>" style="width: 50px;" class="img-sm"></div>
                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true"><?php echo $name; ?></a>
                                    </figcaption>
                                  </figure>
                                </td>
                                <td>
                                  <select class="form-control">
                                    <?php for ($i = 1; $i <= $quantity; $i++) { ?>
                                      <option><?php echo $i; ?></option>
                                    <?php } ?>
                                  </select>
                                </td>
                                <td>
                                  <div class="price-wrap"> <var class="price">$<?php echo $price; ?></var> </div>
                                </td>
                                <td><?php echo $size; ?></td>
                                <td class="text-right d-none d-md-block">
                                  <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a>
                                  <input type="hidden" name="product_cart_id" value=<?php echo $cart_product['cart_id']; ?>>
                                  <button type="submit" name="remove_cart_btn" class="btn btn-light">Remove</button>
                                </td>
                              </tr>
                              <?php
                              
                            
                            }
                          } else {
                            // $cart_products bir dizi değil, hata mesajı yazdırabilirsiniz.
                          }
                          ?>
                        </tbody>

                      </form>
                        

                    </table>
                </div>
            </div>
        </aside>
        <aside class="col-lg-3">
            <div class="card mb-3">
                <div class="card-body">
                    <form>
                        <div class="form-group"> <label>Have coupon?</label>
                            <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Total price:</h4>
                    <p class="text-right ml-1" id="totalPrice" ><?php echo $total_price ?></p>
                    <p class="text-right ml-1" id="totalPrice" >$</p>
                    
                    <hr> <a href="#" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Make Purchase </a> 
                    <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                </div>
            </div>
        </aside>
    </div>
</div>
  <!-- End of Cart Section -->


  <!-- info section -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>
