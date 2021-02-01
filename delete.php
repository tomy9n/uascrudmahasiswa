<?php
    include "koneksi.php";
    $id = $_GET['idmahasiswa'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM tbmahasiswa WHERE idmahasiswa = '$id'");
    echo "<meta http-equiv='refresh' content='1;url=data_mahasiswa.php'>";
?>