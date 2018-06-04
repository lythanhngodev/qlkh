<?php include_once 'config.php';  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<?php include_once "header.php" ?>
	<base href="<?php echo $qlkh['HOSTGOC'] ?>" /><!--<script defer src="fontawesome/svg-with-js/js/fontawesome-all.js"></script>--><link rel="stylesheet" type="text/css" href="css/style-mb.css"><link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"><script src="js/jquery-3.3.1.min.js"></script><script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<style type="text/css">#back-to-top{cursor: pointer;position: fixed;bottom: 10px;right: 15px;display: none;width: 40px;height: 40px;margin: 0 auto;}.table th, .table td{padding: 0.3rem !important;}</style>
<body>
<div>
  <div style="width: 100%;margin: 0 auto;position: relative;">
    <img src="images/header_vlute_mb.jpg" style="width: 100%;" />
  </div>
</div>
<nav class="navbar navbar-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#" id="tieude">Trang chủ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item" id="trangchu">
        <a class="nav-link" href="<?php echo $qlkh['HOSTGOC'] ?>">Trang chủ</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Giới thiệu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://vlute.edu.vn/index.php/nghien-cuu-khoa-hoc" target="_blank">Giới thiệu chung</a>
        </div>
      </li>
      <li class="nav-item dropdown" id="nckh">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hoạt động NCKH
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="nckhdexuatmoi">Đề xuất NCKH</a>
          <a class="dropdown-item" href="nckhdacongbo">Công trình khoa học đã công bố</a>
        </div>
      </li>
      <li class="nav-item dropdown" id="htqt">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hợp tác quốc tế
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
          $ketnoi = new clsKetnoi();
          $conn = $ketnoi->ketnoi();
          $sql = "SELECT DISTINCT * from chuyenmuc where LOAICHUYENMUC = N'hoptacquocte';";
          $q_sql = mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_assoc($q_sql)) {
            echo "<a class='dropdown-item' href='hoptacquocte/".$row['LINKCM']."-".$row['IDCM']."'>".$row['TENCM']."</a>";
          } 
          mysqli_close($conn);
           ?>
        </div>
      </li>
      <li class="nav-item" id="baokhoahoc">
        <a class="nav-link" href="baokhoahoc">Báo khoa học</a>
      </li>
      <li class="nav-item" id="bieumau">
        <a class="nav-link" href="bieumau">Văn bản - Biểu mẫu</a>
      </li>
      <li class="nav-item dropdown" id="tintuc">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tin tức
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
          $ketnoi = new clsKetnoi();
          $conn = $ketnoi->ketnoi();
          $sql = "SELECT DISTINCT * from chuyenmuc where LOAICHUYENMUC = N'tintuc';";
          $q_sql = mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_assoc($q_sql)) {
            echo "<a class='dropdown-item' href='chuyenmuc/".$row['LINKCM']."-".$row['IDCM']."'>".$row['TENCM']."</a>";
          } 
          mysqli_close($conn);
           ?>
        </div>
      </li>
      <li class="nav-item" id="lienhe"><a class="nav-link" href="#">Liên hệ</a></li>
    </ul>
  </div>
</nav>
<div class="thantrangmb container-fluid" style="padding: 0px 5px;margin-top: 5px;display: none;">
  <?php include_once 'public_c_mb.php'; ?>
</div>
<footer class="footer thantrangmb" style="display: none;">
  <div class="container">
    <span class="text-muted">&copy; Đại học Sư phạm Kỹ thuật Vĩnh Long.</span>
  </div>
</footer>
<center><img id="back-to-top" src="images/back-to-top.png"></center>
</body>
<script type="text/javascript">
  $(document).ready(function(){
    $('.thantrangmb').fadeIn(789);
     $(window).scroll(function () {
            if ($(this).scrollTop() > 250) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
	$(window).bind('orientationchange resize', function(event){
	  if (event.orientation) {
	    if (event.orientation == 'landscape') {
	      if (window.rotation == 90) {
		rotate(this, -90);
	      } else {
		rotate(this, 90);
	      }
	    }
	  }
	});
});
</script>
</html>
