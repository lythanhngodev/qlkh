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
        $temp = explode(".", $_FILES["file"]["name"]);
        $fileName = chop($ketnoi->to_slug($fileName),end($temp)).".".end($temp);
        // không có lỗi
        move_uploaded_file($file['tmp_name'], '../../files/'.$fileName);
        $thongtin['trangthai'] = 1;
        $thongtin['thongbao'] = "Đã tải file $fileName lên sever";
        $thongtin['tenfile']=$fileName;
    }
    echo json_encode($thongtin);
    exit();
?>