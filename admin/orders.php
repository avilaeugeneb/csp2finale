<?php 
require_once '../lib/connect.php';
include_once './adminpartials/header.php';
include_once './adminpartials/navbar.php';

function get_title(){
		echo "Orders";
}

$order_qry = "SELECT u.userUid,CONCAT(u.userFirstName,' ',u.userLastName) as name,c.cartRefNum,o.statusname
FROM carts c
JOIN orderstatuses o
ON(c.cartStatus=o.id)
JOIN users u
ON(c.cartUser = u.id)";
$result_orderqry = mysqli_query($conn,$order_qry);
?>
<div class="grid ordercontainer">

    <div class="grid orders">
        <h5>UserUid</h5>
        <h5>Name</h5>
        <h5>Ref Number</h5>
        <h5>Status</h5>
        <h5>Items</h5>
    </div>

    <?php while($order = mysqli_fetch_assoc($result_orderqry)):
        extract($order);
    ?>

    <div class="grid orders">
        <div><?=$userUid;?></div>
        <div><?=$name;?></div>
        <div><?=$cartRefNum;?></div>
        <div><?=$statusname;?></div>
        <div><button class="historyitems btn btn-dark-green"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></div>
    </div>

    <?php endwhile;?>
    
</div>

<?php
include_once './adminpartials/footer.php';
?>