<?php include_once "../config.php";
	function lay_de_tai_da_cong_bo($bd, $sotin){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT dt.IDDT, dt.TENDETAI, dt.THOIGIANNGHIEMTHU, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN FROM detai dt, dexuatdetai dx, nguoidung nd, thanhviendetai tv WHERE dt.TRANGTHAI = N'Đang thực hiện' AND dt.DUYET = b'1' AND dx.IDDT = dt.IDDT AND tv.IDDT = dt.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND tv.IDND = nd.IDND ORDER BY dt.THOIGIANNGHIEMTHU LIMIT $bd,$sotin;";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function linh_vuc_de_tai($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT DISTINCT TENLV FROM `linhvuckhoahoc` WHERE IDDT = '$iddt'";
	    $result = mysqli_query($conn, $query);
	    mysqli_close($conn);
	    return $result;
	}
 ?>
<?php $nghiemthu = lay_de_tai_da_cong_bo((intval($_POST['tin'])-1)*8,8);;
while ($row = mysqli_fetch_assoc($nghiemthu)) {
 ?>
 <div class="noidungtin">
    <a class="tieu-de-tin" href="xemdetai/<?php echo to_slug($row['TENDETAI']); ?>-<?php echo $row['IDDT'] ?>.ltn" title="<?php echo $row['TENDETAI'] ?>"><?php echo $row['TENDETAI'] ?></a>
    <div class="thongtinchung">
        <ul>
           <li>Thành viên : <?php echo $row['HOTEN'] ?></li> 
           <li>Thời gian nghiệm thu: <?php echo date("d-m-Y", strtotime($row['THOIGIANNGHIEMTHU'])); ?></li>
           <li>Lĩnh vực nghiên cứu: <?php $lv = linh_vuc_de_tai($row['IDDT']);
           while ($rlv = mysqli_fetch_assoc($lv)) {
               echo $rlv['TENLV'].", ";
           }
            ?></li>  
        </ul>
    </div>
</div>
 <?php } ?>