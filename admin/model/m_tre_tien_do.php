<?php 
    if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function lay_tre_tien_do_admin(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT dx.IDDT, dt.THANGNAMKT, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `NGAYTHEM`, `TRANGTHAI` FROM dexuatdetai dx, detai dt, thanhviendetai tv WHERE dx.IDDT = dt.IDDT AND tv.IDDT = dx.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND dt.TRANGTHAI=N'Đang thực hiện' AND DATE_FORMAT(CONCAT(dt.THANGNAMKT,'-01'),'%Y-%m') < DATE_FORMAT(CURRENT_DATE(),'%Y-%m') ORDER BY dx.IDDX DESC";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
    function lay_tre_tien_do_binhthuong($idnd){
        $ketnoi = new clsKetnoi();
        $conn = $ketnoi->ketnoi();
        $query = "SELECT dx.IDDT, dt.THANGNAMKT, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `NGAYTHEM`, `TRANGTHAI` FROM dexuatdetai dx, detai dt, thanhviendetai tv WHERE dx.IDDT = dt.IDDT AND tv.IDDT = dx.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND dt.TRANGTHAI=N'Đang thực hiện' AND tv.IDND='$idnd' AND DATE_FORMAT(CONCAT(dt.THANGNAMKT,'-01'),'%Y-%m') < DATE_FORMAT(CURRENT_DATE(),'%Y-%m') ORDER BY dx.IDDX DESC";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $result;
    }
    function lay_tre_tien_do_truongkhoaphong($idnd){
        $ketnoi = new clsKetnoi();
        $conn = $ketnoi->ketnoi();
        $query = "SELECT dx.IDDT, dt.THANGNAMKT, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `NGAYTHEM`, `TRANGTHAI` FROM dexuatdetai dx, detai dt, thanhviendetai tv WHERE dx.IDDT = dt.IDDT AND tv.IDDT = dx.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND dt.TRANGTHAI=N'Đang thực hiện' AND tv.IDND IN (SELECT tv.IDND FROM thanhviendetai tv, nguoidung_khoabomon nk WHERE tv.IDND = nk.IDND AND nk.IDKBM = (SELECT nk.IDKBM FROM thanhviendetai tv, nguoidung_khoabomon nk WHERE tv.IDND=nk.IDND AND tv.IDND='$idnd' GROUP BY  nk.IDKBM) GROUP BY tv.IDND) AND DATE_FORMAT(CONCAT(dt.THANGNAMKT,'-01'),'%Y-%m') < DATE_FORMAT(CURRENT_DATE(),'%Y-%m') ORDER BY dx.IDDX DESC;";
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