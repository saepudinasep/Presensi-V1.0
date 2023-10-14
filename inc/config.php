<?php
    $koneksi = mysqli_connect("localhost", "root", "", "presline_db");
    if (!$koneksi) {
        echo "Koneksi Gagal";
    }
?>