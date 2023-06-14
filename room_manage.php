<?php

require('server.php');

$sql = "SELECT * FROM roomsinfo WHERE room_id";
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
    <title>Rooms</title>
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
                <div class="text fs-2 mb-2 fw-bold">Room management</div>
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
                            <th scope="col" class="text-center">Picture</th>
                            <th scope="col">Room number</th>
                            <th scope="col">Price</th>
                            <th scope="col">Capacity</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //  echo '<img src="data:image/jpeg;base64,' . base64_encode($row['img']) . '">';

                        while ($row = mysqli_fetch_assoc($result)) {
                            $imageurl = 'upload/' . $row['img'];
                        ?>
                            <tr>
                                <td scope="row" class="text-center" style="display: inline-block;"> <img src="<?php echo $imageurl ?>" class="img-thumbnail " style="width: 60%; height: auto;" alt="..."> </td>
                                <td scope="row"><?php echo $row['room_number'] ?></td>
                                <td scope="row"><?php echo $row['price'] ?></td>
                                <td scope="row"><?php echo $row['cap_person'] ?></td>
                                <td scope="row"><?php echo $row['status'] ?></td>
                                <td scope="row">
                                    <a href="delete.php?idm=<?php echo $row["room_id"]; ?>" name="delete" class="btn" id="deletebtn"><i class="fa-solid fa-minus"></i></a>
                                    
                                </td>
                                <td scope="row">
                                    
                                    <button type="submit" id="editbtn" class="btn mx-2" data-bs-toggle="modal"><i class="fa-solid fa-pen-to-square"></i></button>
                                </td>
                            <?php } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add room</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Room number</label>
                            <input type="text" name="roomnumber" class="form-control" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">

                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" aria-describedby="basic-addon1">

                            <label for="exampleFormControlInput1" class="form-label">Capacity</label>
                            <input type="text" name="cap" class="form-control" aria-describedby="basic-addon1">
                        </div>
                        <div class=" mb-3">

                            <label for="exampleFormControlInput1" class="form-label">Room categories</label>
                            <select class="form-select" id="inputGroupSelect01" name="cateroom">
                                <option selected>...</option>
                                <option value="Single room">Single room</option>
                                <option value="Double room">Double room</option>
                            </select>

                        </div>
                        <div class=" mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                        </div>
                        <div class=" mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Details</label>
                            <textarea name="detail" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>