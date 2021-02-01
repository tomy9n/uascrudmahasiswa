<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM tblogin WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
    echo "<div align='center'><h3>Mohon Maaf, Username Sudah terdaftar....</h3></div>";
    echo "<meta http-equiv='refresh' content='1;url=daftar.php'>";   
  } else {
    if(!$username || !$pass) {
      echo "<div align='center'><h3>Mohon Maaf, Ada Data yang Masih Kosong....</h3></div>";
      echo "<meta http-equiv='refresh' content='1;url=daftar.php'>";     
    } else {
      $data = "INSERT INTO tblogin VALUES (NULL, '$username', '$pass')";
      $simpan = $db->query($data);
      if($simpan) {
        echo "<div align='center'><h3>Akun Anda Sudah Terdaftar....</h3></div>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";      
      } else {
        echo "<div align='center'><h3>Mohon Maaf, Ada Gangguan Teknis, Mohon Hubungi Operator....</h3></div>";
        echo "<meta http-equiv='refresh' content='1;url=daftar.php'>";      }
    }
  }
?>