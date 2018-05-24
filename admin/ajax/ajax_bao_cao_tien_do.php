
<?php
include_once("../../config.php");
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
function suadetai($baocaotiendo, $iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $iddt=mysqli_real_escape_string($conn,$iddt);
    $iddt = intval($iddt);
    // Xóa báo cáo tổ chức
    $sql = "DELETE FROM `baocaotiendo` WHERE `IDDT` = '$iddt';";
    // Thêm tổ chức tham gia đề tài
    if ($baocaotiendo!=null){
        for($i=0;$i<count($baocaotiendo);$i++){
            $sql.= "INSERT INTO `baocaotiendo`(`IDDT`, `CVDATH`, `CVCANTH`, `DENGHI`, `NGAYBC`) VALUES ('$iddt','".$baocaotiendo[$i][0]."','".$baocaotiendo[$i][1]."','".$baocaotiendo[$i][2]."','".$baocaotiendo[$i][3]."');";
        }
    }
    mysqli_multi_query($conn,$sql);
    return true;
}
function xetbctd(){
    if (!isset($_POST['bctd'])){
        return null;
    }else return $_POST['bctd'];
}
$result = Array(
    'trangthai' => 0
);
if (suadetai($baocaotiendo=xetbctd(),$_POST['dt'])) {
    $result['trangthai'] = 1;
    echo json_encode($result);
    exit();
}
else{
    echo json_encode($result);
    exit();
}
?>