-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 14, 2018 lúc 01:07 SA
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `IDBV` bigint(20) NOT NULL,
  `TENBV` varchar(300) DEFAULT NULL,
  `HINHANH` varchar(500) DEFAULT 'news.png',
  `MOTA` text,
  `NOIDUNG` longtext,
  `LINKBV` text,
  `LUOTXEM` bigint(20) DEFAULT '0',
  `NGAYDANG` date DEFAULT NULL,
  `HIENTHI` bit(1) NOT NULL DEFAULT b'1'
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
-- Cấu trúc bảng cho bảng `baiviet_tukhoa`
--

CREATE TABLE `baiviet_tukhoa` (
  `IDTKBV` bigint(20) NOT NULL,
  `IDKHOA` bigint(20) DEFAULT NULL,
  `IDBV` bigint(20) DEFAULT NULL
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
  `IDCD` bigint(20) NOT NULL,
  `mail` text,
  `passmail` text,
  `portmail` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `caidat`
--

INSERT INTO `caidat` (`IDCD`, `mail`, `passmail`, `portmail`) VALUES
(1, 'vlutelibktv@gmail.com', 'vlutelibktv@2017', 587);

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
(6, 'Trưởng phòng'),
(7, 'Giảng viên');

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
(15, 'Sự kiện', 'Trang chuyên sự kiện', 'su-kien-cm'),
(16, 'Công nghệ mới', 'Trang chuyên về công nghệ', 'cong-nghe'),
(17, 'Khám phá', 'Trang khám phá', 'kham-pha'),
(18, 'Đời sống', 'Trang đời sống', 'doi-song');

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
  `THOIGIANNGHIEMTHU` date DEFAULT NULL,
  `DUYET` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dexuatdetai`
--

CREATE TABLE `dexuatdetai` (
  `IDDX` bigint(20) NOT NULL,
  `IDDT` bigint(20) NOT NULL,
  `NGAYDEXUAT` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `TENKBM` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoabomon`
--

INSERT INTO `khoabomon` (`IDKBM`, `TENKBM`) VALUES
(1, 'Khoa Công nghệ thông tin'),
(3, 'Khoa Khoa học cơ bản'),
(4, 'Khoa Lý luận chính trị'),
(5, 'Khoa Cơ khí Động lực'),
(6, 'Khoa Cơ khí Chế tạo máy'),
(7, 'Khoa Điện - Điện tử'),
(8, 'Khoa Sư phạm'),
(9, 'Khoa Công nghệ thực phẩm'),
(10, 'Bộ môn Giáo dục thể chất và Giáo dục quốc phòng'),
(11, 'Bộ môn Ngoại ngữ'),
(13, 'Phòng Đào tạo'),
(14, 'Phòng Tổ chức – Hành chính'),
(15, 'Phòng Kế toán – Tài vụ'),
(16, 'Phòng Nghiên cứu khoa học và Quan hệ quốc tế'),
(17, 'Phòng Quản trị - Thiết bị'),
(18, 'Phòng Công tác Học sinh – Sinh viên'),
(19, 'Phòng Thanh tra'),
(20, 'Phòng Khảo thí và Đảm bảo chất lượng giáo dục');

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
(147, 26, 'Khoa học Y - Dược'),
(171, 29, 'Khoa học giáo dục'),
(189, 8, 'Khoa học tự nhiên'),
(190, 8, 'Khoa học Y - Dược'),
(203, 6, 'Kỹ thuật công nghệ'),
(204, 6, 'Xã hội nhân văn'),
(211, 10, 'Khoa học Y - Dược'),
(230, 2, 'Khoa học tự nhiên'),
(231, 2, 'Khoa học giáo dục'),
(232, 1, 'Khoa học tự nhiên'),
(238, 11, 'Xã hội nhân văn');

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
(109, 26, 'Nghiên cứu ứng dụng'),
(136, 29, 'Triển khai thực nghiệm'),
(150, 8, 'Nghiên cứu ứng dụng'),
(160, 6, 'Nghiên cứu ứng dụng'),
(165, 10, 'Triển khai thực nghiệm'),
(175, 2, 'Nghiên cứu cơ bản'),
(176, 1, 'Triển khai thực nghiệm'),
(182, 11, 'Nghiên cứu ứng dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `IDLTK` bigint(20) NOT NULL,
  `TENLTK` varchar(100) DEFAULT NULL,
  `TENCHITIETLTK` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`IDLTK`, `TENLTK`, `TENCHITIETLTK`) VALUES
(1, 'admin', 'Quản trị viên'),
(2, 'binhthuong', 'Giáo viên'),
(3, 'truongkhoaphong', 'Trưởng khoa / phòng'),
(5, 'khoahoc', 'Nhóm quản lý khoa học');

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
(1, 1, 1);

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
  `HO` varchar(50) DEFAULT NULL,
  `TEN` varchar(50) NOT NULL,
  `GIOITINH` varchar(4) DEFAULT 'Nam',
  `NGAYSINH` date DEFAULT NULL,
  `NOISINH` text,
  `QUEQUAN` text,
  `DANTOC` varchar(20) DEFAULT NULL,
  `NAMNUOCHOCVI` varchar(100) DEFAULT NULL,
  `NAMBONHIEM` text,
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
  `TENDANGNHAP` varchar(50) NOT NULL,
  `MATKHAU` varchar(100) NOT NULL,
  `HINH` varchar(1000) DEFAULT 'user.png',
  `TRANGTHAI` varchar(20) DEFAULT 'binhthuong',
  `XACNHAN` bit(1) DEFAULT b'1',
  `TOKEN` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`IDND`, `HO`, `TEN`, `GIOITINH`, `NGAYSINH`, `NOISINH`, `QUEQUAN`, `DANTOC`, `NAMNUOCHOCVI`, `NAMBONHIEM`, `CHOORIENG`, `DIENTHOAICQ`, `DIENTHOAINR`, `DIENTHOAIDD`, `FAX`, `MAIL`, `THACSICHUYENNGANH`, `NAMCAPBANGTSCN`, `NOIDAOTAOTSCN`, `TIENSICHUYENNGANH`, `NAMCAPBANGTSCN2`, `NOIDAOTAOTSCN2`, `TENLUANAN`, `TENDANGNHAP`, `MATKHAU`, `HINH`, `TRANGTHAI`, `XACNHAN`, `TOKEN`) VALUES
(1, 'Ngô Thanh', 'Lý', 'Nam', '1996-01-06', 'Vĩnh Long', 'Vĩnh Long', '', '', '', 'Vĩnh Long', '', '', '01214967197', '', 'lythanhngodev@gmail.com', 'Công nghệ thông tin', '1996', 'VLUTE', 'Công nghệ thông tin', '1996', 'VLUTE', '', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'binhthuong', b'1', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung_baibao`
--

CREATE TABLE `nguoidung_baibao` (
  `IDTB` bigint(20) NOT NULL,
  `IDBAO` bigint(20) NOT NULL,
  `IDND` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung_chucdanhgiangvien`
--

CREATE TABLE `nguoidung_chucdanhgiangvien` (
  `IDNDCDGV` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDCD` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung_chucdanhgiangvien`
--

INSERT INTO `nguoidung_chucdanhgiangvien` (`IDNDCDGV`, `IDND`, `IDCD`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung_chucdanhkhoahoc`
--

CREATE TABLE `nguoidung_chucdanhkhoahoc` (
  `IDNDCD` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDCD` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung_chucdanhkhoahoc`
--

INSERT INTO `nguoidung_chucdanhkhoahoc` (`IDNDCD`, `IDND`, `IDCD`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung_chucvu`
--

CREATE TABLE `nguoidung_chucvu` (
  `IDNDCV` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDCV` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung_chucvu`
--

INSERT INTO `nguoidung_chucvu` (`IDNDCV`, `IDND`, `IDCV`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung_hocvi`
--

CREATE TABLE `nguoidung_hocvi` (
  `IDNDHV` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDHV` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung_hocvi`
--

INSERT INTO `nguoidung_hocvi` (`IDNDHV`, `IDND`, `IDHV`) VALUES
(1, 1, 0);

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
(1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung_trinhdochuyenmon`
--

CREATE TABLE `nguoidung_trinhdochuyenmon` (
  `IDNDTDCM` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDTD` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung_trinhdochuyenmon`
--

INSERT INTO `nguoidung_trinhdochuyenmon` (`IDNDTDCM`, `IDND`, `IDTD`) VALUES
(1, 1, 2);

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
-- Chỉ mục cho bảng `baiviet_tukhoa`
--
ALTER TABLE `baiviet_tukhoa`
  ADD PRIMARY KEY (`IDTKBV`);

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
-- Chỉ mục cho bảng `caidat`
--
ALTER TABLE `caidat`
  ADD PRIMARY KEY (`IDCD`);

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
  ADD PRIMARY KEY (`IDLTKND`),
  ADD UNIQUE KEY `loaitaikhoan_nguoidung_IDND_uindex` (`IDND`);

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
-- Chỉ mục cho bảng `nguoidung_chucdanhgiangvien`
--
ALTER TABLE `nguoidung_chucdanhgiangvien`
  ADD PRIMARY KEY (`IDNDCDGV`);

--
-- Chỉ mục cho bảng `nguoidung_chucdanhkhoahoc`
--
ALTER TABLE `nguoidung_chucdanhkhoahoc`
  ADD PRIMARY KEY (`IDNDCD`);

--
-- Chỉ mục cho bảng `nguoidung_chucvu`
--
ALTER TABLE `nguoidung_chucvu`
  ADD PRIMARY KEY (`IDNDCV`);

--
-- Chỉ mục cho bảng `nguoidung_hocvi`
--
ALTER TABLE `nguoidung_hocvi`
  ADD PRIMARY KEY (`IDNDHV`);

--
-- Chỉ mục cho bảng `nguoidung_khoabomon`
--
ALTER TABLE `nguoidung_khoabomon`
  ADD PRIMARY KEY (`IDNDKBM`);

--
-- Chỉ mục cho bảng `nguoidung_trinhdochuyenmon`
--
ALTER TABLE `nguoidung_trinhdochuyenmon`
  ADD PRIMARY KEY (`IDNDTDCM`);

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
  MODIFY `IDBBTK` bigint(20) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT cho bảng `baiviet_tukhoa`
--
ALTER TABLE `baiviet_tukhoa`
  MODIFY `IDTKBV` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `baocaotiendo`
--
ALTER TABLE `baocaotiendo`
  MODIFY `IDTD` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `baokhoahoc`
--
ALTER TABLE `baokhoahoc`
  MODIFY `IDBAO` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `bieumau`
--
ALTER TABLE `bieumau`
  MODIFY `IDBM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT cho bảng `caidat`
--
ALTER TABLE `caidat`
  MODIFY `IDCD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `capbaibao`
--
ALTER TABLE `capbaibao`
  MODIFY `IDC` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `IDCV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  MODIFY `IDCM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `congtacchuyenmon`
--
ALTER TABLE `congtacchuyenmon`
  MODIFY `IDCT` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `daihoc`
--
ALTER TABLE `daihoc`
  MODIFY `IDDH` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `detai`
--
ALTER TABLE `detai`
  MODIFY `IDDT` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `dexuatdetai`
--
ALTER TABLE `dexuatdetai`
  MODIFY `IDDX` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `hocvi`
--
ALTER TABLE `hocvi`
  MODIFY `IDHV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `khoabomon`
--
ALTER TABLE `khoabomon`
  MODIFY `IDKBM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT cho bảng `kinhphi`
--
ALTER TABLE `kinhphi`
  MODIFY `IDKP` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `IDLV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `linhvuckhoahoc`
--
ALTER TABLE `linhvuckhoahoc`
  MODIFY `IDLV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT cho bảng `loaihinh`
--
ALTER TABLE `loaihinh`
  MODIFY `IDLH` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `loaihinhnghiencuu`
--
ALTER TABLE `loaihinhnghiencuu`
  MODIFY `IDLH` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `IDLTK` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `loaitaikhoan_nguoidung`
--
ALTER TABLE `loaitaikhoan_nguoidung`
  MODIFY `IDLTKND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `ngoaingu`
--
ALTER TABLE `ngoaingu`
  MODIFY `IDNN` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `IDND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `nguoidung_baibao`
--
ALTER TABLE `nguoidung_baibao`
  MODIFY `IDTB` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `nguoidung_chucdanhgiangvien`
--
ALTER TABLE `nguoidung_chucdanhgiangvien`
  MODIFY `IDNDCDGV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `nguoidung_chucdanhkhoahoc`
--
ALTER TABLE `nguoidung_chucdanhkhoahoc`
  MODIFY `IDNDCD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `nguoidung_chucvu`
--
ALTER TABLE `nguoidung_chucvu`
  MODIFY `IDNDCV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `nguoidung_hocvi`
--
ALTER TABLE `nguoidung_hocvi`
  MODIFY `IDNDHV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `nguoidung_khoabomon`
--
ALTER TABLE `nguoidung_khoabomon`
  MODIFY `IDNDKBM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `nguoidung_trinhdochuyenmon`
--
ALTER TABLE `nguoidung_trinhdochuyenmon`
  MODIFY `IDNDTDCM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `sotietquidoi`
--
ALTER TABLE `sotietquidoi`
  MODIFY `IDS` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `thanhviendetai`
--
ALTER TABLE `thanhviendetai`
  MODIFY `IDTV` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tiendodukien`
--
ALTER TABLE `tiendodukien`
  MODIFY `IDDKTD` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tochucthamgia`
--
ALTER TABLE `tochucthamgia`
  MODIFY `IDTC` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `trinhdochuyenmon`
--
ALTER TABLE `trinhdochuyenmon`
  MODIFY `IDTD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `tukhoa`
--
ALTER TABLE `tukhoa`
  MODIFY `IDKHOA` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `xetduyetdetai`
--
ALTER TABLE `xetduyetdetai`
  MODIFY `IDXD` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `xetduyetnghiemthu`
--
ALTER TABLE `xetduyetnghiemthu`
  MODIFY `IDNT` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
