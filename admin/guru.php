<?php
if(isset($_GET['bagian'])) {
	if($_GET['bagian']=='tambah'){ ?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Guru</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Guru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">NIP :</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nip" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Password :</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Nama :</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_guru" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <input type="date" name="tanggal_lahir" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Tempat lahir</label>
                              <div class="col-sm-10">
                                 <input type="text"  name="tempat_lahir" class="form-control" placeholder="Tempat lahir">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Alamat</label>
                              <div class="col-sm-10">
                                  <textarea type="text"  name="alamat" class="form-control" placeholder="Alamat" rows="10" cols="30"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Pangkat</label>
                              <div class="col-sm-10">
                                  <input type="text"  name="pangkat" class="form-control" placeholder="Pangkat">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Jabatan</label>
                              <div class="col-sm-10">
                                  <input type="text"  name="jabatan" class="form-control" placeholder="Jabatan">
                              </div>
                          </div>
                          <input type="submit" name="simpanguru" value="Simpan">
                          <?php
                          if(isset ($_POST['simpanguru'])){
                          $pss=md5($_POST['password']);
            							$pengajar->simpanguru($_POST['nip'],$pss,$_POST['nama_guru'],$_POST['tanggal_lahir'],$_POST['tempat_lahir'],
            							$_POST['alamat'],$_POST['pangkat'],$_POST['jabatan']);
            							echo"<script>alert('data tersimpan'); window.location='index.php?halaman=guru';</script>";
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
                    <h1 class="page-header">Data Guru</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Guru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                  	  <?php
          						$gurupengajar = $pengajar->ambilguru ($_GET['id_guru']);
          						foreach ($gurupengajar as $pembimbing) {
          						?>
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NIP :</label>
                              <div class="col-sm-10">
                              <input type="text" name="nip" class="form-control" value="<?php echo $pembimbing['nip']; ?>">
                              </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Password :</label>
                            <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" value="<?php echo $pembimbing['password']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama :</label>
                            <div class="col-sm-10">
                            <input type="text" name="nama_guru" class="form-control" value="<?php echo $pembimbing['nama_guru']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                              <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $pembimbing
                              ['tanggal_lahir'] ;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat lahir</label>
                              <div class="col-sm-10">
                                 <input type="text"  name="tempat_lahir" class="form-control" value="<?php echo $pembimbing 
                                 ['tempat_lahir']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                              <input type="text"  name="alamat" class="form-control" value="<?php echo $pembimbing['alamat'];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pangkat</label>
                              <div class="col-sm-10">
                              <input type="text"  name="pangkat" class="form-control" value="<?php echo $pembimbing['pangkat']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jabatan</label>
                              <div class="col-sm-10">
                              <input type="text"  name="jabatan" class="form-control" value="<?php echo $pembimbing['jabatan'];?>" >
                              </div>
                          </div>
                          <input type="submit" name="ubahguru" value="Simpan">
                          <?php
							if(isset($_POST['ubahguru'])){
							$pengajar->ubahguru($_POST['nip'],$_POST['password'],$_POST['nama_guru'],$_POST['tanggal_lahir'],$_POST['tempat_lahir'],
							$_POST['alamat'],$_POST['pangkat'],$_POST['jabatan'], $_GET['id_guru']);
							echo"<script>alert('data terubah'); window.location='index.php?halaman=guru';</script>";
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

	<?php
	}
}else { ?>

<div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Guru</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Guru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      		                <thead>
      		                <tr>
      		                    <th>No</th>
      		                    <th>NIP</th>
      		                    <th>Nama</th>
      		                    <th>Tanggal Lahir</th>
      		                    <th>Tempat Lahir</th>
      		                    <th>Alamat</th>
      		                    <th>Pangkat</th>
      		                    <th>Jabatan</th>
                              <th>Aksi</th>
      		                </tr>
      		                </thead>
      		                <tbody>
      						     	 	<?php
      									   if ($_SESSION['tipe']=='admin' || $_SESSION['tipe']== 'siswa') {
                            $nomor= 1;
                        $gurupengajar= $pengajar->tampilguru();
                        foreach ($gurupengajar as $pembimbing){
                        ?>
                      <tr>
                        <td> <?php echo $nomor; ?></td>
                        <td> <?php echo $pembimbing ['nip']; ?></td>
                        <td> <?php echo $pembimbing['nama_guru'];?></td>
                        <td> <?php echo $pembimbing ['tanggal_lahir']; ?></td>
                        <td> <?php echo $pembimbing ['tempat_lahir']; ?></td>
                        <td> <?php echo $pembimbing ['alamat']; ?></td>
                        <td> <?php echo $pembimbing ['pangkat']; ?></td>
                        <td> <?php echo $pembimbing ['jabatan'];?></td>
                        <td><a href="index.php?halaman=guru&aksi=hapus&id_guru=<?php echo $pembimbing['id_guru'] ?>">Hapus</a>
                        <a href="index.php?halaman=guru&bagian=ubah&id_guru=<?php echo $pembimbing['id_guru']; ?>">Ubah</a></td>
                      </tr>
                      <?php
                      $nomor++;
                      }
                           }
                           else
                           {
                            $nomor= 1;
                        $gurupengajar= $pengajar->tampilgurusatu($_SESSION['nomorinduk']);
                        foreach ($gurupengajar as $pembimbing){
                        ?>
                      <tr>
                        <td> <?php echo $nomor; ?></td>
                        <td> <?php echo $pembimbing ['nip']; ?></td>
                        <td> <?php echo $pembimbing['nama_guru'];?></td>
                        <td> <?php echo $pembimbing ['tanggal_lahir']; ?></td>
                        <td> <?php echo $pembimbing ['tempat_lahir']; ?></td>
                        <td> <?php echo $pembimbing ['alamat']; ?></td>
                        <td> <?php echo $pembimbing ['pangkat']; ?></td>
                        <td> <?php echo $pembimbing ['jabatan'];?></td>
                        <td><a href="index.php?halaman=guru&aksi=hapus&id_guru=<?php echo $pembimbing['id_guru'] ?>">Hapus</a>
                        <a href="index.php?halaman=guru&bagian=ubah&id_guru=<?php echo $pembimbing['id_guru']; ?>">Ubah</a></td>
                      </tr>
                      <?php
                      $nomor++;
                        }
                           }
                         ?>
      								</tbody>
      								<?php
      								if (isset ($_GET['aksi'])){
      									if($_GET['aksi']=='hapus'){
      									$pengajar->hapusguru($_GET['id_guru']);
      									echo"<script>alert('data hapus'); window.location='index.php?halaman=guru';</script>";
      									}
      								} ?>
      					    </table>
      	                  <br>
                          <?php 
                          if($_SESSION['tipe']=='admin') {
                           ?>
      	                  <a href="index.php?halaman=guru&bagian=tambah" class="btn btn-primary">Tambah</a>
                          <a href="print_guru.php" class="btn btn-primary">Cetak</a>
                          <?php } ?>   
                      </div><! --/content-panel -->         
	               </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>



    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
<?php
}
	?>