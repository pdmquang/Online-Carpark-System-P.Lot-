<!-- Done By: Xian Zhi, Alex, Quang -->

<?php
include_once '../database/Connection.php';

// Initiate Database Connection
$db = new Connection;

$bookId = $_GET["bookId"];

// Delete booking SQL statement
$query =  "DELETE FROM user_reservation WHERE bookId='" . $_GET["bookId"] . "'";
// Start DB query
$results = $db->query($query);

echo $results;
echo "Record deleted successfully";
header("Location:  /managebooking.php");

?>
