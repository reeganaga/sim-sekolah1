<?php
include '../config/koneksi.php';
$db =new Database();
$db->koneksi();

$murid= new siswa();
$pengajar = new guru();
$matpel = new matpel();
$mengajar = new mengajar();
$pelajaran = new materi();
$ajaran= new tahun();
$terserah=new kelas();
$informasi = new informasi();
$login = new login();
$jadwal= new jadwal();
$kelas = new kelas();
$penilaian = new penilaian();
$nilai = new nilai();
$tahun_ajaran = new tahun_ajaran();
$datakelas  = new datakelas();

if(isset($_GET['aksi']))
{
  if($_GET['aksi']=='logout')
  {
    $login->logout();
    echo "<script>alert('anda keluar');window.location='login.php';</script>";
  }
}
if(empty($_SESSION['username'])){
  echo "<script>alert('anda harus login');window.location= 'login.php';</script>";
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

    <title>SMA Negeri 6 BS</title>
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="http://localhost/project/home.php">SMAN 6 BENGKULU SELATAN</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            <li><a href="index.php?aksi=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
               <!-- /.dropdown -->
                
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <td>
                  <?php if($_SESSION['tipe']=='admin' || $_SESSION['tipe']=='siswa') 
                  { 
                  ?>
                  <li class="active" >
                      <a href="index.php?halaman=siswa">
                          <i class="fa fa-table fa-fw"></i>
                          <span>Siswa</span>
                      </a>
                  </li>
                  </td>
                  <td>
                  <?php } ?>
                  <?php if($_SESSION['tipe']=='admin' || $_SESSION['tipe']=='guru')
                  {
                   ?>
                  <li class="mt">
                      <a href="index.php?halaman=guru">
                          <i class="fa fa-user"></i>
                          <span>Guru</span>
                      </a>
                  </li>
                  </td>
                  <?php } ?>          
                  <li class="mt">
                      <a href="index.php?halaman=materi">
                          <i class="fa fa-book"></i>
                          <span>Materi</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a href="index.php?halaman=nilai">
                          <i class="fa fa-th"></i>
                          <span>Nilai</span>
                      </a>
                  </li>
                  <?php if($_SESSION['tipe']=='admin')
                  {
                    ?>
                  <li class="mt">
                      <a href="index.php?halaman=mata_pelajaran">
                          <i class="fa fa-book"></i>
                          <span>Mata Pelajaran</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="index.php?halaman=mengajar">
                          <i class="fa fa-book"></i>
                          <span>Detail Mengajar</span>
                      </a>
                  </li>
                  <?php } ?>
                  <?php if($_SESSION['tipe']=='admin' || $_SESSION['tipe']=='siswa') {
                   ?>
                  <li class="mt">
                      <a href="index.php?halaman=informasi">
                          <i class="fa fa-user"></i>
                          <span>Informasi</span>
                      </a>
                  </li>     
                  <li class="mt">
                      <a href="index.php?halaman=jadwal">
                          <i class="fa fa-user"></i>
                          <span>Jadwal</span>
                      </a>
                  </li>  
                  <?php } ?>   
                  <?php 
                  if($_SESSION['tipe']=='admin' || $_SESSION['tipe']=='guru') {
                   ?>
                  <li class="mt">
                      <a href="index.php?halaman=penilaian">
                          <i class="fa fa-book"></i>
                          <span>Penilaian</span>
                      </a>
                  </li>
                  <?php } ?>        
                  <?php 
                  if($_SESSION['tipe']=='admin'){
                   ?> 
                   <li class="mt">
                     <a href="index.php?halaman=tahun_ajaran">
                       <i class="fa fa-table fa-fw"></i>
                       <span>Tahun Ajaran</span>
                     </a>
                   </li>
                   <li class="mt">
                     <a href="index.php?halaman=kelas">
                       <i class="fa fa-table fa-fw"></i>
                       <span>Kelas</span>
                     </a>
                   </li>
                   <?php } ?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
         <!--main content start-->
      <?php 
      if (isset($_GET['halaman'])) {
          if ($_GET['halaman']=='guru') {
            include 'guru.php';
          }elseif ($_GET['halaman']=='siswa') {
            include 'siswa.php';
          }elseif ($_GET['halaman']=='materi') {
            include 'materi.php';
          }elseif ($_GET['halaman']=='nilai') {
            include 'nilai.php';
          }elseif ($_GET['halaman']=='mata_pelajaran') {
            include 'mata_pelajaran.php';
          }elseif ($_GET['halaman']=='mengajar') {
            include 'mengajar.php';
          }elseif ($_GET['halaman']=='informasi') {
            include 'informasi.php';
          }elseif ($_GET['halaman']=='jadwal') {
            include 'jadwal.php';
          }elseif($_GET['halaman']=='penilaian') {
            include 'penilaian.php';
          }elseif($_GET['halaman']=='tahun_ajaran') {
            include 'tahun_ajaran.php';
          }elseif ($_GET['halaman']=='kelas') {
            include 'kelas.php' ;
          }
        }else {
          include 'home.php';
        } 
      ?>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
    <?php if (isset($_GET['halaman']) && $_GET['halaman']=='siswa'): ?>
      <script src="js/jquery-3.1.1.min.js"></script>
      <script src="js/bootstrap2.min.js"></script>
      <script src="bs_validator/dist/validator.min.js"></script>
    <?php endif ?>

</body>

</html>
<?php } ?>