<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 27/04/2018
 * Time: 10:04 AM
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
$result = Array(
    'trangthai' => '0',
    'thongbao' => ''
);
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $ho = mysqli_real_escape_string($conn,$_POST['ho']);
    $ten = mysqli_real_escape_string($conn,$_POST['ten']);
    $gioitinh = mysqli_real_escape_string($conn,$_POST['gioitinh']);
    $ngaysinh = mysqli_real_escape_string($conn,$_POST['ngaysinh']);
    $noisinh = mysqli_real_escape_string($conn,$_POST['noisinh']);
    $quequan = mysqli_real_escape_string($conn,$_POST['quequan']);
    $dantoc = mysqli_real_escape_string($conn,$_POST['dantoc']);
    $chucdanhgiangvien = mysqli_real_escape_string($conn,$_POST['chucdanhgiangvien']);
    $chucdanhgiangvien = intval($chucdanhgiangvien);
    $trinhdochuyenmon = mysqli_real_escape_string($conn,$_POST['trinhdochuyenmon']);
    $hocvicaonhat = mysqli_real_escape_string($conn,$_POST['hocvicaonhat']);
    $namnuocnhanhocvi = mysqli_real_escape_string($conn,$_POST['namnuocnhanhocvi']);
    $chucdanhkhoahoc = mysqli_real_escape_string($conn,$_POST['chucdanhkhoahoc']);
    $nambonhiem = mysqli_real_escape_string($conn,$_POST['nambonhiem']);
    $chucvu = mysqli_real_escape_string($conn,$_POST['chucvu']);
    $donvicongtac = mysqli_real_escape_string($conn,$_POST['donvicongtac']);
    $choorieng = mysqli_real_escape_string($conn,$_POST['choorieng']);
    $dienthoaicq = mysqli_real_escape_string($conn,$_POST['dienthoaicq']);
    $dienthoainr = mysqli_real_escape_string($conn,$_POST['dienthoainr']);
    $dienthoaidd = mysqli_real_escape_string($conn,$_POST['dienthoaidd']);
    $fax = mysqli_real_escape_string($conn,$_POST['fax']);
    $mail = mysqli_real_escape_string($conn,$_POST['mail']);
    $thacsichuyennganh = mysqli_real_escape_string($conn,$_POST['thacsichuyennganh']);
    $namcapbang = mysqli_real_escape_string($conn,$_POST['namcapbang']);
    $noidaotaotscn = mysqli_real_escape_string($conn,$_POST['noidaotaotscn']);
    $tiensichuyennganh = mysqli_real_escape_string($conn,$_POST['tiensichuyennganh']);
    $namcapbangtscn2 = mysqli_real_escape_string($conn,$_POST['namcapbangtscn2']);
    $noidaotaotscn2 = mysqli_real_escape_string($conn,$_POST['noidaotaotscn2']);
    $tenluanan = mysqli_real_escape_string($conn,$_POST['tenluanan']);
    $bdt = (!isset($_POST['bdt'])) ? null : $_POST['bdt'];
    $bct = (!isset($_POST['bct'])) ? null : $_POST['bct'];
    $idnd = $_POST['idnd'];
    $hoi = "
        UPDATE `nguoidung` 
        SET 
            `HO`='$ho',
            `TEN`='$ten',
            `GIOITINH`='$gioitinh',
            `NGAYSINH`='$ngaysinh',
            `NOISINH`='$noisinh',
            `QUEQUAN`='$quequan',
            `DANTOC`='$dantoc',
            `NAMNUOCHOCVI`='$namnuocnhanhocvi',
            `NAMBONHIEM`='$nambonhiem',
            `CHOORIENG`='$choorieng',
            `DIENTHOAICQ`='$dienthoaicq',
            `DIENTHOAINR`='$dienthoainr',
            `DIENTHOAIDD`='$dienthoaidd',
            `FAX`='$fax',
            `MAIL`='$mail',
            `THACSICHUYENNGANH`='$thacsichuyennganh',
            `NAMCAPBANGTSCN`='$namcapbang',
            `NOIDAOTAOTSCN`='$noidaotaotscn',
            `TIENSICHUYENNGANH`='$tiensichuyennganh',
            `NAMCAPBANGTSCN2`='$namcapbangtscn2',
            `NOIDAOTAOTSCN2`='$noidaotaotscn2',
            `TENLUANAN`='$tenluanan'
        WHERE 
            `IDND` = '$idnd';
    ";
    $hoi.="DELETE FROM nguoidung_chucdanhgiangvien WHERE IDND = '$idnd';";
    $hoi.="INSERT INTO nguoidung_chucdanhgiangvien (IDND, IDCD) VALUES ('$idnd', '$chucdanhgiangvien');";

    $hoi.="DELETE FROM nguoidung_trinhdochuyenmon WHERE IDND = '$idnd';";
    $hoi.="INSERT INTO nguoidung_trinhdochuyenmon (IDND, IDTD) VALUES ('$idnd', '$trinhdochuyenmon');";

    $hoi.="DELETE FROM nguoidung_hocvi WHERE IDND = '$idnd';";
    $hoi.="INSERT INTO nguoidung_hocvi (IDND, IDHV) VALUES ('$idnd', '$hocvicaonhat');";

    $hoi.="DELETE FROM nguoidung_chucdanhkhoahoc WHERE IDND = '$idnd';";
    $hoi.="INSERT INTO nguoidung_chucdanhkhoahoc (IDND, IDCD) VALUES ('$idnd', '$chucdanhkhoahoc');";

    $hoi.="DELETE FROM nguoidung_chucvu WHERE IDND = '$idnd';";
    $hoi.="INSERT INTO nguoidung_chucvu (IDND, IDCV) VALUES ('$idnd', '$chucvu');";

    $hoi.="DELETE FROM nguoidung_khoabomon WHERE IDND = '$idnd';";
    $hoi.="INSERT INTO nguoidung_khoabomon (IDND, IDKBM) VALUES ('$idnd', '$donvicongtac');";
    
    $hoi.="DELETE FROM `daihoc` WHERE `IDND` = '$idnd';";
    if($bdt!=null){
        for ($i=0; $i < count($bdt) ; $i++) { 
            $q="INSERT INTO `daihoc`(`IDND`, `HEDAOTAO`, `NOIDAOTAO`, `NGANHHOC`, `NUOCDAOTAO`, `NAMTOTNGHIEP`) VALUES ('$idnd','%s','%s','%s','%s','%s');";
            $hoi.=sprintf($q, mysqli_real_escape_string($conn,$bdt[$i][0]),mysqli_real_escape_string($conn,$bdt[$i][1]),mysqli_real_escape_string($conn,$bdt[$i][2]),mysqli_real_escape_string($conn,$bdt[$i][3]),mysqli_real_escape_string($conn,$bdt[$i][4]));
        }
    }
    $hoi.="DELETE FROM `congtacchuyenmon` WHERE `IDND` = '$idnd';";
    if($bct!=null){
        for ($i=0; $i <count($bct); $i++) { 
            $q="INSERT INTO `congtacchuyenmon`(`IDND`, `THOIGIAN`, `NOICONGTAC`, `CONGVIEC`) VALUES ('$idnd','%s','%s','%s');";
            $hoi.=sprintf($q,mysqli_real_escape_string($conn,$bct[$i][0]),mysqli_real_escape_string($conn,$bct[$i][1]),mysqli_real_escape_string($conn,$bct[$i][2]));
        }
    }
    if(mysqli_multi_query($conn, $hoi)===TRUE){
        $result['trangthai'] = '1';
        mysqli_close($conn);
    }else{
        $result['thongbao'] = 'Xảy ra lỗi! Vui lòng thử lại sau';
    }
echo json_encode($result);
exit();
?>
