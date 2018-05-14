<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Phòng nghiên cứu khoa học | Đại học Sư phạm kỹ thuật Vĩnh Long" />
	<title>Phòng nghiên cứu khoa học | Đại học Sư phạm kỹ thuật Vĩnh Long</title>
	<!-- Facebook SEO -->
	<meta property="og:url" content="<?php echo $qlkh['HOSTGOC'] ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content='Phòng nghiên cứu khoa học | Đại học Sư phạm kỹ thuật Vĩnh Long' />
	<meta property="og:image" content="<?php echo $qlkh['HOSTGOC'] ?>images/vlute.jpg" />
	<link rel="shortcut icon" href="<?php echo $qlkh['HOSTGOC'] ?>images/favicon.ico" />
	<!-- Google SEO -->
	<meta name="google" content="nositelinkssearchbox" />
	<meta name="google" content="notranslate" />
	<meta name="keywords" content="Phong nghien cuu khoa hoc truong dai hoc su pham ky thuat vinh long, nckh vlute, VLUTE SCIENTIFIC RESEARCH, VLUTE SCIENTIFIC RESEARCH, SR VLUTE" />
	<base href="<?php echo $qlkh['HOSTGOC'] ?>" />

	<script defer src="fontawesome/svg-with-js/js/fontawesome-all.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
 	<script src="js/superfish.js" type="text/javascript"></script>
 	<script type="text/javascript">
		$(function() {
			// Menu
			$('ul.sf-menu').superfish();
		});
	</script>
</head>
<body>
<div class="container">
	<div class="khung">
		<div class="header">
			<img src="images/header_vlute.png" style="width: 100%;" />
			<a href="admin" class="dangnhap">Đăng nhập</a>
		</div>
		<div class="menu">
			<div id="nav">
        		<ul class="sf-menu sf-js-enabled sf-shadow">
        			<li id="trangchu">
						<a href="<?php echo $qlkh['HOSTGOC'] ?>">Trang chủ</a></li>
					<li>
						<a href="#" class="sf-with-ul">Giới thiệu</a>
						<ul style="display: none; visibility: hidden;">
							<li><a href="#">Nhiệm vụ chiến lược</a></li>
							<li><a href="#">Danh sách nhà khoa học</a></li>
						</ul>
					</li>
					<li id="nckh">
						<a href="#" class="sf-with-ul">Hoạt động NCKH</a>
						<ul style="display: none; visibility: hidden;">
							<li><a href="#">Đề xuất NCKH</a></li>
							<li class=" "><a href="#">Đề tài - Dự án NCKH</a></li>
							<li><a href="#">Công trình khoa học đã công bố</a></li>
						</ul>
					</li>
					<li id="baokhoahoc">
						<a href="#">Báo khoa học</a>
					</li>
					<li id="bieumau"><a href="?p=bieumau">Văn bản - Biểu mẫu</a></li>
					<li>
						<a href="#" class="sf-with-ul">Tin tức</a>
						<ul style="display: none; visibility: hidden;">
							<li><a href="#">Tin tức sự kiện</a></li>
							<li><a href="#">Công nghệ mới</a></li>
							<li><a href="#">Khám phá</a></li>
							<li><a href="#">Đời sống</a></li>
						</ul>
					</li>
					<li><a href="#">Liên hệ</a></li>
				</ul>
			</div>
		</div>
		<div id="sr_bg">		
			<div align="center" class="sr">
				<form action="#" method="post" id="searchForm">
					<strong>Nhập từ khóa tìm kiếm</strong> 
					<input type="text" name="filterKeyword" id="searchKeyword" class="txtinput">
					<select class="sl" id="searchType">
						<option value="">Đề tài NCKH</option>
						<option value="">Đề xuất NCKH</option>
					</select>
					<input type="submit" value="Tìm kiếm" class="btn_">
				</form>
			</div>
		</div>
		<marquee behavior="alternate" scrolldelay="200" style="font-size: 0.8rem; color: white; background: url(images/bg_bar.gif) repeat-x; padding: 3px 0;line-height: 1.3rem;" onmouseover="this.stop();" onmouseout="this.start();" >Phòng Nghiên cứu khoa học &amp; Hợp tác quốc tế - Trường Đại học Sư Phạm Kỹ Thuật Vĩnh Long</marquee>
		<div id="maincontent">
			<?php include_once 'public_c.php'; ?>
		</div>
		<div id="footer">
			<div id="ft_nav">
				<ul>
					<li><a href="<?php echo $qlkh['HOSTGOC'] ?>">Trang chủ</a></li>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#">Nghiên cứu khoa học</a></li>
					<li><a href="?p=bieumau">Văn bản - Biểu mẫu</a></li>
					<li><a href="#">FAQs</a></li>
					<li><a href="#" style="border-right: none">Liên hệ</a></li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="ft_cnt">
				<div style="float:left">
					<div>Đại Học Sư phạm Kỹ thuật Vĩnh Long</div>
					<div>Địa chỉ: 73 Nguyễn Huệ Phường 2 TP. Vĩnh Long Tỉnh Vĩnh Long</div>
					<div> Điện thoại: (+84) 02703822141 -  Fax: (+84) 02703821003</div>
					<div>Email: spktvl@vlute.edu.vn;</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>