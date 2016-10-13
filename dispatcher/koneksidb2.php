<?php
    $server2 = "localhost";
    $usernameDatabase2 = "root";
    $passwordDatabase2 = "";
    $databaseName2 = "slims7";

    $con2 = mysqli_connect($server2,$usernameDatabase2,$passwordDatabase2,$databaseName2) or die("Koneksi gagal");

    //mysqli_select_db() digunakan untuk mengganti $databaseName dari $con
    //mysqli_select_db($con,$databaseName) or die("Database tidak bisa dibuka");
?>
