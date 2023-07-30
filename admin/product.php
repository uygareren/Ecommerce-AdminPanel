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
        <h2>Products</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $products = getData("product");

                    if (count($products) > 0) {
                        // Veri varsa tabloya yazdır
                        foreach ($products as $product) {
                            ?>
                            <tr>
                                <td><?php echo $product['id']; ?></td>
                                <td><?php echo $product['name']; ?></td>
                                <td><img src="../uploads/<?php echo $product['image']; ?>" alt="Product Image" style="width: 50px;"></td>
                                <td><?php echo $product['status'] ? 'Active' : 'Inactive'; ?></td>
                                <td>
                                    <a href="edit-product.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                <form action="code.php" method="POST">
                                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                        <button type="submit" class="btn btn-danger btn-sm" name="delete_product_btn">Delete</button>
                                    </form>
                                </td>
                                </div>
                            </tr>
                            <?php
                        }
                    } else {
                        // Veri yoksa uyarı mesajını tabloya yazdır
                        ?>
                        <tr>
                            <td colspan="5">Hiç veri yok!</td>
                        </tr>
                        <?php
                    }
                ?>
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>


		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<?php include("static/footer.php"); ?>



</body>
</html>

