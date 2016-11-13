<?php 

if(isset($_GET['bagian'])){
 	if($_GET['bagian']=='tambah') { ?>
 	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Informasi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Informasi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Judul Informasi :</label>
                              <div class="col-sm-10">
                                  <input type="text" name="judul_informasi" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Informasi :</label>
                              <div class="col-sm-10">
                                  <textarea type="text" name="informasi" class="form-control" rows="20" cols="50"></textarea> 
                              </div>
                          </div>
                          <input type="submit" name="simpaninformasi" value="Simpan">
                          <?php
                          $tanggal_informasi=date("Y-m-d");
            							if(isset ($_POST['simpaninformasi'])) {
            							$informasi->simpaninformasi($_POST['judul_informasi'],$tanggal_informasi,$_POST['informasi']);
            							echo"<script>alert('data tersimpan'); window.location='index.php?halaman=informasi';</script>";
            							}
            						  ?>
                       </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div>
		</div>
	</div>
</div>

 	<?php }elseif($_GET['bagian']=='ubah') { ?>

 	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Informasi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Informasi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                  	  <?php 
                  	  $sekolah = $informasi->ambilinformasi($_GET['id_informasi']);
                  	  foreach ($sekolah as $info) {
                  	  ?>
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Judul Informasi :</label>
                              <div class="col-sm-10">
                                  <input type="text" name="judul_informasi" class="form-control" value="<?php echo $info['judul_informasi']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Informasi :</label>
                              <div class="col-sm-10">
                                  <textarea type="text" name="informasi" class="form-control" rows="20" cols="50"><?php echo $info['informasi']; ?></textarea> 
                              </div>
                          </div>
                          <input type="submit" name="ubahinformasi" value="Simpan">               
                          <?php
                          $tanggal_informasi=date("Y-m-d");
            							if(isset ($_POST['ubahinformasi'])) {
            							$informasi->ubahinformasi($_POST['judul_informasi'],$tanggal_informasi,$_POST['informasi'],$_GET['id_informasi']) ;
            							echo"<script>alert('data tersimpan'); window.location='index.php?halaman=informasi';</script>";
            							}
            						  ?>
            						   <?php } ?>
                       </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div>
		</div>
	</div>
</div>
 	<?php }elseif($_GET['bagian']=='detail') { ?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Informasi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail Data Informasi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                      <?php 
                      $sekolah = $informasi->ambilinformasi($_GET['id_informasi']);
                      foreach ($sekolah as $info) {
                      ?>
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Judul Informasi :</label>
                              <div class="col-sm-10">
                                  <input type="text" name="judul_informasi" class="form-control" value="<?php echo $info['judul_informasi']; ?>" disabled>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Informasi :</label>
                              <div class="col-sm-10">
                                  <textarea type="text" name="informasi" class="form-control" rows="20" cols="50" disabled><?php echo $info['informasi']; ?></textarea> 
                              </div>
                          </div>
                          <input type="submit" name="ubahinformasi" value="Simpan">               
                          <?php
                          $tanggal_informasi=date("Y-m-d");
                          if(isset ($_POST['ubahinformasi'])) {
                          $informasi->ubahinformasi($_POST['judul_informasi'],$tanggal_informasi,$_POST['informasi'],$_GET['id_informasi']) ;
                          echo"<script>alert('data tersimpan'); window.location='index.php?halaman=informasi';</script>";
                          }
                          ?>
                           <?php } ?>
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
                    <h1 class="page-header">Informasi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Informasi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                        	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		                <thead>
		                <tr>
		                    <th>No</th>
		                    <th>Judul Informasi</th>
                        <th>Tanggal_informasi</th>
		                    <th>Informasi</th>
		                    <th>Aksi</th>
                        <th>Ket</th>
		                </tr>
		                </thead>
		                          <tbody>
						     	 	<?php
									if($_SESSION['tipe']=='admin'){
									 $nomor= 1;
									$infosekolah = $informasi-> tampilinformasi();
									foreach ($infosekolah as $info){
									?>
								<tr>
									<td> <?php echo $nomor; ?></td>
									<td> <?php echo $info ['judul_informasi']; ?></td>
                  <td><?php echo $info['tanggal_informasi']; ?></td>
									<td> <?php echo $info ['informasi']; ?></td>
									<td><a href="index.php?halaman=informasi&aksi=hapus&id_informasi=<?php echo $info['id_informasi'] ?>">Hapus</a>
									<a href="index.php?halaman=informasi&bagian=ubah&id_informasi=<?php echo $info['id_informasi']; ?>">Ubah</a></td>
                  <td><a href="index.php?halaman=informasi&bagian=detail&id_informasi=<?php echo $info['id_informasi']; ?>">Detail</a></td>
								</tr>
								<?php
								$nomor++;
								}?>
								</tbody>
								<?php
								if (isset ($_GET['aksi'])){
									if($_GET['aksi']=='hapus'){
									$informasi->hapusinformasi($_GET['id_informasi']);
									echo"<script>alert('data hapus'); window.location='index.php?halaman=informasi';</script>";
									}
								} 
									}
									else{
									$nomor= 1;
									$infosekolah = $informasi-> tampilinformasi();
									foreach ($infosekolah as $info){
									?>
								<tr>
									<td> <?php echo $nomor; ?></td>
									<td> <?php echo $info ['judul_informasi']; ?></td>
                  <td><?php echo $info['tanggal_informasi']; ?></td>
									<td> <?php echo $info ['informasi']; ?></td>
                  <td><a href="index.php?halaman=informasi&bagian=detail&id_informasi=<?php echo $info['id_informasi']; ?>">Detail</a></td>
								</tr>
								<?php
								$nomor++;
								}?>
								</tbody>
								<?php
								if (isset ($_GET['aksi'])){
									if($_GET['aksi']=='hapus'){
									$informasi->hapusinformasi($_GET['id_informasi']);
									echo"<script>alert('data hapus'); window.location='index.php?halaman=informasi';</script>";
									}
								}
									}

									?>
					    </table>
	                </div><! --/content-panel -->
	                  <br>
	                  <?php 
	                  if($_SESSION['tipe']=='admin') {
	                  	 ?>
	                  <a href="index.php?halaman=informasi&bagian=tambah" class="btn btn-primary">Tambah</a>
	                  <?php } ?>
	              </div>
			</div>
		</div>
	</div>
</div>
<?php } ?>


