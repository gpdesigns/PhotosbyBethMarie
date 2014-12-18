<?php 
  define("DB_SERVER", "localhost");
  define("DB_USER", "superuser");
  define("DB_PASS", "nmWuO2=[~9@U");
  define("DB_NAME", "bethmarie");
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  if(mysqli_connect_errno()) {
    die('Database Connection Failed');
  }
?>