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
<!--
Template Name: Educational Theory
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
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
      <li><a href="gallery.php"><strong>Gallery</strong></a></li>
      <li><a href="profil_sekolah.php"><strong>Profil Sekolah</strong></a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="header" class="clear">
   <div class="fl_right">
      <form action="#" method="post" id=" ">
          <p><a href="/project/admin/login.php" class="btn btn-primary"><h3>LOGIN USER</h3></a></p>
      </form>
    </div>
  </div>
</div
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="featured_slide_">
    <ul id="featured_slide_Content">
      <li class="featured_slide_Image"><a href="#"><img src="images/demo/foto3.jpg" alt="" /></a>
        <div class="introtext">
          <h2>Pelantikan Anggota OSIS</h2>
          <p>Kepala sekolah dengan pembina OSIS dan anggota OSIS baru. Selamat menjalankan tugas sebagai anggota OSIS baru di SMA Negeri 6 Bengkulu Selatan.</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/demo/foto4.png" alt="" /></a>
        <div class="introtext">
           <h2>Pengibaran Bendera Pusaka</h2>
          <p><a href="http://www.os-templates.com/"></a>Pengibaran bendera merah putih yang dilakukan di SMA Negeri 6 Bengkulu Selatan berjalan hikmat untuk memperingati hari kemerdekaan Indonesia.</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/demo/foto4.jpg" alt="" /></a>
        <div class="introtext">
          <h2>HUT SMAN 6 BS</h2>
          <p>SMA Negeri 6 Bengkulu Selatan telah melaksanakan peryaan Hari Ulang Tahun yang ke XIII tahun 2015, dengan mengadakan lombah antar sekolah.</p>
        </div>
      </li>
      <li class="clear featured_slide_Image"><!-- Important - Leave This Empty --></li>
    </ul>
  </div>
  <div id="hpage_featured_info" class="clear">
    <ul>
      <li><a href="#"><img src="images/demo/140x120.gif" alt="" /> <strong>Make An Application</strong></a></li>
      <li><a href="#"><img src="images/demo/140x120.gif" alt="" /> <strong>Order A Prospectus</strong></a></li>
      <li class="last"><a href="#"><img src="images/demo/140x120.gif" alt="" /> <strong>Fees &amp; Funding</strong></a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <ul id="hpage_latestnews">
          <li class="odd clear">
            <div class="imgholder"><img src="images/demo/80x80.gif" alt="" /></div>
            <a href="#">Nequatdui laorem</a>
            <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
          </li>
          <li class="even clear">
            <div class="imgholder"><img src="images/demo/80x80.gif" alt="" /></div>
            <a href="#">Nequatdui laorem</a>
            <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
          </li>
          <li class="odd clear">
            <div class="imgholder"><img src="images/demo/80x80.gif" alt="" /></div>
            <a href="#">Nequatdui laorem</a>
            <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
          </li>
          <li class="even clear">
            <div class="imgholder"><img src="images/demo/80x80.gif" alt="" /></div>
            <a href="#">Nequatdui laorem</a>
            <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
          </li>
          <li class="odd clear">
            <div class="imgholder"><img src="images/demo/80x80.gif" alt="" /></div>
            <a href="#">Nequatdui laorem</a>
            <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
          </li>
          <li class="even clear">
            <div class="imgholder"><img src="images/demo/80x80.gif" alt="" /></div>
            <a href="#">Nequatdui laorem</a>
            <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
          </li>
        </ul>
      </div>
      <div class="fl_right">
        <h2>Sentumquisque Morbi</h2>
        <img src="images/demo/300x120.gif" alt="" />
        <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
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
		 <li><a href="unib.ac.id">&raquo; Universitas Bengkulu</a></li>
		  <li><a href="unihaz.ac.id">&raquo; Universitas Prof Dr Hazairin SH</a></li>
		   <li><a href="unived.ac.id">&raquo; Universitas Dehasen</a></li>
		    <li><a href="umb.ac.id">&raquo; Universitas Muhammadiah Bengkulu</a></li>
			<li><a href="ugm.ac.id">&raquo; Universitas Gajah Mada</a></li>
			<li><a href="uny.ac.id">&raquo; Universitas Negeri Yogyakarta</a></li>
			<li><a href="upi.ac.id">&raquo; Universitas Pendidikan Indonesia</a></li>
			<li><a href="unpad.ac.id">&raquo; Universitas Padjajaran</a></li>
			<li><a href="itb.ac.id">&raquo; Institut Teknologi Bandung</a></li>
			<li><a href="ui.ac.id">&raquo; Universitas Indonesia</a></li>
			<li><a href="ipb.ac.id">&raquo; Institut Pertanian Bogor</a></li>
      </ul>
    </div>
    <div class="linkbox">
      <h2>Info Perguruan Tinggi</h2>
      <ul>
       <li><a href="amikom.ac.id">&raquo; Sekolah Komputer Terpadu</a></li>
		 <li><a href="unib.ac.id">&raquo; Universitas Bengkulu</a></li>
		  <li><a href="unihaz.ac.id">&raquo; Universitas Prof Dr Hazairin SH</a></li>
		   <li><a href="unived.ac.id">&raquo; Universitas Dehasen</a></li>
		    <li><a href="umb.ac.id">&raquo; Universitas Muhammadiah Bengkulu</a></li>
			<li><a href="ugm.ac.id">&raquo; Universitas Gajah Mada</a></li>
			<li><a href="uny.ac.id">&raquo; Universitas Negeri Yogyakarta</a></li>
			<li><a href="upi.ac.id">&raquo; Universitas Pendidikan Indonesia</a></li>
			<li><a href="unpad.ac.id">&raquo; Universitas Padjajaran</a></li>
			<li><a href="itb.ac.id">&raquo; Institut Teknologi Bandung</a></li>
			<li><a href="ui.ac.id">&raquo; Universitas Indonesia</a></li>
			<li><a href="ipb.ac.id">&raquo; Institut Pertanian Bogor</a></li>
      </ul>
    </div>
    <div class="fl-fight">
      <h2>Info Perguruan Tinggi</h2>
      <ul>
        <li><a href="amikom.ac.id">&raquo; STMIK Amikom Yogyakarta</a></li>
		<li><a href="amikom.ac.id">&raquo; Sekolah Komputer Terpadu</a></li>
		 <li><a href="unib.ac.id">&raquo; Universitas Bengkulu</a></li>
		  <li><a href="unihaz.ac.id">&raquo; Universitas Prof Dr Hazairin SH</a></li>
		   <li><a href="unived.ac.id">&raquo; Universitas Dehasen</a></li>
		    <li><a href="umb.ac.id">&raquo; Universitas Muhammadiah Bengkulu</a></li>
			<li><a href="ugm.ac.id">&raquo; Universitas Gajah Mada</a></li>
			<li><a href="uny.ac.id">&raquo; Universitas Negeri Yogyakarta</a></li>
			<li><a href="upi.ac.id">&raquo; Universitas Pendidikan Indonesia</a></li>
			<li><a href="unpad.ac.id">&raquo; Universitas Padjajaran</a></li>
			<li><a href="itb.ac.id">&raquo; Institut Teknologi Bandung</a></li>
			<li><a href="ui.ac.id">&raquo; Universitas Indonesia</a></li>
			<li><a href="ipb.ac.id">&raquo; Institut Pertanian Bogor</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear"> 
    <!-- ####################################################################################################### -->
    <div class="fl_left clear">
      <div class="fl_left center"><img src="images/demo/worldmap.gif" alt="" /><br />
        <a href="#">Find Us With Google Maps &raquo;</a></div>
      <address>
      Address Line 1<br />
      Address Line 2<br />
      Town/City<br />
      Postcode/Zip<br />
      <br />
      Tel: xxxx xxxx xxxxxx<br />
      Email: <a href="#">chairulannuar@yahoo.com</a>
      </address>
    </div>
    <div class="fl_right">
      <div id="social" class="clear">
        <p>Stay Up to Date With Whats Happening</p>
        <ul>
          <li><a style="background-position:0 0;" href="#">Twitter</a></li>
          <li><a style="background-position:-72px 0;" href="#">LinkedIn</a></li>
          <li><a style="background-position:-142px 0;" href="#">Facebook</a></li>
          <li><a style="background-position:-212px 0;" href="#">Flickr</a></li>
          <li><a style="background-position:-282px 0;" href="#">RSS</a></li>
        </ul>
      </div>
      <div id="newsletter">
        <form action="#" method="post">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
            <input type="text" id="subscribe" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>
    <div id="copyright" class="clear">
      <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
      <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
</body>
</html>