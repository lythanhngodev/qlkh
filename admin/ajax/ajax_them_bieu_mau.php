<?php
include_once("../../config.php");
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
$ma = $_POST['ma'];
$ten = $_POST['ten'];
$file = $_FILES['file'];
$result = Array(
    'trangthai' => '0',
    'thongbao' => '',
    'tenfile' => '',
    'ma' => 0
);
    $fileName = $file['name'];
    $fileError = $file['error'];
    if ($fileError == 1){
        $result['thongbao'] = 'Dung lượng file quá lớn';
        echo json_encode($result);
        exit();
    }
    else{
        $ketnoi = new clsKetnoi();
        $conn = $ketnoi->ketnoi();
        $fileName= time()."-".basename($file["name"]);
        $temp = explode(".", $_FILES["file"]["name"]);
        $fileName = chop($ketnoi->to_slug($fileName),end($temp)).".".end($temp);
        // không có lỗi
        $result['tenfile']=$fileName;
        $hoi = "INSERT INTO `bieumau`(`MABM`, `TENBM`, `FILE`) VALUES ('$ma','$ten','$fileName')";
        if(mysqli_query($conn, $hoi)===TRUE){
            $result['ma'] = mysqli_insert_id($conn);
            move_uploaded_file($file['tmp_name'], '../../files/'.$fileName);
            $result['trangthai'] = '1';
            mysqli_close($conn);
        }else{
            $result['trangthai'] = '0';
        }
}
    echo json_encode($result);
    exit();
?>

