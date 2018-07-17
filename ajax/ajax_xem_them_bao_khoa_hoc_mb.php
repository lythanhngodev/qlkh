<?php include_once "../config.php";
function lay_bao_khoa_hoc($bd, $sotin){
  $ketnoi = new clsKetnoi();
  $conn = $ketnoi->ketnoi();
  $query = "SELECT DISTINCT b.IDBAO, b.TENBAO, b.TAPCHI, b.NAMXUATBAN FROM baokhoahoc b WHERE ANHIEN = b'1' ORDER BY IDBAO LIMIT $bd,$sotin;";
  $result = mysqli_query($conn, $query);
  mysqli_close($conn);
  return $result;
}
function lay_ten_tac_gia_bao_khoa_hoc($idbao){
  $ketnoi = new clsKetnoi();
  $conn = $ketnoi->ketnoi();
  $query = "SELECT CONCAT(nd.HO,' ',nd.TEN) as HOTEN FROM nguoidung_baibao nb, nguoidung nd WHERE nb.IDND = nd.IDND AND nb.IDBAO = '$idbao';";
  $result = mysqli_query($conn, $query);
  $tg="";
  while ($row=mysqli_fetch_assoc($result)) {
    $tg.= $row['HOTEN'].", ";
  }
  mysqli_close($conn);
  return $tg;
}
 ?>
<?php $baibao = lay_bao_khoa_hoc(intval(($_POST['tin'])-1)*6,6);
while ($row = mysqli_fetch_assoc($baibao)) {
 ?>
 <div class="noidungtin animated fadeIn">
    <a class="tieu-de-tin" href="xembaibao/<?php echo to_slug($row['TENBAO']) ?>-<?php echo $row['IDBAO'] ?>.ltn" title="<?php echo $row['TENBAO'] ?>"><?php echo $row['TENBAO'] ?></a>
    <div class="thongtinchung">
      <ul>
         <li>Tác giả : <?php echo lay_ten_tac_gia_bao_khoa_hoc($row['IDBAO']); ?></li> 
         <li>Nhà xuất bản/ Tạp chí: <?php echo $row['TAPCHI'] ?></li> 
         <li>Năm: <?php echo $row['NAMXUATBAN'] ?></li> 
      </ul>
    </div>
</div>
 <?php } ?>