<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 13/04/2018
 * Time: 10:21 AM
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
}else{
    echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
}
$result = Array(
    'trangthai' => 0
);
function themthanhvienxetduyet($tc, $tv, $dt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $sql = "DELETE FROM xetduyetdetai WHERE IDDT = '$dt';";
    for($i=0;$i<count($tc);$i++)
        $sql.= "INSERT INTO `xetduyetdetai`(`IDDT`, `IDND`, NHIEMVU, `LOAIHD`) VALUES ('$dt','".$tc[$i][1]."','".$tc[$i][2]."','1');";
    for($i=0;$i<count($tv);$i++)
        $sql.= "INSERT INTO `xetduyetdetai`(`IDDT`, `IDND`, NHIEMVU) VALUES ('$dt','".$tv[$i][1]."','".$tv[$i][2]."');";
    if(mysqli_multi_query($conn,$sql)){
        mysqli_close($conn);
        return true;
    }
    return false;
}

if (themthanhvienxetduyet($_POST['matc'],$_POST['matv'], $_POST['dt'])) {
    $result['trangthai'] = 1;
    echo json_encode($result);
    exit();
}
else
    echo json_encode($result);
?>
