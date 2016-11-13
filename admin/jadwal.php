<?php 
error_reporting(1);
if(isset($_GET['bagian'])){
 	if ($_GET['bagian']=='tambah') { ?>
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Jadwal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Jadwal
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Judul Jadwal  :</label>
                              <div class="col-sm-10">
                                  <input type="text" name="judul_jadwal" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kelas  :</label>
                              <div class="col-sm-10">
                                  <?php $data_kelas = $terserah->tampilkelas(); 
                                  // print_r($data_kelas);
                                  ?>
                                    <select name="id_kelas" class="form-control">
                                      <?php foreach ($data_kelas as $kelas): ?>
                                        <option value="<?php echo $kelas['id_kelas'] ?>"><?php echo $kelas['nama_kelas'] ?></option>
                                      <?php endforeach ?>
                                    </select>
                                  <!-- <input type="text" name="judul_jadwal" class="form-control"> -->
                              </div>
                          </div>                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">File Jadwal  :</label>
                              <div class="col-sm-10">
                                  <input type="file" name="file_jadwal" class="form-control">
                              </div>
                          </div>
                          <input type="submit" name="simpanjadwal" value="Simpan">
                          <?php
							if(isset ($_POST['simpanjadwal'])) {
							$jadwal->simpanjadwal($_POST['judul_jadwal'],$_FILES['file_jadwal'],$_POST['id_kelas']);
							echo"<script>alert('data tersimpan'); window.location='index.php?halaman=jadwal';</script>";
							 }
						  ?>
                       </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div>
		</div>
	</div>f
</div>
 <?php	}elseif ($_GET['bagian']=='ubah') { ?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Jadwal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Jadwal
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                  	<?php
						$kelas= $jadwal->ambiljadwal($_GET['id_jadwal']);
						foreach ($kelas as $kelasjadwal){
					?>
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Judul Materi :</label>
                          <div class="col-sm-10">
                          <input type="text" name="judul_jadwal" class="form-control" value="<?php echo $kelasjadwal['judul_jadwal']; ?> ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Kelas :</label>
                          <div class="col-sm-10">
                            <?php $data_kelas = $terserah->tampilkelas(); ?>
                            <select name="id_kelas" class="form-control">
                              <?php foreach ($data_kelas as $kelas): ?>
                                <?php if ($kelas['id_kelas']==$kelasjadwal['id_kelas']){ $selected = 'selected'; }else{ $selected = ''; } ?>
                                <option <?php echo $selected; ?> value="<?php echo $kelas['id_kelas']; ?>"><?php echo $kelas['nama_kelas']; ?></option>
                              <?php endforeach ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                        	<label class="col-sm-2 col-sm-2 control-label">File Jadwal :</label>
                        	<div class="col-sm-10">
                        	<input type="file" name="file_jadwal" class="form-control" value="<?php echo $kelasjadwal['file_jadwal']; ?> ">
                          <!-- <input type="text" name="file_temp" value="<?php echo $kelasjadwal['file_jadwal']; ?>"> -->
                        	</div>
                        </div>
                        	<input type="submit" name="ubahjadwal" value="Simpan">
                        <?php
						if(isset ($_POST['ubahjadwal'])) {
              if ($_FILES['file_jadwal']['error']==4) {
                // echo "gak ada file";
                $jadwal->ubahjadwal_no_file($_POST['judul_jadwal'],$_GET['id_jadwal'],$_POST['id_kelas']);
              }else{
                $jadwal->ubahjadwal($_POST['judul_jadwal'],$_FILES['file_jadwal'],$_GET['id_jadwal'],$_POST['id_kelas']);
                // echo "ada file";
              }
              print_r($_REQUEST);
              print_r($_FILES['file_jadwal']);
							echo"<script>alert('data diubah'); window.location='index.php?halaman=jadwal';</script>";
							}
						?>
                       </form>   
                       <?php } ?>                
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div>
		</div>
	</div>
</div>
 <?php	}

}else{ ?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Jadwal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Jadwal
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                        	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		                <thead>
		                <tr>
		                	<th>No</th>
		                	<th>Judul jadwal</th>
                      <th>Nama Kelas</th>
                      <th>File Jadwal</th>
		                	<th>aksi</th>
		                </tr>
		                </thead>
		                <tbody>
				      	<?php
							if($_SESSION['tipe']=='admin' || $_SESSION['tipe']=='guru'){
								$nomor= 1;
							$kelas= $jadwal->tampiljadwal();
							foreach ($kelas as $kelasjadwal) {
						?>
						<tr>
							<td> <?php echo $nomor; ?></td>
              <td> <?php echo $kelasjadwal ['judul_jadwal']; ?></td>
							<td> <?php echo $kelasjadwal ['nama_kelas']; ?></td>
							<td><a href="file_upload/<?php echo $kelasjadwal['file_jadwal']; ?>"><?php echo $kelasjadwal['file_jadwal']; ?></a></td>
							<td><a href="index.php?halaman=jadwal&aksi=hapus&id_jadwal=<?php echo $kelasjadwal['id_jadwal'] ?>">Hapus</a>
							<a href="index.php?halaman=jadwal&bagian=ubah&id_jadwal=<?php echo $kelasjadwal['id_jadwal'] ?>">Ubah</a></td>
						</tr>
						<?php
						$nomor++;
						}

						// $pelajaran = new materi();
						if (isset ($_GET['aksi'])){
							if($_GET['aksi']=='hapus'){
							$jadwal->hapusjadwal($_GET['id_jadwal']);
							echo"<script>alert('data hapus'); window.location='index.php?halaman=jadwal';</script>";
							}
						} 
							}
							else{
							 $nomor= 1;
							$kelas= $jadwal->tampiljadwal();
							foreach ($kelas as $kelasjadwal) {
						?>
						<tr>
							<td> <?php echo $nomor; ?></td>
							<td> <?php echo $kelasjadwal ['judul_jadwal']; ?></td>
							<td><a href="file_upload/<?php echo $kelasjadwal['file_jadwal']; ?>"><?php echo $kelasjadwal['file_jadwal']; ?></a></td>
							
						</tr>
						<?php
						$nomor++;
						}
							} ?>
						</table>
						<?php
						// $pelajaran = new materi();
						if (isset ($_GET['aksi'])){
							if($_GET['aksi']=='hapus'){
							$jadwal->hapusjadwal($_GET['id_jadwal']);
							echo"<script>alert('data hapus'); window.location='index.php?halaman=jadwal';</script>";
							}
						} ?>
				        </tbody>
		                </table>
	                </div><! --/content-panel -->
	                <br>
	                <?php 
	                if($_SESSION['tipe']=='admin') {
	                 ?>
	                <a href="index.php?halaman=jadwal&bagian=tambah" class="btn btn-primary">Tambah</a>
	                <?php }	 ?>
	              </div>
			</div>
		</div>
	</div>
</div>

<?php }
?>

