<?php
// error_reporting(1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
class database{
	public $host = 'localhost';
	public $user = 'root';
	public $pass = 'root';
	public $db   = 'sman6bs';
	
	function koneksi(){
		mysql_connect($this->host, $this->user, $this->pass);
		mysql_select_db($this->db);
	}
}
class siswa{
	function tampilsiswa(){
		//mengambil data siswa dalam 1 paket
		//$siswa=1 paket data
		$siswa= mysql_query("SELECT * FROM siswa");
		//pecah ke array $s=array("id_siswa","nama_siswa","email_siswa")
		while($s=mysql_fetch_array($siswa))
			$data[]=$s;
			return $data;
	}
	function tampilsiswanilai($id_kelas){
		//mengambil data siswa dalam 1 paket
		//$siswa=1 paket data
		$siswa= mysql_query("SELECT * FROM siswa s join nilai n on s.id_siswa=n.id_siswa WHERE s.id_kelas='$id_kelas' order by s.id_kelas ");
		//pecah ke array $s=array("id_siswa","nama_siswa","email_siswa")
		while($s=mysql_fetch_array($siswa))
			$data[]=$s;
			return $data;
	}
	
	function tampilsiswasatu($nis)
	{
		$siswa= mysql_query("SELECT * FROM siswa WHERE nis='$nis'");
		while($s=mysql_fetch_array($siswa))
			$data[]=$s;
			return $data;
	}
	function tampilsiswakelas($id_kelas) {
		$siswa=mysql_query("SELECT * FROM siswa WHERE id_kelas='$id_kelas' ");
		while($s=mysql_fetch_array($siswa))
			$data[]=$s;
		return $data;
	}
	function tampilsiswakelasdetail($id_kelas) {
		$siswa=mysql_query("SELECT * FROM siswa s join tahun_ajaran t on s.id_tahun=t.id_tahun WHERE s.id_kelas='$id_kelas' order by s.id_siswa ");
		while($s=mysql_fetch_array($siswa))
			$data[]=$s;
		return $data;
	}

	function simpansiswa($foto,$nis,$nama_siswa,$password,$tanggal_lahir,$tempat_lahir,$alamat,$telpon,	$email,$status,$kelamin,$nama_ayah,$pekerjaaan_ayah,$id_tahun,$id_kelas)
		{
		$namafile = $_FILES['foto_siswa']['name'];
		$lokasifile= $_FILES['foto_siswa']['tmp_name'];

		move_uploaded_file($lokasifile,"foto_upload/".$namafile);
		mysql_query("INSERT INTO siswa(foto_siswa,nis,nama_siswa,password,tanggal_lahir,tempat_lahir,alamat,telpon,	email,status,kelamin,nama_ayah,pekerjaaan_ayah,id_tahun,id_kelas)	VALUES('$namafile','$nis','$nama_siswa','$password','$tanggal_lahir','$tempat_lahir','$alamat','$telpon','$email','$status','$kelamin','$nama_ayah','$pekerjaaan_ayah','$id_tahun','$id_kelas')");
	}
	function hapussiswa($id_siswa){
		mysql_query("DELETE FROM siswa WHERE id_siswa='$id_siswa'");
	}
	function ambilsiswa($id_siswa){
		$siswa= mysql_query("SELECT * FROM siswa WHERE id_siswa='$id_siswa'");
			while ($s=mysql_fetch_array($siswa))
				$data[]=$s;
				return $data;
	}
	function ubahsiswa($foto,$nis,$nama_siswa,$password,$tanggal_lahir,$tempat_lahir,$alamat,$telpon,$email,$status,$kelamin ,$nama_ayah,$pekerjaaan_ayah,$id_tahun,$id_kelas,$id_siswa){
		$namafile = $_FILES['foto_siswa']['name'];
		$lokasifile= $_FILES['foto_siswa']['tmp_name'];

		move_uploaded_file($lokasifile,"foto_upload/".$namafile);
		mysql_query("UPDATE siswa SET foto_siswa='$namafile',nis='$nis',nama_siswa='$nama_siswa',password='$password',tanggal_lahir='$tanggal_lahir',tempat_lahir='$tempat_lahir',alamat='$alamat',telpon='$telpon',email='$email',status='$status',kelamin='$kelamin',nama_ayah='$nama_ayah',pekerjaaan_ayah='$pekerjaaan_ayah',id_tahun='$id_tahun',id_kelas='$id_kelas' WHERE id_siswa='$id_siswa'");
	}
}

class guru{
	function tampilguru(){
		//mengambil data guru dalam 1 paket
		//$guru=1 paket data
		$guru=mysql_query("SELECT * FROM guru");
		//pecah ke array $s=array("id_guru","nama_guru")
		while($g=mysql_fetch_array($guru))
			$data[]=$g;
			return $data;
	}
	function tampilgurusatu($nip){
		$guru=mysql_query("SELECT * FROM guru WHERE nip='$nip'");
		while($g=mysql_fetch_array($guru))
			$data[]=$g;
			return $data;
	}
	function simpanguru($nip,$password,$namaguru,$tanggallahir,$tempatlahir,$alamat,$pangkat,
		$jabatan)
		{
		mysql_query("INSERT INTO guru(nip,password,nama_guru,tanggal_lahir,tempat_lahir,alamat,pangkat,
		jabatan)
		VALUES('$nip','$password','$namaguru','$tanggallahir','$tempatlahir','$alamat',
		'$pangkat','$jabatan')");
	}
	function hapusguru($id_guru) {
		mysql_query("DELETE FROM guru WHERE id_guru='$id_guru'");
	}
	function ambilguru($id_guru) {
	$guru=mysql_query("SELECT * FROM guru WHERE id_guru='$id_guru'");
		while($g=mysql_fetch_array($guru))
			$data[]=$g;
			return $data;
	}
	function ubahguru($nip,$password,$namaguru,$tanggallahir,$tempatlahir,$alamat,$pangkat,
		$jabatan,$id_guru) {
	mysql_query("UPDATE guru SET nip='$nip',password='$password' ,nama_guru= '$namaguru',
	tanggal_lahir='$tanggallahir',tempat_lahir='$tempatlahir', alamat='$alamat',pangkat='$pangkat',jabatan='$jabatan'
	WHERE id_guru='$id_guru'");
	}
}
class tahun{
	function tampiltahun()
	{
		$tahun=mysql_query("SELECT * FROM tahun_ajaran");
		while ($s=mysql_fetch_array($tahun))
			$data[]= $s;
		return $data;
	}
	function tampiltahundetail($id)
	{
		$tahun=mysql_query("SELECT * FROM tahun_ajaran WHERE id_tahun='$id'");
		while ($s=mysql_fetch_array($tahun))
			$data[]= $s;
		return $data;
	}
	function simpantahun($nama_tahun)
	{
		mysql_query("INSERT INTO tahun_ajaran(nama_tahun) VALUES('$nama_tahun')");
	}

	function tampiltahun_id($id_tahun){
		$tahun=mysql_query("SELECT * FROM tahun_ajaran where id_tahun='$id_tahun'");
		// echo "SELECT * FROM tahun_ajaran where id_tahun='$id_tahun'";
		// while ($t=mysql_fetch_row($tahun))
			$data[]=mysql_fetch_row($tahun);
		return $data;	
	}
}
class kelas{
	function tampilkelas(){
		$kelas= mysql_query("SELECT * FROM kelas");
		while ($s=mysql_fetch_array($kelas))
			$data[]=$s;
		return $data;
	}
	function simpantahun($nama_tahun)
	{
		mysql_query("INSERT INTO kelas(nama_kelas) VALUES('$nama_kelas')");
	}
}
class materi{
	function tampilmateri() {
		$materi=mysql_query("SELECT * FROM materi");
		while($m=mysql_fetch_array($materi))
			$data[]=$m;
			return $data;
	}
	function tampilmaterisatu() {
		$materi=mysql_query("SELECT * FROM materi");
		while($m=mysql_fetch_array($materi))
			$data[]=$m;
			return $data;
	}
	function simpanmateri($judul_materi,$tanggal_upload,$id_matpel ,$file_materi) {
		$namafile = $_FILES['file_materi']['name'];
		$lokasifile= $_FILES['file_materi']['tmp_name'];
		$ukuran=$_FILES['file_materi']['size'];
		print_r($ukuran);
		move_uploaded_file($lokasifile,"file_upload/".$namafile);
		mysql_query("INSERT INTO materi(judul_materi,tanggal_upload,file_materi,id_matpel)
		VALUES('$judul_materi','$tanggal_upload','$namafile','$id_matpel')");
	}
	function hapusmateri($id_materi) {
		mysql_query("DELETE FROM materi WHERE id_materi='$id_materi' ");
	}
	function ambilmateri($id_materi) {
		$materi=mysql_query("SELECT * FROM materi WHERE id_materi='$id_materi' ");
		while($m=mysql_fetch_array($materi))
			$data[]=$m;
		return $data;
	}
	function ubahmateri($judul_materi,$tanggal_upload,$id_matpel,$file_materi,$id_materi) {
		$namafile = $_FILES['file_materi']['name'];
		$lokasifile= $_FILES['file_materi']['tmp_name'];
		move_uploaded_file($lokasifile,"file_upload/".$namafile);
		mysql_query("UPDATE materi SET judul_materi='$judul_materi',tanggal_upload='$tanggal_upload',id_matpel='$id_matpel',file_materi='$namafile' WHERE id_materi='$id_materi' ");
	}
}
class matpel{
	function tampilmatpel(){
		$matpel=mysql_query("SELECT * FROM matpel");
		while($p=mysql_fetch_array($matpel))
			$data[]=$p;
		return $data;
	}
	function tampilmatpelguru($idguru){
		$matpel=mysql_query("SELECT * FROM matpel m JOIN mengajar me ON m.id_matpel = me.id_matpel join guru g ON me.id_guru=g.id_guru WHERE me.id_guru='$idguru' order by m.id_matpel");
		while($p=mysql_fetch_array($matpel))
			$data[]=$p;
		return $data;
	}
	function tampilmatpelsiswa($idj){
		$matpel=mysql_query("SELECT * FROM matpel where id_jurusan='$idj' or id_jurusan=1");
		while($p=mysql_fetch_array($matpel))
			$data[]=$p;
		return $data;
	}
	function simpanmatpel($nama_matpel){
		mysql_query("INSERT INTO matpel (nama_matpel) VALUES ('$nama_matpel')");
	}
	function hapusmatpel($id_matpel){
		mysql_query("DELETE FROM matpel WHERE id_matpel='$id_matpel'");
	}
	function ambilmatpel($id_matpel){
		$matpel=mysql_query("SELECT * FROM matpel WHERE id_matpel='$id_matpel'");
		while($m=mysql_fetch_array($matpel))
			$data[]=$m;
		return $data;
	}
	function ubahmatpel($nama_matpel,$id_matpel){
		mysql_query("UPDATE matpel SET nama_matpel='$nama_matpel' WHERE id_matpel='$id_matpel' ");
	}
}
class mengajar{
	function tampilmengajar(){
		$mengajar=mysql_query("SELECT * FROM mengajar m JOIN matpel ma ON m.id_matpel = ma.id_matpel JOIN guru gr on m.id_guru = gr.id_guru order by m.id_mengajar");
		while($p=mysql_fetch_array($mengajar))
			$data[]=$p;
		return $data;
	}
	function tampilmengajarguru($idguru){
		$mengajar=mysql_query("SELECT * FROM mengajar WHERE id_guru='$idguru'");
		while($p=mysql_fetch_array($mengajar))
			$data[]=$p;
		return $data;
	}
	function tampilmatapelajaran(){
		$mengajar=mysql_query("SELECT * FROM matpel");
		while($p=mysql_fetch_array($mengajar))
			$data[]=$p;
		return $data;
	}
	function tampilmengajarsiswa(){
		$mengajar=mysql_query("SELECT * FROM mengajar");
		while($p=mysql_fetch_array($mengajar))
			$data[]=$p;
		return $data;
	}
	function simpanmengajar($idmatpel,$idguru){
		mysql_query("INSERT INTO mengajar (id_matpel,id_guru) VALUES ('$idmatpel','$idguru')");
	}
	function hapusmengajar($id_mengajar){
		mysql_query("DELETE FROM mengajar WHERE id_mengajar='$id_mengajar'");
	}
	function ambilmengajar($id_mengajar){
		$mengajar=mysql_query("SELECT * FROM mengajar m JOIN matpel ma ON m.id_matpel = ma.id_matpel JOIN guru g ON m.id_guru = g.id_guru WHERE m.id_mengajar='$id_mengajar'");
		while($m=mysql_fetch_array($mengajar))
			$data[]=$m;
		return $data;
	}
	function ubahmengajar($idmatpel,$idguru,$idmengajar){
		mysql_query("UPDATE mengajar SET id_matpel='$idmatpel', id_guru='$idguru' WHERE id_mengajar='$idmengajar' ");
	}
}

class informasi{
	function tampilinformasi(){
		$informasi= mysql_query("SELECT * FROM informasi");
		while($i=mysql_fetch_array($informasi))
			$data[]=$i;
		return $data;
	}
	function simpaninformasi($judul_informasi,$tanggal_informasi,$informasi){
		mysql_query("INSERT INTO informasi (judul_informasi,tanggal_informasi,informasi) VALUES ('$judul_informasi','$tanggal_informasi','$informasi')");
	}
	function hapusinformasi($id_informasi){
		mysql_query("DELETE FROM informasi WHERE id_informasi='$id_informasi'");
	}
	function ambilinformasi($id_informasi) {
		$informasi= mysql_query("SELECT * FROM informasi WHERE id_informasi='$id_informasi'");
		while($i=mysql_fetch_array($informasi))
			$data[]=$i;
		return $data;
	}
	function detailinformasi($judul_informasi,$informasi,$id_informasi) {
		mysql_query("UPDATE informasi SET judul_informasi='$judul_informasi',informasi='$informasi' WHERE id_informasi='$id_informasi' ");
	}
	function ubahinformasi($judul_informasi,$tanggal_informasi,$informasi,$id_informasi) {
		mysql_query("UPDATE informasi SET judul_informasi='$judul_informasi',tanggal_informasi='$tanggal_informasi' ,informasi='$informasi' WHERE id_informasi='$id_informasi' ");
	}
	function tampilkelas(){
		$kelas=mysql_query("SELECT * FROM kelas");
		while($k=mysql_fetch_array($kelas))
			$data[]=$k;
		return $data;
	}
}
class jadwal{
	function tampiljadwal(){
		$jadwal=mysql_query("SELECT * FROM jadwal j JOIN kelas k on k.id_kelas = j.id_kelas");
		while($j=mysql_fetch_array($jadwal))
			$data[]=$j;
		return $data;
	}
	function simpanjadwal($judul_jadwal,$file_jadwal,$id_kelas){
		$namafile = $_FILES['file_jadwal']['name'];
		$lokasifile= $_FILES['file_jadwal']['tmp_name'];
		move_uploaded_file($lokasifile,"file_upload/".$namafile);
		mysql_query("INSERT INTO jadwal (judul_jadwal,file_jadwal,id_kelas) VALUES ('$judul_jadwal','$namafile',$id_kelas);");
	}
	function hapusjadwal($id_jadwal){
		mysql_query("DELETE FROM jadwal WHERE id_jadwal='$id_jadwal'");
	}
	function ambiljadwal($id_jadwal){
		$jadwal=mysql_query("SELECT * FROM jadwal WHERE id_jadwal='$id_jadwal'");
		while($j=mysql_fetch_array($jadwal))
			$data[]=$j;
		return $data;
	}
	function ubahjadwal($judul_jadwal,$file_jadwal,$id_jadwal,$id_kelas){
		$namafile=$_FILES['file_jadwal']['name'];
		$lokasifile=$_FILES['file_jadwal']['tmp_name'];
		move_uploaded_file($lokasifile,"file_upload/".$namafile);
		mysql_query("UPDATE jadwal SET judul_jadwal='$judul_jadwal',file_jadwal='$namafile', id_kelas=$id_kelas WHERE id_jadwal='$id_jadwal'");
	}

	function ubahjadwal_no_file($judul_jadwal,$id_jadwal,$id_kelas){
		mysql_query("UPDATE jadwal SET judul_jadwal='$judul_jadwal', id_kelas=$id_kelas WHERE id_jadwal='$id_jadwal'");
	}


}
class tahun_ajaran{
	function tampiltahun(){
		$tahun=mysql_query("SELECT * FROM tahun_ajaran");
		while ($t=mysql_fetch_array($tahun))
			$data[]=$t;
		return $data;
	}
	function hapustahun($id_tahun){
		mysql_query("DELETE FROM tahun_ajaran WHERE id_tahun ='$id_tahun'");
	}
	function simpantahun($nama_tahun){
		mysql_query("INSERT INTO tahun_ajaran (nama_tahun) VALUES ('$nama_tahun'); ");
	}
}

class login{
	function ceklogin($username,$password,$tipe)
	{
		$pss=md5($password);
		if($tipe=='admin')
		{
			//mengambil data 
			$orang=mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$pss'");
			$pecah=mysql_fetch_array($orang);
			//menghitung data yang cocok
			$hitung=mysql_num_rows($orang);
			if($hitung==1)
			{
				//daftarkan orang itu di scandir(directory)ession
				$_SESSION['username'] = $pecah['username'];
				$_SESSION['email'] = $pecah['email'];
				$_SESSION['tipe']='admin';
				return true;
			}
		}
		elseif ($tipe=='guru') 
		{
			//mengambil data 
			$orang=mysql_query("SELECT * FROM guru WHERE nip='$username' AND password='$pss'");
			$pecah=mysql_fetch_array($orang);
			//menghitung data yang cocok
			$hitung=mysql_num_rows($orang);
			if($hitung==1)
			{
				//daftarkan orang itu di session
				$_SESSION['username'] = $pecah['nama_guru'];
				$_SESSION['nomorinduk'] = $pecah['nip'];
				$_SESSION['tipe']='guru';
				$_SESSION['idguru'] = $pecah['id_guru'];
				return true;
		}
	}
	else{
		//mengambil data 
			$orang=mysql_query("SELECT * FROM siswa WHERE nis='$username' AND password='$pss'");
			$pecah=mysql_fetch_array($orang);
			//menghitung data yang cocok
			$hitung=mysql_num_rows($orang);
			if($hitung==1)
			{
				//daftarkan orang itu di session
				$_SESSION['username'] = $pecah['nama_siswa'];
				$_SESSION['email'] = $pecah['email'];
				$_SESSION['tipe']='siswa';
				$_SESSION['nomorinduk'] = $pecah['nis'];
				$_SESSION['idjurusan'] = $pecah['id_jurusan'];
				return true;
			}
		}
	}
	function logout()
	{
		session_destroy();
	}
}
class penilaian{
	function tampilpenilaian(){
		$penilaian=mysql_query("SELECT * FROM penilaian");
		while($p=mysql_fetch_array($penilaian))
			$data[]=$p;
		return $data;
	}
	function simpanpenilaian($nilai_tugas,$nilai_mid,$nilai_uas,$rata_rata,$semester,$id_matpel,$id_siswa,$id_kelas,$id_tahun)
		{
		mysql_query("INSERT INTO penilaian(nilai_tugas,nilai_mid,nilai_uas,rata_rata,semester,id_matpel,id_siswa,id_tahun)
		VALUES('nilai_tugas','$nilai_mid','$nilai_uas','$rata_rata' ,'$semester','$id_matpel','$id_siswa','$id_tahun')");
	}
	function tampilpenilaiankelas($id_kelas) {
		$penilaian=mysql_query("SELECT * FROM penilaian WHERE id_kelas='$id_kelas' ");
		while($p=mysql_fetch_array($penilaian))
			$data[]=$p;
		return $data;
	}
}
class nilai 
{
	function tampil_nilai()
	{
		$tampil_nilai = mysql_query("SELECT * FROM nilai");
		while ($n=mysql_fetch_array($tampil_nilai)) 
			$data[]=$n;
		return $data;
	}
	function tampil_nilai_limit()
	{
		$tampil_nilai = mysql_query("SELECT * FROM nilai limit 1");
		while ($n=mysql_fetch_array($tampil_nilai)) 
			$data[]=$n;
		return $data;
	}
	function tampilnilaisiswa($id_kelas)
	{
		$tampil_nilai = mysql_query("SELECT * FROM nilai WHERE id_kelas='$id_kelas'");
		while ($n=mysql_fetch_array($tampil_nilai)) 
			$data[]=$n;
		return $data;
	}
	function tampilnilaipersiswa($nis,$idmatpel,$smtr,$th)
	{
		$tampil_nilai = mysql_query("SELECT * FROM nilai n JOIN siswa s on n.id_siswa = s.id_siswa WHERE s.nis='$nis' and n.id_matpel='$idmatpel' and n.semester = '$smtr' and n.id_tahun='$th' order by n.id_nilai");
		$hitung=mysql_num_rows($tampil_nilai);
		if ($hitung>0)
		{
			while ($n=mysql_fetch_array($tampil_nilai)) 
				$data[]=$n;
			return $data;
		}
		else
		{
			echo " ";
		}

	}
	function tampilnilaijoin($id_kelas,$id_matpel,$semester,$id_tahun)
	{
		$tampil_nilai = mysql_query("SELECT * FROM nilai n join siswa s on n.id_siswa=s.id_siswa WHERE s.id_kelas='$id_kelas' and n.id_matpel = '$id_matpel' and n.semester = '$semester' and n.id_tahun = '$id_tahun' order by s.id_siswa ");
		// echo "SELECT * FROM nilai n join siswa s on n.id_siswa=s.id_siswa WHERE s.id_kelas='$id_kelas' and n.id_matpel = '$id_matpel' and n.semester = '$semester' and n.id_tahun = '$id_tahun' order by s.id_siswa ";
		while ($n=mysql_fetch_array($tampil_nilai)) 
			$data[]=$n;
		return $data;
	}
}
class datakelas
{
	function tampilkelas(){
		$tampilkelas=mysql_query("SELECT * FROM kelas") ;
		while($k=mysql_fetch_array($tampilkelas))
		$data[]=$k;
		return $data;
	}
	function simpankelas($nama_kelas){
		mysql_query("INSERT INTO kelas (nama_kelas) VALUES ('$nama_kelas') ");
	}
	function hapuskelas($id_kelas){
		mysql_query("DELETE FROM kelas WHERE id_kelas='$id_kelas'") ;
	}
	function ambilkelas($id_kelas){
		$kelas=mysql_query("SELECT *FROM kelas WHERE id_kelas='$id_kelas'");
		while($k=mysql_fetch_array($kelas))
			$data[]=$k;
		return $data;
	}
	function ubahkelas($nama_kelas,$id_kelas){
		mysql_query("UPDATE kelas SET nama_kelas='$nama_kelas' WHERE id_kelas='$id_kelas'");
	}
}
?>