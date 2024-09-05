<?php
include("connection.php");
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["pass"];
    require_once "connection.php";  
    $sql = "SELECT * FROM signup WHERE email ='$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if ($user) {
        # code...
        if (password_verify($password,$user["pass"])) {
            # code...
            header("Location: home.php");
            // die();
        }
        else{
            echo"<div class = 'alert alert-danger'> password does not match </div>";
 
        }
    }
    
        echo"<div class = 'alert alert-danger'> email does not match </div>";
    
}




// Get the username and password from the form
// $user = $_POST['username'];
// $pass = $_POST['password'];

// // Retrieve the stored password hash from the database
// $sql = "SELECT password FROM signup WHERE username='$user'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     $hashed_password = $row['password'];
    
//     // Verify the password
//     if (password_verify($pass, $hashed_password)) {
//         echo "Signin successful! Welcome, " . $user;
//     } else {
//         echo "Invalid password!";
//     }
// } else {
//     echo "No user found with that username!";
// }

// $conn->close();
// ?>

?>