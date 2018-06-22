<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas']) && isset($_SESSION['_loaitaikhoan']) && ($_SESSION['_loaitaikhoan']=='admin' || $_SESSION['_loaitaikhoan']=='khoahoc')) {
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
function themnhomthobgbao($tv,$tennhom){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $tennhom = mysqli_real_escape_string($conn,$tennhom);
    if (empty($tennhom)) return false;
    // Tạo nhóm
    $sql_nhom = "INSERT INTO nhomthongbao (TENNHOM) VALUES ('$tennhom')";
    mysqli_query($conn, $sql_nhom);
    $idnhom = mysqli_insert_id($conn);
    $sql_them="";
    // Thêm người dùng vào nhóm
    for ($i=0,$c=count($tv); $i < $c; $i++) { 
        $sql = "SELECT IDND FROM nguoidung WHERE (BINARY MAIL = '".$tv[$i]."')";
        $ex_sql = mysqli_query($conn,$sql);
        $dem = mysqli_num_rows($ex_sql);
        if ($dem>0){
            $ex = mysqli_fetch_row($ex_sql);
            $idnguoidung = $ex[0];
            $sql_them.= "INSERT INTO nhomthongbao_nguoidung(IDNTB,IDND) VALUES ($idnhom, $idnguoidung);";
        }
    }
    if(mysqli_multi_query($conn, $sql_them)){
        $dem = mysqli_affected_rows($conn);
        if ($dem>0) {
            mysqli_close($conn);
            return true;
        }else{
            mysqli_close($conn);
            return false;
        }
    }
    else{
        echo json_encode($result);
        return false;
    }
}
if (themnhomthobgbao($_POST['tv'], $_POST['tennhom'])) {
    $result['trangthai'] = 1;
    echo json_encode($result);
    exit();
}
else{
    echo json_encode($result);
    exit();
}
?>