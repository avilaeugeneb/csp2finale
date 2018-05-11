<?php 
require_once '../lib/connect.php';
include_once './adminpartials/header.php';
include_once './adminpartials/navbar.php';

function get_title(){
	echo "Products Page";
} 

$products_qry = "SELECT p.pName,p.pDesc,p.pImage,p.pStocks,p.pPrice,c.cName FROM products p JOIN categories c WHERE c.id = p.pCategoryID";
$result_productsqry = mysqli_query($conn,$products_qry);

$categories_qry = "SELECT id,cName FROM categories WHERE parent = 0";
$result_catqry = mysqli_query($conn,$categories_qry);
?>
<!-- Tab Header -->
<ul class="nav nav-tabs nav-justified">
	<li class="nav-item">
		<a class="nav-link active" data-toggle="tab" href="#panelproducts" role="tab">Products</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="tab" href="#paneladditems" role="tab">Add Items</a>
	</li>
</ul> <!-- End tab header -->

<!-- Tab panels -->
<div class="tab-content card">

	<div class="tab-pane fade in show active" id="panelproducts" role="tabpanel">

		<div class="grid products">
			<h3>Products Available</h3>
			<div class="grid productlists">
				<div class="grid tableheader">
					<div><b>Product Name</b><i class="fa fa-caret-down" aria-hidden="true"></i></div>
					<div><b>Product Description</b></div>
					<div><b>Product Image</b></div>
					<div><b>Product Stocks</b></div>
					<div><b>Product Price</b></div>
					<div><b>Product Category</b></div>
				</div>

				<?php while($product = mysqli_fetch_assoc($result_productsqry)) :?>

					<div class="grid tableproducts">
						<div><?= $product['pName']; ?></div>
						<div><?= $product['pDesc']; ?></div>
						<div><img src="../assets/img/<?= $product['pImage']; ?>" class="img-fluid"></div>
						<div><?= $product['pStocks']; ?></div>
						<div><?= $product['pPrice']; ?></div>
						<div><?= $product['cName']; ?></div>
					</div>

				<?php endwhile; ?>
			</div>
		</div>

	</div> <!-- #panelproducts -->

	<div class="tab-pane fade in show active" id="paneladditems" role="tabpanel">
		
		<div class="grid addproduct">

			<h3>Add an Item</h3>
			<div class="grid addDetails">
				<label for="pName"><b>Product Name :</b></label>
				<input type="text" name="pName" id="addpName">
			</div>

			<div class="grid addDetails">
				<label for="pDesc"><b>Product Desc :</b></label>
				<input type="text" name="pDesc" id="addpDesc">
			</div>

			<div class="grid addDetails imgupload">
				<label for="pImage"><b>Product Image :</b></label>

				<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
					<div id="selectImage">
						<label for="file" class="btn btn-success filelabel"> Upload File</label>
						<input type="file" name="file" id="file" required />
						<input type="submit" value="Upload" class="submit uploadbtn">
					</div>
				</form>
			</div>

			<div class="grid addDetails">
				<label for="pStocks"><b>Product Stocks :</b></label>
				<input type="number" name="pStocks" id="addpStocks" min="0">
			</div>

			<div class="grid addDetails">
				<label for="pPrice"><b>Product Price :</b></label>
				<input type="number" name="pPrice" id="addpPrice" min="0">
			</div>

			<div class="grid addDetails">
				<label for="pCategory"><b>Product Category :</b></label>
				<select name="pCategory" id="addpCategory">
					<option></option>
					<?php while($category = mysqli_fetch_assoc($result_catqry)) :?>
						<option value="<?= $category['id'] ?>"><?= $category['cName']?></option>
					<?php endwhile; ?>
				</select>
			</div>

			<div class="grid buttons">
				<div class="successdiv">
					<span class="addsuccess"></span>
				</div>
				<button class="btn btn-info addpRow">Add Product</button>
				<button class="btn btn-success clearfields">Clear fields</button>
			</div>

		</div>

	</div> <!-- #add items -->
</div> <!-- End tab panels -->
<?php
include_once './adminpartials/footer.php';
?>