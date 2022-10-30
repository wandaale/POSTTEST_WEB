<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "makeup2";

    $conn = mysqli_connect($server, $user, $password, $db_name);

    If (!$conn){
        die("GAGAL TERHUBUNG KE DATABASE : " . mysqli_connect_error());
    }
?>