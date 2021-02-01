<?php
    $koneksi =  mysqli_connect("localhost", "root","", "dbmahasiswa");
    $db = new mysqli("localhost", "root", "", "dbmahasiswa");
    if(mysqli_connect_errno($koneksi))
    {
        echo "Koneksi Gagal ". mysqli_connect_eror();
    }
?>
