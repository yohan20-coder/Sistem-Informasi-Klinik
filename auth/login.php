<?php
require_once"../_config/config.php";


if ($_SESSION["admin"]) {
   echo "<script>window.location='".base_url()."'; </script>";
}

// if ($_SESSION['user']) {
 // echo "<script>window.location='".base_url()."'; </script>";
//}else{
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
  <body>

  <div id="wrapper">
        <div class="container">
          <div align="center" style="margin-top:210px;">

                          <?php
                            if (isset($_POST['login'])) {
                              $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                              $pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
                              $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username='$user' AND password='$pass'") or die (mysqli_error($con));
                              $data = mysqli_fetch_array($sql_login);
                              $cek = mysqli_num_rows($sql_login);
                              if($cek ==1){
                                if($data['level']=="admin"){
                                  $_SESSION['admin'] = $data['id_user'];
                                  header("location:../dashboard");
                                   //echo "<script>window.location='".base_url()."'; </script>";
                                }else if($data['level']=="user"){
                                  $_SESSION['user'] = $data['id_user'];
                                   echo "<script>window.location='".base_url()."'; </script>";
                               }

                             }else{ ?>
                                <div class="row">
                                  <div class="col-lg-4 col-lg-offset-1">
                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                      <strong>Login Gagal</strong> Username/Password salah
                                    </div>
                                  </div>
                                </div>
                              <?php
                             }
                            }
                          ?>


                    <form action="" method="post" class="navbar-form" ">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input type="text" name="user" class="form-control" placeholder="Username" autofocus required>
                              </div>
                           <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" name="pass" class="form-control" placeholder="Password" required>
                             </div>
                          <div class="input-group">
                                <input type="submit" name="login" class="btn btn-primary" value="Login">
                              </div>
                            </form>
                </div>
        </div>  
    </div><!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    
  </body>
</html>
<!--
<?php 
  //  }
 ?>-->