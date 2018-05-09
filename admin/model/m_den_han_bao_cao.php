<?php 
    if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function lay_den_han_bao_cao_admin(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT dx.IDDT, dt.THANGNAMKT, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `NGAYTHEM`, `TRANGTHAI` FROM dexuatdetai dx, detai dt, detai_nguoidung dn WHERE dx.IDDT = dt.IDDT AND dn.IDDT = dx.IDDT AND DATE_FORMAT(CONCAT(dt.THANGNAMKT,'-01'),'%Y-%m') = DATE_FORMAT(CURRENT_DATE(),'%Y-%m') ORDER BY dx.IDDX DESC";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
    function lay_den_han_bao_cao_binhthuong($idnd){
        $ketnoi = new clsKetnoi();
        $conn = $ketnoi->ketnoi();
        $query = "SELECT dx.IDDT, dt.THANGNAMKT, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `NGAYTHEM`, `TRANGTHAI` FROM dexuatdetai dx, detai dt, detai_nguoidung dn WHERE dx.IDDT = dt.IDDT AND dn.IDDT = dx.IDDT AND DATE_FORMAT(CONCAT(dt.THANGNAMKT,'-01'),'%Y-%m') = DATE_FORMAT(CURRENT_DATE(),'%Y-%m') AND dn.IDND = '$idnd' ORDER BY dx.IDDX DESC";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $result;
    }
    function lay_den_han_bao_cao_truongkhoaphong($idnd){
        $ketnoi = new clsKetnoi();
        $conn = $ketnoi->ketnoi();
        $query = "SELECT dx.IDDT, dt.THANGNAMKT, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `NGAYTHEM`, `TRANGTHAI` FROM dexuatdetai dx, detai dt, detai_nguoidung dn, nguoidung_khoabomon nk, (SELECT k.TENKBM FROM nguoidung nd, nguoidung_khoabomon nk, khoabomon k
WHERE nd.IDND = nk.IDND AND nk.IDKBM = k.IDKBM AND nd.IDND = '2') as kbmnd WHERE dx.IDDT = dt.IDDT AND dn.IDDT = dx.IDDT AND DATE_FORMAT(CONCAT(dt.THANGNAMKT,'-01'),'%Y-%m') = DATE_FORMAT(CURRENT_DATE(),'%Y-%m');";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $result;
    }
    function lay_ten_chu_nhiem_de_tai($iddt){
        $ketnoi = new clsKetnoi();
        $conn = $ketnoi->ketnoi();
        $query = "SELECT CONCAT(nd.HO,' ',nd.TEN) as HOTEN FROM detai_nguoidung dt, nguoidung nd WHERE dt.IDND = nd.IDND AND dt.IDDT = '$iddt'";
        $result = mysqli_query($conn, $query);
        $fetch = mysqli_fetch_assoc($result);
        $hotenchunhiem = $fetch['HOTEN'];
        mysqli_close($conn);
        return $hotenchunhiem;
    }
 ?>