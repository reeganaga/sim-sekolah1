<?php 
include '../config/koneksi.php';
$db =new Database();
$db->koneksi();
$tahun_ajaran = new tahun_ajaran();
$nilai = new nilai();
$ajaran= new tahun();
$matpel = new matpel();
$murid= new siswa();
$ajaran= new tahun();

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cetak Nilai Siswa</title>

<style type="text/css">
body{font-family:Arial,Helvetica,sans-serif;font-size:11px;}
.krs_box{border:1px solid #000;}
.krs_box *{text-align:center;padding:0 1px;}
.krs_box td, .krs_box th{
	border-right:1px solid #000;
	border-bottom:1px solid #000;
}
.krs_box th{font-size:12px;}
.tl{text-align:left; padding-left: 10px}
.tc{text-align:center;}
.tr{text-align:right;}
.tj{text-align:justify;}
.fb{font-weight:bold;}
.line{border-bottom:1px dashed #000;clear:both;}
</style>
</head>
<body>


<div style="margin:0 auto;width:800px;">
	
		<br /><br />	
	<table align="center" width="800" border="0" cellpadding="0" cellspacing="0"><tr>
	<td><img src="images/sman6bs.png"  width="80" /></td>
	<td width="350" style="font-weight:bold;text-align:center;">
		<div style="font-size:16px;font-family:Times New Roman,Times,serif">SMAN 6 BENGKULU SELATAN</div>
		<div style="font-size:12px;">BENGKULU</div>
	</td>
	<td style="font-size:11px;text-align:right;" valign="top">
		<div style="font-weight: bold;">SMAN TERPADU</div>
		<div>Jl. Kayu Kunyit, Kec.Manna, Bengkulu Selatan
		<br/>Telp. (0739)38518</div>
	</td>
</tr></table>	
	<hr/>
	
	<table width="800" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr><th colspan="3" class="tl">Nilai Siswa SMAN 6 BS</th></tr>
	<?php 
		$tampil=$murid->tampilsiswasatu($_GET['noinduk']);
		foreach ($tampil as $siswa) {
			# code...
		
		 ?>
	<tr>
		
		
		<td width="90">Nama</td><td width="12">:</td>
		<td><?php echo $siswa['nama_siswa']; ?></td>
	</tr>
	<tr>
		<td>NIS</td><td>:</td>
		<td><?php echo $_GET['noinduk']; ?></td>
	</tr>
	
	<tr>
		<td>Semester</td><td>:</td>
		<td><?php echo $_GET['smtr']; ?></td>
	</tr>
	<tr>
		<td>Tahun Ajaran</td><td>:</td>
		
		<td><?php 
		$th=$ajaran->tampiltahundetail($_GET['tahun']); 
		foreach ($th as $ajaran) {
			echo $ajaran['nama_tahun'];
		}
		?></td>
		
	</tr>
	<?php } ?>
</table>

<br />
<table width="550" align="center" border="0" cellpadding="0" cellspacing="0" class="krs_box">
	<tr><th width="30">NO</th><th>MATA PELAJARAN</th>
		<th width="40">Nilai Tugas</th><th width="40">Nilai UTS</th><th width="40">Nilai UAS</th><th width="40">Rata-rata</th></tr>
			<?php 
			$nomor= 1;
				$matapel= $matpel->tampilmatpelsiswa($_SESSION['idjurusan']);
				foreach ($matapel as $siswamatpel) {
			?>	
			<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $siswamatpel ['nama_matpel']; ?></td>
					<?php 
						$tampilnilai = $nilai->tampilnilaipersiswa($_GET['noinduk'],$siswamatpel['id_matpel'],$_GET['smtr'],$_GET['tahun']);
							if (is_array($tampilnilai))
								{
									foreach ($tampilnilai as $tampilnilaisiswa)
									{
								 ?>
										<td><?php echo $tampilnilaisiswa['nilai_tugas'] ; ?></td>
										<td><?php echo $tampilnilaisiswa['nilai_mid'] ; ?></td>
										<td><?php echo $tampilnilaisiswa['nilai_ujian'] ; ?></td>
										<td><?php echo $tampilnilaisiswa['nilai_total'] ; ?></td>
							
			</tr>
			<?php 					}
							}		
			$nomor++;
			} ?>
		<tr>
	<!-- <th class="tr" colspan="2">Jumlah Nilai</th>
	<th class="tc" colspan="4">24</th></tr>
	<tr>
	<th class="tr" colspan="2">Indek Prestasi</th>
	<th class="tc" colspan="4">3,00</th></tr> -->
</table>

<br /><br /><div align="center">
	Yogyakarta, <?php $mydate=getdate(date("U"));
echo " $mydate[mday] $mydate[month] $mydate[year]"; ?><br />
	<img src="images/TTD.jpg"  width="150" /><br />
</div>

<br /><br />	
</div>
<div style="text-align:center;" class="tc">[<a href="javascript:void()" onclick="print()">CETAK</a>]</div>
<br /><br /></body>
</html>