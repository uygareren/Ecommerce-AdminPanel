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
        <h2>Categories</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $categories = getData("category");

                    if (count($categories) > 0) {
                        // Veri varsa tabloya yazdır
                        foreach ($categories as $category) {
                            ?>
                            <tr>
                                <td><?php echo $category['id']; ?></td>
                                <td><?php echo $category['name']; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <a href="edit-category.php?id=<?php echo $category['id']; ?>" class="btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col" style="display: block;">
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">
                                                <button type="submit" class="btn btn-danger btn-sm" name="delete_category_btn">Delete</button>
                                            </form>
                                        </div>
                                    </div>
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

