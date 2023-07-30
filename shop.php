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
                        <?php include("partials/card.php") ?>

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