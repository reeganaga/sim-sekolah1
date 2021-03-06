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
      <h4><i class="fa fa-angle-right"></i> Data Materi</h4>
              <hr>
              <table class="table">
              <thead>
              <tr>
                <th>No</th>
                <th>Judul Materi</th>
                <th>Tanggal Upload</th>
                <th>Mata Pelajaran</th>
                <th>File Materi</th>
              </tr>
              </thead>
              <tbody>
                <?php
              $nomor= 1;
              $buku= $pelajaran->tampilmateri();
              foreach ($buku as $bukupelajaran){
            ?>
            <tr>
              <td> <?php echo $nomor; ?></td>
              <td> <?php echo $bukupelajaran ['judul_materi']; ?></td>
              <td><?php echo $bukupelajaran['tanggal_upload']; ?></td>
              <td>
                <?php 
                $matapel = $matpel->tampilmatpel();
                foreach ($matapel as $pelajaran) {
                  if ($bukupelajaran['id_matpel']==$pelajaran['id_matpel']) {
                    echo $pelajaran['nama_matpel'];
                  }
                }
                 ?>
              </td>
              <td><a href="../admin/file_upload/<?php echo $bukupelajaran['file_materi']; ?>"><?php echo $bukupelajaran['file_materi']; ?></a></td>
              </tr>
            <?php
            $nomor++;
            } ?>
            </table>
            <?php
            $pelajaran = new materi();
            if (isset ($_GET['aksi'])){
              if($_GET['aksi']=='hapus'){
              $pelajaran->hapusmateri($_GET['id_materi']);
              echo"<script>alert('data hapus'); window.location='index.php?halaman=materi';</script>";
              }
            } ?>
                </tbody>
                </table>
               <br>
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
      <p class="center">Copyright &copy; <a href="#">SMA Negeri 6 Bengkulu Selatan</a></p>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
</body>
</html>