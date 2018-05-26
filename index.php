<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html amp>
<head>
<meta charset="utf-8">
	<?php include_once "header.php" ?>
	<base href="<?php echo $qlkh['HOSTGOC'] ?>" /><script defer src="fontawesome/svg-with-js/js/fontawesome-all.js"></script><link rel="stylesheet" type="text/css" href="css/style.css"><link rel="stylesheet" type="text/css" href="css/animate.css"><script src="js/jquery-3.3.1.min.js"></script><script src="js/jquery-migrate-1.2.1.js"></script>
<script src="js/superfish.js" type="text/javascript"></script>
 	<script type="text/javascript">
		$(function() {
			// Menu
			$('ul.sf-menu').superfish();
		});
	</script>
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2165745763451934',
      xfbml      : true,
      version    : 'v3.0'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div class="header">
	<div style="width: 980px;margin: 0 auto;position: relative;">
		<img src="images/header_vlute.png" style="width: 100%;" />
		<a href="admin" class="dangnhap">Đăng nhập</a>
	</div>
</div>
<div class="container">	
	<div class="khung">
		<div class="menu">
			<div id="nav">
        		<ul class="sf-menu sf-js-enabled sf-shadow">
        			<li id="trangchu">
						<a href="<?php echo $qlkh['HOSTGOC'] ?>">Trang chủ</a></li>
					<li>
						<a href="#" class="sf-with-ul">Giới thiệu</a>
						<ul style="display: none; visibility: hidden;">
							<li><a href="http://vlute.edu.vn/index.php/nghien-cuu-khoa-hoc" target="_blank">Giới thiệu chung</a></li>
						</ul>
					</li>
					<li id="nckh">
						<a href="#" class="sf-with-ul">Hoạt động NCKH</a>
						<ul style="display: none; visibility: hidden;">
							<li><a href="nckhdexuatmoi">Đề xuất NCKH</a></li>
							<li><a href="nckhdacongbo">Công trình khoa học đã công bố</a></li>
						</ul>
					</li>
					<li id="htqt">
						<a href="#" class="sf-with-ul">Hợp tác quốc tế</a>
						<ul style="display: none; visibility: hidden;">
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
						<a href="#" class="sf-with-ul">Tin tức</a>
						<ul style="display: none; visibility: hidden;">
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
					<li><a href="#">Liên hệ</a></li>
				</ul>
			</div>
		</div>
		<div id="sr_bg">		
			<div align="center" class="sr">
				<form action="timkiem" method="POST" id="searchForm">
					<strong>Nhập từ khóa tìm kiếm</strong> 
					<input type="text" name="tu" id="searchKeyword" class="txtinput">
					<select class="sl" id="searchType" name="loai">
						<option value="1">Đề tài NCKH đã công bố</option>
						<option value="2">Đề xuất NCKH</option>
					</select>
					<input type="submit" value="Tìm kiếm" class="btn_">
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
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="bieumau">Văn bản - Biểu mẫu</a></li>
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