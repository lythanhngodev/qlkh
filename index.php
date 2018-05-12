<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Phòng nghiên cứu khoa học - Đại học Sư phạm kỹ thuật Vĩnh Long" />
	<title>Phòng nghiên cứu khoa học - Đại học Sư phạm kỹ thuật Vĩnh Long</title>
	<!-- Google SEO -->
	<meta name="google" content="nositelinkssearchbox" />
	<meta name="google" content="notranslate" />
	<meta name="keywords" content="Phong nghien cuu khoa hoc truong dai hoc su pham ky thuat vinh long, nckh vlute, VLUTE SCIENTIFIC RESEARCH, VLUTE SCIENTIFIC RESEARCH, SR VLUTE" />
	<base href="<?php echo $qlkh['HOSTGOC'] ?>" />
	<!-- Facebook SEO -->
	<meta property="og:url" content="<?php echo $qlkh['HOSTGOC'] ?>" />
	<meta property="og:title" content="Phòng nghiên cứu khoa học - Đại học Sư phạm kỹ thuật Vĩnh Long" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php echo $qlkh['HOSTGOC'] ?>images/vlute.jpg" />

	<link rel="shortcut icon" href="<?php echo $qlkh['HOSTGOC'] ?>images/favicon.ico" />

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
						<a href="index.html">Trang chủ</a></li>
					<li class="">
						<a href="Article/Details/3.html" class="sf-with-ul">Giới thiệu</a>
						<ul style="display: none; visibility: hidden;">
							<li><a href="Article/Details/33.html">Nhiệm vụ chiến lược</a></li>
							<li><a href="Researcher.html">Danh sách nhà khoa học</a></li>
						</ul>
					</li>
					<li class="">
						<a href="Theme.html#" class="sf-with-ul">Hoạt động NCKH</a>
						<ul style="display: none; visibility: hidden;">
							<li><a href="Propose.html">Đề xuất NCKH</a></li>
							<li class=" "><a href="Theme.html">Đề tài - Dự án NCKH</a></li>
							<li><a href="ScientificReport.html">Công trình khoa học đã công bố</a></li>
						</ul>
					</li>
					<li>
						<a href="ket-qua-noi-bat/p.html">Kết quả nổi bật</a>
					</li>
					<li class="">
						<a href="Article/Index/0.html" class="sf-with-ul">Tin tức</a>
						<ul style="display: none; visibility: hidden;">
							<li><a href="Article/Index/15.html">Tin tức sự kiện</a></li>
							<li><a href="Article/Index/14.html">Công nghệ mới</a></li>
							<li><a href="Article/Index/16.html">Khám phá</a></li>
							<li><a href="Article/Index/17.html">Đời sống</a></li>
						</ul>
					</li>
					<li><a href="Contact.html">Liên hệ</a></li>
				</ul>
			</div>
		</div>
		<div id="sr_bg">		
			<div align="center" class="sr">
				<form action="http://qlkh.tnu.edu.vn/Theme" method="post" id="searchForm">
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
		<div id="maincontent">
			<?php include_once 'public_c.php'; ?>
		</div>
		<div id="footer">
			<div id="ft_nav">
				<ul>
					<li><a href="/Home">Trang chủ</a></li>
					<li><a href="/Article/Details/4#">Giới thiệu</a></li>
					<li><a href="/Theme#">Nghiên cứu khoa học</a></li>
					<li><a href="/Document/Legal#">Văn bản biểu mẫu</a></li>
					<li><a href="/Article/Details/6">FAQs</a></li>
					<li><a href="/Contact" style="border-right: none">Liên hệ</a></li>
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