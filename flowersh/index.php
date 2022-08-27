<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
      
        
        <meta charset="UTF-8">
        <title>My Flower Shop</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body>
		<style>
	@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

    *{
  margin: 0;
  padding: 0;
  text-decoration: none;
  box-sizing: border-box;
}

.navbar{
  position: fixed;
  background-color: transparent;
  width: 100%;
  padding: 30px 0;
  top: 0;
  z-index: 100;
  line-height: 20px;
}
.inner-width{
  max-width: 1300px;
  margin: auto;
  padding: 0 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.log{
  font-size: 30px;
  letter-spacing: 3px;
  font-weight: 500;
  font-family:Georgia, 'Times New Roman', Times, serif;
  color: white;
  cursor: pointer;
}
.log span{
  font-size: 48px;
  color: white;
}

.navbar-menu a{
  font-size: 13px;
  font-weight: 500;
  font-family: 'Raleway',sans-serif;
  color: white;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-left: 35px;
  display: inline-block;
}
.navbar-menu a::after{
  content: '';
  display: block;
  width: 0;
  height: 1.8px;
  background-color: white;
  transition: width .3s;
}
.navbar-menu a:hover::after{
  width: 100%;
}

#home{
  height: 100vh;
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.content1{
    background-image:linear-gradient(#ffb6c1,#FFE4E1);
}
.content2{
  background-image:linear-gradient(rgba(0,0,0,0.2),#FFE4E1),url('flower4.jpg');
  background-position: center;
  background-size: cover;
}

.content p{
  font-size: 15px;
  line-height: 25px;
  font-weight: 500;
  letter-spacing: 1.1px;
  font-family: 'Raleway',sans-serif;
}


.content2 h1{
  position: absolute;
  left: 200px;
  top: 240px;
  font-size: 80px;
  font-family: Snell Roundhand;
  font-variant: normal;
  font-weight: 500;
  color:#4B0082;
  letter-spacing: 8px;
}
.content2 h1 span{
  color: 	#4B0082;
}
    </style>
        <!--navbar-->
        <div class="navbar">
            <div class="inner-width">
                <a href="#" class="log"><span>F</span>lower</a>
                <div class="navbar-menu">
                    <a href="index.php">home</a>
                    <a href="login.php">Buy</a>
                    <a href="contact.php">contact</a>
					
                    
                </div>
            </div>
        </div>
        <!--navbar-->
        <section id="home">
             <div class="content1">
             </div>
             <div class="content2">
                 <h1>Flower <span>Store</span></h1>
             </div>
        </section>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
