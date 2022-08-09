<!-- Done By: Xian Zhi, Alex, Quang -->

<?php error_reporting(E_ALL & -E_NOTICE); ?>
<?php

include_once '../includes/Connection.php';
include '.../includes/front-libraries.php';

// Initiate Database Connection
$db = new Connection;

if (count($_POST) > 0) {

    $query = "UPDATE user_reservation set bookId='" . $_POST['bookId'] . "',custId='" . $_POST['custId'] . "',check_in='" . $_POST['check_in'] . "',check_out='" . $_POST['check_out'] . "' WHERE bookId='" . $_POST['bookId'] . "'";
    // Update user's booking in the Database
    $results = $db->query($query);
    echo "Update results: ".$results;
    $message = "Record Modified Successfully";
}

$query = "SELECT * FROM make_booking WHERE bookId='" . $_GET['bookId'] . "'";
// Retrieve updated user's booking
$results = $db->query($query);
$rows = $db->fetch($results);
?>
<html>

<head>
    <title>Update Data</title>
</head>

<body>
    <form name="update-process" class="form-group" method="post" action="">
        <div><?php if (isset($message)) {
                    echo $message;
                } ?>
        </div>
        <div style="padding-bottom:5px;">

        </div>
        Booking: <br>
        <input type="hidden" name="bookId" class="form-control" value="<?php echo $rows[0]['bookId']; ?>">
        <input type="text" name="bookId" value="<?php echo $rows[0]['bookId']; ?>">
        <br>
        Customer: <br>
        <input type="text" name="custId" class="form-control" value="<?php echo $rows[0]['custId']; ?>">
        <br>
        Check In:<br>
        <input type="text" name="check_in" class="form-control" value="<?php echo $rows[0]['check_in']; ?>">
        <br>
        Check Out:<br>
        <input type="text" name="check_out" class="form-control" value="<?php echo $rows[0]['check_out']; ?>">
        <br>
        <input type="submit" name="submit" value="Submit" class="btn"><br><br>

        <a href="/">Back</a>

    </form>
</body>

</html>
