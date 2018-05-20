<?php 
require_once '../lib/connect.php';
include_once './adminpartials/header.php';
include_once './adminpartials/navbar.php';

function get_title(){
	echo "Products Page";
} 

$products_qry = "SELECT p.id,p.pName,p.pDesc,p.pImage,p.pStocks,p.pPrice,c.cName FROM products p JOIN categories c WHERE c.id = p.pCategoryID";
$result_productsqry = mysqli_query($conn,$products_qry);
?>
<div class="row items">
	<div class="col-md-2 sidenavitems">
		<!-- Tab Header -->
		<ul class="nav md-pills pills-primary flex-column" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#panelproducts" role="tab">Products</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#paneladditems" role="tab">Add Items</a>
			</li>
		</ul> <!-- End tab header -->
	</div>
	<div class="col-md-10">
		<!-- Tab panels -->
		<div class="tab-content vertical">

			<div class="tab-pane fade in show active" id="panelproducts" role="tabpanel">

				<div class="grid products">
					<h3>Products Available</h3>
					<span class="deletemsg"></span>
					<span class="editmsg"></span>
					<div class="grid productlists">
						<div class="grid tableheader">
							<div><h5 class='text-center'>Name<i class="fa fa-caret-down" aria-hidden="true"></i></h5></div>
							<div><h5 class='text-center'>Desc</h5></div>
							<div><h5 class='text-center'>Stocks</h5></div>
							<div><h5 class='text-center'>Price</h5></div>
							<div><h5 class='text-center'>Edit Item</h5></div>
							<div><h5 class='text-center'>Image</h5></div>
							<div><h5 class='text-center'>Category</h5></div>
						</div>

						<?php while($product = mysqli_fetch_assoc($result_productsqry)) :?>

							<div class="grid tableproducts productid0<?= $product['id'] ?>">
								<!-- pName Cell -->
								<div class="grid pCell" data-productid="<?= $product['id'] ?>" data-col="1">
									<div class="cellItem<?= $product['id'] ?>col1">
										<div class="cellItem<?= $product['id'] ?>col1ReadOnly">
											<?= $product['pName']; ?>
										</div>
									</div>
									<div class="cellItem<?= $product['id'] ?>col1 d-none">
										<input type="text" value="<?= $product['pName']; ?>" class="cellItem<?= $product['id'] ?>col1input">
									</div>
								</div>
								<!-- pDesc Cell -->
								<div class="grid pCell" data-productid="<?= $product['id'] ?>" data-col="2">
									<div class="cellItem<?= $product['id'] ?>col2">
										<div class="cellItem<?= $product['id'] ?>col2ReadOnly">
											<?= $product['pDesc']; ?>
										</div>
									</div>
									<div class="cellItem<?= $product['id'] ?>col2 d-none">
										<textarea cols="20" rows="10" class="cellItem<?= $product['id'] ?>col2input"><?= $product['pDesc']; ?></textarea>
									</div>
								</div>
								<!-- pStocks Cell -->
								<div class="grid pCell" data-productid="<?= $product['id'] ?>" data-col="4">
									<div class="cellItem<?= $product['id'] ?>col4">
										<div class="cellItem<?= $product['id'] ?>col4ReadOnly">
											<?= $product['pStocks']; ?>
										</div>
									</div>
									<div class="cellItem<?= $product['id'] ?>col4 d-none">
										<input type="text" value="<?= $product['pStocks']; ?>" class="cellItem<?= $product['id'] ?>col4input">
									</div>
								</div>
								<!-- pPrice Cell -->
								<div class="grid pCell" data-productid="<?= $product['id'] ?>" data-col="5">
									<div class="cellItem<?= $product['id'] ?>col5">
										<div class="cellItem<?= $product['id'] ?>col5ReadOnly">
											<?= $product['pPrice']; ?>
										</div>
									</div>
									<div class="cellItem<?= $product['id'] ?>col5 d-none">
										<input type="text" value="<?= $product['pPrice']; ?>" class="cellItem<?= $product['id'] ?>col5input">
									</div>
								</div>
								<!-- Edit Items Buttons -->
								<div class="grid edititems" data-productid="<?= $product['id'] ?>">
									<button class="btn btn-outline-brown editbtn buttonedit0<?= $product['id'] ?>">
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</button>
									<button class="btn btn-outline-info d-none savebtn buttonsave0<?= $product['id'] ?>">
										<i class="fa fa-save" aria-hidden="true"></i>
									</button>
									<button class="btn btn-outline-danger deleteitem">
										<i class="fa fa-trash-o" aria-hidden="true"></i>
									</button>
								</div>
								<!-- pImage Cell -->
								<div class="grid pCell imagecell" data-productid="<?= $product['id'] ?>">
									<img src="../assets/img/<?= $product['pImage']; ?>" class="img-fluid">
								</div>
								<!-- pCategory Cell -->
								<div class="grid pCell" data-productid="<?= $product['id'] ?>" data-col="6">
									<div class="cellItem<?= $product['id'] ?>col6 selectcat">
										<select name="pCategory" id="addpCategory">
											<option value="<?= $product['id'] ?>"><?= $product['cName'] ?></option>

											<?php 
											$categories_qry = "SELECT id,cName FROM categories WHERE (parent = 0) AND (id !=".$product['id']." )";
											$result_catqry = mysqli_query($conn,$categories_qry);

											while($category = mysqli_fetch_assoc($result_catqry)):?>
												<option value="<?=$category['id']; ?>"><?= $category['cName'];?></option>
											<?php endwhile; ?>
										</select>
									</div>
									<div class="cellItem<?= $product['id'] ?>col6 d-none">
										<input type="text" value="<?= $product['cName']; ?>" class="cellItem<?= $product['id'] ?>col6input">
									</div>
								</div>
							</div>

						<?php endwhile; ?>
					</div>
				</div>

			</div> <!-- #panelproducts -->

			<div class="tab-pane fade" id="paneladditems" role="tabpanel">
				
				<div class="grid addproduct">

					<h3>Add an Item</h3>
					<div class="grid addDetails">
						<label for="pName"><b>Name :</b></label>
						<input type="text" name="pName" id="addpName">
					</div>

					<div class="grid addDetails">
						<label for="pDesc"><b>Description :</b></label>
						<input type="text" name="pDesc" id="addpDesc">
					</div>

					<div class="grid addDetails imgupload">
						<label for="pImage"><b>Image :</b></label>

						<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
							<div id="selectImage">
								<label for="file" class="btn btn-success filelabel">Upload Image</label>
								<input type="file" name="file" id="file" required />
								<input type="submit" value="Upload" class="submit uploadbtn">
							</div>
						</form>
					</div>

					<div class="grid addDetails">
						<label for="pStocks"><b>Stocks :</b></label>
						<input type="number" name="pStocks" id="addpStocks" min="0">
					</div>

					<div class="grid addDetails">
						<label for="pPrice"><b>Price :</b></label>
						<input type="number" name="pPrice" id="addpPrice" min="0">
					</div>

					<div class="grid addDetails">
						<label for="pCategory"><b>Category :</b></label>
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
	</div>
</div>
<?php
include_once './adminpartials/deletemodal.php';
include_once './adminpartials/footer.php';
?>