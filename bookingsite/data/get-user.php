<!-- Done By: Xian Zhi, Alex, Quang -->

<?php

include 'database/Connection.php';
// Initialize the session
session_start();
$db = new Connection;

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate credentials
    $verify_user_query = "SELECT * FROM customer WHERE name = '{$username}' AND password='{$password}'";

    $result = $db->query($verify_user_query);
    $user = $db->fetch($result);

    if (count($user) == 1) {
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["userId"] = $user[0]["custId"];
        $_SESSION["username"] = $user[0]["name"];
        // Redirect user to welcome page
       header("location: /");
    } else {
        // Display an error message if password is not valid
        $login_error = "The username/password you entered was not valid.";
    }
}
?>
