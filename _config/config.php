<?php 
date_default_timezone_set('Asia/Jakarta');
session_start();
$con = mysqli_connect('localhost','root','','rumahsakit');
if (mysqli_connect_errno()){
		echo mysqli_connect_error();
	}

function base_url($url = null){
	$base_url = "http://localhost/klinik";
	if($url !=null){
		return $base_url."/".$url;
	}else{
		return $base_url;
	}
}

function tgl_indo($tgl){

	$tanggal = substr($tgl, 8, 2);
	$bulan = substr($tgl, 5, 2);
	$tahun = substr($tgl, 0, 4);
	return $tanggal."/".$bulan."/".$tahun;
}
 ?>


