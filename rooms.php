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
    <title>Rooms</title>
</head>
<style>
    body {
        font-family: playfair-display;
    }
</style>

<body style="background-color: #E9E6DD;">
    <?php
    include('navbar.php');
    ?>
    <div class="hero-image">
        <div class="hero-text">
            <h1>Accommodation</h1>
            <a href="#" class="button">Book Now</a>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="h2 text-center fw-bold">Single room</div>
            <!-- Image slide control -->
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/sr1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/sr2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/sr3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <center>

                <a href="#" class="button mt-3">Book Now</a>
            </center>
            <div class="h3 mt-3">Single Room</div>
            <div class="p">Welcome to our cozy and comfortable single room. This thoughtfully designed space is perfect for solo travelers seeking a peaceful retreat. Step into the room and be greeted by a soothing ambiance and a sense of tranquility.</div>
            <div class="p">The room features a comfortable single bed with a plush mattress and soft, luxurious bedding that guarantees a restful night's sleep. Unwind and relax while enjoying the convenience of a bedside table and lamp, perfect for reading your favorite book or browsing the internet on your personal devices.</div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="text fs-5 ">ROOM OVERVIEW</div>
                    <!-- create gride -->
                    <div class="row g-3 text-center mt-2">
                        <div class="col-md-4">
                            <i class="fa-solid fa-people-group fa-2xl"></i>
                            <div class="text mt-1">2 Adults 2 kids</div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa-sharp fa-solid fa-temperature-arrow-down fa-2xl"></i>
                            <div class="text mt-1">Air conditioner</div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa-solid fa-wifi fa-2xl"></i>
                            <div class="text mt-1">Hight Speed Internet</div>
                        </div>
                    </div>
                    <div class="row g-3 text-center mt-2">
                        <div class="col-md-4">
                            <i class="fa-solid fa-phone fa-2xl"></i>
                            <div class="text mt-1">Telephone</div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa-solid fa-tv fa-2xl"></i>
                            <div class="text mt-1">TV</div>
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="text fs-5 ">AMENITIES</div>
                    <div class="row g-3 text-center mt-2">
                        <div class="col-md-4">
                            <i class="fa-solid fa-shower fa-2xl"></i>
                            <div class="text mt-1">Shower</div>
                        </div>

                        <div class="col-md-4">
                            <i class="fa-solid fa-bed fa-2xl"></i>
                            <div class="text mt-1">Extra Bed</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class="h2 text-center fw-bold">Double Room</div>
            <!-- Image slide control -->
            <div id="carouselExampleIndicators1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/dr1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/dr2.jfif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/dr3.jfif" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <center>

                <a href="#" class="button mt-3">Book Now</a>
            </center>
            <div class="h3 mt-3">
                Double Rooms
            </div>
            <div class="p">Welcome to our cozy and inviting double room, designed to provide you with the utmost comfort and relaxation during your stay. As you step into the room, you'll immediately notice the warm and soothing ambiance that envelopes the space.</div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="text fs-5 ">ROOM OVERVIEW</div>
                    <!-- create gride -->
                    <div class="row g-3 text-center mt-2">
                        <div class="col-md-4">
                            <i class="fa-solid fa-people-group fa-2xl"></i>
                            <div class="text mt-1">2 Adults 2 kids</div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa-sharp fa-solid fa-temperature-arrow-down fa-2xl"></i>
                            <div class="text mt-1">Air conditioner</div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa-solid fa-wifi fa-2xl"></i>
                            <div class="text mt-1">Hight Speed Internet</div>
                        </div>
                    </div>
                    <div class="row g-3 text-center mt-2">
                        <div class="col-md-4">
                            <i class="fa-solid fa-phone fa-2xl"></i>
                            <div class="text mt-1">Telephone</div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa-solid fa-tv fa-2xl"></i>
                            <div class="text mt-1">TV</div>
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="text fs-5 ">AMENITIES</div>
                    <div class="row g-3 text-center mt-2">
                        <div class="col-md-4">
                            <i class="fa-solid fa-shower fa-2xl"></i>
                            <div class="text mt-1">Shower</div>
                        </div>

                        <div class="col-md-4">
                            <i class="fa-solid fa-bed fa-2xl"></i>
                            <div class="text mt-1">Extra Bed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>