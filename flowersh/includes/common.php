
<?php
    $con = mysqli_connect("localhost", "root", "", "flowersh") or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>

