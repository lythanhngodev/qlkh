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
include_once "../excel/PHPExcel.php";
$file = $_FILES['file']['tmp_name'];
$objReader = PHPExcel_IOFactory::createReaderForFile($file);
$listWorkSheets = $objReader->listWorksheetNames($file);
$conglaodong = null; $xongconglaodong = 0;
$nguyenvatlieu = null; $xongnguyenvatlieu = 0;
$suachua = null; $xongsuachua = 0;
$chikhac = null; $xongchikhac = 0;
    $objReader->setLoadSheetsOnly('DKKP');
    $objExcel = $objReader->load($file);
    $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
    $hightsRow = $objExcel->setActiveSheetIndex()->getHighestRow();
    for ($i=13; $i <=$hightsRow; $i++) { 
    	if($sheetData[$i]['A']=='II'){
            $xongconglaodong = $i;
            $xongconglaodong++;
            break;
        }
        $khoanchi = $sheetData[$i]['B'];
        $donvitinh = $sheetData[$i]['C'];
        $soluong = $sheetData[$i]['D'];
        $dongia = $sheetData[$i]['E'];
        $thanhtien = $sheetData[$i]['F'];
        $ghichu = $sheetData[$i]['G'];
        if ($khoanchi=='null' && $donvitinh=='null' && $soluong=='null' && $dongia=='null' && $thanhtien=='null' && $ghichu =='null') {
            continue;
        }
        else{
            $t_ds = [$khoanchi,$donvitinh,$soluong,$dongia,$thanhtien,$ghichu, 'conglaodong'];
            $conglaodong[] = $t_ds;
        }
    }
    for ($i=$xongconglaodong; $i <=$hightsRow; $i++) { 
        if($sheetData[$i]['A']=='III'){
            $xongnguyenvatlieu = $i;
            $xongnguyenvatlieu++;
            break;
        }
        $khoanchi = $sheetData[$i]['B'];
        $donvitinh = $sheetData[$i]['C'];
        $soluong = $sheetData[$i]['D'];
        $dongia = $sheetData[$i]['E'];
        $thanhtien = $sheetData[$i]['F'];
        $ghichu = $sheetData[$i]['G'];
        if ($khoanchi=='null' && $donvitinh=='null' && $soluong=='null' && $dongia=='null' && $thanhtien=='null' && $ghichu =='null') {
            continue;
        }
        else{
            $t_ds = [$khoanchi,$donvitinh,$soluong,$dongia,$thanhtien,$ghichu, 'nguyenvatlieu'];
            $nguyenvatlieu[] = $t_ds;
        }
    }
    for ($i=$xongnguyenvatlieu; $i <=$hightsRow; $i++) { 
        if($sheetData[$i]['A']=='IV'){
            $xongsuachua = $i;
            $xongsuachua++;
            break;
        }
        $khoanchi = $sheetData[$i]['B'];
        $donvitinh = $sheetData[$i]['C'];
        $soluong = $sheetData[$i]['D'];
        $dongia = $sheetData[$i]['E'];
        $thanhtien = $sheetData[$i]['F'];
        $ghichu = $sheetData[$i]['G'];
        if ($khoanchi=='null' && $donvitinh=='null' && $soluong=='null' && $dongia=='null' && $thanhtien=='null' && $ghichu =='null') {
            continue;
        }
        else{
            $t_ds = [$khoanchi,$donvitinh,$soluong,$dongia,$thanhtien,$ghichu, 'suachua'];
            $suachua[] = $t_ds;
        }
    }
    for ($i=$xongsuachua; $i <=$hightsRow; $i++) { 
        if($sheetData[$i]['B']=='Tổng cộng'){
            $xongchikhac = $i;
            $xongchikhac++;
            break;
        }
        $khoanchi = $sheetData[$i]['B'];
        $donvitinh = $sheetData[$i]['C'];
        $soluong = $sheetData[$i]['D'];
        $dongia = $sheetData[$i]['E'];
        $thanhtien = $sheetData[$i]['F'];
        $ghichu = $sheetData[$i]['G'];
        if ($khoanchi=='null' && $donvitinh=='null' && $soluong=='null' && $dongia=='null' && $thanhtien=='null' && $ghichu =='null') {
            continue;
        }
        else{
            $t_ds = [$khoanchi,$donvitinh,$soluong,$dongia,$thanhtien,$ghichu, 'chikhac'];
            $chikhac[] = $t_ds;
        }
    }
?>
<table id="bangkinhphi" class="table table-hover" style="background: #fff;">
    <thead>
        <tr style="background: #0275d8;color:  #fff; text-align: center;">
            <th>STT</th>
            <th>Các khoản chi</th>
            <th>ĐVT</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
            <th>Ghi chú</th>
        </tr>
    </thead>
    <tbody>
        <tr style="background: #e6e6e6;">
            <th class="giua">I</th>
            <th colspan="6">Chi công lao động/ thuê khoán chuyên môn</th>
        </tr>
        <?php for ($i=0; $i < count($conglaodong); $i++) {?>
            <tr>
                <td class="giua"><?php echo ($i+1); ?></td>
                <td><?php echo $conglaodong[$i][0] ?></td>
                <td class="giua"><?php echo $conglaodong[$i][1] ?></td>
                <td class="giua"><?php echo $conglaodong[$i][2] ?></td>
                <td class="giua"><?php echo $conglaodong[$i][3] ?></td>
                <td class="giua"><?php echo $conglaodong[$i][4] ?></td>
                <td><?php echo $conglaodong[$i][5] ?></td>
            </tr>
        <?php } ?>
        <tr style="background: #e6e6e6;">
            <th class="giua">II</th>
            <th colspan="6">Chi mua nguyên vật liệu</th>
        </tr>
        <?php for ($i=0; $i < count($nguyenvatlieu); $i++) {?>
            <tr>
                <td class="giua"><?php echo ($i+1); ?></td>
                <td><?php echo $nguyenvatlieu[$i][0] ?></td>
                <td class="giua"><?php echo $nguyenvatlieu[$i][1] ?></td>
                <td class="giua"><?php echo $nguyenvatlieu[$i][2] ?></td>
                <td class="giua"><?php echo $nguyenvatlieu[$i][3] ?></td>
                <td class="giua"><?php echo $nguyenvatlieu[$i][4] ?></td>
                <td><?php echo $nguyenvatlieu[$i][5] ?></td>
            </tr>
        <?php } ?>
        <tr style="background: #e6e6e6;">
            <th class="giua">III</th>
            <th colspan="6">Chi sữa chữa, mua sắm Tài sản cố định</th>
        </tr>
        <?php for ($i=0; $i < count($suachua); $i++) {?>
            <tr>
                <td class="giua"><?php echo ($i+1); ?></td>
                <td><?php echo $suachua[$i][0] ?></td>
                <td class="giua"><?php echo $suachua[$i][1] ?></td>
                <td class="giua"><?php echo $suachua[$i][2] ?></td>
                <td class="giua"><?php echo $suachua[$i][3] ?></td>
                <td class="giua"><?php echo $suachua[$i][4] ?></td>
                <td><?php echo $suachua[$i][5] ?></td>
            </tr>
        <?php } ?>
        <tr style="background: #e6e6e6;">
            <th class="giua">IV</th>
            <th colspan="6">Chi khác</th>
        </tr>
        <?php for ($i=0; $i < count($chikhac); $i++) {?>
            <tr>
                <td class="giua"><?php echo ($i+1); ?></td>
                <td><?php echo $chikhac[$i][0] ?></td>
                <td class="giua"><?php echo $chikhac[$i][1] ?></td>
                <td class="giua"><?php echo $chikhac[$i][2] ?></td>
                <td class="giua"><?php echo $chikhac[$i][3] ?></td>
                <td class="giua"><?php echo $chikhac[$i][4] ?></td>
                <td><?php echo $chikhac[$i][5] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php $chung = array_merge($conglaodong,$nguyenvatlieu,$suachua,$chikhac) ?>
<script type="text/javascript">
    bkp = <?php echo json_encode($chung); ?>;
</script>