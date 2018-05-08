-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 08, 2018 lúc 05:07 SA
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nckh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baibao_tukhoa`
--

CREATE TABLE `baibao_tukhoa` (
  `IDBBTK` bigint(20) NOT NULL,
  `IDKHOA` bigint(20) NOT NULL,
  `IDBAO` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `baibao_tukhoa`
--

INSERT INTO `baibao_tukhoa` (`IDBBTK`, `IDKHOA`, `IDBAO`) VALUES
(26, 6, 4),
(29, 4, 1),
(30, 6, 2),
(31, 7, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `IDBV` bigint(20) NOT NULL,
  `TENBV` varchar(300) DEFAULT NULL,
  `HINHANH` text,
  `MOTA` text,
  `NOIDUNG` longtext,
  `LINKBV` text,
  `LUOTXEM` bigint(20) DEFAULT '0',
  `NGAYDANG` date DEFAULT NULL,
  `HIENTHI` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet_chuyenmuc`
--

CREATE TABLE `baiviet_chuyenmuc` (
  `IDBVCM` bigint(20) NOT NULL,
  `IDBV` bigint(20) DEFAULT NULL,
  `IDCM` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet_nguoidung`
--

CREATE TABLE `baiviet_nguoidung` (
  `IDBVND` bigint(20) NOT NULL,
  `IDBV` bigint(20) DEFAULT NULL,
  `IDND` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baocaotiendo`
--

CREATE TABLE `baocaotiendo` (
  `IDTD` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `CVDATH` text,
  `CVCANTH` text,
  `DENGHI` text,
  `NGAYBC` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `baocaotiendo`
--

INSERT INTO `baocaotiendo` (`IDTD`, `IDDT`, `CVDATH`, `CVCANTH`, `DENGHI`, `NGAYBC`) VALUES
(8, 15, 'ky', 'uky', 'uyuk', '2018-05-03'),
(9, 23, 'ky', 'uky', 'uyuk', '2018-05-03'),
(11, 26, 'thr', 'rth', 'rth', '2018-05-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baokhoahoc`
--

CREATE TABLE `baokhoahoc` (
  `IDBAO` bigint(20) NOT NULL,
  `TENBAO` varchar(200) NOT NULL,
  `CAPBAIBAO` text,
  `TENQG` varchar(50) NOT NULL,
  `TAPCHI` varchar(200) DEFAULT NULL,
  `NAMXUATBAN` date DEFAULT NULL,
  `NOIDUNG` text,
  `BIB` text,
  `NGAYDANGBAI` date DEFAULT NULL,
  `FILE` text,
  `DIEM` float DEFAULT NULL,
  `SOTIET` int(11) DEFAULT NULL,
  `ANHIEN` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `baokhoahoc`
--

INSERT INTO `baokhoahoc` (`IDBAO`, `TENBAO`, `CAPBAIBAO`, `TENQG`, `TAPCHI`, `NAMXUATBAN`, `NOIDUNG`, `BIB`, `NGAYDANGBAI`, `FILE`, `DIEM`, `SOTIET`, `ANHIEN`) VALUES
(1, 'Demob', 'Cấp quốc gia', 'Vietnam', 'Tạp chí', '2018-04-29', '<p>noi dungb</p>\n', 'bibb', '2018-04-28', '', 45, 10, b'1'),
(2, 'Demo 2', 'Cấp thế giới', 'Vietnam', '', '2018-04-28', '', '', '2018-04-28', '1524927589-madexuatdetaicapb.doc', 1, 2, b'1'),
(3, 'Demo 3', 'Cấp quốc gia', 'Vietnam', 'ui', '2018-04-29', '<p>uil</p>\n', 'uilui', '2018-04-28', '1524927533-1-phieu-dang-ky-knn---ca-nhan691.docx', 4, 3, b'1'),
(4, 'Demo 4', 'Cấp thế giới', 'Angola', '7o78', '2018-04-27', '', '', '2018-04-28', '', 70.3, 20, b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bieumau`
--

CREATE TABLE `bieumau` (
  `IDBM` bigint(20) NOT NULL,
  `MABM` text,
  `TENBM` text,
  `FILE` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bieumau`
--

INSERT INTO `bieumau` (`IDBM`, `MABM`, `TENBM`, `FILE`) VALUES
(9, 'BM-NC-01-00', 'Phiếu đăng ký đề tài', '1523903649-M01 - PHIEU DANG KY DE TAI.doc'),
(11, 'BM-NC-02-00', 'Đề cương đề tài', '1523904040-M02 - DE CUONG DE TAI.doc'),
(12, 'BM-NC-03-00', 'Phiếu đánh giá đề cương', '1523904138-M03-PHIEU DANH GIA DE CUONG.docx'),
(13, 'BM-NC-04-00', 'Biên bản xét duyệt', '1524107573-M04-BIEN BAN XET DUYET.docx'),
(14, 'BM-NC-05-00', 'Báo cáo tiến độ thực hiện', '1524107718-m05--bao-cao-tien-do-thuc-hien-de-tai.doc'),
(16, 'BM-NC-08-00', 'Phiếu đánh giá nghiệm thu', '1524108145-m08---phieu-danh-gia-nghiem-thu.doc'),
(17, 'BM-NC-09-00', 'Biên bản tổng hợp nghiệm thu', '1524108198-m09--bien-ban-tong-hop-nghiem-thu.doc'),
(18, 'BM-NC-10-00', 'Bảng kê chi tiền cho người tham dự hội nghị', '1524108282-m10--bang-ke-chi-tien-cho-nguoi-tham-du-hoi-nghi.doc'),
(19, 'BM-NC-11-00', 'Phiếu giao nhận sản phẩm NCKH', '1524108321-m11--phieu-giao-nhan-sp-khcn.doc'),
(20, 'BM-NC-12-00', 'Phiếu xác nhận ứng dụng NCKH', '1524108372-m12--phieu-xac-nhan-ung-dung-khcn.doc'),
(21, '', 'Đơn xin gia hạn đề tài', '1524108436-don-xin-gia-han-de-tai.docx'),
(22, '', 'Hợp đồng nghiên cứu', '1524108478-hop-dong-nghien-cuu.doc'),
(23, '', 'Biên bản thanh lý', '1524108509-bien-ban-thanh-ly.doc'),
(24, '', 'Phiếu đề xuất Đề tài KH&CN cấp Tỉnh', '1524108541-maudexuatdetaicaptinh.doc'),
(25, '', 'Phiếu đề xuất Đề tài KH&CN cấp Bộ', '1524108578-madexuatdetaicapb.doc'),
(28, 'BM-NC-06-00', 'Thuyết minh đề tài', '1524110098-m06--thuyet-minh-de-tai.doc'),
(29, 'BM-NC-07-00', 'Phiếu nhận xét đánh giá phản biện', '1524110136-m07--phieu-nhan-xet-danh-gia-phan-bien.doc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caidat`
--

CREATE TABLE `caidat` (
  `mail` text,
  `passmail` text,
  `portmail` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `caidat`
--

INSERT INTO `caidat` (`mail`, `passmail`, `portmail`) VALUES
('vlutelibktv@gmail.com', 'vlutelibktv@2017', 587);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `capbaibao`
--

CREATE TABLE `capbaibao` (
  `IDC` bigint(20) NOT NULL,
  `TENCAP` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `capbaibao`
--

INSERT INTO `capbaibao` (`IDC`, `TENCAP`) VALUES
(1, 'Cấp quốc gia'),
(2, 'Cấp thế giới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `capdetai`
--

CREATE TABLE `capdetai` (
  `IDC` bigint(20) NOT NULL,
  `TENCAP` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `capdetai`
--

INSERT INTO `capdetai` (`IDC`, `TENCAP`) VALUES
(3, 'Cấp trường'),
(4, 'Cấp trường trọng điểm'),
(5, 'Cấp tỉnh'),
(6, 'Cấp bộ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucdanhgiangvien`
--

CREATE TABLE `chucdanhgiangvien` (
  `IDCD` bigint(20) NOT NULL,
  `TENCHUCDANH` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chucdanhgiangvien`
--

INSERT INTO `chucdanhgiangvien` (`IDCD`, `TENCHUCDANH`) VALUES
(1, 'Giảng viên hạng AI'),
(2, 'Giảng viên hạng AII'),
(5, 'Giangr viên hạng III');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucdanhkhoahoc`
--

CREATE TABLE `chucdanhkhoahoc` (
  `IDCD` bigint(20) NOT NULL,
  `TENCHUCDANH` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chucdanhkhoahoc`
--

INSERT INTO `chucdanhkhoahoc` (`IDCD`, `TENCHUCDANH`) VALUES
(1, 'Giáo sư'),
(3, 'Phó giáo sư');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `IDCV` bigint(20) NOT NULL,
  `TENCHUCVU` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`IDCV`, `TENCHUCVU`) VALUES
(2, 'Phó khoa'),
(4, 'Phó phòng'),
(5, 'Trưởng khoa'),
(6, 'Trưởng phòng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenmuc`
--

CREATE TABLE `chuyenmuc` (
  `IDCM` bigint(20) NOT NULL,
  `TENCM` varchar(200) DEFAULT NULL,
  `MOTACM` varchar(200) DEFAULT NULL,
  `LINKCM` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chuyenmuc`
--

INSERT INTO `chuyenmuc` (`IDCM`, `TENCM`, `MOTACM`, `LINKCM`) VALUES
(1, 'Tin tức', 'Trang hiển thị các tin tức', 'tin-tuc'),
(15, 'Sự kiện', 'Trang chuyên sự kiện', 'su-kien-cm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congtacchuyenmon`
--

CREATE TABLE `congtacchuyenmon` (
  `IDCT` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `THOIGIAN` date DEFAULT NULL,
  `NOICONGTAC` text,
  `CONGVIEC` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `congtacchuyenmon`
--

INSERT INTO `congtacchuyenmon` (`IDCT`, `IDND`, `THOIGIAN`, `NOICONGTAC`, `CONGVIEC`) VALUES
(37, 2, '2018-04-18', 'AHIHIHI', 'ƯVEWV'),
(39, 1, '2018-04-12', 'VLUTE', 'Giảng dạy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `daihoc`
--

CREATE TABLE `daihoc` (
  `IDDH` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `HEDAOTAO` varchar(100) DEFAULT NULL,
  `NOIDAOTAO` text,
  `NGANHHOC` varchar(200) DEFAULT NULL,
  `NUOCDAOTAO` varchar(100) DEFAULT NULL,
  `NAMTOTNGHIEP` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `daihoc`
--

INSERT INTO `daihoc` (`IDDH`, `IDND`, `HEDAOTAO`, `NOIDAOTAO`, `NGANHHOC`, `NUOCDAOTAO`, `NAMTOTNGHIEP`) VALUES
(21, 3, 'yh', '54y5y', '45y', '45y5', 1980),
(31, 2, 'uyk', 'uykuy', 'kuk', 'yukukuk', 1960),
(33, 1, 'A', 'B', 'C', 'D', 1996);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detai`
--

CREATE TABLE `detai` (
  `IDDT` bigint(20) NOT NULL,
  `MADETAI` varchar(20) DEFAULT NULL,
  `TENDETAI` varchar(255) DEFAULT NULL,
  `MUCTIEU` text,
  `NOIDUNG` text,
  `CAPDETAI` varchar(100) DEFAULT NULL,
  `MOISANGTAO` text,
  `THUOCCHUONGTRINH` text,
  `SUCANTHIET` text,
  `TINHHINHNGHIENCUU` text,
  `NGHIENCUULIENQUAN` text,
  `PHUONGPHAPKYTHUAT` text,
  `KINHPHINGANSACH` decimal(10,0) DEFAULT NULL,
  `KINHPHINGUONKHAC` decimal(10,0) DEFAULT NULL,
  `THANGTHUCHIEN` int(11) DEFAULT NULL,
  `THANGNAMBD` varchar(20) DEFAULT NULL,
  `THANGNAMKT` varchar(20) DEFAULT NULL,
  `KETQUA` text,
  `FILE` text,
  `NGAYTHEM` datetime DEFAULT CURRENT_TIMESTAMP,
  `TRANGTHAI` varchar(20) DEFAULT 'Chờ gửi đề xuất',
  `DIEM` float NOT NULL DEFAULT '0',
  `THOIGIANNGHIEMTHU` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `detai`
--

INSERT INTO `detai` (`IDDT`, `MADETAI`, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `MOISANGTAO`, `THUOCCHUONGTRINH`, `SUCANTHIET`, `TINHHINHNGHIENCUU`, `NGHIENCUULIENQUAN`, `PHUONGPHAPKYTHUAT`, `KINHPHINGANSACH`, `KINHPHINGUONKHAC`, `THANGTHUCHIEN`, `THANGNAMBD`, `THANGNAMKT`, `KETQUA`, `FILE`, `NGAYTHEM`, `TRANGTHAI`, `DIEM`, `THOIGIANNGHIEMTHU`) VALUES
(1, 'M01', 'Nghiên cứu viết phần mềm quản lý điểm theo quy chế tín chỉ', 'Mục tiêu nghiên cứu viết phần mềm quản lý điểm theo quy chế tín chỉ', 'Nội dung nghiên cứu', 'Cấp trường', 'Phân tích về tính mới, tính sáng tạo của đề tài', 'Thuộc chương trình', 'Phân tích sự cần thiết nghiên cứu', 'Tổng quan tình hình nghiên cứu thuộc lĩnh vực của đề tài', 'Tổng quan tình hình nghiên cứu thuộc lĩnh vực của đề tài', 'Cách tiếp cận, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng', '10000000', '0', 7, '2016-08', '2018-05', 'Phàn mềm quản lý điểm theo cơ chế tính chỉ', '1524805456-DE-KIEM-TRA-LAN-1-CA-1.docx', '2018-04-12 00:00:00', 'Đang thực hiện', 88, NULL),
(2, 'M02', 'Tên đề tài (*)', 'Mục tiêu đề tài (*)', 'Liệt kê và mô tả những nội dung cần nghiên cứu, nêu bật được những nội dung mới và phù hợp để giải quyết vấn đề đặt ra, kể cả những dự kiến hoạt động phối hợp để chuyển giao kết quả nghiên cứu đến người sử dụng. Phải nêu được những nội dung, giải pháp cụ thể cần thực hiện để đạt mục tiêu đề ra. So sánh với các nội dung, giải pháp đã giải quyết của các tác giả trong và ngoài nước để nêu được tính mới, tính độc đáo, tính sáng tạo của đề tài về nội dung nghiên cứu.', 'Cấp trường', 'd) Phân tích về tính mới, tính sáng tạo của đề tài', 'Thuộc chương trình (*)', 'Rút ra kết luận cần thiết để trả lời câu hỏi về nhu cầu và tính bức xúc đối với đề tài nghiên cứu.', 'Ghi những hiểu biết của chủ nhiệm đề tài về lĩnh vực nghiên cứu - nắm được những công trình nghiên cứu đã có liên quan đến đề tài, những kết quả nghiên cứu mới nhất trong lĩnh vực nghiên cứu đề tài, nêu rõ quan điểm của tác giả đối với công trình nghiên cứu này. Ghi rõ đã có tổ chức khoa học công nghệ hoặc doanh nghiệp nào đã tiến hành nghiên cứu đề tài tương tự này chưa, nếu có thì bằng phương pháp, công nghệ nào và kết quả nghiên cứu đã được đánh giá định lượng hoặc định tính như thế nào.', 'Ghi những hiểu biết của chủ nhiệm đề tài về lĩnh vực nghiên cứu - nắm được những công trình nghiên cứu đã có liên quan đến đề tài, những kết quả nghiên cứu mới nhất trong lĩnh vực nghiên cứu đề tài, nêu rõ quan điểm của tác giả đối với công trình nghiên cứu này. Ghi rõ đã có tổ chức khoa học công nghệ hoặc doanh nghiệp nào đã tiến hành nghiên cứu đề tài tương tự này chưa, nếu có thì bằng phương pháp, công nghệ nào và kết quả nghiên cứu đã được đánh giá định lượng hoặc định tính như thế nào.', 'Luận cứ rõ cách tiếp cận - thiết kế nghiên cứu, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng - so sánh với các phương thức giải quyết tương tự khác, nêu được tính mới, tính độc đáo, tính sáng tạo của đề tài.', '123', '1234', 76, '2018-05', '2024-10', 'Dự kiến kết quả đề tài và địa chỉ ứng dụng (*)', '', '2018-04-15 21:52:27', 'Không nghiệm thu', 0, NULL),
(3, 'M03', 'Tên đề tài (*) 4', 'ytkykty', 'rtjrtj', 'Cấp trường', 'rtjrt', 'rtrtj', 'rtjrt', 'rtjrtj', 'rtjrtj', 'rtjrt', '3', '1', 9, '2018-04', '2019-04', 'kyukyuk', '', '2018-04-29 13:59:44', 'Đã nghiệm thu', 75, '2018-05-04'),
(26, 'M04', 'Nhập đề tài', 'rth', 'rth', 'Cấp bộ', 'rth', '54tr', 'rth', 'trh', 'trh', 'rth', '55', '555', 5, '2018-05', '2018-06', 'trht', '', '2018-05-04 00:36:56', 'Đã nghiệm thu', 0, '2018-01-17'),
(29, 'M05', 'ililk', 'iluil', 'hjmhjm', 'Cấp tỉnh', 'hjmhjm', 'jmjhm', 'mjhm', 'jmj', 'jmj', 'jmhj', '55', '556', 2, '2018-05', '2018-06', 'iuui;i;i;ui;', NULL, '2018-05-06 13:56:48', 'Đang thực hiện', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detai_nguoidung`
--

CREATE TABLE `detai_nguoidung` (
  `IDDTND` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `IDND` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `detai_nguoidung`
--

INSERT INTO `detai_nguoidung` (`IDDTND`, `IDDT`, `IDND`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(13, 26, 1),
(14, 27, 2),
(15, 29, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dexuatdetai`
--

CREATE TABLE `dexuatdetai` (
  `IDDX` bigint(20) NOT NULL,
  `IDDT` bigint(20) NOT NULL,
  `NGAYDEXUAT` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dexuatdetai`
--

INSERT INTO `dexuatdetai` (`IDDX`, `IDDT`, `NGAYDEXUAT`) VALUES
(11, 26, '2018-05-04 00:36:56'),
(15, 3, '2018-05-06 15:14:07'),
(23, 29, '2018-05-07 16:05:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocvi`
--

CREATE TABLE `hocvi` (
  `IDHV` bigint(20) NOT NULL,
  `TENHOCVI` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hocvi`
--

INSERT INTO `hocvi` (`IDHV`, `TENHOCVI`) VALUES
(1, 'Tiến sĩ'),
(3, 'Thạc sĩ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoabomon`
--

CREATE TABLE `khoabomon` (
  `IDKBM` int(11) NOT NULL,
  `TENKBM` varchar(200) NOT NULL,
  `TENTIENGANH` varchar(100) NOT NULL,
  `DIACHI` varchar(200) NOT NULL,
  `DIENTHOAI` varchar(20) CHARACTER SET latin1 NOT NULL,
  `MAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoabomon`
--

INSERT INTO `khoabomon` (`IDKBM`, `TENKBM`, `TENTIENGANH`, `DIACHI`, `DIENTHOAI`, `MAIL`) VALUES
(1, 'Khoa công nghệ thông tin', 'FACULTY OF INFORMATION TECHNOLOGY', 'Phòng C601, Cơ sở 1, trường Đại học Sư phạm kỹ thuật Vĩnh Long', '(+84) 0270 3 828320', 'cit@vlute.edu.vn'),
(3, 'Khoa học cơ bản', 'Faculty of General Science', 'Cơ sở 1, trường Đại học Sư phạm kỹ thuật Vĩnh Long', '(+84) 0270 3 862280', ''),
(4, 'Khoa lý luận chính trị', 'FACULTY OF POLITICAL THEORY', 'Cơ sở 1, trường Đại học Sư phạm kỹ thuật Vĩnh Long.', '(+84) 0270 3 862280', ''),
(5, 'Khoa Cơ khí Động lực', 'FACULTY OF AUTOMOTIVE TECHNOLOGY', 'Cơ sở 1, trường Đại học Sư phạm kỹ thuật Vĩnh Long, 73 Nguyễn Huệ P.2, Tp. Vĩnh Long', '(+84) 0270 3 863128', ''),
(6, 'Khoa Cơ khí Chế tạo máy', 'FACULTY OF MECHANICAL ENGINEERING TECHNOLOGY', 'Cơ sở 1, trường Đại học Sư phạm kỹ thuật Vĩnh Long', '(+84) 0270 3 863127', ''),
(7, 'Khoa Điện - Điện tử', 'FACULTY OF ELECTRICAL AND ELECTRONIC ENGINEERING TECHNOLOGY', 'Cơ sở 1, trường Đại học Sư phạm kỹ thuật Vĩnh Long, 73 Nguyễn Huệ P.2 Tp. Vĩnh Long', '(+84) 0270 3 863126', ''),
(8, 'Khoa Sư phạm', 'FACULTY OF PEDAGORY', ' Cơ sở 1, trường Đại học Sư phạm kỹ thuật Vĩnh Long', '(+84) 0270 3 862533', ''),
(9, 'Khoa Công nghệ thực phẩm', 'FACULTY OF FOOD TECHNOLOGY', 'Cơ sở 1, trường Đại học Sư phạm kỹ thuật Vĩnh Long', ' (+84) 0270 3 862280', ''),
(10, 'Bộ môn Giáo dục thể chất và Giáo dục quốc phòng', 'Department of Physical and Defense Education', 'Cơ sở 1, trường Đại học Sư phạm kỹ thuật Vĩnh Long', '(+84) 0270 302 938', ''),
(11, 'Bộ môn ngoại ngữ', 'Department of Foreign Language', 'Cơ sở 1, trường Đại học Sư phạm kỹ thuật Vĩnh Long', '(+84) 0270 328 738', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinhphi`
--

CREATE TABLE `kinhphi` (
  `IDKP` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `KHOANCHI` text,
  `NGUONNSNN` decimal(10,0) DEFAULT NULL,
  `NGUONTUCO` decimal(10,0) DEFAULT NULL,
  `NGUONLIENKET` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kinhphi`
--

INSERT INTO `kinhphi` (`IDKP`, `IDDT`, `KHOANCHI`, `NGUONNSNN`, `NGUONTUCO`, `NGUONLIENKET`) VALUES
(170, 3, 'Chi thuê khoán chuyên môn', '0', '2', '0'),
(171, 3, 'Chi mua nguyên vật liệu', '1', '0', '0'),
(172, 3, 'Chi sửa chữa, mua sắm TSCĐ', '545', '5445', '45'),
(173, 3, 'Phát sinh', '0', '0', '0'),
(174, 26, 'Chi thuê khoán chuyên môn', '0', '0', '0'),
(175, 26, 'Chi mua nguyên vật liệu', '0', '0', '0'),
(176, 26, 'Chi sửa chữa, mua sắm TSCĐ', '0', '0', '0'),
(177, 26, 'h', '1', '1', '1'),
(218, 2, 'Chi thuê khoán chuyên môn', '4', '0', '0'),
(219, 2, 'Chi mua nguyên vật liệu', '0', '2', '0'),
(220, 2, 'Chi sửa chữa, mua sắm TSCĐ', '0', '0', '3'),
(221, 2, 'yyyyyyyy', '2', '1', '1'),
(231, 29, 'Chi thuê khoán chuyên môn', '0', '4', '0'),
(232, 29, 'Chi mua nguyên vật liệu', '0', '3', '0'),
(233, 29, 'Chi sửa chữa, mua sắm TSCĐ', '3', '0', '0'),
(234, 29, 'uyuluylyu', '2', '0', '0'),
(235, 1, 'Chi thuê khoán chuyên môn', '1', '2', '0'),
(236, 1, 'Chi mua nguyên vật liệu', '4', '5', '0'),
(237, 1, 'Chi sửa chữa, mua sắm TSCĐ', '7', '8', '0'),
(238, 1, 'Phát sinh', '14', '13', '14'),
(239, 1, 'Phụ', '15', '16', '17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuc`
--

CREATE TABLE `linhvuc` (
  `IDLV` bigint(20) NOT NULL,
  `TENLINHVUC` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `linhvuc`
--

INSERT INTO `linhvuc` (`IDLV`, `TENLINHVUC`) VALUES
(5, 'Kỹ thuật công nghệ'),
(4, 'Khoa học tự nhiên'),
(6, 'Khoa học giáo dục'),
(7, 'Xã hội nhân văn'),
(8, 'Khoa học Y - Dược'),
(9, 'Nông - Lâm - Ngư nghiệp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuckhoahoc`
--

CREATE TABLE `linhvuckhoahoc` (
  `IDLV` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `TENLV` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `linhvuckhoahoc`
--

INSERT INTO `linhvuckhoahoc` (`IDLV`, `IDDT`, `TENLV`) VALUES
(142, 3, 'Xã hội nhân văn'),
(143, 3, 'Nông - Lâm - Ngư nghiệp'),
(147, 26, 'Khoa học Y - Dược'),
(165, 2, 'Khoa học tự nhiên'),
(166, 2, 'Khoa học giáo dục'),
(171, 29, 'Khoa học giáo dục'),
(172, 1, 'Khoa học tự nhiên'),
(173, 1, 'Khoa học giáo dục'),
(174, 1, 'Nông - Lâm - Ngư nghiệp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihinh`
--

CREATE TABLE `loaihinh` (
  `IDLH` bigint(20) NOT NULL,
  `TENLOAI` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaihinh`
--

INSERT INTO `loaihinh` (`IDLH`, `TENLOAI`) VALUES
(4, 'Nghiên cứu cơ bản'),
(5, 'Nghiên cứu ứng dụng'),
(6, 'Triển khai thực nghiệm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihinhnghiencuu`
--

CREATE TABLE `loaihinhnghiencuu` (
  `IDLH` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `TENLH` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaihinhnghiencuu`
--

INSERT INTO `loaihinhnghiencuu` (`IDLH`, `IDDT`, `TENLH`) VALUES
(105, 3, 'Nghiên cứu ứng dụng'),
(106, 3, 'Triển khai thực nghiệm'),
(109, 26, 'Nghiên cứu ứng dụng'),
(131, 2, 'Nghiên cứu cơ bản'),
(132, 2, 'Nghiên cứu ứng dụng'),
(133, 2, 'Triển khai thực nghiệm'),
(136, 29, 'Triển khai thực nghiệm'),
(137, 1, 'Nghiên cứu ứng dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `IDLTK` bigint(20) NOT NULL,
  `TENLTK` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`IDLTK`, `TENLTK`) VALUES
(1, 'admin'),
(2, 'binhthuong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitaikhoan_nguoidung`
--

CREATE TABLE `loaitaikhoan_nguoidung` (
  `IDLTKND` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDLTK` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoan_nguoidung`
--

INSERT INTO `loaitaikhoan_nguoidung` (`IDLTKND`, `IDND`, `IDLTK`) VALUES
(1, 1, 1),
(6, 12, 2),
(9, 39, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngoaingu`
--

CREATE TABLE `ngoaingu` (
  `IDNN` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `TENNGOAINGU` varchar(100) DEFAULT NULL,
  `MUCDOSUDUNG` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `IDND` bigint(20) NOT NULL,
  `HO` varchar(50) NOT NULL,
  `TEN` varchar(50) NOT NULL,
  `GIOITINH` varchar(4) DEFAULT 'Nam',
  `NGAYSINH` date DEFAULT NULL,
  `NOISINH` text,
  `QUEQUAN` text,
  `DANTOC` varchar(20) DEFAULT NULL,
  `HOCVICAONHAT` text,
  `NAMNUOCHOCVI` varchar(100) DEFAULT NULL,
  `CHUCDANHKHOAHOC` varchar(100) DEFAULT NULL,
  `NAMBONHIEM` text,
  `CHUCVU` varchar(100) DEFAULT NULL,
  `DONVICONGTAC` varchar(200) DEFAULT NULL,
  `CHOORIENG` text,
  `DIENTHOAICQ` varchar(20) DEFAULT NULL,
  `DIENTHOAINR` varchar(20) DEFAULT NULL,
  `DIENTHOAIDD` varchar(20) DEFAULT NULL,
  `FAX` varchar(20) DEFAULT NULL,
  `MAIL` varchar(100) NOT NULL,
  `THACSICHUYENNGANH` text,
  `NAMCAPBANGTSCN` text,
  `NOIDAOTAOTSCN` text,
  `TIENSICHUYENNGANH` text,
  `NAMCAPBANGTSCN2` text,
  `NOIDAOTAOTSCN2` text,
  `TENLUANAN` text,
  `CHUCDANHGIANGVIEN` varchar(100) DEFAULT NULL,
  `TRINHDOCHUYENMON` varchar(100) DEFAULT NULL,
  `TENDANGNHAP` varchar(50) NOT NULL,
  `MATKHAU` varchar(100) NOT NULL,
  `HINH` varchar(1000) DEFAULT NULL,
  `TRANGTHAI` varchar(20) DEFAULT 'binhthuong',
  `XACNHAN` bit(1) DEFAULT b'1',
  `TOKEN` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`IDND`, `HO`, `TEN`, `GIOITINH`, `NGAYSINH`, `NOISINH`, `QUEQUAN`, `DANTOC`, `HOCVICAONHAT`, `NAMNUOCHOCVI`, `CHUCDANHKHOAHOC`, `NAMBONHIEM`, `CHUCVU`, `DONVICONGTAC`, `CHOORIENG`, `DIENTHOAICQ`, `DIENTHOAINR`, `DIENTHOAIDD`, `FAX`, `MAIL`, `THACSICHUYENNGANH`, `NAMCAPBANGTSCN`, `NOIDAOTAOTSCN`, `TIENSICHUYENNGANH`, `NAMCAPBANGTSCN2`, `NOIDAOTAOTSCN2`, `TENLUANAN`, `CHUCDANHGIANGVIEN`, `TRINHDOCHUYENMON`, `TENDANGNHAP`, `MATKHAU`, `HINH`, `TRANGTHAI`, `XACNHAN`, `TOKEN`) VALUES
(1, 'Ngô Thanh', 'Lý', 'Nam', '1996-01-06', 'Vĩnh Long', 'Vĩnh Long', '', 'Thạc sĩ', '', 'Phó giáo sư', '', 'Trưởng khoa', '', 'Vĩnh Long', '', '', '01212523635', '', 'lythanhngodev@gmail.com', 'Công nghệ thông tin', '1996', 'VLUTE', 'Công nghệ thông tin', '1996', 'VLUTE', '', 'Giảng viên hạng AII', 'Trung cấp', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'binhthuong', b'1', ''),
(2, 'Nguyễn Duy', 'Phúc', 'Nam', '1980-04-10', 'VĨnh Long', 'Quê quán 1', '', 'Thạc sĩ', '', '', '', '', 'Khoa CNTT', 'Vĩnh Long', '', '', '01281728172', '32125585654', 'alphotographyvn@gmail.com', 'CNTT', '', '', '', '', '', '', 'Giảng viên hạng AI', 'Đại học', 'duyphuc', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'binhthuong', b'1', NULL),
(3, 'Phan Anh', 'Cang', 'Nam', '1974-05-01', '', 'olkmno', '', 'Thạc sĩ', '', 'Giáo sư', '', '', '', '', '', '', '012452325624', '', 'cangpa@gmail.com', '', '', '', '', '', '', '', 'Giảng viên hạng AII', 'Tiến sĩ', 'anhcang', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'binhthuong', b'1', NULL),
(4, 'Cao Hùng', 'Phi', 'Nam', '1960-03-12', NULL, NULL, NULL, NULL, NULL, 'Chủ tịch hội đồng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hungphi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hungphi', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'binhthuong', b'1', NULL),
(39, 'Nguyễn Ngọc Lan', 'Anh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14004044@student.vlute.edu.vn@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lananh', '4e58fd9df3f755a31b907cb294535c5e', 'user.png', 'binhthuong', b'1', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung_baibao`
--

CREATE TABLE `nguoidung_baibao` (
  `IDTB` bigint(20) NOT NULL,
  `IDBAO` bigint(20) NOT NULL,
  `IDND` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung_baibao`
--

INSERT INTO `nguoidung_baibao` (`IDTB`, `IDBAO`, `IDND`) VALUES
(51, 4, 1),
(56, 1, 3),
(57, 1, 2),
(58, 2, 1),
(59, 2, 2),
(60, 3, 1),
(61, 3, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung_khoabomon`
--

CREATE TABLE `nguoidung_khoabomon` (
  `IDNDKBM` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDKBM` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung_khoabomon`
--

INSERT INTO `nguoidung_khoabomon` (`IDNDKBM`, `IDND`, `IDKBM`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quocgia`
--

CREATE TABLE `quocgia` (
  `cc_fips` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `cc_iso` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `tld` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  `ten` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `quocgia`
--

INSERT INTO `quocgia` (`cc_fips`, `cc_iso`, `tld`, `ten`) VALUES
('AA', 'AW', '.aw', 'Aruba'),
('AC', 'AG', '.ag', 'Antigua and Barbuda'),
('AE', 'AE', '.ae', 'United Arab Emirates'),
('AF', 'AF', '.af', 'Afghanistan'),
('AG', 'DZ', '.dz', 'Algeria'),
('AJ', 'AZ', '.az', 'Azerbaijan'),
('AL', 'AL', '.al', 'Albania'),
('AM', 'AM', '.am', 'Armenia'),
('AN', 'AD', '.ad', 'Andorra'),
('AO', 'AO', '.ao', 'Angola'),
('AQ', 'AS', '.as', 'American Samoa'),
('AR', 'AR', '.ar', 'Argentina'),
('AS', 'AU', '.au', 'Australia'),
('AT', '-', '-', 'Ashmore and Cartier Islands'),
('AU', 'AT', '.at', 'Austria'),
('AV', 'AI', '.ai', 'Anguilla'),
('AX', 'AX', '.ax', 'Åland Islands'),
('AY', 'AQ', '.aq', 'Antarctica'),
('BA', 'BH', '.bh', 'Bahrain'),
('BB', 'BB', '.bb', 'Barbados'),
('BC', 'BW', '.bw', 'Botswana'),
('BD', 'BM', '.bm', 'Bermuda'),
('BE', 'BE', '.be', 'Belgium'),
('BF', 'BS', '.bs', 'Bahamas, The'),
('BG', 'BD', '.bd', 'Bangladesh'),
('BH', 'BZ', '.bz', 'Belize'),
('BK', 'BA', '.ba', 'Bosnia and Herzegovina'),
('BL', 'BO', '.bo', 'Bolivia'),
('BM', 'MM', '.mm', 'Myanmar'),
('BN', 'BJ', '.bj', 'Benin'),
('BO', 'BY', '.by', 'Belarus'),
('BP', 'SB', '.sb', 'Solomon Islands'),
('BQ', '-', '-', 'Navassa Island'),
('BR', 'BR', '.br', 'Brazil'),
('BS', '-', '-', 'Bassas da India'),
('BT', 'BT', '.bt', 'Bhutan'),
('BU', 'BG', '.bg', 'Bulgaria'),
('BV', 'BV', '.bv', 'Bouvet Island'),
('BX', 'BN', '.bn', 'Brunei'),
('BY', 'BI', '.bi', 'Burundi'),
('CA', 'CA', '.ca', 'Canada'),
('CB', 'KH', '.kh', 'Cambodia'),
('CD', 'TD', '.td', 'Chad'),
('CE', 'LK', '.lk', 'Sri Lanka'),
('CF', 'CG', '.cg', 'Congo, Republic of the'),
('CG', 'CD', '.cd', 'Congo, Democratic Republic of the'),
('CH', 'CN', '.cn', 'China'),
('CI', 'CL', '.cl', 'Chile'),
('CJ', 'KY', '.ky', 'Cayman Islands'),
('CK', 'CC', '.cc', 'Cocos (Keeling) Islands'),
('CM', 'CM', '.cm', 'Cameroon'),
('CN', 'KM', '.km', 'Comoros'),
('CO', 'CO', '.co', 'Colombia'),
('CQ', 'MP', '.mp', 'Northern Mariana Islands'),
('CR', '-', '-', 'Coral Sea Islands'),
('CS', 'CR', '.cr', 'Costa Rica'),
('CT', 'CF', '.cf', 'Central African Republic'),
('CU', 'CU', '.cu', 'Cuba'),
('CV', 'CV', '.cv', 'Cape Verde'),
('CW', 'CK', '.ck', 'Cook Islands'),
('CY', 'CY', '.cy', 'Cyprus'),
('DA', 'DK', '.dk', 'Denmark'),
('DJ', 'DJ', '.dj', 'Djibouti'),
('DO', 'DM', '.dm', 'Dominica'),
('DQ', 'UM', '-', 'Jarvis Island'),
('DR', 'DO', '.do', 'Dominican Republic'),
('DX', '-', '-', 'Dhekelia Sovereign Base Area'),
('EC', 'EC', '.ec', 'Ecuador'),
('EG', 'EG', '.eg', 'Egypt'),
('EI', 'IE', '.ie', 'Ireland'),
('EK', 'GQ', '.gq', 'Equatorial Guinea'),
('EN', 'EE', '.ee', 'Estonia'),
('ER', 'ER', '.er', 'Eritrea'),
('ES', 'SV', '.sv', 'El Salvador'),
('ET', 'ET', '.et', 'Ethiopia'),
('EU', '-', '-', 'Europa Island'),
('EZ', 'CZ', '.cz', 'Czech Republic'),
('FG', 'GF', '.gf', 'French Guiana'),
('FI', 'FI', '.fi', 'Finland'),
('FJ', 'FJ', '.fj', 'Fiji'),
('FK', 'FK', '.fk', 'Falkland Islands (Islas Malvinas)'),
('FM', 'FM', '.fm', 'Micronesia, Federated States of'),
('FO', 'FO', '.fo', 'Faroe Islands'),
('FP', 'PF', '.pf', 'French Polynesia'),
('FQ', 'UM', '-', 'Baker Island'),
('FR', 'FR', '.fr', 'France'),
('FS', 'TF', '.tf', 'French Southern and Antarctic Lands'),
('GA', 'GM', '.gm', 'Gambia, The'),
('GB', 'GA', '.ga', 'Gabon'),
('GG', 'GE', '.ge', 'Georgia'),
('GH', 'GH', '.gh', 'Ghana'),
('GI', 'GI', '.gi', 'Gibraltar'),
('GJ', 'GD', '.gd', 'Grenada'),
('GK', '-', '.gg', 'Guernsey'),
('GL', 'GL', '.gl', 'Greenland'),
('GM', 'DE', '.de', 'Germany'),
('GO', '-', '-', 'Glorioso Islands'),
('GP', 'GP', '.gp', 'Guadeloupe'),
('GQ', 'GU', '.gu', 'Guam'),
('GR', 'GR', '.gr', 'Greece'),
('GT', 'GT', '.gt', 'Guatemala'),
('GV', 'GN', '.gn', 'Guinea'),
('GY', 'GY', '.gy', 'Guyana'),
('GZ', '-', '-', 'Gaza Strip'),
('HA', 'HT', '.ht', 'Haiti'),
('HK', 'HK', '.hk', 'Hong Kong'),
('HM', 'HM', '.hm', 'Heard Island and McDonald Islands'),
('HO', 'HN', '.hn', 'Honduras'),
('HQ', 'UM', '-', 'Howland Island'),
('HR', 'HR', '.hr', 'Croatia'),
('HU', 'HU', '.hu', 'Hungary'),
('IC', 'IS', '.is', 'Iceland'),
('ID', 'ID', '.id', 'Indonesia'),
('IM', 'IM', '.im', 'Isle of Man'),
('IN', 'IN', '.in', 'India'),
('IO', 'IO', '.io', 'British Indian Ocean Territory'),
('IP', '-', '-', 'Clipperton Island'),
('IR', 'IR', '.ir', 'Iran'),
('IS', 'IL', '.il', 'Israel'),
('IT', 'IT', '.it', 'Italy'),
('IV', 'CI', '.ci', 'Cote d\'Ivoire'),
('IZ', 'IQ', '.iq', 'Iraq'),
('JA', 'JP', '.jp', 'Japan'),
('JE', 'JE', '.je', 'Jersey'),
('JM', 'JM', '.jm', 'Jamaica'),
('JN', 'SJ', '-', 'Jan Mayen'),
('JO', 'JO', '.jo', 'Jordan'),
('JQ', 'UM', '-', 'Johnston Atoll'),
('JU', '-', '-', 'Juan de Nova Island'),
('KE', 'KE', '.ke', 'Kenya'),
('KG', 'KG', '.kg', 'Kyrgyzstan'),
('KN', 'KP', '.kp', 'Korea, North'),
('KQ', 'UM', '-', 'Kingman Reef'),
('KR', 'KI', '.ki', 'Kiribati'),
('KS', 'KR', '.kr', 'Korea, South'),
('KT', 'CX', '.cx', 'Christmas Island'),
('KU', 'KW', '.kw', 'Kuwait'),
('KV', 'KV', '-', 'Kosovo'),
('KZ', 'KZ', '.kz', 'Kazakhstan'),
('LA', 'LA', '.la', 'Laos'),
('LE', 'LB', '.lb', 'Lebanon'),
('LG', 'LV', '.lv', 'Latvia'),
('LH', 'LT', '.lt', 'Lithuania'),
('LI', 'LR', '.lr', 'Liberia'),
('LO', 'SK', '.sk', 'Slovakia'),
('LQ', 'UM', '-', 'Palmyra Atoll'),
('LS', 'LI', '.li', 'Liechtenstein'),
('LT', 'LS', '.ls', 'Lesotho'),
('LU', 'LU', '.lu', 'Luxembourg'),
('LY', 'LY', '.ly', 'Libyan Arab'),
('MA', 'MG', '.mg', 'Madagascar'),
('MB', 'MQ', '.mq', 'Martinique'),
('MC', 'MO', '.mo', 'Macau'),
('MD', 'MD', '.md', 'Moldova, Republic of'),
('MF', 'YT', '.yt', 'Mayotte'),
('MG', 'MN', '.mn', 'Mongolia'),
('MH', 'MS', '.ms', 'Montserrat'),
('MI', 'MW', '.mw', 'Malawi'),
('MJ', 'ME', '.me', 'Montenegro'),
('MK', 'MK', '.mk', 'The Former Yugoslav Republic of Macedonia'),
('ML', 'ML', '.ml', 'Mali'),
('MN', 'MC', '.mc', 'Monaco'),
('MO', 'MA', '.ma', 'Morocco'),
('MP', 'MU', '.mu', 'Mauritius'),
('MQ', 'UM', '-', 'Midway Islands'),
('MR', 'MR', '.mr', 'Mauritania'),
('MT', 'MT', '.mt', 'Malta'),
('MU', 'OM', '.om', 'Oman'),
('MV', 'MV', '.mv', 'Maldives'),
('MX', 'MX', '.mx', 'Mexico'),
('MY', 'MY', '.my', 'Malaysia'),
('MZ', 'MZ', '.mz', 'Mozambique'),
('NC', 'NC', '.nc', 'New Caledonia'),
('NE', 'NU', '.nu', 'Niue'),
('NF', 'NF', '.nf', 'Norfolk Island'),
('NG', 'NE', '.ne', 'Niger'),
('NH', 'VU', '.vu', 'Vanuatu'),
('NI', 'NG', '.ng', 'Nigeria'),
('NL', 'NL', '.nl', 'Netherlands'),
('NM', '', '', 'No Man\'s Land'),
('NO', 'NO', '.no', 'Norway'),
('NP', 'NP', '.np', 'Nepal'),
('NR', 'NR', '.nr', 'Nauru'),
('NS', 'SR', '.sr', 'Suriname'),
('NT', 'AN', '.an', 'Netherlands Antilles'),
('NU', 'NI', '.ni', 'Nicaragua'),
('NZ', 'NZ', '.nz', 'New Zealand'),
('PA', 'PY', '.py', 'Paraguay'),
('PC', 'PN', '.pn', 'Pitcairn Islands'),
('PE', 'PE', '.pe', 'Peru'),
('PF', '-', '-', 'Paracel Islands'),
('PG', '-', '-', 'Spratly Islands'),
('PK', 'PK', '.pk', 'Pakistan'),
('PL', 'PL', '.pl', 'Poland'),
('PM', 'PA', '.pa', 'Panama'),
('PO', 'PT', '.pt', 'Portugal'),
('PP', 'PG', '.pg', 'Papua New Guinea'),
('PS', 'PW', '.pw', 'Palau'),
('PU', 'GW', '.gw', 'Guinea-Bissau'),
('QA', 'QA', '.qa', 'Qatar'),
('RE', 'RE', '.re', 'Reunion'),
('RI', 'RS', '.rs', 'Serbia'),
('RM', 'MH', '.mh', 'Marshall Islands'),
('RN', 'MF', '-', 'Saint Martin'),
('RO', 'RO', '.ro', 'Romania'),
('RP', 'PH', '.ph', 'Philippines'),
('RQ', 'PR', '.pr', 'Puerto Rico'),
('RS', 'RU', '.ru', 'Russia'),
('RW', 'RW', '.rw', 'Rwanda'),
('SA', 'SA', '.sa', 'Saudi Arabia'),
('SB', 'PM', '.pm', 'Saint Pierre and Miquelon'),
('SC', 'KN', '.kn', 'Saint Kitts and Nevis'),
('SE', 'SC', '.sc', 'Seychelles'),
('SF', 'ZA', '.za', 'South Africa'),
('SG', 'SN', '.sn', 'Senegal'),
('SH', 'SH', '.sh', 'Saint Helena'),
('SI', 'SI', '.si', 'Slovenia'),
('SL', 'SL', '.sl', 'Sierra Leone'),
('SM', 'SM', '.sm', 'San Marino'),
('SN', 'SG', '.sg', 'Singapore'),
('SO', 'SO', '.so', 'Somalia'),
('SP', 'ES', '.es', 'Spain'),
('ST', 'LC', '.lc', 'Saint Lucia'),
('SU', 'SD', '.sd', 'Sudan'),
('SV', 'SJ', '.sj', 'Svalbard'),
('SW', 'SE', '.se', 'Sweden'),
('SX', 'GS', '.gs', 'South Georgia and the Islands'),
('SY', 'SY', '.sy', 'Syrian Arab Republic'),
('SZ', 'CH', '.ch', 'Switzerland'),
('TD', 'TT', '.tt', 'Trinidad and Tobago'),
('TE', '-', '-', 'Tromelin Island'),
('TH', 'TH', '.th', 'Thailand'),
('TI', 'TJ', '.tj', 'Tajikistan'),
('TK', 'TC', '.tc', 'Turks and Caicos Islands'),
('TL', 'TK', '.tk', 'Tokelau'),
('TN', 'TO', '.to', 'Tonga'),
('TO', 'TG', '.tg', 'Togo'),
('TP', 'ST', '.st', 'Sao Tome and Principe'),
('TS', 'TN', '.tn', 'Tunisia'),
('TT', 'TL', '.tl', 'East Timor'),
('TU', 'TR', '.tr', 'Turkey'),
('TV', 'TV', '.tv', 'Tuvalu'),
('TW', 'TW', '.tw', 'Taiwan'),
('TX', 'TM', '.tm', 'Turkmenistan'),
('TZ', 'TZ', '.tz', 'Tanzania, United Republic of'),
('UG', 'UG', '.ug', 'Uganda'),
('UK', 'GB', '.uk', 'United Kingdom'),
('UP', 'UA', '.ua', 'Ukraine'),
('US', 'US', '.us', 'United States'),
('UV', 'BF', '.bf', 'Burkina Faso'),
('UY', 'UY', '.uy', 'Uruguay'),
('UZ', 'UZ', '.uz', 'Uzbekistan'),
('VC', 'VC', '.vc', 'Saint Vincent and the Grenadines'),
('VE', 'VE', '.ve', 'Venezuela'),
('VI', 'VG', '.vg', 'British Virgin Islands'),
('VM', 'VN', '.vn', 'Vietnam'),
('VQ', 'VI', '.vi', 'Virgin Islands (US)'),
('VT', 'VA', '.va', 'Holy See (Vatican City)'),
('WA', 'NA', '.na', 'Namibia'),
('WE', '-', '-', 'West Bank'),
('WF', 'WF', '.wf', 'Wallis and Futuna'),
('WI', 'EH', '.eh', 'Western Sahara'),
('WQ', 'UM', '-', 'Wake Island'),
('WS', 'WS', '.ws', 'Samoa'),
('WZ', 'SZ', '.sz', 'Swaziland'),
('YI', 'CS', '.yu', 'Serbia and Montenegro'),
('YM', 'YE', '.ye', 'Yemen'),
('ZA', 'ZM', '.zm', 'Zambia'),
('ZI', 'ZW', '.zw', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` bigint(10) NOT NULL,
  `tieude` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `style` varchar(50) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `kichhoat` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `tieude`, `link`, `style`, `hinhanh`, `kichhoat`) VALUES
(1, 'Cán bộ giảng viên', 'can-bo', 'slideInLeft', 'images/up.jpg', b'1'),
(2, 'Sinh viên đăng ký học phần', 'dang-ky-hoc-phan', 'sliceUp', 'images/tay-nghe-asian-650x330.jpg', b'1'),
(3, 'Đại học CNTT 2014', 'cntt', 'slideInRight', 'images/toystory(1).jpg', b'1'),
(7, 'Góc học tập', 'hoc-tap', 'sliceUp', 'images/nemo.jpg', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sotietquidoi`
--

CREATE TABLE `sotietquidoi` (
  `IDS` bigint(20) NOT NULL,
  `BATDAU` float NOT NULL,
  `KETTHUC` float NOT NULL,
  `HESO` float NOT NULL,
  `TOIDA` float NOT NULL DEFAULT '80'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sotietquidoi`
--

INSERT INTO `sotietquidoi` (`IDS`, `BATDAU`, `KETTHUC`, `HESO`, `TOIDA`) VALUES
(1, 85, 100, 1, 80),
(2, 70, 84, 0.9, 80),
(3, 51, 69, 0.75, 80);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhviendetai`
--

CREATE TABLE `thanhviendetai` (
  `IDTV` bigint(20) NOT NULL,
  `IDDT` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `CONGVIEC` text,
  `TRACHNHIEM` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanhviendetai`
--

INSERT INTO `thanhviendetai` (`IDTV`, `IDDT`, `IDND`, `CONGVIEC`, `TRACHNHIEM`) VALUES
(100, 3, 3, 'Chính', 'Chủ nhiệm'),
(101, 3, 2, 'Phụ', 'Thành viên'),
(106, 26, 1, 'rthtr', 'Chủ nhiệm'),
(121, 2, 2, 'Code Chính', 'Chủ nhiệm'),
(122, 2, 3, 'Code phụ', 'Thành viên'),
(127, 29, 2, 'jhj,,j,', 'Chủ nhiệm'),
(128, 29, 39, 'jh,hj,j,jh', 'Thành viên'),
(129, 1, 3, 'Code chính', 'Chủ nhiệm'),
(130, 1, 2, 'Tester', 'Thành viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tiendodukien`
--

CREATE TABLE `tiendodukien` (
  `IDDKTD` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `CONGVIEC` text,
  `SANPHAM` text,
  `THOIGIANBD` date DEFAULT NULL,
  `THOIGIANKT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tiendodukien`
--

INSERT INTO `tiendodukien` (`IDDKTD`, `IDDT`, `CONGVIEC`, `SANPHAM`, `THOIGIANBD`, `THOIGIANKT`) VALUES
(82, 3, 'ukyukuk', 'yukyuk', '2018-04-12', '2018-04-19'),
(85, 26, 'rth', 'rth', '2018-05-18', '2018-05-24'),
(100, 2, 'jsdjb', 'oi', '2018-04-15', '2024-04-15'),
(101, 2, 'ee', 'uuuuu', '2018-08-15', '2018-04-15'),
(105, 29, 'j,', 'j,j,j', '2018-05-04', '2018-05-15'),
(106, 1, 'Phân tích dữ liệu', 'Dữ liệu phân tích', '2016-08-06', '2016-09-06'),
(107, 1, 'Lập trình', 'Sản phẩm hoành thành', '2016-09-17', '2017-02-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tochucthamgia`
--

CREATE TABLE `tochucthamgia` (
  `IDTC` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `THONGTINTC` text,
  `NOIDUNGTHAMGIA` text,
  `KINHPHI` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tochucthamgia`
--

INSERT INTO `tochucthamgia` (`IDTC`, `IDDT`, `THONGTINTC`, `NOIDUNGTHAMGIA`, `KINHPHI`) VALUES
(58, 3, 'ykyukyuk', 'yukyukyu', '1'),
(62, 26, 'rth', 'rth', '1'),
(77, 2, 'Vlute', 'sdjj', '4654'),
(78, 2, 'APc', 'fdfd', '7272'),
(81, 29, 'j,j', ',j,hj,hj', '2'),
(82, 1, 'CTU', 'Máy tính', '654321');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trinhdochuyenmon`
--

CREATE TABLE `trinhdochuyenmon` (
  `IDTD` bigint(20) NOT NULL,
  `TENTRINHDO` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trinhdochuyenmon`
--

INSERT INTO `trinhdochuyenmon` (`IDTD`, `TENTRINHDO`) VALUES
(1, 'Trung cấp'),
(2, 'Đại học'),
(3, 'Thạc sĩ'),
(5, 'Tiến sĩ'),
(6, 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tukhoa`
--

CREATE TABLE `tukhoa` (
  `IDKHOA` bigint(20) NOT NULL,
  `TENKHOA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tukhoa`
--

INSERT INTO `tukhoa` (`IDKHOA`, `TENKHOA`) VALUES
(6, ''),
(5, 'b'),
(7, 'demo 3'),
(4, 'test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xetduyetdetai`
--

CREATE TABLE `xetduyetdetai` (
  `IDXD` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `IDND` int(11) DEFAULT NULL,
  `VAITRO` text,
  `LOAIHD` int(11) NOT NULL DEFAULT '0',
  `FILE` text,
  `THOIGIANPHANCONG` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `xetduyetdetai`
--

INSERT INTO `xetduyetdetai` (`IDXD`, `IDDT`, `IDND`, `VAITRO`, `LOAIHD`, `FILE`, `THOIGIANPHANCONG`) VALUES
(40, 1, 4, 'Chủ tịch hội đồng', 1, NULL, '2018-04-17 10:33:47'),
(41, 1, 3, 'Đánh giá viên', 0, '1523936193-javascript-tong-hop.pdf', '2018-04-17 10:33:47'),
(42, 1, 1, 'Đánh giá viên', 0, NULL, '2018-04-17 10:33:47'),
(68, 26, 2, 'trh', 1, '', '2018-05-04 00:36:56'),
(69, 26, 3, 'trh', 0, '', '2018-05-04 00:36:56'),
(75, 3, 1, '', 1, NULL, '2018-05-06 15:04:29'),
(76, 3, 3, '', 0, NULL, '2018-05-06 15:04:29'),
(77, 3, 4, '', 0, NULL, '2018-05-06 15:04:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xetduyetnghiemthu`
--

CREATE TABLE `xetduyetnghiemthu` (
  `IDNT` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `YKIEN` text,
  `FILE` text,
  `THOIGIANPHANCONG` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `xetduyetnghiemthu`
--

INSERT INTO `xetduyetnghiemthu` (`IDNT`, `IDDT`, `IDND`, `YKIEN`, `FILE`, `THOIGIANPHANCONG`) VALUES
(1, 1, 3, 'Tốt gng', '1524105561-particleground-master.zip', '2018-04-18 23:25:55'),
(2, 1, 4, 'Hay', '1524105646-phan-cap-chuc-nang-cititime.docx', '2018-04-18 23:25:55'),
(3, 3, 4, NULL, '1525054439-qd-87-ve-viec-ban-hanh-quy-dinh-dt-dai-hoc-cao-dang-theo-hoc-che-tin-chi.pdf', '2018-04-30 09:13:15'),
(4, 3, 3, NULL, NULL, '2018-04-30 09:13:15'),
(7, 26, 3, NULL, NULL, '2018-05-04 00:52:18'),
(8, 26, 4, NULL, NULL, '2018-05-04 00:52:18'),
(14, 29, 3, 'đã nghiệm thu', NULL, '2018-05-06 14:14:15'),
(15, 29, 39, NULL, NULL, '2018-05-06 14:14:15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baibao_tukhoa`
--
ALTER TABLE `baibao_tukhoa`
  ADD PRIMARY KEY (`IDBBTK`);

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`IDBV`);

--
-- Chỉ mục cho bảng `baiviet_chuyenmuc`
--
ALTER TABLE `baiviet_chuyenmuc`
  ADD PRIMARY KEY (`IDBVCM`);

--
-- Chỉ mục cho bảng `baiviet_nguoidung`
--
ALTER TABLE `baiviet_nguoidung`
  ADD PRIMARY KEY (`IDBVND`);

--
-- Chỉ mục cho bảng `baocaotiendo`
--
ALTER TABLE `baocaotiendo`
  ADD PRIMARY KEY (`IDTD`);

--
-- Chỉ mục cho bảng `baokhoahoc`
--
ALTER TABLE `baokhoahoc`
  ADD PRIMARY KEY (`IDBAO`),
  ADD UNIQUE KEY `TENBAO` (`TENBAO`);

--
-- Chỉ mục cho bảng `bieumau`
--
ALTER TABLE `bieumau`
  ADD PRIMARY KEY (`IDBM`);

--
-- Chỉ mục cho bảng `capbaibao`
--
ALTER TABLE `capbaibao`
  ADD PRIMARY KEY (`IDC`);

--
-- Chỉ mục cho bảng `capdetai`
--
ALTER TABLE `capdetai`
  ADD PRIMARY KEY (`IDC`),
  ADD UNIQUE KEY `TENCAP` (`TENCAP`);

--
-- Chỉ mục cho bảng `chucdanhgiangvien`
--
ALTER TABLE `chucdanhgiangvien`
  ADD PRIMARY KEY (`IDCD`);

--
-- Chỉ mục cho bảng `chucdanhkhoahoc`
--
ALTER TABLE `chucdanhkhoahoc`
  ADD PRIMARY KEY (`IDCD`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`IDCV`);

--
-- Chỉ mục cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  ADD PRIMARY KEY (`IDCM`);

--
-- Chỉ mục cho bảng `congtacchuyenmon`
--
ALTER TABLE `congtacchuyenmon`
  ADD PRIMARY KEY (`IDCT`);

--
-- Chỉ mục cho bảng `daihoc`
--
ALTER TABLE `daihoc`
  ADD PRIMARY KEY (`IDDH`);

--
-- Chỉ mục cho bảng `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`IDDT`),
  ADD UNIQUE KEY `TENDETAI` (`TENDETAI`),
  ADD UNIQUE KEY `detai_MADETAI_uindex` (`MADETAI`);

--
-- Chỉ mục cho bảng `detai_nguoidung`
--
ALTER TABLE `detai_nguoidung`
  ADD PRIMARY KEY (`IDDTND`);

--
-- Chỉ mục cho bảng `dexuatdetai`
--
ALTER TABLE `dexuatdetai`
  ADD PRIMARY KEY (`IDDX`),
  ADD UNIQUE KEY `dexuatdetai_IDDT_uindex` (`IDDT`);

--
-- Chỉ mục cho bảng `hocvi`
--
ALTER TABLE `hocvi`
  ADD PRIMARY KEY (`IDHV`);

--
-- Chỉ mục cho bảng `khoabomon`
--
ALTER TABLE `khoabomon`
  ADD PRIMARY KEY (`IDKBM`);

--
-- Chỉ mục cho bảng `kinhphi`
--
ALTER TABLE `kinhphi`
  ADD PRIMARY KEY (`IDKP`);

--
-- Chỉ mục cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`IDLV`),
  ADD UNIQUE KEY `linhvuc_TENLINHVUC_uindex` (`TENLINHVUC`);

--
-- Chỉ mục cho bảng `linhvuckhoahoc`
--
ALTER TABLE `linhvuckhoahoc`
  ADD PRIMARY KEY (`IDLV`);

--
-- Chỉ mục cho bảng `loaihinh`
--
ALTER TABLE `loaihinh`
  ADD PRIMARY KEY (`IDLH`),
  ADD UNIQUE KEY `loaihinh_TENLOAI_uindex` (`TENLOAI`);

--
-- Chỉ mục cho bảng `loaihinhnghiencuu`
--
ALTER TABLE `loaihinhnghiencuu`
  ADD PRIMARY KEY (`IDLH`);

--
-- Chỉ mục cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`IDLTK`);

--
-- Chỉ mục cho bảng `loaitaikhoan_nguoidung`
--
ALTER TABLE `loaitaikhoan_nguoidung`
  ADD PRIMARY KEY (`IDLTKND`);

--
-- Chỉ mục cho bảng `ngoaingu`
--
ALTER TABLE `ngoaingu`
  ADD PRIMARY KEY (`IDNN`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`IDND`),
  ADD UNIQUE KEY `MAIL` (`MAIL`),
  ADD UNIQUE KEY `nguoidung_TENDANGNHAP_uindex` (`TENDANGNHAP`);

--
-- Chỉ mục cho bảng `nguoidung_baibao`
--
ALTER TABLE `nguoidung_baibao`
  ADD PRIMARY KEY (`IDTB`);

--
-- Chỉ mục cho bảng `nguoidung_khoabomon`
--
ALTER TABLE `nguoidung_khoabomon`
  ADD PRIMARY KEY (`IDNDKBM`);

--
-- Chỉ mục cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  ADD KEY `idx_cc_fips` (`cc_fips`),
  ADD KEY `idx_cc_iso` (`cc_iso`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sotietquidoi`
--
ALTER TABLE `sotietquidoi`
  ADD PRIMARY KEY (`IDS`);

--
-- Chỉ mục cho bảng `thanhviendetai`
--
ALTER TABLE `thanhviendetai`
  ADD PRIMARY KEY (`IDTV`);

--
-- Chỉ mục cho bảng `tiendodukien`
--
ALTER TABLE `tiendodukien`
  ADD PRIMARY KEY (`IDDKTD`);

--
-- Chỉ mục cho bảng `tochucthamgia`
--
ALTER TABLE `tochucthamgia`
  ADD PRIMARY KEY (`IDTC`);

--
-- Chỉ mục cho bảng `trinhdochuyenmon`
--
ALTER TABLE `trinhdochuyenmon`
  ADD PRIMARY KEY (`IDTD`);

--
-- Chỉ mục cho bảng `tukhoa`
--
ALTER TABLE `tukhoa`
  ADD PRIMARY KEY (`IDKHOA`),
  ADD UNIQUE KEY `TENKHOA` (`TENKHOA`);

--
-- Chỉ mục cho bảng `xetduyetdetai`
--
ALTER TABLE `xetduyetdetai`
  ADD PRIMARY KEY (`IDXD`);

--
-- Chỉ mục cho bảng `xetduyetnghiemthu`
--
ALTER TABLE `xetduyetnghiemthu`
  ADD PRIMARY KEY (`IDNT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baibao_tukhoa`
--
ALTER TABLE `baibao_tukhoa`
  MODIFY `IDBBTK` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `IDBV` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `baiviet_chuyenmuc`
--
ALTER TABLE `baiviet_chuyenmuc`
  MODIFY `IDBVCM` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `baiviet_nguoidung`
--
ALTER TABLE `baiviet_nguoidung`
  MODIFY `IDBVND` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `baocaotiendo`
--
ALTER TABLE `baocaotiendo`
  MODIFY `IDTD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `baokhoahoc`
--
ALTER TABLE `baokhoahoc`
  MODIFY `IDBAO` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `bieumau`
--
ALTER TABLE `bieumau`
  MODIFY `IDBM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT cho bảng `capbaibao`
--
ALTER TABLE `capbaibao`
  MODIFY `IDC` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `capdetai`
--
ALTER TABLE `capdetai`
  MODIFY `IDC` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `chucdanhgiangvien`
--
ALTER TABLE `chucdanhgiangvien`
  MODIFY `IDCD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `chucdanhkhoahoc`
--
ALTER TABLE `chucdanhkhoahoc`
  MODIFY `IDCD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `IDCV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  MODIFY `IDCM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `congtacchuyenmon`
--
ALTER TABLE `congtacchuyenmon`
  MODIFY `IDCT` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT cho bảng `daihoc`
--
ALTER TABLE `daihoc`
  MODIFY `IDDH` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT cho bảng `detai`
--
ALTER TABLE `detai`
  MODIFY `IDDT` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT cho bảng `detai_nguoidung`
--
ALTER TABLE `detai_nguoidung`
  MODIFY `IDDTND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `dexuatdetai`
--
ALTER TABLE `dexuatdetai`
  MODIFY `IDDX` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT cho bảng `hocvi`
--
ALTER TABLE `hocvi`
  MODIFY `IDHV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `khoabomon`
--
ALTER TABLE `khoabomon`
  MODIFY `IDKBM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `kinhphi`
--
ALTER TABLE `kinhphi`
  MODIFY `IDKP` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `IDLV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `linhvuckhoahoc`
--
ALTER TABLE `linhvuckhoahoc`
  MODIFY `IDLV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
--
-- AUTO_INCREMENT cho bảng `loaihinh`
--
ALTER TABLE `loaihinh`
  MODIFY `IDLH` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `loaihinhnghiencuu`
--
ALTER TABLE `loaihinhnghiencuu`
  MODIFY `IDLH` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `IDLTK` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `loaitaikhoan_nguoidung`
--
ALTER TABLE `loaitaikhoan_nguoidung`
  MODIFY `IDLTKND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `ngoaingu`
--
ALTER TABLE `ngoaingu`
  MODIFY `IDNN` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `IDND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT cho bảng `nguoidung_baibao`
--
ALTER TABLE `nguoidung_baibao`
  MODIFY `IDTB` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT cho bảng `nguoidung_khoabomon`
--
ALTER TABLE `nguoidung_khoabomon`
  MODIFY `IDNDKBM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `sotietquidoi`
--
ALTER TABLE `sotietquidoi`
  MODIFY `IDS` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `thanhviendetai`
--
ALTER TABLE `thanhviendetai`
  MODIFY `IDTV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT cho bảng `tiendodukien`
--
ALTER TABLE `tiendodukien`
  MODIFY `IDDKTD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT cho bảng `tochucthamgia`
--
ALTER TABLE `tochucthamgia`
  MODIFY `IDTC` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT cho bảng `trinhdochuyenmon`
--
ALTER TABLE `trinhdochuyenmon`
  MODIFY `IDTD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `tukhoa`
--
ALTER TABLE `tukhoa`
  MODIFY `IDKHOA` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `xetduyetdetai`
--
ALTER TABLE `xetduyetdetai`
  MODIFY `IDXD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT cho bảng `xetduyetnghiemthu`
--
ALTER TABLE `xetduyetnghiemthu`
  MODIFY `IDNT` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
