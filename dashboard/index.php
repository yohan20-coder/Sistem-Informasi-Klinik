<?php include_once('../header.php');  ?>

<div class="row">
 <div class="col-lg-12">
     <h1>DASHBOARD</h1>
        <p>Selamat Datang <mark><?=$_SESSION['admin'] || $_SESSION['user']?></mark> Di Website Rumah Sakit (Rekam Medis)</p>
             <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
          </div>
        </div>
                   
<?php include_once('../footer.php');  ?>