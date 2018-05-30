<?php
include_once("../../config.php");
include_once ("../mail/guimail.php");
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
$result = Array(
    'trangthai' => 0
);
$dt=$_POST['dt'];
$nt=$_POST['nt'];
$cn = $_POST['cn'];
$detai = $_POST['detai'];
$mail = $_POST['mail'];
$ngaynghiemthu = $_POST['ngaynghiemthu'];
$ketnoi = new clsKetnoi();
$conn = $ketnoi->ketnoi();
$cn = mysqli_real_escape_string($conn,$cn);
$detai = mysqli_real_escape_string($conn,$detai);
$mail = mysqli_real_escape_string($conn,$mail);
$ngaynghiemthu = mysqli_real_escape_string($conn,$ngaynghiemthu);
$dt = intval($dt);
$nt = intval($nt);
$hoi="";
$qmail = "SELECT mail,passmail,portmail FROM caidat";
$email = mysqli_query($conn,$qmail);
$rmail = mysqli_fetch_row($email);
if ($nt==1){
    $hoi.="UPDATE `detai` SET `TRANGTHAI` = 'Đã nghiệm thu', THOIGIANNGHIEMTHU = '$ngaynghiemthu' WHERE `detai`.`IDDT` = '$dt' AND TRANGTHAI=N'Đang thực hiện';";
}
else{
    $hoi.="UPDATE `detai` SET `TRANGTHAI` = 'Không nghiệm thu' WHERE `detai`.`IDDT` = '$dt'  AND TRANGTHAI=N'Đang thực hiện';";
    $hoi.="DELETE FROM xetduyetdetai WHERE IDDT = '$dt';";
    $hoi.="DELETE FROM xetduyetnghiemthu WHERE IDDT = '$dt';";
    $hoi.="DELETE FROM dexuatdetai WHERE IDDT = '$dt';";
}
if(mysqli_multi_query($conn, $hoi)===TRUE) {
    $body="
<div style='width:100%;float:left;background: #f2f2f2;margin-bottom: 3rem;margin-top: 2rem;'><div style='width: 500px;box-shadow: 0px 2px 2px #dfdfdf;margin: 0 auto;margin-top: 2rem;margin-bottom: 3rem;'><div style='background-color: #16a085;border-top: 4px solid #eaa424;color: #fff;'><h2 style='padding: 20px;margin: 0;font-family: sans-serif;font-weight: 500;text-shadow: 1px 1px 2px #757575;'>NGHIỆM THU ĐỀ TÀI</h2></div><div style='background-color: #fff;text-align: center;padding: 15px;'><h2 style='font-family:  sans-serif;font-weight: 600;'>Chào ".$cn."!</h2><h2 style='font-family: sans-serif;font-weight: 400;padding: 4px;'>Chúc mừng</h2><hr><h2 style='font-family: sans-serif;font-weight: 400;padding: 4px;'>Đề tài: ".$detai." <b>đã nghiệm thu</b></h2><br></div><div><div style='float: left;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>© 2018 P. NCKH Trường ĐH. SPKT Vĩnh Long</div><div style='float: right;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>#1</div></div></div></div>
    ";
    if ($nt==0) {
        $body="
<div style='width:100%;float:left;background: #f2f2f2;margin-bottom: 3rem;margin-top: 2rem;'><div style='width: 500px;box-shadow: 0px 2px 2px #dfdfdf;margin: 0 auto;margin-top: 2rem;margin-bottom: 3rem;'><div style='background-color: #16a085;border-top: 4px solid #eaa424;color: #fff;'><h2 style='padding: 20px;margin: 0;font-family: sans-serif;font-weight: 500;text-shadow: 1px 1px 2px #757575;'>NGHIỆM THU ĐỀ TÀI</h2></div><div style='background-color: #fff;text-align: center;padding: 15px;'><h2 style='font-family:  sans-serif;font-weight: 600;'>Chào ".$cn."!</h2><h2 style='font-family: sans-serif;font-weight: 400;padding: 4px;'>:(</h2><hr><h2 style='font-family: sans-serif;font-weight: 400;padding: 4px;'>Đề tài: ".$detai." <b>không được nghiệm thu</b></h2><br></div><div><div style='float: left;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>© 2018 P. NCKH Trường ĐH. SPKT Vĩnh Long</div><div style='float: right;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>#1</div></div></div></div>
    ";
    }
    guimail('Đăng ký tài khoản', $body, $mail,$rmail[0],$rmail[1],$rmail[2]);
    $result['trangthai'] = 1;
    mysqli_close($conn);
}
echo json_encode($result);
exit();
?>