<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 12/04/2018
 * Time: 9:42 AM
 */
?>
<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        trangchu($qlkh['HOSTADMIN']);
        exit();
    }
}else{
    trangchu($qlkh['HOSTADMIN']);
}
function guidexuat($id){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi="INSERT INTO `dexuatdetai`(`IDDT`) VALUES ('$id')";
    if(mysqli_query($conn, $hoi)===TRUE){
        $q_trangtthaidetai = "UPDATE `detai` SET `TRANGTHAI` = 'Đang xét duyệt' WHERE `detai`.`IDDT` = '".mysqli_real_escape_string($conn,$id)."'";
        mysqli_query($conn,$q_trangtthaidetai);
        mysqli_close($conn);
        return true;
    }
    else
        return false;
}

if (guidexuat($_POST['id'])) {
    ?>
    <script type="text/javascript">
        swal('Thành công','Đã gửi đề xuất thành công!','success');
        dongmodal('modal-Gui-de-xuat');
    </script>
    <?php
    exit();
}
else{
    echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Lỗi!</strong> Không thể thêm tác giả\")</script>";
    exit();
}
?>
