<?php 
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	if (isset($_GET['id'])) {
		if ($loaitaikhoan=='admin' || $loaitaikhoan == 'khoahoc') {
			$id = $_GET['id'];
			$id = intval($id);
			if ($id!=0) {
				include_once 'model/m_sua_bai_viet.php';
				$bv = lay_bai_viet($id);
				$baiviet = mysqli_fetch_assoc($bv);
				$cm = lay_chuyen_muc();
				include_once 'view/v_sua_bai_viet.php';
			}else{
				include_once 'view/v_khong_bai_bao.php';
				exit();
			}
		} else {
			include_once 'view/v_khong_bai_bao.php';
			exit();
		}
	}
	else{
		include_once 'view/v_khong_bai_bao.php';
		exit();
	}
 ?>