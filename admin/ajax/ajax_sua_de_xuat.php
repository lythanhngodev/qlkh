
<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        trangchu($qlkh['HOSTADMIN']);
        exit();
    }
}else{
    trangchu($qlkh['HOSTADMIN']);
}
function suadetai($tendetai,$muctieu,$noidung,$cap,$moisangtao,$thuocchuongtrinh,$sucanthiet,$tinhhinhnghiencuu,$nghiencuulienquan,$phuongphapkythuat,$kinhphingansach,$kinhphinguonkhac,$thangthuchien,$thangnambatdau,$thangnamketthuc,$ketqua,$loaihinhnghiencuu,$linhvuckhoahoc,$thanhvien,$tochucthamgia,$tiendodukien,$baocaotiendo,$kinhphichitiet,$idnd,$iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $idnd=intval($idnd);
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
    $hoi = "
        UPDATE `detai` 
        SET
            TENDETAI = '$tendetai',
            MUCTIEU = '$muctieu',
            NOIDUNG = '$noidung',
            CAPDETAI = '$cap',
            MOISANGTAO = '$moisangtao',
            THUOCCHUONGTRINH = '$thuocchuongtrinh',
            SUCANTHIET = '$sucanthiet',
            TINHHINHNGHIENCUU = '$tinhhinhnghiencuu',
            NGHIENCUULIENQUAN = '$nghiencuulienquan',
            PHUONGPHAPKYTHUAT = '$phuongphapkythuat',
            KINHPHINGANSACH = '$kinhphingansach',
            KINHPHINGUONKHAC = '$kinhphinguonkhac',
            THANGTHUCHIEN = '$thangthuchien',
            THANGNAMBD = '$thangnambatdau',
            THANGNAMKT = '$thangnamketthuc',
            KETQUA = '$ketqua'
        WHERE
            IDDT = '$iddt' AND EXISTS (SELECT IDND FROM thanhviendetai WHERE IDND = $idnd AND IDDT = $iddt AND TRACHNHIEM=N'Chủ nhiệm') AND TRANGTHAI=N'Chờ gửi đề xuất'
    ";
    if(mysqli_query($conn, $hoi)===TRUE){
        // Thêm loại hình nghiên cứu thuộc đề tài
        $sql = "DELETE FROM `loaihinhnghiencuu` WHERE `IDDT` = '$iddt';";
        // Thêm lĩnh vựa khoa học thuộc đề tài
        for ($i=0; $i < count($loaihinhnghiencuu); $i++) { 
            $sql.= "INSERT INTO `loaihinhnghiencuu`(`IDDT`, `TENLH`) VALUES ('$iddt','".$loaihinhnghiencuu[$i]."');";
        }
        $sql.= "DELETE FROM `linhvuckhoahoc` WHERE `IDDT` = '$iddt';";
        // Thêm lĩnh vựa khoa học thuộc đề tài
        for ($i=0; $i < count($linhvuckhoahoc); $i++) { 
            $sql.= "INSERT INTO `linhvuckhoahoc`(`IDDT`, `TENLV`) VALUES ('$iddt','".$linhvuckhoahoc[$i]."');";
        }
        // Xóa thanh vien de tai
        $sql.= "DELETE FROM `thanhviendetai` WHERE `IDDT` = '$iddt';";
        // Thêm thành viên thuộc đề tài
        if ($thanhvien!=null){
            for($i=0;$i<count($thanhvien);$i++){
                if ($i==0)
                    $sql.= "INSERT INTO `thanhviendetai`(`IDDT`, `IDND`, `CONGVIEC`, `TRACHNHIEM`) VALUES ('$iddt','".$thanhvien[$i][0]."','".$thanhvien[$i][2]."','Chủ nhiệm');";
                else
                    $sql.= "INSERT INTO `thanhviendetai`(`IDDT`, `IDND`, `CONGVIEC`, `TRACHNHIEM`) VALUES ('$iddt','".$thanhvien[$i][0]."','".$thanhvien[$i][2]."','Thành viên');";
                
            }
        }
        // Xóa tổ chức thanh gia đề tài
        $sql.= "DELETE FROM `tochucthamgia` WHERE `IDDT` = '$iddt';";
        // Thêm tổ chức tham gia đề tài
        if ($tochucthamgia!=null){
            for($i=0;$i<count($tochucthamgia);$i++){
                $sql.= "INSERT INTO `tochucthamgia`(`IDDT`, `THONGTINTC`, `NOIDUNGTHAMGIA`, `KINHPHI`) VALUES ('$iddt','".$tochucthamgia[$i][0]."','".$tochucthamgia[$i][1]."','".$tochucthamgia[$i][2]."');";
            }
        }
        // Xóa tiến độ
        $sql.= "DELETE FROM `tiendodukien` WHERE `IDDT` = '$iddt';";
        // Thêm tiến độ dự kiến của đề tài
        for($i=0;$i<count($tiendodukien);$i++){
            $sql.= "INSERT INTO `tiendodukien`(`IDDT`, `CONGVIEC`, `SANPHAM`, `THOIGIANBD`, `THOIGIANKT`) VALUES ('$iddt','".$tiendodukien[$i][0]."','".$tiendodukien[$i][1]."','".$tiendodukien[$i][2]."','".$tiendodukien[$i][3]."');";
        }
        // Xóa báo cáo tổ chức
        $sql.= "DELETE FROM `baocaotiendo` WHERE `IDDT` = '$iddt';";
        // Thêm tổ chức tham gia đề tài
        if ($baocaotiendo!=null){
            for($i=0;$i<count($baocaotiendo);$i++){
                $sql.= "INSERT INTO `baocaotiendo`(`IDDT`, `CVDATH`, `CVCANTH`, `DENGHI`, `NGAYBC`) VALUES ('$iddt','".$baocaotiendo[$i][0]."','".$baocaotiendo[$i][1]."','".$baocaotiendo[$i][2]."','".$baocaotiendo[$i][3]."');";
            }
        }
        // Xóa kinh phí
        $sql.= "DELETE FROM `kinhphi` WHERE `IDDT` = '$iddt';";

        // Thêm kinh phí thực hiện đề tài
        for($i=0;$i<count($kinhphichitiet);$i++){
            $khoanchi = $kinhphichitiet[$i][0]; $khoanchi = mysqli_real_escape_string($conn,$khoanchi);
            $donvitinh = $kinhphichitiet[$i][1]; $donvitinh = mysqli_real_escape_string($conn,$donvitinh);
            $soluong = $kinhphichitiet[$i][2]; $soluong = floatval($soluong);
            $dongia = $kinhphichitiet[$i][3]; $dongia = floatval($dongia);
            $ghichu = $kinhphichitiet[$i][5]; $ghichu = mysqli_real_escape_string($conn,$ghichu);
            $loai = $kinhphichitiet[$i][6]; $loai = mysqli_real_escape_string($conn,$loai);
            $sql.= "INSERT INTO kinhphi(IDDT,KHOANCHI,DONVITINH,SOLUONG,DONGIA,GHICHU,LOAI) VALUES('$iddt','$khoanchi','$donvitinh','$soluong','$dongia','$ghichu','$loai');";
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
function xetbctd(){
    if (!isset($_POST['baocaotiendo'])){
        return null;
    }else return $_POST['baocaotiendo'];
}
function xettiendodukien(){
    if (!isset($_POST['tiendodukien'])){
        return null;
    }else return $_POST['tiendodukien'];
}
function xetkinhphi(){
    if (!isset($_POST['kinhphichitiet']) || empty($_POST['kinhphichitiet'])){
        return null;
    }else return $_POST['kinhphichitiet'];
}
function xetidnd(){
    if (!isset($_SESSION['_idnd']) || empty($_SESSION['_idnd'])){
        return 0;
    }else return $_SESSION['_idnd'];
}
if (suadetai($_POST['tendetai'],$_POST['muctieu'],$_POST['noidung'],$_POST['cap'],$_POST['moisangtao'],$_POST['thuocchuongtrinh'],$_POST['sucanthiet'],$_POST['tinhhinhnghiencuu'],$_POST['nghiencuulienquan'],$_POST['phuongphapkythuat'],$_POST['kinhphingansach'],$_POST['kinhphinguonkhac'],$_POST['thangthuchien'],$_POST['thangnambatdau'],$_POST['thangnamketthuc'],$_POST['ketqua'],$_POST['loaihinhnghiencuu'],$_POST['linhvuckhoahoc'],$thanhvien=xetthanhvien(),$tochuc=xettochuc(),$tiendodukien=xettiendodukien(),$baocaotiendo=xetbctd(),$kinhphichitiet=xetkinhphi(),$_idnd=xetidnd(),$_POST['iddt'])) {
    ?>
    <script type="text/javascript">
        swal('Thành công','Đã sửa đề tài!','success');
    </script>
    <?php
    exit();
}
else{
    echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Lỗi!</strong> Tên đề tài đã tồn tại\")</script>";
    exit();
}
?>
