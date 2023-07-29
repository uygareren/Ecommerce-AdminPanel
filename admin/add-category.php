<?php

session_start();
if(!isset($_SESSION['auth'])){

    header("Location: login.php");
    $_SESSION['message'] = "You did not log in!";
    exit();
}

include("../middleware/adminMiddleware.php");

?>


<?php include("static/header.php"); ?>

<body>


	<!-- SIDEBAR -->
	<?php include("static/sidebar.php"); ?>

	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">


		<!-- NAVBAR -->
		<?php include("static/navbar.php"); ?>
		<!-- NAVBAR -->



		<!-- MAIN -->
		
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <h2>Add Category</h2>
                        </div>
                            
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="add_category_btn">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
		<!-- MAIN -->

		
	</section>
	<!-- CONTENT -->
	

	<?php include("static/footer.php"); ?>



</body>
</html>

