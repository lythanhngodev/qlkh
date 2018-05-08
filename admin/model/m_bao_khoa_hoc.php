<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function lay_bao_khoa_hoc(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT IDBAO, TENBAO, NGAYDANGBAI, FILE, ANHIEN, DIEM, SOTIET FROM baokhoahoc bkh";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function nv_lay_bao_khoa_hoc($idnd){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT bkh.IDBAO, TENBAO, NGAYDANGBAI, FILE, ANHIEN, DIEM, SOTIET FROM baokhoahoc bkh, nguoidung_baibao nb WHERE nb.IDBAO = bkh.IDBAO AND nb.IDND = '$idnd'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_tac_gia($id){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT CONCAT(n.HO,' ',n.TEN) as HOTEN FROM baokhoahoc b, nguoidung n, nguoidung_baibao nb WHERE b.IDBAO = nb.IDBAO AND n.IDND = nb.IDND AND b.IDBAO = '$id'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
 ?>