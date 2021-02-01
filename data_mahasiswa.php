<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
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
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
            <table width="100%">
                <tr>
                    <td align="right" colspan=4><?php echo "session sedang digunakan oleh : ".$_SESSION['username']; ?></td>
                </tr>
                <tr>
                    <td width="70.9%"><h3>Daftar Data Mahasiswa</h3></td>
                        <form action="data_mahasiswa.php" method="get">
                    <td align="right" width="19.9%">
                    <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>" class="form-control col-md_9" placeholder="Masukkan NPM / Nama Mahasiswa" /></td>
                    <td align="right" width="3.8%">
                    <button type="submit" class="btn btn-success">Cari</button>
                    </td>
                        </form>
                    <td align="right" width="5.4%"><a href="logout.php" class="btn btn-danger" onclick="return confirm('Anda akan Keluar, Lanjutkan?')">Logout</a></td>
                </tr>
            </table>
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a>
                <table class="table table-bordered">
                <thead>
                <tr>
                    <th>NO.</th>
                    <th>NPM</th>
                    <th>NAMA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>KODE POS</th>
                    <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <?php   
                    include "koneksi.php";
                    $no=1;
                    if(isset($_GET['cari'])){
                        $cari=$_GET['cari'];
                        $query="SELECT * FROM tbmahasiswa WHERE npm like '%".$cari."%' OR nama like '%".$cari."%' ORDER BY nama ASC";
                    }else{
                        $query="SELECT * FROM tbmahasiswa ORDER BY nama ASC";
                    }
                    $result=mysqli_query($koneksi, $query);
                    if(!$result) {
                        die("Query Error :".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    }
                    while ($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> <?php echo $no++; ?> </td>
                    <td> <?php echo $row['npm']; ?> </td>
                    <td> <?php echo $row['nama']; ?> </td>
                    <td> <?php echo $row['tempat_lahir']; ?> </td>
                    <td> <?php echo $row['tanggal_lahir']; ?> </td>
                    <td> <?php echo $row['jenis_kelamin']; ?> </td>
                    <td> <?php echo $row['alamat']; ?> </td>
                    <td> <?php echo $row['kode_pos']; ?> </td>
                    <td>
                    <a href="edit_mahasiswa.php?idmahasiswa=<?php echo $row['idmahasiswa'];?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="delete.php?idmahasiswa=<?php echo $row['idmahasiswa'];?>" onclick="return confirm('Data Akan Terhapus, Lanjutkan?')" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>

                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>

