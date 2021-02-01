<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
 <?php
 session_start();
 if(!isset($_SESSION['username'])){
     header('location:login.php');
 }else{
     $username=$_SESSION['username'];
 }
 ?>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <table width="100%">
                    <tr>
                        <td align="right" colspan=3><?php echo "session sedang digunakan oleh : ".$_SESSION['username']; ?></td>
                    </tr>
                    <tr>
                        <td width="78.7%"><h3>Input Data Mahasiswa</h3></td>
                        <td align="right" width="12%"><a href="data_mahasiswa.php" class="btn btn-success">Lihat Data</a></td>
                        <td align="right" width="9.3%"><a href="logout.php" class="btn btn-danger" onclick="return confirm('Anda akan Keluar, Lanjutkan?')">Logout</a></td>
                    </tr>
                </table>
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" class="form-control colt-mb-9" placeholder="Masukkan NPM">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control colt-mb-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control colt-mb-9" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control colt-mb-9" placeholder="Pilih Tanggal Lahir">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control colt-mb-9">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" cols="20" rows="4" class="form-control colt-mb-9" placeholder="Masukkan Alamat"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="number" name="kode_pos" class="form-control colt-mb-9" placeholder="Masukkan Kode Pos">
                    </div>


                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger" name="batal">BATAL</button> 
                </form>

            </div>
        </div>
    </div>


</body>
</html>

<?php

        include "koneksi.php";
        if(isset($_POST['simpan']))
        {
            $npm            = $_POST['npm'];
            $nama           = $_POST['nama'];
            $tempat_lahir   = $_POST['tempat_lahir'];
            $tanggal_lahir  = $_POST['tanggal_lahir'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $alamat         = $_POST['alamat'];
            $kode_pos       = $_POST['kode_pos'];

            mysqli_query($koneksi, "INSERT INTO tbmahasiswa VALUES('',
                '$npm','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$kode_pos'
            )") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=data_mahasiswa.php'>";
        }

?>