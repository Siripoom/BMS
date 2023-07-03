<?php

include('server.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: playfair-display;
    }
</style>


<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #E9E6DD;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">BMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rooms.php">Room</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> -->
                </ul>
                <?php if (isset($_SESSION['email'])) { ?>

                    <a class=" fw-bold text-dark nav-link mx-4" href=""><?php echo $_SESSION['email']; ?></a>
                    <a type="submit" href="logout.php" class="btn btn-danger" style="color: white; border-radius:  20px; color:white;">Logout</a>
                    <button type="button" class="btn" style="background-color: #5B6957; border-radius:  20px; color:white; visibility: hidden;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        SignIn
                    </button>
                <?php } else { ?>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn" style="background-color: #5B6957; border-radius:  20px; color:white; " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        SignIn
                    </button>
                <?php } ?>
                <!-- <form action="signin_db.php" method="post"> -->
                <form class="d-flex" action="signin_db.php" method="post" role="search">
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sign-In</h1>
                                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="" name="password">
                                    </div>
                                    <div class="mb-3 text-center">
                                        <a href="signup.php">No account?</a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button " class="btn btn btn-outline-danger" style="border-radius: 20px; " data-bs-dismiss="modal">Close</button>
                                    <input type="submit" name="signin" class="btn" style="background-color: #5B6957; border-radius: 20px; color:white;" value="Sign In">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </form>
            </div>
        </div>
    </nav>
   
</body>

</html>