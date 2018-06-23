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
if (!isset($_POST['nhom']) || empty($_POST['nhom'])) {
    trangchu($qlkh['HOSTADMIN']);   
}
$nhom = $_POST['nhom'];
$ketnoi = new clsKetnoi();
$conn = $ketnoi->ketnoi();
$sql = "SELECT nd.MAIL FROM nhomthongbao_nguoidung nn, nguoidung nd WHERE nn.IDND=nd.IDND AND nn.IDNTB = '$nhom'"; 
$ex_sql = mysqli_query($conn, $sql);
?>
<div class="modal" id="modal-chi-tiet-nhom" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nhóm: <?php echo $_POST['tennhom'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="ct-tv-nhom" style="height: 130px;overflow-y: scroll;padding: 4px;border: 1px solid #ced4da;border-radius: 13px 0px 0px 10px;">
                    <?php while ($row = mysqli_fetch_assoc($ex_sql)) { ?>
                    <span class="chi-tiet-nhom"><?php echo $row['MAIL'] ?></span>
                    <?php } ?>
                </div>
                <hr>
                <div class="form-group">
                    <label class="text-bold">Tiêu đề</label>
                    <input class="form-control" id="tieudemail2"></input>
                </div>
                <div class="form-group">
                    <label class="text-bold">Nội dung</label>
                    <textarea class="form-control" id="noidungmail2"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="guithuchonhom"><i class="fa fa-paper-plane"></i>&ensp;Gửi thông báo</button>
            </div>
        </div>
    </div>
</div>