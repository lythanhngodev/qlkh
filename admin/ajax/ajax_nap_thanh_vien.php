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
$result = Array(
    'trangthai' => 0,
    'so' => 0
);
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $btv = $_POST['btv'];
    $dem = 0;
    for($i=0;$i<count($btv);$i++){
        if ($btv[$i][0]=="" || $btv[$i][1]==""|| $btv[$i][2]==""){
            continue;
        }else{
            $sten = $ketnoi->to_slug($btv[$i][1]);
            $sten.="12345";
            $sten = md5($sten);
            $hoi = "INSERT INTO nguoidung(HO, TEN, TENDANGNHAP, MAIL, MATKHAU, XACNHAN) VALUES ('".$btv[$i][0]."','".$btv[$i][1]."','".$btv[$i][2]."','".$btv[$i][2]."', '".$sten."', b'1');";
            mysqli_query($conn,$hoi);
            $idnd = mysqli_insert_id($conn);
            if ($idnd > 0){
                $loai = "INSERT INTO loaitaikhoan_nguoidung(IDND, IDLTK) VALUES ('$idnd','".$btv[$i][3]."');";
                mysqli_query($conn,$loai);
                $id = mysqli_insert_id($conn);
                if ($id>0) $dem++;
            }
        }
    }
    mysqli_close($conn);
    if ($dem>0) {
        $result['trangthai'] = 1;
        $result['so'] = $dem;
    }
    echo json_encode($result);
    exit();
?>