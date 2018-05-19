<?php 
    if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function lay_hoi_dong(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT hd.IDND,CONCAT(nd.HO,' ',nd.TEN) as HOTEN,nd.NGAYSINH, hd.NHIEMVU,hd.GHICHU FROM hoidongxetchon hd, nguoidung nd WHERE hd.IDND = nd.IDND";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function thanh_vien_xet_duyet(){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT nd.IDND,CONCAT(nd.HO,' ',nd.TEN) as HOTEN, nd.NGAYSINH FROM nguoidung nd WHERE nd.TRANGTHAI = 'binhthuong'";
	    $result = mysqli_query($conn, $query);
	    mysqli_close($conn);
	    return $result;
	}
 ?>