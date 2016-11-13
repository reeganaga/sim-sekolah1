<?php
include 'config/koneksi.php';
$db =new Database();
$db->koneksi();

$murid= new siswa();
$pengajar = new guru();
$matpel = new matpel();
$pelajaran = new materi();
$ajaran= new tahun();
$terserah=new kelas();
$informasi = new informasi();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SMA Neegeri 6 BS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- Featured Slider  -->
<script type="text/javascript" src="layout/scripts/jquery-s3slider.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $("#featured_slide_").s3Slider({
    timeOut:10000 
  });
});
</script>
<!-- / Featured Slider -->
</head>
<body id="top">
<div class="wrapper row1">
  <div id="topnav">
    <ul>
      <li class="active"><a href="index.php"><strong>Home</strong></a></li>
      <li><a href="siswa.php"><strong>Siswa</strong></a></li>
      <li><a href="guru.php"><strong>Guru</strong></a></li>
      <li><a href="informasi.php"><strong>Informasi</strong></a></li>
      <li><a href="materi.php"><strong>Materi</strong></a></li>
      <li><a href="galeri.php"><strong>Gallery</strong></a></li>
      <li><a href="profil_sekolah.php"><strong>Profil Sekolah</strong></a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="header" class="clear">
  <div class="fl_left">
      <h1><a href="index.php">SMA Negeri 6 Bengkulu Selatan</a></h1>
      <p>Growing And Develoving</p>
    </div>
    <div class="fl_right">
      <form action="#" method="post" id=" ">
          <p><a href="/smabs/admin/login.php" class="btn btn-primary"><h3>LOGIN USER</h3></a></p>
      </form>
    </div>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
      <?php
if (isset($_GET['bagian'])) {
  if ($_GET['bagian']=='detail') { ?>  
    <div class="wrapper row5">
      <div id="container" class="clear">      
                      <?php 
                      $sekolah = $informasi->ambilinformasi($_GET['id_informasi']);
                      foreach ($sekolah as $info) {
                      ?>
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                          <div class="imgholder">
                              
                              <div class="col-sm-10">
                                  <h3><?php echo $info['judul_informasi']; ?></h3>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Informasi :</label>
                              <div class="col-sm-10">
                                 <?php echo $info['informasi']; ?>
                              </div>
                          </div>
                                       
                          <?php
              if(isset ($_POST['detailinformasi'])) {
              $informasi->detailinformasi($_POST['judul_informasi'],$_POST['informasi'],$_GET['id_informasi']) ;
              echo"<script>alert('data tersimpan'); window.location='index.php?halaman=informasi';</script>";
              }
              ?>
               <?php } ?>
          </form>
      </div>
    </div>

  <?php }
}else{ ?>
  <div class="wrapper row5">
    <div id="container" class="clear">
      <h4><i class="fa fa-angle-right"></i> Data Informasi</h4>
            <hr>
              <table class="table">
              <thead>
              <tr>
                <th>No</th>
                <th>Judul Informasi</th>
                <th>Tanggal Informasi</th>
                <th>Informasi</th>
                <th>Keterangan</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                  $nomor= 1;
                  $infosekolah = $informasi-> tampilinformasi();
                  foreach ($infosekolah as $info){
                  ?>
                <tr>
                  <td> <?php echo $nomor; ?></td>
                  <td> <?php echo $info ['judul_informasi']; ?></td> 
                  <td><?php echo $info ['tanggal_informasi']; ?></td>                                                             
                  <td> <?php echo $info ['informasi']; ?></td>
                  <td><a href="informasi.php?halaman=informasi&bagian=detail&id_informasi=<?php echo $info['id_informasi']; ?>">Detail</a></td>
                </tr>
                <?php
                $nomor++;
                }?>
                </tbody>
                </table>
    </div> 
  </div>
<?php } ?>
        <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="academiclinks" class="clear">
    <div class="linkbox">
      <h2>Info Perguruan Tinggi</h2>
      <ul>
        <li><a href="amikom.ac.id">&raquo; Sekolah Komputer Terpadu</a></li>
      </ul>
    </div>
    <div class="linkbox">
      <h2>Info Perguruan Tinggi</h2>
      <ul>
        <li><a href="#">&raquo; Sekolah Terpadu</a></li>
      </ul>
    </div>
    <div class="fl-fight">
      <h2>Info Perguruan Tinggi</h2>
      <ul>
        <li><a href="amikom.ac.id">&raquo; STMIK Amikom Yogyakarta</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear"> 
    <!-- ####################################################################################################### -->
    
    
    <div id="copyright" class="clear">
      <p class="center">Copyright &copy; <a href="#">SMA Negeri  Bengkulu Selatan</a></p>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
</body>
</html>