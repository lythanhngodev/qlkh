<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 12/04/2018
 * Time: 1:49 PM
 */
?>
<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
if (isset($_GET['id']) && ($loaitaikhoan=='admin' || $loaitaikhoan=='khoahoc')) {
    $iddt = $_GET['id'];
    $iddt = intval($iddt);
    if($iddt!=0) {
        include_once "model/m_dieu_chinh_de_tai.php";
        $dt = chi_tiet_de_tai($iddt);
        if(!mysqli_num_rows($dt)){
            include_once "view/v_khong_bai_bao.php";
            exit();
        }
        $detai = mysqli_fetch_assoc($dt);
        // loại hình nghiên cứu
        $lh = loai_hinh_nghien_cuu($iddt);
        $manglh=array();
        $i=0;
        while($row = mysqli_fetch_array($lh)){
            $manglh[$i]=$row[0];
            $i++;
        }
        // lĩnh vực khoa học
        $kh = linh_vuc_khoa_hoc($iddt);
        $mangkh=array();
        $i=0;
        while($row = mysqli_fetch_array($kh)){
            $mangkh[$i]=$row[0];
            $i++;
        }
        // Chủ nhiệm đề tài
        $chunhiem = chu_nhiem_de_tai($iddt);
        // danh sách người dùng
        $nd = nguoi_dung();
        $rnd = null;
        while($row = mysqli_fetch_row($nd)) {
            $rnd[] = $row;
        }
        $rtv=null;
        // thành viên đè tài
        $thanhvien = thanh_vien_de_tai($iddt);
        $tv = thanh_vien_de_tai($iddt);
        while ($row = mysqli_fetch_row($tv)) {
            $rtv[] = $row;
        }
        // tổ chức tham gia
        $tochuc = to_chuc_tham_gia($iddt);
        // dự kiến tiến độ
        $tiendo = du_kien_tien_do($iddt);
        // kinh phi
        $_kinhphi = kinh_phi($iddt);
        $__kinhphi = kinh_phi($iddt);
        $kinhphi = null;
        $_kp = null;
        while($row = mysqli_fetch_assoc($_kinhphi)) {
            $kinhphi[] = $row;
        }
        while($row = mysqli_fetch_row($__kinhphi)) {
            $_kp[] = $row;
        }
        // Cáp đề tài
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
        include_once "view/v_dieu_chinh_de_tai.php";
    }
    else
        include_once 'view/v_khong_bai_bao.php';
}
?>