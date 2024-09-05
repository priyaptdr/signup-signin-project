<?php
include("connection.php");
if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "select * FROM signup WHERE username='$username'";
    $result = mysqli_query($conn,$sql);
    $count_user = mysqli_num_rows($result);

    $sql = "select * FROM signup WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
    $count_email = mysqli_num_rows($result);

    if($count_user == 0 & $count_email == 0){
        if($password!=0){
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO signup(username,email,password) VALUES ('$username','$email','$hash')";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("Location: index1.php");
            }
            
        }
    }
    else{
        if($count_user>0){
            echo '<script>
                 window.location.href="index.php";
                 alert("username already exists");
                 </script>';
        }
        if($count_email>0){
            echo '<script>
                 window.location.href="index.php";
                 alert("email already exists");
                 </script>';
        }
    }
}



// Get the username and password from the form
// $username = $_POST['username'];
// $email = $_POST['email'];
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

// // Insert into the database
// $sql = "INSERT INTO signup (username,email, password) VALUES ('$username', '$email', '$password')";

// if ($conn->query($sql) === TRUE) {
//     echo "succefull";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();


?>