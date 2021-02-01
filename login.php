<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('location:index.php');
    }
    require_once("koneksi.php");
?>
<br/>
<br/>
<br/>
<br/>
<br/>
    </table>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <table width="100%">
                    <tr>
                        <td><h3>Halaman Login</h3></td>
                    </tr>
                </table>
            </div>
            <form action="proses_login.php" method="post">
            <div class="card-body">
                <div class="form-group">
                    <input type="text" name="username" class="form-control colt-mb-9" placeholder="Masukkan Username">
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control colt-mb-9" placeholder="Masukkan Password">
                </div>
                <table width="20%">
                <tr>
                <td><input value="LOGIN" type="submit" class="btn btn-primary"></td><td><a href="daftar.php" class="btn btn-secondary">DAFTAR</a></td>
                </tr>
                </table>
            </div>
            </form>
        </div>
    </div>
</body>
</html>