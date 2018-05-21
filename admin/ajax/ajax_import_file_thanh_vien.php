<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
        exit();
    }
}else{
    echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
}
include_once "../excel/PHPExcel.php";
$file = $_FILES['file']['tmp_name'];
$objReader = PHPExcel_IOFactory::createReaderForFile($file);
$listWorkSheets = $objReader->listWorksheetNames($file);
$danhsach = null;
for($i=0;$i<count($listWorkSheets);$i++){
    $objReader->setLoadSheetsOnly($listWorkSheets[$i]);
    $objExcel = $objReader->load($file);
    $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
    $hightsRow = $objExcel->setActiveSheetIndex()->getHighestRow();
    for ($i=4; $i <=$hightsRow; $i++) { 
    	$ho = $sheetData[$i]['B'];
        $ten = $sheetData[$i]['C'];
        $mail = $sheetData[$i]['D'];
        if ($ho=='' || $ten=='' || $mail=='') {
            continue;
        }
        $t_ds = [$ho,$ten,$mail];
        $danhsach[] = $t_ds;
    }
}
?>
<table id="bangthanhvien" class="table table-bordered table-hover">
    <thead>
        <tr style="background:#e9ecef;">
        <th class="giua">TT</th>
        <th class="giua">Họ</th>
        <th class="giua">Tên</th>
        <th class="giua">Mail / Tên đăng nhập</th>
        <th class="giua">Loại tài khoản</th>
    </tr>
    </thead>
    <tbody>
        <?php $stt=1; foreach ($danhsach as $value) {?>
        <?php if($value[1]=="null" && $value[2]=="null") echo "";
        else{ ?>
        <tr>
            <td class="giua"><?php echo $stt; ?></td>
            <td><input type="text" class="form-control" value="<?php if($value[0]=="null") echo ""; else echo $value[0]; ?>"></td>
            <td><input type="text" class="form-control" value="<?php if($value[0]=="null") echo ""; else echo $value[1]; ?>"></td>
            <td><input type="text" class="form-control" value="<?php if($value[1]=="null") echo ""; else echo $value[2]; ?>"></td>
            <td>
                <select class="form-control chonltk" lydata="2">
                    <option value="1">Quản trị viên</option>
                    <option value="2" selected="">Giáo viên</option>
                    <option value="3">Trưởng khoa / phòng</option>
                    <option value="5">Nhóm quản lý khoa học</option>
                </select>
            </td>
        </tr>
        <?php $stt++; } ?>
        <?php } ?>
    </tbody>
</table>
<style type="text/css">
.dataTables_filter {
    display: none; 
}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $('#bangthanhvien').DataTable({
        "scrollY":"300px",
        "scrollCollapse": true,
        "paging": false
        });
    });
</script>