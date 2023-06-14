<?php

require('server.php');
if ($_GET['idm']) {
    $id = $_GET["idm"];
    $delete = "DELETE FROM roomsinfo WHERE room_id='$id'";
    $sql = mysqli_query($conn, $delete);
    if ($sql) {
        header('location:room_manage.php');
    }
}
