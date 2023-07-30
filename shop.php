<?php

session_start();

?>


<!DOCTYPE html>
<html>

<?php
include("partials/header.php")
?>


<body>


    <?php
    include("partials/navbar.php");
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <?php
                    include("partials/sidebar.php");
                ?>
                
            </div>
            <div class="col-lg-9">
                <div class="main">
                    <section class="shop_section layout_padding">
                    <div class="container ">
                    
                    <div class="row">
                        
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Ring
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $200
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Watch
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $300
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Teddy Bear
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $110
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Ring
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $200
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Watch
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $300
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Teddy Bear
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $110
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Ring
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $200
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Watch
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $300
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Teddy Bear
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $110
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Ring
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $200
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Watch
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $300
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Teddy Bear
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $110
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Ring
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $200
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Watch
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $300
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Teddy Bear
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $110
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Ring
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $200
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Watch
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $300
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="product-detail.php">
                            <div class="img-box">
                                <img src="images/p3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                Teddy Bear
                                </h6>
                                <h6>
                                Price
                                <span>
                                    $110
                                </span>
                                </h6>
                            </div>
                            <div class="process-box">
                                <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                    <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="new">
                                <span>
                                New
                                </span>
                            </div>
                            </a>
                        </div>
                        </div> 
                    </div>

                    </div>
                    </div>
                
                </section>
                    </div>
            </div>
        </div>
        
    </div>    

    <div class="pagination-container">
    <button class="page-button" id="startBtn" disabled>
      <i class="fa-solid fa-angles-left"></i>
    </button>
    <button class="page-button prevNext" id="prev" disabled>
      <i class="fa-solid fa-angle-left"></i>
    </button>
    <div class="page-links">
      <a href="#" class="page-link active" data-page="1">1</a>
      <a href="#" class="page-link" data-page="2">2</a>
      <a href="#" class="page-link" data-page="3">3</a>
      <a href="#" class="page-link" data-page="4">4</a>
      <a href="#" class="page-link" data-page="5">5</a>
    </div>
    <button class="page-button prevNext" id="next">
      <i class="fa-solid fa-angle-right"></i>
    </button>
    <button class="page-button" id="endBtn">
      <i class="fa-solid fa-angles-right"></i>
    </button>
    </div>

    
    <!-- footer section -->

  <?php
  include("partials/footer.php");
  ?>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js">

  </script>

</body>

</html>