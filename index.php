<?php
function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");
 //if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {ob_start('ob_gzhandler');}
  require_once("_m__detect.php");
  $detect = null;
  $detect = new Mobile_Detect();
  if($detect->isMobile())
    require_once('index_mb.php');
  else
    require_once('index_pc.php');
?>