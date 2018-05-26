-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 02:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nckh`
--

-- --------------------------------------------------------

--
-- Table structure for table `baibao_tukhoa`
--

CREATE TABLE `baibao_tukhoa` (
  `IDBBTK` bigint(20) NOT NULL,
  `IDKHOA` bigint(20) NOT NULL,
  `IDBAO` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
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

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`IDBV`, `TENBV`, `HINHANH`, `MOTA`, `NOIDUNG`, `LINKBV`, `LUOTXEM`, `NGAYDANG`, `HIENTHI`) VALUES
(1, 'Liên kết hợp tác các lĩnh vực và chương trình trao đổi sinh viên với đại học KoreaTech', 'images/IMG_2024.JPG', 'Chiều ngày 5/4/2017, lãnh đạo trường Đại học SPKT Vĩnh Long (ĐH SPKTVL) đã có buổi gặp gỡ và làm việc với lãnh đạo trường đại học Kỹ thuật và Giáo dục Hàn Quốc (KoreaTech) bàn về Biên bản ghi nhớ hợp tác ở các lĩnh vực đào tạo, nghiên cứu khoa học, trao đổi sinh viên, việc làm,…', '<p>Chiều ng&agrave;y 5/4/2017, l&atilde;nh đạo trường Đại học SPKT Vĩnh Long (ĐH SPKTVL) đ&atilde; c&oacute; buổi gặp gỡ v&agrave; l&agrave;m việc với l&atilde;nh đạo trường đại học Kỹ thuật v&agrave; Gi&aacute;o dục H&agrave;n Quốc (KoreaTech) b&agrave;n về Bi&ecirc;n bản ghi nhớ hợp t&aacute;c ở c&aacute;c lĩnh vực đ&agrave;o tạo, nghi&ecirc;n cứu khoa học, trao đổi sinh vi&ecirc;n, việc l&agrave;m,&hellip; sắp được k&yacute; kết.</p>\n\n<p><img alt=\"\" src=\"http://www.vlute.edu.vn/images/2017/04/IMG_2015.JPG\" style=\"height:317px; width:600px\" /></p>\n\n<p>Theo đ&oacute;, đại diện trường KoreaTech &ocirc;ng Haiwoong Park &ndash; trưởng ph&ograve;ng Hợp t&aacute;c quốc tế đ&atilde; giới thiệu về trường KoreaTech, cũng như mục đ&iacute;ch chuyến gh&eacute; thăm tại ĐH SPKTVL. Tại buổi l&agrave;m việc &ocirc;ng Haiwoong Park b&agrave;y tỏ quan điểm mong muốn hợp t&aacute;c với ĐH SPKTVL th&ocirc;ng qua 8 điều trong Bi&ecirc;n bản ghi nhớ sẽ được k&yacute; kết trong th&aacute;ng 5/2017 giữa hai b&ecirc;n. Đặc biệt &ocirc;ng Haiwoong Park rất quan t&acirc;m đến chương tr&igrave;nh trao đổi sinh vi&ecirc;n giữa KoreaTech v&agrave; ĐH SPKTVL.</p>\n\n<p><img alt=\"\" src=\"http://www.vlute.edu.vn/images/2017/04/IMG_2006.JPG\" style=\"height:314px; width:600px\" /></p>\n\n<p>PGS.TS. Cao H&ugrave;ng Phi &ndash; Hiệu trưởng nh&agrave; trường đ&atilde; gửi lời cảm ơn &ocirc;ng Haiwoong Park đ&atilde; đến thăm trường, v&agrave; cũng gửi lời ch&uacute;c mừng đến hai trường v&igrave; sự hợp t&aacute;c sắp tới giữa hai b&ecirc;n. Hiệu trưởng mong muốn chương tr&igrave;nh hợp t&aacute;c sẽ ph&aacute;t huy hiệu quả tối đa nhằm tạo điều kiện tốt nhất cho mối quan hệ bền vững giữa hai b&ecirc;n, đặc biệt l&agrave; đẩy nhanh chương tr&igrave;nh trao đổi sinh vi&ecirc;n tạo thuận lợi cho sinh vi&ecirc;n ĐH SPKTVL sang KoreaTech học tập.</p>\n\n<p><img alt=\"\" src=\"http://www.vlute.edu.vn/images/2017/04/IMG_2024.JPG\" style=\"height:330px; width:600px\" /></p>\n\n<table>\n	<tbody>\n		<tr>\n			<td>Trường KoreaTech &ndash; ng&ocirc;i trường đứng đầu về tỉ lệ việc l&agrave;m cho sinh vi&ecirc;n tốt nghiệp, được th&agrave;nh lập bởi Bộ Lao động H&agrave;n Quốc v&agrave;o năm 1991 dựa tr&ecirc;n triết l&yacute; gi&aacute;o dục &ldquo;Seeking truth from the fact&rdquo;, tập trung v&agrave;o kỹ thuật v&agrave; nguồn nh&acirc;n lực ph&aacute;t triển. Trường c&oacute; 3 học khu tọa lạc ở Cheonan, tỉnh Chungcheongnam, c&aacute;ch thủ đ&ocirc; Seoul khoảng 80km. Đặc biệt, đ&acirc;y cũng l&agrave; ng&ocirc;i trường nằm trong top 1% c&aacute;c trường được ưu ti&ecirc;n bởi Đại sứ qu&aacute;n H&agrave;n Quốc. KoreaTech l&agrave; một trong những đối t&aacute;c đ&agrave;o tạo của Samsung, LG. Sinh vi&ecirc;n học tập v&agrave; nghi&ecirc;n cứu tại đ&acirc;y sẽ c&oacute; cơ hội thực tập v&agrave; l&agrave;m việc tại những tập đo&agrave;n h&agrave;ng đầu tr&ecirc;n.</td>\n		</tr>\n	</tbody>\n</table>\n\n<p><img alt=\"\" src=\"http://www.vlute.edu.vn/images/2017/04/IMG_2030.JPG\" style=\"height:400px; width:600px\" /></p>\n\n<p><em>Tham quan cơ sở vật chất tại ĐH SPKT Vĩnh Long</em></p>\n\n<p><img alt=\"\" src=\"http://www.vlute.edu.vn/images/2017/04/IMG_2041.JPG\" style=\"height:400px; width:600px\" /></p>\n', 'lien-ket-hop-tac-cac-linh-vuc-va-chuong-trinh-trao-doi-sinh-vien-voi-dai-hoc-koreatech', 8, '2017-04-05', b'1'),
(2, 'ĐH SPKT Vĩnh Long: Tăng cường hợp tác tại New Zealand', 'images/tham_dai_su_quan_VN.jpg', 'Nhân chuyến công tác từ ngày 12/3-24/3/2017 tại thủ đô Wellington, trường ĐH SPKT Vĩnh Long đã thiết lập mối quan hệ hợp tác và liên kết đào tạo với Trường Đại học Vicroria, Trường đào tạo nghề Weltec và Tổ chức Skills International Limited ở New Zealand.', '<p><strong><em>Nh&acirc;n chuyến c&ocirc;ng t&aacute;c từ ng&agrave;y 12/3-24/3/2017 tại thủ đ&ocirc; Wellington, trường ĐH SPKT Vĩnh Long đ&atilde; thiết lập mối quan hệ hợp t&aacute;c v&agrave; li&ecirc;n kết đ&agrave;o tạo với Trường Đại học Vicroria, Trường đ&agrave;o tạo nghề Weltec v&agrave; Tổ chức Skills International Limited ở New Zealand.</em></strong></p>\n\n<p>Song song với tham gia kh&oacute;a bồi dưỡng &ldquo;<em>Cải c&aacute;ch h&agrave;nh ch&iacute;nh c&ocirc;ng gắn với hiệu quả, hiệu lực của tổ chức bộ m&aacute;y v&agrave; kỹ năng l&atilde;nh đạo, quản l&yacute; gắn với nội dung lĩnh vực Gi&aacute;o dục nghề nghiệp v&agrave; thị trường lao động tại New Zealand</em>&rdquo;, PGS.TS. Cao H&ugrave;ng Phi - Hiệu trưởng đ&atilde; c&oacute; c&aacute;c chuyến đi khảo s&aacute;t thực tế, thăm v&agrave; l&agrave;m việc tại một số tổ chức trong thủ đ&ocirc; Wellington.</p>\n\n<p>Đối t&aacute;c tổ chức chương tr&igrave;nh học tập l&agrave; Skills International Limited. Đ&acirc;y l&agrave; một đơn vị th&agrave;nh vi&ecirc;n của Tổ chức Kỹ năng, tổ chức đ&agrave;o tạo ng&agrave;nh lớn nhất của New Zealand, cung cấp quản l&yacute; đ&agrave;o tạo v&agrave; hỗ trợ cho hơn 20 ng&agrave;nh kh&aacute;c nhau.&nbsp;Skills International Limited ra đời năm 2006 chuy&ecirc;n cấp chứng chỉ kỹ năng nghề v&agrave; giấy ph&eacute;p h&agrave;nh nghề c&oacute; gi&aacute; trị quốc tế.</p>\n\n<p><em><img alt=\"\" src=\"http://www.vlute.edu.vn/images/tham_lop_hoc_tai_Wel.jpg\" style=\"height:510px; width:600px\" /></em></p>\n\n<p><em>Hiệu trưởng thăm lớp học tại Industry Training Federation</em></p>\n\n<p>Trong chuyến c&ocirc;ng t&aacute;c, Hiệu trưởng đ&atilde; đến thăm v&agrave; l&agrave;m việc tại một số cơ quan như: Bộ Thương mại, cải c&aacute;ch v&agrave; việc l&agrave;m; Bộ Ph&aacute;t triển x&atilde; hội; Ủy ban gi&aacute;o dục đại học; Li&ecirc;n đo&agrave;n đ&agrave;o tạo ng&agrave;nh; Văn ph&ograve;ng quan hệ đối t&aacute;c Ch&iacute;nh phủ...đến thăm Đại sứ qu&aacute;n Việt Nam tại New Zealand.</p>\n\n<p><em><img alt=\"\" src=\"http://www.vlute.edu.vn/images/tham_quan_Weltect_co_so_Petone.jpg\" style=\"height:371px; width:603px\" /></em></p>\n\n<p><em>Tham quan Weltec - cơ sở Petone</em></p>\n\n<p>Đặc biệt, trường Đại học SPKT Vĩnh Long đ&atilde; thiết lập mối quan hệ hợp t&aacute;c v&agrave; li&ecirc;n kết đ&agrave;o tạo với Trường Đại học Victoria, Trường đ&agrave;o tạo nghề Weltec &ndash; cơ sở Petone v&agrave; Tổ chức Skills International Limited ở New Zealand.</p>\n\n<p><em><img alt=\"\" src=\"http://www.vlute.edu.vn/images/tham_dai_su_quan_VN.jpg\" style=\"height:305px; width:601px\" /></em></p>\n\n<p><em>Thăm đại sứ qu&aacute;n Việt Nam</em></p>\n\n<p>Hệ thống khung đ&agrave;o tạo Quốc gia của New Zealand gồm 10 bậc gồm: từ bậc 1-4: chứng nhận (certificates); bậc 5,6: bằng cấp/chứng chỉ (diplomas); bậc 7: bằng tốt nghiệp kỹ sư/cử nh&acirc;n (Bachelor&#39;s degree/Graduate diplomas and certificates); bậc 8: kỹ sư/cử nh&acirc;n danh dự (bachelor honours degree); bậc 9: thạc sĩ; bậc 10: tiến sĩ. C&aacute;c trường v&agrave; c&aacute;c tổ chức đ&agrave;o tạo nghề hoạt động theo cơ chế thị trường, Nh&agrave; nước chỉ hỗ trợ cho nh&oacute;m yếu thế v&agrave; ng&agrave;nh nghề n&agrave;o cần phục vụ cho ph&aacute;t triển kinh tế x&atilde; hội.</p>\n\n<p>Ngo&agrave;i hệ thống bằng cấp, chứng chỉ, tại New Zealand c&ograve;n bị r&agrave;ng buộc bởi chứng chỉ h&agrave;nh nghề n&ecirc;n qu&aacute; tr&igrave;nh vận h&agrave;nh được Nh&agrave; nước quản l&yacute; v&agrave; điều phối ch&iacute;nh x&aacute;c hơn.</p>\n\n<p>Tất cả c&aacute;c hoạt động trong hệ thống gi&aacute;o dục nghề nghiệp được tin học h&oacute;a tối đa từ hệ thống chương tr&igrave;nh, ng&agrave;nh nghề đ&agrave;o tạo, tư vấn hướng nghiệp.</p>\n', 'dh-spkt-vinh-long-tang-cuong-hop-tac-tai-new-zealand', 5, '2015-03-24', b'1'),
(3, 'Đại học SPKT Vĩnh Long ký kết thỏa thuận song phương với tổ chức Skills International: Cơ hội việc làm tại New Zeland', 'images/ht_skills_international_1.jpg', 'Trong buổi đón tiếp và làm việc với phái đoàn tổ chức Skills International (New Zealand) ngày 7/6/2017, lãnh đạo hai bên đã ký kết bản ghi nhớ về chương trình hợp tác phát triển đào tạo, đánh giá kỹ năng nghề cấp quốc tế, đào tạo nguồn nhân lực chất lượng cao và một số nội dung về tư vấn, trao đổi và giao lưu văn hóa…', '<p><strong><em>Trong buổi đ&oacute;n tiếp v&agrave; l&agrave;m việc với ph&aacute;i đo&agrave;n tổ chức Skills International (New Zealand) ng&agrave;y 7/6/2017, l&atilde;nh đạo hai b&ecirc;n đ&atilde; k&yacute; kết bản ghi nhớ về chương tr&igrave;nh hợp t&aacute;c ph&aacute;t triển đ&agrave;o tạo, đ&aacute;nh gi&aacute; kỹ năng nghề cấp quốc tế, đ&agrave;o tạo nguồn nh&acirc;n lực chất lượng cao v&agrave; một số nội dung về tư vấn, trao đổi v&agrave; giao lưu văn h&oacute;a&hellip;</em></strong></p>\n\n<p><strong><em><img src=\"http://www.vlute.edu.vn/images/hop_tac_skills_international/ht_skills_international_1.jpg\" style=\"width:600px\" /></em></strong></p>\n\n<p><em>B&agrave; Dridget Dennis - Gi&aacute;m đốc điều h&agrave;nh Skills International v&agrave; PGS.TS. Cao H&ugrave;ng Phi &ndash; Hiệu trưởng k&yacute; kết bản ghi nhớ trước sự chứng kiến của l&atilde;nh đạo hai b&ecirc;n</em></p>\n\n<p>Cụ thể trong buổi l&agrave;m việc, b&agrave; Bridget Dennis &ndash; Gi&aacute;m đốc điều h&agrave;nh Skills International cho biết mục đ&iacute;ch của chuyến thăm v&agrave; l&agrave;m việc với Đại học SPKT Vĩnh Long theo lời mời của PGS.TS Cao H&ugrave;ng Phi &ndash; Hiệu trưởng nh&agrave; trường l&agrave; t&igrave;m cơ hội hợp t&aacute;c giữa hai b&ecirc;n. B&ecirc;n cạnh đ&oacute; l&agrave; B&agrave; muốn t&igrave;m hiểu nhiều hơn về Nh&agrave; trường ở c&aacute;c lĩnh vực đ&agrave;o tạo, nh&acirc;n lực v&agrave; đặc biệt l&agrave; Trung t&acirc;m Đ&aacute;nh gi&aacute; Kỹ năng nghề Quốc gia của trường.</p>\n\n<p><em><img src=\"http://www.vlute.edu.vn/images/hop_tac_skills_international/ht_skills_international_2.jpg\" style=\"width:600px\" /></em></p>\n\n<p><em>B&agrave; Dridget Dennis t&igrave;m hiểu về Trường v&agrave;&hellip;</em></p>\n\n<p>Sau trao đổi, l&atilde;nh đạo hai b&ecirc;n đ&atilde; đi đến thống nhất v&agrave; k&yacute; kết bản ghi nhớ về thỏa thuận hợp t&aacute;c giữa tổ chức Skills International (New Zealand) v&agrave; trường Đại học SPKT Vĩnh Long với c&aacute;c điều khoản như: Trao đổi sinh vi&ecirc;n, giảng vi&ecirc;n, c&aacute;n bộ quản l&yacute; chia sẻ về văn h&oacute;a, ng&ocirc;n ngữ, đồng thời trao đổi kinh nghiệm chuy&ecirc;n m&ocirc;n, c&aacute;c phương ph&aacute;p giảng dạy, học tập; Hỗ trợ trung t&acirc;m đ&aacute;nh gi&aacute; kỹ năng nghề quốc gia của trường tiếp cận ti&ecirc;u chuẩn đ&aacute;nh gi&aacute; kỹ năng nghề New Zealand; Skills International hỗ trợ đ&aacute;nh gi&aacute; cấp chứng chỉ h&agrave;nh nghề cấp quốc tế cho sinh vi&ecirc;n, học vi&ecirc;n, th&iacute; sinh của trường; Hỗ trợ việc l&agrave;m cho sinh vi&ecirc;n trường c&oacute; thể l&agrave;m việc tại NewZealand, &Uacute;c;</p>\n\n<p><em><img src=\"http://www.vlute.edu.vn/images/hop_tac_skills_international/ht_skills_international_3.jpg\" style=\"width:600px\" /></em></p>\n\n<p><em>&hellip;giao lưu với sinh vi&ecirc;n trường Đại học SPKT Vĩnh Long</em></p>\n\n<p>Skills International quản l&yacute; bởi Ch&iacute;nh phủ New Zealand v&agrave; Hiệp hội c&aacute;c Doanh nghiệp C&ocirc;ng nghiệp New Zealand, được th&agrave;nh lập v&agrave;o năm 2006 theo y&ecirc;u cầu của c&aacute;c tổ chức quốc tế để chia sẻ c&aacute;ch tiếp cận về gi&aacute;o dục v&agrave; ph&aacute;t triển kỹ năng trong khu&ocirc;n khổ nghề. Skills International thuộc sở hữu Skills Organisation, tổ chức đ&agrave;o tạo ng&agrave;nh c&ocirc;ng nghiệp lớn nhất New Zealand, cung cấp quản l&yacute; đ&agrave;o tạo v&agrave; hỗ trợ cho hơn 20 ng&agrave;nh c&ocirc;ng nghiệp.</p>\n', 'dai-hoc-spkt-vinh-long-ky-ket-thoa-thuan-song-phuong-voi-to-chuc-skills-international-co-hoi-viec-lam-tai-new-zeland', 7, '2017-06-07', b'1'),
(4, 'Làm việc với đoàn Koica Việt Nam về hoạt động của tình nguyện viên', 'images/tiep_koica_20_6_2017-3.JPG', 'Ngày 20/6/2017, Đại học SPKT Vĩnh Long đã có buổi tiếp và làm việc với đoàn Koica Việt Nam xoay quanh các hoạt động của tình nguyện viên GS. Hong Byung Chul tại Khoa Cơ khí Chế tạo máy và Khoa Điện – Điện tử của trường.', '<p>Ng&agrave;y 20/6/2017, Đại học SPKT Vĩnh Long đ&atilde; c&oacute; buổi tiếp v&agrave; l&agrave;m việc với đo&agrave;n Koica Việt Nam xoay quanh c&aacute;c hoạt động của t&igrave;nh nguyện vi&ecirc;n GS. Hong Byung Chul tại Khoa Cơ kh&iacute; Chế tạo m&aacute;y v&agrave; Khoa Điện &ndash; Điện tử của trường.</p>\n\n<p><img src=\"http://vlute.edu.vn/images/tiep_koica_20_6_2017-3.JPG\" style=\"width:550px\" /></p>\n\n<p>Trao đổi với Koica Việt Nam, TS. L&ecirc; Hồng Kỳ - Ph&oacute; Hiệu trưởng đ&atilde; tr&igrave;nh b&agrave;y c&aacute;c dự &aacute;n đang thực hiện tại trường SPKT Vĩnh Long c&oacute; sự tham gia của t&igrave;nh nguyện vi&ecirc;n GS. Hong đ&atilde; v&agrave; đang mang lại hiệu quả thiết thực. Đặc biệt l&agrave; dự &aacute;n nghi&ecirc;n cứu, cảnh b&aacute;o hiện tượng x&acirc;m nhập mặn ở Vĩnh Long v&agrave; c&aacute;c tỉnh khu vực đồng bằng s&ocirc;ng Cửu Long.</p>\n\n<p><img src=\"http://vlute.edu.vn/images/tiep_koica_20_6_2017-1.JPG\" style=\"width:550px\" /></p>\n\n<p><em>TS. L&ecirc; Hồng Kỳ - Ph&oacute; Hiệu trưởng thống nhất n&acirc;ng tầm c&aacute;c dự &aacute;n nghi&ecirc;n cứu c&oacute; sự hỗ trợ của t&igrave;nh nguyện vi&ecirc;n</em></p>\n\n<p>B&agrave; Kim Huyn Ril &ndash; Quản l&yacute; chương tr&igrave;nh t&igrave;nh nguyện vi&ecirc;n cho biết, mục đ&iacute;ch chuyến đến thăm v&agrave; l&agrave;m việc của Koica lần n&agrave;y l&agrave; kiểm tra hoạt động của t&igrave;nh nguyện vi&ecirc;n Hong, đồng thời chia sẽ, hỗ trợ với trường về c&aacute;c hoạt động sinh hoạt thường nhật của t&igrave;nh nguyện vi&ecirc;n.</p>\n\n<p><img src=\"http://vlute.edu.vn/images/tiep_koica_20_6_2017-2.JPG\" style=\"width:550px\" /></p>\n\n<p><em>B&agrave; Kim Huyn Ril đ&aacute;nh gi&aacute; cao hiệu quả hợp t&aacute;c giữa hai b&ecirc;n</em></p>\n\n<p>Tại buổi l&agrave;m việc, hai b&ecirc;n đ&atilde; đ&aacute;nh gi&aacute; cao hiệu quả mang lại của chương tr&igrave;nh t&igrave;nh nguyện vi&ecirc;n tại Đại học SPKT Vĩnh Long. Song song, hai b&ecirc;n thống nhất sẽ đẩy mạnh hơn nữa chương tr&igrave;nh hợp t&aacute;c t&igrave;nh nguyện vi&ecirc;n, n&acirc;ng tầm c&aacute;c dự &aacute;n nghi&ecirc;n cứu đạt chuẩn quốc gia trong thời gian tới.</p>\n', 'lam-viec-voi-doan-koica-viet-nam-ve-hoat-dong-cua-tinh-nguyen-vien', 7, '2017-06-20', b'1'),
(5, 'Đánh giá kết quả và hiệu quả các chỉ tiêu kinh tế, kỹ thuật của các thiết bị thu hoạch, chẻ và sấy cây lác', 'images/news.png', 'Đó là nội dung buổi hội thảo khoa học tại Trung tâm kỹ thuật công nghệ cao – Khoa Cơ khí Chế tạo máy - Trường Đại học SPKT Vĩnh Long ngày 27/6/2017.', '<p>Đ&oacute; l&agrave; nội dung buổi hội thảo khoa học tại Trung t&acirc;m kỹ thuật c&ocirc;ng nghệ cao &ndash; Khoa Cơ kh&iacute; Chế tạo m&aacute;y - Trường Đại học SPKT Vĩnh Long ng&agrave;y 27/6/2017.</p>\n\n<p>Hội thảo đ&aacute;nh gi&aacute; đề t&agrave;i &ldquo;Nghi&ecirc;n cứu thiết kế, chế tạo thiết bị thu hoạch v&agrave; thiết bị sấy c&acirc;y l&aacute;c ở tỉnh Vĩnh Long&rdquo; l&agrave; đề t&agrave;i nghi&ecirc;n cứu khoa học cấp Tỉnh, được thực hiện trong 24 th&aacute;ng do PGS.TS. Cao H&ugrave;ng Phi l&agrave;m chủ nhiệm.</p>\n\n<p>&nbsp;</p>\n\n<p>Theo mục ti&ecirc;u ban đầu Trường Đại học SPKT Vĩnh Long&nbsp;đ&atilde; thiết kế, chế tạo thiết bị thu hoạch ph&ugrave; hợp với điều kiện tỉnh Vĩnh Long. Thứ hai l&agrave; chế tạo thiết bị sấy l&aacute;c nhằm đảm bảo hiệu quả sản xuất v&agrave; chất lượng l&aacute;c cao hơn phơi nắng. Sản phẩm thứ ba l&agrave; thiết bị chẻ l&aacute;c đảm bảo hiệu quả v&agrave; năng suất cao hơn phương ph&aacute;p truyền thống.</p>\n\n<p>Tham dự buổi hội thảo c&oacute; đại diện Sở Khoa học &ndash; C&ocirc;ng nghệ tỉnh Vĩnh Long, c&aacute;c doanh nghiệp cơ kh&iacute; trong tỉnh, đại biểu c&aacute;c n&ocirc;ng d&acirc;n trồng L&aacute;c ở huyện Vũng Li&ecirc;m, trung t&acirc;m khuyến c&ocirc;ng, khuyến n&ocirc;ng Tỉnh.</p>\n\n<p>C&aacute;c đại biểu tham dự hội thảo đ&aacute;nh gi&aacute; cao hiệu quả hoạt động của c&aacute;c thiết bị, đặc biệt l&agrave; m&aacute;y sấy l&aacute;c, đ&aacute;p ứng được nhu cầu sấy l&aacute;c trong thời tiết mưa nhiều như hiện nay. Thiết bị chẻ l&aacute;c đảm bảo hiệu quả sản xuất cao hơn c&aacute;c thiết bị truyền thống gấp nhiều lần.</p>\n\n<p>Sau hội thảo, c&aacute;c thiết bị tr&ecirc;n sẽ được đưa về x&atilde; Trung Th&agrave;nh Đ&ocirc;ng (Vũng Li&ecirc;m) để thực nghiệm.</p>\n', 'danh-gia-ket-qua-va-hieu-qua-cac-chi-tieu-kinh-te-ky-thuat-cua-cac-thiet-bi-thu-hoach-che-va-say-cay-lac', 6, '2017-06-27', b'1'),
(6, 'Hội thảo Khao học tháng 4/2018 với chủ đề: \"Tăng cường liên kết giữa trường Đại học với doanh nghiệp trong quá trình đào tạo và giải quyết việc làm cho sinh viên\"', 'images/news.png', 'Nhằm tăng cường mối liên kết giữa trường Đại học sư phạm kỹ thuật Vĩnh Long và Doanh nghiệp trong và ngoài Tỉnh để nâng cao chất lượng đào tạo và giải quyết việc làm cho sinh viên, Hội thảo Khao học tháng 4/2018 với  chủ đề: \"Tăng cường liên kết giữa trường Đại học với doanh nghiệp trong quá trình đào tạo và giải quyết việc làm cho sinh viên\"', '<p>Nhằm tăng cường mối li&ecirc;n kết giữa trường Đại học sư phạm kỹ thuật Vĩnh Long v&agrave; Doanh nghiệp trong v&agrave; ngo&agrave;i Tỉnh để n&acirc;ng cao chất lượng đ&agrave;o tạo v&agrave; giải quyết việc l&agrave;m cho sinh vi&ecirc;n, Hội thảo Khao học th&aacute;ng 4/2018 với&nbsp; chủ đề: &quot;<em>Tăng cường li&ecirc;n kết giữa trường Đại học với doanh nghiệp trong qu&aacute; tr&igrave;nh đ&agrave;o tạo v&agrave; giải quyết việc l&agrave;m cho sinh vi&ecirc;n</em>&quot;</p>\n\n<p>- Thời gian:&nbsp;14 giờ ng&agrave;y 27/4/2018</p>\n\n<p>- Địa điểm: Hội trường C11</p>\n\n<p>- Thanh phần tham dự: L&atilde;nh đạo c&aacute;c doanh nghiệp, l&atilde;nh đạo trường Đại học sư phạm kỹ thuật Vĩnh Long, c&aacute;c c&aacute;n bộ, giảng vi&ecirc;n, sinh vi&ecirc;n,...</p>\n\n<p><img src=\"http://vlute.edu.vn/images/2018/pdf/hoi_thao_khoa_hoc_4_2018-1.jpg\" style=\"width:650px\" /></p>\n\n<p>File đ&iacute;nh k&egrave;m:&nbsp;<a href=\"http://vlute.edu.vn/images/2018/pdf/hoi_thao_khoa_hoc_4_2018.pdf\" target=\"_blank\">Kế hoạch tổ chức hội thảo khoa học 4/2018</a></p>\n', 'hoi-thao-khao-hoc-thang-42018-voi-chu-de-tang-cuong-lien-ket-giua-truong-dai-hoc-voi-doanh-nghiep-trong-qua-trinh-dao-tao-va-giai-quyet-viec-lam-cho-sinh-vien', 13, '2018-04-27', b'1'),
(7, 'Nghiên cứu ứng dụng công nghệ cao trong sản xuất nông nghiệp', 'images/3egrf%20btr.JPG', 'Chiều 21/4, trường Đại học SPKT Vĩnh Long phối hợp với Công ty cổ phần cơ khí & xây dựng BROSTECH tổ chức buổi báo cáo nghiên cứu về công nghệ cao, thiết bị sản xuất rau quả theo hướng tự động hóa, tương thích điều kiện trồng tại Tây Nam Bộ.', '<p>&nbsp;<strong><em>Chiều 21/4, trường Đại học SPKT Vĩnh Long&nbsp;</em></strong><strong><em>phối hợp với</em></strong>&nbsp;<strong><em>C</em></strong><strong><em>&ocirc;ng ty cổ phần cơ kh&iacute;&nbsp;</em></strong><strong><em>&amp;&nbsp;</em></strong><strong><em>x&acirc;y dựng BROSTECH tổ chức buổi b&aacute;o c&aacute;o nghi&ecirc;n cứu về c&ocirc;ng nghệ cao, thiết bị sản xuất rau quả theo hướng&nbsp;</em></strong><strong><em>tự động h&oacute;a,&nbsp;</em></strong><strong><em>tương th&iacute;ch điều kiện trồng tại T&acirc;y Nam Bộ.</em></strong></p>\n\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Buổi b&aacute;o c&aacute;o với sự tham dự của PGS.TS Cao H&ugrave;ng Phi - Hiệu trưởng, TS. Nguyễn Thanh T&ugrave;ng - P.Hiệu trưởng, TS. L&ecirc; Hồng Kỳ - P. Hiệu trưởng v&agrave; qu&yacute; giảng vi&ecirc;n đến từ c&aacute;c ph&ograve;ng, khoa, bộ m&ocirc;n của trường c&ugrave;ng nh&oacute;m nghi&ecirc;n cứu đến từ c&ocirc;ng ty BROSTECH.</p>\n\n<p><img alt=\"2\" src=\"http://vlute.edu.vn/images/2018/duc/THANG04/2104BROSTECH/2.JPG\" style=\"height:277px; width:600px\" /></p>\n\n<p><em>Ứng dụng kỹ thuật v&agrave;o thực tiễn sản xuất được l&atilde;nh đạo quan t&acirc;m thực hiện</em></p>\n\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nhằm thực hiện hỗ trợ người n&ocirc;ng d&acirc;n sản xuất v&agrave; ph&aacute;t triển trong n&ocirc;ng nghiệp theo hướng c&ocirc;ng nghệ cao ph&ugrave; hợp với điều kiện tại T&acirc;y Nam Bộ, nh&oacute;m nghi&ecirc;n cứu của c&ocirc;ng ty BROSTECH đ&atilde; tr&igrave;nh b&agrave;i b&aacute;o c&aacute;o về những nội dung: nghi&ecirc;n cứu x&acirc;y dựng phương &aacute;n xới đất v&agrave; l&ecirc;n liếp (luống), thiết kế chế tạo v&agrave; lập tr&igrave;nh hệ thống tưới nước v&agrave; b&oacute;n ph&acirc;n tự động trong nh&agrave; lưới, thiết kế x&acirc;y dựng lặp đặt hệ thống vườn sản xuất h&agrave;nh h&agrave;nh t&iacute;m c&ocirc;ng nghệ cao cơ giới h&oacute;a, tự động h&oacute;a v&agrave; x&acirc;y dựng phương &aacute;n thu hoạch h&agrave;nh c&ocirc;ng nghệ cao.</p>\n\n<p><img alt=\"3\" src=\"http://vlute.edu.vn/images/2018/duc/THANG04/2104BROSTECH/3.JPG\" style=\"height:276px; width:600px\" /></p>\n\n<p><em>Nh&agrave; khoa học - Nh&agrave; doanh nghiệp kết hợp trong ph&aacute;t triển n&ocirc;ng nghiệp th&ocirc;ng minh</em></p>\n\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Qua đ&acirc;y nh&oacute;m đ&atilde; đề ra nhiều phương &aacute;n c&ugrave;ng hợp t&aacute;c với nh&agrave; trường để đưa ra nhiều kế hoạch tối ưu để ứng dụng đưa v&agrave;o đời sống nhằm hỗ trợ cho b&agrave; con n&ocirc;ng d&acirc;n n&acirc;ng cao năng suất lao động, chất lượng sản phẩm, ph&ograve;ng tr&aacute;nh được nhiều rủi ro trong thiệt hai khi sản xuất, qua đ&oacute; từng bước x&acirc;y dựng một nền n&ocirc;ng nghiệp th&ocirc;ng minh.</p>\n', 'nghien-cuu-ung-dung-cong-nghe-cao-trong-san-xuat-nong-nghiep', 12, '2018-04-21', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `baiviet_chuyenmuc`
--

CREATE TABLE `baiviet_chuyenmuc` (
  `IDBVCM` bigint(20) NOT NULL,
  `IDBV` bigint(20) DEFAULT NULL,
  `IDCM` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baiviet_chuyenmuc`
--

INSERT INTO `baiviet_chuyenmuc` (`IDBVCM`, `IDBV`, `IDCM`) VALUES
(1, 1, 19),
(2, 2, 19),
(3, 3, 19),
(4, 4, 19),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `baiviet_nguoidung`
--

CREATE TABLE `baiviet_nguoidung` (
  `IDBVND` bigint(20) NOT NULL,
  `IDBV` bigint(20) DEFAULT NULL,
  `IDND` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `baiviet_tukhoa`
--

CREATE TABLE `baiviet_tukhoa` (
  `IDTKBV` bigint(20) NOT NULL,
  `IDKHOA` bigint(20) DEFAULT NULL,
  `IDBV` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baiviet_tukhoa`
--

INSERT INTO `baiviet_tukhoa` (`IDTKBV`, `IDKHOA`, `IDBV`) VALUES
(5, 5, 1),
(6, 5, 2),
(7, 5, 3),
(8, 5, 4),
(9, 0, 5),
(10, 0, 6),
(11, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `baocaotiendo`
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
-- Table structure for table `baokhoahoc`
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
-- Table structure for table `bieumau`
--

CREATE TABLE `bieumau` (
  `IDBM` bigint(20) NOT NULL,
  `MABM` text,
  `TENBM` text,
  `FILE` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bieumau`
--

INSERT INTO `bieumau` (`IDBM`, `MABM`, `TENBM`, `FILE`) VALUES
(30, '', 'Biên bản thanh lý', '1527164191-bien-ban-thanh-ly.doc'),
(31, '', 'Đơn huỷ đề tài', '1527164280-don-huy-de-tai.doc'),
(32, '', 'Đơn xin đổi chủ nhiệm - Thành viên đề tài', '1527164335-don-xin-doi-chu-nhiem-thanh-vien-de-tai.docx'),
(33, '', 'Đơn xin gia hạn đề tài', '1527164356-don-xin-gia-han-de-tai.docx'),
(34, '', 'Hợp đồng nghiên cứu', '1527164405-hop-dong-nghien-cuu.doc'),
(35, 'BM-NC-01B-00', 'Phiếu đăng ký đề tài - Sinh viên', '1527164481-m01---phieu-dang-ky-de-tai---sv.doc'),
(36, 'BM-NC-01A-00', 'Phiếu đăng ký đề tài', '1527164579-m01---phieu-dang-ky-de-tai.doc'),
(37, 'BM-NC-02B-00', 'Đề cương đề tài - Sinh viên', '1527164624-m02---de-cuong-de-tai---sv.doc'),
(38, 'BM-NC-02A-00', 'Đề cương đề tài', '1527164660-m02---de-cuong-de-tai.doc'),
(39, 'BM-NC-03-00', 'Phiếu đánh giá đề cương', '1527164853-m03-phieu-danh-gia-de-cuong.docx'),
(40, 'BM-NC-04-00', 'Biên bản xét duyệt', '1527164884-m04-bien-ban-xet-duyet.docx'),
(41, 'BM-NC-05-00', 'Báo cáo tiến độ thực hiện đề tài', '1527164927-m05--bao-cao-tien-do-thuc-hien-de-tai.doc'),
(42, 'BM-NC-06-00', 'Thuyết minh đề tài', '1527164951-m06--thuyet-minh-de-tai.doc'),
(43, 'BM-NC-07-00', 'Phiếu nhận xét đánh giá phản biện', '1527164995-m07--phieu-nhan-xet-danh-gia-phan-bien.doc'),
(44, 'BM-NC-08-00', 'Phiếu đánh giá nghiệm thu', '1527165039-m08---phieu-danh-gia-nghiem-thu.doc'),
(45, 'BM-NC-09-00', 'Biên bản tổng hợp nghiệm thu', '1527165078-m09--bien-ban-tong-hop-nghiem-thu.doc'),
(46, 'BM-NC-10-00', 'Bảng kê chi tiền cho người tham dự hội nghị', '1527165132-m10--bang-ke-chi-tien-cho-nguoi-tham-du-hoi-nghi.doc'),
(47, 'BM-NC-11B-00', 'Phiếu giao sản phẩm KHCN (thiết bị)', '1527165192-m11--phieu-giao-nhan-sp-khcn-thiet-bi-.doc'),
(48, 'BM-NC-11A-00', 'Phiếu giao nhận sản phẩm KHCN', '1527165303-m11--phieu-giao-nhan-sp-khcn.doc'),
(49, 'BM-NC-12A-00', 'Phiếu xác nhận ứng dụng KHCN - XHNV', '1527165379-m12--phieu-xac-nhan-ung-dung-khcn---xhnv.doc'),
(50, 'BM-NC-12B-00', 'Phiếu xác nhận ứng dụng KHKT', '1527165591-m12--phieu-xac-nhan-ung-dung-khkt.doc'),
(51, '', 'Phụ lục hợp đồng nghiên cứu', '1527165627-phu-luc-hop-dong-nghien-cuu.doc'),
(52, '', 'Quyết định công nhận', '1527165671-quyet-dinh-cong-nhan.doc');

-- --------------------------------------------------------

--
-- Table structure for table `caidat`
--

CREATE TABLE `caidat` (
  `IDCD` bigint(20) NOT NULL,
  `mail` text,
  `passmail` text,
  `portmail` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caidat`
--

INSERT INTO `caidat` (`IDCD`, `mail`, `passmail`, `portmail`) VALUES
(1, 'vlutelibktv@gmail.com', 'vlutelibktv@2017', 587);

-- --------------------------------------------------------

--
-- Table structure for table `capbaibao`
--

CREATE TABLE `capbaibao` (
  `IDC` bigint(20) NOT NULL,
  `TENCAP` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `capbaibao`
--

INSERT INTO `capbaibao` (`IDC`, `TENCAP`) VALUES
(1, 'Cấp quốc gia'),
(2, 'Cấp thế giới');

-- --------------------------------------------------------

--
-- Table structure for table `capdetai`
--

CREATE TABLE `capdetai` (
  `IDC` bigint(20) NOT NULL,
  `TENCAP` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `capdetai`
--

INSERT INTO `capdetai` (`IDC`, `TENCAP`) VALUES
(3, 'Cấp trường'),
(4, 'Cấp trường trọng điểm'),
(5, 'Cấp tỉnh'),
(6, 'Cấp bộ');

-- --------------------------------------------------------

--
-- Table structure for table `chucdanhgiangvien`
--

CREATE TABLE `chucdanhgiangvien` (
  `IDCD` bigint(20) NOT NULL,
  `TENCHUCDANH` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chucdanhgiangvien`
--

INSERT INTO `chucdanhgiangvien` (`IDCD`, `TENCHUCDANH`) VALUES
(1, 'Giảng viên hạng AI'),
(2, 'Giảng viên hạng AII'),
(5, 'Giangr viên hạng III');

-- --------------------------------------------------------

--
-- Table structure for table `chucdanhkhoahoc`
--

CREATE TABLE `chucdanhkhoahoc` (
  `IDCD` bigint(20) NOT NULL,
  `TENCHUCDANH` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chucdanhkhoahoc`
--

INSERT INTO `chucdanhkhoahoc` (`IDCD`, `TENCHUCDANH`) VALUES
(1, 'Giáo sư'),
(3, 'Phó giáo sư');

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `IDCV` bigint(20) NOT NULL,
  `TENCHUCVU` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`IDCV`, `TENCHUCVU`) VALUES
(2, 'Phó khoa'),
(4, 'Phó phòng'),
(5, 'Trưởng khoa'),
(6, 'Trưởng phòng'),
(7, 'Giảng viên');

-- --------------------------------------------------------

--
-- Table structure for table `chuyenmuc`
--

CREATE TABLE `chuyenmuc` (
  `IDCM` bigint(20) NOT NULL,
  `TENCM` varchar(200) DEFAULT NULL,
  `MOTACM` varchar(200) DEFAULT NULL,
  `LINKCM` varchar(200) DEFAULT NULL,
  `LOAICHUYENMUC` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuyenmuc`
--

INSERT INTO `chuyenmuc` (`IDCM`, `TENCM`, `MOTACM`, `LINKCM`, `LOAICHUYENMUC`) VALUES
(1, 'Tin tức', 'Trang hiển thị các tin tức', 'tin-tuc', 'tintuc'),
(15, 'Sự kiện', 'Trang chuyên sự kiện', 'su-kien-cm', 'tintuc'),
(16, 'Công nghệ mới', 'Trang chuyên về công nghệ', 'cong-nghe', 'tintuc'),
(17, 'Khám phá', 'Trang khám phá', 'kham-pha-cm', 'tintuc'),
(18, 'Đời sống', 'Trang đời sống', 'doi-song', 'tintuc'),
(19, 'Hoạt động hợp tác quốc tế', 'Trang hoạt động hợp tác quốc tế', 'hoat-dong-hop-tac-quoc-te', 'hoptacquocte'),
(23, 'Dự án hợp tác', 'Các dự án hợp tác', 'du-an-hop-tac-cm', 'hoptacquocte');

-- --------------------------------------------------------

--
-- Table structure for table `congtacchuyenmon`
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
-- Table structure for table `daihoc`
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
-- Table structure for table `detai`
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

--
-- Dumping data for table `detai`
--

INSERT INTO `detai` (`IDDT`, `MADETAI`, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `MOISANGTAO`, `THUOCCHUONGTRINH`, `SUCANTHIET`, `TINHHINHNGHIENCUU`, `NGHIENCUULIENQUAN`, `PHUONGPHAPKYTHUAT`, `KINHPHINGANSACH`, `KINHPHINGUONKHAC`, `THANGTHUCHIEN`, `THANGNAMBD`, `THANGNAMKT`, `KETQUA`, `FILE`, `NGAYTHEM`, `TRANGTHAI`, `DIEM`, `THOIGIANNGHIEMTHU`, `DUYET`) VALUES
(1, 'NCKH.2014.01', 'Biên soạn ngân hàng câu hỏi trắc nghiệm môn Vật lý đại cương (Hệ cao đẳng)', '', '', 'Cấp trường', '', '', '', '', '', '', '0', '0', 3, '2018-05', '2018-06', '', '', '2018-05-25 15:14:30', 'Đã nghiệm thu', 80, '2014-05-17', b'1'),
(2, 'NCKH.2014.02', 'Ứng dụng phần mềm Test Pro 6.0 trộn đề thi trắc nghiệm Vật lý đại cương', '', '', 'Cấp trường', '', '', '', '', '', '', '0', '0', 5, '2014-02', '2014-07', '', '', '2018-05-25 15:24:28', 'Đã nghiệm thu', 78, '2014-05-26', b'1'),
(3, 'NCKH.2014.03', 'Nghiên cứu phương pháp vẽ nhanh biểu đồ nội lực trong môn học sức bền vật liệu', '', '', 'Cấp trường', '', '', '', '', '', '', '0', '0', 2, '2014-09', '2011-11', '', '', '2018-05-25 15:27:32', 'Đã nghiệm thu', 78, '2014-11-19', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `dexuatdetai`
--

CREATE TABLE `dexuatdetai` (
  `IDDX` bigint(20) NOT NULL,
  `IDDT` bigint(20) NOT NULL,
  `NGAYDEXUAT` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dexuatdetai`
--

INSERT INTO `dexuatdetai` (`IDDX`, `IDDT`, `NGAYDEXUAT`) VALUES
(1, 1, '2018-05-25 15:14:30'),
(2, 2, '2018-05-25 15:24:28'),
(3, 3, '2018-05-25 15:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `hocvi`
--

CREATE TABLE `hocvi` (
  `IDHV` bigint(20) NOT NULL,
  `TENHOCVI` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hocvi`
--

INSERT INTO `hocvi` (`IDHV`, `TENHOCVI`) VALUES
(1, 'Tiến sĩ'),
(3, 'Thạc sĩ');

-- --------------------------------------------------------

--
-- Table structure for table `kehoachxetchonnghiemthu`
--

CREATE TABLE `kehoachxetchonnghiemthu` (
  `IDKHXC` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `THANG` int(11) DEFAULT NULL,
  `NAM` int(11) DEFAULT NULL,
  `LOAI` bit(1) DEFAULT NULL COMMENT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khoabomon`
--

CREATE TABLE `khoabomon` (
  `IDKBM` int(11) NOT NULL,
  `TENKBM` varchar(200) NOT NULL,
  `TENTAT` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khoabomon`
--

INSERT INTO `khoabomon` (`IDKBM`, `TENKBM`, `TENTAT`) VALUES
(1, 'Khoa Công nghệ thông tin', 'Khoa CNTT'),
(3, 'Khoa Khoa học cơ bản', 'Khoa CB'),
(4, 'Khoa Lý luận chính trị', 'Khoa LLCT'),
(5, 'Khoa Cơ khí Động lực', 'Khoa CKĐL'),
(6, 'Khoa Cơ khí Chế tạo máy', 'Khoa CK CTM'),
(7, 'Khoa Điện - Điện tử', 'Khoa Đ-ĐT'),
(8, 'Khoa Sư phạm', 'Khoa SP'),
(9, 'Khoa Công nghệ thực phẩm', 'Khoa CNTP'),
(10, 'Bộ môn Giáo dục thể chất và Giáo dục quốc phòng', 'Bộ môn GDTC & GDQP'),
(11, 'Bộ môn Ngoại ngữ', 'Bộ môn NN'),
(13, 'Phòng Đào tạo', 'PĐT'),
(14, 'Phòng Tổ chức – Hành chính', 'Phòng TC-HC'),
(15, 'Phòng Kế toán – Tài vụ', 'KT-TV'),
(16, 'Phòng Nghiên cứu khoa học và Hợp tác quốc tế', 'Phòng NCKH & HTQT'),
(17, 'Phòng Quản trị - Thiết bị', 'Phòng QT-TB'),
(18, 'Phòng Công tác Học sinh – Sinh viên', 'Phòng CT HSSV'),
(19, 'Phòng Thanh tra', 'Phòng TT'),
(20, 'Phòng Khảo thí và Đảm bảo chất lượng giáo dục', 'Phòng KT ĐBCLGD'),
(22, 'Ban giám hiệu', 'Ban giám hiệu');

-- --------------------------------------------------------

--
-- Table structure for table `kinhphi`
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
-- Dumping data for table `kinhphi`
--

INSERT INTO `kinhphi` (`IDKP`, `IDDT`, `KHOANCHI`, `NGUONNSNN`, `NGUONTUCO`, `NGUONLIENKET`) VALUES
(1, 1, 'Chi thuê khoán chuyên môn', '0', '0', '0'),
(2, 1, 'Chi mua nguyên vật liệu', '0', '0', '0'),
(3, 1, 'Chi sửa chữa, mua sắm TSCĐ', '0', '0', '0'),
(4, 2, 'Chi thuê khoán chuyên môn', '0', '0', '0'),
(5, 2, 'Chi mua nguyên vật liệu', '0', '0', '0'),
(6, 2, 'Chi sửa chữa, mua sắm TSCĐ', '0', '0', '0'),
(7, 3, 'Chi thuê khoán chuyên môn', '0', '0', '0'),
(8, 3, 'Chi mua nguyên vật liệu', '0', '0', '0'),
(9, 3, 'Chi sửa chữa, mua sắm TSCĐ', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `linhvuc`
--

CREATE TABLE `linhvuc` (
  `IDLV` bigint(20) NOT NULL,
  `TENLINHVUC` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `linhvuc`
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
-- Table structure for table `linhvuckhoahoc`
--

CREATE TABLE `linhvuckhoahoc` (
  `IDLV` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `TENLV` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `linhvuckhoahoc`
--

INSERT INTO `linhvuckhoahoc` (`IDLV`, `IDDT`, `TENLV`) VALUES
(1, 1, 'Khoa học tự nhiên'),
(2, 2, 'Khoa học tự nhiên'),
(3, 3, 'Khoa học tự nhiên');

-- --------------------------------------------------------

--
-- Table structure for table `loaihinh`
--

CREATE TABLE `loaihinh` (
  `IDLH` bigint(20) NOT NULL,
  `TENLOAI` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaihinh`
--

INSERT INTO `loaihinh` (`IDLH`, `TENLOAI`) VALUES
(4, 'Nghiên cứu cơ bản'),
(5, 'Nghiên cứu ứng dụng'),
(6, 'Triển khai thực nghiệm');

-- --------------------------------------------------------

--
-- Table structure for table `loaihinhnghiencuu`
--

CREATE TABLE `loaihinhnghiencuu` (
  `IDLH` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `TENLH` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaihinhnghiencuu`
--

INSERT INTO `loaihinhnghiencuu` (`IDLH`, `IDDT`, `TENLH`) VALUES
(1, 1, 'Nghiên cứu cơ bản'),
(2, 2, 'Nghiên cứu cơ bản'),
(3, 3, 'Nghiên cứu cơ bản');

-- --------------------------------------------------------

--
-- Table structure for table `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `IDLTK` bigint(20) NOT NULL,
  `TENLTK` varchar(100) DEFAULT NULL,
  `TENCHITIETLTK` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`IDLTK`, `TENLTK`, `TENCHITIETLTK`) VALUES
(1, 'admin', 'Quản trị viên'),
(2, 'binhthuong', 'Giáo viên'),
(3, 'truongkhoaphong', 'Trưởng khoa / phòng'),
(5, 'khoahoc', 'Nhóm quản lý khoa học');

-- --------------------------------------------------------

--
-- Table structure for table `loaitaikhoan_nguoidung`
--

CREATE TABLE `loaitaikhoan_nguoidung` (
  `IDLTKND` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDLTK` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaitaikhoan_nguoidung`
--

INSERT INTO `loaitaikhoan_nguoidung` (`IDLTKND`, `IDND`, `IDLTK`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 5),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 2),
(12, 12, 2),
(13, 13, 3),
(14, 14, 2),
(15, 15, 2),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 2),
(21, 21, 2),
(22, 22, 2),
(23, 23, 2),
(24, 24, 2),
(25, 25, 2),
(26, 26, 2),
(27, 27, 3),
(28, 28, 3),
(29, 29, 2),
(30, 30, 2),
(31, 31, 2),
(32, 32, 2),
(33, 33, 2),
(34, 34, 2),
(35, 35, 2),
(36, 36, 2),
(37, 37, 2),
(38, 38, 2),
(39, 39, 2),
(40, 40, 2),
(41, 41, 2),
(42, 42, 2),
(43, 43, 3),
(44, 44, 2),
(45, 45, 2),
(46, 46, 3),
(47, 47, 2),
(48, 48, 2),
(49, 49, 2),
(50, 50, 2),
(51, 51, 2),
(52, 52, 2),
(53, 53, 2),
(54, 54, 2),
(55, 55, 2),
(56, 56, 2),
(57, 57, 2),
(58, 58, 2),
(59, 59, 2),
(60, 60, 2),
(61, 61, 2),
(62, 62, 2),
(63, 63, 2),
(64, 64, 2),
(65, 65, 2),
(66, 66, 2),
(67, 67, 2),
(68, 68, 2),
(69, 69, 2),
(70, 70, 2),
(71, 71, 2),
(72, 72, 2),
(73, 73, 3),
(74, 74, 3),
(75, 75, 3),
(76, 76, 2),
(77, 77, 2),
(78, 78, 2),
(79, 79, 2),
(80, 80, 2),
(81, 81, 2),
(82, 82, 2),
(83, 83, 2),
(84, 84, 2),
(85, 85, 2),
(86, 86, 2),
(87, 87, 2),
(88, 88, 2),
(89, 89, 2),
(90, 90, 2),
(91, 91, 2),
(92, 92, 2),
(93, 93, 2),
(94, 94, 2),
(95, 95, 2),
(96, 96, 2),
(97, 97, 2),
(98, 98, 2),
(99, 99, 2),
(100, 100, 2),
(101, 101, 2),
(102, 102, 2),
(103, 103, 2),
(104, 104, 2),
(105, 105, 2),
(106, 106, 2),
(107, 107, 2),
(108, 108, 2),
(109, 109, 2),
(110, 110, 2),
(111, 111, 2),
(112, 112, 2),
(113, 113, 2),
(114, 114, 2),
(115, 115, 2),
(116, 116, 2),
(117, 117, 2),
(118, 118, 2),
(119, 119, 2),
(120, 120, 2),
(121, 121, 2),
(122, 122, 2),
(123, 123, 3),
(124, 124, 3),
(125, 125, 2),
(126, 126, 2),
(127, 127, 2),
(128, 128, 2),
(129, 129, 2),
(130, 130, 2),
(131, 131, 2),
(132, 132, 2),
(133, 133, 2),
(134, 134, 2),
(135, 135, 2),
(136, 136, 2),
(137, 137, 2),
(138, 138, 2),
(139, 139, 2),
(140, 140, 3),
(141, 141, 2),
(142, 142, 2),
(143, 143, 2),
(144, 144, 2),
(145, 145, 3),
(146, 146, 3),
(147, 147, 2),
(148, 148, 2),
(149, 149, 2),
(150, 150, 2),
(151, 151, 2),
(152, 152, 2),
(153, 153, 2),
(154, 154, 2),
(155, 155, 2),
(156, 156, 2),
(157, 157, 2),
(158, 158, 2),
(159, 159, 2),
(160, 160, 2),
(161, 161, 2),
(162, 162, 2),
(163, 163, 2),
(164, 164, 2),
(165, 165, 2),
(166, 166, 2),
(167, 167, 2),
(168, 168, 2),
(169, 169, 2),
(171, 171, 2),
(174, 174, 2),
(175, 175, 2),
(176, 176, 2),
(177, 177, 2),
(178, 178, 2),
(179, 179, 2),
(180, 180, 2),
(181, 181, 2),
(182, 182, 2),
(183, 183, 2),
(184, 184, 2),
(185, 185, 3),
(186, 186, 3),
(187, 187, 2),
(188, 188, 2),
(191, 191, 2),
(192, 192, 2),
(193, 193, 2),
(194, 194, 2),
(195, 195, 2),
(196, 196, 2),
(197, 197, 3),
(198, 198, 3),
(200, 200, 2),
(201, 201, 2),
(202, 202, 2),
(203, 203, 2),
(204, 204, 2),
(206, 206, 3),
(207, 207, 2),
(211, 211, 2),
(212, 212, 2),
(213, 213, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ngoaingu`
--

CREATE TABLE `ngoaingu` (
  `IDNN` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `TENNGOAINGU` varchar(100) DEFAULT NULL,
  `MUCDOSUDUNG` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
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
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`IDND`, `HO`, `TEN`, `GIOITINH`, `NGAYSINH`, `NOISINH`, `QUEQUAN`, `DANTOC`, `NAMNUOCHOCVI`, `NAMBONHIEM`, `CHOORIENG`, `DIENTHOAICQ`, `DIENTHOAINR`, `DIENTHOAIDD`, `FAX`, `MAIL`, `THACSICHUYENNGANH`, `NAMCAPBANGTSCN`, `NOIDAOTAOTSCN`, `TIENSICHUYENNGANH`, `NAMCAPBANGTSCN2`, `NOIDAOTAOTSCN2`, `TENLUANAN`, `TENDANGNHAP`, `MATKHAU`, `HINH`, `TRANGTHAI`, `XACNHAN`, `TOKEN`) VALUES
(1, 'Ngô Thanh', 'Lý', 'Nam', '1996-01-06', 'Vĩnh Long', 'Vĩnh Long', '', '', '', 'Vĩnh Long', '', '', '01214967197', '', 'lythanhngodev@gmail.com', 'Công nghệ thông tin', '1996', 'VLUTE', 'Công nghệ thông tin', '1996', 'VLUTE', '', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'binhthuong', b'1', ''),
(2, 'Lê Hồng', 'Kỳ', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kylh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kylh@vlute.edu.vn', '727686db9184c20da110ad841418e602', 'user.png', 'binhthuong', b'1', NULL),
(3, 'Đoàn Ngọc', 'Tố', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'todn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'todn@vlute.edu.vn', 'ff61067db5ad009ceb4b46fb9b3e4e67', 'user.png', 'binhthuong', b'1', NULL),
(4, 'Nguyễn Hạt Quế', 'Mơ', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'monhq@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'monhq@vlute.edu.vn', '9fc9cfcee37e0fda9f4fad1262b94056', 'user.png', 'binhthuong', b'1', NULL),
(5, 'Nguyễn Văn', 'Tâm', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamnv63@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamnv63@vlute.edu.vn', 'e5110d330a01c56baa957b84da6165ad', 'user.png', 'binhthuong', b'1', NULL),
(6, 'Lê Thị', 'Tâm', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamlt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamlt@vlute.edu.vn', 'e5110d330a01c56baa957b84da6165ad', 'user.png', 'binhthuong', b'1', NULL),
(7, 'Nguyễn Văn', 'Thiên', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thiennv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thiennv@vlute.edu.vn', 'cd15ba812a1733a9310c7c9dfd8a8ac9', 'user.png', 'binhthuong', b'1', NULL),
(8, 'Nguyễn Thị Thanh', 'Thảo', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thaontt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thaontt@vlute.edu.vn', 'e676123250f72236b80ff385aae16a5a', 'user.png', 'binhthuong', b'1', NULL),
(9, 'Vũ Trung', 'Kiên', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kienvt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kienvt@vlute.edu.vn', '08773f9cd36c7e84c14b8b798a093d65', 'user.png', 'binhthuong', b'1', NULL),
(10, 'Nguyễn Thị', 'Ràng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rangnt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rangnt@vlute.edu.vn', '0700e8a0df1a1f9a409a30b8edd0e154', 'user.png', 'binhthuong', b'1', NULL),
(11, 'Nguyễn Thị Mỹ', 'Linh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linhntm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linhntm@vlute.edu.vn', '028139ff78aea9fe9f380c5be8cd9e6e', 'user.png', 'binhthuong', b'1', NULL),
(12, 'Trương Thị Thúy', 'Vân', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vanttt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vanttt@vlute.edu.vn', '9e3b8da7981b2bbc846b5d15a8a0a252', 'user.png', 'binhthuong', b'1', NULL),
(13, 'Nguyễn Hồng', 'Tâm', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamnh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamnh@vlute.edu.vn', 'e5110d330a01c56baa957b84da6165ad', 'user.png', 'binhthuong', b'1', NULL),
(14, 'Vũ Mộng', 'Long', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'longvm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'longvm@vlute.edu.vn', 'a8f18ded442e5ff468bc8afaf0ba58ba', 'user.png', 'binhthuong', b'1', NULL),
(15, 'Trương Công', 'Nghiệp', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nghieptc@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nghieptc@vlute.edu.vn', '01a282859eb7a4105b23174e79ccf4aa', 'user.png', 'binhthuong', b'1', NULL),
(16, 'Phạm Văn', 'Dương', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'duongpv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'duongpv@vlute.edu.vn', '6efd553d8f3e119adecfe5329eeef88c', 'user.png', 'binhthuong', b'1', NULL),
(17, 'Võ Phước', 'Hậu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hauvp@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hauvp@vlute.edu.vn', 'c58b9950249e71310c62cc1a8c060d26', 'user.png', 'binhthuong', b'1', NULL),
(18, 'Lê Doãn', 'Duy', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'duyld@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'duyld@vlute.edu.vn', 'e6395f99a2ab6df4a88d9f9a2321c52c', 'user.png', 'binhthuong', b'1', NULL),
(19, 'La Thị', 'Hằng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hanglt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hanglt@vlute.edu.vn', '8910db2fb509aab8f5fe7fb69bf1b165', 'user.png', 'binhthuong', b'1', NULL),
(20, 'Lê Thị Thu', 'Thùy', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuyltt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuyltt@vlute.edu.vn', '4ca914004f4a3101b6339b58e5de0c99', 'user.png', 'binhthuong', b'1', NULL),
(21, 'Lê Xuân', 'Thùy', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuylx@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuylx@vlute.edu.vn', '4ca914004f4a3101b6339b58e5de0c99', 'user.png', 'binhthuong', b'1', NULL),
(22, 'Trần Văn', 'Thanh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thanhtv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thanhtv@vlute.edu.vn', 'ba158f9c8c27649c71786b74006a9808', 'user.png', 'binhthuong', b'1', NULL),
(23, 'Nguyễn Thành', 'Luận', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'luantt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'luantt@vlute.edu.vn', 'aedb9b08613de9c19d1efd643c72b1b4', 'user.png', 'binhthuong', b'1', NULL),
(24, 'Phạm Như', 'Thuận', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuanpn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuanpn@vlute.edu.vn', '695ba43d63b7f9ccd842c721b836ab38', 'user.png', 'binhthuong', b'1', NULL),
(25, 'Nguyễn Hoàng', 'Anh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anh_nh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anh_nh@vlute.edu.vn', '2b6010ae6175098e9cc01b516ca5802d', 'user.png', 'binhthuong', b'1', NULL),
(26, 'Nguyễn Đức', 'Hải', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'haind@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'haind@vlute.edu.vn', '765066701e4249def505221fcdb70610', 'user.png', 'binhthuong', b'1', NULL),
(27, 'Nguyễn Thái', 'Vân', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vannt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vannt@vlute.edu.vn', '9e3b8da7981b2bbc846b5d15a8a0a252', 'user.png', 'binhthuong', b'1', NULL),
(28, 'Đặng Duy', 'Khiêm', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khiemdd@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khiemdd@vlute.edu.vn', 'a35d90775da1c25a2d5a26b65cea75f4', 'user.png', 'binhthuong', b'1', NULL),
(29, 'Cao Hùng', 'Phi', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'caohungphi@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'caohungphi@vlute.edu.vn', '9e8e514f1829ac5b700ad32464e29221', 'user.png', 'binhthuong', b'1', NULL),
(30, 'Nguyễn Thanh', 'Tùng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tungnt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tungnt@vlute.edu.vn', 'b127865843e794e64e9962d312c2b349', 'user.png', 'binhthuong', b'1', NULL),
(31, 'Dư Quốc', 'Thịnh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thinhdq@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thinhdq@vlute.edu.vn', '578f1deba58c1127f9254e77c6053638', 'user.png', 'binhthuong', b'1', NULL),
(32, 'Nguyễn Công', 'Khải', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khainc@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khainc@vlute.edu.vn', 'f172302a311a151899d47d0f88bc77c9', 'user.png', 'binhthuong', b'1', NULL),
(33, 'Hà Văn', 'Trọng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tronghv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tronghv@vlute.edu.vn', 'db9a35817d5cef10459824811d308964', 'user.png', 'binhthuong', b'1', NULL),
(34, 'Lâm Đức', 'Toàn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'toanld@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'toanld@vlute.edu.vn', '23880c27fec1ee6c8ec1910faf09ee8c', 'user.png', 'binhthuong', b'1', NULL),
(35, 'Mai Phước', 'Trải', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'traimp@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'traimp@vlute.edu.vn', '27ec28f112ff0966def5f7e8a5308d80', 'user.png', 'binhthuong', b'1', NULL),
(36, 'Châu Công', 'Hậu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'haucc@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'haucc@vlute.edu.vn', 'c58b9950249e71310c62cc1a8c060d26', 'user.png', 'binhthuong', b'1', NULL),
(37, 'Lương Văn', 'Vạn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vanlv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vanlv@vlute.edu.vn', '9e3b8da7981b2bbc846b5d15a8a0a252', 'user.png', 'binhthuong', b'1', NULL),
(38, 'Đoàn Thanh', 'Sơn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sondt85@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sondt85@vlute.edu.vn', '37ecc55346dd8fb01220fb103b51e0e5', 'user.png', 'binhthuong', b'1', NULL),
(39, 'Võ Thành', 'Lập', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lapvt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lapvt@vlute.edu.vn', '996e5f18094a196213a8f3b037209e18', 'user.png', 'binhthuong', b'1', NULL),
(40, 'Phan Tuấn', 'Kiệt', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kietpt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kietpt@vlute.edu.vn', '5ab2a25fb82f3b059ef69dac09b8e6e2', 'user.png', 'binhthuong', b'1', NULL),
(41, 'Mai Hoàng', 'Long', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'longmh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'longmh@vlute.edu.vn', 'a8f18ded442e5ff468bc8afaf0ba58ba', 'user.png', 'binhthuong', b'1', NULL),
(42, 'Nguyễn Quang', 'Tuyến', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuyennq@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuyennq@vlute.edu.vn', '5912f57b385b6cd264ce176e206f50a5', 'user.png', 'binhthuong', b'1', NULL),
(43, 'Hồ Hữu', 'Chấn', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'chanhh@vlute.edu.vn', '', '', '', '', '', '', '', 'chanhh@vlute.edu.vn', '4a7d597ac4326f6275fcf00533196d70', 'user.png', 'binhthuong', b'1', NULL),
(44, 'Phan Hoàng', 'Sơn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sonph@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sonph@vlute.edu.vn', '37ecc55346dd8fb01220fb103b51e0e5', 'user.png', 'binhthuong', b'1', NULL),
(45, 'Nguyễn Văn', 'Tám', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamck@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamck@vlute.edu.vn', 'e5110d330a01c56baa957b84da6165ad', 'user.png', 'binhthuong', b'1', NULL),
(46, 'Lê Hoàng', 'Anh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anhlh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anhlh@vlute.edu.vn', '2b6010ae6175098e9cc01b516ca5802d', 'user.png', 'binhthuong', b'1', NULL),
(47, 'Mai Đăng', 'Tuấn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuanmd@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuanmd@vlute.edu.vn', '915f3286ee8a46cdbd49af14d9d575f7', 'user.png', 'binhthuong', b'1', NULL),
(48, 'Hoàng Minh', 'Thuận', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuanhm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuanhm@vlute.edu.vn', '695ba43d63b7f9ccd842c721b836ab38', 'user.png', 'binhthuong', b'1', NULL),
(49, 'Trần Vĩnh', 'Hưng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hungtv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hungtv@vlute.edu.vn', '10b9ff3bf7d5a4a8d1ef4a6327d58531', 'user.png', 'binhthuong', b'1', NULL),
(50, 'Hà Minh', 'Hùng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hunghm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hunghm@vlute.edu.vn', '10b9ff3bf7d5a4a8d1ef4a6327d58531', 'user.png', 'binhthuong', b'1', NULL),
(51, 'Ngô Mạnh', 'Dũng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dungnm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dungnm@vlute.edu.vn', '120ad090b9881b555b7e0e8de92001bd', 'user.png', 'binhthuong', b'1', NULL),
(52, 'Nguyễn Đức', 'Thắng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thangnd@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thangnd@vlute.edu.vn', '2d21619b6f23193984273ff272a0a76d', 'user.png', 'binhthuong', b'1', NULL),
(53, 'Lê Trung', 'Hậu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hault@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hault@vlute.edu.vn', 'c58b9950249e71310c62cc1a8c060d26', 'user.png', 'binhthuong', b'1', NULL),
(54, 'Nguyễn Tấn', 'Nó', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nont@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nont@vlute.edu.vn', '85882b27d9c980dae209578cfd31b631', 'user.png', 'binhthuong', b'1', NULL),
(55, 'Trần Đắc', 'Hiền', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hientd@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hientd@vlute.edu.vn', 'ba356be73f40992e5d70bc913f5a40c0', 'user.png', 'binhthuong', b'1', NULL),
(56, 'Tạ Tấn', 'Lực', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'luctt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'luctt@vlute.edu.vn', 'b333052f2e3ff8c727f20b7a56007963', 'user.png', 'binhthuong', b'1', NULL),
(57, 'Nguyễn Văn', 'Dư', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dunv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dunv@vlute.edu.vn', '8521dd20d42b792435fcda93797b7e13', 'user.png', 'binhthuong', b'1', NULL),
(58, 'Nguyễn Hữu', 'Long', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'longnh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'longnh@vlute.edu.vn', 'a8f18ded442e5ff468bc8afaf0ba58ba', 'user.png', 'binhthuong', b'1', NULL),
(59, 'Trần Công', 'Hải', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'haitc@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'haitc@vlute.edu.vn', '765066701e4249def505221fcdb70610', 'user.png', 'binhthuong', b'1', NULL),
(60, 'Trần Hữu', 'Danh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'danhth@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'danhth@vlute.edu.vn', 'd2b91dd4fc1c0a0843d9958be79979b3', 'user.png', 'binhthuong', b'1', NULL),
(61, 'Phạm Hoàng', 'Anh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anhph@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anhph@vlute.edu.vn', '2b6010ae6175098e9cc01b516ca5802d', 'user.png', 'binhthuong', b'1', NULL),
(62, 'Lê Hữu', 'Toàn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'toanlh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'toanlh@vlute.edu.vn', '23880c27fec1ee6c8ec1910faf09ee8c', 'user.png', 'binhthuong', b'1', NULL),
(63, 'Nguyễn Hoàng', 'Thiện', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thiennh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thiennh@vlute.edu.vn', 'cd15ba812a1733a9310c7c9dfd8a8ac9', 'user.png', 'binhthuong', b'1', NULL),
(64, 'Trần Vĩnh', 'Phúc', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phuctv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phuctv@vlute.edu.vn', '40f3edbe92ab15daae1d82a84c82b3b4', 'user.png', 'binhthuong', b'1', NULL),
(65, 'Huỳnh Thanh', 'Tuấn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuanht@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuanht@vlute.edu.vn', '915f3286ee8a46cdbd49af14d9d575f7', 'user.png', 'binhthuong', b'1', NULL),
(66, 'Lê', 'Nhân', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lenhan@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lenhan@vlute.edu.vn', 'ca477163d5f41771cb99c3c19b17b47e', 'user.png', 'binhthuong', b'1', NULL),
(67, 'Nguyễn Thiện', 'Nhựt', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhutnt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhutnt@vlute.edu.vn', '9ec6fb20518fa2dd6b3768f2b5d0342f', 'user.png', 'binhthuong', b'1', NULL),
(68, 'Nguyễn Văn', 'Hến', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hennv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hennv@vlute.edu.vn', '68c30dee301675e9db1ee3ac61486eab', 'user.png', 'binhthuong', b'1', NULL),
(69, 'Phan Hoàng', 'Mau', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mauph@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mauph@vlute.edu.vn', 'd0f9fcf9da91671441fbaf4535000cfb', 'user.png', 'binhthuong', b'1', NULL),
(70, 'Nguyễn Minh', 'Sang', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sangnm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sangnm@vlute.edu.vn', '2bcf12dc76074803023a5f151345fb7d', 'user.png', 'binhthuong', b'1', NULL),
(71, 'Phạm Thiên', 'Phong', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phongpt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phongpt@vlute.edu.vn', 'b4c6a04507dfbf8b71bf1cffacd4690f', 'user.png', 'binhthuong', b'1', NULL),
(72, 'Văn Kim', 'Tố', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tovk@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tovk@vlute.edu.vn', 'ff61067db5ad009ceb4b46fb9b3e4e67', 'user.png', 'binhthuong', b'1', NULL),
(73, 'Nguyễn Văn', 'Minh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'minhnv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'minhnv@vlute.edu.vn', '27500f8ec124385d1605cc35e6aae5e1', 'user.png', 'binhthuong', b'1', NULL),
(74, 'Nguyễn Xuân', 'Vinh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vinhnx@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vinhnx@vlute.edu.vn', '08ad08dd06151c319cc3ca57ed729ae3', 'user.png', 'binhthuong', b'1', NULL),
(75, 'Hồ Minh', 'Trung', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trunghm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trunghm@vlute.edu.vn', '39c8842978ac7cfe5cdb5d55981f5256', 'user.png', 'binhthuong', b'1', NULL),
(76, 'Nguyễn Trọng', 'Tài', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'taipt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'taipt@vlute.edu.vn', '6ec2e5939d095629539c94f3003a2e7b', 'user.png', 'binhthuong', b'1', NULL),
(77, 'Phạm Việt', 'Phương', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phuongpv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phuongpv@vlute.edu.vn', '9be37bdebdb5c7d79fa12e8e1834d264', 'user.png', 'binhthuong', b'1', NULL),
(78, 'Phạm Văn', 'Bình', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'binhpv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'binhpv@vlute.edu.vn', 'ed8209b8e3f1fb61fe6e7ac74f4e282f', 'user.png', 'binhthuong', b'1', NULL),
(79, 'Đỗ Chí', 'Phi', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phidc@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phidc@vlute.edu.vn', '9e8e514f1829ac5b700ad32464e29221', 'user.png', 'binhthuong', b'1', NULL),
(80, 'Nguyễn Duy', 'Khiêm', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khiemnd@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khiemnd@vlute.edu.vn', 'a35d90775da1c25a2d5a26b65cea75f4', 'user.png', 'binhthuong', b'1', NULL),
(81, 'Lê Thái', 'Hiệp', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hieplt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hieplt@vlute.edu.vn', '8c32592748a4548b9553feff6372cc22', 'user.png', 'binhthuong', b'1', NULL),
(82, 'Phan Ngọc', 'Linh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linhpn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linhpn@vlute.edu.vn', '028139ff78aea9fe9f380c5be8cd9e6e', 'user.png', 'binhthuong', b'1', NULL),
(83, 'Nguyễn Hữu', 'Thọ', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thonh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thonh@vlute.edu.vn', 'b2569ee84ff07a082794c880b4e92cc6', 'user.png', 'binhthuong', b'1', NULL),
(84, 'Nguyễn Toàn', 'Tri', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trint@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trint@vlute.edu.vn', '1e0d2f6037c400abf4935db547cd86fb', 'user.png', 'binhthuong', b'1', NULL),
(85, 'Lâm Minh', 'Dũng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dunglm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dunglm@vlute.edu.vn', '120ad090b9881b555b7e0e8de92001bd', 'user.png', 'binhthuong', b'1', NULL),
(86, 'Nguyễn Đức', 'Thành', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thanhnd@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thanhnd@vlute.edu.vn', 'ba158f9c8c27649c71786b74006a9808', 'user.png', 'binhthuong', b'1', NULL),
(87, 'Đặng Thành', 'Tựu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuudt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuudt@vlute.edu.vn', '04e607bd524b060d38f1891b6cdbc5c3', 'user.png', 'binhthuong', b'1', NULL),
(88, 'Biện Công', 'Long', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'longbc@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'longbc@vlute.edu.vn', 'a8f18ded442e5ff468bc8afaf0ba58ba', 'user.png', 'binhthuong', b'1', NULL),
(89, 'Lê Minh', 'Thành', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thanhlm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thanhlm@vlute.edu.vn', 'ba158f9c8c27649c71786b74006a9808', 'user.png', 'binhthuong', b'1', NULL),
(90, 'Mai Nhật', 'Thiên', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hieenthienmn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hieenthienmn@vlute.edu.vn', 'cd15ba812a1733a9310c7c9dfd8a8ac9', 'user.png', 'binhthuong', b'1', NULL),
(91, 'Lê Thị Kiều', 'Mai', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mailtk@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mailtk@vlute.edu.vn', '5cfda926720ded51ee16bbe4a6eeb0fb', 'user.png', 'binhthuong', b'1', NULL),
(92, 'Nguyễn Thái', 'Sơn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sonnt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sonnt@vlute.edu.vn', '37ecc55346dd8fb01220fb103b51e0e5', 'user.png', 'binhthuong', b'1', NULL),
(93, 'Lê Khắc', 'Thịnh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thinhlk@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thinhlk@vlute.edu.vn', '578f1deba58c1127f9254e77c6053638', 'user.png', 'binhthuong', b'1', NULL),
(94, 'Huỳnh Thanh', 'Tưởng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuonght@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuonght@vlute.edu.vn', '1fe700952c8cb7daee96ae3850762759', 'user.png', 'binhthuong', b'1', NULL),
(95, 'Nguyễn Minh', 'Hùng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hungnm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hungnm@vlute.edu.vn', '10b9ff3bf7d5a4a8d1ef4a6327d58531', 'user.png', 'binhthuong', b'1', NULL),
(96, 'Nguyễn Văn', 'Bền', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bennv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bennv@vlute.edu.vn', 'fd035f49548f054943c9f91138bf4c50', 'user.png', 'binhthuong', b'1', NULL),
(97, 'Lương Hoài', 'Thương', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuonglh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuonglh@vlute.edu.vn', '45b461bf7bc5e011dff955c906b98c50', 'user.png', 'binhthuong', b'1', NULL),
(98, 'Bùi  Quang', 'Huy', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'huybq@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'huybq@vlute.edu.vn', '338ce9f1d8cbbe2d669f6fadc6add8bb', 'user.png', 'binhthuong', b'1', NULL),
(99, 'Nguyễn Phúc', 'Trường', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'truongnp@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'truongnp@vlute.edu.vn', '010ef31c1c952fc522e1609ec712d0ed', 'user.png', 'binhthuong', b'1', NULL),
(100, 'Bùi Thanh', 'Hiếu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hieubt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hieubt@vlute.edu.vn', '1912ab6875c49d6f567fe1a71dc367c1', 'user.png', 'binhthuong', b'1', NULL),
(101, 'Phạm Thanh', 'Tùng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tungpt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tungpt@vlute.edu.vn', 'b127865843e794e64e9962d312c2b349', 'user.png', 'binhthuong', b'1', NULL),
(102, 'Nguyễn Thị Anh', 'Thư', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thunta@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thunta@vlute.edu.vn', '5adebe56ac154162aeb5d19bba1cc411', 'user.png', 'binhthuong', b'1', NULL),
(103, 'Võ Hoàng', 'Tâm', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamvh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamvh@vlute.edu.vn', 'e5110d330a01c56baa957b84da6165ad', 'user.png', 'binhthuong', b'1', NULL),
(104, 'Phạm Thị Kim', 'Thê', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'theptk@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'theptk@vlute.edu.vn', '733624d28c81d6eeddcc08bac5916217', 'user.png', 'binhthuong', b'1', NULL),
(105, 'Lê Công', 'Khanh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khanhlc@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khanhlc@vlute.edu.vn', '668f5075cde816e95043d5d82d9e0004', 'user.png', 'binhthuong', b'1', NULL),
(106, 'Nguyễn Xích', 'Quân', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quannx@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quannx@vlute.edu.vn', '96d2f0c1554380613a1bb287982acee8', 'user.png', 'binhthuong', b'1', NULL),
(107, 'Trần Minh', 'Quyến', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quyentm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quyentm@vlute.edu.vn', 'f00fc03a806553ab2c1887793621554d', 'user.png', 'binhthuong', b'1', NULL),
(108, 'Nguyễn Văn', 'Thái', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thainv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thainv@vlute.edu.vn', 'a1dcfcc1c4e018b19961b944bc1a3920', 'user.png', 'binhthuong', b'1', NULL),
(109, 'Trần Ngọc', 'Thoa', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thoatn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thoatn@vlute.edu.vn', '4c942a46596c64f36869d3e14155e3aa', 'user.png', 'binhthuong', b'1', NULL),
(110, 'Nguyễn Công', 'Đắc', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dacnc@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dacnc@vlute.edu.vn', 'd734f87ce010ba053ac8e25d214700c0', 'user.png', 'binhthuong', b'1', NULL),
(111, 'Nguyễn Ngọc', 'Lợi', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'loinn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'loinn@vlute.edu.vn', 'cb7c9405957cb4b997938fd25d8d51df', 'user.png', 'binhthuong', b'1', NULL),
(112, 'Bùi Thị Xuân', 'Mai', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'maibtx@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'maibtx@vlute.edu.vn', '5cfda926720ded51ee16bbe4a6eeb0fb', 'user.png', 'binhthuong', b'1', NULL),
(113, 'Trần Hữu', 'Thi', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thith@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thith@vlute.edu.vn', 'fddb2a976323b5b81a65214b1d9358fc', 'user.png', 'binhthuong', b'1', NULL),
(114, 'Nguyễn Minh', 'Trung', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trungnm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trungnm@vlute.edu.vn', '39c8842978ac7cfe5cdb5d55981f5256', 'user.png', 'binhthuong', b'1', NULL),
(115, 'Nguyễn Nhu', 'Liễu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lieunn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lieunn@vlute.edu.vn', '444cb864125acd5231c31f99f471888e', 'user.png', 'binhthuong', b'1', NULL),
(116, 'Lê Thị Ngọc', 'Giàu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'giaultn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'giaultn@vlute.edu.vn', '9e8f420ee3ca8fcfa2fa67bf69f7555d', 'user.png', 'binhthuong', b'1', NULL),
(117, 'Phạm Huy', 'Tư', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuph@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuph@vlute.edu.vn', '7bf500c1250fa28dff02b2c217f357fa', 'user.png', 'binhthuong', b'1', NULL),
(118, 'Bùi Nguyễn Hoàng', 'Trương', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'truongbnh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'truongbnh@vlute.edu.vn', '010ef31c1c952fc522e1609ec712d0ed', 'user.png', 'binhthuong', b'1', NULL),
(119, 'Mai Thị Nguyệt', 'Linh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linhmtn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linhmtn@vlute.edu.vn', '028139ff78aea9fe9f380c5be8cd9e6e', 'user.png', 'binhthuong', b'1', NULL),
(120, 'Nguyễn Thị', 'Y', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'y_nt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'y_nt@vlute.edu.vn', '4995ec381d6071f48a60170c42ebab72', 'user.png', 'binhthuong', b'1', NULL),
(121, 'Lê Thị Hồng', 'Nhung', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhunglth@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhunglth@vlute.edu.vn', 'f81a22df93448e9be15cde5addf26284', 'user.png', 'binhthuong', b'1', NULL),
(122, 'Trần Đại', 'Phước', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phuoctd@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phuoctd@vlute.edu.vn', '551b08aa41963cf75ca2b75584a4f934', 'user.png', 'binhthuong', b'1', NULL),
(123, 'Phan Anh', 'Cang', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'cangpa@vlute.edu.vn', '', '', '', '', '', '', '', 'cangpa@vlute.edu.vn', '2f4b8d358e67a97ae89a9cd07e84f648', 'user.png', 'binhthuong', b'1', NULL),
(124, 'Nguyễn Văn', 'Hiếu', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'hieunv@vlute.edu.vn', '', '', '', '', '', '', '', 'hieunv@vlute.edu.vn', '1912ab6875c49d6f567fe1a71dc367c1', 'user.png', 'binhthuong', b'1', NULL),
(125, 'Nguyễn Vạn', 'Năng', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'nangnv@vlute.edu.vn', '', '', '', '', '', '', '', 'nangnv@vlute.edu.vn', 'f9501dd86a47f16bada72faf0a653438', 'user.png', 'binhthuong', b'1', NULL),
(126, 'Nguyễn Ngọc', 'Nga', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'ngannn@vlute.edu.vn', '', '', '', '', '', '', '', 'ngannn@vlute.edu.vn', '9c7baf6a1f1323cbff187d7e04a1aa4c', 'user.png', 'binhthuong', b'1', NULL),
(127, 'Lê Hoàng', 'An', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'anlh@vlute.edu.vn', '', '', '', '', '', '', '', 'anlh@vlute.edu.vn', 'fb45ae8e54d976a30d84b55fec8336d5', 'user.png', 'binhthuong', b'1', NULL),
(128, 'Trần Thị Tố', 'Loan', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'loanttt@vlute.edu.vn', '', '', '', '', '', '', '', 'loanttt@vlute.edu.vn', '0606db59d2593a99dc2f147653675a48', 'user.png', 'binhthuong', b'1', NULL),
(129, 'Trần Thu', 'Mai', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'maitt@vlute.edu.vn', '', '', '', '', '', '', '', 'maitt@vlute.edu.vn', '5cfda926720ded51ee16bbe4a6eeb0fb', 'user.png', 'binhthuong', b'1', NULL),
(130, 'Trương Mỹ Thu', 'Thảo', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'thaotmt@vlute.edu.vn', '', '', '', '', '', '', '', 'thaotmt@vlute.edu.vn', 'e676123250f72236b80ff385aae16a5a', 'user.png', 'binhthuong', b'1', NULL),
(131, 'Trần Thái', 'Bảo', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'baott@vlute.edu.vn', '', '', '', '', '', '', '', 'baott@vlute.edu.vn', 'ae99cb56551b73b235910cf8932c1ced', 'user.png', 'binhthuong', b'1', NULL),
(132, 'Phan Thị Xuân', 'Trang', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'trangptx@vlute.edu.vn', '', '', '', '', '', '', '', 'trangptx@vlute.edu.vn', '09fc9d715576b282d3bacdd1ed0843c9', 'user.png', 'binhthuong', b'1', NULL),
(133, 'Nguyễn Thị Hồng', 'Yến', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'yennth@vlute.edu.vn', '', '', '', '', '', '', '', 'yennth@vlute.edu.vn', '42dfee4e5d298fd06a6f9086f56b6f67', 'user.png', 'binhthuong', b'1', NULL),
(134, 'Nguyễn Thị Mỹ', 'Nga', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'ngantm@vlute.edu.vn', '', '', '', '', '', '', '', 'ngantm@vlute.edu.vn', '9c7baf6a1f1323cbff187d7e04a1aa4c', 'user.png', 'binhthuong', b'1', NULL),
(135, 'Lê Thị Hoàng', 'Yến', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'yenlth@vlute.edu.vn', '', '', '', '', '', '', '', 'yenlth@vlute.edu.vn', '42dfee4e5d298fd06a6f9086f56b6f67', 'user.png', 'binhthuong', b'1', NULL),
(136, 'Trần Hoài', 'Hạnh', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'hanhth@vlute.edu.vn', '', '', '', '', '', '', '', 'hanhth@vlute.edu.vn', 'fd7d6b2b405779fcdbc4f690ebf0a25e', 'user.png', 'binhthuong', b'1', NULL),
(137, 'Lê Thị Hạnh', 'Hiền', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'hienlth@vlute.edu.vn', '', '', '', '', '', '', '', 'hienlth@vlute.edu.vn', 'ba356be73f40992e5d70bc913f5a40c0', 'user.png', 'binhthuong', b'1', NULL),
(138, 'Nguyễn Thanh', 'Hoàng', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'hoangnt@vlute.edu.vn', '', '', '', '', '', '', '', 'hoangnt@vlute.edu.vn', 'f2fda15903dad771d9b6fef28a104220', 'user.png', 'binhthuong', b'1', NULL),
(139, 'Trần Hồ', 'Đạt', 'Nam', NULL, '', '', '', '', '', '', '', '', '', '', 'datth@vlute.edu.vn', '', '', '', '', '', '', '', 'datth@vlute.edu.vn', 'a8046bf6da7d1deacd8bfbed3455296a', 'user.png', 'binhthuong', b'1', NULL),
(140, 'Nguyễn Duy', 'Phúc', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phucnd@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phucnd@vlute.edu.vn', '40f3edbe92ab15daae1d82a84c82b3b4', 'user.png', 'binhthuong', b'1', NULL),
(141, 'Trần Thanh', 'Hiếu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hieutt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hieutt@vlute.edu.vn', '1912ab6875c49d6f567fe1a71dc367c1', 'user.png', 'binhthuong', b'1', NULL),
(142, 'Trần Thị Lệ', 'Thu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuttl@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuttl@vlute.edu.vn', '5adebe56ac154162aeb5d19bba1cc411', 'user.png', 'binhthuong', b'1', NULL),
(143, 'Lê Quốc', 'Lâm', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lamlq@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lamlq@vlute.edu.vn', 'a2c2aac6ba86623181eabeedda85d093', 'user.png', 'binhthuong', b'1', NULL),
(144, 'Đặng Thanh', 'Sơn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sondt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sondt@vlute.edu.vn', '37ecc55346dd8fb01220fb103b51e0e5', 'user.png', 'binhthuong', b'1', NULL),
(145, 'Trần Hồng', 'Quân', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quanth@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quanth@vlute.edu.vn', '96d2f0c1554380613a1bb287982acee8', 'user.png', 'binhthuong', b'1', NULL),
(146, 'Nguyễn Nhu', 'Liễu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lieunh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lieunh@vlute.edu.vn', '444cb864125acd5231c31f99f471888e', 'user.png', 'binhthuong', b'1', NULL),
(147, 'Nguyễn Phước', 'Minh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'minhnp@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'minhnp@vlute.edu.vn', '27500f8ec124385d1605cc35e6aae5e1', 'user.png', 'binhthuong', b'1', NULL),
(148, 'Nguyễn Thị', 'Oanh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oanhnt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oanhnt@vlute.edu.vn', 'c5c5cf5e70c31f2ff16bff51a3dab2de', 'user.png', 'binhthuong', b'1', NULL),
(149, 'Lê Văn', 'Khoa', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khoalv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khoalv@vlute.edu.vn', '5e5bc532ad7416a750f1d540b04a0a5e', 'user.png', 'binhthuong', b'1', NULL),
(150, 'Lê Ngọc', 'Vỉnh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vinhln@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vinhln@vlute.edu.vn', '08ad08dd06151c319cc3ca57ed729ae3', 'user.png', 'binhthuong', b'1', NULL),
(151, 'Trịnh Ngọc', 'Hân', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hantn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hantn@vlute.edu.vn', '69e3b9ae0480d2711a3a8384b5dfc443', 'user.png', 'binhthuong', b'1', NULL),
(152, 'Huỳnh Thị Hồng', 'Nhung', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhunghth@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhunghth@vlute.edu.vn', 'f81a22df93448e9be15cde5addf26284', 'user.png', 'binhthuong', b'1', NULL),
(153, 'Trần Thanh', 'Thảo', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thaott@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thaott@vlute.edu.vn', 'e676123250f72236b80ff385aae16a5a', 'user.png', 'binhthuong', b'1', NULL),
(154, 'Huỳnh Thị Phương', 'Thảo', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thaohtp@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thaohtp@vlute.edu.vn', 'e676123250f72236b80ff385aae16a5a', 'user.png', 'binhthuong', b'1', NULL),
(155, 'Đinh Thị Kim', 'Nhung', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhungdtk@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhungdtk@vlute.edu.vn', 'f81a22df93448e9be15cde5addf26284', 'user.png', 'binhthuong', b'1', NULL),
(156, 'Trần Bá', 'Luân', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'luantb@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'luantb@vlute.edu.vn', 'aedb9b08613de9c19d1efd643c72b1b4', 'user.png', 'binhthuong', b'1', NULL),
(157, 'Trương Phúc', 'Vinh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vinhtp@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vinhtp@vlute.edu.vn', '08ad08dd06151c319cc3ca57ed729ae3', 'user.png', 'binhthuong', b'1', NULL),
(158, 'Trần Minh', 'Phúc', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phuctp@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'phuctp@vlute.edu.vn', '40f3edbe92ab15daae1d82a84c82b3b4', 'user.png', 'binhthuong', b'1', NULL),
(159, 'Nguyễn Trung', 'Trực', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trucnt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trucnt@vlute.edu.vn', '8e69ffb2792f18b50ab3715fb0d5425d', 'user.png', 'binhthuong', b'1', NULL),
(160, 'Võ Thị Ngọc', 'Bích', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bichvtn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bichvtn@vlute.edu.vn', '72b5e0717f042b8660fa0d2f262d71a3', 'user.png', 'binhthuong', b'1', NULL),
(161, 'Hồ Xuân', 'Yến', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yenhx@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yenhx@vlute.edu.vn', '42dfee4e5d298fd06a6f9086f56b6f67', 'user.png', 'binhthuong', b'1', NULL),
(162, 'Lâm Hòa', 'Hưng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hunglh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hunglh@vlute.edu.vn', '10b9ff3bf7d5a4a8d1ef4a6327d58531', 'user.png', 'binhthuong', b'1', NULL),
(163, 'Phan Nguyễn Thanh', 'Trang', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trangpnt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trangpnt@vlute.edu.vn', '09fc9d715576b282d3bacdd1ed0843c9', 'user.png', 'binhthuong', b'1', NULL),
(164, 'Lê Văn', 'Lên', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lenlv@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lenlv@vlute.edu.vn', '3639792c3a332d6c7a40019afa253708', 'user.png', 'binhthuong', b'1', NULL),
(165, 'Trần Kim', 'Thoa', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thoatk@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thoatk@vlute.edu.vn', '4c942a46596c64f36869d3e14155e3aa', 'user.png', 'binhthuong', b'1', NULL),
(166, 'Nguyễn Thị Thu', 'Hương', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'huongntt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'huongntt@vlute.edu.vn', '22ce3a9db2582c22df4e3cd534d21c64', 'user.png', 'binhthuong', b'1', NULL),
(167, 'Nguyễn Thị Anh', 'Thư', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thu_nta@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thu_nta@vlute.edu.vn', '5adebe56ac154162aeb5d19bba1cc411', 'user.png', 'binhthuong', b'1', NULL),
(168, 'Hồ Anh', 'Bằng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anhbang@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anhbang@vlute.edu.vn', 'd10fd4ca3f31a3c30cc2d49b1e0dfdb3', 'user.png', 'binhthuong', b'1', NULL),
(169, 'Nguyễn Khánh', 'Duy', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'duynk@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'duynk@vlute.edu.vn', 'e6395f99a2ab6df4a88d9f9a2321c52c', 'user.png', 'binhthuong', b'1', NULL),
(171, 'Phan Huỳnh Nhật', 'Thanh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thanhphn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thanhphn@vlute.edu.vn', 'ba158f9c8c27649c71786b74006a9808', 'user.png', 'binhthuong', b'1', NULL),
(174, 'Nguyễn Thanh', 'Ngọc', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ngocnt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ngocnt@vlute.edu.vn', '61aa396ca743e1cb28d84eb8433aba68', 'user.png', 'binhthuong', b'1', NULL),
(175, 'Thạch Thị', 'Sochet', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sochet@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sochet@vlute.edu.vn', 'b374ddeadd865d89f6238f88a63b2c3f', 'user.png', 'binhthuong', b'1', NULL),
(176, 'Mai Ngọc', 'Quí', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quimn@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quimn@vlute.edu.vn', 'e2fc24e8965c96a3e31a96b3190ff3cf', 'user.png', 'binhthuong', b'1', NULL),
(177, 'Phan Thị Thanh', 'Thủy', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuyptt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuyptt@vlute.edu.vn', '4ca914004f4a3101b6339b58e5de0c99', 'user.png', 'binhthuong', b'1', NULL),
(178, 'Lê Thị Thanh', 'Tâm', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamltt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamltt@vlute.edu.vn', 'e5110d330a01c56baa957b84da6165ad', 'user.png', 'binhthuong', b'1', NULL),
(179, 'Lê Dương Hoài', 'Vũ', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vuldh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vuldh@vlute.edu.vn', '1a5c5ccb9b4cdafbb97f598c8212d9b8', 'user.png', 'binhthuong', b'1', NULL),
(180, 'Tô Tấn', 'An', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'antt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'antt@vlute.edu.vn', 'fb45ae8e54d976a30d84b55fec8336d5', 'user.png', 'binhthuong', b'1', NULL),
(181, 'Phạm Thị Minh', 'Hiền', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hienptm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hienptm@vlute.edu.vn', 'ba356be73f40992e5d70bc913f5a40c0', 'user.png', 'binhthuong', b'1', NULL),
(182, 'Võ Kim', 'Soàn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'soanvk@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'soanvk@vlute.edu.vn', '64282c9182aec1fcf460c8b11a85e171', 'user.png', 'binhthuong', b'1', NULL),
(183, 'Lê Ngọc', 'Tuyền', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuyenln@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuyenln@vlute.edu.vn', '5912f57b385b6cd264ce176e206f50a5', 'user.png', 'binhthuong', b'1', NULL),
(184, 'Lê Phước', 'Thọ', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tholp@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tholp@vlute.edu.vn', 'b2569ee84ff07a082794c880b4e92cc6', 'user.png', 'binhthuong', b'1', NULL),
(185, 'Trần Minh', 'Nguyện', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nguyentm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nguyentm@vlute.edu.vn', '553269a48e595783962581412b31e120', 'user.png', 'binhthuong', b'1', NULL),
(186, 'Nguyễn Tích Thiện', 'Tâm', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamntt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tamntt@vlute.edu.vn', 'e5110d330a01c56baa957b84da6165ad', 'user.png', 'binhthuong', b'1', NULL),
(187, 'Đặng Thị Kim', 'Anh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anhdtk@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anhdtk@vlute.edu.vn', '2b6010ae6175098e9cc01b516ca5802d', 'user.png', 'binhthuong', b'1', NULL),
(188, 'Lê Trương Bảo', 'Trang', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trangltb@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trangltb@vlute.edu.vn', '09fc9d715576b282d3bacdd1ed0843c9', 'user.png', 'binhthuong', b'1', NULL),
(191, 'Lâm Minh', 'Tuấn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuanlm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuanlm@vlute.edu.vn', '915f3286ee8a46cdbd49af14d9d575f7', 'user.png', 'binhthuong', b'1', NULL),
(192, 'Nguyễn Thanh', 'Duy', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'duynt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'duynt@vlute.edu.vn', 'e6395f99a2ab6df4a88d9f9a2321c52c', 'user.png', 'binhthuong', b'1', NULL),
(193, 'Tạ Minh', 'Châu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chautm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chautm@vlute.edu.vn', '675738a0c9095eaff993d99f214e8fda', 'user.png', 'binhthuong', b'1', NULL),
(194, 'Võ Huỳnh Trung', 'Toàn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'toanvht@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'toanvht@vlute.edu.vn', '23880c27fec1ee6c8ec1910faf09ee8c', 'user.png', 'binhthuong', b'1', NULL),
(195, 'Nguyễn Thanh', 'Đứt', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ducnt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ducnt@vlute.edu.vn', '31a53a95108818014c6feb566836a9bb', 'user.png', 'binhthuong', b'1', NULL),
(196, 'Trần Cẩm', 'Nhung', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhungtc@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhungtc@vlute.edu.vn', 'f81a22df93448e9be15cde5addf26284', 'user.png', 'binhthuong', b'1', NULL);
INSERT INTO `nguoidung` (`IDND`, `HO`, `TEN`, `GIOITINH`, `NGAYSINH`, `NOISINH`, `QUEQUAN`, `DANTOC`, `NAMNUOCHOCVI`, `NAMBONHIEM`, `CHOORIENG`, `DIENTHOAICQ`, `DIENTHOAINR`, `DIENTHOAIDD`, `FAX`, `MAIL`, `THACSICHUYENNGANH`, `NAMCAPBANGTSCN`, `NOIDAOTAOTSCN`, `TIENSICHUYENNGANH`, `NAMCAPBANGTSCN2`, `NOIDAOTAOTSCN2`, `TENLUANAN`, `TENDANGNHAP`, `MATKHAU`, `HINH`, `TRANGTHAI`, `XACNHAN`, `TOKEN`) VALUES
(197, 'Phùng Thế', 'Tuấn', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuanpt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuanpt@vlute.edu.vn', '915f3286ee8a46cdbd49af14d9d575f7', 'user.png', 'binhthuong', b'1', NULL),
(198, 'Trần Tuấn', 'Anh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuananh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuananh@vlute.edu.vn', '2b6010ae6175098e9cc01b516ca5802d', 'user.png', 'binhthuong', b'1', NULL),
(200, 'Lê Thanh Quang', 'Đức', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ducltq@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ducltq@vlute.edu.vn', '8f526bf52b9ca81c1dc71ca408bdddb3', 'user.png', 'binhthuong', b'1', NULL),
(201, 'Đặng Hải', 'Đăng', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dangdh@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dangdh@vlute.edu.vn', '1470aad22bf0f157d732ded7518e4568', 'user.png', 'binhthuong', b'1', NULL),
(202, 'Nguyễn Thị Mộng', 'Thu', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuntm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thuntm@vlute.edu.vn', '5adebe56ac154162aeb5d19bba1cc411', 'user.png', 'binhthuong', b'1', NULL),
(203, 'Huỳnh Thị Thùy', 'Linh', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linhhtt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linhhtt@vlute.edu.vn', '028139ff78aea9fe9f380c5be8cd9e6e', 'user.png', 'binhthuong', b'1', NULL),
(204, 'Nguyễn Thành', 'Nhân', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhannt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nhannt@vlute.edu.vn', 'ca477163d5f41771cb99c3c19b17b47e', 'user.png', 'binhthuong', b'1', NULL),
(206, 'Huỳnh Minh', 'Hiền', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hienhm@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hienhm@vlute.edu.vn', 'ba356be73f40992e5d70bc913f5a40c0', 'user.png', 'binhthuong', b'1', NULL),
(207, 'Lâm Thái', 'Quang', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quanglt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'quanglt@vlute.edu.vn', '2fcc16a8c2b5c3e951ea9df84525841a', 'user.png', 'binhthuong', b'1', NULL),
(211, 'Nguyễn Thị Huy', 'Diễm', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'diemnth@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'diemnth@vlute.edu.vn', '06f45c315e9e62b4fc3b0a7b63e84dec', 'user.png', 'binhthuong', b'1', NULL),
(212, 'Nguyễn Cúc Linh', 'Trân', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tranncl@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tranncl@vlute.edu.vn', '865335f44877d73277ce8dc970047e02', 'user.png', 'binhthuong', b'1', NULL),
(213, 'Đặng Nguyễn Thảo', 'Hiền', 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hiendnt@vlute.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hiendnt@vlute.edu.vn', 'ba356be73f40992e5d70bc913f5a40c0', 'user.png', 'binhthuong', b'1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung_baibao`
--

CREATE TABLE `nguoidung_baibao` (
  `IDTB` bigint(20) NOT NULL,
  `IDBAO` bigint(20) NOT NULL,
  `IDND` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung_chucdanhgiangvien`
--

CREATE TABLE `nguoidung_chucdanhgiangvien` (
  `IDNDCDGV` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDCD` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung_chucdanhgiangvien`
--

INSERT INTO `nguoidung_chucdanhgiangvien` (`IDNDCDGV`, `IDND`, `IDCD`) VALUES
(1, 123, 0),
(2, 124, 0),
(3, 43, 0),
(4, 132, 0),
(5, 133, 0),
(6, 125, 0),
(7, 136, 0),
(8, 126, 0),
(9, 134, 0),
(10, 127, 0),
(11, 128, 0),
(12, 129, 0),
(13, 131, 0),
(14, 130, 0),
(15, 135, 0),
(16, 137, 0),
(17, 138, 0),
(18, 139, 0),
(20, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung_chucdanhkhoahoc`
--

CREATE TABLE `nguoidung_chucdanhkhoahoc` (
  `IDNDCD` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDCD` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung_chucdanhkhoahoc`
--

INSERT INTO `nguoidung_chucdanhkhoahoc` (`IDNDCD`, `IDND`, `IDCD`) VALUES
(1, 123, 0),
(2, 124, 0),
(3, 43, 0),
(4, 132, 0),
(5, 133, 0),
(6, 125, 0),
(7, 136, 0),
(8, 126, 0),
(9, 134, 0),
(10, 127, 0),
(11, 128, 0),
(12, 129, 0),
(13, 131, 0),
(14, 130, 0),
(15, 135, 0),
(16, 137, 0),
(17, 138, 0),
(18, 139, 0),
(20, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung_chucvu`
--

CREATE TABLE `nguoidung_chucvu` (
  `IDNDCV` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDCV` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung_chucvu`
--

INSERT INTO `nguoidung_chucvu` (`IDNDCV`, `IDND`, `IDCV`) VALUES
(1, 123, 0),
(2, 124, 0),
(3, 43, 0),
(4, 132, 0),
(5, 133, 0),
(6, 125, 0),
(7, 136, 0),
(8, 126, 0),
(9, 134, 0),
(10, 127, 0),
(11, 128, 0),
(12, 129, 0),
(13, 131, 0),
(14, 130, 0),
(15, 135, 0),
(16, 137, 0),
(17, 138, 0),
(18, 139, 0),
(20, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung_hocvi`
--

CREATE TABLE `nguoidung_hocvi` (
  `IDNDHV` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDHV` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung_hocvi`
--

INSERT INTO `nguoidung_hocvi` (`IDNDHV`, `IDND`, `IDHV`) VALUES
(1, 123, 0),
(2, 124, 0),
(3, 43, 0),
(4, 132, 0),
(5, 133, 0),
(6, 125, 0),
(7, 136, 0),
(8, 126, 0),
(9, 134, 0),
(10, 127, 0),
(11, 128, 0),
(12, 129, 0),
(13, 131, 0),
(14, 130, 0),
(15, 135, 0),
(16, 137, 0),
(17, 138, 0),
(18, 139, 0),
(20, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung_khoabomon`
--

CREATE TABLE `nguoidung_khoabomon` (
  `IDNDKBM` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDKBM` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung_khoabomon`
--

INSERT INTO `nguoidung_khoabomon` (`IDNDKBM`, `IDND`, `IDKBM`) VALUES
(1, 123, 1),
(2, 124, 1),
(3, 43, 10),
(4, 132, 1),
(5, 133, 1),
(6, 125, 1),
(7, 136, 1),
(8, 126, 1),
(9, 134, 1),
(10, 127, 1),
(11, 128, 1),
(12, 129, 1),
(13, 131, 1),
(14, 130, 1),
(15, 135, 1),
(16, 137, 1),
(17, 138, 1),
(18, 139, 1),
(20, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung_trinhdochuyenmon`
--

CREATE TABLE `nguoidung_trinhdochuyenmon` (
  `IDNDTDCM` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `IDTD` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung_trinhdochuyenmon`
--

INSERT INTO `nguoidung_trinhdochuyenmon` (`IDNDTDCM`, `IDND`, `IDTD`) VALUES
(1, 123, 0),
(2, 124, 0),
(3, 43, 0),
(4, 132, 0),
(5, 133, 0),
(6, 125, 0),
(7, 136, 0),
(8, 126, 0),
(9, 134, 0),
(10, 127, 0),
(11, 128, 0),
(12, 129, 0),
(13, 131, 0),
(14, 130, 0),
(15, 135, 0),
(16, 137, 0),
(17, 138, 0),
(18, 139, 0),
(20, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quocgia`
--

CREATE TABLE `quocgia` (
  `cc_fips` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `cc_iso` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `tld` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  `ten` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `quocgia`
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
-- Table structure for table `slider`
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
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `tieude`, `link`, `style`, `hinhanh`, `kichhoat`) VALUES
(1, 'Cán bộ giảng viên', 'can-bo', 'slideInLeft', 'images/up.jpg', b'1'),
(2, 'Sinh viên đăng ký học phần', 'dang-ky-hoc-phan', 'sliceUp', 'images/tay-nghe-asian-650x330.jpg', b'1'),
(3, 'Đại học CNTT 2014', 'cntt', 'slideInRight', 'images/tiep_koica_20_6_2017-3.JPG', b'1'),
(7, 'Góc học tập', 'hoc-tap', 'sliceUp', 'images/ht_skills_international_1.jpg', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `sotietquidoi`
--

CREATE TABLE `sotietquidoi` (
  `IDS` bigint(20) NOT NULL,
  `BATDAU` float NOT NULL,
  `KETTHUC` float NOT NULL,
  `HESO` float NOT NULL,
  `TOIDA` float NOT NULL DEFAULT '80'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sotietquidoi`
--

INSERT INTO `sotietquidoi` (`IDS`, `BATDAU`, `KETTHUC`, `HESO`, `TOIDA`) VALUES
(1, 85, 100, 1, 80),
(2, 70, 84, 0.9, 80),
(3, 51, 69, 0.75, 80);

-- --------------------------------------------------------

--
-- Table structure for table `thanhviendetai`
--

CREATE TABLE `thanhviendetai` (
  `IDTV` bigint(20) NOT NULL,
  `IDDT` bigint(20) NOT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `CONGVIEC` text,
  `TRACHNHIEM` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhviendetai`
--

INSERT INTO `thanhviendetai` (`IDTV`, `IDDT`, `IDND`, `CONGVIEC`, `TRACHNHIEM`) VALUES
(1, 1, 18, 'Nghiên cứu đề tài', 'Chủ nhiệm'),
(2, 2, 1, '', 'Chủ nhiệm'),
(3, 3, 18, '', 'Chủ nhiệm');

-- --------------------------------------------------------

--
-- Table structure for table `tiendodukien`
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
-- Table structure for table `tochucthamgia`
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
-- Table structure for table `trinhdochuyenmon`
--

CREATE TABLE `trinhdochuyenmon` (
  `IDTD` bigint(20) NOT NULL,
  `TENTRINHDO` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trinhdochuyenmon`
--

INSERT INTO `trinhdochuyenmon` (`IDTD`, `TENTRINHDO`) VALUES
(1, 'Trung cấp'),
(2, 'Đại học'),
(3, 'Thạc sĩ'),
(5, 'Tiến sĩ'),
(6, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `tukhoa`
--

CREATE TABLE `tukhoa` (
  `IDKHOA` bigint(20) NOT NULL,
  `TENKHOA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tukhoa`
--

INSERT INTO `tukhoa` (`IDKHOA`, `TENKHOA`) VALUES
(5, 'hop tac quoc te');

-- --------------------------------------------------------

--
-- Table structure for table `xetduyetdetai`
--

CREATE TABLE `xetduyetdetai` (
  `IDXD` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `IDND` int(11) DEFAULT NULL,
  `NHIEMVU` text,
  `LOAIHD` int(11) NOT NULL DEFAULT '0',
  `THOIGIANPHANCONG` datetime DEFAULT CURRENT_TIMESTAMP,
  `GHICHU` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xetduyetdetai`
--

INSERT INTO `xetduyetdetai` (`IDXD`, `IDDT`, `IDND`, `NHIEMVU`, `LOAIHD`, `THOIGIANPHANCONG`, `GHICHU`) VALUES
(1, 1, 2, 'Chủ tịch HĐ', 1, '2018-05-25 15:14:30', ''),
(2, 1, 3, 'Thư ký', 1, '2018-05-25 15:14:30', ''),
(3, 1, 12, 'Ủy viên', 0, '2018-05-25 15:14:30', ''),
(4, 2, 2, 'Chủ tịch HĐ', 1, '2018-05-25 15:24:28', ''),
(5, 2, 3, 'Thư ký', 1, '2018-05-25 15:24:28', ''),
(6, 2, 10, 'Ủy viên', 0, '2018-05-25 15:24:28', ''),
(7, 3, 2, 'Chủ tịch HĐ', 1, '2018-05-25 15:27:32', ''),
(8, 3, 3, 'Thư ký', 1, '2018-05-25 15:27:32', ''),
(9, 3, 10, 'Ủy viên', 0, '2018-05-25 15:27:32', '');

-- --------------------------------------------------------

--
-- Table structure for table `xetduyetnghiemthu`
--

CREATE TABLE `xetduyetnghiemthu` (
  `IDNT` bigint(20) NOT NULL,
  `IDDT` bigint(20) DEFAULT NULL,
  `IDND` bigint(20) DEFAULT NULL,
  `NHIEMVU` text,
  `THOIGIANPHANCONG` datetime DEFAULT CURRENT_TIMESTAMP,
  `GHICHU` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xetduyetnghiemthu`
--

INSERT INTO `xetduyetnghiemthu` (`IDNT`, `IDDT`, `IDND`, `NHIEMVU`, `THOIGIANPHANCONG`, `GHICHU`) VALUES
(1, 1, 2, 'Chủ tịch HĐ', '2018-05-25 15:14:30', ''),
(2, 1, 3, 'Thư ký', '2018-05-25 15:14:30', ''),
(3, 2, 2, 'Chủ tịch HĐ', '2018-05-25 15:24:28', ''),
(4, 2, 3, 'Thư ký', '2018-05-25 15:24:28', ''),
(5, 3, 2, 'Chủ tịch HĐ', '2018-05-25 15:27:32', ''),
(6, 3, 3, 'Thư ký', '2018-05-25 15:27:32', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baibao_tukhoa`
--
ALTER TABLE `baibao_tukhoa`
  ADD PRIMARY KEY (`IDBBTK`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`IDBV`);

--
-- Indexes for table `baiviet_chuyenmuc`
--
ALTER TABLE `baiviet_chuyenmuc`
  ADD PRIMARY KEY (`IDBVCM`);

--
-- Indexes for table `baiviet_nguoidung`
--
ALTER TABLE `baiviet_nguoidung`
  ADD PRIMARY KEY (`IDBVND`);

--
-- Indexes for table `baiviet_tukhoa`
--
ALTER TABLE `baiviet_tukhoa`
  ADD PRIMARY KEY (`IDTKBV`);

--
-- Indexes for table `baocaotiendo`
--
ALTER TABLE `baocaotiendo`
  ADD PRIMARY KEY (`IDTD`);

--
-- Indexes for table `baokhoahoc`
--
ALTER TABLE `baokhoahoc`
  ADD PRIMARY KEY (`IDBAO`),
  ADD UNIQUE KEY `TENBAO` (`TENBAO`);

--
-- Indexes for table `bieumau`
--
ALTER TABLE `bieumau`
  ADD PRIMARY KEY (`IDBM`);

--
-- Indexes for table `caidat`
--
ALTER TABLE `caidat`
  ADD PRIMARY KEY (`IDCD`);

--
-- Indexes for table `capbaibao`
--
ALTER TABLE `capbaibao`
  ADD PRIMARY KEY (`IDC`);

--
-- Indexes for table `capdetai`
--
ALTER TABLE `capdetai`
  ADD PRIMARY KEY (`IDC`),
  ADD UNIQUE KEY `TENCAP` (`TENCAP`);

--
-- Indexes for table `chucdanhgiangvien`
--
ALTER TABLE `chucdanhgiangvien`
  ADD PRIMARY KEY (`IDCD`);

--
-- Indexes for table `chucdanhkhoahoc`
--
ALTER TABLE `chucdanhkhoahoc`
  ADD PRIMARY KEY (`IDCD`);

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`IDCV`);

--
-- Indexes for table `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  ADD PRIMARY KEY (`IDCM`);

--
-- Indexes for table `congtacchuyenmon`
--
ALTER TABLE `congtacchuyenmon`
  ADD PRIMARY KEY (`IDCT`);

--
-- Indexes for table `daihoc`
--
ALTER TABLE `daihoc`
  ADD PRIMARY KEY (`IDDH`);

--
-- Indexes for table `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`IDDT`),
  ADD UNIQUE KEY `TENDETAI` (`TENDETAI`),
  ADD UNIQUE KEY `detai_MADETAI_uindex` (`MADETAI`);

--
-- Indexes for table `dexuatdetai`
--
ALTER TABLE `dexuatdetai`
  ADD PRIMARY KEY (`IDDX`),
  ADD UNIQUE KEY `dexuatdetai_IDDT_uindex` (`IDDT`);

--
-- Indexes for table `hocvi`
--
ALTER TABLE `hocvi`
  ADD PRIMARY KEY (`IDHV`);

--
-- Indexes for table `kehoachxetchonnghiemthu`
--
ALTER TABLE `kehoachxetchonnghiemthu`
  ADD PRIMARY KEY (`IDKHXC`);

--
-- Indexes for table `khoabomon`
--
ALTER TABLE `khoabomon`
  ADD PRIMARY KEY (`IDKBM`);

--
-- Indexes for table `kinhphi`
--
ALTER TABLE `kinhphi`
  ADD PRIMARY KEY (`IDKP`);

--
-- Indexes for table `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`IDLV`),
  ADD UNIQUE KEY `linhvuc_TENLINHVUC_uindex` (`TENLINHVUC`);

--
-- Indexes for table `linhvuckhoahoc`
--
ALTER TABLE `linhvuckhoahoc`
  ADD PRIMARY KEY (`IDLV`);

--
-- Indexes for table `loaihinh`
--
ALTER TABLE `loaihinh`
  ADD PRIMARY KEY (`IDLH`),
  ADD UNIQUE KEY `loaihinh_TENLOAI_uindex` (`TENLOAI`);

--
-- Indexes for table `loaihinhnghiencuu`
--
ALTER TABLE `loaihinhnghiencuu`
  ADD PRIMARY KEY (`IDLH`);

--
-- Indexes for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`IDLTK`);

--
-- Indexes for table `loaitaikhoan_nguoidung`
--
ALTER TABLE `loaitaikhoan_nguoidung`
  ADD PRIMARY KEY (`IDLTKND`),
  ADD UNIQUE KEY `loaitaikhoan_nguoidung_IDND_uindex` (`IDND`);

--
-- Indexes for table `ngoaingu`
--
ALTER TABLE `ngoaingu`
  ADD PRIMARY KEY (`IDNN`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`IDND`),
  ADD UNIQUE KEY `MAIL` (`MAIL`),
  ADD UNIQUE KEY `nguoidung_TENDANGNHAP_uindex` (`TENDANGNHAP`);

--
-- Indexes for table `nguoidung_baibao`
--
ALTER TABLE `nguoidung_baibao`
  ADD PRIMARY KEY (`IDTB`);

--
-- Indexes for table `nguoidung_chucdanhgiangvien`
--
ALTER TABLE `nguoidung_chucdanhgiangvien`
  ADD PRIMARY KEY (`IDNDCDGV`);

--
-- Indexes for table `nguoidung_chucdanhkhoahoc`
--
ALTER TABLE `nguoidung_chucdanhkhoahoc`
  ADD PRIMARY KEY (`IDNDCD`);

--
-- Indexes for table `nguoidung_chucvu`
--
ALTER TABLE `nguoidung_chucvu`
  ADD PRIMARY KEY (`IDNDCV`);

--
-- Indexes for table `nguoidung_hocvi`
--
ALTER TABLE `nguoidung_hocvi`
  ADD PRIMARY KEY (`IDNDHV`);

--
-- Indexes for table `nguoidung_khoabomon`
--
ALTER TABLE `nguoidung_khoabomon`
  ADD PRIMARY KEY (`IDNDKBM`);

--
-- Indexes for table `nguoidung_trinhdochuyenmon`
--
ALTER TABLE `nguoidung_trinhdochuyenmon`
  ADD PRIMARY KEY (`IDNDTDCM`);

--
-- Indexes for table `quocgia`
--
ALTER TABLE `quocgia`
  ADD KEY `idx_cc_fips` (`cc_fips`),
  ADD KEY `idx_cc_iso` (`cc_iso`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sotietquidoi`
--
ALTER TABLE `sotietquidoi`
  ADD PRIMARY KEY (`IDS`);

--
-- Indexes for table `thanhviendetai`
--
ALTER TABLE `thanhviendetai`
  ADD PRIMARY KEY (`IDTV`);

--
-- Indexes for table `tiendodukien`
--
ALTER TABLE `tiendodukien`
  ADD PRIMARY KEY (`IDDKTD`);

--
-- Indexes for table `tochucthamgia`
--
ALTER TABLE `tochucthamgia`
  ADD PRIMARY KEY (`IDTC`);

--
-- Indexes for table `trinhdochuyenmon`
--
ALTER TABLE `trinhdochuyenmon`
  ADD PRIMARY KEY (`IDTD`);

--
-- Indexes for table `tukhoa`
--
ALTER TABLE `tukhoa`
  ADD PRIMARY KEY (`IDKHOA`),
  ADD UNIQUE KEY `TENKHOA` (`TENKHOA`);

--
-- Indexes for table `xetduyetdetai`
--
ALTER TABLE `xetduyetdetai`
  ADD PRIMARY KEY (`IDXD`);

--
-- Indexes for table `xetduyetnghiemthu`
--
ALTER TABLE `xetduyetnghiemthu`
  ADD PRIMARY KEY (`IDNT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baibao_tukhoa`
--
ALTER TABLE `baibao_tukhoa`
  MODIFY `IDBBTK` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `IDBV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `baiviet_chuyenmuc`
--
ALTER TABLE `baiviet_chuyenmuc`
  MODIFY `IDBVCM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `baiviet_nguoidung`
--
ALTER TABLE `baiviet_nguoidung`
  MODIFY `IDBVND` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baiviet_tukhoa`
--
ALTER TABLE `baiviet_tukhoa`
  MODIFY `IDTKBV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `baocaotiendo`
--
ALTER TABLE `baocaotiendo`
  MODIFY `IDTD` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baokhoahoc`
--
ALTER TABLE `baokhoahoc`
  MODIFY `IDBAO` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bieumau`
--
ALTER TABLE `bieumau`
  MODIFY `IDBM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `caidat`
--
ALTER TABLE `caidat`
  MODIFY `IDCD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `capbaibao`
--
ALTER TABLE `capbaibao`
  MODIFY `IDC` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `capdetai`
--
ALTER TABLE `capdetai`
  MODIFY `IDC` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chucdanhgiangvien`
--
ALTER TABLE `chucdanhgiangvien`
  MODIFY `IDCD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chucdanhkhoahoc`
--
ALTER TABLE `chucdanhkhoahoc`
  MODIFY `IDCD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `IDCV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  MODIFY `IDCM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `congtacchuyenmon`
--
ALTER TABLE `congtacchuyenmon`
  MODIFY `IDCT` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daihoc`
--
ALTER TABLE `daihoc`
  MODIFY `IDDH` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detai`
--
ALTER TABLE `detai`
  MODIFY `IDDT` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dexuatdetai`
--
ALTER TABLE `dexuatdetai`
  MODIFY `IDDX` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hocvi`
--
ALTER TABLE `hocvi`
  MODIFY `IDHV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kehoachxetchonnghiemthu`
--
ALTER TABLE `kehoachxetchonnghiemthu`
  MODIFY `IDKHXC` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khoabomon`
--
ALTER TABLE `khoabomon`
  MODIFY `IDKBM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kinhphi`
--
ALTER TABLE `kinhphi`
  MODIFY `IDKP` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `IDLV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `linhvuckhoahoc`
--
ALTER TABLE `linhvuckhoahoc`
  MODIFY `IDLV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loaihinh`
--
ALTER TABLE `loaihinh`
  MODIFY `IDLH` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loaihinhnghiencuu`
--
ALTER TABLE `loaihinhnghiencuu`
  MODIFY `IDLH` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `IDLTK` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loaitaikhoan_nguoidung`
--
ALTER TABLE `loaitaikhoan_nguoidung`
  MODIFY `IDLTKND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `ngoaingu`
--
ALTER TABLE `ngoaingu`
  MODIFY `IDNN` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `IDND` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `nguoidung_baibao`
--
ALTER TABLE `nguoidung_baibao`
  MODIFY `IDTB` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nguoidung_chucdanhgiangvien`
--
ALTER TABLE `nguoidung_chucdanhgiangvien`
  MODIFY `IDNDCDGV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nguoidung_chucdanhkhoahoc`
--
ALTER TABLE `nguoidung_chucdanhkhoahoc`
  MODIFY `IDNDCD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nguoidung_chucvu`
--
ALTER TABLE `nguoidung_chucvu`
  MODIFY `IDNDCV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nguoidung_hocvi`
--
ALTER TABLE `nguoidung_hocvi`
  MODIFY `IDNDHV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nguoidung_khoabomon`
--
ALTER TABLE `nguoidung_khoabomon`
  MODIFY `IDNDKBM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nguoidung_trinhdochuyenmon`
--
ALTER TABLE `nguoidung_trinhdochuyenmon`
  MODIFY `IDNDTDCM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sotietquidoi`
--
ALTER TABLE `sotietquidoi`
  MODIFY `IDS` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thanhviendetai`
--
ALTER TABLE `thanhviendetai`
  MODIFY `IDTV` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tiendodukien`
--
ALTER TABLE `tiendodukien`
  MODIFY `IDDKTD` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tochucthamgia`
--
ALTER TABLE `tochucthamgia`
  MODIFY `IDTC` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trinhdochuyenmon`
--
ALTER TABLE `trinhdochuyenmon`
  MODIFY `IDTD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tukhoa`
--
ALTER TABLE `tukhoa`
  MODIFY `IDKHOA` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `xetduyetdetai`
--
ALTER TABLE `xetduyetdetai`
  MODIFY `IDXD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `xetduyetnghiemthu`
--
ALTER TABLE `xetduyetnghiemthu`
  MODIFY `IDNT` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
