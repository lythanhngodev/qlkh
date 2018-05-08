-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2018 lúc 01:19 SA
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
(9, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baokhoahoc`
--

CREATE TABLE `baokhoahoc` (
  `IDBAO` bigint(20) NOT NULL,
  `TENBAO` varchar(200) NOT NULL,
  `TENQG` varchar(50) NOT NULL,
  `NHAXUATBAN` varchar(200) DEFAULT NULL,
  `NAMXUATBAN` int(4) DEFAULT NULL,
  `NOIDUNG` text,
  `BIB` text,
  `NGAYDANGBAI` date DEFAULT NULL,
  `FILE` text,
  `ANHIEN` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `baokhoahoc`
--

INSERT INTO `baokhoahoc` (`IDBAO`, `TENBAO`, `TENQG`, `NHAXUATBAN`, `NAMXUATBAN`, `NOIDUNG`, `BIB`, `NGAYDANGBAI`, `FILE`, `ANHIEN`) VALUES
(1, 'Quá trình nảy mầm của cây lúa', 'Vietnam', 'Kinh Đồng', 1999, '<p>Nội dung chi tiết</p>\n', '', '2018-04-05', '', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detai`
--

CREATE TABLE `detai` (
  `IDDT` bigint(20) NOT NULL,
  `TENDETAI` varchar(200) DEFAULT NULL,
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
  `THANGNAMBD` text,
  `THANGNAMKT` text,
  `KETQUA` text,
  `FILE` text,
  `NGAYTHEM` datetime DEFAULT CURRENT_TIMESTAMP,
  `TRANGTHAI` varchar(20) DEFAULT 'Chờ gửi đề xuất'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `detai`
--

INSERT INTO `detai` (`IDDT`, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `MOISANGTAO`, `THUOCCHUONGTRINH`, `SUCANTHIET`, `TINHHINHNGHIENCUU`, `NGHIENCUULIENQUAN`, `PHUONGPHAPKYTHUAT`, `KINHPHINGANSACH`, `KINHPHINGUONKHAC`, `THANGTHUCHIEN`, `THANGNAMBD`, `THANGNAMKT`, `KETQUA`, `FILE`, `NGAYTHEM`, `TRANGTHAI`) VALUES
(1, 'Nghiên cứu viết phần mềm quản lý điểm theo quy chế tín chỉ', 'Mục tiêu nghiên cứu viết phần mềm quản lý điểm theo quy chế tín chỉ', 'Nội dung nghiên cứu', 'Cấp trường', 'Phân tích về tính mới, tính sáng tạo của đề tài', 'Thuộc chương trình', 'Phân tích sự cần thiết nghiên cứu', 'Tổng quan tình hình nghiên cứu thuộc lĩnh vực của đề tài', 'Tổng quan tình hình nghiên cứu thuộc lĩnh vực của đề tài', 'Cách tiếp cận, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng', '10000000', '0', 7, '2016-08', '2017-03', 'Phàn mềm quản lý điểm theo cơ chế tính chỉ', '1523802594-ktra_lt_de2.pdf', '2018-04-12 00:00:00', 'Đang xét duyệt'),
(2, 'Tên đề tài (*)', 'Mục tiêu đề tài (*)', 'Liệt kê và mô tả những nội dung cần nghiên cứu, nêu bật được những nội dung mới và phù hợp để giải quyết vấn đề đặt ra, kể cả những dự kiến hoạt động phối hợp để chuyển giao kết quả nghiên cứu đến người sử dụng. Phải nêu được những nội dung, giải pháp cụ thể cần thực hiện để đạt mục tiêu đề ra. So sánh với các nội dung, giải pháp đã giải quyết của các tác giả trong và ngoài nước để nêu được tính mới, tính độc đáo, tính sáng tạo của đề tài về nội dung nghiên cứu.', 'Cấp trường', 'd) Phân tích về tính mới, tính sáng tạo của đề tài', 'Thuộc chương trình (*)', 'Rút ra kết luận cần thiết để trả lời câu hỏi về nhu cầu và tính bức xúc đối với đề tài nghiên cứu.', 'Ghi những hiểu biết của chủ nhiệm đề tài về lĩnh vực nghiên cứu - nắm được những công trình nghiên cứu đã có liên quan đến đề tài, những kết quả nghiên cứu mới nhất trong lĩnh vực nghiên cứu đề tài, nêu rõ quan điểm của tác giả đối với công trình nghiên cứu này. Ghi rõ đã có tổ chức khoa học công nghệ hoặc doanh nghiệp nào đã tiến hành nghiên cứu đề tài tương tự này chưa, nếu có thì bằng phương pháp, công nghệ nào và kết quả nghiên cứu đã được đánh giá định lượng hoặc định tính như thế nào.', 'Ghi những hiểu biết của chủ nhiệm đề tài về lĩnh vực nghiên cứu - nắm được những công trình nghiên cứu đã có liên quan đến đề tài, những kết quả nghiên cứu mới nhất trong lĩnh vực nghiên cứu đề tài, nêu rõ quan điểm của tác giả đối với công trình nghiên cứu này. Ghi rõ đã có tổ chức khoa học công nghệ hoặc doanh nghiệp nào đã tiến hành nghiên cứu đề tài tương tự này chưa, nếu có thì bằng phương pháp, công nghệ nào và kết quả nghiên cứu đã được đánh giá định lượng hoặc định tính như thế nào.', 'Luận cứ rõ cách tiếp cận - thiết kế nghiên cứu, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng - so sánh với các phương thức giải quyết tương tự khác, nêu được tính mới, tính độc đáo, tính sáng tạo của đề tài.', '123', '1234', 76, '2018-05', '2024-10', 'Dự kiến kết quả đề tài và địa chỉ ứng dụng (*)', '', '2018-04-15 21:52:27', 'Chờ gửi đề xuất');

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
(2, 2, 2);

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
(1, 1, '2018-04-12 09:59:13');

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
(117, 1, 'Chi thuê khoán chuyên môn', '1', '2', '0'),
(118, 1, 'Chi mua nguyên vật liệu', '4', '5', '0'),
(119, 1, 'Chi sửa chữa, mua sắm TSCĐ', '7', '8', '0'),
(120, 1, 'Phát sinh', '14', '13', '14'),
(121, 1, 'Phụ', '15', '16', '17'),
(132, 2, 'Chi thuê khoán chuyên môn', '0', '0', '0'),
(133, 2, 'Chi mua nguyên vật liệu', '0', '0', '0'),
(134, 2, 'Chi sửa chữa, mua sắm TSCĐ', '0', '0', '0'),
(135, 2, 'grerher', '0', '0', '0'),
(136, 2, 'tj66556', '0', '0', '0');

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
(94, 1, 'Khoa học tự nhiên'),
(95, 1, 'Khoa học giáo dục'),
(96, 1, 'Nông - Lâm - Ngư nghiệp'),
(106, 2, 'Khoa học tự nhiên'),
(107, 2, 'Khoa học giáo dục'),
(108, 2, 'Nông - Lâm - Ngư nghiệp');

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
(70, 1, 'Nghiên cứu ứng dụng'),
(77, 2, 'Nghiên cứu cơ bản'),
(78, 2, 'Nghiên cứu ứng dụng'),
(79, 2, 'Triển khai thực nghiệm');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoan_nguoidung`
--

INSERT INTO `loaitaikhoan_nguoidung` (`IDLTKND`, `IDND`, `IDLTK`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `IDND` bigint(20) NOT NULL,
  `HO` varchar(50) DEFAULT NULL,
  `TEN` varchar(50) NOT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `TENDANGNHAP` varchar(50) NOT NULL,
  `MATKHAU` varchar(100) NOT NULL,
  `SODIENTHOAI` varchar(20) DEFAULT NULL,
  `TRINHDO` varchar(100) DEFAULT NULL,
  `CHUCDANHGIANGVIEN` varchar(100) DEFAULT NULL,
  `CHUCDANHKHOAHOC` varchar(100) DEFAULT NULL,
  `CHUCDANHHOIDONG` varchar(100) DEFAULT NULL,
  `HINH` varchar(1000) DEFAULT NULL,
  `MAIL` varchar(100) NOT NULL,
  `TRANGTHAI` varchar(20) DEFAULT 'binhthuong'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`IDND`, `HO`, `TEN`, `NGAYSINH`, `TENDANGNHAP`, `MATKHAU`, `SODIENTHOAI`, `TRINHDO`, `CHUCDANHGIANGVIEN`, `CHUCDANHKHOAHOC`, `CHUCDANHHOIDONG`, `HINH`, `MAIL`, `TRANGTHAI`) VALUES
(1, 'Ngô Thanh', 'Lý', '1996-01-06', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '01214967197', 'Giảng viên', 'Chức danh giảng viên', 'Chức danh khoa học', NULL, 'images/admin.png', 'lythanhngodev@gmail.com\r\n', 'binhthuong'),
(2, 'Nguyễn Duy', 'Phúc', NULL, 'duyphuc', '827ccb0eea8a706c4c34a16891f84e7b', '01234567890', 'Thạc sĩ', 'Giảng viên', 'Người sáng lập', NULL, 'images/admin.png', 'duyphucit@gmail.com', 'binhthuong'),
(3, 'Phan Anh', 'Cang', NULL, 'anhcang', '827ccb0eea8a706c4c34a16891f84e7b', '01202123526', 'Thạc Sĩ', NULL, NULL, NULL, 'images/admin.png', 'cangpa@gmail.com', 'binhthuong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung_khoabomon`
--

CREATE TABLE `nguoidung_khoabomon` (
  `IDNDKBM` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDKBM` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
-- Cấu trúc bảng cho bảng `tacgia_baibao`
--

CREATE TABLE `tacgia_baibao` (
  `IDTB` bigint(20) NOT NULL,
  `IDBAO` bigint(20) NOT NULL,
  `IDTG` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tacgia_baibao`
--

INSERT INTO `tacgia_baibao` (`IDTB`, `IDBAO`, `IDTG`) VALUES
(9, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tgbaokhoahoc`
--

CREATE TABLE `tgbaokhoahoc` (
  `IDTG` bigint(20) NOT NULL,
  `TENTG` varchar(100) NOT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `MOTA` text,
  `DIACHI` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tgbaokhoahoc`
--

INSERT INTO `tgbaokhoahoc` (`IDTG`, `TENTG`, `NGAYSINH`, `MOTA`, `DIACHI`) VALUES
(1, 'Phan Anh Cang', '2018-04-05', '', ''),
(2, 'Ngô Thanh Lý', NULL, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhviendetai`
--

CREATE TABLE `thanhviendetai` (
  `IDTV` bigint(20) NOT NULL,
  `IDDT` bigint(20) NOT NULL,
  `TENTV` varchar(100) DEFAULT NULL,
  `THONGTINTV` text,
  `CONGVIEC` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanhviendetai`
--

INSERT INTO `thanhviendetai` (`IDTV`, `IDDT`, IDND, `THONGTINTV`, `CONGVIEC`) VALUES
(60, 1, 'Nguyễn Duy Phúc', '- Thạc sĩ\n- Khoa Công Nghệ Thông Tin\n- 012024752365', 'Code chính'),
(61, 1, 'Trần Phan An Trường', '- Vinh Viên\n- Khoa Công Nghệ Thông Tin\n- 012024752365', 'Tester'),
(66, 2, 'Nguyễn Duy Phúc', '- Thạc sĩ\n- Khoa công nghệ thông tin\n- 01234567890', 'Code Chính'),
(67, 2, 'Ngô Thanh Lý', '- Sinh viên', 'Code phụ');

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
(59, 1, 'Phân tích dữ liệu', 'Dữ liệu phân tích', '2016-08-06', '2016-09-06'),
(60, 1, 'Lập trình', 'Sản phẩm hoành thành', '2016-09-17', '2017-02-01'),
(65, 2, 'jsdjb', 'oi', '2018-04-15', '2024-04-15'),
(66, 2, 'ee', 'uuuuu', '2018-08-15', '2018-04-15');

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
(31, 1, 'CTU', 'Máy tính', '654321'),
(38, 2, 'Vlute', 'sdjj', '4654'),
(39, 2, 'APc', 'fdfd', '7272');

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
(1, 'Sony');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xetduyetdetai`
--

CREATE TABLE `xetduyetdetai` (
  `IDXD` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `IDND` int(11) DEFAULT NULL,
  `VAITRO` text,
  `FILE` text,
  `THOIGIANPHANCONG` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `xetduyetdetai`
--

INSERT INTO `xetduyetdetai` (`IDXD`, `IDDT`, `IDND`, `VAITRO`, `FILE`, `THOIGIANPHANCONG`) VALUES
(16, 1, 3, 'Đánh giá viên', '1523789944-BAI_3_-_QL_TAI_KHOAN_NGUOI_DUNG.pdf', '2018-04-14 23:27:46'),
(17, 1, 1, 'Đánh giá viên', NULL, '2018-04-14 23:27:46');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baibao_tukhoa`
--
ALTER TABLE `baibao_tukhoa`
  ADD PRIMARY KEY (`IDBBTK`);

--
-- Chỉ mục cho bảng `baokhoahoc`
--
ALTER TABLE `baokhoahoc`
  ADD PRIMARY KEY (`IDBAO`);

--
-- Chỉ mục cho bảng `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`IDDT`);

--
-- Chỉ mục cho bảng `detai_nguoidung`
--
ALTER TABLE `detai_nguoidung`
  ADD PRIMARY KEY (`IDDTND`);

--
-- Chỉ mục cho bảng `dexuatdetai`
--
ALTER TABLE `dexuatdetai`
  ADD PRIMARY KEY (`IDDX`);

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
-- Chỉ mục cho bảng `linhvuckhoahoc`
--
ALTER TABLE `linhvuckhoahoc`
  ADD PRIMARY KEY (`IDLV`);

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
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`IDND`);

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
-- Chỉ mục cho bảng `tacgia_baibao`
--
ALTER TABLE `tacgia_baibao`
  ADD PRIMARY KEY (`IDTB`);

--
-- Chỉ mục cho bảng `tgbaokhoahoc`
--
ALTER TABLE `tgbaokhoahoc`
  ADD PRIMARY KEY (`IDTG`);

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
-- Chỉ mục cho bảng `tukhoa`
--
ALTER TABLE `tukhoa`
  ADD PRIMARY KEY (`IDKHOA`);

--
-- Chỉ mục cho bảng `xetduyetdetai`
--
ALTER TABLE `xetduyetdetai`
  ADD PRIMARY KEY (`IDXD`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baibao_tukhoa`
--
ALTER TABLE `baibao_tukhoa`
  MODIFY `IDBBTK` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `baokhoahoc`
--
ALTER TABLE `baokhoahoc`
  MODIFY `IDBAO` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `detai`
--
ALTER TABLE `detai`
  MODIFY `IDDT` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `detai_nguoidung`
--
ALTER TABLE `detai_nguoidung`
  MODIFY `IDDTND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `dexuatdetai`
--
ALTER TABLE `dexuatdetai`
  MODIFY `IDDX` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `khoabomon`
--
ALTER TABLE `khoabomon`
  MODIFY `IDKBM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `kinhphi`
--
ALTER TABLE `kinhphi`
  MODIFY `IDKP` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT cho bảng `linhvuckhoahoc`
--
ALTER TABLE `linhvuckhoahoc`
  MODIFY `IDLV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT cho bảng `loaihinhnghiencuu`
--
ALTER TABLE `loaihinhnghiencuu`
  MODIFY `IDLH` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `IDLTK` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `loaitaikhoan_nguoidung`
--
ALTER TABLE `loaitaikhoan_nguoidung`
  MODIFY `IDLTKND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `IDND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT cho bảng `tacgia_baibao`
--
ALTER TABLE `tacgia_baibao`
  MODIFY `IDTB` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `tgbaokhoahoc`
--
ALTER TABLE `tgbaokhoahoc`
  MODIFY `IDTG` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `thanhviendetai`
--
ALTER TABLE `thanhviendetai`
  MODIFY `IDTV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT cho bảng `tiendodukien`
--
ALTER TABLE `tiendodukien`
  MODIFY `IDDKTD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT cho bảng `tochucthamgia`
--
ALTER TABLE `tochucthamgia`
  MODIFY `IDTC` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT cho bảng `tukhoa`
--
ALTER TABLE `tukhoa`
  MODIFY `IDKHOA` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `xetduyetdetai`
--
ALTER TABLE `xetduyetdetai`
  MODIFY `IDXD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
