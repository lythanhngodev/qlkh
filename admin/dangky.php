<?php include_once "../config.php"; ?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Đăng ký</title><meta name="description" content=""><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="robots" content="all,follow"><!-- Bootstrap CSS--><link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"><!-- Font Awesome CSS--><link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css"><!-- Fontastic Custom icon font--><link rel="stylesheet" href="css/fontastic.css"><!-- Google fonts - Roboto --><!-- theme stylesheet--><link rel="stylesheet" href="css/style.css" id="theme-stylesheet"><link rel="stylesheet" href="../css/animate.css"><!-- Favicon--><link rel="shortcut icon" href="../images/favicon.ico"></head><style type="text/css">#bg{background:url('../images/red-rocks-park-o.jpg') -25px -50px;top:0;width:100%;z-index:0;height:100%;background-size: calc(100% + 50px);}</style><body><div class="page login-page" id="bg" ><div class="container"><div class="form-outer text-center d-flex align-items-center"><div class="form-inner animated fadeIn" style="background: rgba(225, 234, 234, 0.9);margin: 0 auto;"><h2 style="font-weight: 300;">Đại học Sư phạm Kỹ thuật Vĩnh Long</h2><img src="../images/logo.png" width="96"><br><br><div class="logo text-uppercase"><h3 style="font-weight: 300;" class="text-primary"><b style="font-size: 2.12rem;font-family:  sans-serif;font-weight: 500;">Phần mềm quản lý<br>nghiên cứu khoa học</b></h3><strong style="font-size: 1rem;">VLUTE Scientific Research</strong></div><form method="POST" class="text-left form-validate"><div class="form-group-material"><input id="dk-username" type="text" name="hoten" required data-msg="Vui lòng nhập tên người dùng" class="input-material"><label for="login-username" class="label-material">Họ &amp; Tên</label></div><div class="form-group-material"><input id="dk-tendangnhap" type="text" name="tdn" required data-msg="Vui lòng nhập tên đăng nhập" class="input-material"><label for="login-username" class="label-material">Tên đăng nhập</label></div><div class="form-group-material"><input id="dk-mail" type="mail" name="mail" required data-msg="Vui lòng nhập mail người dùng" class="input-material"><label for="login-mail" class="label-material">Địa chỉ mail</label></div><center class="form-group-material"><input id="dk-sv" type="checkbox" style="transform: scale(2);">&ensp;Tôi là sinh viên</center><div class="form-group text-center"></div><div class="form-group text-center"><a class="btn btn-primary" id="check">ĐĂNG KÝ TÀI KHOẢN</a><input type="submit" name="dangky" hidden="hidden"><br><br><a href="login.php" class="forgot-pass" style="color: #000;font-size: 0.9rem;"><< Quay lại trang đăng nhập</a></div></form></div></div></div></div><script src="vendor/jquery/jquery.min.js"></script><script src="vendor/bootstrap/js/bootstrap.min.js"></script><script src="vendor/jquery.cookie/jquery.cookie.js"> </script><script src="vendor/jquery-validation/jquery.validate.min.js"></script><script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script><script src="js/front.js"></script><script type="text/javascript" src="../js/sweetalert.min.js"></script><script type="text/javascript">function khongthanhcong(chuoi){$.notify(chuoi,{animate:{enter:'animated fadeIn',exit:'animated fadeOut'},placement:{from:'top',align:'right'},type:'danger',delay:4000});};function thanhcong(chuoi){$.notify(chuoi,{animate:{enter:'animated fadeIn',exit:'animated fadeOut'},placement:{from:'top',align:'right'},type:'success',delay:3000});};$(document).ready(function(){swal("Thông báo!", "Bạn cần chờ quản trị viên xác minh tài khoản ngay sau khi bạn hoàn thành các bước đăng ký. Kết quả xác minh sẽ được gửi đến mail của bạn.","info");;var movementStrength=25;var height=movementStrength/$(window).height();var width=movementStrength/$(window).width();$("#bg").mousemove(function(e){var pageX=e.pageX-($(window).width()/2);var pageY=e.pageY-($(window).height()/2);var newvalueX=width*pageX*-1-25;var newvalueY=height*pageY*-1-50;$('#bg').css("background-position",newvalueX+"px "+newvalueY+"px");});$('#check').click(function(){var ho, ten, hoten=$('#dk-username').val().trim(),mail=$('#dk-mail').val().trim(),tdn=$('#dk-tendangnhap').val().trim();while(hoten.search('  ')!=-1)hoten=hoten.replace('  ',' ');if(hoten.search(' ')==-1){khongthanhcong('Họ và Tên nhập chưa hợp lệ');return;}ho = hoten.substring(0,hoten.lastIndexOf(' ')).trim();ten=hoten.substring(hoten.lastIndexOf(' ')+1,hoten.length);if(!mail){khongthanhcong('Vui lòng nhập mail');return;}if(!tdn||/[^A-Za-z0-9_.]/.test(tdn)){khongthanhcong('Tên đăng nhập không hợp lệ');return;}$.ajax({url : "ajax/ajax_dang_ky.php",type:"post",dataType:"text",data:{ho: ho,ten: ten,tdn:tdn,mail: mail},beforeSend: function(){swal("Đợi đã!","Vui lòng chờ đợi cho đến khi quá trình đăng ký kết thúc", "info");},success: function(data){var mang=$.parseJSON(data);if(mang.trangthai==1){swal("Đăng ký thành công","Đăng ký tài khoản thành công vui lòng kiểm tra mail của bạn","success");setTimeout( function(){location.href="<?php echo $qlkh['HOSTADMIN']; ?>";},4000);}else{swal("Ôi! Lỗi", "Mail hoặc tên đăng nhập đã tồn tại, vui lòng kiểm tra lại","error");}},error: function(){khongthanhcong('Có lỗi xảy ra, vui lòng thử lại sau');}});});});</script></body></html><script src="nonti/bootstrap-notify.min.js"></script>