<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
if ($loaitaikhoan!='admin'){
    include_once "view/v_khong_bai_bao.php";
    exit();
}
include_once "model/m_quan_ly_chung.php";
$kbm = lay_khoa_bo_mon();
$tdcm = lay_trinh_do_chuyen_mon();
$cdgv = lay_chuc_danh_giang_vien();
$hv = lay_hoc_vi();
$cdkh = lay_chuc_danh_khoa_hoc();
$cv = lay_chuc_vu();
$cbb = lay_cap_bai_bao();
$cdt = lay_cap_de_tai();
$lv = lay_linh_vuc();
$lh = lay_loai_hinh();
$stqd = lay_so_tiet_qui_doi();
$kbm = lay_khoa_phong();
$mail = lay_mail();
$rmail = mysqli_fetch_row($mail);
include_once "view/v_quan_ly_chung.php";
?>