<?php

session_start();
if(!isset($_SESSION['auth'])){

    header("Location: login.php");
    $_SESSION['message'] = "You did not log in!";
    exit();
}

include("../middleware/adminMiddleware.php");
include("../functions/myfunctions.php");

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
                    <form action="code.php" method="POST" >
                        <div>
                            <h2>Edit Category</h2>
                        </div>

                        <?php
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];

                            $category = getDataById("category", $id);
                            if(!empty($category)){

                                ?>
                                <div class="form-group">

                                <input type="hidden" name="category_id" value="<?php echo $category['id'];?>">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $category['name']; ?>" placeholder="Enter name">
                                </div>

                                <?php
                            }else{

                                echo "Category Not Found!";
                            }
                                ?>
                        
                        
                        
                        <button type="submit" class="btn btn-primary" name="edit_category_btn">Edit</button>    
                        <?php
                        }else{
                            echo "ID missing from url";
                        }

                        ?>
                        
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

