<?php 
	include_once("config.php");
	function lay_tin($id){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT bv.IDBV, bv.TENBV, bv.LINKBV, bv.HINHANH from baiviet bv, chuyenmuc cm, baiviet_chuyenmuc bc WHERE bc.IDBV = bv.IDBV AND bc.IDCM = cm.IDCM AND cm.LOAICHUYENMUC=N'hoptacquocte' AND bv.HIENTHI=b'1' AND bc.IDCM='$id';";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function ten_chuyen_muc($id){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT TENCM from chuyenmuc WHERE IDCM='$id';";
		$result = mysqli_query($conn, $query);
		$r = mysqli_fetch_assoc($result);
		$ten = $r['TENCM'];
		mysqli_close($conn);
		return $ten;
	}
	function lay_tin_moi(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT * from baiviet WHERE HIENTHI=b'1' ORDER BY IDBV DESC LIMIT 0,5;";
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
 ?>