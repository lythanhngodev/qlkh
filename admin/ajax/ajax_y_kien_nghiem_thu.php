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
	function themtacgia($dt,$nd,$yk){
		if (empty($yk)) {
			echo "<script type=\"text/javascript\">khongthanhcong(\"Chưa nhập ý kiến\")</script>";
			exit();
		}
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi="UPDATE xetduyetnghiemthu SET NHIEMVU = '$yk' WHERE IDND='$nd' and IDDT = '$dt'";
		if(mysqli_query($conn, $hoi)===TRUE){
			$dem = mysqli_affected_rows($conn);
			if($dem>0) return true;else return false;
		}
		else
			return false;
	}
	if (themtacgia($_POST['dt'],$_POST['nd'],$_POST['yk'])) { ?>
		<script type="text/javascript">
			thanhcong("Đã lưu ý kiến!");
		</script>
		<?php
		exit();
	}
	else{
		echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Có lỗi!</strong> Vui lòng thử lại\")</script>";
		exit();
	}
 ?>