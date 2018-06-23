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
function themslider($tieude, $link, $style, $hinhanh){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "INSERT INTO `slider`(`tieude`, `link`, `style`, `hinhanh`) VALUES ('$tieude','$link','$style','$hinhanh')";
    if(mysqli_query($conn, $hoi)===TRUE)
        return true;
    else
        return false;
}
if (themslider($_POST['tieude'], $_POST['link'], $_POST['style'], $_POST['hinhanh'])) {
    ?>
    <script type="text/javascript">
        thanhcong("Đã thêm slider!");
        dongmodal('modal-them-slider');
    </script>
    <?php
    exit();
}
else{
    echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Lỗi!</strong> Không thể thêm slider\")</script>";
    exit();
}
?>
