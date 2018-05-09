<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 15/04/2018
 * Time: 7:28 PM
 */
?>

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
function suadetai($tendetai,$muctieu,$noidung,$cap,$moisangtao,$thuocchuongtrinh,$sucanthiet,$tinhhinhnghiencuu,$nghiencuulienquan,$phuongphapkythuat,$kinhphingansach,$kinhphinguonkhac,$thangthuchien,$thangnambatdau,$thangnamketthuc,$ketqua,$loaihinhnghiencuu,$linhvuckhoahoc,$thanhvien,$tochucthamgia,$tiendodukien,$baocaotiendo,$kinhphichitiet,$idnd,$iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $idnd=mysqli_real_escape_string($conn,$idnd);
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
            IDDT = '$iddt'
    ";
    //exit();
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
function xetbctd(){
    if (!isset($_POST['baocaotiendo'])){
        return null;
    }else return $_POST['baocaotiendo'];
}
if (suadetai($_POST['tendetai'],$_POST['muctieu'],$_POST['noidung'],$_POST['cap'],$_POST['moisangtao'],$_POST['thuocchuongtrinh'],$_POST['sucanthiet'],$_POST['tinhhinhnghiencuu'],$_POST['nghiencuulienquan'],$_POST['phuongphapkythuat'],$_POST['kinhphingansach'],$_POST['kinhphinguonkhac'],$_POST['thangthuchien'],$_POST['thangnambatdau'],$_POST['thangnamketthuc'],$_POST['ketqua'],$_POST['loaihinhnghiencuu'],$_POST['linhvuckhoahoc'],$thanhvien=xetthanhvien(),$tochuc=xettochuc(),$_POST['tiendodukien'],$baocaotiendo=xetbctd(),$_POST['kinhphichitiet'],$_POST['idnd'],$_POST['iddt'])) {
    ?>
    <script type="text/javascript">
        swal('Thành công','Đã sửa đề tài!','success');
    </script>
    <?php
    exit();
}
else{
    echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Lỗi!</strong> Xảy ra lỗi khi sửa\")</script>";
    exit();
}
?>
