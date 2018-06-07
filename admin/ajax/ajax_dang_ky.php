<?php
include_once("../../config.php");
include_once ("../mail/guimail.php");
$mang = array(
    'trangthai' => 0,
    'thongbao' => ''
);
function dangky($ho,$ten,$tdn,$mail,$sv){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $matkhau = $ketnoi->chuoingaunhien(8);
    $ho = mysqli_real_escape_string($conn,$ho);
    $ten = mysqli_real_escape_string($conn,$ten);
    $tdn = mysqli_real_escape_string($conn,$tdn);
    $mail = mysqli_real_escape_string($conn,$mail);
    $sv = mysqli_real_escape_string($conn,$sv);
    $_sv ="";
    if ($sv=='true') {
        $_sv = "0";
    }else{
        $_sv = "1";
    }
    if ($_sv=="") {
        return false;
    }
    $hoi="INSERT INTO `nguoidung`(`HO`, `TEN`, `MAIL`, `TENDANGNHAP`, `MATKHAU`,`XACNHAN`, `GIAOVIEN`) VALUES ('$ho','$ten','$mail','$tdn','".md5($matkhau)."', b'0', b'$_sv')";
    if(mysqli_query($conn, $hoi)===TRUE){
        $dem = mysqli_affected_rows($conn);
        if ($dem>0){
            $id = mysqli_insert_id($conn);
            $sql = "INSERT INTO `loaitaikhoan_nguoidung`(`IDND`, `IDLTK`) VALUES ('$id','2')";
            mysqli_query($conn, $sql);
            $qmail = "SELECT mail,passmail,portmail FROM caidat";
            $email = mysqli_query($conn,$qmail);
            $rmail = mysqli_fetch_row($email);
            $body="Chào ".$ten."!<br>Đăng ký tài khoản thành công vui lòng chờ xác nhận tài khoản của bạn, bạn sẽ nhận được mail khi tài khoản được xác nhận";
            guimail('Đăng ký tài khoản', $body, $mail,$rmail[0],$rmail[1],$rmail[2]);
        }
        mysqli_close($conn);
        return true;
    }
    else
        return false;
}
if (dangky($_POST['ho'],$_POST['ten'],$_POST['tdn'],$_POST['mail'],$_POST['sv'])) {
    $mang['trangthai'] = 1;
    $mang['thongbao'] = 'Đăng ký thành công';
}
else{
    $mang['thongbao'] = "Có lỗi, vui lòng thử lại";
}
echo json_encode($mang);
?>