<?php 

	require_once"../_config/config.php";
	 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$chk = $_POST['checked'];
	if (!isset($chk)) {
		echo "<script>alert('Tidak ada data yang di pilih !'); window.location='user.php';</script>";
	}else {

		foreach ($chk as $id) {
			$sql = mysqli_query($con, "DELETE FROM tb_user WHERE id_user='$id'") or die (mysql_error($con));
		}

		if ($sql) {
			echo "<script>alert('".count($chk)." data berhasil dihapus');window.location='user.php';</script>";
		}else{
			echo "<script>alert('Gagal hapus data');window.location='user.php';</script>";
		}
}

 ?>