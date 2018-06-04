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
	function cong_luot_xem($id){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "UPDATE baiviet SET LUOTXEM = LUOTXEM + 1 WHERE IDBV = '$id';";
		$result = mysqli_query($conn, $query);
		return true;
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
	function lay_bai_viet_lien_quan($id){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT * from baiviet WHERE HIENTHI=b'1' AND IDBV!=$id AND IDBV IN (SELECT IDBV FROM baiviet_chuyenmuc WHERE IDCM IN (SELECT IDCM FROm baiviet_chuyenmuc WHERE IDBV=$id)) ORDER BY NGAYDANG DESC LIMIT 0,4";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
 ?>