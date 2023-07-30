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
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <h2>Add Product</h2>
                    </div>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option selected disabled>Select Category</option>
                        <?php
                        $categories = getData("category");
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                $categoryId = $category['id'];
                                $categoryName = $category['name'];
                                // Output the option element for each category
                                echo "<option value=\"$categoryId\">$categoryName</option>";
                            }
                        }
                        ?>
                    </select>
                    <br> <!-- Add a <br> element after the select field for spacing -->

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
                    </div>
                    <br> <!-- Add a <br> element after the input field for spacing -->

                    <div class="form-group">
                        <label for="small-description">Small Description</label>
                        <textarea class="form-control" id="small-description" name="small_description" placeholder="Enter small description"></textarea>
                    </div>
                    <br> <!-- Add a <br> element after the textarea field for spacing -->

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter full description"></textarea>
                    </div>
                    <br> <!-- Add a <br> element after the textarea field for spacing -->

                    <div class="form-group">
                        <label for="original-price">Original Price</label>
                        <input type="text" class="form-control" id="original-price" name="original_price" placeholder="Enter original price">
                    </div>
                    <br> <!-- Add a <br> element after the input field for spacing -->

                    <div class="form-group">
                        <label for="selling-price">Selling Price</label>
                        <input type="text" class="form-control" id="selling-price" name="selling_price" placeholder="Enter selling price">
                    </div>
                    <br> <!-- Add a <br> element after the input field for spacing -->

                    <div class="input-group">
                        <input type="file" class="form-control" id="image" name="image" aria-label="Upload">
                    </div>
                    <br> <!-- Add a <br> element after the input field for spacing -->

                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity">
                    </div>
                    <br> <!-- Add a <br> element after the input field for spacing -->

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="status" value="" id="status">
                        <label class="form-check-label" for="status">
                            Status
                        </label>
                    </div>
                    <br> <!-- Add a <br> element after the checkbox field for spacing -->

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="trending" value="" id="trending">
                        <label class="form-check-label" for="trending">
                            Trending
                        </label>
                    </div>
                    <br> <!-- Add a <br> element after the checkbox field for spacing -->

                    <div class="form-group">
                        <label for="meta-title">Meta Title</label>
                        <input type="text" class="form-control" id="meta-title" name="meta_title" placeholder="Enter meta title">
                    </div>
                    <br> <!-- Add a <br> element after the input field for spacing -->

                    <div class="form-group">
                        <label for="meta-description">Meta Description</label>
                        <textarea class="form-control" id="meta-description" name="meta_description" placeholder="Enter meta description"></textarea>
                    </div>
                    <br> <!-- Add a <br> element after the textarea field for spacing -->

                    <div class="form-group">
                        <label for="meta-keywords">Meta Keywords</label>
                        <input type="text" class="form-control" id="meta-keywords" name="meta_keywords" placeholder="Enter meta keywords">
                    </div>
                    <br> <!-- Add a <br> element after the input field for spacing -->

                    <button type="submit" class="btn btn-primary" name="add_product_btn">Add Product</button>
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

