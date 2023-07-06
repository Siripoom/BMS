<?php
require('server.php');
session_start();

if (isset($_POST['save'])) {

    if (isset($_GET['editbtn'])) {
        $roomid = $_GET["editbtn"];

        $target_dir = "upload/";  // Modify the directory path as per your needs
        $roomnum = $_POST['roomnumber'];
        $price = $_POST['price'];
        $cap = $_POST['cap'];
        $cate = $_POST['cateroom'];
        $detail = $_POST['detail'];

        if (!empty($_FILES["file"]["name"])) {
            $filename = basename($_FILES["file"]["name"]);
            $targetFilePath = $target_dir . $filename;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            $allowTypes = array('jpg', 'jpeg', 'png');
            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    $sql = $conn->query("UPDATE `roomsinfo` SET `room_number`='$roomnum',`detail`='$detail',`cate_room`='$cate',`price`='$price',`cap_person`='$cap',`img`= '" . $filename . "'  WHERE $roomid");

                    echo '
                            <script>
                                setTimeout(function() {
                                    swal({
                                            title: "Success",
                                            text: "Saved",
                                            type: "success"
                                        }, function() {
                                            window.location = "room_manage.php";
                                        });
                                }, 1000);
                            </script>
                ';
                } else {
                    echo "error";
                }
            }
        }
    }
}
