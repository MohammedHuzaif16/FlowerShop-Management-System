<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
               
        <meta charset="UTF-8">
        <title>My Flower Shop | live plants</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <style>
            body{
                background-color:#FFE4E1;
            }
            .jumbotron{
                background-color:	#FFC0CB;
            }
            .products{
                display: flex;
                flex-wrap:wrap;
            }

            .col-md-3 col-sm-6{
                padding:2%;
                flex-grow:1;
                flex-basis: 16%;
                margin:auto;
                padding:12px;
                display:flex;
            }

            .thumbnail{
                width:350px;
                 height: 380px;
            
            }
            .caption{
                margin-top:auto;
            }
            footer{
                position: fixed;
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d;
                margin-top: 20px;
                bottom: 0;
                 width: 100%;
  
            }

            </style>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added1.php';
        ?>
        
        <br><br><br><br><br>
<section class="products">
    <div class="container">
            
            <div class="jumbotron">
                <h1>Welcome to Live Plants section!!!!</h1>
                <p> .</p>
                
            </div>
             
    </div>

    <div class="row1">
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="red.jpg" alt="Responsive image">
                </div>
                <div class="caption">
                              <h3>Red and White Rose</h3>
                              <p>Price:Rs.200.00</p>
                              <?php 
					
					if (check_if_added_to_cart1(1)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add1.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                      
        </div>
        

                  
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                          <img src="pink.jpg" alt="Responsive image">
                 </div>
                <div class="caption">
                              <h3>Pink and White Rose</h3>
                              <p>Price:Rs.200.00</p>
                              <?php 
					
					if (check_if_added_to_cart1(2)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add1.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                    
        </div>
                  
                  
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                          <img src="white1.jpg" alt="Responsive image">
                </div>
                <div class="caption">
                              <h3>White Hibiscus</h3>
                              <p>Price:Rs.180.00</p>
                              <?php 
					
					if (check_if_added_to_cart1(3)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add1.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                      
        </div>
                  
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                          <img src="orange.jpg" alt="Responsive image">
                </div>
                <div class="caption">
                              <h3>Orange Hibiscus</h3>
                              <p>Price:Rs.170.00</p>
                              <?php 
					
					if (check_if_added_to_cart1(4)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add1.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
        </div>
    </div>
                  
    <div class="row2">                
        
              
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                          <img src="dual.jpg" alt="Responsive image">
                </div>
                <div class="caption">
                              <h3>Anis Perfumella</h3>
                              <p>Price:Rs.300.00</p>
                              <?php 
					
					if (check_if_added_to_cart1(5)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add1.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                    
        </div>
                  

                                    
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                          <img src="white2.jpg" alt="Responsive image">
                </div>
                <div class="caption">
                              <h3>White Rose</h3>
                              <p>Price:Rs.130.00</p>
                              <?php 
					
					if (check_if_added_to_cart1(6)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add1.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                      
        </div>
                  
                  
                      

                  
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                          <img src="sun.jpg" alt="Responsive image">
                </div>
                <div class="caption">
                              <h3>SunFlower</h3>
                              <p>Price:Rs.40.00</p>
                              <?php 
					
					if (check_if_added_to_cart1(7)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add1.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
        </div>
                  
                  
 
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                          <img src="night.jpg" alt="Responsive image" id="imgs">
                </div>
                <div class="caption">
                              <h3>Queen of the Night</h3>
                              <p>Price:Rs.500.00</p>
                              <?php 
					
					if (check_if_added_to_cart1(8)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add1.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                </div>
                    
        </div>

    </div>
                  
                  
              
</section>
       <footer class="fo">
           <div class="container">
               <center>
                   <p><small>&copy;</small> My Flower Shop</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
