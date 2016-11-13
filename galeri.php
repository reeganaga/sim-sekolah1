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
    <div id="gallery"> 
      <!-- ########### -->
      <div class="gallerycontainer clear">
        <div class="fl_left">
          <h2>Staff &amp; Students</h2>
          <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
          <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
        </div>
        <div class="fl_right">
          <ul>
            <li><a href="images/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 1"><img src="../images/demo/150x150.gif" alt="Title Here" /></a></li>
            <li><a href="../images/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 2"><img src="../images/demo/150x150.gif" alt="Title Here" /></a></li>
            <li><a href="../images/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 3"><img src="../images/demo/150x150.gif" alt="Title Here" /></a></li>
            <li class="last"><a href="../images/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 4"><img src="../images/demo/150x150.gif" alt="Title Here" /></a></li>
            <li><a href="../images/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 5"><img src="../images/demo/150x150.gif" alt="Title Here" /></a></li>
            <li><a href="../images/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 6"><img src="../images/demo/150x150.gif" alt="Title Here" /></a></li>
            <li><a href="../images/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 7"><img src="../images/demo/150x150.gif" alt="Title Here" /></a></li>
            <li class="last"><a href="../images/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 8"><img src="../images/demo/150x150.gif" alt="Title Here" /></a></li>
          </ul>
        </div>
      </div>
      <!-- ########### --> 
    </div>
    <!-- ####################################################################################################### -->
    <div class="pagination">
      <ul>
        <li class="prev"><a href="#">&laquo; Previous</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">6</a></li>
        <li class="current">7</li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">14</a></li>
        <li><a href="#">15</a></li>
        <li class="next"><a href="#">Next &raquo;</a></li>
      </ul>
    </div>
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