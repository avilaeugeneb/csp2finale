<?php
session_start();
function get_title(){
	echo "Order Success";
} 
require_once './partials/heading.php';

$refnumber = $_GET['refid'];
$username = $_SESSION['user'];

?>
<main class="content">
	<?php
    require_once './partials/navbar.php';
    
    ?>
    <div class="grid ordersuccess">
        <h1>Thanks for placing an order,<?= $username; ?>!</h1>

        <p>Your order is being processed with referrence number <?= $refnumber; ?>.</p>

        <p>Expect the delivery within 60 to 90 mins</p>
	</div>
	

</main>

<?php 
require_once './partials/footer.php';
?>

