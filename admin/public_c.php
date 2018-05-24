<?php 
	if (isset($_GET["p"]) && !empty($_GET["p"])) {
		switch ($_GET["p"]) {
            case 'slider':
                include_once ("control/c_slider.php");
                break;
			case 'thembaokhoahoc':
				include_once("control/c_them_bao_khoa_hoc.php");
				break;
			case 'baokhoahoc':
				include_once("control/c_bao_khoa_hoc.php");
				break;
			case 'suabaibao':
				include_once("control/c_sua_bai_bao.php");
				break;
            case 'suabaiviet':
                include_once("control/c_sua_bai_viet.php");
                break;
			case 'quanlydetaiduan':
				include_once("control/c_quan_ly_de_tai_du_an.php");
				break;
            case 'danhgiadecuong':
                include_once ("control/c_danh_gia_de_cuong.php");
                break;
            case 'chitietdanhgiadecuong':
                include_once("control/c_chi_tiet_danh_gia_de_cuong.php");
                break;
            case 'xemdexuat':
                include_once("control/c_xem_de_xuat.php");
                break;
            case 'danhgianghiemthu':
                include_once ("control/c_danh_gia_nghiem_thu.php");
                break;
            case 'chitietnghiemthudecuong':
                include_once("control/c_chi_tiet_nghiem_thu_de_cuong.php");
                break;
			case 'quanlydetai':
				include_once("control/c_quan_ly_de_tai.php");
				break;
            case 'themdetaidanghiemthu':
                include_once("control/c_them_de_tai_da_nghiem_thu.php");
                break;
            case 'dexuatmoi':
                include_once("control/c_de_xuat_moi.php");
                break;
            case 'dangthuchien':
                include_once("control/c_dang_thuc_hien.php");
                break;
            case 'denhanbaocao':
                include_once("control/c_den_han_bai_cao.php");
                break;
            case 'tretiendo':
                include_once("control/c_tre_tien_do.php");
                break;
            case 'duyetnghiemthudanhap':
                include_once("control/c_duyet_nghiem_thu_da_nhap.php");
                break;
			case 'themdexuat':
				include_once("control/c_them_de_xuat.php");
				break;
			case 'suadetai':
				include_once("control/c_sua_de_tai.php");
				break;
			case 'bieumau':
				include_once("control/c_bieu_mau.php");
				break;
            case 'thanhvien':
                include_once("control/c_thanh_vien.php");
                break;
            case 'thongtincanhan':
                include_once("control/c_thong_tin_ca_nhan.php");
                break;
            case 'xembieumau':
                include_once("control/c_xem_bieu_mau.php");
                break;
            case 'chuyenmuc':
                include_once("control/c_chuyen_muc.php");
                break;
            case 'tintuc':
                include_once("control/c_tin_tuc.php");
                break;
            case 'themtintuc':
                include_once("control/c_them_tin_tuc.php");
                break;
            case 'quanlychung':
                include_once("control/c_quan_ly_chung.php");
                break;
            case 'xacnhantaikhoan':
                include_once("control/c_xac_nhan_tai_khoan.php");
                break;
            case 'thongke':
                include_once("control/c_thong_ke.php");
                break;
            case 'nhapthanhvien':
                include("control/c_nhap_thanh_vien.php");
                break;
            case 'suathanhvien':
                include("control/c_sua_thanh_vien.php");
                break;
            case 'dieuchinhdetai':
                include("control/c_dieu_chinh_de_tai.php");
                break;
            case 'quanlyhoso':
                include("control/c_quan_ly_ho_so.php");
                break;
		}
	}
	else
		include_once("control/c_trang_chu.php");
 ?>