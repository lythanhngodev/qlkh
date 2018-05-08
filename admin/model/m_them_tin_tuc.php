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
		$query = "SELECT `IDTG`,`TENTG`,`NGAYSINH` FROM `tgbaokhoahoc` ORDER BY `TENTG` ASC";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
 ?>