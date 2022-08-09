<!-- Done By: Xian Zhi, Alex, Quang -->

<?php
include 'database/Connection.php';

// Initiate Database Connection
$db = new Connection;

$rows = [];
if (count($_POST) > 0) {
    // Get information from the form POST method
    $address = $_POST["address"];
    $desired_checkin = $_POST["enter_date"] . " " . $_POST["enter_time"];
    $desired_checkout = $_POST["exit_date"] . " " . $_POST["exit_time"];


    $search_list_carparkIDs_query = "select * from user_reservation where address like '%{$address}%' AND check_in=''";

    // Retrieve all users' booking by address.
    $result = $db->query($search_list_carparkIDs_query);
    $rows = $db->fetch($result);
}
