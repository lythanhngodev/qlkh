<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
        exit();
    }
}
function themdetai($diemdetai,$madetai,$ngaynghiemthu,$tendetai,$muctieu,$noidung,$cap,$moisangtao,$thuocchuongtrinh,$sucanthiet,$tinhhinhnghiencuu,$nghiencuulienquan,$phuongphapkythuat,$kinhphingansach,$kinhphinguonkhac,$thangthuchien,$thangnambatdau,$thangnamketthuc,$ketqua,$loaihinhnghiencuu,$linhvuckhoahoc,$thanhvien,$file,$tochucthamgia,$tiendodukien,$baocaotiendo,$kinhphichitiet,$dgbtc,$dgtv,$nttv){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $madetai=mysqli_real_escape_string($conn,$madetai);
    $diemdetai=mysqli_real_escape_string($conn,$diemdetai);
    $ngaynghiemthu = mysqli_real_escape_string($conn,$ngaynghiemthu);
    $tendetai=mysqli_real_escape_string($conn,$tendetai);
    $muctieu=mysqli_real_escape_string($conn,$muctieu);
    $noidung=mysqli_real_escape_string($conn,$noidung);
    $cap=mysqli_real_escape_string($conn,$cap);
    $moisangtao=mysqli_real_escape_string($conn,$moisangtao);
    $thuocchuongtrinh=mysqli_real_escape_string($conn,$thuocchuongtrinh);
    $sucanthiet=mysqli_real_escape_string($conn,$sucanthiet);
    $tinhhinhnghiencuu=mysqli_real_escape_string($conn,$tinhhinhnghiencuu);
    $nghiencuulienquan=mysqli_real_escape_string($conn,$nghiencuulienquan);
    $phuongphapkythuat=mysqli_real_escape_string($conn,$phuongphapkythuat);
    $kinhphingansach=mysqli_real_escape_string($conn,$kinhphingansach);
    $kinhphinguonkhac=mysqli_real_escape_string($conn,$kinhphinguonkhac);
    $thangthuchien=mysqli_real_escape_string($conn,$thangthuchien);
    $thangnambatdau=mysqli_real_escape_string($conn,$thangnambatdau);
    $thangnamketthuc=mysqli_real_escape_string($conn,$thangnamketthuc);
    $ketqua=mysqli_real_escape_string($conn,$ketqua);
    $kinhphingansach = intval($kinhphingansach);
    $kinhphinguonkhac = intval($kinhphinguonkhac);
    $thangthuchien = intval($thangthuchien);
    $hoi;
    $kt = "SELECT * FROM detai WHERE MADETAI=N'$madetai'";
    $ekt = mysqli_query($conn,$kt);
    $rkt = mysqli_num_rows($ekt);
    if ($rkt != 0) {
        echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Lỗi!</strong> Mã đề tài bị trùng\")</script>";
        exit();
    }
    if (empty($madetai)) {
    // xử lý từ khóa
    $hoi="INSERT INTO `detai`(`DIEM`, `TENDETAI`,`THOIGIANNGHIEMTHU`,`MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `MOISANGTAO`, `THUOCCHUONGTRINH`, `SUCANTHIET`, `TINHHINHNGHIENCUU`, `NGHIENCUULIENQUAN`, `PHUONGPHAPKYTHUAT`, `KINHPHINGANSACH`, `KINHPHINGUONKHAC`, `THANGTHUCHIEN`, `THANGNAMBD`, `THANGNAMKT`, `KETQUA`, `FILE`,`TRANGTHAI`, `DUYET`) VALUES ('$diemdetai','$tendetai','$ngaynghiemthu','$muctieu','$noidung','$cap','$moisangtao','$thuocchuongtrinh','$sucanthiet','$tinhhinhnghiencuu','$nghiencuulienquan','$phuongphapkythuat','$kinhphingansach','$kinhphinguonkhac','$thangthuchien','$thangnambatdau','$thangnamketthuc','$ketqua','$file','Đã nghiệm thu', b'0');";
    }else{
        $hoi="INSERT INTO `detai`(`DIEM`, `MADETAI`,`TENDETAI`,`THOIGIANNGHIEMTHU`,`MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `MOISANGTAO`, `THUOCCHUONGTRINH`, `SUCANTHIET`, `TINHHINHNGHIENCUU`, `NGHIENCUULIENQUAN`, `PHUONGPHAPKYTHUAT`, `KINHPHINGANSACH`, `KINHPHINGUONKHAC`, `THANGTHUCHIEN`, `THANGNAMBD`, `THANGNAMKT`, `KETQUA`, `FILE`,`TRANGTHAI`, `DUYET`) VALUES ('$diemdetai','$madetai','$tendetai','$ngaynghiemthu','$muctieu','$noidung','$cap','$moisangtao','$thuocchuongtrinh','$sucanthiet','$tinhhinhnghiencuu','$nghiencuulienquan','$phuongphapkythuat','$kinhphingansach','$kinhphinguonkhac','$thangthuchien','$thangnambatdau','$thangnamketthuc','$ketqua','$file','Đã nghiệm thu', b'0');";
    }
    //exit();
    if(mysqli_query($conn, $hoi)===TRUE){
        $dem = mysqli_affected_rows($conn);
        if($dem==0) return false;
        $iddt = mysqli_insert_id($conn);
        $sql="INSERT INTO `dexuatdetai` (IDDT) VALUES ('$iddt');";
        for ($i=0; $i < count($loaihinhnghiencuu); $i++) { 
            $sql.= "INSERT INTO `loaihinhnghiencuu`(`IDDT`, `TENLH`) VALUES ('$iddt','".$loaihinhnghiencuu[$i]."');";
        }
        // Thêm lĩnh vựa khoa học thuộc đề tài
        for ($i=0; $i < count($linhvuckhoahoc); $i++) { 
            $sql.= "INSERT INTO `linhvuckhoahoc`(`IDDT`, `TENLV`) VALUES ('$iddt','".$linhvuckhoahoc[$i]."');";
        }
        // Thêm thành viên thuộc đề tài
        if ($thanhvien!=null){
            for($i=0;$i<count($thanhvien);$i++){
                if ($i==0){
                    $sql.= "INSERT INTO `thanhviendetai`(`IDDT`, `IDND`, `CONGVIEC`, `TRACHNHIEM`) VALUES ('$iddt','".$thanhvien[$i][0]."','".$thanhvien[$i][2]."','Chủ nhiệm');";
                }
                else
                    $sql.= "INSERT INTO `thanhviendetai`(`IDDT`, `IDND`, `CONGVIEC`, `TRACHNHIEM`) VALUES ('$iddt','".$thanhvien[$i][0]."','".$thanhvien[$i][2]."','Thành viên');";
            }
        }
        // Thêm tổ chức tham gia đề tài
        if ($tochucthamgia!=null){
            for($i=0;$i<count($tochucthamgia);$i++){
                $sql.= "INSERT INTO `tochucthamgia`(`IDDT`, `THONGTINTC`, `NOIDUNGTHAMGIA`, `KINHPHI`) VALUES ('$iddt','".$tochucthamgia[$i][0]."','".$tochucthamgia[$i][1]."','".$tochucthamgia[$i][2]."');";
            }
        }
        // Thêm tiến độ dự kiến của đề tài
        for($i=0;$i<count($tiendodukien);$i++){
            $sql.= "INSERT INTO `tiendodukien`(`IDDT`, `CONGVIEC`, `SANPHAM`, `THOIGIANBD`, `THOIGIANKT`) VALUES ('$iddt','".$tiendodukien[$i][0]."','".$tiendodukien[$i][1]."','".$tiendodukien[$i][2]."','".$tiendodukien[$i][3]."');";
        }
        // Thêm báo cáo tiến độ
        for($i=0;$i<count($baocaotiendo);$i++)
            $sql.= "INSERT INTO `baocaotiendo`(`IDDT`, `CVDATH`, `CVCANTH`, `DENGHI`, `NGAYBC`) VALUES ('$iddt','".$baocaotiendo[$i][0]."','".$baocaotiendo[$i][1]."','".$baocaotiendo[$i][2]."','".$baocaotiendo[$i][3]."');";
        // Thêm BTC xét duyệt
        for($i=0;$i<count($dgbtc);$i++)
            $sql.= "INSERT INTO `xetduyetdetai`(`IDDT`, `IDND`, NHIEMVU, `LOAIHD`, `GHICHU`) VALUES ('$iddt','".$dgbtc[$i][1]."','".$dgbtc[$i][2]."','1','".$dgbtc[$i][3]."');";
        // Thêm TV xét duyệt
        for($i=0;$i<count($dgtv);$i++)
            $sql.= "INSERT INTO `xetduyetdetai`(`IDDT`, `IDND`, NHIEMVU, `LOAIHD`, `GHICHU`) VALUES ('$iddt','".$dgtv[$i][1]."','".$dgtv[$i][2]."','0','".$dgtv[$i][3]."');";
        // Thêm TV nghiệm thu
        for($i=0;$i<count($nttv);$i++)
            $sql.= "INSERT INTO `xetduyetnghiemthu`(`IDDT`, `IDND`, NHIEMVU,`GHICHU`) VALUES ('$iddt','".$nttv[$i][1]."','".$nttv[$i][2]."','".$nttv[$i][3]."');";
        // Thêm kinh phí thực hiện đề tài
        for($i=0;$i<count($kinhphichitiet);$i++){
            $khoanchi = $kinhphichitiet[$i][0];
            $nsnn = $kinhphichitiet[$i][1]; $nsnn = intval($nsnn);
            $tuco = $kinhphichitiet[$i][2]; $tuco = intval($tuco);
            $lienket = $kinhphichitiet[$i][3]; $lienket = intval($lienket);
            $sql.= "INSERT INTO `kinhphi`(`IDDT`, `KHOANCHI`, `NGUONNSNN`, `NGUONTUCO`, `NGUONLIENKET`) VALUES ('$iddt','".$khoanchi."','".$nsnn."','".$tuco."','".$lienket."');";
        }

        mysqli_multi_query($conn,$sql);
        return true;
    }
    else
        return false;
}
function xetthanhvien(){
    if (!isset($_POST['thanhvien'])){
        return null;
    }else return $_POST['thanhvien'];
}
function xettochuc(){
    if (!isset($_POST['tochucthamgia'])){
        return null;
    }else return $_POST['tochucthamgia'];
}
function xettiendodukien(){
    if (!isset($_POST['tiendodukien'])){
        return null;
    }else return $_POST['tiendodukien'];
}
function xetbaocaotiendo(){
    if (!isset($_POST['baocaotiendo'])){
        return null;
    }else return $_POST['baocaotiendo'];
}
if (themdetai($_POST['diemdetai'],$_POST['madetai'],$_POST['ngaynghiemthu'],$_POST['tendetai'],$_POST['muctieu'],$_POST['noidung'],$_POST['cap'],$_POST['moisangtao'],$_POST['thuocchuongtrinh'],$_POST['sucanthiet'],$_POST['tinhhinhnghiencuu'],$_POST['nghiencuulienquan'],$_POST['phuongphapkythuat'],$_POST['kinhphingansach'],$_POST['kinhphinguonkhac'],$_POST['thangthuchien'],$_POST['thangnambatdau'],$_POST['thangnamketthuc'],$_POST['ketqua'],$_POST['loaihinhnghiencuu'],$_POST['linhvuckhoahoc'],$thanhvien=xetthanhvien(),$_POST['file'],$tochuc=xettochuc(),$tiendodukien=xettiendodukien(),$baocaotiendo=xetbaocaotiendo(),$_POST['kinhphichitiet'],$_POST['dgbtc'],$_POST['dgtv'],$_POST['nttv'])) {
    ?>
    <script type="text/javascript">
        thanhcong("Đã thêm đề tài!");
    </script>
    <?php
    exit();
}
else{
    echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Lỗi!</strong> Xảy ra lỗi khi thêm\")</script>";
    exit();
}
?>
