<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 16/04/2018
 * Time: 11:22 PM
 */
?>
<?php
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
    if ($loaitaikhoan=='admin'){
        include_once "view/v_khong_bai_bao.php";
        exit();
    }
    include_once "model/m_xem_bieu_mau.php";
    $bm = bieu_mau();
    include_once "view/v_xem_bieu_mau.php";
?>
