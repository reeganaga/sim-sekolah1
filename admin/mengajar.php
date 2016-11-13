<<?php 
if(isset($_GET['bagian'])) {
	if($_GET['bagian']=='tambah') { ?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Detail Mengajar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Mengajar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                             
                          <div class="form-group">
                          <label class="col-sm-2 col-sm-2">Mata Pelajaran :</label>
                          <div class="col-sm-10">
                          <select class="form-control" name="id_matpel" id="">
                          <option>Pilih Mata Pelajaran</option>
                          <?php 
                          $matapelajaran= $mengajar->tampilmatapelajaran();
              foreach ($matapelajaran as $matpel){ ?> 
                            <option value="<?php echo $matpel['id_matpel']; ?>"><?php echo $matpel['nama_matpel']; ?></option>
                          <?php } ?>
                          </select>
                          </div>
                        </div>                     
                          <div class="form-group">
                        	<label class="col-sm-2 col-sm-2">Nama Guru :</label>
                        	<div class="col-sm-10">
                        	<select class="form-control" name="id_guru" id="">
                        	<option>Pilih guru</option>
                        	<?php 
                        	$gurupengajar= $pengajar->tampilguru();
							foreach ($gurupengajar as $pembimbing){ ?> 
                           	<option value="<?php echo $pembimbing['id_guru']; ?>"><?php echo $pembimbing['nama_guru']; ?></option>
                        	<?php } ?>
                        	</select>
                        	</div>
                        </div>
                          <input type="submit" name="simpanmatpel" value="Simpan">
                          <?php
							if(isset ($_POST['simpanmatpel'])) {
							$mengajar->simpanmengajar($_POST['id_matpel'],$_POST['id_guru']);
							echo"<script>alert('data tersimpan'); window.location='index.php?halaman=mengajar';</script>";
							 }
						  ?>
                       </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div>
		</div>
	</div>
</div>

	<?php }elseif ($_GET['bagian']=='ubah') { ?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Detail Mengajar</h1>
                </div>
                <!-- /.col-lg-12 -->
                <?php 
                $ambil = $mengajar->ambilmengajar($_GET['id_mengajar']);
                foreach ($ambil as $tampil) {
                  $nama_matpel = $tampil['nama_matpel'];
                  $nama_guru = $tampil['nama_guru'];

                }
                 ?>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Mengajar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                             
                          <div class="form-group">
                          <label class="col-sm-2 col-sm-2">Mata Pelajaran :</label>
                          <div class="col-sm-10">
                          <select class="form-control" name="id_matpel" id="">
                          <option>
                            <?php 
                              echo $nama_matpel;
                             ?>
                           </option>
                          <?php 
                          $matapelajaran= $mengajar->tampilmatapelajaran();
              foreach ($matapelajaran as $matpel){ ?> 
                            <option value="<?php echo $matpel['id_matpel']; ?>"><?php echo $matpel['nama_matpel']; ?></option>
                          <?php } ?>
                          </select>
                          </div>
                        </div>                     
                          <div class="form-group">
                          <label class="col-sm-2 col-sm-2">Nama Guru :</label>
                          <div class="col-sm-10">
                          <select class="form-control" name="id_guru" id="">
                          <option>
                            <?php 
                              echo $nama_guru;
                             ?>
                           </option>
                          <?php 
                          $gurupengajar= $pengajar->tampilguru();
              foreach ($gurupengajar as $pembimbing){ ?> 
                            <option value="<?php echo $pembimbing['id_guru']; ?>"><?php echo $pembimbing['nama_guru']; ?></option>
                          <?php } ?>
                          </select>
                          </div>
                        </div>
                          <input type="submit" name="simpanmengajar" value="Simpan">
                          <?php
              if(isset ($_POST['simpanmengajar'])) {
              $mengajar->ubahmengajar($_POST['id_matpel'],$_POST['id_guru'],$_GET['id_mengajar']);
              echo"<script>alert('data tersimpan'); window.location='index.php?halaman=mengajar';</script>";
               }
              ?>
                       </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div>
    </div>
  </div>
</div>	

<?php }

}else{ ?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Detail Mengajar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Detail Mengajar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                        	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				                <thead>
				                <tr>
				                	<th>No</th>
				                	<th>Mata Pelajaran</th>
				                	<th>Nama Guru</th>
				                	<th>Aksi</th>
				                </tr>
				                </thead>
				                <tbody>
						      	<?php
									$nomor= 1;
									$mengajar= $mengajar->tampilmengajar();
									
									foreach ($mengajar as $gurumengajar) {
								?>
								<tr>
									<td> <?php echo $nomor; ?></td>
									<td> <?php echo $gurumengajar ['nama_matpel']; ?></td>
									<td>
										<?php 
										$gurupengajar= $pengajar->tampilguru();
										foreach ($gurupengajar as $pembimbing){
											if($gurumengajar['id_guru']==$pembimbing['id_guru']){
												echo $pembimbing['nama_guru'];
											}
											
										} 
										?>
									</td>
									<td><a href="index.php?halaman=mengajar&aksi=hapus&id_mengajar=<?php echo $gurumengajar['id_mengajar'] ?>">Hapus</a>
									<a href="index.php?halaman=mengajar&bagian=ubah&id_mengajar=<?php echo $gurumengajar['id_mengajar'] ?>">Ubah</a></td>
								</tr>
								<?php
								$nomor++;
								}?>
								</table>
								<?php
								$mengajar = new mengajar();
								if (isset ($_GET['aksi'])){
									if($_GET['aksi']=='hapus'){
									$mengajar->hapusmengajar($_GET['id_mengajar']);
									echo"<script>alert('data hapus'); window.location='index.php?halaman=mengajar';</script>";
									}
								} ?>
						        </tbody>
				                </table>
	                </div><! --/content-panel -->
	                <br>
	                <a href="index.php?halaman=mengajar&bagian=tambah" class="btn btn-primary">Tambah</a>
	              </div>
			</div>
		</div>
	</div>
</div>	
<?php }
?>
