<?php 
if(isset($_GET['bagian'])) {
	if($_GET['bagian']=='tambah') { ?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mata Pelajaran</h1>
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
                              <label class="col-sm-2 col-sm-2">Mata Pelajaran :</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_matpel" class="form-control">
                              </div>
                          </div>                        
                          
                          <input type="submit" name="simpanmatpel" value="Simpan">
                          <?php
            							if(isset ($_POST['simpanmatpel'])) {
            							$matpel->simpanmatpel($_POST['nama_matpel']);
            							echo"<script>alert('data tersimpan'); window.location='index.php?halaman=mata_pelajaran';</script>";
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
                    <h1 class="page-header">Mata Pelajaran</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Matpel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                  	  <?php
          						$matapel = $matpel->ambilmatpel ($_GET['id_matpel']);
          						foreach ($matapel as $gurumatpel) {
          						?>
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Mata Pelajaran :</label>
                              <div class="col-sm-10">
                              <input type="text" name="nama_matpel" class="form-control" value="<?php echo $gurumatpel['nama_matpel']; ?>">
                              </div>
                          </div> 
                          
                          
                          <input type="submit" name="ubahmatpel" value="Simpan">
                          <?php
            							if(isset($_POST['ubahmatpel'])){
            							$matpel->ubahmatpel($_POST['nama_matpel'],$_GET['id_matpel']);
            							echo"<script>alert('data terubah'); window.location='index.php?halaman=mata_pelajaran';</script>";
            							}
            					    	?>
                			 <?php }  ?>
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
                    <h1 class="page-header">Mata Pelajaran</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Mata Pelajaran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                        	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				                <thead>
				                <tr>
				                	<th>No</th>
				                	<th>Mata Pelajaran</th>
				                	<th>Aksi</th>
				                </tr>
				                </thead>
				                <tbody>
						      	<?php
									$nomor= 1;
									$matapel= $matpel->tampilmatpel();
									foreach ($matapel as $gurumatpel) {
								?>
								<tr>
									<td> <?php echo $nomor; ?></td>
									<td> <?php echo $gurumatpel ['nama_matpel']; ?></td>
									
									<td><a href="index.php?halaman=mata_pelajaran&aksi=hapus&id_matpel=<?php echo $gurumatpel['id_matpel'] ?>">Hapus</a>
									<a href="index.php?halaman=mata_pelajaran&bagian=ubah&id_matpel=<?php echo $gurumatpel['id_matpel'] ?>">Ubah</a></td>
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
		</div>
	</div>
</div>	
<?php }
?>
