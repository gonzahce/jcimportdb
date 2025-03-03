<?php

  if (!isset($_SESSION['app_id'])) {
    # code...
    include('html/index/login.php');
  } else {
    include('html/index/index.php');
  }
?>