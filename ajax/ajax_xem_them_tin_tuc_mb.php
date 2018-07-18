<?php include_once "../config.php";
	function lay_tin_them($id,$bd,$sotin){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT bv.IDBV, bv.TENBV, bv.LINKBV, bv.HINHANH from baiviet bv, chuyenmuc cm, baiviet_chuyenmuc bc WHERE bc.IDBV = bv.IDBV AND bc.IDCM = cm.IDCM AND cm.LOAICHUYENMUC=N'tintuc' AND bv.HIENTHI=b'1' AND bc.IDCM='$id' ORDER BY bv.IDBV DESC LIMIT $bd, $sotin";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
 ?>
<?php $nghiemthu = lay_tin_them(intval($_POST['cm']),(intval($_POST['tin'])-1)*6,6);;
while ($row = mysqli_fetch_assoc($nghiemthu)) {
 ?>
<a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
    <div class="tincon content animated fadeIn">
        <div class="hinhtin" style="background-image: url('_thumbs/<?php echo $row['HINHANH']; ?>');"></div>
        <div class="tomtattin"><?php echo $row['TENBV'] ?></div>
    </div>  
</a>
 <?php } ?>