<?php

require('server.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
</head>
<style>
    body {
        font-family: playfair-display;
    }
</style>

<body style="background-color: #E9E6DD;">
    <div class="container">
        <form action="insert.php" method="post">
            <div class="row justify-content-center">

                <div class="col-lg-4">
                    <div class="card" style="width: 28rem; position:center;">
                        <div class="card-body">
                            <h5 class="card-title">Sign Up</h5>
                            <p class="card-subtitle mb-2 text-body-secondary">Please fill in this form to create an account.</p>
                            <hr>
                            <div class="mb-3">
                                <?php if (isset($_SESSION['error'])) : ?>
                                    <div class="error">
                                        <div class="alert alert-danger" role="alert">
                                            <?php
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                            ?>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password1" class="form-control" id="exampleFormControlInput1" placeholder="length 6-8">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password2" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">First name</label>
                                <input type="text" name="fname" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Last name</label>
                                <input type="text" name="lname" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone number</label>
                                <input type="text" name="number" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <!-- <label>
                            <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
                        </label> -->
                            <div class="mb-3">
                                <button name="signup" type="submit" class="btn" style="background-color: #5B6957; border-radius: 20px; color:white;">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</body>

</html>