<?php 
if (isset($_GET['bagian'])) {
	if($_GET['bagian']=='tambah') { ?>
	<div id="page-wrapper">
		<div class="rows">
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
                            Tambah Data Matpel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                    <div class="table-responsive">
                      	<form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Nama Kelas :</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_kelas" class="form-control">
                              </div>
                          </div>
                          <input type="submit" name="simpankelas" value="Simpan">
                          <?php 
                          if(isset($_POST['simpankelas'])) {
                          	$datakelas->simpankelas($_POST['nama_kelas']);
                          	echo "<script>alert('Data Tersimpan');window.location='index.php?halaman=kelas'; </script>";
                          }
                           ?>
                    	</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php	}elseif($_GET['bagian']=='ubah') { ?>
	<div id="page-wrapper">
		<div class="rows">
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
                            Tambah Data Matpel
                        </div>
                        <div class="panel-body">
                    <div class="table-responsive">
                    <?php 
                    $data=$datakelas->ambilkelas($_GET['id_kelas']) ;
                    	foreach ($data as $kelassiswa) {
                     ?>
                      	<form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Nama Kelas :</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_kelas" class="form-control" value="<?php echo $kelassiswa['nama_kelas']; ?>">
                              </div>
                          </div>
                          <input type="submit" name="ubahkelas" value="Simpan">
                          <?php 
                          if(isset($_POST['ubahkelas'])) {
                          	$datakelas->ubahkelas($_POST['nama_kelas'],$_GET['id_kelas']);
                          	echo "<script>alert('Data Tersimpan');window.location='index.php?halaman=kelas'; </script>";
                          }
                           ?>
                           <?php  } ?>
                    	</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		</div>
	</div>
	
	<?php }
}else{ ?>
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
                            Tabel Data Kelas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                        	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				                <thead>
				                <tr>
				                	<th>No</th>
				                	<th>Nama Kelas</th>
				                	<th>Aksi</th>
				                </tr>
				                </thead>
				                <tbody>
						      	<?php
									$nomor= 1;
									$kelas= $datakelas->tampilkelas();
									foreach ($kelas as $kelassiswa) {
								?>
								<tr>
									<td> <?php echo $nomor; ?></td>
									<td> <?php echo $kelassiswa ['nama_kelas']; ?></td>
									
									<td><a href="index.php?halaman=kelas&aksi=hapus&id_kelas=<?php echo $kelassiswa['id_kelas'] ?>">Hapus</a>
									<a href="index.php?halaman=kelas&bagian=ubah&id_kelas=<?php echo $kelassiswa['id_kelas'] ?>">Ubah</a></td>
								</tr>
								<?php
								$nomor++;
								}?>
								</table>
								<?php
								
								if (isset ($_GET['aksi'])){
									if($_GET['aksi']=='hapus'){
									$datakelas->hapuskelas($_GET['id_kelas']);
									echo"<script>alert('data hapus'); window.location='index.php?halaman=kelas';</script>";
									}
								} ?>
						        </tbody>
				                </table>
	                </div><! --/content-panel -->
	                <br>
	                <a href="index.php?halaman=kelas&bagian=tambah" class="btn btn-primary">Tambah</a>
	              </div>
			</div>
		</div>
	</div>
</div>	

<?php }
 ?>