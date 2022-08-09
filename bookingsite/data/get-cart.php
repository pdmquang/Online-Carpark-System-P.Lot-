<!-- Done By: Xian Zhi, Alex, Quang -->

<?php

session_start();

include '../database/Connection.php';
// Initiate Database Connection
$db = new Connection;

// Retrieve cart array from javascript Ajax POST method.
$cart_items = $_POST['cart'];

for ($i=0; $i < count($cart_items); $i++) {
    $userId = $_SESSION['id'];
    $carparkId = $cart_items[$i]['carparkId'];
    $lotId = $cart_items[$i]['lotId'];
    $address = $cart_items[$i]['address'];
    $price = $cart_items[$i]['price'];
    $check_in = $cart_items[$i]['check_in'];
    $check_out = $cart_items[$i]['check_out'];


    $insert_booking_query = "INSERT INTO `user_reservation` (`userId`, `carparkId`, `lotId`, `address`, `price`, `check_in`, `check_out`)
                        VALUES ('{$userId}', '{$carparkId}', '{$lotId}', '{$address}', '{$price}', '{$check_in}', '{$check_out}');";
    // Insert user booking in the cart
    $result = $db->query($insert_booking_query);
}
