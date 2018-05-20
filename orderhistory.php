<?php
	session_start();
	function get_title(){
		echo "Order History";
	} 
    require_once './partials/heading.php';
    require_once './lib/connect.php';
    $userUid = $_SESSION['user'];


    $avail_cartqry = "SELECT c.id,c.cartRefNum,o.statusname 
    FROM carts c
    JOIN orderstatuses o
    ON(o.id = c.cartStatus)
    WHERE c.cartUser = (SELECT id FROM users WHERE userUid ='$userUid') ORDER BY c.id DESC";
    $result_availcartqry = mysqli_query($conn,$avail_cartqry);
    $rows = mysqli_num_rows($result_availcartqry);

?>
<main class="content">
	<?php
	require_once './partials/navbar.php';
    ?>
    <div class="historycontainer">    
        <div class="grid history">
            <h3 class="text-center">Referrence Number</h3>
            <h3 class="text-center">Order Status</h3>
            <h3 class="text-center">Items</h3>
        </div>
        <?php if($rows == 0):?>
                <div class="grid text-center">There are no order history yet.</div>
        <?php endif;?>
        <!-- Start your project here-->
        <?php while($history = mysqli_fetch_assoc($result_availcartqry)): ?>
            <?php extract($history);?>
            <div class="grid history" data-orderid="<?=$id?>">
                <div class="text-center">
                    <?= $cartRefNum?> 
                </div>
                <div class="text-center">
                    <?= $statusname?>
                </div>
                <div class="text-center">
                    <button class="historyitems btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                </div>
            </div>
            <?php 
                $cartqry = "SELECT p.pName,cp.cartQty
                FROM carts c 
                JOIN cartproducts cp 
                ON(c.id = cp.cartID)
                JOIN products p
                ON(p.id = cp.cartItem)
                JOIN orderstatuses o
                ON(o.id = c.cartStatus)
                WHERE c.cartUser = 
                (SELECT id FROM users WHERE userUid = '$userUid')
                AND c.id = '$id'";
                
                $result_cartqry = mysqli_query($conn,$cartqry);
                $rowscat = mysqli_num_rows($result_cartqry);
            ?>
            <div class="orderhistory orderhistory<?=$id?> d-none">
                <div class="grid orderitems">
                    <div><h6>Item Name</h6></div>
                    <div><h6>Quantity</h6></div>
                </div>
                <?php if($rowscat == 0):?>
                <div class="grid text-center">There are no items in this cart. Contact admin if you think this is a mistake.</div>
                <?php endif;?>
                <?php while($cartitems = mysqli_fetch_assoc($result_cartqry)): ?>
                    <?php extract($cartitems);?>
                    <div class="grid orderitems">
                        <div>
                            <?= $pName; ?>
                        </div>
                        <div>
                            <?= $cartQty; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endwhile; ?>
    </div>
	<!-- /Project ends here-->

</main>

<?php 
	require_once './partials/footer.php';
?>

