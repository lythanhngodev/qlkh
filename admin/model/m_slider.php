<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once('../config.php');
	function vlu_all_slider(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select * from slider";
		$dulieu = mysqli_query($conn, $hoi);
        mysqli_close($conn);
		return $dulieu;
	}
 ?>