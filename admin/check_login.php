<?php
	if (isset($_GET['p']) && !empty($_GET['p']) && $_GET['p']=="reset") {
		include_once("reset_pass.php");
		exit();
	}
	session_set_cookie_params (0);
	session_start();
	include_once("../config.php");
	$ketnoi = new clsKetnoi();
	$tdn;$pas;
	if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
		$tdn = $_SESSION['tdn'];
    	$pas = $_SESSION['pas'];
		if(!($ketnoi->checklogin($tdn,$pas))){
			header("Location: ".$qlkh['HOSTADMIN']."login");
		}
	}
	else
		header("Location: ".$qlkh['HOSTADMIN']."login");
	/*if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
	    // last request was more than 30 minutes ago
	    session_unset();     // unset $_SESSION variable for the run-time 
	    session_destroy();   // destroy session data in storage
	}$_SESSION['LAST_ACTIVITY'] = time();*/
	$hoi_user = "SELECT * FROM nguoidung WHERE (BINARY MAIL = '$tdn' OR BINARY TENDANGNHAP = '$tdn') AND (BINARY MATKHAU = '".md5($pas)."')";
	$thucthi_user = mysqli_query($ketnoi->ketnoi(), $hoi_user);
	$row_user = mysqli_fetch_assoc($thucthi_user);
	$idnd = $row_user['IDND'];
	$ho = $row_user['HO'];
	$ten = $row_user['TEN'];
	$hinh = $row_user['HINH'];
	$sodienthoai = $row_user['DIENTHOAIDD'];
	$trinhdo = $row_user['TRINHDOCHUYENMON'];
	// đơn vị công tác (khoa bộ môn)
    $hoi_kbm = "SELECT k.TENKBM FROM `nguoidung_khoabomon` nk, khoabomon k, nguoidung nd WHERE nk.IDND = nd.IDND AND nk.IDKBM = k.IDKBM AND nk.IDND = '$idnd'";
    $thucthi_kbm = mysqli_query($ketnoi->ketnoi(), $hoi_kbm);
    $row_kbm = mysqli_fetch_assoc($thucthi_kbm);
    $donvicongtac = $row_kbm['TENKBM'];
    // Đối tượng (loại) người dùng
    $hoi_ltk = "SELECT DISTINCT l.TENLTK FROM loaitaikhoan l, loaitaikhoan_nguoidung nl WHERE l.IDLTK = nl.IDLTK AND nl.IDND = '$idnd'";
    $thucthi_ltk = mysqli_query($ketnoi->ketnoi(), $hoi_ltk);
    $row_ltk = mysqli_fetch_assoc($thucthi_ltk);
    $loaitaikhoan = $row_ltk['TENLTK'];
    mysqli_close($ketnoi->ketnoi());

	////////////////////////////////////////////////////////////////////////
 ?>