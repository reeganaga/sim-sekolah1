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
      <td><p><strong>VISI MISI "SMA NEGERI 6 Bengkulu Selatan"<br></strong></p>
<p style="text-align: left;" align="center"><strong>VISI</strong></p>
<p>"Membangun proses belajar mengajar yang mengasikkan, menyenangkan dan mencerdaskan berdasarkan nilai-nilai keimanan dan ketaqwaan"</p>
<p>&nbsp;</p>
<p style="text-align: left;" align="center"><strong>MISI</strong></p>
<ol>
<br>
<li>Melaksanakan kegiatan pembelajaran secara lebih efektif dan inovatif dengan memberdayakan seluruh komponen sekolah.</li>
</br>
<li>Melaksanakan pengembangan bahan ajar untuk setiap mata  pelajarn.</li>
<br>
<li>Mendorong membantu siswa untuk dapat meningkatkan kemampuan akademik yang tinggi, melalui program peningkatan mutu lulusan untuk melanjutkan perguruan tinggi</li>
<br>
<li>Menumbuh kembangkan nili-nilai keamanan dan ketaqwaan dalam diri siswa.</li>
<br>
<li>Membentuk siswa-siswi yang kritis dan aktif dalam kegitan sekolah maupun di masyarakat sebagai perwujudan keimanan dan ketaqwaan.</li>
<br>
<li>Mewujudkan manajemen sekolah yang akuntabel dan dapat dipertanggungjawabkan.</li>
<br>
<li>Mengembangkan minat baca dan proses menulis bagi warga sekolah.</li>
<br>
<li>Mengembangkan sarana dan jaringan teknologi informasi untuk kegiatan pembelajaran</li>
<br>
<li>Menciptakan sarana dan prasarana sekolah yang nyaman, rindang dan asri supaya suasana belajar lebih kondusif.</li>
</ol>
<p></p></td>
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