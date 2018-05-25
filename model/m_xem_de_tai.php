<?php 
	include_once("config.php");
	function lay_chi_tiet_tin($id){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT * from baiviet WHERE HIENTHI=b'1' AND IDBV = '$id';";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function chi_tiet_de_tai($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT MADETAI,DIEM,`TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `MOISANGTAO`, `THUOCCHUONGTRINH`, `SUCANTHIET`, `TINHHINHNGHIENCUU`, `NGHIENCUULIENQUAN`, `PHUONGPHAPKYTHUAT`, `KINHPHINGANSACH`, `KINHPHINGUONKHAC`, `THANGTHUCHIEN`, `THANGNAMBD`, `THANGNAMKT`, `KETQUA`, `FILE`, `NGAYTHEM`, `TRANGTHAI`, THOIGIANNGHIEMTHU, dt.DUYET FROM detai dt, dexuatdetai dx WHERE dt.IDDT = dx.IDDT AND dx.IDDT = '$iddt'";
	    $result = mysqli_query($conn, $query);
	    mysqli_close($conn);
	    return $result;
	}
	function loai_hinh_nghien_cuu($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT DISTINCT TENLH FROM `loaihinhnghiencuu` WHERE IDDT = '$iddt'";
	    $result = mysqli_query($conn, $query);
	    $array = null;
	    while ($row = mysqli_fetch_row($result)) {
	    	$array[] = $row;
	    }
	    mysqli_close($conn);
	    return $array;
	}
	function linh_vuc_khoa_hoc($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT DISTINCT `TENLV` FROM `linhvuckhoahoc` WHERE IDDT = '$iddt'";
	    $result = mysqli_query($conn, $query);
	    $array = null;
	    while ($row = mysqli_fetch_row($result)) {
	    	$array[] = $row;
	    }
	    mysqli_close($conn);
	    return $array;
	}
	function lay_ten_chu_nhiem_de_tai($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT CONCAT(nd.HO,' ',nd.TEN) as HOTEN FROM nguoidung nd, thanhviendetai tv WHERE tv.IDND = nd.IDND AND tv.IDDT = '$iddt' AND tv.TRACHNHIEM=N'Chủ nhiệm'";
	    $result = mysqli_query($conn, $query);
	    $fetch = mysqli_fetch_assoc($result);
	    $hotenchunhiem = $fetch['HOTEN'];
	    mysqli_close($conn);
	    return $hotenchunhiem;
	}
	function lay_tin_moi(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT bv.IDBV, bv.TENBV, bv.LINKBV, bv.HINHANH from baiviet bv, baiviet_chuyenmuc bc, chuyenmuc cm WHERE bv.IDBV = bc.IDBV AND bc.IDCM = cm.IDCM AND cm.LOAICHUYENMUC = N'tintuc' AND HIENTHI=b'1' ORDER BY IDBV DESC LIMIT 0,5;";
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
	function lay_tu_khoa(){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT tk.IDKHOA, tk.TENKHOA FROM tukhoa tk WHERE tk.IDKHOA IN (SELECT DISTINCT t.IDKHOA FROM (SELECT IDKHOA FROM baiviet_tukhoa b UNION ALL SELECT IDKHOA FROM baibao_tukhoa) as t GROUP BY t.IDKHOA ORDER BY COUNT(t.IDKHOA) DESC) LIMIT 0,20";
	    $result = mysqli_query($conn, $query);
	    mysqli_close($conn);
	    return $result;
	}
	function thanh_vien_de_tai($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT tv.IDTV, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN FROM thanhviendetai tv, nguoidung nd WHERE tv.IDND = nd.IDND AND tv.IDDT = '$iddt' AND tv.TRACHNHIEM!=N'Chủ nhiệm' ORDER BY tv.IDTV ASC ;";
	    $result = mysqli_query($conn, $query);
	    $r = null;
	    while ($row = mysqli_fetch_assoc($result)) {
	    	$r[] = $row;
	    }
	    mysqli_close($conn);
	    return $r;
	}
 ?>