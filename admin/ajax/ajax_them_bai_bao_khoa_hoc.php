<?php 
	include_once("../../config.php");
	session_start();
	if (isset($_SESSION['tdn']) && isset($_SESSION['pas']) && isset($_SESSION['_loaitaikhoan']) && ($_SESSION['_loaitaikhoan']=='admin' || $_SESSION['_loaitaikhoan']=='khoahoc') && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
		$ketnoi = new clsKetnoi();
		if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
			trangchu($qlkh['HOSTADMIN']);
			exit();
		}
	}else{
	    trangchu($qlkh['HOSTADMIN']);
	}
	function themtacgia($tbb,$tg, $qg, $tc, $namxb, $nd, $bib, $tk,$file,$cap,$diem,$sotiet){
		if (empty($tbb)) {
			echo "<script type=\"text/javascript\">khongthanhcong(\"Chưa nhập tên bài báo\")</script>";
			exit();
		}
		if (empty($tg)) {
			echo "<script type=\"text/javascript\">khongthanhcong(\"Chưa chọn tác giả\")</script>";
			exit();
		}
		if (empty($qg)) {
			echo "<script type=\"text/javascript\">khongthanhcong(\"Chưa chọn quốc gia\")</script>";
			exit();
		}
		if (empty($diem)) {
			$diem = 0;
		}
		if (empty($sotiet)) {
			$sotiet = 0;
		}
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		// xử lý từ khóa
		$mang = explode(',', $tk);
		for ($i=0; $i < count($mang); $i++) { 
			if(empty(trim($mang[$i]))){
				continue;
			}
			$tv = "SELECT * FROM `tukhoa` WHERE `tenkhoa` = N'$mang[$i]'";
			$kttv = mysqli_query($conn, $tv);
			$demkq = mysqli_num_rows($kttv);
			if ($demkq==0) {
				$tv1="INSERT INTO `tukhoa` (`tenkhoa`) VALUES ('$mang[$i]')";
				mysqli_query($conn, $tv1);
			}
		}
	    $nd = mysqli_real_escape_string($conn, $nd);
	    $tbb = mysqli_real_escape_string($conn, $tbb);
	    $tc = mysqli_real_escape_string($conn, $tc);
	    $nd = str_replace('&ensp;',' ',$nd);
	    $nd = str_replace('&nbsp;',' ',$nd);
		$idbvbvbv=0;
		$hoi="INSERT INTO `baokhoahoc`(`TENBAO`,`TENQG`,`TAPCHI`, `NAMXUATBAN`, `NOIDUNG`, `BIB`, `NGAYDANGBAI`,`FILE`,`CAPBAIBAO`,`DIEM`, `SOTIET`) VALUES (N'$tbb',N'$qg',N'$tc','$namxb',N'$nd','$bib',CURRENT_DATE(),'$file','$cap','$diem','$sotiet')";

		if(mysqli_query($conn, $hoi)===TRUE){
			$idbvbvbv = mysqli_insert_id($conn);
			for ($i=0; $i < count($mang); $i++) { 
				$tv="SELECT idkhoa FROM `tukhoa` WHERE `tenkhoa`=N'$mang[$i]'";
				$kttv = mysqli_query($conn, $tv);
				$kqkq = mysqli_fetch_array($kttv);
				$idtag = $kqkq[0];
				$tv3 = "INSERT INTO `baibao_tukhoa`(`IDKHOA`, `IDBAO`) VALUES ('$idtag','$idbvbvbv')";
				mysqli_query($conn, $tv3);
			}

			for ($i=0; $i < count($tg); $i++) { 
				$tv4 = "INSERT INTO `nguoidung_baibao`(`IDBAO`, `IDND`,`TGCHINH`,`DONGTG`) VALUES ('$idbvbvbv','".$tg[$i][0]."',b'".$tg[$i][1]."',b'".$tg[$i][2]."');";
				mysqli_query($conn, $tv4);
			}
			mysqli_close($conn);
			return true;
		}
		else
			return false;
	}
	
	if (themtacgia($_POST['tbb'],$_POST['tg'],$_POST['qg'],$_POST['tc'],$_POST['namxb'],$_POST['nd'],$_POST['bib'],$_POST['tk'],$_POST['file'], $_POST['cap'], $_POST['diem'], $_POST['sotiet'])) { 
		?>
		<script type="text/javascript">
			swal('Tốt','Thêm bài báo thành công','success');
			setTimeout(function(){
	        	location.href = "<?php echo $qlkh['HOSTADMIN']; ?>?p=baokhoahoc";
		    }, 2000);
		</script>
		<?php
		exit();
	}
	else{
		echo "<script type=\"text/javascript\">khongthanhcong(\"<strong>Lỗi!</strong> Không thể thêm bài báo mới\")</script>";
		exit();
	}
 ?>