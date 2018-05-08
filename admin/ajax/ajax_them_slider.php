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
