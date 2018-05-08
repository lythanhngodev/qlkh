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
function xoaslider($id){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "DELETE FROM `slider`
				WHERE 
					`id` = '$id'
     ";
    if(mysqli_query($conn, $hoi)===TRUE)
        return true;
    else
        return false;
}
if (xoaslider($_POST['id'])) {
    ?>
    <script type="text/javascript">
        thanhcong("Đã xóa slider!");
        dongmodal('modal-xoa-slider');
    </script>
    <?php
    exit();
}
else{
    echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Lỗi!</strong> Không thể xóa slider\")</script>";
    exit();
}
?>



