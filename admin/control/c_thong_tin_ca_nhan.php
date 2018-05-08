<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 26/04/2018
 * Time: 9:51 AM
 */
?>
<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
    include_once "model/m_thong_tin_ca_nhan.php";
    $nguoidung = lay_thong_tin_nguoi_dung($idnd);
    $nd = mysqli_fetch_assoc($nguoidung);
    $daihoc = lay_dai_hoc($idnd);
    $congtac = lay_cong_tac_chuyen_mon($idnd);
    $cdgv = lay_chuc_danh_giang_vien();
    $tdcm = lay_trinh_do_chuyen_mon();
    $hv = lay_hoc_vi();
    $cdkh = lay_chuc_danh_khoa_hoc();
    $cv = lay_chuc_vu();
    $nckh = lay_de_tai_nghien_cuu_khoa_hoc($idnd);
    $ntnc = lay_cong_trinh_nghien_cuu_khoa_hoc($idnd);
    $kbm = lay_khoa_phong();
    include_once "view/v_thong_tin_ca_nhan.php";
?>
