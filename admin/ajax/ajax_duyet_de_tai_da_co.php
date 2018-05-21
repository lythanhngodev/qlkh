<?php
include_once("../../config.php");
include_once ("../mail/guimail.php");

session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
        exit();
    }
}else{
    echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
}
$result = Array(
    'trangthai' => 0
);
$dt=$_POST['dt'];
$duyet=$_POST['duyet'];
$cn = $_POST['cn'];
$detai = $_POST['detai'];
$mail = $_POST['mail'];
$ketnoi = new clsKetnoi();
$conn = $ketnoi->ketnoi();
$dt = intval($dt);
$duyet = intval($duyet);
$cn = mysqli_real_escape_string($conn,$cn);
$detai = mysqli_real_escape_string($conn,$detai);
$mail = mysqli_real_escape_string($conn,$mail);
$qmail = "SELECT mail,passmail,portmail FROM caidat";
$email = mysqli_query($conn,$qmail);
$rmail = mysqli_fetch_row($email);
$hoi="";
if ($duyet==1){
    $hoi.="UPDATE `detai` SET `DUYET` = b'1' WHERE `detai`.`IDDT` = '$dt'";
}
else{
    $hoi.= "DELETE FROM `detai` WHERE `IDDT` = '$dt';";
    $hoi.= "DELETE FROM `loaihinhnghiencuu` WHERE `IDDT` = '$dt';";
    $hoi.= "DELETE FROM `linhvuckhoahoc` WHERE `IDDT` = '$dt';";
    $hoi.= "DELETE FROM `thanhviendetai` WHERE `IDDT` = '$dt';";
    $hoi.= "DELETE FROM `tochucthamgia` WHERE `IDDT` = '$dt';";
    $hoi.= "DELETE FROM `tiendodukien` WHERE `IDDT` = '$dt';";
    $hoi.= "DELETE FROM `kinhphi` WHERE `IDDT` = '$dt';";
    $hoi.="DELETE FROM dexuatdetai WHERE IDDT = '$dt';";
}
if(mysqli_multi_query($conn, $hoi)===TRUE) {
    $body="
<div style='width:100%;float:left;background: #f2f2f2;margin-bottom: 3rem;margin-top: 2rem;'><div style='width: 500px;box-shadow: 0px 2px 2px #dfdfdf;margin: 0 auto;margin-top: 2rem;margin-bottom: 3rem;'><div style='background-color: #16a085;border-top: 4px solid #eaa424;color: #fff;'><h2 style='padding: 20px;margin: 0;font-family: sans-serif;font-weight: 500;text-shadow: 1px 1px 2px #757575;'>DUYỆT ĐỀ TÀI ĐÃ TỪNG NGHIỆM THU</h2></div><div style='background-color: #fff;text-align: center;padding: 15px;'><h2 style='font-family:  sans-serif;font-weight: 600;'>Chào ".$cn."!</h2><h2 style='font-family: sans-serif;font-weight: 400;padding: 4px;'>Chúc mừng</h2><hr><h2 style='font-family: sans-serif;font-weight: 400;padding: 4px;'>Đề tài: ".$detai." <b>đã được duyệt</b></h2><br></div><div><div style='float: left;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>© 2018 P. NCKH Trường ĐH. SPKT Vĩnh Long</div><div style='float: right;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>#1</div></div></div></div>
    ";
    if ($duyet==0) {
        $body="
<div style='width:100%;float:left;background: #f2f2f2;margin-bottom: 3rem;margin-top: 2rem;'><div style='width: 500px;box-shadow: 0px 2px 2px #dfdfdf;margin: 0 auto;margin-top: 2rem;margin-bottom: 3rem;'><div style='background-color: #16a085;border-top: 4px solid #eaa424;color: #fff;'><h2 style='padding: 20px;margin: 0;font-family: sans-serif;font-weight: 500;text-shadow: 1px 1px 2px #757575;'>DUYỆT ĐỀ TÀI ĐÃ TỪNG NGHIỆM THU</h2></div><div style='background-color: #fff;text-align: center;padding: 15px;'><h2 style='font-family:  sans-serif;font-weight: 600;'>Chào ".$cn."!</h2><h2 style='font-family: sans-serif;font-weight: 400;padding: 4px;'>:(</h2><hr><h2 style='font-family: sans-serif;font-weight: 400;padding: 4px;'>Đề tài: ".$detai." <b>không được duyệt</b></h2><br></div><div><div style='float: left;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>© 2018 P. NCKH Trường ĐH. SPKT Vĩnh Long</div><div style='float: right;font-family: Open sans,Arial,Sans-serif;font-size: 14px;color: #808e8e;line-height: 28px;'>#1</div></div></div></div>
    ";
    }
    if (!empty($mail)) {
        echo json_encode($result);
        exit();
    }
    guimail('Đăng ký tài khoản', $body, $mail,$rmail[0],$rmail[1],$rmail[2]);
    $result['trangthai'] = 1;
    mysqli_close($conn);
}
echo json_encode($result);
exit();
?>