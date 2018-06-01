<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
  require_once("_m__detect.php");
  $detect = null;
  $detect = new Mobile_Detect();
  if($detect->isMobile()){
    require_once('index_mb.php');
    die();
  }
  else
  {
    require_once('index_pc.php');
    die();
  }
?>