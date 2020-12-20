<?php
require_once"_config/config.php";
if (isset($_SESSION['admin'])) {
   echo "<script>window.location='".base_url('dashboard')."'; </script>";
}else{
	echo "<script>window.location='".base_url('auth/login.php')."'; </script>";
}

?>