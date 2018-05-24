<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function lay_dang_thuc_hien(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT dt.TENDETAI, dt.IDDT, dx.NGAYDEXUAT FROM detai dt, dexuatdetai dx WHERE dt.IDDT = dx.IDDT AND TRANGTHAI = N'Đang thực hiện'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_dang_thuc_hien_truongkhoaphong($idnd){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT dt.TENDETAI, dt.IDDT, dx.NGAYDEXUAT FROM detai dt, dexuatdetai dx, thanhviendetai tv WHERE dt.IDDT = dx.IDDT AND dx.IDDT = tv.IDDT AND tv.TRACHNHIEM=N'Chủ nhiệm' AND tv.IDND IN (SELECT tv.IDND FROM thanhviendetai tv, nguoidung_khoabomon nk WHERE tv.IDND = nk.IDND AND nk.IDKBM = (SELECT nk.IDKBM FROM thanhviendetai tv, nguoidung_khoabomon nk WHERE tv.IDND=nk.IDND AND tv.IDND='$idnd' GROUP BY  nk.IDKBM) GROUP BY tv.IDND) AND TRANGTHAI = N'Đang thực hiện'";
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