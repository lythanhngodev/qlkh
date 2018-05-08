<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 15/04/2018
 * Time: 5:45 PM
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
$ketnoi = new clsKetnoi();
$conn = $ketnoi->ketnoi();
$file = $_FILES['file'];
$fileName = $file['name'];
$fileType = $file['type'];
$fileError = $file['error'];

$thongtin = Array(
    'trangthai' => '0',
    'thongbao' => 'Tải file chưa thành công',
    'tenfile' => $fileName
);
if ($fileError == 1){
    $thongtin['thongbao'] = 'Dung lượng file quá lớn';
}
else{
    $fileName= time()."-".basename($_FILES["file"]["name"]);
    $hoi = "UPDATE `detai` SET `FILE` = '".$fileName."' WHERE `detai`.`IDDT` = '".$_POST['dt']."'";
    mysqli_query($conn,$hoi);
    // không có lỗi
    move_uploaded_file($file['tmp_name'], '../../files/'.$fileName);
    $thongtin['trangthai'] = 1;
    $thongtin['thongbao'] = "Bạn đã upload $fileName thành công";
    $thongtin['tenfile']=$fileName;
}
echo json_encode($thongtin);
exit();
?>