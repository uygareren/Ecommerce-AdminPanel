<?php

session_start();

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >

	<link rel="stylesheet" href="style.css">


	<!-- My CSS -->
	

	<title>AdminHub</title>
</head>

<body>
  
  <?php
  include("partials/navbar.php")
  ?>
  <!-- end hero area -->

  <!-- contact section -->

  <?php
  include("partials/contactus.php")
  ?>

  <!-- end contact section -->


<!-- footer section -->
  <?php
  include("partials/footer.php")
  ?>


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>