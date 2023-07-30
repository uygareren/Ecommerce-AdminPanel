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

<!DOCTYPE html>
<html lang="en">

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
                    <form action="code.php" method="POST" enctype="multipart/form-data" >
                        <div>
                            <h2>Edit Category</h2>
                        </div>

                        <?php
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];

                            $product = getDataById("product", $id);
                            if(!empty($product)){

                                ?>

                            <select class="form-select" aria-label="Default select example" name="category_id">
                                <option selected>Select Category</option>
                                <?php
                                $categories = getData("category");
                                if (!empty($categories)) {
                                    foreach ($categories as $category) {
                                       
                                        // Output the option element for each category
                                        ?>
                                        <option value="<?php echo $category['id'];?>"  <?= $category['id'] == $product['category_id'] ? "selected": "" ?>><?= $category['name'] ?></option>
                                        <?php
                                        
                                    }
                                }
                                ?>
                            </select>
                            <br> <!-- Add a <br> element after the select field for spacing -->
                            <input type="hidden" name="product_id" value="<?php echo $product['id'];?>" >

                            <div class="form-group">
                                <label for="id">Id</label>
                                <input value="<?php echo $product['id'];?>" type="text" class="form-control" id="id" name="id" placeholder="Enter product name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input value="<?php echo $product['name'];?>" type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
                            </div>

                            <div class="form-group">
                                <label for="small-description">Small Description</label>
                                <textarea class="form-control" id="small-description" name="small_description" placeholder="Enter small description"><?php echo $product['small_description'];?></textarea>
                            </div>

                            <br> <!-- Add a <br> element after the textarea field for spacing -->

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Enter full description"><?php echo $product['description'];?></textarea>
                            </div>
                            <br> <!-- Add a <br> element after the textarea field for spacing -->

                            <div class="form-group">
                                <label for="original-price">Original Price</label>
                                <input value="<?php echo $product['original_price'];?>" type="text" class="form-control" id="original-price" name="original_price" placeholder="Enter original price">
                            </div>
                            <br> <!-- Add a <br> element after the input field for spacing -->

                            <div class="form-group">
                                <label for="selling-price">Selling Price</label>
                                <input value="<?php echo $product['selling_price'];?>" type="text" class="form-control" id="selling-price" name="selling_price" placeholder="Enter selling price">
                            </div>
                            <br> <!-- Add a <br> element after the input field for spacing -->

                            <div class="input-group">
                                <input type="hidden" name="old_image" value="<?php $product['image'];?>" >
                                <input type="file" class="form-control" id="image" name="image" aria-label="Upload">
                                <img src="../uploads/<?php echo $product['image']; ?>" alt="product image" width="50px">

                            </div>
                            <br> <!-- Add a <br> element after the input field for spacing -->

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input value="<?php echo $product['quantity'];?>" type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity">
                            </div>
                            <br> <!-- Add a <br> element after the input field for spacing -->

                            <div class="form-check">
                                <input <?php echo $product['status'] == "1" ? "checked" : ""; ?> class="form-check-input" type="checkbox" name="status" value="" id="status">
                                <label class="form-check-label" for="status">
                                    Status
                                </label>
                            </div>

                            <br> <!-- Add a <br> element after the checkbox field for spacing -->

                            <div class="form-check">
                                <input <?php echo $product['trending'] == "1" ? "checked" : ""; ?> class="form-check-input" type="checkbox" name="trending" value="1" id="trending">
                                <label class="form-check-label" for="trending">
                                    Trending
                                </label>
                            </div>

                            <br> <!-- Add a <br> element after the checkbox field for spacing -->

                            <div class="form-group">
                                <label for="meta-title">Meta Title</label>
                                <input value="<?php echo $product['meta_title'];?>" type="text" class="form-control" id="meta-title" name="meta_title" placeholder="Enter meta title">
                            </div>
                            <br> <!-- Add a <br> element after the input field for spacing -->

                            <div class="form-group">
                                <label for="meta-description">Meta Description</label>
                                <textarea class="form-control" id="meta-description" name="meta_description" placeholder="Enter meta description"><?php echo $product['meta_description'];?></textarea>
                            </div>

                            <br> <!-- Add a <br> element after the textarea field for spacing -->

                            <div class="form-group">
                                <label for="meta-keywords">Meta Keywords</label>
                                <input value="<?php echo $product['meta_keywords'];?>" type="text" class="form-control" id="meta-keywords" name="meta_keywords" placeholder="Enter meta keywords">
                            </div>
                            <br> <!-- Add a <br> element after the input field for spacing -->

                                <?php
                            }else{

                                echo "Category Not Found!";
                            }
                                ?>
                        
                        
                        
                        <button type="submit" class="btn btn-primary" name="edit_product_btn">Edit</button>    
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

