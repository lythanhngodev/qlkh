<?php
  $ZERO_PATH = "_m__detect.php";
  require_once($ZERO_PATH);
  $detect = new Mobile_Detect;
  if($detect->isMobile()){
  	require_once('index_mb.php'); // Giao diện trên di động
  }
  else
  {
    require_once('index_pc.php'); // Giao diện trên PC
  }
?>