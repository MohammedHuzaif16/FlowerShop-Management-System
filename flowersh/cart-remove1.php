
<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $live_id = $_GET["id"];
    $user_id = $_SESSION['user_id'];

    
    $query = "DELETE FROM user_live WHERE live_id='$live_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart1.php");
}
?>
