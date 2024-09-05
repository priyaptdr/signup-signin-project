<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homeStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/cart-shopping-fast?f=classic&s=light">
    <link rel="stylesheet" href="https://fontawesome.com/icons/cart-circle-plus?f=classic&s=regular">
</head>


<body>
    <nav>   
       <div class="nav-left">
        <h3 class="logo">Social platform </h3>
        <ul>
            <li><i class="fa-regular fa-bell"></i></li>
            <li><i class="fa-regular fa-envelope"></i></li>
            <li><i class="fa-sharp fa-regular fa-camera-security"></i></li>
        </ul>
       </div>
       <div class="nav-right">
        <div class="search-box">
            <i class="fa-duotone fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="search">
        </div>
        <div class="nav-user-icon online">
            <img src="userlogo.png" alt="">
        </div>

       </div>
    </nav>  
    
    <div class="container">
        <!----- left sidebar------>
        <div class="left-sidebar">
            <div class="imp-links">
                <a href="#"><i class="fa-regular fa-newspaper"></i>Latest News</a>
                <a href="#"><i class="fa-solid fa-user-group"></i>Friends</a>
                <a href="#"><i class="fa-solid fa-people-group"></i>Group</a>
                <a href="#"><img src="market.png" >Marketplace</a>
                <a href="#"><img src="tv.png" >Watch</a>
                <a href="#">See more</a>
            </div>
            <div class="shortcut-links">
                <p>Your Shortcut</p>
                <a href="#"><img src="shortcut-1.webp" alt=""> Web Developers</a>
                <a href="#"><img src="shortcut-2.jpg" alt="">Web Design</a>
                <a href="#"><img src="shortcut-3.png" alt="">Full Stack Development</a>
                <a href="#"><img src="shortcut-4.jpg" alt="">Website Experts</a>

            </div>
        </div>
        <!----- main content------>
        <div class="main-content"></div>
        <!----- right sidebar------>
        <div class="right-sidebar"></div>
    </div>
</body>
</html>