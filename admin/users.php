<?php 
require_once '../lib/connect.php';
include_once './adminpartials/header.php';
include_once './adminpartials/navbar.php';

function get_title(){
		echo "Users";
}
$users_qry = "SELECT CONCAT(userFirstName,' ',userLastName) AS fullName, userUid, userEmail, CONCAT(userStreet,' ',userBrgy,' ',userCity) AS address FROM users WHERE userRole != 1";
$results_usersqry = mysqli_query($conn,$users_qry);
?>
<main class="admincontent">

	<table class="userscontainer">
		<thead>
			<tr>
				<th>User ID</th>
				<th>Full Name</th>
				<th>User Email</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php while($user = mysqli_fetch_assoc($results_usersqry)):
				extract($user);
			?>
			<tr>
				<td><?= $userUid?></td>
				<td><?= $fullName?></td>
				<td><?= $userEmail?></td>
				<td><?= $address?></td>
			</tr>
			<?php endwhile; ?>
		</tbody>
	</table>

</main>

<?php
include_once './adminpartials/footer.php';
?>