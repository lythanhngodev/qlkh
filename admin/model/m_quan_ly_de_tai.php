<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function lay_de_tai($idnd){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT dt.IDDT, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `NGAYTHEM`, `TRANGTHAI` FROM detai dt, detai_nguoidung dn WHERE dn.IDDT = dt.IDDT AND dn.IDND = '$idnd'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
function linh_vuc_de_tai($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT TENLV FROM `linhvuckhoahoc` WHERE IDDT = '$iddt' ORDER BY IDLV ASC";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
 ?>