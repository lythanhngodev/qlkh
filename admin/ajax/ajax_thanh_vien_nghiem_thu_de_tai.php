<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 18/04/2018
 * Time: 11:15 PM
 */
?>
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
function themthanhviennghiemthu($nt, $dt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $sql = "DELETE FROM xetduyetnghiemthu WHERE IDDT = '$dt';";
    for($i=0;$i<count($nt);$i++)
        $sql.= "INSERT INTO `xetduyetnghiemthu`(`IDDT`, `IDND`, `NHIEMVU`, `GHICHU`) VALUES ('$dt','".$nt[$i][1]."','".$nt[$i][2]."','".$nt[$i][3]."');";
    if(mysqli_multi_query($conn,$sql)){
        mysqli_close($conn);
        return true;
    }
    return false;
}

if (themthanhviennghiemthu($_POST['nt'], $_POST['dt'])) {
    $result['trangthai'] = 1;
    echo json_encode($result);
    exit();
}
else
    echo json_encode($result);
?>

