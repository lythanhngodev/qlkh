<?php 
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
if ($loaitaikhoan!='admin' && $loaitaikhoan != 'khoahoc') {
    include_once "view/v_khong_bai_bao.php";
    exit();
}
	include_once "model/m_them_moi_de_tai.php";
	$nd = nguoi_dung();
	$rnd = null;
	while($row = mysqli_fetch_row($nd)) {
        $rnd[] = $row;
    }
    $cdt = cap_de_tai();
    $_cdt = cap_de_tai();
    $rcdt = null;
    while($row = mysqli_fetch_row($_cdt)) {
        $rcdt[] = $row;
    }
    $lv = linh_vuc_khoa_học();
    $_lv = linh_vuc_khoa_học();
    $rlv = null;
    while($row = mysqli_fetch_row($_lv)) {
        $rlv[] = $row;
    }
    $lh = loai_hinh();
    $_lh = loai_hinh();
    $rlh = null;
    while($row = mysqli_fetch_row($_lh)) {
        $rlh[] = $row;
    }
    $nd_dv = nguoi_dung_don_vi_cong_tac();
    $_nd_dv = nguoi_dung_don_vi_cong_tac();
    $rnd_dv = null;
    while ($row = mysqli_fetch_row($_nd_dv)){
        $rnd_dv[] = $row;
    }
    $nd_td = nguoi_dung_trinh_do_chuyen_mon();
    $_nd_td = nguoi_dung_trinh_do_chuyen_mon();
    $rnd_td = null;
    while ($row = mysqli_fetch_row($_nd_td)){
        $rnd_td[] = $row;
    }
	include_once "view/v_them_moi_de_tai.php";
 ?>