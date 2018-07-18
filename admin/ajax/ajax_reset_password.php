<?php
include_once("../../config.php");
include_once ("../mail/guimail.php");
if($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest'){
    trangchu($qlkh['HOSTADMIN']);
    exit();
}
$mang = array(
    'trangthai' => 0,
    'thongbao' => ''
);
function datlaimatkhau($mail,$host){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $matkhau = $ketnoi->chuoingaunhien(8);
    $token = $ketnoi->chuoingaunhien(256);
    $hoi="SELECT IDND, MAIL,TEN FROM `nguoidung` WHERE MAIL = '%s'";
    $hoi = sprintf($hoi,mysqli_real_escape_string($conn,$mail));
    $qhoi=mysqli_query($conn, $hoi);
    $rhoi=mysqli_num_rows($qhoi);
    if ($rhoi>0) {
        $row = mysqli_fetch_row($qhoi);
        $matkhau = $ketnoi->chuoingaunhien(8);
        $sql = "
            UPDATE nguoidung 
            SET 
                MATKHAU = '".md5($matkhau)."',
                TOKEN = '$token'
            WHERE 
                IDND = '".$row[0]."' AND XACNHAN = b'1';
        ";
        $qmail = "SELECT mail,passmail,portmail FROM caidat";
        $email = mysqli_query($conn,$qmail);
        $rmail = mysqli_fetch_row($email);
        $body = "<div style='width:100%;float:left;background: #f2f2f2;margin-bottom: 3rem;margin-top: 2rem;'><div style='width: 500px;box-shadow: 0px 2px 2px #dfdfdf;margin: 0 auto;margin-top: 2rem;margin-bottom: 3rem;'><div style='background-color: #16a085;border-top: 4px solid #eaa424;color: #fff;'><h2 style='padding: 20px;margin: 0;font-family: sans-serif;font-weight: 500;text-shadow: 1px 1px 2px #757575;'>ĐẶT LẠI MẬT KHẨU</h2></div><div style='background-color: #fff;text-align: center;padding: 15px;'><h2 style='font-family:  sans-serif;font-weight: 600;'>Chào ".$row[2]."!</h2><hr style='margin: 0px 35px;'><h2 style='font-family: sans-serif;font-weight: 400;padding: 3px;'>Vui lòng nhấn vào nút bên dưới để thay đổi mật khẩu của bạn. Bạn có thể đăng nhập vào hệ thống sau khi thay đổi mật khẩu thành công.</strong></h2><br><a href='".$host."?p=reset&_t=".$token."' style='text-decoration:  none;background: #0b77e7;color:  #fff;padding: 12px 18px;margin-top: 10px;font-family:  sans-serif;font-weight: 400;font-size: 1.3rem;border-radius: 4px;'>ĐẶT LẠI MẬT KHẨU</a><br><br></div><div><div style='float: left;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>© 2018 P. NCKH Trường ĐH. SPKT Vĩnh Long</div><div style='float: right;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>#1</div></div></div></div>";
        if(mysqli_query($conn, $sql)===TRUE){
            $drow = mysqli_affected_rows($conn);
            if($drow==0){$result['trangthai'] = 0;break;}
            else{
                guimail('Đặt lại mật khẩu', $body, $mail,$rmail[0],$rmail[1],$rmail[2]);
                return true;
            }
        }
    }else return false;
}

if (datlaimatkhau($_POST['mail'],$qlkh['HOSTADMIN'])){
    $mang['trangthai'] = 1;
}
else{
    $mang['thongbao'] = "Có lỗi, vui lòng thử lại";
}
echo json_encode($mang);
exit();
?>