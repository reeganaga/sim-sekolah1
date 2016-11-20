<?php
if (isset($_GET['bagian'])) {
  if ($_GET['bagian']=='tambah') { ?>
    

    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Siswa</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                      <form role="form" data-toggle="validator" class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Foto</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="file" name="foto_siswa" class="form-control">
                                  <div class="help-block with-errors"></div>
                                  <span class="help-block"></span>
                              </div>
                          </div>
                      <div class="form-group">
                              <label class="col-sm-2 col-sm-2">NIS</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="nis" class="form-control">
                                  <div class="help-block with-errors"></div>
                                  <span class="help-block">Nis tidak dapat dirubah</span>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Nama</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="nama_siswa" class="form-control">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 ">Password</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="password" name="password" class="form-control" placeholder="">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="date" name="tanggal_lahir" class="form-control">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Tempat Lahir</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="tempat_lahir" class="form-control">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Alamat</label>
                              <div class="col-sm-10">
                                  <textarea required data-error="Data wajid diisi" class="form-control" name="alamat" rows="10" cols="30"></textarea>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Telpon</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="telpon" class="form-control">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Email</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="email" name="email" class="form-control">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Status</label>
                              <div class="col-sm-10">
                                  <select data-error="Data wajib diisi" required class="form-control" name="status">
                                    <option value=""> pilih status</option>
                                    <option value="siswa"> Siswa</option>
                                    <option value="alumni"> Alumni</option>
                                  </select>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                  <select data-error="Data wajib diisi" required class="form-control" name="kelamin">
                                    <option value=""> pilih kelamin</option>
                                    <option value="laki"> laki-laki</option>
                                    <option value="perempuan"> perempuan</option>
                                  </select>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Nama Ayah</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="nama_ayah" class="form-control">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Pekerjaan Ayah</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="pekerjaaan_ayah" class="form-control">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Tahun Ajaran</label>
                              <div class="col-sm-10">
                                  <select data-error="Data wajib diisi" required class="form-control" name="id_tahun" >
                                    <option> pilih tahun</option>
                                    <?php 
                                    $tahun = $ajaran->tampiltahun();
                                    foreach ($tahun as $value) {
                                    ?>
                                    <option value="<?php echo $value['id_tahun']; ?>"><?php echo $value['nama_tahun']; ?></option>
                                    <?php } ?>
                                  </select>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Kelas Siswa</label>
                              <div class="col-sm-10">
                                  <select data-error="Data wajib diisi" required class="form-control" name="id_kelas" >
                                    <option> pilih Kelas</option>
                                    <?php 
                                    $nganu = $terserah->tampilkelas();
                                    foreach ($nganu as $value) {
                                    ?>
                                    <option value="<?php echo $value['id_kelas']; ?>"><?php echo $value['nama_kelas'];?></option>
                                    <?php } ?>
                                  </select>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>              
                            <button type="submit" name="simpan" value="Simpan" class="btn btn-primary"> Simpan</button>
                          <?php
                          // cara ngecek kesalahan
                          // print_r($_POST);
                          if(isset ($_POST['simpan'])){
                          $situ=md5($_POST['password']);
                           $murid->simpansiswa($_FILES['foto_siswa'],$_POST['nis'],$_POST['nama_siswa'],$situ,$_POST['tanggal_lahir'],$_POST['tempat_lahir'], $_POST['alamat'],$_POST['telpon'],$_POST['email'],$_POST['status'],$_POST['kelamin'], $_POST['nama_ayah'],$_POST['pekerjaaan_ayah'],$_POST['id_tahun'],$_POST['id_kelas']);
                           echo"<script>alert('data tersimpan'); window.location='index.php?halaman=siswa';</script>";
                            }
                              ?>
                      </form>                   
                  </div>
              </div>
            </div>
          </div>
      </div><!-- col-lg-12-->       

  <?php }elseif ($_GET['bagian']=='ubah') { ?>
    
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
                      <form role="form" class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                       <?php
                      $muridbelajar = $murid->ambilsiswa($_GET['id_siswa']);
                      foreach ($muridbelajar as $pecah) {
                        // print_r($pecah);
                      ?>
                      <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Foto</label>
                              <div class="col-sm-10">
                                  <img src="foto_upload/<?php echo $pecah['foto_siswa']; ?>" widht="200">
                                  <span class="help-block"></span>
                              </div>
                          </div>
                      <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Ganti Foto</label>
                              <div class="col-sm-10">
                                  <input type="file" name="foto_siswa" class="form-control">
                              </div>
                          </div>
                      <div class="form-group">
                              <label class="col-sm-2 col-sm-2">NIS</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="nis" class="form-control" value="<?php echo $pecah['nis']; ?> ">
                                  <div class="help-block with-errors"></div>
                                  <span class="help-block">Nis tidak dapat dirubah</span>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Nama</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="nama_siswa" class="form-control" value="<?php echo $pecah['nama_siswa']; ?> ">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Password</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="password" name="password" class="form-control" value="<?php echo $pecah['password']; ?> ">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="date" name="tanggal_lahir" class="form-control" value="<?php echo $pecah['tanggal_lahir']; ?> ">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Tempat Lahir</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="tempat_lahir" class="form-control" value="<?php echo $pecah['tempat_lahir']; ?> ">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">alamat</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control" name="alamat" rows="10" cols="30" id=""><?php echo $pecah['alamat']; ?> </textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Telpon</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="telpon" class="form-control" value="<?php echo $pecah['telpon']; ?> ">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Email</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="email" name="email" class="form-control" value="<?php echo $pecah['email']; ?> ">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Status</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="status" required data-error="Data wajib diisi" >
                                    <?php 
                                    if($pecah['status']=='siswa'){ ?>
                                      <option value="" disabled="disabled"> pilih status</option>
                                      <option value="siswa" selected> siswa</option>
                                      <option value="alumni"> alumni</option>
                                    <?php }else{ ?>
                                      <option value="" disabled="disabled"> pilih status</option>
                                      <option value="siswa"> siswa</option>
                                      <option value="alumni" selected> alumni</option>
                                    <?php }
                                     ?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="kelamin" required data-error="Data wajib diisi">
                                    <?php
                                    if ($pecah['kelamin']=='laki') { ?>
                                      <option value=""> pilih kelamin</option>
                                      <option value="laki" selected> laki-laki</option>
                                      <option value="perempuan"> perempuan</option>
                                    <?php }else{ ?>
                                      <option value=""> pilih kelamin</option>
                                      <option value="laki"> laki-laki</option>
                                      <option value="perempuan" selected> perempuan</option>
                                    <?php }
                                    ?>
                                  </select>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Nama Ayah</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="nama_ayah" class="form-control" value="<?php echo $pecah['nama_ayah']; ?> ">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Pekerjaan Ayah</label>
                              <div class="col-sm-10">
                                  <input required data-error="Data wajib diisi" type="text" name="pekerjaaan_ayah" class="form-control" value="<?php echo $pecah['pekerjaaan_ayah']; ?> ">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Tahun Ajaran</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="id_tahun" required data-error="Data wajib diisi"  >
                                    <option> pilih tahun</option>
                                    <?php 
                                    $tahun = $ajaran->tampiltahun();
                                    foreach ($tahun as $value) {
                                      if($pecah['id_tahun']==$value['id_tahun']){ ?>
                                        <option value="<?php echo $value['id_tahun'];?>" selected> <?php echo $value['nama_tahun'];?></option>
                                      <?php } ?>
                                      <option value="<?php echo $value['id_tahun'];?>"> <?php echo $value['nama_tahun'];?></option>
                                    
                                    <?php } ?>
                                  </select>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2">Kelas Siswa</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="id_kelas" required data-error="Data wajib diisi" >
                                    <option> pilih Kelas</option>
                                    <?php 
                                    $nganu = $terserah->tampilkelas();
                                    foreach ($nganu as $kelas) {
                                      if ($pecah['id_kelas']==$kelas['id_kelas']) { ?>
                                        <option value="<?php echo $kelas['id_kelas'];?>" selected> <?php echo $kelas['nama_kelas'];?></option>
                                        
                                      <?php } ?>
                                        <option value="<?php echo $kelas['id_kelas'];?> "> <?php echo $kelas['nama_kelas'];?></option>

                                    ?>
                                    <?php } ?>
                                  </select>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>    
                          <button type="submit" name="ubah" value="Simpan" class="btn btn-primary">Ubah</button>
                          <?php
                          // untuk mengecek kesalahan
                          if(isset($_POST['ubah'])) {
                           print_r($_POST);
                          $murid->ubahsiswa($_FILES['foto_siswa'],$_POST['nis'],$_POST['nama_siswa'],$_POST['password'],$_POST['tanggal_lahir'],$_POST['tempat_lahir'], $_POST['alamat'],$_POST['telpon'],$_POST['email'],$_POST['status'],$_POST['kelamin'],$_POST['nama_ayah'], $_POST['pekerjaaan_ayah'],$_POST['id_tahun'],$_POST['id_kelas'] ,$_GET['id_siswa']);
                          echo"<script>alert('data terubah'); window.location='index.php?halaman=siswa';</script>";
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
</div>

  <?php }
}else { ?>
    <div id="wrapper">
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
                            Tabel Data Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Foto</th>
                                  <th>NIS</th>
                                  <th>Nama</th>
                                  <th>Tanggal Lahir</th>
                                  <th>Tempat Lahir</th>
                                  <th>Alamat</th>
                                  <th>Telpon</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Nama Ayah</th>
                                  <th>aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                              <?php
                              if($_SESSION['tipe']=='admin'){
                                $nomor=1;
                              $siswa = $murid->tampilsiswa();
                              foreach ($siswa as $pecah) {
                              ?>
                                  <td><?php echo $nomor;?></td>
                                  <td><img src="foto_upload/<?php echo $pecah['foto_siswa']; ?>" WIDTH="200"></td>
                                  <td><?php echo $pecah['nis'];?></td>
                                  <td><?php echo $pecah['nama_siswa'];?></td>
                                  <td><?php echo $pecah['tanggal_lahir'];?></td>
                                  <td><?php echo $pecah['tempat_lahir'];?></td>
                                  <td><?php echo $pecah['alamat'];?></td>
                                  <td><?php echo $pecah['telpon'];?></td>
                                  <td><?php echo $pecah['email'];?></td>
                                  <td><?php echo $pecah['status'];?></td>
                                  <td><?php echo $pecah['nama_ayah'];?></td>
                                  <td><a href="index.php?halaman=siswa&aksi=hapus&id_siswa=<?php echo $pecah['id_siswa']; ?>" >hapus</a> 
                                  <a href="index.php?halaman=siswa&bagian=ubah&id_siswa=<?php echo $pecah['id_siswa'];?>" >ubah</a></td>
                              </tr>
                              <?php $nomor ++;
                              }

                              }
                              else {
                                $nomor=1;
                              $siswa = $murid->tampilsiswasatu($_SESSION['nomorinduk']);
                              foreach ($siswa as $pecah) {
                              ?>
                                  <td><?php echo $nomor;?></td>
                                  <td><img src="foto_upload/<?php echo $pecah['foto_siswa']; ?>" WIDTH="200"></td>
                                  <td><?php echo $pecah['nis'];?></td>
                                  <td><?php echo $pecah['nama_siswa'];?></td>
                                  <td><?php echo $pecah['tanggal_lahir'];?></td>
                                  <td><?php echo $pecah['tempat_lahir'];?></td>
                                  <td><?php echo $pecah['alamat'];?></td>
                                  <td><?php echo $pecah['telpon'];?></td>
                                  <td><?php echo $pecah['email'];?></td>
                                  <td><?php echo $pecah['status'];?></td>
                                  <td><?php echo $pecah['nama_ayah'];?></td>
                                  <td><a href="index.php?halaman=siswa&bagian=ubah&id_siswa=<?php echo $pecah['id_siswa'];?>" >ubah</a></td>
                                  
                              </tr>
                              <?php $nomor ++;
                              }

                              } 
                              ?>
                              </tbody>
                              <?php
                              if (isset ($_GET['aksi'])){
                                 if($_GET['aksi']=='hapus'){
                                  $murid->hapussiswa($_GET['id_siswa']);
                                  echo"<script>alert('data hapus'); window.location='index.php?halaman=siswa';</script>";
                                  }
                              } ?>
                          </table>

                        <br>
                        <?php 
                        if($_SESSION['tipe']=='admin')
                        {
                         ?>
                        <a href="index.php?halaman=siswa&bagian=tambah" class="btn btn-primary">Tambah</a>
                        <a href="print_siswa.php" class="btn btn-primary"><td>Cetak</td></a>
                        <?php } ?>        
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div></div></div>
    <!-- /#wrapper -->

    <!-- jQuery -->
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

<?php }
?>