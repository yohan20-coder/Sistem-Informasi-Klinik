<?php 

	include_once('../header.php');

	//use Ramsey\Uuid\Uuid;
	//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	//$uuid4 = Uuid::uuid4();
	//echo $uuid4->toString();

 ?>


 <div class="box">
 	<h1>Dokter</h1>
	<h4>
		<small>TAMBAH DATA DOKTER</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left">Kembali</i></a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label>Nama Dokter</label>
					<input type="text" name="nama" id="nama" class="form-control" required autofocus>
				</div>

				<div class="form-group">
					<label for="spesialis">Spesialis</label>
					<input type="text" name="spesialis" id="spesialis" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea name="alamat" id="alamat" class="form-control" required></textarea>
				</div>

				<div class="form-group">
					<label for="telp">No Telepon</label>
					<input type="number" name="telp" id="telp" class="form-control" required>
				</div>

				<div class="form-group pull-right">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
				
			</form>
			
		</div>
	</div>

 </div>

 <?php include_once('../footer.php');  ?>