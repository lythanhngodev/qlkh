<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
    include_once "model/m_tin_tuc.php";
    $tintuc = lay_tin_tuc();
    include_once "view/v_tin_tuc.php";
?>