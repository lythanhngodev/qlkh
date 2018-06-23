<?php
include_once("../../config.php");
include_once ("../mail/guimail.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas']) && isset($_SESSION['_loaitaikhoan']) && ($_SESSION['_loaitaikhoan']=='admin' || $_SESSION['_loaitaikhoan']=='khoahoc') && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        trangchu($qlkh['HOSTADMIN']);
        exit();
    }
}else{
    trangchu($qlkh['HOSTADMIN']);
}
$result = Array(
    'trangthai' => 0,
    'thongbao' => ''
);
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $xn = $_POST['xn'];
    $sql = "";
    for ($i=0; $i < count($xn) ; $i++) { 
        $matkhau = $ketnoi->chuoingaunhien(8);
        $sql = "
            UPDATE nguoidung 
            SET 
                XACNHAN = b'1',
                MATKHAU = '".md5($matkhau)."' 
            WHERE 
                IDND = '".$xn[$i][4]."' AND XACNHAN = b'0';
        ";
        
        $hoten = explode(" ",$xn[$i][1]);
        $qmail = "SELECT mail,passmail,portmail FROM caidat";
        $email = mysqli_query($conn,$qmail);
        $rmail = mysqli_fetch_row($email);
        $body = "<div style='width:100%;float:left;background: #f2f2f2;margin-bottom: 3rem;margin-top: 2rem;'><div style='width: 500px;box-shadow: 0px 2px 2px #dfdfdf;margin: 0 auto;margin-top: 2rem;margin-bottom: 3rem;'><div style='background-color: #16a085;border-top: 4px solid #eaa424;color: #fff;'><h2 style='padding: 20px;margin: 0;font-family: sans-serif;font-weight: 500;text-shadow: 1px 1px 2px #757575;'>XÁC MINH NGƯỜI DÙNG</h2></div><div style='background-color: #fff;text-align: center;padding: 15px;'><h2 style='font-family:  sans-serif;font-weight: 600;'>Chào ".end($hoten)."!</h2><h2 style='font-family: sans-serif;font-weight: 400;padding: 4px;'>Tài khoản của bạn đã được xác nhận</h2><hr style='margin: 0px 35px;'><h2 style='font-family: sans-serif;font-weight: 400;padding: 3px;'>Tên đăng nhập: <strong>".$xn[$i][2]."</strong></h2><h2 style='font-family: sans-serif;font-weight: 400;padding: 3px;'>Mật khẩu: <strong>".$matkhau."</strong></h2><br><a href='".$qlkh['HOSTADMIN']."' style='text-decoration:  none;background: #0b77e7;color:  #fff;padding: 12px 18px;margin-top: 10px;font-family:  sans-serif;font-weight: 400;font-size: 1.3rem;border-radius: 4px;'>ĐĂNG NHẬP NGAY</a><br><br></div><div><div style='float: left;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>© 2018 P. NCKH Trường ĐH. SPKT Vĩnh Long</div><div style='float: right;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>#1</div></div></div></div>";
        if(mysqli_query($conn, $sql)===TRUE){
            $row = mysqli_affected_rows($conn);
            if($row==0){$result['trangthai'] = 0;break;}
            else{
                $result['trangthai'] = 1;
                guimail('Đăng ký tài khoản', $body, $xn[$i][3],$rmail[0],$rmail[1],$rmail[2]);
            }
        }
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>