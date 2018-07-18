<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang='vi'>
<head>
<meta charset="utf-8">
	<?php include_once "header.php" ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#2b7ce0">
	<meta content="INDEX,FOLLOW" name="robots" />
	<meta name="COPYRIGHT" content="&copy; 2018 P. NCKH &amp; HTQT SPKT Vĩnh Long">
	<meta name="Designer" content="Ngô Thanh Lý | lythanhngodev@gmail.com">
	<meta name="GENERATOR" content="NCKH & HTQT VLUTE" />
	<base href="<?php echo $qlkh['HOSTGOC'] ?>" />
	<script>window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)},ga.l=+new Date,ga("create","UA-77436024-2","auto"),ga("send","pageview");</script>
	<script async src='https://www.google-analytics.com/analytics.js'></script><script>const observer=new PerformanceObserver((list)=>{for(const entry of list.getEntries()){const metricName=entry.name;const time=Math.round(entry.startTime+entry.duration);ga('send','event',{eventCategory:'Performance Metrics',eventAction:metricName,eventValue:time,nonInteraction:!0,})}});observer.observe({entryTypes:['paint']})</script><script type="application/ld+json">{"@context": "http://schema.org","@type": "Organization","url": "<?php echo $qlkh['HOSTGOC'] ?>","logo": "<?php echo $qlkh['HOSTGOC'] ?>images/logo.png","contactPoint": [{"@type": "ContactPoint","telephone": "+84 2703 862457","contactType": "customer service"}]}</script>
	<style type="text/css">
@charset "utf-8";::-webkit-scrollbar{width:10px;}::-webkit-scrollbar-track{background:#dbdbdb;}::-webkit-scrollbar-thumb{background:#ababab;}::-webkit-scrollbar-thumb:hover{background:#ababab;}.container{width:980px;margin:0 auto;margin-top:0;padding:0px 5px;box-shadow:0px 0px 4px 2px #e6e6e6;}#nav.sf-menu li ul{display: none; visibility: hidden;}.header div{width: 980px;margin: 0 auto;position: relative;}.cach{margin-top:1rem;}.header{position:relative;float:left;width:100%;text-align:center;background:#ffffff;height:103px;box-shadow:0px 0px 10px -2px #8c8c8c;z-index:-99999;margin-bottom:0.72rem;}*{padding:0;margin:0;}.menu{width:100%;float:left;box-shadow:0px 0px 4px 2px #e6e6e6;border-radius:8px;}body{background:#FFF url(../images/body-bg7.png);font-family:sans-serif !important;}.khung{width:980px;float:left;border-radius:9px 9px 0px 0px;}.line{height:1px;width:100%;background:#2178f9;margin-bottom:1rem;}.den{color:#000;}#nav{margin-top:4px;-moz-border-radius-topright:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-webkit-border-top-left-radius:5px;height:30px;border-top:1px solid #dbdbdb;border-left:1px solid #dbdbdb;border-right:1px solid #dbdbdb;border-bottom:3px solid #156ff5;padding:0;}#nav ul{margin:0;padding-left:3px;}#nav ul li{float:left;display:block;line-height:30px;text-align:center;}#nav ul li a, #nav ul li a:visited{cursor:pointer;color:#267ae4;font-family:sans-serif;font-size:14px;text-decoration:none;text-transform:uppercase;font-weight:bold;border-right:1px solid #4f9ff5;padding:0px 10px;vertical-align:middle;line-height:30px;text-align:left;}#nav ul li a:hover{color:#FFF;text-decoration:none;text-transform:uppercase;font-weight:bold;background:url(../images/nav_act.gif) repeat-x;line-height:30px;display:block;border-radius:6px 6px 0px 0px;}#nav .current{background: url(../images/nav_act.gif) repeat-x;color: #fff;border-radius: 6px 6px 0px 0px;}#nav ul li ul li a:link, #nav ul li ul li a:visited, #nav ul li ul li a:hover, #nav ul ul li li.current a{text-transform:none;padding:0px 10px;}#nav .sf-menu li.current ul li a {color: #267AC4 !important;}#sr_bg{-moz-border-radius-bottomright:7px;-webkit-border-bottom-right-radius:7px;-moz-border-radius-bottomleft:7px;-webkit-border-bottom-left-radius:7px;background:#fff;height:47px;vertical-align:middle;border-top:1px solid #dbdbdb;border-left:1px solid #dbdbdb;border-right:1px solid #dbdbdb;border-bottom:1px solid #dbdbdb;margin-bottom:0.72rem;width:100%;float:left;box-shadow:0px 0px 4px 2px #e6e6e6;}.sr{margin-top:10px;font-size:12px;}.sf-menu, .sf-menu *{margin:0;padding:0;list-style:none;}.sf-menu{line-height:1.0;padding-bottom:3px;width:100%;}.sf-menu ul{position:absolute;top:-999em;width:18em;margin-top:-1px !important;}.sf-menu ul li{width:100%;}.sf-menu li:hover{visibility:inherit;}.sf-menu li{float:left;position:relative;}.sf-menu a{display:block;position:relative;}.sf-menu li:hover ul,.sf-menu li.sfHover ul{left:0;top:34px;z-index:99;}ul.sf-menu li:hover li ul,ul.sf-menu li.sfHover li ul{top:-999em;}ul.sf-menu li li:hover ul,ul.sf-menu li li.sfHover ul{left:18em;top:0;}ul.sf-menu li li:hover li ul,ul.sf-menu li li.sfHover li ul{top:-999em;}ul.sf-menu li li li:hover ul,ul.sf-menu li li li.sfHover ul{left:18em;top:0;}.sf-menu{float:left;margin-bottom:1em;}.sf-menu a{padding:.75em 1em;text-decoration:none;}.sf-menu a, .sf-menu a:visited{color:#13a;font-weight:bold;}.sf-menu li li a, .sf-menu li li a:visited, .sf-menu li.current li a{color:#13a;font-weight:normal;}.sf-menu li li{background:#fff;line-height:1;margin-left:-1px;margin-top:-1px;border:solid 1px #e8eef4;}.sf-menu li li li{background:#fff;}.sf-menu a:focus, .sf-menu a:hover, .sf-menu a:active,.sf-menu li.current,.sf-menu li li.current,.sf-menu li.current{color:#fff;outline:0;}.nut-link{background-color:#1c71f3;color:#fff;text-decoration:none;font-family:sans-serif;font-size:14px;padding:4px 8px;border-radius:4px;}.sf-menu li.current a{color:#fff !important;}.sf-menu a.sf-with-ul{padding-right:2.25em;min-width:1px;}.sf-sub-indicator{position:absolute;display:block;right:.75em;top:1.05em;width:10px;height:10px;text-indent:-999em;overflow:hidden;}a > .sf-sub-indicator{top:.8em;background-position:0 -100px;}a:focus > .sf-sub-indicator,a:hover > .sf-sub-indicator,a:active > .sf-sub-indicator,li:hover > a > .sf-sub-indicator,li.sfHover > a > .sf-sub-indicator{background-position:-10px -100px;}.sf-menu ul .sf-sub-indicator{background-position:-10px 0;}.sf-menu ul a > .sf-sub-indicator{background-position:0 0;}.sf-menu ul a:focus > .sf-sub-indicator,.sf-menu ul a:hover > .sf-sub-indicator,.sf-menu ul a:active > .sf-sub-indicator,.sf-menu ul li:hover > a > .sf-sub-indicator,.sf-menu ul li.sfHover > a > .sf-sub-indicator{background-position:-10px 0;}.sf-shadow ul{padding:0 8px 9px 0;-moz-border-radius-bottomleft:17px;-moz-border-radius-topright:17px;-webkit-border-top-right-radius:17px;-webkit-border-bottom-left-radius:17px;}.sf-shadow ul.sf-shadow-off{background:transparent;}#nav .sfHover ul li:last-child{border-bottom:1px solid #4e9ff5;}#nav .sfHover ul li:hover a{border-radius:0px;}#nav ul li ul li a:hover {color: #267ae4 !important;transition: all 0.2s;text-decoration: none;font-weight: bold;background: #eaeaea !important;line-height: 31px;display: block;padding-left: 1rem !important;}.dangnhap{position:absolute;top:0;right:0;color:white;background:#3886fb;border-radius:0px 0px 8px 8px;text-decoration:none;border-bottom:2px solid #c2c2c2;padding:4px 8px;font-size:13px;font-weight:600;}.dangnhap:hover{background:#5599ff;}#maincontent{margin-top:.5rem;float:left;background:#fff;padding:8px;box-shadow:0px 0px 4px 2px #e6e6e6;border-radius:8px;}#cottrai{float:left;width:630px;}#cotphai{float:left;width:326px;margin-left:8px;}.tieudechinh{width:100%;float:left;}.tentieudechinh{background:url(../images/bg_bar.gif) repeat-x;width:-moz-fit-content;padding:6px 7px;border-radius:8px 8px 0px 0px;}.tieudechinh a{text-decoration:none;color:white;font-family:sans-serif;}.tentieudechinh img{height:16px;width:16px;padding-right:6px;}.noidungtin{float:left;width:603px;padding-left:10px;}.noidungtin h3{margin-bottom:6px;font-size:15px;font-family:sans-serif;}.noidungtin h3 a{text-decoration:none;}.noidungtin .thongtinchung ul{list-style-type:none;font-family:sans-serif;font-size:13px;}.noidungtin .thongtinchung ul li{background:url(../images/icon_dot.gif) no-repeat 6px 0px;padding:1px 0px 2px 27px;}.noidungtin .thongtinchung ul li:last-child{border-bottom:1px dotted #e2e2e2;margin-bottom:12px;}.thongtinlienhe{background:url(../images/bg_sr.gif) repeat-x;border:1px solid #7ead8f;border-radius:7px;padding:8px;font-family:sans-serif;}.chitietlienhe div{padding-top:6px;padding-left:10px;font-size:15px;}.chitietlienhe h3{font-size:17px;border-bottom:1px solid #01a63c;padding-bottom:5px;color:#dc372b;}.clear{clear:both;}#footer{float:left;width:100%;box-shadow:0px 0px 4px 2px #e6e6e6;background:#fff;border-radius:8px;margin-top:.72rem;padding-top:.5rem;margin-bottom:.72rem;}#ft_nav{border-top:2px solid #1e73f5;line-height:34px;}#ft_nav ul{margin:0;padding:0;}#ft_nav ul li{float:left;display:block;}#ft_nav ul li a:link, #ft_nav ul li a:visited{text-transform:uppercase;color:#1e73f5;text-decoration:none;padding:0 24px;font-family:sans-serif;font-weight:bold;font-size:16px;}#ft_nav ul li a:hover{text-transform:uppercase;color:#4a8ff9;text-decoration:underline;}.ft_cnt{border-top:1px dashed #1e72f530;font-size:11px;padding-left:5px;padding-top:5px;}.ft_cnt div{padding-bottom:5px;font-size:14px;padding-left:10px;}.muccon{border-radius:6px;border:1px solid #1d72f4;margin-top:9px;font-size:13px;float:left;width:100%;}.tieudemuccon{padding:10px;}.chitietthongke div{padding-bottom:3px;}.muccon{border-radius:6px;border:1px solid #1d72f4;margin-top:9px;font-family:sans-serif;font-size:13px;float:left;}.muccon h3{background:url(../images/bg_bar.gif) repeat-x;width:100%;padding:6px 0px;font-family:sans-serif;color:#fff;font-weight:400;border-radius:5px 5px 0px 0px;text-align:center;}.tukhoa div{background:#7a7a7a;color:#fff;width:fit-content;width:-webkit-fix-content;float:left;margin-right:4px;margin-bottom:5px;padding:4px 5px;border-radius:8px;}.tukhoa div a{text-decoration:none;color:#fff;display:block;}.tukhoa div:hover{transition:all 0.222s;-web-kit-transition:all 0.222s;-moz-transition:all 0.222s;text-decoration:underline;color:#fff;background:#2a7ffd;display:block;}.tieudemuccon{float:left;width:316px;padding:8px 4px 3px 4px;}.noidungtin-lq{width:100%;float:left;margin-bottom:18px;}.tincon{width:308px;float:left;margin-bottom:14px;font-family:sans-serif;font-size:12.8px;margin-left:4px;}.tincon .hinhtin{width:75px;height:50px;float:left;margin-right:8px;background-size:cover;background-position:center;}.tincon .tomtattin{float:left;width:225px;}.tincon-lq{width:100%;float:left;font-family:sans-serif;font-size:13px;padding-left:10px;}.tincon-lq .hinhtin-lq{width:69px;height:46px;float:left;margin-right:15px;background-size:cover;background-position:center;}.tincon-lq .tomtattin-lq{float:left;width:450px;color:#4e4e4e;}.tincon-lq .tomtattin-lq:hover{text-decoration:underline;}.tinmoi a{color:#212121;}.tinmoi a:hover{color:#2b6dce;}#bangbieumau{border-collapse:collapse;width:100%;border:1px solid #a7a7a7;}#bangbieumau tr th{padding:4px;}#bangbieumau tr td{padding:8px;}center{margin-bottom:1rem;}.phantrang{list-style-type:none;display:block;}.phantrang li{display:inline-table;padding:2px 7px;background-color:#f3f3f2;border:1px solid #2075f7;border-radius:4px;margin-left:0.2rem;}.phantrang li a{text-decoration:none;display:block;font-family:sans-serif;}.phantrang li:hover{background-color:#1463e2;color:white;}.phantrang li a:hover{color:white;}.vlu-chi-tiet-header-bai-viet{width:100%;float:left;position:relative;}.vlu-chi-tiet-header-bai-viet article{width:100%;height:275px;background-position:center;background-size:cover;}.vlu-chi-tiet-hinh-anh-tin a{text-decoration:none;}.vlu-chi-tiet-link-bai-viet{position:absolute;bottom:0;left:0;right:0;background-color:rgba(0, 0, 0, 0.23456789);padding:10px;}.vlu-chi-tieu-tieu-de-bai-viet{font-family:sans-serif;font-size:150%;color:#fff;font-weight:500;}.vlu-chi-tiet-bai-viet{float:left;padding:10px 0px;width:100%;word-wrap: break-word;}.vlu-chi-tiet-bai-viet img{width: 100% !important;height: auto !important;}.vlu-chi-tiet-thoi-gian-bai-viet{color:#e0e0e0;font-size:90%;padding:6px 2px;}#tin-phai a{text-decoration:none;}.tin-con-phai{width:100%;float:left;margin-bottom:.6rem;border-bottom:1px dotted #c1c1c1;padding-bottom:.6rem;}.tin-con-phai-phai{float:left;width:184px;}.hinh-anh-tin-con-phai{width:110px;height:66px;float:left;background-position:center;background-size:cover;}.tin-con-phai:hover > .hinh-anh-tin-con-phai{opacity:0.888;}.tieu-de-tin-con-phai{float:left;width:507px;color:#33322f;font-family:sans-serif;line-height:20px;padding:0px 0px 0px 8px;}.tieu-de-tin-con-phai:hover{color:var(--main-dochudao);}.ngay-tin-con-phai{float:left;font-size:13px;color:#484848;padding:5px 8px;}.ngay-tin-con-phai i{font-size:12px;color:#484848;}.detailienquan{color:#2279fa;font-size:18px;font-weight:400;font-family:sans-serif;margin:1rem 0rem 0.5rem 0rem;text-decoration:underline;}.lienquan{margin:0.3rem 0.5rem;font-family:sans-serif;font-weight:100;}.lienquan h3{font-weight:100;}.lienquan h3 a{color:#212121;text-decoration:none;font-size:15px;}.lienquan h3 a:hover{text-decoration:underline;}.tranghientai{background:#5c99f6 !important;color:#fff !important;}#timkiemgg{width: 100%;float: left;box-shadow: 0px 0px 4px 2px #e6e6e6;margin-bottom: 1rem;}body{display: block !important;}.theme-default .nivoSlider{position:relative;background:#fff url(../slider/themes/light/loading.gif) no-repeat 50% 50%;margin-bottom:10px;box-shadow:0 1px 5px 0 #b7b7b7;border-radius:8px}.theme-default .nivoSlider img{position:absolute;top:0;left:0;display:none;height:251px;width:100%;background-position:center;background-size:cover}.theme-default .nivoSlider a{border:0;display:block}.theme-default .nivo-controlNav{text-align:center;display:none}.theme-default .nivo-controlNav a{display:inline-block;width:22px;height:22px;background:url(../slider/themes/light/bullets.png) no-repeat;text-indent:-9999px;border:0;margin:0 2px}.theme-default .nivo-controlNav a.active{background-position:0 -22px}.theme-default .nivo-directionNav a{display:block;width:30px;height:30px;background:url(../slider/themes/light/arrows.png) no-repeat;text-indent:-9999px;border:0;opacity:0;-webkit-transition:all 200ms ease-in-out;-moz-transition:all 200ms ease-in-out;-o-transition:all 200ms ease-in-out;transition:all 200ms ease-in-out}.theme-default:hover .nivo-directionNav a{opacity:1}.theme-default a.nivo-nextNav{background-position:-30px 0;right:15px}.theme-default a.nivo-prevNav{left:15px}.theme-default .nivo-caption{font-family:Helvetica,Arial,sans-serif}.theme-default .nivo-caption a{color:#fff;border-bottom:1px dotted #fff}.theme-default .nivo-caption a:hover{color:#fff}.theme-default .nivo-controlNav.nivo-thumbs-enabled{width:100%}.theme-default .nivo-controlNav.nivo-thumbs-enabled a{width:auto;height:auto;background:none;margin-bottom:5px}.theme-default .nivo-controlNav.nivo-thumbs-enabled img{display:block;width:120px;height:251px}.nivo-box,.nivo-caption,.nivoSlider{overflow:hidden}.nivoSlider{position:relative;width:100%;height:auto}.nivoSlider img{position:absolute;top:0;left:0;max-width:none}.nivo-main-image{display:block!important;position:relative!important;width:100%!important}.nivoSlider a.nivo-imageLink{position:absolute;top:0;left:0;width:100%;height:100%;border:0;padding:0;margin:0;z-index:6;display:none;background:#fff;filter:alpha(opacity=0);opacity:0}.nivo-box,.nivo-slice{z-index:5;position:absolute}.nivo-box,.nivo-box img,.nivo-slice{display:block}.nivo-slice{height:100%;top:0}.nivo-caption{position:absolute;left:0;bottom:0;background:rgba(255,255,255,.9);color:#1f1f1f;width:100%;height:25px;line-height:25px;z-index:8;font-size:14px;padding:0 8px;opacity:.8;display:none;-moz-opacity:.8;filter:alpha(opacity=8);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.nivo-caption p{padding:5px;margin:0}.nivo-caption a{display:inline!important}.nivo-html-caption{display:none}.nivo-directionNav a{position:absolute;top:45%;z-index:9;cursor:pointer}.nivo-prevNav{left:0}.nivo-nextNav{right:0}.nivo-controlNav{text-align:center;padding:15px 0}.nivo-controlNav a{cursor:pointer}.nivo-controlNav a.active{font-weight:700}#dev7link{position:absolute;top:0;left:50px;background:url(images/dev7logo.png) no-repeat;width:60px;height:67px;border:0;display:block;text-indent:-9999px}.slider-wrapper{width:100%;margin-right:-15px}.clear{clear:both}
	</style>
</head>
<body>
<div class="header">
	<div>
		<img src="images/header_vlute.png" style="width: 100%;" onclick="location.href='<?php echo $qlkh['HOSTGOC'] ?>';" />
		<a href="admin" class="dangnhap">Đăng nhập</a>
	</div>
</div>
<div class="container">	
	<div class="khung">
		<div class="menu">
			<div id="nav">
        		<ul class="sf-menu">
        			<li id="trangchu">
						<a href="<?php echo $qlkh['HOSTGOC'] ?>">Trang chủ</a></li>
					<li>
						<a href="http://vlute.edu.vn/index.php/nghien-cuu-khoa-hoc" class="sf-with-ul" target="_blank" rel="noopener">Giới thiệu</a>
					</li>
					<li id="nckh">
						<a class="sf-with-ul">Hoạt động NCKH</a>
						<ul>
							<li><a href="nckhdexuatmoi">Đề tài NCKH đang thực hiện</a></li>
							<li><a href="nckhdacongbo">Đề tài NCKH đã công bố</a></li>
						</ul>
					</li>
					<li id="htqt">
						<a class="sf-with-ul">Hợp tác quốc tế</a>
						<ul>
							<?php 
							$ketnoi = new clsKetnoi();
							$conn = $ketnoi->ketnoi();
							$sql = "SELECT DISTINCT * from chuyenmuc where LOAICHUYENMUC = N'hoptacquocte';";
							$q_sql = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($q_sql)) {
								echo "<li><a href='hoptacquocte/".$row['LINKCM']."-".$row['IDCM']."'>".$row['TENCM']."</a></li>";
							} 
							mysqli_close($conn);
							 ?>
						</ul>
					</li>
					<li id="baokhoahoc">
						<a href="baokhoahoc">Báo khoa học</a>
					</li>
					<li id="bieumau"><a href="bieumau">Văn bản - Biểu mẫu</a></li>
					<li id="tintuc">
						<a class="sf-with-ul">Tin tức</a>
						<ul>
							<?php 
							$ketnoi = new clsKetnoi();
							$conn = $ketnoi->ketnoi();
							$sql = "SELECT DISTINCT * from chuyenmuc where LOAICHUYENMUC = N'tintuc';";
							$q_sql = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($q_sql)) {
								echo "<li><a href='chuyenmuc/".$row['LINKCM']."-".$row['IDCM']."'>".$row['TENCM']."</a></li>";
							} 
							mysqli_close($conn);
							 ?>
						</ul>
					</li>
					<li><a href="http://vlute.edu.vn/index.php/lien-he" target="_blank" rel="noopener">Liên hệ</a></li>
				</ul>
			</div>
		</div>
		<div id="sr_bg">		
			<div align="center" class="sr">
				<form action="timkiem" method="POST" id="searchForm">
				    <strong>Nhập từ khóa tìm kiếm</strong> 
				    <input type="text" name="tu" id="searchKeyword" class="txtinput" style="border-radius: 6px;border: 1px solid #659cef;padding: 0px 6px;font-size: 15px;">
				    <select class="sl" id="searchType" name="loai" style="border-radius: 6px;border: 1px solid #659cef;-webkit-appearance:  menulist;font-size: 14px;">
					<option value="1">Đề tài NCKH đã công bố</option>
					<option value="2">Đề xuất NCKH</option>
				    </select>
				    <input type="submit" value="Tìm kiếm" class="btn_" style="font-size: 13px;border-radius: 6px;border: 1px solid #24c257;padding: 1px 5px;">
				</form>
			</div>
		</div>
		<marquee behavior="alternate" scrolldelay="200" style="font-size: 0.8rem; color: white; background: url(images/bg_bar.gif) repeat-x; padding: 3px 0;line-height: 1.3rem;border-radius: 8px;" onmouseover="this.stop();" onmouseout="this.start();" >Phòng Nghiên cứu khoa học &amp; Hợp tác quốc tế - Trường Đại học Sư Phạm Kỹ Thuật Vĩnh Long</marquee>
		<div id="maincontent">
			<?php include_once 'public_c.php'; ?>
		</div>
		<div id="footer">
			<div id="ft_nav">
				<ul>
					<li><a href="<?php echo $qlkh['HOSTGOC'] ?>">Trang chủ</a></li>
					<li><a href="http://vlute.edu.vn/index.php/nghien-cuu-khoa-hoc" target="_blank" rel="noopener">Giới thiệu</a></li>
					<li><a href="bieumau">Văn bản - Biểu mẫu</a></li>
					<li><a href="http://vlute.edu.vn/index.php/lien-he" style="border-right: none" target="_blank" rel="noopener">Liên hệ</a></li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="ft_cnt">
				<div style="float:left">
					<div>Đại Học Sư phạm Kỹ thuật Vĩnh Long</div>
					<div>Địa chỉ: 73 Nguyễn Huệ Phường 2 TP. Vĩnh Long Tỉnh Vĩnh Long</div>
					<div>Điện thoại: (+84) 270 382 2141 - Fax: (+84) 02703821003</div>
					<div>Email: <a href="mailto:spktvl@vlute.edu.vn">spktvl@vlute.edu.vn</a></div>
					<div>Hỗ trợ kỹ thuật: <a href="mailto:lythanhngodev@gmail.com">lythanhngodev@gmail.com</a> - (+84) 121 496 7197</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div id="timkiemgg"><script>(function() {var cx = '011375218569618766485:2vgaz9qfk-w';var gcse = document.createElement('script');gcse.type = 'text/javascript';gcse.async = true;gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(gcse, s);})();</script><gcse:search enableAutoComplete="true"></gcse:search>
	</div>
</div>
<script defer="defer" type="text/javascript" src="js/lazy.js"></script>
<script type="text/javascript">var __ltn_ = document.createElement('link');__ltn_.rel = 'stylesheet';__ltn_.href = 'fontawesome/web-fonts-with-css/css/fontawesome-all.css';__ltn_.type = 'text/css';var __gl = document.getElementsByTagName('link')[0];__gl.parentNode.insertBefore(__ltn_, __gl);</script>
</body>
</html>
