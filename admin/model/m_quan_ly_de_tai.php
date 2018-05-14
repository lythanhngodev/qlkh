<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function lay_de_tai($idnd){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT dt.IDDT, dt.MADETAI,`TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `NGAYTHEM`, `TRANGTHAI` FROM detai dt, thanhviendetai tv WHERE tv.IDND = '$idnd' AND dt.IDDT = tv.IDDT AND tv.TRACHNHIEM=N'Chủ nhiệm'";
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