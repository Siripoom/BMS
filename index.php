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
    <script src="https://kit.fontawesome.com/d471f90c89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/sweetalert2.min.css">
    <script src="path/to/sweetalert2.min.js"></script>

    <title>Home</title>
</head>
<style>
    body {
        font-family: playfair-display;
    }

    /* CSS */
    .fade {
        opacity: 0;
        transition: opacity 3s linear;
    }

    .fade.show {
        opacity: 1;
    }
</style>

<body style="background-color: #E9E6DD;">
    <?php include('navbar.php'); ?>
    <div class="hero-image">
        <div class="hero-text">
            <h1>Book Your Dream Vacation Today!</h1>
            <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#bookingmodal">Book Now</a>
            <!-- <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#bookingmodal">
                Launch demo modal
            </button> -->
        </div>
    </div>
    <!-- Modal -->
    <form action="insert.php" method="post">
        <div class="modal fade-in-duration: 1s;" id="bookingmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Book</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="" class="form-label">Room</label>
                            <select name="cateroom" class="form-select" id="inputGroupSelect01">
                                <option value="Single room">Single room</option>
                                <option value="Double room">Double room</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Check In</label>
                            <input type="date" name="checkIn" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Check Out</label>
                            <input type="date" name="checkOut" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Rooms</label>
                            <input type="number" name="rooms" class="form-control" aria-describedby="basic-addon1">
                            <label class="input-group-text" for="inputGroupSelect01">Adults</label>
                            <select class="form-select" id="inputGroupSelect01" name="adults">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5+</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect01">Children</label>
                            <select class="form-select" id="inputGroupSelect01" name="children">
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5+</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button " class="btn btn btn-outline-danger" style="border-radius: 20px; " data-bs-dismiss="modal">Close</button>
                        <input type="submit" name="book" class="btn" style="background-color: #5B6957; border-radius: 20px; color:white;" value="Book">
                    </div>
                </div>
            </div>
        </div>
    </form>
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
                        \
                        <ul>
                            <li>Round-trip airfare</li>
                            <li>Luxury accommodations</li>
                            <li>All-inclusive meals and beverages</li>
                            <li>Access to resort amenities</li>
                            <li>Exciting daily activities</li>
                        </ul>
                        $1999 per person<a href="#" class="button mx-2" data-bs-toggle="modal" data-bs-target="#bookingmodal">Book Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Custom JS -->
    <script src="./script.js"></script>

</body>
<?php include('footer.php') ?>

</html>