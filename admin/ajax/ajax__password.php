<?php
session_start();
include_once("../../config.php");
$mang = array(
    'trangthai' => 0,
    'thongbao' => ''
);
if(!isset($_SESSION['_t']) || empty($_SESSION['_t'])){
    echo json_encode($mang);
    exit();
}
if(isset($_POST['mk'])&&!empty($_POST['mk'])){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $matkhau = $_POST['mk'];
    $sql = "
        UPDATE nguoidung 
        SET 
            MATKHAU = '".md5($matkhau)."',
            TOKEN = ''
        WHERE 
            TOKEN = '".$_SESSION['_t']."' AND XACNHAN = b'1';
    ";
    if(mysqli_query($conn, $sql)===TRUE){
        $dem = mysqli_affected_rows($conn);
        if ($dem>0){
            $mang['trangthai'] = 1;
            echo json_encode($mang);
            session_destroy();
            exit();
        }
        else{
            echo json_encode($mang);
            exit();
        }
    }
    mysqli_close($conn);
}
else{
    echo json_encode($mang);
    exit();
}
?>