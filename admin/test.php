<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>VLUTE Scientific Research</title><meta name="description" content=""><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="robots" content="all,follow"><base href="http://qlkh.vlute.edu.vn/admin/"><!-- Bootstrap CSS--><link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"><!-- Font Awesome CSS--><script defer src="../fontawesome/svg-with-js/js/fontawesome-all.js"></script><!-- Fontastic Custom icon font--><link rel="stylesheet" href="css/fontastic.css"><!-- Google fonts - Roboto --><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><!-- jQuery Circle--><link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css"><!-- Custom Scrollbar--><link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"><!-- theme stylesheet--><link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet"><!-- Custom stylesheet - for your changes--><link rel="stylesheet" href="css/custom.css"><!-- Animated CSS Font Awesome --><link rel="stylesheet" href="../css/font-awesome-animation.min.css"><!-- Favicon--><link rel="shortcut icon" href="../images/favicon.ico"><script type="text/javascript" src="../js/sweetalert.min.js"></script><script src="vendor/jquery/jquery.min.js"></script><script src="js/popper.js" type="text/javascript"></script><script src="vendor/bootstrap/js/bootstrap.min.js"></script><link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-select.min.css"><script type="text/javascript">function kiemtraketnoi(){var xhr = new XMLHttpRequest();var file='http://qlkh.vlute.edu.vn/test-connect-internet.png';var r=3000;xhr.open('HEAD',file+'?subins='+r,false);try{xhr.send();if(xhr.status>=200&&xhr.status<304)return true;else return false;}catch(e){return false;}};
        function dongmodal(id){$("#"+id).modal('hide');};function khongthanhcong(chuoi){$.notify(chuoi,{animate:{enter:'animated fadeIn',exit:'animated fadeOut'},placement:{from:'top',align:'right'},type:'danger',delay:4000});};function canhbao(chuoi){$.notify(chuoi,{animate:{enter:'animated fadeIn',exit:'animated fadeOut'},placement:{from:'top',align:'right'},type:'warning',delay: 2000});};function thanhcong(chuoi){$.notify(chuoi,{animate:{enter:'animated fadeIn',exit:'animated fadeOut'},placement:{from:'top',align:'right'},type:'success',delay:3000});}</script>
</head>
<body>
<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <a href="?p=thongtincanhan">
                <div class="sidenav-header-inner text-center"><img src="../images/user/user.png" alt="person" class="img-fluid rounded-circle">
                    <h2 class="h5">Chào! LÝ</h2>
                </div>
            </a>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>S</strong><strong class="text-primary">R</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="http://qlkh.vlute.edu.vn/admin/"> <i class="icon-home"></i>Trang chủ</a></li>


                <li id="slider"><a href="?p=slider"> <i class="far fa-images"></i>&nbsp;&nbsp;Quản lý slider</a></li>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">NGHIÊN CỨU KHOA HỌC</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li id="quanlydetaiduan"><a href="?p=quanlydetaiduan"> <i class="fab fa-accusoft"></i>&nbsp;&nbsp;Quản lý đề tài - dự án</a></li>
                        <li id="quanlydetai"><a href="?p=quanlydetai"> <i class="fas fa-external-link-alt"></i>&nbsp;&nbsp;Quản lý đề tài của tôi</a></li>
                        <li id="themdetaidanghiemthu"><a href="?p=themdetaidanghiemthu"> <i class="fas fa-plus"></i>&nbsp;&nbsp;Nhập đề tài - dự án đã nghiệm thu</a></li>
                        <li id="quanlyhoso"><a href="?p=quanlyhoso"> <i class="fas fa-briefcase"></i>&nbsp;&nbsp;Quản lý hồ sơ</a></li>
                        <li id="dexuatmoi"><a href="?p=dexuatmoi"> <i class="fas fa-align-right"></i>&nbsp;&nbsp;Đề tài đang đề xuất</a></li>
                        <li id="dangthuchien"><a href="?p=dangthuchien"> <i class="fas fa-align-right"></i>&nbsp;&nbsp;Đề tài đang thực hiện</a></li>
                        <li id="denhanbaocao"><a href="?p=denhanbaocao"> <i class="fas fa-align-right"></i>&nbsp;&nbsp;Đến hạn báo cáo</a></li>
                        <li id="tretiendo"><a href="?p=tretiendo"> <i class="fas fa-align-right"></i>&nbsp;&nbsp;Trễ tiến độ</a></li>
                    </ul>
                </div>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">Báo khoa học</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li id="baokhoahoc"><a href="?p=baokhoahoc"> <i class="fas fa-newspaper"></i>&nbsp;&nbsp;Báo khoa học</a></li>
                        <li id="thembaokhoahoc"><a href="?p=thembaokhoahoc"> <i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm bài báo khoa học</a></li>
                    </ul>
                </div>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">Thống kê</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li id="thongke"><a href="?p=thongke"> <i class="fas fa-chart-pie"></i>&nbsp;&nbsp;Thống kê</a></li>
                    </ul>
                </div>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">Tin tức - Sự kiện</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li id="chuyenmuc"><a href="?p=chuyenmuc"> <i class="fas fa-list-ul"></i>&nbsp;&nbsp;Chuyên mục</a></li>
                        <li id="tintuc"><a href="?p=tintuc"> <i class="fas fa-newspaper"></i>&nbsp;&nbsp;Tin tức</a></li>
                        <li id="themtintuc"><a href="?p=themtintuc"> <i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm tin tức</a></li>
                    </ul>
                </div>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">Biểu mẫu</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li id="bieumau"><a href="?p=bieumau"> <i class="fas fa-paperclip"></i>&nbsp;&nbsp;Biểu mẫu</a></li>
                    </ul>
                </div>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">Quản lý thành viên</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li id="xacnhantaikhoan"><a href="?p=xacnhantaikhoan"> <i class="far fa-calendar-check"></i>&nbsp;&nbsp;Xác nhận đăng ký tài khoản</a></li>
                        <li id="thanhvien"><a href="?p=thanhvien"> <i class="fas fa-users"></i>&nbsp;&nbsp;Thông tin thành viên</a></li>
                        <li id="nhapthanhvien"><a href="?p=nhapthanhvien"> <i class="fas fa-user-plus"></i>&nbsp;&nbsp;Nhập thành viên</a></li>
                    </ul>
                </div>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">Quản lý chung</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li id="quanlychung"><a href="?p=quanlychung"> <i class="fas fa-cogs"></i>&nbsp;&nbsp;Quản lý chung</a></li>
                    </ul>
                </div>


                <div class="admin-menu">
                    <h5 class="sidenav-heading">Thông tin cá nhân</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li id="thongtincanhan"><a href="?p=thongtincanhan"> <i class="far fa-address-book"></i>&nbsp;&nbsp;Thông tin cá nhân</a></li>
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
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"></i></a><span style="color: #FFF;font-size: 1.5rem;padding-left: 1rem;font-weight: 500;line-height: 50px;padding-top: 2px;"><img src="../images/logo.png" style="width: 50px;">&ensp;HỆ THỐNG QUẢN LÝ NGHIÊN CỨU KHOA HỌC</span><a href="index.html" class="navbar-brand">
                            <div class="brand-text d-none d-md-inline-block"></div></a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Log out-->
                        <li class="nav-item"><a href="dangxuat.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Đăng xuất</span>&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i></a></li>
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
            <div class="card cach background-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Nhập danh sách thành viên</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-warning btn-sm" id="nhap"><i class="far fa-file-excel"></i>&nbsp;&nbsp;Chọn file excel</button><br>
                                        Nếu chưa có mẫu nhập Excel vui lòng <a href="../files/20180514075706-dangkynguoidung.xlsx"><b><i><u>tải xuống.</u></i></b></a>
                                        <br><br>
                                        <input type="file" name="" id="filedl" hidden="hidden" accept="application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" id="bangdanhsach">
                                        <table id="bangthanhvien" class="table table-bordered table-hover">
                                            <thead>
                                            <tr style="background:#e9ecef;">
                                                <th class="giua">TT</th>
                                                <th class="giua">Họ</th>
                                                <th class="giua">Tên</th>
                                                <th class="giua">Mail / Tên đăng nhập</th>
                                                <th class="giua">Loại tài khoản</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div>
                                    <button type="button" class="btn btn-primary" id="luuthaydoi"><i class="fas fa-save"></i>&nbsp;&nbsp;Lưu thay đổi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cach"></div>

            <link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
            <script src="../js/datatables.min.js" type="text/javascript"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript">
                var obj;
                var obk;
                $(document).ready(function(){
                    $('#nhapthanhvien').addClass('active');
                    $('.tieude').html('Nhập danh sách thành viên');
                    $('#nhap').click(function(){
                        $('#filedl').click();
                    });
                    $('#filedl').change(function(){
                        var file_data = $('#filedl').prop('files')[0];
                        var type = file_data.type;
                        var match = ["application/vnd.ms-excel", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"];
                        if (type==match[0] || type==match[1]) {
                            var form_data = new FormData();
                            //thêm files vào trong form data
                            form_data.append('file', file_data);
                            if (kiemtraketnoi()){
                                $.ajax({
                                    url: 'ajax/ajax_import_file_thanh_vien.php', // gửi đến file upload.php
                                    dataType: 'text',
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    type: 'post',
                                    data: form_data,
                                    beforeSend: function () {
                                        swal("Đợi đã!", "Vui lòng chờ đợi cho đến khi hoàn tất", "info");
                                    },
                                    success: function(data){
                                        swal("Tốt!", "Tải dữ liệu hoàn tất", "success");
                                        $('#bangdanhsach').html(data);
                                        $('#filedl').val('');
                                    },
                                    error: function () {
                                        $.notifyClose();
                                        khongthanhcong('Không thể tải file');
                                    }
                                });
                            } else
                                khongthanhcong("Hiện không có kết nối internet");
                        }
                        else{
                            swal('Ôi! Lỗi','Vui lòng chọn định dạng Excel','error');
                        }
                    });
                    $('#luuthaydoi').click(function(){
                        var btv = [];
                        $('#bangthanhvien').find('tr:not(:first)').each(function(i, row) {
                            var cols = [];
                            $(this).find('td:not(:first) input, select').each(function(i, col) {
                                cols.push($(this).val().trim());
                            });
                            btv.push(cols);
                        });
                        var conf = confirm('Bạn có chắc chắc lưu tất cả các thay đổi?');
                        if (!conf) {
                            return;
                        }
                        if (kiemtraketnoi()) {
                            $.ajax({
                                url : "ajax/ajax_nap_thanh_vien.php",
                                type : "post",
                                dataType:"text",
                                data : {
                                    btv: btv
                                },
                                beforeSend: function(){
                                    swal('Đợi đã','Vui lòng chờ cho đến khi quá trình hoàn tất','info');
                                },
                                success : function (data){
                                    var kq = $.parseJSON(data);
                                    if(kq.trangthai==1){
                                        swal('Tốt','Nhập thành công ('+kq.so+' thành viên)','success');
                                    }
                                    else
                                        swal('Ôi! Lỗi','Các thành viên này đã tồn tại, vui lòng thử lại','error');
                                },
                                error: function () {
                                    swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                                }
                            });
                        }
                        else
                            swal('Ôi! Lỗi','Không có kết nối internet','error');
                    });
                });

                $(document).ready(function() {
                    $('#bangthanhvien').DataTable();
                } );
            </script>        </div>
    </section>
    <footer class="main-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; Copyright of Ngô Thanh Lý (Faculty of Information Technology 2014)</p>
                </div>
                <div class="col-sm-6 text-right">
                    <p>Phiên bản: <a href="#" class="external">1.0.1 demo</a></p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="../bootstrap/js/bootstrap-select.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Main File-->
<script src="js/front.js"></script>
<script type="text/javascript">
    //$('body .dropdown-toggle').dropdown();
    $(document).ready(function(){
        $('#thongbao-2bgf').append('<div class="alert alert-info" role="alert">Vui lòng cập nhật thông tin <b>trình độ chuyên môn, đơn vị công tác, số điện thoại liên lạc</b> tại trang <a href="?p=thongtincanhan" class="alert-link"><u>thông tin cá nhân</u></a>.</div><div class="alert alert-info" role="alert">Khi xảy ra lỗi hoặc sự cố vui lòng chụp ảnh màn hình gửi đến mail <a href="mailto:lythanhngodev@gmail.com"><u>lythanhngodev@gmail.com</u></a>.</div>');
    });
</script>
<script src="nonti/bootstrap-notify.min.js"></script>
</body>
</html>