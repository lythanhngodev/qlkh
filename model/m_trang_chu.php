<?php 
	include_once("config.php");
	function lay_slider(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "Select * from slider where kichhoat=1";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_tin_moi(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT * from baiviet WHERE HIENTHI=b'1' ORDER BY IDBV DESC LIMIT 0,5;";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_de_tai_da_cong_bo(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT dt.IDDT, dt.TENDETAI, dt.THOIGIANNGHIEMTHU, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN FROM detai dt, dexuatdetai dx, nguoidung nd, thanhviendetai tv WHERE dt.TRANGTHAI = N'Đã nghiệm thu' AND dt.DUYET = b'1' AND dx.IDDT = dt.IDDT AND tv.IDDT = dt.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND tv.IDND = nd.IDND ORDER BY dt.THOIGIANNGHIEMTHU LIMIT 0,4;";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_bai_bao_khoa_hoc(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "";
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