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
							<td><a href="index.php?halaman=nilai&bagian=siswa&id_kelas=<?php echo $kelassatu['id_kelas']; ?>&id_matpel=<?php echo $_GET['id_matpel']; ?>"> <?php echo $kelassatu ['nama_kelas']; ?></a></td>
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
                    <h1 class="page-header">Data Nilai Siswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Nilai Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="table-responsive">
                        <?php 
                        // $n = $nilai->tampil_nilai_limit();
                        // foreach ($n as $value) {
                        if (isset($_SESSION['nilai_sem'])) {
                        $semester = $_SESSION['nilai_sem']; 	# code...
                        }else{$semester='';}
                         ?>
	                	<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Semester</label>
                             <div class="col-sm-10">

                                <input type="" value="<?php echo $semester; ?>" disabled>
                         </div>
                     </div>
                     <?php //} ?>
                     <td>
                     <div class="form-group">
                    	
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Ajaran</label>
                              <div class="col-sm-10">
                              <?php 
                               ?>
                                  <?php if(isset($_SESSION['nilai_tahun'])): 
                            		$isi_ajaran =  $ajaran->tampiltahun_id($_SESSION['nilai_tahun']);
                                  	echo $isi_ajaran[0][1];
                                   endif ?>
                              </div>
                          </div> 
                         
                        
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
		                	<th>Total nilai</th>
		                </tr>
		                </thead>
		                <tbody>
				      	<?php
							$nomor= 1;
							$n = $nilai->tampilnilaijoin($_GET['id_kelas'],$_GET['id_matpel'],$_SESSION['nilai_sem'],$_SESSION['nilai_tahun']);
                        	foreach ($n as $value) {
						
						?>
						<tr>
							<td> <?php echo $nomor; ?></td>
							<?php 
								$siswa = $murid->tampilsiswakelas($_GET['id_kelas']);
							foreach ($siswa as $data) {
								if ($value['id_siswa']==$data['id_siswa']) {
							 ?>
							 <td><?php echo $value ['nama_siswa'];   ?>
							</td>
							<?php } } ?>
							<td>
								<?php echo $value['nilai_tugas']; ?>
							</td>
							<td>
								<?php echo $value['nilai_mid']; ?>
							</td>
							<td>
								<?php echo $value['nilai_ujian']; ?>
							<td>
								<?php echo $value['nilai_total']; ?>
							</td>
						</tr>

						<?php
						$nomor++;
						
						}  ?>
						</table>
						
				        </tbody>
		                </table>
		                <a href="print-nilai-siswa.php?id_kelas=<?php echo $_GET['id_kelas']; ?>&id_matpel=<?php echo $_GET['id_kelas']; ?>" class="btn btn-primary">Cetak</a>
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
                    <h1 class="page-header">Data Nilai Siswa</h1>

                    <?php 
                        $n = $nilai->tampil_nilai_limit();
                        foreach ($n as $value) {

                         ?>
	                	<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Semester</label>
                             <div class="col-sm-10">
                             <form action="" method="POST">
                                <select class="form-control" name="semester">
                                  	<option value=""> pilih Semester</option>
                                  	<option value="Ganjil"> Ganjil</option>
                                  	<option value="Genap"> Genap</option>
                              </select>
                             
                         	</div>
                     </div>
                     <?php } ?>
                     <td>
                     <div class="form-group">                    
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Ajaran</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="id_tahun">
                                    <option> pilih tahun</option>
                                    <?php 
                                    $tahun = $ajaran->tampiltahun();
                                    foreach ($tahun as $value) {
                                      if($pecah['id_tahun']==$value['id_tahun']){ ?>
                                        <option value="<?php echo $value['id_tahun'];?>" selected> <?php echo $value['nama_tahun'];?></option>
                                      <?php } ?>
                                      <option value="<?php echo $value['id_tahun'];?>"> <?php echo $value['nama_tahun'];?></option>
                                    <?php } ?>
                          <input type="submit" name="submit" value="OK"/>
                                  </select>
                              </div>
                          </div> 
                      </form>
                              <?php 
                              if (isset($_POST['submit'])) {
                              	$smtr=$_POST['semester'];
                              	$th=$_POST['id_tahun'];
                              	
                              	$_SESSION['nilai_sem'] = $smtr;
                              	$_SESSION['nilai_tahun'] = $th;

                              }
                              else
                              {
								$smtr= "Ganjil"; 
								$th= "1"; 
                              }	
                               ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Nilai <?php  /*var_dump( $_SESSION );*/ ?>
                            <?php if (isset($_SESSION['nilai_sem']) and isset($_SESSION['nilai_tahun'])): 
                            echo 'Semester : '.$_SESSION['nilai_sem'].", tahun ajaran : " ;
                            $isi_ajaran =  $ajaran->tampiltahun_id($_SESSION['nilai_tahun']);
                            // print_r($isi_ajaran);
                            echo $isi_ajaran[0][1];
                             endif ?>
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
		                	<?php if ($_SESSION['tipe']=='siswa'): ?>
		                	<th>Nilai Tugas</th>
		                	<th>Nilai UTS</th>
		                	<th>Nilai UAS</th>
		                	<th>Nilai Rata Rata</th>
		                	<?php endif ?>
		                	
		                </tr>
		                </thead>
		                <tbody>
				      	<?php
							if($_SESSION['tipe']=='admin') 
							{
								$nomor= 1;
								$matapel= $matpel->tampilmatpel();
								foreach ($matapel as $gurumatpel)
								{
						?>
								<tr>
									<td> <?php echo $nomor; ?></td>
									<td><a href="index.php?halaman=nilai&bagian=kelas&id_matpel=<?php echo $gurumatpel['id_matpel']; ?>"><?php echo $gurumatpel ['nama_matpel']; ?></a></td>

								</tr>
								<?php
								$nomor++;
								}
							}
							
							elseif($_SESSION['tipe']=='guru') {
								$nomor= 1;
							$matapel= $matpel->tampilmatpelguru($_SESSION['idguru']);
							foreach ($matapel as $gurumatpel) {
						?>
						<tr>
							<td> <?php echo $nomor; ?></td>
							<td><a href="index.php?halaman=nilai&bagian=kelas&id_matpel=<?php echo $gurumatpel['id_matpel']; ?>"><?php echo $gurumatpel ['nama_matpel']; ?></a></td>
							
							</tr>
						<?php
						$nomor++;
						}
							}
						else {
							$nomor= 1;
							$matapel= $matpel->tampilmatpelsiswa($_SESSION['idjurusan']);
							foreach ($matapel as $siswamatpel) {
						?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo $siswamatpel ['nama_matpel']; ?></td>
							<?php 
							$tampilnilai = $nilai->tampilnilaipersiswa($_SESSION['nomorinduk'],$siswamatpel['id_matpel'],$smtr,$th);
							if (is_array($tampilnilai))
							{
								// print_r($tampilnilai);
								foreach ($tampilnilai as $tampilnilaisiswa)
								{
									// print_r($tampilnilaisiswa);
								?>
										<td><?php echo $tampilnilaisiswa['nilai_tugas'] ; ?></td>
										<td><?php echo $tampilnilaisiswa['nilai_mid'] ; ?></td>
										<td><?php echo $tampilnilaisiswa['nilai_ujian'] ; ?></td>
										<td><?php echo number_format($tampilnilaisiswa['nilai_total']/3,2,',',',') ; ?></td>
								</tr>
								<?php
								}
							}
							
							$nomor++;
							}
						?>
						</tr>
						<?php
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
		                <!-- <a href="print.php?noinduk=<?php echo  $_SESSION['nomorinduk'] ; ?>&smtr=<?php echo $smtr; ?>&tahun=<?php echo $th; ?>" target="_blank" class="btn btn-primary">Cetak</a> -->
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

