<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        trangchu($qlkh['HOSTADMIN']);
        exit();
    }
}else{
    trangchu($qlkh['HOSTADMIN']);
}
function themdetai($tendetai,$muctieu,$noidung,$cap,$moisangtao,$thuocchuongtrinh,$sucanthiet,$tinhhinhnghiencuu,$nghiencuulienquan,$phuongphapkythuat,$kinhphingansach,$kinhphinguonkhac,$thangthuchien,$thangnambatdau,$thangnamketthuc,$ketqua,$loaihinhnghiencuu,$linhvuckhoahoc,$thanhvien,$tochucthamgia,$tiendodukien,$kinhphichitiet){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    // xử lý từ khóa
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
    $hoi="INSERT INTO `detai`(`TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `MOISANGTAO`, `THUOCCHUONGTRINH`, `SUCANTHIET`, `TINHHINHNGHIENCUU`, `NGHIENCUULIENQUAN`, `PHUONGPHAPKYTHUAT`, `KINHPHINGANSACH`, `KINHPHINGUONKHAC`, `THANGTHUCHIEN`, `THANGNAMBD`, `THANGNAMKT`, `KETQUA`) VALUES ('$tendetai','$muctieu','$noidung','$cap','$moisangtao','$thuocchuongtrinh','$sucanthiet','$tinhhinhnghiencuu','$nghiencuulienquan','$phuongphapkythuat','$kinhphingansach','$kinhphinguonkhac','$thangthuchien','$thangnambatdau','$thangnamketthuc','$ketqua')";
    if(mysqli_query($conn, $hoi)===TRUE){
        $iddt = mysqli_insert_id($conn);
        $rsql = mysqli_affected_rows($conn);
        if ($rsql==0){
            return false;
        }
        $sql="";
        // Thêm loại hình nghiên cứu thuộc đề tài
        for ($i=0; $i < count($loaihinhnghiencuu); $i++) { 
            $sql.= "INSERT INTO loaihinhnghiencuu(IDDT, TENLH) VALUES ('$iddt','".$loaihinhnghiencuu[$i]."');";
        }
        // Thêm lĩnh vựa khoa học thuộc đề tài
        for ($i=0; $i < count($linhvuckhoahoc); $i++) { 
            $sql.= "INSERT INTO linhvuckhoahoc(IDDT, TENLV) VALUES ('$iddt','".$linhvuckhoahoc[$i]."');";
        }
        // Thêm thành viên thuộc đề tài
        if ($thanhvien!=null){
            for($i=0;$i<count($thanhvien);$i++){
                $q;
                if ($i==0)
                    $q = "INSERT INTO thanhviendetai(IDDT, IDND, CONGVIEC, TRACHNHIEM) VALUES ('$iddt','%s','%s','Chủ nhiệm');";
                else
                    $q = "INSERT INTO thanhviendetai(IDDT, IDND, CONGVIEC, TRACHNHIEM) VALUES ('$iddt','%s','%s','Thành viên');";
                $sql.=sprintf($q, mysqli_real_escape_string($conn,$thanhvien[$i][0]), mysqli_real_escape_string($conn,$thanhvien[$i][2]));
            }
        }
        // Thêm tổ chức tham gia đề tài
        if ($tochucthamgia!=null){
            for($i=0;$i<count($tochucthamgia);$i++){
                $q = "INSERT INTO tochucthamgia(IDDT, THONGTINTC, NOIDUNGTHAMGIA, KINHPHI) VALUES ('$iddt','%s','%s','%s');";
                $sql.=sprintf($q, mysqli_real_escape_string($conn,$tochucthamgia[$i][0]), mysqli_real_escape_string($conn,$tochucthamgia[$i][1]), mysqli_real_escape_string($conn,$tochucthamgia[$i][2]));
            }
        }
        // Thêm tiến độ dự kiến của đề tài
        for($i=0;$i<count($tiendodukien);$i++){
            $q = "INSERT INTO tiendodukien(IDDT, CONGVIEC, SANPHAM, THOIGIANBD, THOIGIANKT) VALUES ('$iddt','".$tiendodukien[$i][0]."','".$tiendodukien[$i][1]."','".$tiendodukien[$i][2]."','".$tiendodukien[$i][3]."');";
            $sql.=sprintf($q, mysqli_real_escape_string($conn,$tiendodukien[$i][0]), mysqli_real_escape_string($conn,$tiendodukien[$i][1]), mysqli_real_escape_string($conn,$tiendodukien[$i][2]), mysqli_real_escape_string($conn,$tiendodukien[$i][3]));
        }
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
        echo print_r($kinhphichitiet);
        mysqli_multi_query($conn,$sql);
        return true;
    }
    else
        return false;
}
function xetthanhvien(){
    if (!isset($_POST['thanhvien']) || empty($_POST['thanhvien'])){
        return null;
    }else return $_POST['thanhvien'];
}
function xettochuc(){
    if (!isset($_POST['tochucthamgia']) || empty($_POST['tochucthamgia'])){
        return null;
    }else return $_POST['tochucthamgia'];
}
function xettiendodukien(){
    if (!isset($_POST['tiendodukien']) || empty($_POST['tiendodukien'])){
        return null;
    }else return $_POST['tiendodukien'];
}
function xetkinhphi(){
    if (!isset($_POST['kinhphichitiet']) || empty($_POST['kinhphichitiet'])){
        return null;
    }else return $_POST['kinhphichitiet'];
}
if (themdetai($_POST['tendetai'],$_POST['muctieu'],$_POST['noidung'],$_POST['cap'],$_POST['moisangtao'],$_POST['thuocchuongtrinh'],$_POST['sucanthiet'],$_POST['tinhhinhnghiencuu'],$_POST['nghiencuulienquan'],$_POST['phuongphapkythuat'],$_POST['kinhphingansach'],$_POST['kinhphinguonkhac'],$_POST['thangthuchien'],$_POST['thangnambatdau'],$_POST['thangnamketthuc'],$_POST['ketqua'],$_POST['loaihinhnghiencuu'],$_POST['linhvuckhoahoc'],$thanhvien=xetthanhvien(),$tochuc=xettochuc(),$tiendodukien=xettiendodukien(),$kinhphichitiet=xetkinhphi())) {
    ?>
    <script type="text/javascript">
        swal('Thành công','Đã thêm đề tài!','success');
    </script>
    <?php
    exit();
}
else{
    echo "<script type=\"text/javascript\">swal('Ôi! Lỗi','Vui lòng thử lại sau','error');</script>";
    exit();
}
?>
