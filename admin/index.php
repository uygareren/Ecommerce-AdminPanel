
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
		<nav>

			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="index.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="index.php">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<?php include("static/footer.php"); ?>

</body>
</html>