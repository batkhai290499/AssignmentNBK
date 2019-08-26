<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<h2 data-aos="fade-left">LIST PRODUCT</h2>
				<a href="AddProduct.php">Click to Add</a>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Name</th>
								<th class="column2">Price</th>
								<th class="column3">Content</th>
								<th class="column4">Delete</th>
								<th class="column5">Edit</th>
								<th class="column6">Copy</th>
							</tr>
						</thead>
						<?php  
						require_once './database.php';
							foreach ($resultSet as $row) {
								?>
								<tr>
									<th class="column1"><?= $row['name'] ?></th>
									<th class="column2"><?= $row['price'] ?></th>
									<th class="column3"><?= $row['content'] ?></th>
									<th class="column4">
										<a href="./product_delete.php?id=<?= $row['id'] ?>">Delete</a>
									</th>
			
									<th class="column5">
										<a href="./editing.php?id=<?= $row['id'] ?>">Edit</a>
									</th>
			
									<th class="column6">
										<a href="./product_editing.php?id=<?= $row['id'] ?>&task=copy">Copy</a>
									</th>
									<div class="clear-both"></div>  
								</tr>
								
							<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  AOS.init();
</script>
</body>
</html>