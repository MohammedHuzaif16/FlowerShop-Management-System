<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
       
     
                <meta charset="UTF-8">
        <title>My Flower Shop | Cart</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body style="padding-top: 50px;">
    <style>
             body{
                background-color:#FFE4E1;
            }

        </style>

        
        <?php
        include 'includes/header.php';
        ?>
        
        <br><br><br>
        <div class="container">
               <div class="row row_style2">
                <div class="col-sm-10 col-sm-offset-1">
                    <table class="table table-striped">

                       
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT plants.price AS Price, plants.id, plants.name AS Name FROM user_live JOIN plants ON user_live.live_id = plants.id WHERE user_live.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='cart-remove1.php?id={$row['id']}' class='remove_item_link'> Remove </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success1.php?plantsid=".$id."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2><br>Add items to the cart first!</h2><p><a href='live.php'>click here</a> to explore products</p></center>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                    
                </div>
                
             </div>
        </div>

        <?php
         include 'includes/footer.php';
         ?>
    </body>
</html>