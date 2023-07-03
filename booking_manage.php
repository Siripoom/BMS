<?php

require('server.php');

$sql = "SELECT * FROM booking  JOIN members ON booking.customer_name = members.member_id";
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d471f90c89.js" crossorigin="anonymous"></script>
    <title>Book management</title>
</head>
<style>
    body {
        font-family: playfair-display;

    }
</style>

<body>
    <?php require('sidemenu.php') ?>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="text fs-2 mb-2 fw-bold">Book management</div>
            </div>
            <div class="row g-2 mb-2 ">
                <div id="addbtn" class="btn mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Add</div>
                <!-- <div id="editbtn" class="btn mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></div>
                <div id="deletebtn" class="btn mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-minus"></i></div> -->

            </div>
            <div class="table-responsive">
                <table class="table table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Customer name</th>
                            <th scope="col">Booing date</th>
                            <th scope="col">Adults</th>
                            <th scope="col">Children</th>
                            <th scope="col">Rooms</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                            <td scope="row"><?php echo $row['id'] ?></td>
                                <td scope="row"><?php echo $row['first_name'] ?></td>
                                <td scope="row"><?php echo $row['booking_date'] ?></td>
                                <td scope="row"><?php echo $row['adults'] ?></td>
                                <td scope="row"><?php echo $row['children'] ?></td>
                                <td scope="row"><?php echo $row['rooms'] ?></td>
                                <td scope="row"><?php echo $row['status'] ?></td>
                            <?php } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>