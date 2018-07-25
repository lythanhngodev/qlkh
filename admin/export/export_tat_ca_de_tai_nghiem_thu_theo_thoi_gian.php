<?php
include_once("../../config.php");
session_start();
$ketnoi = new clsKetnoi();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
        exit();
    }
}
if (!isset($_POST['_token']) || !isset($_SESSION['token']) || (isset($_SESSION['token']) && $_SESSION['token'] != $_POST['_token']) || !isset($_POST['bd']) || !isset($_POST['kt'])) {
    echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
}
$conn = $ketnoi->ketnoi();
$bd = mysqli_real_escape_string($conn,$_POST['bd']);
$kt = mysqli_real_escape_string($conn,$_POST['kt']);
$capsql = "SELECT DISTINCT dt.CAPDETAI FROM detai dt, nguoidung nd, thanhviendetai tv WHERE dt.TRANGTHAI=N'Đã nghiệm thu' AND dt.IDDT=tv.IDDT AND  (DATE_FORMAT(dt.THOIGIANNGHIEMTHU,'%Y-%m') BETWEEN (DATE_FORMAT(CONCAT('$bd','-01'),'%Y-%m')) AND (DATE_FORMAT(CONCAT('$kt','-01'),'%Y-%m')));";
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
        <h4>Thống kê đề tài đã nghiệm thu từ <?php echo date("m-Y", strtotime($bd))." đến ".date("m-Y", strtotime($kt)); ?></h4>
        <hr>
        <form action="export/_export_tat_ca_de_tai_nghiem_thu_theo_thoi_gian.php" method="post" target="_blank">
            <input type="text" name="alldtnt" hidden="hidden" value="<?php echo $_POST['_token']; ?>">
            <input type="text" name="bd" hidden="hidden" value="<?php echo $bd ?>">
            <input type="text" name="kt" hidden="hidden" value="<?php echo $kt ?>">
            <button type="submit" class="btn btn-warning"><i class='far fa-file-excel'></i>&ensp;Xuất excel</button>
        </form>
        <br>
        <form action="export/word_tat_ca_de_tai_nghiem_thu_theo_thoi_gian.php" target="_blank" method="post">
            <input type="text" name="alldtnt" hidden="hidden" value="<?php echo $_POST['_token']; ?>">
            <input type="text" name="bd" hidden="hidden" value="<?php echo $bd ?>">
            <input type="text" name="kt" hidden="hidden" value="<?php echo $kt ?>">
            <button type="submit" class="btn btn-warning"><i class='far fa-file-word'></i>&ensp;Xuất word</button>
        </form>
    </div>
    <div class="card-body">
        <?php $stt_cap=1; while ($cap = mysqli_fetch_assoc($qcapsql)) { ?>
        <h4><?php echo $ketnoi->ConverToRoman($stt_cap); ?>. Cấp: <?php $capdetai=$cap['CAPDETAI']; echo $capdetai; ?></h4>
        <table id="bang-bieu-mau" class="table table-bordered table-hover" style="height: 700px;">
            <thead>
                <tr style="background:#e9ecef;">
                    <th class="giua">TT</th>
                    <th class="giua">Tên đề tài</th>
                    <th class="giua">Thời gian nghiệm thu</th>
                    <th class="giua">Tên CBVC, Đơn vị</th>
                    <th class="giua">Số điểm</th>
                    <th class="giua">Số tiết qui đổi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT DISTINCT dt.IDDT, dt.TENDETAI, dt.THOIGIANNGHIEMTHU, dt.DIEM FROM detai dt, nguoidung nd, thanhviendetai tv WHERE dt.TRANGTHAI=N'Đã nghiệm thu' AND CAPDETAI = N'$capdetai' AND dt.IDDT=tv.IDDT AND DUYET='1' AND (DATE_FORMAT(dt.THOIGIANNGHIEMTHU,'%Y-%m') BETWEEN (DATE_FORMAT(CONCAT('$bd','-01'),'%Y-%m')) AND (DATE_FORMAT(CONCAT('$kt','-01'),'%Y-%m')))";
                $qsql = mysqli_query($conn,$sql);
                $stt=1; while ($row = mysqli_fetch_assoc($qsql)) { ?>
                <tr>
                    <td class="giua"><?php echo $stt; ?></td>
                    <td><?php echo $row['TENDETAI'] ?></td>
                    <td class="giua"><?php echo date("d-m-Y", strtotime($row['THOIGIANNGHIEMTHU'])); ?></td>
                    <td class="giua">
                        <?php $iddt = $row['IDDT'];
                        $q_kbm = "SELECT DISTINCT k.TENKBM, k.IDKBM FROM thanhviendetai tv, khoabomon k, nguoidung nd, nguoidung_khoabomon nk WHERE tv.IDND = nd.IDND AND nd.IDND = nk.IDND AND  nk.IDKBM = k.IDKBM AND tv.IDDT = '$iddt';";
                        $e_kbm = mysqli_query($conn, $q_kbm);
                        while ($r_kbm = mysqli_fetch_assoc($e_kbm)) {
                            $q_cbvc = "SELECT DISTINCT CONCAT(nd.HO, ' ', nd.TEN) AS  HOTEN FROM thanhviendetai tv, khoabomon k, nguoidung nd, nguoidung_khoabomon nk WHERE tv.IDND = nd.IDND AND nd.IDND = nk.IDND AND  nk.IDKBM = k.IDKBM AND tv.IDDT = '$iddt' AND k.IDKBM = '".$r_kbm['IDKBM']."';";
                            $e_cbvc = mysqli_query($conn, $q_cbvc);
                            while ($r_cbvc = mysqli_fetch_assoc($e_cbvc)) {
                                echo $r_cbvc['HOTEN']."<br>";
                            }
                            echo "<hr>".$r_kbm['TENKBM']."<br>";
                        }
                         ?>
                    </td>
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
        <?php $stt_cap++; } ?>
    </div>
</div>
<?php mysqli_close($conn); exit(); ?>

