<?php
require_once"_config/config.php";
require "assets/libs/vendor/autoload.php";
// if (!isset($_SESSION['admin']) || !isset($_SESSION['user'])) {
//   echo "<script>window.location='".base_url('auth/login.php')."'; </script>";
// } 
    //if ($_SESSION['admin'] || $_SESSION['user']) {
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Rekam Medis</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/DataTables/Buttons-1.5.1/css/buttons.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/DataTables/Buttons-1.5.1/css/buttons.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/Buttons-1.5.1/css/buttons.dataTables.min.js">
    <link href="<?=base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/simple-sidebar.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/libs/DataTables/datatables.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/libs/DataTables/datatables.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view theage via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <script src="<?=base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/jquery-1.10.2.js') ?>"></script>
    <script src ="<?=base_url('assets/libs/vendor/ckeditor/ckeditor/ckeditor.js')?>"></script>


    <style type="text/css">
        #sidebar-wrapper{
            background-color: #043e8c;
        }
    </style>

    <?php 

        if ($_SESSION['admin'] || $_SESSION['user']) {
     ?>
    
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                   <a href=""><span class="text-default"><b>Rumah Sakit</b></span></a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard') ?>"><i class="glyphicon glyphicon-home"></i>
                    &nbsp&nbsp<span>Dashboard</span></a>
                </li>
                <li>
                    <a href="<?=base_url('pasien/data.php'); ?>"><i class="glyphicon glyphicon-user"></i>&nbsp&nbspData Pasien</a>
                </li>
                <li>
                    <a href="<?=base_url('dokter/data.php'); ?>"><i class="glyphicon glyphicon-user"></i>&nbsp&nbspData Dokter</a>
                </li>
                <li>
                    <a href="<?=base_url('poliklinik/data.php'); ?>"><i class="glyphicon glyphicon-inbox"></i>&nbsp&nbspData Poliklinik</a>
                </li>
                <li>
                    <a href="<?=base_url('obat/data.php'); ?>"><i class="glyphicon glyphicon-th-large"></i>&nbsp&nbspData Obat</a>
                </li>
                <li>
                    <a href="<?=base_url('rekam_medis/data.php'); ?>"><i class="glyphicon glyphicon-th"></i>&nbsp&nbspRekam Medis</a>
                </li>

                <?php if($_SESSION['admin']) { ?>
                 <li>
                    <a href="<?=base_url('user/user.php'); ?>"><i class="glyphicon glyphicon-user"></i>&nbsp&nbspManajemen User</a>
                </li>
            <?php } ?>
                <li>
                    <a href="<?=base_url('auth/logout.php'); ?>"><i class="glyphicon glyphicon-remove-sign"></i>&nbsp&nbsp<span class="text-danger"><b>Logout</b></span></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

<?php 

    }else{
         echo "<script>window.location='".base_url('auth/login.php')."'; </script>";
    }
 ?>