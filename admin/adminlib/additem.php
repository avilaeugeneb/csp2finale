<?php
require_once '../../lib/connect.php';

$pName = $_POST['pName'];
$pDesc = $_POST['pDesc'];
$pImage = $_POST['pImage'];
$pStocks = $_POST['pStocks'];
$pPrice = $_POST['pPrice'];
$pCategoryID = $_POST['pCategoryID'];

$p_qry = "INSERT INTO products(pName,pDesc,pImage,pStocks,pPrice,pCategoryID)
VALUES('$pName','$pDesc','$pImage','$pStocks','$pPrice','$pCategoryID')";

$result_pqry = mysqli_query($conn,$p_qry);

// Adding Pseudo "ID" to the DOM

$lastitemid_qry = "SELECT id FROM products ORDER BY id DESC LIMIT 1";
$lastitemid_result= mysqli_query($conn,$lastitemid_qry);

$lastitemid = mysqli_fetch_assoc($lastitemid_result);
$newitemid = $lastitemid['id'];

//Adding Pseudo 'Category' to the DOM

$category_qry = "SELECT cName FROM categories c WHERE c.id = $pCategoryID";
$result_categoryqry = mysqli_query($conn,$category_qry);

$category = mysqli_fetch_assoc($result_categoryqry);

$cName = $category['cName'];

?>

<div class="grid tableproducts productid0<?= $newitemid ?>">
	<!-- pName Cell -->
	<div class="grid pCell" data-productid="<?= $newitemid ?>" data-col="1">
		<div class="cellItem<?= $newitemid ?>col1">
			<div class="cellItem<?= $newitemid ?>col1ReadOnly">
				<?= $pName; ?>
			</div>
		</div>
		<div class="cellItem<?= $newitemid ?>col1 d-none">
			<input type="text" value="<?= $pName; ?>" class="cellItem<?= $newitemid ?>col1input">
		</div>
	</div>
	<!-- pDesc Cell -->
	<div class="grid pCell" data-productid="<?= $newitemid ?>" data-col="2">
		<div class="cellItem<?= $newitemid ?>col2">
			<div class="cellItem<?= $newitemid ?>col2ReadOnly">
				<?= $pDesc; ?>
			</div>
		</div>
		<div class="cellItem<?= $newitemid ?>col2 d-none">
			<textarea cols="20" rows="10" class="cellItem<?= $newitemid ?>col2input"><?= $pDesc; ?></textarea>
		</div>
	</div>
	<!-- pStocks Cell -->
	<div class="grid pCell" data-productid="<?= $newitemid ?>" data-col="4">
		<div class="cellItem<?= $newitemid ?>col4">
			<div class="cellItem<?= $newitemid ?>col4ReadOnly">
				<?= $pStocks; ?>
			</div>
		</div>
		<div class="cellItem<?= $newitemid ?>col4 d-none">
			<input type="text" value="<?= $pStocks; ?>" class="cellItem<?= $newitemid ?>col4input">
		</div>
	</div>
	<!-- pPrice Cell -->
	<div class="grid pCell" data-productid="<?= $newitemid ?>" data-col="5">
		<div class="cellItem<?= $newitemid ?>col5">
			<div class="cellItem<?= $newitemid ?>col5ReadOnly">
				<?= $pPrice; ?>
			</div>
		</div>
		<div class="cellItem<?= $newitemid ?>col5 d-none">
			<input type="text" value="<?= $pPrice; ?>" class="cellItem<?= $newitemid ?>col5input">
		</div>
	</div>
	<!-- Edit Items Buttons -->
	<div class="grid edititems" data-productid="<?= $newitemid ?>">
		<button class="btn btn-outline-brown editbtn buttonedit0<?= $newitemid ?>">
			<i class="fa fa-pencil" aria-hidden="true"></i>
		</button>
		<button class="btn btn-outline-info d-none savebtn buttonsave0<?= $newitemid ?>">
			<i class="fa fa-save" aria-hidden="true"></i>
		</button>
		<button class="btn btn-outline-danger deleteitem">
			<i class="fa fa-trash-o" aria-hidden="true"></i>
		</button>
	</div>
	<!-- pImage Cell -->
	<div class="grid pCell" data-productid="<?= $newitemid ?>">
		<img src="../assets/img/<?= $pImage; ?>" class="img-fluid">
	</div>
	<!-- pCategory Cell -->
	<div class="grid pCell" data-productid="<?= $newitemid ?>" data-col="6">
		<div class="cellItem<?= $newitemid ?>col6">
			<div class="cellItem<?= $newitemid ?>col6ReadOnly">
				<?= $cName; ?>
			</div>
		</div>
		<div class="cellItem<?= $newitemid ?>col6 d-none">
			<input type="text" value="<?= $cName; ?>" class="cellItem<?= $newitemid ?>col6input">
		</div>
	</div>
</div>
