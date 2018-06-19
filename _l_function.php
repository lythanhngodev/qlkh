<?php 
	function trangchu($str){
		echo "<script type='text/javascript'>location.href = '".$str."'</script>";
	}
	function to_slug($str) {
	    $str = trim(mb_strtolower($str));
	    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
	    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
	    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
	    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
	    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
	    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
	    $str = preg_replace('/(đ)/', 'd', $str);
	    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
	    $str = preg_replace('/([\s]+)/', '-', $str);
	    $str = str_replace(' ', '', $str);
	    return $str;
	}
	function thoigiandangbai($tg){
		if (empty($tg) || $tg=='null') {
			return "Đang cập nhật";
		}
		$ngaydang = date_create($tg);
		$ngayhientai = date_create(date('Y-m-d'));
		$diff=date_diff($ngaydang,$ngayhientai);
		$songay=$diff->format("%a");
		switch ($songay) {
			case 0:
				return "Hôm nay";
				break;
			case 1:
				return "Hôm qua";
				break;
			case 2:
				return "Hôm kia";
				break;
			case 3:
				return "3 ngày trước";
				break;
			default:
				return date('d-m-Y', strtotime($tg));
				break;
		}
	}
 ?>