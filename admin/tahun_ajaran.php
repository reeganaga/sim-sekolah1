<?php 
if(isset($_GET['bagian'])) {
	if ($_GET['bagian']=='tambah') { ?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Tahun Ajaran</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Tahun Ajaran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                      			<form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                      			<div class="form-group">
                      			<label class="col-sm-2 col-sm">Tahun Ajaran</label>
                      			<div class="col-sm-10">
                      				<input type="text" name="tahun_ajaran" class="form-control">
                      			</div>
                      			</div>
                      			<input type="submit" name="simpantahun" value="Simpan">
                      			<?php 
                      			if(isset($_POST['simpantahun'])) {
                      			 $tahun_ajaran->simpantahun($_POST['tahun_ajaran']);
                      			 echo "<script>alert('Data Tersimpan');window.location='index.php?halaman=tahun_ajaran';</script>";
                      			} ?>
                      			</form>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    </div>
	<?php }
	if($_GET['bagian']=='ubah'){ ?>
	<div id="page-wrapper">
		<div class="rows">
		halaman ubah		
		</div>
	</div>
	<?php }
 
}else{ ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mata Pelajaran</h1>
        </div>
	</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Data Mata Pelajaran
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
				    <tr>
				        <th>No</th>
				        <th>Tahun Ajaran</th>
				        <th>Aksi</th>
				    </tr>
				    </thead>
				    <tbody>
				    	<?php 
				    	$nomor=1;
				    	$tahun=$tahun_ajaran->tampiltahun();
				    	 foreach ($tahun as $th) { ?>
				    	 <tr>
				    	 	<td><?php echo $nomor; ?></td>
				    	 	<td> <?php echo $th['nama_tahun']; ?> </td>
				    	 	<td><a href="index.php?halaman=tahun_ajaran&aksi=hapus&id_tahun=<?php echo $th['id_tahun'] ?>">Hapus</a></td>
				    	 </tr>
				    	<?php
				    	$nomor++;
				    	 }?>
				    </tbody>
				    <?php 
				    if (isset($_GET['aksi'])){
				    	if($_GET['aksi']=='hapus'){
				    		$tahun_ajaran->hapustahun($_GET['id_tahun']);
				    		echo "<script>alert('Data Terhapus'); window.location='index.php?halaman=tahun_ajaran';</script>";
				    	}
				    } ?>

                    </table>
                    <a href="index.php?halaman=tahun_ajaran&bagian=tambah" class="btn btn-primary">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
?>

