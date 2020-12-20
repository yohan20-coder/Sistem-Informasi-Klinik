<?php 

	include_once('../header.php');

	//use Ramsey\Uuid\Uuid;
	//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	//$uuid4 = Uuid::uuid4();
	//echo $uuid4->toString();

 ?>


 <div class="box">
 	<h1>User</h1>
	<h4>
		<small>DATA USER</small>
		<div class="pull-right">
			<a href="user.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left">Kembali</i></a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label>Nama User</label>
					<input type="text" name="nama" class="form-control" required autofocus>
				</div>

				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required autofocus>
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="text" name="pass" class="form-control" required autofocus>
				</div>

				<div class="form-group">
					<label for="lvl">Level</label>
					<div>
						<label class="radio-inline">
							<input type="radio" name="level" id="adm" value="admin" required>Admin
						</label>
						<label class="radio-inline">
							<input type="radio" name="level" value="user">User
						</label>
					</div>
				</div>

				<div class="form-group pull-right">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
				
			</form>
			
		</div>
	</div>

 </div>

 <?php include_once('../footer.php');  ?>