<?php
require_once"../_config/config.php";

session_destroy();
  echo "<script>window.location='".base_url('auth/login.php')."'; </script>";
?>