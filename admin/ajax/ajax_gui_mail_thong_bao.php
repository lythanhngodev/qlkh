<?php
include_once("../../config.php");
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
if (!isset($_POST['ds']) || empty($_POST['ds'])) {
    trangchu($qlkh['HOSTADMIN']);   
}
include_once "../mail/guimail.php";
$ds = $_POST['ds'];
$ketnoi = new clsKetnoi();
$conn = $ketnoi->ketnoi();
$tieude = addslashes($_POST['tieude']);
$noidung = ($_POST['noidung']);
$qmail = "SELECT mail,passmail,portmail FROM caidat";
$email = mysqli_query($conn,$qmail);
$rmail = mysqli_fetch_row($email);
$demds = count($ds);
$gm = null;
// tách dữ liệu cho 50
for($i=0,$l=count($ds),$j=1,$k=0;$i<$l;$i++){
  if($j==50){
      $gm[$k][] = array($ds[$i]);
      $j=0;
      $k++;
  }else{
      $gm[$k][] = array($ds[$i]);
      $j++;
  }
}
// ráp dl
$demmail=0;
for($i=0,$l=count($gm),$dem=0;$i<$l;$i++){
    if (guimailnhom($tieude, $noidung, $gm[$i],$rmail[0],$rmail[1],$rmail[2])) {
      $demmail++;
    }
}
$result = Array(
    'trangthai' => 0
);
if ($demmail>0) {
  $result['trangthai'] = 1;
}
echo json_encode($result);
?>