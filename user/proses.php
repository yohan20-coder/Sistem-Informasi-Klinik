<?php 

require_once"../_config/config.php";
require "../assets/libs/vendor/autoload.php";

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	

	if (isset($_POST['add'])) {
		$uuid = Uuid::uuid4()->toString();
		$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
		$user = trim(mysqli_real_escape_string($con, $_POST['user']));
		$pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
		$level = trim(mysqli_real_escape_string($con, $_POST['level']));
		mysqli_query($con, "INSERT INTO tb_user (id_user, nama_user,username,password,level) VALUES('$uuid','$nama','$user','$pass','$level')") or die(mysqli_error($con));
		echo "<script>window.location='user.php';</script>";
	}elseif (isset($_POST['edit'])) {
		$id = $_POST['id'];
		$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
		$user = trim(mysqli_real_escape_string($con, $_POST['user']));
		$pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
		$level = trim(mysqli_real_escape_string($con, $_POST['level']));
		mysqli_query($con, "UPDATE  tb_user SET nama_user = '$nama', username = '$user', password ='$pass', level='$level' WHERE id_user = '$id'") or die(mysqli_error($con));
		echo "<script>window.location='user.php';</script>";
	}

	



 ?>