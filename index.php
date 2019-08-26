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
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<h2>LIST PRODUCT</h2>
				<a href="AddProduct.php">Click to Add</a>
					<table>
						<thead>
							<th class="table100-head">
								<td class="column1">Name</td> 
								<td class="column3">Name</td>
								<td class="column4">Price</td>
								<td class="column5">Quantity</td>
								<td class="column6">Total</td>
							</th>
						</thead>
						<?php  
						require_once './database.php';
							foreach ($resultSet as $row) {
								?>
								<td class="column1"><?= $row['productname'] ?></td>
								<td class="column2"><?= $row['price'] ?></td>
								<td class="column3"><?= $row['content'] ?></td>
								<td class="column4">
									<a href="./product_delete.php?id=<?= $row['id'] ?>">Delete</a>
								</td>
		
								<td class="column5">
									<a href="./editing.php?id=<?= $row['id'] ?>">Edit</a>
								</td>
		
								<td class="column6">
									<a href="./product_editing.php?id=<?= $row['id'] ?>&task=copy">Copy</a>
								</td>
								<div class="clear-both"></div>  
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

</body>
</html>