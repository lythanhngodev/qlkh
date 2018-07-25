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
function lay_don_vi($idb){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $q_dv = "SELECT DISTINCT k.TENTAT FROM nguoidung_baibao nb, nguoidung_khoabomon nk, khoabomon k
WHERE nb.IDBAO = '$idb' AND nb.IDND = nk.IDND AND nk.IDKBM = k.IDKBM;";
    $e_dv = mysqli_query($conn,$q_dv);
    $r_dv=null;
    while ($row=mysqli_fetch_assoc($e_dv)) {
        $r_dv[] = $row['TENTAT'];
    }
    return $r_dv;
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
<style type="text/css">
    hr{
        margin: 4px !important;
    }
</style>
<div class="card line-chart-example">
    <div class="card-header">
        <h4>Thống kê tất cả các bài báo khoa học</h4>
        <hr>
        <form action="export/_export_tat_ca_bai_bao_khoa_hoc.php" method="post" target="_blank">
            <input type="text" name="alldtnt" hidden="hidden" value="<?php echo $_POST['_token']; ?>">
            <button type="submit" class="btn btn-warning"><i class='far fa-file-excel'></i>&ensp;Xuất excel</button>
        </form>
    </div>
    <div class="card-body">
        <?php $stt_cap=1; while ($cap = mysqli_fetch_assoc($qcapsql)) { ?>
        <h4><?php echo $ketnoi->ConverToRoman($stt_cap); ?>. Cấp: <?php $capbaibao=$cap['CAPBAIBAO']; echo $capbaibao; ?></h4>
        <table id="bang-bieu-mau" class="table table-bordered table-hover table-responsive" style="height: 700px;">
            <thead>
                <tr style="background:#e9ecef;">
                    <th class="giua">TT</th>
                    <th class="giua">Tên bài báo</th>
                    <th class="giua" style="width: 200px;">Tác giả</th>
                    <th class="giua">Đơn vị</th>
                    <th class="giua">Số tiết qui đổi</th>
                    <th class="giua">Ghi chú</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT DISTINCT b.IDBAO,b.TENBAO, b.NAMXUATBAN, b.TAPCHI, b.CAPBAIBAO, b.DIEM, b.SOTIET FROM baokhoahoc b, nguoidung_baibao nb WHERE b.ANHIEN=b'1' AND b.CAPBAIBAO = N'$capbaibao';";
                $qsql = mysqli_query($conn,$sql);
                $stt=1; while ($row = mysqli_fetch_assoc($qsql)) { ?>
                <tr>
                    <td class="giua"><?php echo $stt; ?></td>
                    <td><?php echo $row['TENBAO']; ?></td>
                    <td class="giua">
                    <?php $r_tg = lay_tac_gia_bai_bao($row['IDBAO']);
                        $tg = null;
                        while ($_tg = mysqli_fetch_assoc($r_tg)){
                            $tg[] = $_tg['HOTEN'];
                        }
                    switch (count($tg)) {
                        case 0:
                            echo "";
                            break;
                        case 1:
                            echo $tg[0];
                            break;
                        default:
                            for ($i=0; $i < count($tg)-1; $i++) { 
                                echo $tg[$i]."<hr>";
                            }
                            echo end($tg);
                            break;
                    }
                     ?>
                    </td>
                    <td class="giua">
                    <?php 
                    $dv = lay_don_vi($row['IDBAO']);
                    switch (count($dv)) {
                        case 0:
                            echo "";
                            break;
                        case 1:
                            echo $dv[0];
                            break;
                        default:
                            for ($i=0; $i < count($dv)-1; $i++) { 
                                echo $dv[$i]."<hr>";
                            }
                            echo end($dv);
                            break;
                    }
                     ?>
                    </td>
                    <td class="giua">
                        <?php echo $row['SOTIET'] ?>
                    </td>
                    <td class="giua"></td>
                </tr>
                <?php $stt++; } ?>
            </tbody>
        </table>
        <br>
        <?php $stt_cap++; } ?>
    </div>
</div>
<?php mysqli_close($conn); exit(); ?>