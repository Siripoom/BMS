<?php
require('server.php');
session_start();
// echo '<script>
//     setTimeout(function() {
//         swal({
//             title: "Logout success",
//             text: "",
//             type: "success"
//         }, function() {
//             window.location = "index.php";
//         });
//     }, 1000);
//     </script>';
session_destroy();
unset($_SESSION['email']);
header('location:index.php');
exit;
