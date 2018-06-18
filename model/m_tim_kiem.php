<?php 
	include_once("config.php");
	function lay_tin_moi(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT * from baiviet WHERE HIENTHI=b'1' ORDER BY IDBV DESC LIMIT 0,5;";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function tim_de_tai_da_cong_bo($chuoi){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT dt.IDDT, dt.TENDETAI, dt.THOIGIANNGHIEMTHU, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN FROM detai dt, dexuatdetai dx, nguoidung nd, thanhviendetai tv WHERE dt.TRANGTHAI = N'Đã nghiệm thu' AND dt.DUYET = b'1' AND dx.IDDT = dt.IDDT AND tv.IDDT = dt.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND tv.IDND = nd.IDND AND dt.TENDETAI like '%$chuoi%' ORDER BY dt.THOIGIANNGHIEMTHU";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function tim_de_tai_de_xuat($chuoi){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT dt.IDDT, dt.TENDETAI, dt.THOIGIANNGHIEMTHU, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN FROM detai dt, dexuatdetai dx, nguoidung nd, thanhviendetai tv WHERE dt.TRANGTHAI = N'Đang thực hiện' AND dt.DUYET = b'1' AND dx.IDDT = dt.IDDT AND tv.IDDT = dt.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND tv.IDND = nd.IDND AND dt.TENDETAI like '%$chuoi%' ORDER BY dt.THOIGIANNGHIEMTHU";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function tim_bao_khoa_hoc($chuoi){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function dem_de_tai_da_cong_bo(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT dt.IDDT, dt.TENDETAI, dt.THOIGIANNGHIEMTHU, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN FROM detai dt, dexuatdetai dx, nguoidung nd, thanhviendetai tv WHERE dt.TRANGTHAI = N'Đã nghiệm thu' AND dt.DUYET = b'1' AND dx.IDDT = dt.IDDT AND tv.IDDT = dt.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND tv.IDND = nd.IDND ORDER BY dt.THOIGIANNGHIEMTHU;";
		$result = mysqli_query($conn, $query);
		$row = mysqli_num_rows($result);
		mysqli_close($conn);
		return $row;
	}
	function lay_de_tai_da_cong_bo($bd, $sotin){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT dt.IDDT, dt.TENDETAI, dt.THOIGIANNGHIEMTHU, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN FROM detai dt, dexuatdetai dx, nguoidung nd, thanhviendetai tv WHERE dt.TRANGTHAI = N'Đã nghiệm thu' AND dt.DUYET = b'1' AND dx.IDDT = dt.IDDT AND tv.IDDT = dt.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND tv.IDND = nd.IDND ORDER BY dt.THOIGIANNGHIEMTHU LIMIT $bd,$sotin;";
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
	function lay_tu_khoa(){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT tk.IDKHOA, tk.TENKHOA FROM tukhoa tk WHERE tk.IDKHOA IN (SELECT DISTINCT t.IDKHOA FROM (SELECT IDKHOA FROM baiviet_tukhoa b UNION ALL SELECT IDKHOA FROM baibao_tukhoa) as t GROUP BY t.IDKHOA ORDER BY COUNT(t.IDKHOA) DESC) LIMIT 0,20";
	    $result = mysqli_query($conn, $query);
	    mysqli_close($conn);
	    return $result;
	}
	function lay_hoat_dong_hop_tac_quoc_te(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT bv.IDBV, bv.TENBV, bv.LINKBV, bv.HINHANH from baiviet bv, baiviet_chuyenmuc bc, chuyenmuc cm WHERE bv.IDBV = bc.IDBV AND bc.IDCM = cm.IDCM AND cm.LOAICHUYENMUC = N'hoptacquocte' AND HIENTHI=b'1' ORDER BY IDBV DESC LIMIT 0,5;";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
 ?>