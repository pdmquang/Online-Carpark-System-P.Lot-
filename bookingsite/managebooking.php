<!-- Done By: Quang, Alex -->

<?php

// Initialize the session
session_start();
// Check if the user is not login, if yes then redirect him to welcome page
if (!isset($_SESSION["loggedin"])) {
	header("location: login.php");
	exit;
}

include_once 'database/Connection.php';


$db = new Connection;

$userId = $_SESSION["id"];
$query = "SELECT * FROM user_reservation where userId = '{$userId}';";

$results = $db->query($query);
$rows = $db->fetch($results);

?>
<link rel="stylesheet" href="beauty.css">

<!DOCTYPE html>
<html>

<head>
	<?php include 'front-libraries.php'; ?>
</head>


<body>
	<header>
		<?php include 'navigation-bar.php'; ?>
	</header>

	<!-- <-- TABLE -->
	<div class="manage-container">
		<hr>
		<div class="manage-title">
			<h3>Manage <span class="second-word">Booking</span></h3>
		</div>

		<table id="manage-table" border="1" style="width:100%">
			<tr>
				<th>Booking ID</th>
				<th>Customer ID</th>
				<th>Address of carpark</td>
				<th>Lot ID</th>
				<th>Check-In</th>
				<th>Check-Out</th>
				<th COLSPAN="2">Action</th>
			</tr>
			<?php
			foreach ($rows as $value) {
			?>
				<tr>
					<td><?php echo $value["bookId"]; ?></td>
					<td><?php echo $value["userId"]; ?></td>
					<td><?php echo $value["address"]; ?></td>
					<td><?php echo $value["lotId"]; ?></td>
					<td><?php echo $value["check_in"]; ?></td>
					<td><?php echo $value["check_out"]; ?></td>
					<td><a class="delete" href="data/delete-booking.php?bookId=<?php echo $value["bookId"]; ?>">Delete</a></td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>

</html>
