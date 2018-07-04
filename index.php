<?php
  ob_start("ob_gzhandler");
  require_once("_m__detect.php");
  $detect = null;
  $detect = new Mobile_Detect();
  if($detect->isMobile())
    require_once('index_mb.php');
  else
    require_once('index_pc.php');
?>