
<?Php 
if(isset($_GET['bagian'])) {
	if($_GET['bagian']=='tambah') { ?>

	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Materi</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Materi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                        	<label class="col-sm-2 col-sm-2">Judul Materi :</label>
                        	<div class="col-sm-10">
                        	<input type="text" name="judul_materi" class="form-control" placeholder="">
                        	</div>
                        </div>
                        
                        <div class="form-group">
                        	<label class="col-sm-2 col-sm-2">Mata pelajaran :</label>
                        	<div class="col-sm-10">
                        	<select class="form-control" name="id_matpel" id="">
                        	<option>Pilih pelajaran</option>
                        	<?php 
                            IF($_SESSION['tipe']=='admin') {
                              
                            $gurupelajaran=$matpel->tampilmatpel();
                            foreach ($gurupelajaran as $gurumatpel) { ?> 
                            <option value="<?php echo $gurumatpel['id_matpel']; ?>"><?php echo $gurumatpel['nama_matpel']; ?></option>
                            <?php } 
                            }else{
                            $gurupelajaran=$matpel->tampilmatpelguru($_SESSION['idguru']);
                            foreach ($gurupelajaran as $gurumatpel) { ?> 
                            <option value="<?php echo $gurumatpel['id_matpel']; ?>"><?php echo $gurumatpel['nama_matpel']; ?></option>
                            <?php }
                            }  
                            ?>
                        	</select>
                        	</div>
                        </div>
                        <div class="form-group">
                        	<label class="col-sm-2 col-sm-2">File Materi :</label>
                        	<div class="col-sm-10">
                        	<input type="file" name="file_materi" class="form-control">
                        	</div>
                        </div>
                        	<input type="submit" name="simpanmateri" value="Simpan">
                        <?php
                        $tanggal=date("Y-m-d");
						if(isset ($_POST['simpanmateri'])){
                            // print_r($_FILES);
                            // $namafile = $_FILES['file_materi']['name'];
                            // $lokasifile= $_FILES['file_materi']['tmp_name'];
                            // move_uploaded_file($lokasifile,"file_upload/".$namafile);
                            
							$pelajaran->simpanmateri($_POST['judul_materi'],$tanggal,$_POST['id_matpel'],$_FILES['file_materi']);
							echo"<script>alert('data tersimpan'); window.location='index.php?halaman=materi';</script>";
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
                    <h1 class="page-header">Data Materi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Materi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                        <?php
            						$buku= $pelajaran->ambilmateri($_GET['id_materi']);
            						foreach ($buku as $bukupelajaran){
            					?>
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                        	<label class="col-sm-2 col-sm-2">Judul Materi :</label>
                        	<div class="col-sm-10">
                        	<input type="text" name="judul_materi" class="form-control" value="<?php echo $bukupelajaran['judul_materi']; ?> ">
                        	</div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2">Mata pelajaran :</label>
                            <div class="col-sm-10">
                            <select class="form-control" name="id_matpel" id="">
                            <option>Pilih pelajaran</option>
                            <?php 
                            if($_SESSION['tipe']=='admin') {
                              
                            $gurupelajaran=$matpel->tampilmatpel();
                            foreach ($gurupelajaran as $gurumatpel) { ?> 
                            <option value="<?php echo $gurumatpel['id_matpel']; ?>"><?php echo $gurumatpel['nama_matpel']; ?></option>
                            <?php } 
                            }else{
                            $gurupelajaran=$matpel->tampilmatpelguru($_SESSION['idguru']);
                            foreach ($gurupelajaran as $gurumatpel) { ?> 
                            <option value="<?php echo $gurumatpel['id_matpel']; ?>"><?php echo $gurumatpel['nama_matpel']; ?></option>
                            <?php }
                            }  
                            ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label class="col-sm-2 col-sm-2">File Materi :</label>
                        	<div class="col-sm-10">
                        	<input type="file" name="file_materi" class="form-control" value="<?php echo $bukupelajaran['file_materi']; ?> ">
                        	</div>
                        </div>
                        	<input type="submit" name="ubahmateri" value="Simpan">
                        <?php
                        $tanggal=date("Y-m-d");
						if(isset ($_POST['ubahmateri'])) {
							$pelajaran->ubahmateri($_POST['judul_materi'],$tanggal,$_POST['id_matpel'] ,$_FILES['file_materi'],$_GET['id_materi']);
							echo"<script>alert('data tersimpan'); window.location='index.php?halaman=materi';</script>";
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

	<?php 
	}
} else{ ?>

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
                            Tambah Data Siswa
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
		                	<th>Judul Materi</th>
		                	<th>Tanggal Upload</th>
		                	<th>Mata Pelajaran</th>
		                	<th>File Materi</th>
		                </tr>
		                </thead>
		                <tbody>
        				      	<?php
        							if($_SESSION['tipe']=='admin' || $_SESSION['tipe']=='guru'){
        								$nomor= 1;
        							$buku= $pelajaran->tampilmateri();
									
        							foreach ($buku as $bukupelajaran){
        						?>
        						<tr>
        							<td> <?php echo $nomor; ?></td>
        							<td> <?php echo $bukupelajaran ['judul_materi']; ?></td>
        							<td><?php echo $bukupelajaran['tanggal_upload']; ?></td>
        							<td>
        								<?php 
        								$matapel = $matpel->tampilmatpel();
        								foreach ($matapel as $pelajaran) {
        									if ($bukupelajaran['id_matpel']==$pelajaran['id_matpel']) {
        										echo $pelajaran['nama_matpel'];
        									}
        								}
        								 ?>
        							</td>
        							<td><a href="file_upload/<?php echo $bukupelajaran['file_materi']; ?>"><?php echo $bukupelajaran['file_materi']; ?></a></td>
        							<td><a href="index.php?halaman=materi&aksi=hapus&id_materi=<?php echo $bukupelajaran['id_materi'] ?>">Hapus</a>
        							<a href="index.php?halaman=materi&bagian=ubah&id_materi=<?php echo $bukupelajaran['id_materi'] ?>">Ubah</a></td>
        						</tr>
        						<?php
        						$nomor++;
        						}
        							}
        							else{
        							$nomor= 1;
        							$buku= $pelajaran->tampilmateri();
        							foreach ($buku as $bukupelajaran){
        						?>
        						<tr>
        							<td> <?php echo $nomor; ?></td>
        							<td> <?php echo $bukupelajaran ['judul_materi']; ?></td>
        							<td><?php echo $bukupelajaran['tanggal_upload']; ?></td>
        							<td>
        								<?php 
        								$matapel = $matpel->tampilmatpel();
        								foreach ($matapel as $pelajaran) {
        									if ($bukupelajaran['id_matpel']==$pelajaran['id_matpel']) {
        										echo $pelajaran['nama_matpel'];
        									}
        								}
        								 ?>
        							</td>
        							<td><a href="file_upload/<?php echo $bukupelajaran['file_materi']; ?>"><?php echo $bukupelajaran['file_materi']; ?></a></td>
        						</tr>
        						<?php
        						$nomor++;
        						}
        							}

        							?>
        						</tbody>
        						<?php
        						$pelajaran = new materi();
        						if (isset ($_GET['aksi'])){
        							if($_GET['aksi']=='hapus'){
        							$pelajaran->hapusmateri($_GET['id_materi']);
        							echo"<script>alert('data hapus'); window.location='index.php?halaman=materi';</script>";
        							}
        						} ?>
        				        
        		            </table>
        	             </div><! --/content-panel -->
        	              <br>
        	              <?php 
                         if($_SESSION['tipe']=='admin' || $_SESSION['tipe']=='guru')
                        {
                        ?>
                        <a href="index.php?halaman=materi&bagian=tambah" class="btn btn-primary">Tambah</a>
                        <?php } ?>

	              </div>
			</div>
		</div>
	</div>
</div>
</div>
<?php }
?>
