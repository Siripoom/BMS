<?php
require('server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body style="background-color: #E9E6DD;">
    <?php include('navbar.php'); ?>
    <div class="hero-image">
        <div class="hero-text">
            <h1>Book Your Dream Vacation Today!</h1>
            <a href="#" class="button">Book Now</a>
        </div>
    </div>


    <div class="container mt-5" style="background-color: #E9E6DD;">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3" style="width:auto; height:28rem;">
                    <img src="img/service1.jpg" style="width:auto; height:450px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">breakfast</h5>
                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3" style="width:auto; height:28rem;">
                    <img src="img/service2.jpg" style="width:auto; height:450px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Fitness</h5>
                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3" style="width:auto; height:28rem;">
                    <img src="img/service3.jpg" style="width:auto; height:450px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pool</h5>
                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5" style="background-color: #D2AC7C;">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="card mb-3 mt-3" style="width:auto; height:28rem;">
                        <img src="img/imageindex.jfif" style="width:auto; height:450px;" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3 text">
                    <h2 class="text-center">Package Details</h2>
                    <div class="text fs-4 mx-3">
                        <strong>Destination</strong>
                        Beautiful Beach Resort, Caribbean
                    </div>
                    <div class="text fs-4 mx-3">
                        <strong>Duration</strong>
                        7 days and 6 nights
                    </div>
                    <div class="text fs-4 mx-3">
                        <strong>Inclusions</strong>
                        <ul>
                            <li>Round-trip airfare</li>
                            <li>Luxury accommodations</li>
                            <li>All-inclusive meals and beverages</li>
                            <li>Access to resort amenities</li>
                            <li>Exciting daily activities</li>
                        </ul>
                        $1999 per person<a href="#" class="button mx-2">Book Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>
<?php include('footer.php') ?>

</html>