<!-- Done By: Xian Zhi, Haziq, Wilson -->

<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/user_system.css">
  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">-->
    <style type="text/css">
    body{
      background-image: url(img/skyline.jpg);
    }
    </style>
</head>
<body>
    <div class="welcome">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        <p><a href="reset-password.php" class="button">Reset Your Password</a></p>
        <p><a href="logout.php" class="button">Sign Out</a></p>
        <a href="index.php" class="button">Continue to Webpage</a>

    </div>
</body>
</html>
