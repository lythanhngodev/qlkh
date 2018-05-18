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
        include_once "model/m_xem_de_xuat.php";
        $dt = chi_tiet_de_tai($iddt);
        $detai = mysqli_fetch_assoc($dt);
        if (empty($detai)) {
            include_once 'view/v_khong_bai_bao.php';
            exit();
        }
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
        // thành viên BTC đã chọn
        $tvbtc = thanh_vien_ban_to_chuc_da_chon($iddt);
        if (empty($tvbtc)) {
            echo "Chưa chọn";
        }
        // thành viên duyệt đề xuất đã chọn
        $tvdc = thanh_vien_xet_duyet_da_chon($iddt);
        // Kết quả xét duyệt
        $kqxd = ket_qua_xet_duyet($iddt);
        // thành viên nghiệm thu đã chọn
        $tvnt = thanh_vien_nghiem_thu_da_chon($iddt);
        // Kết quả nghiệm thu
        $kqnt = ket_qua_nghiem_thu($iddt);
        include_once "view/v_xem_de_xuat.php";
    }
    else
        include_once 'view/v_khong_bai_bao.php';
}
else{
    include_once 'view/v_khong_bai_bao.php';
    exit();
}
?>
