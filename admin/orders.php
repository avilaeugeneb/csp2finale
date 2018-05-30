<?php 
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

<main class="admincontent">
    <table class="grid ordercontainer">
        <thead>
            <tr class="grid orders">
                <th><p>UserUid</p></th>
                <th><p>Name</p></th>
                <th><p>Ref Number</p></th>
                <th><p>Status</p></th>
                <th><p>Items</p></th>
            </tr>
        </thead>
        <tbody>
        <?php while($order = mysqli_fetch_assoc($result_orderqry)):
            extract($order);
        ?>
        
            <tr class="grid orders">
                <td><?=$userUid;?></td>
                <td><?=$name;?></td>
                <td><?=$cartRefNum;?></td>
                <td><?=$statusname;?></td>
                <td><button class="btn btn-dark-green" data-toggle="modal" data-target="#<?=$cartRefNum?>"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                </td>
            </tr>


        <?php 
            $cartqry = "SELECT p.pName,cp.cartQty
            FROM carts c 
            JOIN cartproducts cp 
            ON(c.id = cp.cartID)
            JOIN products p
            ON(p.id = cp.cartItem)
            JOIN orderstatuses o
            ON(o.id = c.cartStatus)
            WHERE c.cartRefNum = '$cartRefNum'";

            $result_cartqry = mysqli_query($conn,$cartqry);
            $rowscat = mysqli_num_rows($result_cartqry);
        ?>




        <!-- Modal -->
        <div class="modal fade" id="<?=$cartRefNum?>" tabindex="-1" role="dialog" aria-labelledby="modalForCartItems" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                       <div class="modal-header text-center">
                            <h5 class="modal-title text-center">Ordered Items</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                       </div>

                       <div class="modal-body">
                            <div class="animated">
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
                       </div>

                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       </div>
                  </div>
             </div>
        </div> <!-- EndOfModal -->
        
        <?php 
            endwhile;
        ?>

        </tbody>
        
    </table>
</main>
<?php
include_once './adminpartials/footer.php';
?>