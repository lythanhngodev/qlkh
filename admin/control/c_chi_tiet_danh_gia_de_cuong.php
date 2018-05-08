<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
if (isset($_GET['id'])) {
    $iddt = $_GET['id'];
    $iddt = intval($iddt);
    if($iddt!=0) {
        include_once "model/m_chi_tiet_danh_gia_de_cuong.php";
        $dt = chi_tiet_de_tai($iddt,$idnd);
        if (mysqli_num_rows($dt)==0){
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
        $cn = chu_nhiem_de_tai($iddt);
        $chunhiem = mysqli_fetch_assoc($cn);
        // thành viên đè tài
        $thanhvien = thanh_vien_de_tai($iddt);
        // tổ chức tham gia
        $tochuc = to_chuc_tham_gia($iddt);
        // dự kiến tiến độ
        $tiendo = du_kien_tien_do($iddt);
        // kinh phi
        $kinhphi = kinh_phi($iddt);
        // thanh viên xét duyệt
        $thanhvienxetduyet = thanh_vien_xet_duyet($iddt);
        // thành viên duyệt đề xuất đã chọn
        $tvdc = thanh_vien_xet_duyet_da_chon($iddt);
        include_once "view/v_chi_tiet_danh_gia_de_cuong.php";
    }
    else
        include_once 'view/v_khong_bai_bao.php';
}
?>
