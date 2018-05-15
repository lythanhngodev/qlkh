<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 20/04/2018
 * Time: 12:05 PM
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
    $result = Array(
        'trangthai' => 0
    );
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $linkcm = $ketnoi->to_slug($_POST['ten']).'-cm';
    $sql = "UPDATE `chuyenmuc` SET `TENCM`='".$_POST['ten']."',`MOTACM`='".$_POST['mota']."',`LINKCM`='$linkcm', `LOAICHUYENMUC` = '".$_POST['loai']."' WHERE `IDCM` = '".$_POST['ma']."'";
    if(mysqli_query($conn, $sql)===TRUE){
        $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>
