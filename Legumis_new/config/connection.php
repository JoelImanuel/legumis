<?php
    session_start();
    $con = mysqli_connect("localhost","root","","legumis");
    
    if(!$con) {
        echo "Koneksi gagal!";
        exit;
    }
?>