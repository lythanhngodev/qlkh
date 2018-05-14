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
	function dem_bao_khoa_hoc(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT b.IDBAO, b.TENBAO, b.TAPCHI, b.NAMXUATBAN FROM baokhoahoc b WHERE ANHIEN = b'1' ORDER BY IDBAO;";
		$result = mysqli_query($conn, $query);
		$row = mysqli_num_rows($result);
		mysqli_close($conn);
		return $row;
	}
	function lay_bao_khoa_hoc($bd, $sotin){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT b.IDBAO, b.TENBAO, b.TAPCHI, b.NAMXUATBAN FROM baokhoahoc b WHERE ANHIEN = b'1' ORDER BY IDBAO LIMIT $bd,$sotin;";
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
	function lay_ten_tac_gia_bao_khoa_hoc($idbao){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT CONCAT(nd.HO,' ',nd.TEN) as HOTEN FROM nguoidung_baibao nb, nguoidung nd WHERE nb.IDND = nd.IDND AND nb.IDBAO = '$idbao';";
		$result = mysqli_query($conn, $query);
		$tg="";
		while ($row=mysqli_fetch_assoc($result)) {
			$tg.= $row['HOTEN'].", ";
		}
		mysqli_close($conn);
		return $tg;
	}
 ?>