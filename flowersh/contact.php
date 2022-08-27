<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
    <style>
        body{
            background-color:#FFE4E1;
        }
        header{
                position: fixed;
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                 width: 100%;
  
            }
        .card{
            width:600px;
            height:200px;
            margin-left:430px;
            margin-top:120px;
        }
        .navbar{
  position: fixed;
  background-color: pink;
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
  background-color: #846445;
  transition: width .3s;
}
.navbar-menu a:hover::after{
  width: 100%;
}
        </style>
 <div class="navbar">
            <div class="inner-width">
                <div class="navbar-menu">
                    <a href="index.php">home</a>
                    <a href="login.php">Buy</a>
                    <a href="contact.php">contact</a>
					
                    
                </div>
            </div>
        </div>
    <div class="card">
        <h1>My Business Card</h1>
    <img src="card.jpg" style="width:100%">
        <h4></h4>
   
    </div>
    
</body>
</html>