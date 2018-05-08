<?php
//Các Mimes quản lý định dạng file
sleep(2);
if (isset($_FILES['fileupload'])) {
	$fileName = $_FILES['fileupload']['name'];
	$fileType = $_FILES['fileupload']['type'];
	$fileError = $_FILES['fileupload']['error'];
	$fileStatus = array(
		'status' => 0,
		'message' => ''	
	);
	if ($fileError== 1) { //Lỗi vượt dung lượng
		$fileStatus['message'] = 'Dung lượng quá giới hạn cho phép';
	}else { //Không có lỗi nào
		move_uploaded_file($_FILES['fileupload']['tmp_name'], '../../files/'.$fileName);
		$fileStatus['status'] = 1;
		$fileStatus['message'] = "Bạn đã upload $fileName thành công";
	}
	echo json_encode($fileStatus);
	exit();
}