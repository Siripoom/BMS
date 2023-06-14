
<?php

require('server.php');
session_start();

$errors = array();

echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';

if (isset($_POST["signup"])) {

    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $number = $_POST["number"];

    $minLength = 8; // Minimum password length

    // echo $email;
    // echo $password1;
    // echo $password2;
    // echo $fname;
    // echo $lname;
    // echo $number;

    if ($password1 != $password2) {
        array_push($errors, "The two passwords do not match.");
        $_SESSION['error'] = "The two passwords do not match.";
    }
    if (strlen($password1) < $minLength) {
        array_push($errors, "password must a length between 6 and 8 characters.");
        $_SESSION['error'] = "password must a length between 6 and 8 characters.";
    }
    if (empty($number)) {
        array_push($errors, "Please enter phone number.");
        $_SESSION['error'] = "Please enter phone number.";
    }

    if (empty($lname)) {
        array_push($errors, "Please enter last name.");
        $_SESSION['error'] = "Please enter last name.";
    }
    if (empty($fname)) {
        array_push($errors, "Please enter first name.");
        $_SESSION['error'] = "Please enter first name.";
    }
    if (empty($password2)) {
        array_push($errors, "Please enter confirm password.");
        $_SESSION['error'] = "Please enter confirm password.";
    }
    if (empty($password1)) {
        array_push($errors, "Please enter password.");
        $_SESSION['error'] = "Please enter password.";
    }
    if (empty($email)) {
        array_push($errors, "Please enter email.");
        $_SESSION['error'] = "Please enter email.";
    }

    $user_check = "SELECT * FROM members WHERE email = '$email' LIMIT 1";
    $query = mysqli_query($conn, $user_check);
    $result = mysqli_fetch_assoc($query);

    if ($result) {
        if ($result['email'] == $email) {
            array_push($errors, "Email already exist.");
            $_SESSION['error'] = "Email already exist.";
        }
    }

    if (count($errors) == 0) {
        $insert = "INSERT INTO `members`(email, password, first_name, last_name,   phone_number) VALUES ('$email','$password1','$fname','$lname','$number')";
        $query = mysqli_query($conn, $insert);
        if ($query) {
            $_SESSION['email'] = $email;
            header('location:index.php');
        }
    } else {
        header('location:signup.php');
    }
}


$target_dir = "upload/";  // Modify the directory path as per your needs
$roomnum = $_POST['roomnumber'];
$price = $_POST['price'];
$cap = $_POST['cap'];
$cate = $_POST['cateroom'];
$detail = $_POST['detail'];

if (isset($_POST['save'])) {

    if (!empty($_FILES["file"]["name"])) {
        $filename = basename($_FILES["file"]["name"]);
        $targetFilePath = $target_dir . $filename;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'jpeg', 'png');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $sql = $conn->query("INSERT INTO `roomsinfo`(`room_number`, `detail`, `cate_room`, `price`,`cap_person`, `img`,status) VALUES ('$roomnum','$detail','$cate','$price','$cap','" . $filename . "','vacant')");
                echo "Uploaded";
            } else {
            }
        }
    }
}



?>