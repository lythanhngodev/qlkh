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
	function lay_chuyen_muc(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT * FROM `chuyenmuc`";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_bai_viet($idbv){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT * FROM `baiviet` where idbv = '$idbv'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_bai_viet_chuyen_muc($idbv){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT IDCM FROM `baiviet_chuyenmuc` where idbv = '$idbv'";
		$result = mysqli_query($conn, $query);
		$r = mysqli_fetch_assoc($result);
		$cm = $r['IDCM'];
		mysqli_close($conn);
		return $cm;
	}
	function lay_tu_khoa($idbv){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "SELECT DISTINCT TENKHOA FROM `baiviet_tukhoa` bk, tukhoa k WHERE bk.idbv = '$idbv' AND bk.idkhoa = k.idkhoa";
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