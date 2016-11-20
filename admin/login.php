<?php 
include '../config/koneksi.php';
$db =new Database();
$db->koneksi();
$login = new login();

// echo "session =";print_r($_SESSION);
if(!empty($_SESSION ['username'])){
  echo "<script>alert('anda harus logout');window.location='index.php'; </script>";
}
else
{

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMA Negeri 6 Bengkulu Selatan</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>
	
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">SMA Negeri 6 Bengkulu Selatan</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-login" method="POST" >
                        <h2 class="form-login-heading">sign in now</h2>
                        <div class="login-wrap">
                            <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
                            <br>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <br>
                            <select name="tipe" id="" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="guru">Guru</option>
                                <option value="siswa">Siswa</option>
                            </select>
                            <br>
                            <input type="submit" name="login" value="Login" class="btn btn-theme btn-block">    
                        </div>                  
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 

if (isset($_POST['login'])) 
      {
    $masuk=$login->ceklogin($_POST['username'],$_POST['password'],$_POST['tipe']);
    if($masuk)
     {
        echo "<script>alert('sukses');
        window.location='index.php'; </script>";
     }
     else
     {
        echo "<script>alert('gagal, Coba lagi');
        window.location='login.php'; </script>";
     }
}
?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
<?php } ?>