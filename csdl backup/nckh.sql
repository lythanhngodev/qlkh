-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 11, 2018 lúc 02:32 CH
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
  `NGAYTHEM` date DEFAULT NULL,
  `TRANGTHAI` varchar(20) DEFAULT 'Chờ duyệt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `NGUONLIENKET` decimal(10,0) DEFAULT NULL,
  `CONG` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuakhoahoc`
--

CREATE TABLE `linhvuakhoahoc` (
  `IDLV` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `TENLV` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihinhnghiencuu`
--

CREATE TABLE `loaihinhnghiencuu` (
  `IDLH` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `TENLH` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `IDND` bigint(20) NOT NULL,
  `HO` varchar(50) DEFAULT NULL,
  `TEN` varchar(50) NOT NULL,
  `TENDANGNHAP` varchar(50) NOT NULL,
  `MATKHAU` varchar(100) NOT NULL,
  `SODIENTHOAI` varchar(20) DEFAULT NULL,
  `TRINHDO` varchar(100) DEFAULT NULL,
  `CHUCDANHGIANGVIEN` varchar(100) DEFAULT NULL,
  `CHUCDANHKHOAHOC` varchar(100) DEFAULT NULL,
  `DONVICONGTAC` varchar(100) DEFAULT NULL,
  `HINH` varchar(1000) DEFAULT NULL,
  `MAIL` varchar(100) NOT NULL,
  `QUYEN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`IDND`, `HO`, `TEN`, `TENDANGNHAP`, `MATKHAU`, `SODIENTHOAI`, `TRINHDO`, `CHUCDANHGIANGVIEN`, `CHUCDANHKHOAHOC`, `DONVICONGTAC`, `HINH`, `MAIL`, `QUYEN`) VALUES
(1, 'Ngô Thanh', 'Lý', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '01214967197', 'Giảng viên', NULL, NULL, 'Khoa Công Nghệ Thông Tin', 'images/admin.png', 'lythanhngodev@gmail.com\r\n', 'admin');

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
  `kichhoat` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `tieude`, `link`, `style`, `hinhanh`, `kichhoat`) VALUES
(1, 'Cán bộ giảng viên', 'can-bo', 'slideInLeft', 'images/up.jpg', b'1'),
(2, 'Sinh viên đăng ký học phần', 'dang-ky-hoc-phan', 'sliceUp', 'images/walle.jpg', b'1'),
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
(2, 'Ngô Thanh Lý', NULL, '', ''),
(22, 'Phương Trang', NULL, '', '');

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
(1, '');

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
-- Chỉ mục cho bảng `kinhphi`
--
ALTER TABLE `kinhphi`
  ADD PRIMARY KEY (`IDKP`);

--
-- Chỉ mục cho bảng `linhvuakhoahoc`
--
ALTER TABLE `linhvuakhoahoc`
  ADD PRIMARY KEY (`IDLV`);

--
-- Chỉ mục cho bảng `loaihinhnghiencuu`
--
ALTER TABLE `loaihinhnghiencuu`
  ADD PRIMARY KEY (`IDLH`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`IDND`);

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
  MODIFY `IDDT` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `kinhphi`
--
ALTER TABLE `kinhphi`
  MODIFY `IDKP` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `linhvuakhoahoc`
--
ALTER TABLE `linhvuakhoahoc`
  MODIFY `IDLV` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `loaihinhnghiencuu`
--
ALTER TABLE `loaihinhnghiencuu`
  MODIFY `IDLH` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `IDND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `IDTG` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
-- AUTO_INCREMENT cho bảng `tukhoa`
--
ALTER TABLE `tukhoa`
  MODIFY `IDKHOA` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
