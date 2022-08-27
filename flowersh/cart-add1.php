
<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $live_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO user_live(user_id, live_id, status) VALUES('$user_id', '$live_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: live.php');
}
?>
