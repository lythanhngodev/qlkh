<?php
include_once("../../config.php");
sleep(1.5);
session_start();
$ketnoi = new clsKetnoi();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
        exit();
    }
}
if (!isset($_POST['_token']) || !isset($_SESSION['token']) || (isset($_SESSION['token']) && $_SESSION['token'] != $_POST['_token'])) {
    echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
}
function lay_tac_gia_bai_bao($idb){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $q_ten = "SELECT CONCAT(nd.HO,' ',nd.TEN) AS  HOTEN FROM baokhoahoc b, nguoidung_baibao nb, nguoidung nd WHERE nb.IDBAO = b.IDBAO AND nb.IDND=nd.IDND AND b.IDBAO='$idb';";
    $e_ten = mysqli_query($conn,$q_ten);
    return $e_ten;
}
$conn = $ketnoi->ketnoi();
$capsql = "SELECT DISTINCT b.CAPBAIBAO FROM baokhoahoc b WHERE b.ANHIEN=b'1';";
$qcapsql = mysqli_query($conn,$capsql);
$rcapsql = mysqli_num_rows($qcapsql);
if ($rcapsql==0) {echo "Không có dữ liệu";exit(); }
$sql_stqd = "SELECT * FROM sotietquidoi";
$esql_stqd = mysqli_query($conn, $sql_stqd);
$stqd=null;
while ($row = mysqli_fetch_row($esql_stqd)) {
    $stqd[]=$row;
}
?>
<div class="card line-chart-example">
    <div class="card-header">
        <h4>Tất cả đề tài đã nghiệm thu</h4>
        <hr>
        <form action="export/_export_tat_ca_bai_bao_khoa_hoc.php" method="post">
            <input type="text" name="alldtnt" hidden="hidden" value="<?php echo $_POST['_token']; ?>">
            <button type="submit" class="btn btn-warning"><i class='far fa-file-excel'></i>&ensp;Xuất excel</button>
        </form>
    </div>
    <div class="card-body">
        <?php while ($cap = mysqli_fetch_assoc($qcapsql)) { ?>
        <h4>Cấp: <?php $capbaibao=$cap['CAPBAIBAO']; echo $capbaibao; ?></h4>
        <table id="bang-bieu-mau" class="table table-bordered table-hover">
            <thead>
                <tr style="background:#e9ecef;">
                    <th class="giua">TT</th>
                    <th class="giua">Tên bài báo</th>
                    <th class="giua">Tác giả</th>
                    <th class="giua">Đơn vị</th>
                    <th class="giua">Ghi chú</th>
                    <th class="giua">Số tiết qui đổi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT DISTINCT b.IDBAO,b.TENBAO, b.NAMXUATBAN, b.TAPCHI, b.CAPBAIBAO, b.DIEM FROM baokhoahoc b, nguoidung_baibao nb WHERE b.ANHIEN=b'1' AND b.CAPBAIBAO = N'$capbaibao';";
                $qsql = mysqli_query($conn,$sql);
                $stt=1; while ($row = mysqli_fetch_assoc($qsql)) { ?>
                <tr>
                    <td class="giua"><?php echo $stt; ?></td>
                    <td><?php echo $row['TENBAO']; ?></td>
                    <td class="giua">
                    <?php $tg = lay_tac_gia_bai_bao($row['IDBAO']);
                        while ($_tg = mysqli_fetch_assoc($tg)) {
                            echo $_tg['HOTEN'];
                        }
                     ?>
                    </td>
                    <td class="giua"></td>
                    <td class="giua"><?php $diem = $row['DIEM'];echo $diem; ?></td>
                    <td class="giua">
                        <?php foreach ($stqd as $val){
                            if($val[1] <= $diem && $val[2] >= $diem){echo $val[3]*$val[4];break;}
                        } ?>
                    </td>
                </tr>
                <?php $stt++; } ?>
            </tbody>
        </table>
        <br>
        <?php } ?>
    </div>
</div>
<?php mysqli_close($conn); exit(); ?>