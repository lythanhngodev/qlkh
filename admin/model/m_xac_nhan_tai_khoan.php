<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function tai_khoan_xac_nhan(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT IDND, CONCAT(HO, ' ', TEN) as HOTEN, TENDANGNHAP, MAIL FROM nguoidung WHERE XACNHAN = b'0'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
 ?>