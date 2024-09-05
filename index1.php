<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in sign up </title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
   <div class="container">
     <div class="form-box">
       <h1>Sign in</h1>
       <form>
         <div class="input-group">
            <!-- <div class="input-field">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Name">
            </div> -->
             
            <div class="input-field">
                <i class="fa-solid fa-envelope"></i>  
                <input type="email" placeholder="Email">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-lock"></i> 
                <input type="password" placeholder="Password">
            </div>
            <p>Lost password <a href="#">Click Here!</a> </p>
            </p>
         </div>
         <div class="btn-field">
             <a href="home.php"><button onclick="goToNextPage()" type="button" style="width:200%">Login</button></a>
         </div>
       </form>
      </div>
   </div>

<script>
    function goToNextPage() {
    // Replace 'nextpage.html' with the URL of the page you want to navigate to
    window.location.href = 'home.php';
}

</script>   
</body>    
</html>