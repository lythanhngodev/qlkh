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
function suaslider($id, $tieude, $link, $style, $hinhanh, $kichhoat){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "UPDATE `slider` set
            `tieude` = '$tieude',
            `link` = '$link', 
            `style` = '$style',
             `hinhanh` = '$hinhanh',
             `kichhoat` = $kichhoat
        WHERE 
            `id` = '$id'
     ";
    if(mysqli_query($conn, $hoi)===TRUE)
        return true;
    else
        return false;
}
if (suaslider($_POST['id'], $_POST['tieude'], $_POST['link'], $_POST['style'], $_POST['hinhanh'], $_POST['kh'])) {
    ?>
    <script type="text/javascript">
        thanhcong("Đã sửa slider!");
        dongmodal('modal-sua-slider');
    </script>
    <?php
    exit();
}
else{
    echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Lỗi!</strong> Không thể sửa slider\")</script>";
    exit();
}
?>

