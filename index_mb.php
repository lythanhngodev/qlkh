<?php include_once 'config.php';  ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="theme-color" content="#2b7ce0"><meta content="INDEX,FOLLOW" name="robots" /><meta name="COPYRIGHT" content="&copy; 2018 P. NCKH &amp; HTQT SPKT Vĩnh Long"><meta name="Designer" content="Ngô Thanh Lý | lythanhngodev@gmail.com"><meta name="GENERATOR" content="NCKH & HTQT VLUTE" /><?php include_once "header.php" ?><base href="<?php echo $qlkh['HOSTGOC'] ?>" /><script type="text/javascript">var _ltn = document.createElement('link');_ltn.rel = 'stylesheet';_ltn.href = 'css/style-mb.css';_ltn.type = 'text/css';var _go_ = document.getElementsByTagName('link')[0];_go_.parentNode.insertBefore(_ltn, _go_);</script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><noscript><link rel="stylesheet" type="text/css" href="css/style-mb.css"></noscript>
</head>
<body style="display: none;">
<div id="fb-root"></div><script>window.fbAsyncInit = function() {FB.init({appId: '2165745763451934',xfbml: true,version: 'v3.0'});FB.AppEvents.logPageView();};(function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) {return;}js = d.createElement(s); js.id = id;js.src = "https://connect.facebook.net/en_US/sdk.js";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script defer src="https://www.googletagmanager.com/gtag/js?id=UA-77436024-2"></script>
<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-77436024-2');</script>
<div class="progress" style="z-index: 9999;position: fixed;bottom: 0;border-radius:  0;height: 5px;background: transparent;left:  0;right: 0;">
  <div class="progress-bar" id="daluot" style="background: linear-gradient(130deg, #58d9d0 0%, #4a99fa 100%);transition: none;"></div>
</div>
<div>
  <div style="width: 100%;margin: 0 auto;position: relative;margin-top: 5px;">
    <img src="images/header_vlute_mb.png" style="width: 100%;" />
  </div>
</div>
<nav class="navbar navbar-lg navbar-dark bg-primary" style="background: linear-gradient(130deg, #54d7ce 0%, #2b7ce0 100%);">
  <a class="navbar-brand" href="#" id="tieude">Trang chủ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item" id="trangchu">
        <a class="nav-link" href="<?php echo $qlkh['HOSTGOC'] ?>">Trang chủ</a>
      </li>
      <li class="nav-item" id="bieumau">
        <a class="nav-link" href="http://vlute.edu.vn/index.php/nghien-cuu-khoa-hoc" target="_blank">Giới thiệu chung</a>
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
      <li class="nav-item" id="lienhe"><a class="nav-link" target="_blank" href="http://vlute.edu.vn/index.php/lien-he">Liên hệ</a></li>
    </ul>
  </div>
</nav>
<div class="thantrangmb container-fluid" style="padding: 0px 5px;margin-top: 5px;/*display: none;">
  <?php include_once 'public_c_mb.php'; ?>
</div>
<div id="timkiemgg"><script>(function() {var cx = '011375218569618766485:2vgaz9qfk-w';var gcse = document.createElement('script');gcse.type = 'text/javascript';gcse.async = true;gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(gcse, s);})();</script><gcse:search enableAutoComplete="true"></gcse:search>
</div>
<footer class="footer thantrangmb">
  <div class="container">
    <span class="text-muted">&copy;2018 P. NCKH &amp; HTQT - VLUTE</span>
  </div>
</footer>
<center><img id="back-to-top" src="images/back-to-top.png"></center>
<script async type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/lazy.js"></script>
<script type="text/javascript">function getDocHeight() {var D = document;return Math.max(D.body.scrollHeight, D.documentElement.scrollHeight,D.body.offsetHeight, D.documentElement.offsetHeight,D.body.clientHeight, D.documentElement.clientHeight);}$(window).scroll(function () {($(this).scrollTop() > 200) && $('#back-to-top').fadeIn() || $('#back-to-top').fadeOut(); $('#daluot').css("width",($(window).scrollTop()/($(document).height()-$(window).height())*100)+"%"); ($(window).scrollTop() + $(window).height() + $('.footer').height() + 15 >= getDocHeight()) && $('#daluot').css("width","100%");});$(document).on('click','#back-to-top',function(){$('#back-to-top').tooltip('hide');$('body,html').animate({scrollTop: 0}, 400);});</script>
</body>
</html>
