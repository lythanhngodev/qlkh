<?php 
    if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function lay_nghiem_thu_da_nhap(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT dx.IDDT, dt.MADETAI, dt.THANGNAMKT, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `NGAYTHEM`, `TRANGTHAI`, THOIGIANNGHIEMTHU FROM dexuatdetai dx, detai dt, thanhviendetai tv WHERE dx.IDDT = dt.IDDT AND tv.IDDT = dx.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND dt.TRANGTHAI=N'Đã nghiệm thu' AND dt.DUYET=b'0'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
    function lay_ten_chu_nhiem_de_tai($iddt){
        $ketnoi = new clsKetnoi();
        $conn = $ketnoi->ketnoi();
        $query = "SELECT CONCAT(nd.HO,' ',nd.TEN) as HOTEN FROM thanhviendetai tv, nguoidung nd WHERE tv.IDND = nd.IDND AND tv.IDDT = '$iddt' AND tv.TRACHNHIEM=N'Chủ nhiệm'";
        $result = mysqli_query($conn, $query);
        $fetch = mysqli_fetch_assoc($result);
        $hotenchunhiem = $fetch['HOTEN'];
        mysqli_close($conn);
        return $hotenchunhiem;
    }
 ?>