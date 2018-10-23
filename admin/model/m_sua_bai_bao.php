<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("../config.php");
	function lay_ten_quoc_gia(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT ten FROM quocgia ORDER BY ten ASC";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_ten_tac_gia(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "
			SELECT nd.`IDND`, CONCAT(nd.HO,' ',nd.TEN) as HOTEN, kbm.TENTAT 
			FROM `nguoidung` nd 
				LEFT OUTER JOIN `nguoidung_khoabomon` nk ON (nd.IDND = nk.IDND) 
				LEFT OUTER JOIN khoabomon kbm ON (nk.IDKBM=kbm.IDKBM) WHERE nd.TRANGTHAI = N'binhthuong'
		";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	
	function lay_ten_tac_gia_bai_viet($idbv){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "
		SELECT nd.IDND, CONCAT(nd.HO,' ',nd.TEN) as HOTEN, kbm.TENTAT,TGCHINH,DONGTG 
		FROM `nguoidung_baibao` tgbb 
			LEFT JOIN nguoidung nd ON nd.IDND = tgbb.IDND
			LEFT JOIN nguoidung_khoabomon nk ON tgbb.IDND = nk.IDND
			LEFT JOIN khoabomon kbm ON nk.IDKBM = kbm.IDKBM  
		WHERE tgbb.IDBAO = '$idbv'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_bai_bao($id){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT `IDBAO`, `TENBAO`, `CAPBAIBAO`, `TENQG`, `TAPCHI`, `NAMXUATBAN`, `NOIDUNG`, `BIB`, `NGAYDANGBAI`, `FILE`, `ANHIEN`, `DIEM`, `SOTIET` FROM `baokhoahoc` WHERE IDBAO = '$id'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function nv_lay_bai_bao($id,$idnd){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT bkh.`IDBAO`, `TENBAO`, `CAPBAIBAO`, `TENQG`, `TAPCHI`, `NAMXUATBAN`, `NOIDUNG`, `BIB`, `NGAYDANGBAI`, `FILE`, `ANHIEN`, `DIEM`, `SOTIET` FROM `baokhoahoc` bkh, nguoidung_baibao nb WHERE bkh.IDBAO = '$id' AND bkh.IDBAO = nb.IDBAO AND nb.IDND = '$idnd'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_cap_bai_bao(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT * FROM `capbaibao`";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_tu_khoa($idbao){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "SELECT DISTINCT TENKHOA FROM `baibao_tukhoa` bk, tukhoa k WHERE bk.idbao = '$idbao' AND bk.idkhoa = k.idkhoa";
		$baiviet = mysqli_query($conn, $hoi);
		$dem = mysqli_num_rows($baiviet);
		mysqli_close($conn);
		if ($dem>0) {
			$kq="";
			$kqct="";
			while ($row=mysqli_fetch_array($baiviet)) {
				$kq.=$row[0].",";
			}
			for ($i=0; $i < strlen($kq)-1; $i++) { 
				$kqct.=$kq[$i];
			}
			return $kqct;
		}else return "";
	}
 ?>