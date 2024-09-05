<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in sign up </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
   <div class="container">
     <div class="form-box">
       <h1 id="title">Sign Up</h1>
       <form name="form"  action="signup.php"  method = "POST">
       <form name="form"  action="signin.php" method = "POST">

         <div class="input-group">
            <div class="input-field" id="nameField">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="user" placeholder="Name">
            </div>
             
            <div class="input-field">
                <i class="fa-solid fa-envelope"></i>  
                <input type="email" name ="email" placeholder="Email">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-lock"></i> 
                <input type="password" name="pass" placeholder="Password">
            </div>
            <p>Lost password <a href="#">Click Here!</a> </p>
            </p>
         </div>
         <div class="btn-field">
            <button onclick="goToNextPage()" type="submit"  name = "submit" id="signupBtn">Sign up</button>
            <!-- <button type="submit" name = "submit" id="signinBtn" class="disable">Sign in</button> -->
         </div>
        </form>
        </form>
      </div>
   </div> 
<script>

// let signupBtn = document.getElementById("signupBtn")
// let signinBtn = document.getElementById("signinBtn")
// let nameField = document.getElementById("nameField")
// let title = document.getElementById("title")

// signinBtn.onclick = function(){
//   nameField.style.maxHeight = "0";
//   title.innerHTML = "Sign In";
//   signupBtn.classList.add("disable");
//   signinBtn.classList.remove("disable");

// }
// signupBtn.onclick = function(){
//   nameField.style.maxHeight = "60px";
//   title.innerHTML = "Sign Up";
//   signupBtn.classList.remove("disable");
//   signinBtn.classList.add("disable");

// }

function goToNextPage() {
    // Replace 'nextpage.html' with the URL of the page you want to navigate to
    window.location.href = 'index1.php';
}


</script>
</body>    
</html>