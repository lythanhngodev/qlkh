<?php 
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	if (isset($_GET['id'])) {
		if ($loaitaikhoan=='admin') {
			$id = $_GET['id'];
			$id = intval($id);
			if ($id!=0) {
				include_once 'model/m_sua_bai_bao.php';
				$baibao = lay_bai_bao($id);
				$rbaibao = mysqli_fetch_assoc($baibao);
				$tacgia = lay_ten_tac_gia();
				$quocgia = lay_ten_quoc_gia();
				$tacgiabaiviet = lay_ten_tac_gia_bai_viet($id);
				$cbb = lay_cap_bai_bao();
				include_once 'view/v_sua_bai_bao.php';
			}
			else{
				include_once 'view/v_khong_bai_bao.php';
			}
		} else {
			$id = $_GET['id'];
			$id = intval($id);
			if ($id!=0) {
				include_once 'model/m_sua_bai_bao.php';
				$baibao = nv_lay_bai_bao($id,$idnd);
				$rbaibao = mysqli_fetch_assoc($baibao);
				if(empty($rbaibao)){
					include_once 'view/v_khong_bai_bao.php';
					exit();
				}
				$tacgia = lay_ten_tac_gia();
				$quocgia = lay_ten_quoc_gia();
				$tacgiabaiviet = lay_ten_tac_gia_bai_viet($id);
				$cbb = lay_cap_bai_bao();
				include_once 'view/v_sua_bai_bao.php';
			}
			else include_once 'view/v_khong_bai_bao.php';
		}
	}
 ?>