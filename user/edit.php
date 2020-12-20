<?php 

	include_once('../header.php');

 ?>


 <div class="box">
 	<h1>User</h1>
	<h4>
		<small>EDIT DATA USER</small>
		<div class="pull-right">
			<a href="user.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left">Kembali</i></a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">

			<?php 

			$id = @$_GET['id'];
			$sql_user = mysqli_query($con,"SELECT * FROM tb_user WHERE id_user = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_user);
			 ?>

			<form action="proses.php" method="post">

				<div class="form-group">
					<label for="identitas">Nama User</label>
					<input type="hidden" name="id" value="<?= $data['id_user'] ?>">
					<input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama_user'] ?>" required autofocus>
				</div>


				<div class="form-group">
					<label for="Na">Username</label>
					<input type="text" name="user" id="user" class="form-control" value="<?= $data['username'] ?>" required >
				</div>


				<div class="form-group">
					<label for="Nam">Password</label>
					<input type="text" name="pass" id="pass" class="form-control" value="<?= $data['password'] ?>" required >
				</div>

				<div class="form-group">
					<label for="level">Level</label>
					<div>
						<label class="radio-inline">
							<input type="radio" name="level" id="level" value="admin" required <?= $data['level']=="admin" ? "checked":null ?>>Admin
						</label>
						<label class="radio-inline">
							<input type="radio" name="level" value="user" <?= $data['level']=="user" ? "checked":null ?>>User
						</label>
					</div>
				</div>

				
				<div class="form-group pull-right">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
				
			</form>
			
		</div>
	</div>

 </div>

 <?php include_once('../footer.php');  ?>