<?php

session_start();
include_once("functions/userfunctions.php");


?>


<!DOCTYPE html>
<html>

<?php include("partials/header.php") ?>

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



<body>





  <!-- start navbar area -->

  <?php include("partials/navbar.php") ?>
    
  <!-- end navbar area -->

  <!-- shop section -->

 <!-- shop section -->
    <div class="container d-flex justify-content-center align-items-center">
      <div class="d-flex justify-content-center"> <!-- Bu satırı ekleyin -->

        <?php

          if(isset($_GET['id'])){
            $productId = $_GET["id"];
            
            $product = getProductById("product","id", $productId);
            
          }

        ?>

        <div class="card mb-3 first-card"  >
            <img src=<?php echo "uploads/".$product['image'] ?> class="card-img-top" alt="" >
        </div>

        <div class="col">
        <div class="card mb-3 second-card">
        <div>
            <h2 class="product-name" style="font-weight: 600;"><?php echo $product['name'] ?></h2>
        </div>
        <div >
            <h4 class="product-desc" style="font-weight: 100;"><?php echo $product['description'] ?></h4>
        </div>
        <div class="price">
            <h2 style="font-weight: 200;"><?php echo $product['original_price'] . "$" ?></h2>
        </div>
        
        <form action="admin/code.php" method="POST">
        <!-- Clothing size options -->
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
        <input type="hidden" name="category_id" value="<?php echo $product['category_id']; ?>">

        <div class="clothing-sizes">
            <input type="radio" name="size" id="size-s" value="S">
            <label for="size-s">S</label>

            <input type="radio" name="size" id="size-m" value="M">
            <label for="size-m">M</label>

            <input type="radio" name="size" id="size-l" value="L">
            <label for="size-l">L</label>
            
            <input type="radio" name="size" id="size-xl" value="XL">
            <label for="size-xl">XL</label>
            <!-- Add more size options as needed -->
        </div>

        <div class="process-box" style="opacity: 1; margin-top: 40px;" >
          <div class="button-quantity-container">
            <button type="submit" name="add_to_cart_btn" class="btn btn-outline-success">+ Add to Cart</button>
            <div class="quantity-box">
              <div class="quantity-control" >
                <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                <input type="hidden" name="quantity" id="quantity" value="">
                <button class="quantity-value" name="quantity" disabled style="color: black; border: none;">1</button>
                <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
              </div>
            </div>
          </div>
        </div>

        </form>

        </div>
        </div>

        
      </div> 
    </div>>



  <!-- FOOTER -->


   <?php include("partials/footer.php") ?>
  

  
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>