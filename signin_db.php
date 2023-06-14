<!-- Sign in -->
<?php

require('server.php');
session_start();

$errors = array();


// $email = $_POST["email"];
// $password = $_POST["password"];

// echo $email,$password;

if(isset($_POST['signin'])){
    // Get value by medthod POST
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Check value empty
    if (empty($email) || empty($password)) {
        // echo "Email & password is require.";
        $_SESSION['error'] = "Email & password is require.";
        header('location: index.php');
    }
    // Query
    $query = "SELECT * FROM members WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        // Data Found
        if (mysqli_num_rows($result) > 0) {
            // Data Match
            $_SESSION['email'] = $email;
            header("location: index.php");
        } else {
            // Data Not Match
            array_push($errors, "Wrong Username or Password");
            $_SESSION['error'] = "Wrong Username or Password!";
            header("location: index.php");
        }
    }else{
        array_push($errors, "Username & Password is required");
        $_SESSION['error'] = "Username & Password is required";
        header("location: index.php");
    }
}

?>