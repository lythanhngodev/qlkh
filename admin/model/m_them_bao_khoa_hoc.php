<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function lay_ten_quoc_gia(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT ten FROM quocgia ORDER BY ten ASC";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_ten_tac_gia(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "
			SELECT nd.`IDND`, CONCAT(nd.HO,' ',nd.TEN) as HOTEN, kbm.TENTAT 
			FROM `nguoidung` nd 
				LEFT OUTER JOIN `nguoidung_khoabomon` nk ON (nd.IDND = nk.IDND) 
				LEFT OUTER JOIN khoabomon kbm ON (nk.IDKBM=kbm.IDKBM) WHERE nd.TRANGTHAI = N'binhthuong'
		";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_cap_bai_bao(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT * FROM `capbaibao`";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
 ?>