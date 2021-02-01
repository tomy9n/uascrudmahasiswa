<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM tblogin WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
      echo "<div align='center'><h3>Mohon Maaf, Username Tidak terdaftar....</h3></div>";
      echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    }else{
    if($pass <> $hasil['password']) {
      echo "<div align='center'><h3>Mohon Maaf, Password Anda Salah....</h3></div>";
      echo "<meta http-equiv='refresh' content='1;url=login.php'>";    
    } else {
      $_SESSION['username'] = $hasil['username'];
      echo "<div align='center'><h3>Silahkan Tunggu, Halaman Utama Sedang Dimuat....</h3></div>";
      echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }
   }
?>
