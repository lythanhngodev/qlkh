<?php 
function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );
    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
//ob_start("sanitize_output");
include_once 'check_login.php';
$token = $ketnoi->chuoingaunhien(256);
$_SESSION["token"] = $token;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>VLUTE Scientific Research</title><meta name="description" content=""><meta name="viewport" content="width=device-width, initial-scale=1"><base href="<?php echo $qlkh['HOSTADMIN']; ?>"><link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="../fontawesome/web-fonts-with-css/css/fontawesome-all.css"><link rel="stylesheet" href="css/fontastic.css"><link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css"><link rel="stylesheet" href="css/style.css" id="theme-stylesheet"><link rel="stylesheet" href="../css/font-awesome-animation.min.css"><link rel="shortcut icon" href="../images/favicon.ico"><script  type="text/javascript" src="../js/sweetalert.min.js"></script><script src="vendor/jquery/jquery.min.js"></script><script src="js/popper.js" type="text/javascript"></script><script src="vendor/bootstrap/js/bootstrap.min.js"></script><link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-select.min.css"><script type="text/javascript">function kiemtraketnoi(){var xhr = new XMLHttpRequest();var file='<?php echo $qlkh['HOSTGOC']; ?>test-connect-internet.png';var r=3000;xhr.open('HEAD',file+'?subins='+r,false);try{xhr.send();if(xhr.status>=200&&xhr.status<304)return true;else return false;}catch(e){return false;}};function dongmodal(id){$("#"+id).modal('hide');};function khongthanhcong(chuoi){$.notify(chuoi,{animate:{enter:'animated fadeIn',exit:'animated fadeOut'},placement:{from:'top',align:'right'},type:'danger',delay:4000});};function canhbao(chuoi){$.notify(chuoi,{animate:{enter:'animated fadeIn',exit:'animated fadeOut'},placement:{from:'top',align:'right'},type:'warning',delay: 2000});};function thanhcong(chuoi){$.notify(chuoi,{animate:{enter:'animated fadeIn',exit:'animated fadeOut'},placement:{from:'top',align:'right'},type:'success',delay:3000});}</script>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex" style="position: relative;">
          <!-- User Info-->
          <a href="?p=thongtincanhan">
            <div class="sidenav-header-inner">
              <img src="../images/user/<?php echo $hinh; ?>" alt="person" class="img-fluid rounded-circle" style="position:  absolute;top: 10px;left: 8px;">
              <h5 style="position:  absolute;top: 17px;left: 52px;color: #fff;font-size: 20px;"><?php echo $ten; ?></h5>
              <h5 style="position:  absolute;bottom: -3px;left: 10px;color: #fff;font-size: 11px;"><?php echo $email; ?></h5>
            </div>
          </a>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="?p=thongtincanhan" class="brand-small text-center"><img src="../images/user/<?php echo $hinh; ?>" alt="person" class="img-fluid rounded-circle" style="position:  absolute;left:  18px;top: 15px;"></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="<?php echo $qlkh['HOSTADMIN'] ?>"> <i class="icon-home"></i>Trang chủ</a></li>

          <?php if ($loaitaikhoan=='admin'){ ?>
            <li id="slider"><a href="?p=slider"> <i class="far fa-images"></i>Quản lý slider</a></li>
            <li id="phatthongbao"><a href="?p=phatthongbao"> <i class="fas fa-bullhorn"></i>Phát thông báo</a></li>
            <div class="admin-menu">
                <h5 class="sidenav-heading">NGHIÊN CỨU KHOA HỌC</h5>
                <ul id="side-admin-menu" class="side-menu list-unstyled">
                    <li id="quanlydetaiduan"><a href="?p=quanlydetaiduan"> <i class="fab fa-accusoft"></i>Quản lý đề tài - dự án</a></li>
                    <li id="quanlydetai"><a href="?p=quanlydetai"> <i class="fas fa-external-link-alt"></i>Quản lý đề tài của tôi</a></li>
                    <li id="themdetaidanghiemthu"><a href="?p=themdetaidanghiemthu"> <i class="fas fa-plus"></i>Nhập đề tài - dự án đã nghiệm thu</a></li>
                    <li id="quanlyhoso"><a href="?p=quanlyhoso"> <i class="fas fa-briefcase"></i>Quản lý hồ sơ</a></li>
                    <li id="dexuatmoi"><a href="?p=dexuatmoi"> <i class="fas fa-align-right"></i>Đề tài đang đề xuất</a></li>
                    <li id="dangthuchien"><a href="?p=dangthuchien"> <i class="fas fa-align-right"></i>Đề tài đang thực hiện</a></li>
                    <li id="denhanbaocao"><a href="?p=denhanbaocao"> <i class="fas fa-align-right"></i>Đến hạn báo cáo</a></li>
                    <li id="tretiendo"><a href="?p=tretiendo"> <i class="fas fa-align-right"></i>Trễ tiến độ</a></li>
                </ul>
            </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Báo khoa học</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="baokhoahoc"><a href="?p=baokhoahoc"> <i class="fas fa-newspaper"></i>Báo khoa học</a></li>
                      <li id="thembaokhoahoc"><a href="?p=thembaokhoahoc"> <i class="fas fa-plus"></i>Thêm bài báo khoa học</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Thống kê</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="thongke"><a href="?p=thongke"> <i class="fas fa-chart-pie"></i>Thống kê</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Tin tức - Sự kiện</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="chuyenmuc"><a href="?p=chuyenmuc"> <i class="fas fa-list-ul"></i>Chuyên mục</a></li>
                      <li id="tintuc"><a href="?p=tintuc"> <i class="fas fa-newspaper"></i>Tin tức</a></li>
                      <li id="themtintuc"><a href="?p=themtintuc"> <i class="fas fa-plus"></i>Thêm tin tức</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Biểu mẫu</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="bieumau"><a href="?p=bieumau"> <i class="fas fa-paperclip"></i>Biểu mẫu</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Quản lý thành viên</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="xacnhantaikhoan"><a href="?p=xacnhantaikhoan"> <i class="far fa-calendar-check"></i>Xác nhận đăng ký tài khoản</a></li>
                      <li id="thanhvien"><a href="?p=thanhvien"> <i class="fas fa-users"></i>Thông tin thành viên</a></li>
                      <li id="nhapthanhvien"><a href="?p=nhapthanhvien"> <i class="fas fa-user-plus"></i>Nhập thành viên</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Quản lý chung</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="quanlychung"><a href="?p=quanlychung"> <i class="fas fa-cogs"></i>Quản lý chung</a></li>
                  </ul>
              </div>


          <?php } else if($loaitaikhoan=='khoahoc'){ ?>
              <li id="phatthongbao"><a href="?p=phatthongbao"> <i class="fas fa-bullhorn"></i>Phát thông báo</a></li>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">NGHIÊN CỨU KHOA HỌC</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="quanlydetaiduan"><a href="?p=quanlydetaiduan"> <i class="fab fa-accusoft"></i>Quản lý đề tài - dự án</a></li>
                      <li id="quanlydetai"><a href="?p=quanlydetai"> <i class="fas fa-external-link-alt"></i>Quản lý đề tài của tôi</a></li>
                      <li id="themdetaidanghiemthu"><a href="?p=themdetaidanghiemthu"> <i class="fas fa-plus"></i>Nhập đề tài - dự án đã nghiệm thu</a></li>
                      <li id="quanlyhoso"><a href="?p=quanlyhoso"> <i class="fas fa-briefcase"></i>Quản lý hồ sơ</a></li>
                      <li id="dexuatmoi"><a href="?p=dexuatmoi"> <i class="fas fa-align-right"></i>Đề tài đang đề xuất</a></li>
                      <li id="dangthuchien"><a href="?p=dangthuchien"> <i class="fas fa-align-right"></i>Đề tài đang thực hiện</a></li>
                      <li id="denhanbaocao"><a href="?p=denhanbaocao"> <i class="fas fa-align-right"></i>Đến hạn báo cáo</a></li>
                      <li id="tretiendo"><a href="?p=tretiendo"> <i class="fas fa-align-right"></i>Trễ tiến độ</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Thống kê</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="thongke"><a href="?p=thongke"> <i class="fas fa-chart-pie"></i>Thống kê</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Báo khoa học</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="baokhoahoc"><a href="?p=baokhoahoc"> <i class="fas fa-newspaper"></i>Báo khoa học</a></li>
                      <li id="thembaokhoahoc"><a href="?p=thembaokhoahoc"> <i class="fas fa-plus"></i>Thêm bài báo khoa học</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Tin tức - Sự kiện</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="tintuc"><a href="?p=tintuc"> <i class="fas fa-newspaper"></i>Tin tức</a></li>
                      <li id="themtintuc"><a href="?p=themtintuc"> <i class="fas fa-plus"></i>Thêm tin tức</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Biểu mẫu</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="bieumau"><a href="?p=bieumau"> <i class="fas fa-paperclip"></i>Biểu mẫu</a></li>
                  </ul>
              </div>

          <?php } else if($loaitaikhoan=='truongkhoaphong'){ ?>
            <li id="quanlydetai"><a href="?p=quanlydetai"> <i class="fas fa-external-link-alt"></i>Quản lý đề tài của tôi</a></li>
            <li id="dexuatmoi"><a href="?p=dexuatmoi"> <i class="fas fa-align-right"></i>ĐT đang đề xuất khoa</a></li>
            <li id="dangthuchien"><a href="?p=dangthuchien"> <i class="fas fa-align-right"></i>ĐT đang thực hiện khoa</a></li>
            <li id="denhanbaocao"><a href="?p=denhanbaocao"> <i class="fas fa-align-right"></i>Đến hạn báo cáo khoa</a></li>
            <li id="tretiendo"><a href="?p=tretiendo"> <i class="fas fa-align-right"></i>Trễ tiến độ khoa</a></li>
            <div class="admin-menu">
                  <h5 class="sidenav-heading">Báo khoa học</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="baokhoahoc"><a href="?p=baokhoahoc"> <i class="fas fa-newspaper"></i>Báo khoa học</a></li>
                      <li id="thembaokhoahoc"><a href="?p=thembaokhoahoc"> <i class="fas fa-plus"></i>Thêm bài báo khoa học</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Biểu mẫu</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="xembieumau"><a href="?p=xembieumau"> <i class="fas fa-paperclip"></i>Biểu mẫu</a></li>
                  </ul>
              </div>
          <?php } else if($loaitaikhoan=='binhthuong'){ ?>
            <li id="quanlydetai"><a href="?p=quanlydetai"> <i class="fas fa-external-link-alt"></i>Quản lý đề tài của tôi</a></li>
            <li id="denhanbaocao"><a href="?p=denhanbaocao"> <i class="far fa-clock"></i>Đến hạn báo cáo</a></li>
            <li id="tretiendo"><a href="?p=tretiendo"> <i class="fab fa-audible"></i>Trễ tiến độ</a></li>
            <div class="admin-menu">
                  <h5 class="sidenav-heading">Báo khoa học</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="baokhoahoc"><a href="?p=baokhoahoc"> <i class="fas fa-newspaper"></i>Báo khoa học</a></li>
                      <li id="thembaokhoahoc"><a href="?p=thembaokhoahoc"> <i class="fas fa-plus"></i>Thêm bài báo khoa học</a></li>
                  </ul>
              </div>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Biểu mẫu</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="xembieumau"><a href="?p=xembieumau"> <i class="fas fa-paperclip"></i>Biểu mẫu</a></li>
                  </ul>
              </div>
            <?php } ?>
              <?php
                    $ketnoi = new  clsKetnoi();
                    $conn = $ketnoi->ketnoi();
                    $hoi = "SELECT DISTINCT xd.IDDT, dt.TENDETAI FROM xetduyetdetai xd, detai dt WHERE dt.TRANGTHAI=N'Đang xét duyệt' AND xd.IDDT = dt.IDDT AND xd.IDND = '$idnd'";
                    $_m = mysqli_query($conn,$hoi);
                    $_c = mysqli_num_rows($_m);
                    if ($_c > 0){
                        echo "<h5 class=\"sidenav-heading\">Đánh giá xét duyệt</h5>";
                        echo "<li id=\"danhgiadecuong\"><a href=\"?p=danhgiadecuong\"> <i class=\"fas fa-balance-scale\"></i>&nbsp;&nbsp;Đánh giá đề cương ĐT</a></li>";
                    }
              ?>
              <?php
              $hoi = "SELECT DISTINCT nt.IDDT, dt.TENDETAI FROM xetduyetnghiemthu nt, detai dt WHERE dt.TRANGTHAI=N'Đang thực hiện' AND nt.IDDT = dt.IDDT AND nt.IDND = '$idnd'";
              $_m = mysqli_query($conn,$hoi);
              $_c = mysqli_num_rows($_m);
              if ($_c > 0){
                  echo "<h5 class=\"sidenav-heading\">Đánh giá nghiệm thu</h5>";
                  echo "<li id=\"danhgianghiemthu\"><a href=\"?p=danhgianghiemthu\"> <i class=\"fas fa-balance-scale\"></i>&nbsp;&nbsp;Đánh giá nghiệm thu</a></li>";
              }
              mysqli_close($conn);
              ?>
              <div class="admin-menu">
                  <h5 class="sidenav-heading">Thông tin cá nhân</h5>
                  <ul id="side-admin-menu" class="side-menu list-unstyled">
                      <li id="thongtincanhan"><a href="?p=thongtincanhan"> <i class="far fa-address-book"></i>Thông tin cá nhân</a></li>
                  </ul>
              </div>
          </ul>
        </div>

      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"></i></a><span style="color: #FFF;font-size: 1.5rem;padding-left: 1rem;font-weight: 500;line-height: 50px;padding-top: 2px;    text-shadow: 0px 4px 3px #1e5e96;"><img src="../images/logo.png" style="width: 50px;">&ensp;HỆ THỐNG QUẢN LÝ NGHIÊN CỨU KHOA HỌC</span><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Log out-->
                <li class="nav-item"><a href="?p=thongtincanhan" class="nav-link"><span class="d-none d-sm-inline-block"><i class="fas fa-user"></i>&ensp;Thông tin cá nhân</span></a></li>
                <li class="nav-item"><a href="dangxuat.php" class="nav-link logout"><span class="d-none d-sm-inline-block"><i class="fas fa-sign-out-alt"></i>&ensp;Đăng xuất</span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Tiêu đề chính -->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item active tieude"></li>
          </ul>
        </div>
      </div>
      <!-- Khung hiển thị chính-->
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
          <h1 class="h3 display tieude"></h1>
          </header>
          <?php include_once "public_c.php"; ?>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>&copy; Copyright of Ngô Thanh Lý (Faculty of Information Technology 2014)</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Phiên bản: <a href="#" class="external">06.09.06.18</a></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="../bootstrap/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
    <script type="text/javascript">
      //$('body .dropdown-toggle').dropdown();
      $(document).ready(function(){
        $('#thongbao-2bgf').hide();
        $('#thongbao-2bgf').parent().hide();

        $('#thongbao-2bgf').append('<div class="alert alert-info" role="alert">Vui lòng cập nhật thông tin <b>trình độ chuyên môn, đơn vị công tác, số điện thoại liên lạc</b> tại trang <a href="?p=thongtincanhan" class="alert-link"><u>thông tin cá nhân</u></a>.</div><div class="alert alert-info" role="alert">Khi xảy ra lỗi hoặc sự cố vui lòng chụp ảnh màn hình gửi đến mail <a href="mailto:lythanhngodev@gmail.com"><u>lythanhngodev@gmail.com</u></a>.</div>');
      });
    </script>
    <script src="nonti/bootstrap-notify.min.js"></script>
  </body>
</html>