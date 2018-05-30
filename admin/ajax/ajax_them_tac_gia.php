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
	function themtacgia($t, $ns, $mt, $dc){
		if (empty($t)) {
			echo "<script type=\"text/javascript\">khongthanhcong(\"Chưa nhập tên tác giả\")</script>";
			exit();
		}
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi="INSERT INTO `tgbaokhoahoc`(`TENTG`, `NGAYSINH`, `MOTA`, `DIACHI`) VALUES ('$t','$ns','$mt','$dc')";
		if (empty($ns)||$ns=='') {
		$hoi = "INSERT INTO `tgbaokhoahoc`(`TENTG`, `NGAYSINH`, `MOTA`, `DIACHI`) VALUES ('$t',null,'$mt','$dc')";
		}
		if(mysqli_query($conn, $hoi)===TRUE)
			return true;
		else
			return false;
	}
	// kiểm tra có tồn tại đối số truyền vào hay không
	if (!isset($_POST['t']) || !isset($_POST['ns']) || !isset($_POST['mt']) || !isset($_POST['dc'])) {
		echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
		exit();
	}
	if (themtacgia($_POST['t'],$_POST['ns'],$_POST['mt'],$_POST['dc'])) { 
		$ketnoi = new clsKetnoi();
		$idtg = $ketnoi->lay1giatri("SELECT IDTG FROM tgbaokhoahoc ORDER BY IDTG DESC LIMIT 0,1");
		?>
		<script type="text/javascript">
			thanhcong("Đã thêm tác giả!");
			dongmodal('modal-Them-tac-gia');
			themtg('<?php echo $idtg; ?>','<?php echo $_POST['t'].' '.$_POST['ns']; ?>');
		</script>
		<?php
		exit();
	}
	else{
		echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Lỗi!</strong> Không thể thêm tác giả\")</script>";
		exit();
	}
 ?>