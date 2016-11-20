<?php 
if(isset($_GET['bagian'])){
	if($_GET['bagian']=='kelas'){ ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Kelas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Kelas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
	                  	<hr>
		                <table aria-describedby="dataTables-example_info" 
                          class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
		                <thead>
		                <tr>
		                	<th>No</th>
		                	<th>Nama Kelas</th>
		                </tr>
		                </thead>
		                <tbody>
				      	<?php
							$nomor= 1;
							$kelassiswa= $informasi->tampilkelas();
							foreach ($kelassiswa as $kelassatu) {
						?>
						<tr>
							<td> <?php echo $nomor; ?></td>
							<td><a href="index.php?halaman=penilaian&bagian=siswa&id_kelas=<?php echo $kelassatu['id_kelas']; ?>&id_matpel=<?php echo $_GET['id_matpel']; ?>"> <?php echo $kelassatu ['nama_kelas']; ?></a></td>
							</tr>
						<?php
						$nomor++;
						}?>
						</table>
						<?php
						$matpel = new matpel();
						if (isset ($_GET['aksi'])){
							if($_GET['aksi']=='hapus'){
							$matpel->hapusmatpel($_GET['id_matpel']);
							echo"<script>alert('data hapus'); window.location='index.php?halaman=mata_pelajaran';</script>";
							}
						} ?>
				        </tbody>
		                </table>
	                </div><! --/content-panel -->
	                <br>
	                <a href="index.php?halaman=mata_pelajaran&bagian=tambah" class="btn btn-primary">Tambah</a>
	              </div>
			</div>
	</div></div></div>
<?php	}
elseif($_GET['bagian']=='siswa') { ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Siswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="table-responsive">
	                	
                     <td>
                     <div class="form-group">
                     <form method="post">


                     <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Semester</label>
                             <div class="col-sm-10">
                                <select class="form-control" name="semester" required="required">
                                  	<option value=""> pilih Semester</option>
                                  	<option <?php if(isset($_POST['semester']) && $_POST['semester']=='ganjil')echo "selected"; ?> value="ganjil"> Ganjil</option>
                                  	<option <?php if(isset($_POST['semester']) && $_POST['semester']=='genap')echo "selected"; ?> value="genap"> Genap</option>
                              </select>
                         </div>
                     </div>

                     
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Ajaran</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="id_tahun" required="required">
                                  	<option value=""> pilih tahun</option>
                                  	<?php 
                                  	$tahun = $ajaran->tampiltahun();
                                    foreach ($tahun as $value) {
                                  	?>
                                  	<option <?php if(isset($_POST['id_tahun']) and $_POST['id_tahun']==$value['id_tahun']) echo "selected"; ?> value="<?php echo $value['id_tahun']; ?>"><?php echo $value['nama_tahun']; ?></option>
                                  	<?php } ?>
                                  </select>
                              </div>
                              <div class="col-md-10 col-sm-offset-2">
                              	<input type="submit" name="proses_nilai" value="Proses Nilai">
                              </div>

                          </div> 
								
                    <?php $siswa= $murid->tampilsiswakelasdetail($_GET['id_kelas']); ?>
                    </form>
                    <?php if (isset($_POST['proses_nilai']) && !empty($_POST['id_tahun']) && !empty($_POST['semester'])): ?>	
	                    <form method="post">
	                        <input type="hidden" name="id_tahun" value="<?php echo $_POST['id_tahun']; ?>">
	                        <input type="hidden" name="semester" value="<?php echo $_POST['semester']; ?>">
		               		<!--  <?php print_r($_GET); ?> -->
		                  	<hr>
			                <table aria-describedby="dataTables-example_info" 
	                          class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
			                <thead>
			                <tr><div class="form-group">
			                	<th>No</th>
			                	<th>Nama</th>
			                	<th>Nilai Tugas</th>
			                	<th>Nilai Mid</th>
			                	<th>Nilai Uas</th>
			                	
			                </tr>
			                </thead>
			                <tbody>
					      	<?php
								$nomor= 1;
								$index=0;
								$siswa= $murid->tampilsiswakelasdetail($_GET['id_kelas']);
								foreach ($siswa as $pecah) {
									$idsiswa[$index]=$pecah['id_siswa'];
									$idtahun[$index]=$pecah['id_tahun'];
									$post_id_tahun = $_POST['id_tahun'];
									$post_semester = $_POST['semester'];
								$cek_nilai = "SELECT * FROM nilai where id_siswa=$pecah[id_siswa] and id_kelas=$_GET[id_kelas] and id_matpel=$_GET[id_matpel] and id_tahun=$post_id_tahun and semester='$post_semester'";
								$nilai_siswa = mysql_fetch_assoc(mysql_query($cek_nilai));
								// print_r($nilai_siswa);
								// foreach ($nilai_siswa as $row) {
									$nilai_tugas = $nilai_siswa['nilai_tugas'];
									$nilai_mid = $nilai_siswa['nilai_mid'];
									$nilai_uas = $nilai_siswa['nilai_ujian'];
								// }
							?>
							<tr>
								<td> <?php echo $nomor; ?></td>
								<td> <?php echo $pecah ['nama_siswa']; ?></td>

								<td>
									<input value="<?php echo $nilai_tugas; ?>" data-mask="__" pattern="[0-9]{2}" type="text" name="nilai_tugas[]" required="required">
								</td>
								<td>
									<input value="<?php echo $nilai_mid; ?>" data-mask="__" pattern="[0-9]{2}" type="text" name="nilai_mid[]" required="required">
								</td>
								<td>
									<input value="<?php echo $nilai_uas; ?>" data-mask="__" pattern="[0-9]{2}" type="text" name="nilai_uas[]" required="required">
									<input type="hidden" name="id_siswa[]" value="<?php echo $pecah['id_siswa'] ?>">
								</td>
								
								
							</tr>
							<?php

							$nomor++;
							$index++;
							}?>
							</table>
							<input type="submit" name="submit" value="Simpan">
						</form>
                    <?php endif ?>

						<pre>
						<?php
						// print_r($_POST);
						if(isset($_POST['submit'])){

						$nilait=$_POST['nilai_tugas'];
						$nilaim = $_POST['nilai_mid'];
						$nilaiuas = $_POST['nilai_uas'];
						$idsiswa = $_POST['id_siswa'];
						// $nilaitotal = ($_POST['nilai_tugas']+$_POST['nilai_mid']+$_POST['nilai_uas'])/3;
						
						// $sem = $_POST['semester'] ;
						
						$nil = count($siswa);
						for ($i=0; $i < $nil; $i++) { 
								$nilaitambah = $nilait[$i]+$nilaim[$i]+$nilaiuas[$i];
							// $nilaitotal[$i]= $nilaitambah /3;
							$nilaitotal[$i]= $nilaitambah;
							$rata_rata[$i] = number_format($nilaitotal[$i],2,'.','');
								
									// mysql_query("INSERT INTO nilai(nilai_tugas,nilai_mid,nilai_ujian,nilai_total,semester,id_matpel,id_siswa,id_kelas,id_tahun)
									// 	VALUES('$nilait[$i]','$nilaim[$i]','$nilaiuas[$i]','$nilaitotal[$i]','$_POST[semester]','$_GET[id_matpel]','$idsiswa[$i]','$_GET[id_kelas]',$idtahun[$i])");
									mysql_query("INSERT INTO nilai
										(nilai_tugas,nilai_mid,nilai_ujian,semester,id_matpel,id_siswa,id_kelas,id_tahun,nilai_total)
											VALUES
										('$nilait[$i]','$nilaim[$i]','$nilaiuas[$i]','$_POST[semester]','$_GET[id_matpel]','$idsiswa[$i]','$_GET[id_kelas]',$_POST[id_tahun],'$nilaitotal[$i]')");

									// echo "INSERT INTO nilai
									// 	(nilai_tugas,nilai_mid,nilai_ujian,semester,id_matpel,id_siswa,id_kelas,id_tahun,rata_rata)
									// 		VALUES
									// 	('$nilait[$i]','$nilaim[$i]','$nilaiuas[$i]','$_POST[semester]','$_GET[id_matpel]','$idsiswa[$i]','$_GET[id_kelas]',$_POST[id_tahun],'$rata_rata[$i]')";
							
									// echo mysql_error();
								}echo "<script>alert('nila berhasil ditambah');</script>";
						}
						// foreach ($nilaitugas as $tugas)
						// {
						// 	mysql_query("INSERT INTO nilai(nilai_tugas)VALUES('$tugas')");
						// }

						
						// if(isset($_POST['submit'])) {

						// 	for( $i=0;$i<$siswa;$i++){
						// 	$penilaian->simpanpenilaian($_POST['semester'],$_POST['id_tahun'],$_POST['id_matpel'],$_POST['id_kelas'],
						// 		$_POST['nama_siswa'],$_POST['nilai_tugas[]'],$_POST['nilai_mid[]'],$_POST['nilai_uas[]'],$_POST['nilai_total[]']);
						// 	echo "<script>alert('data tersimpan'); window.location='index.php?halaman=penilaian&bagian=tampilnilai&id_kelas=1&id_matpel=1';</script>";
						// 	}
						// }
						 ?>
						 </pre>
				        </tbody>
		                </table>
	                </div><! --/content-panel -->
	                <br>
	              </div>
			</div>
	</div></div></div></div></div></div>
<?php }
}
else
{ 
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Matpel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Matpel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="dataTables_length" id="dataTables-example_length">
                                  <label>
                              <select name="dataTables-example_length" aria-controls="dataTables-example" 
                              class="form-control input-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                              </select>
                            </label>
                                 </div>
                                </div>
                               
                               <div class="col-sm-6">
                               <div class="dataTables_filter" id="dataTables-example_filter">
                               <label>Search:
                               <input aria-controls="dataTables-example" class="form-control input-sm" type="search">
                               </label>
                               </div>
                               </div>
                               </div>
		                <table aria-describedby="dataTables-example_info" 
                          class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
		                <thead>
		                <tr>
		                	<th>No</th>
		                	<th>Mata Pelajaran</th>
		                	<th>Nama Guru</th>
		                </tr>
		                </thead>
		                <tbody>
				      	<?php
							if($_SESSION['tipe']=='admin') {
								$nomor= 1;
							$matapel= $matpel->tampilmatpel();
							foreach ($matapel as $gurumatpel) {
						?>
						<tr>
							<td> <?php echo $nomor; ?></td>
							<td><a href="index.php?halaman=penilaian&bagian=kelas&id_matpel=<?php echo $gurumatpel['id_matpel']; ?>"><?php echo $gurumatpel ['nama_matpel']; ?></a></td>
							
						</tr>
						<?php
						$nomor++;
						}
							}
							else {
								$nomor= 1;
							$matapel= $matpel->tampilmatpelguru($_SESSION['idguru']);
							foreach ($matapel as $gurumatpel) {
						?>
						<tr>
							<td> <?php echo $nomor; ?></td>
							<td><a href="index.php?halaman=penilaian&bagian=kelas&id_matpel=<?php echo $gurumatpel['id_matpel']; ?>"><?php echo $gurumatpel ['nama_matpel']; ?></a></td>
							<td>
								<?php 
								$gurupengajar= $pengajar->tampilguru();
								foreach ($gurupengajar as $pembimbing){
									if($gurumatpel['id_guru']==$pembimbing['id_guru']){
										echo $pembimbing['nama_guru'];
									}
								} 
								?>
							</td>
							</tr>
						<?php
						$nomor++;
						}
							}
							?>
						</table>
						<?php
						$matpel = new matpel();
						if (isset ($_GET['aksi'])){
							if($_GET['aksi']=='hapus'){
							$matpel->hapusmatpel($_GET['id_matpel']);
							echo"<script>alert('data hapus'); window.location='index.php?halaman=mata_pelajaran';</script>";
							}
						} ?>
				        </tbody>
		                </table>
	                </div><! --/content-panel -->
	                <br>
	              </div>
			</div>
			</div>
		</div>
	</div>
</div>
	
	<?php 
}

 ?>

<script type="text/javascript">
Array.prototype.forEach.call(document.body.querySelectorAll("*[data-mask]"), applyDataMask);

function applyDataMask(field) {
    var mask = field.dataset.mask.split('');
    
    // For now, this just strips everything that's not a number
    function stripMask(maskedData) {
        function isDigit(char) {
            return /\d/.test(char);
        }
        return maskedData.split('').filter(isDigit);
    }
    
    // Replace `_` characters with characters from `data`
    function applyMask(data) {
        return mask.map(function(char) {
            if (char != '_') return char;
            if (data.length == 0) return char;
            return data.shift();
        }).join('')
    }
    
    function reapplyMask(data) {
        return applyMask(stripMask(data));
    }
    
    function changed() {   
        var oldStart = field.selectionStart;
        var oldEnd = field.selectionEnd;
        
        field.value = reapplyMask(field.value);
        
        field.selectionStart = oldStart;
        field.selectionEnd = oldEnd;
    }
    
    field.addEventListener('click', changed)
    field.addEventListener('keyup', changed)
}	
</script>