<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'bms';

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){
        die("connected failed". mysqli_connect_error());
    
    }else{
        // echo "connected";
    }

?>