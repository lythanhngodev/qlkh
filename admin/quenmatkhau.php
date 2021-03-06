<?php include '../config.php'; ?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Quên mật khẩu</title><meta name="description" content=""><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="robots" content="all,follow"><!-- Bootstrap CSS--><link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"><!-- Font Awesome CSS--><link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css"><!-- Fontastic Custom icon font--><link rel="stylesheet" href="css/fontastic.css"><!-- Google fonts - Roboto --><!-- theme stylesheet--><link rel="stylesheet" href="css/style.css" id="theme-stylesheet"><link rel="stylesheet" href="../css/animate.css"><!-- Favicon--><link rel="shortcut icon" href="../images/favicon.ico"></head><style type="text/css">#bg{/*background:url('../images/background.jpg') -25px -50px;*/background:url('../images/red-rocks-park-o.jpg') -25px -50px;top:0;width:100%;z-index:0;height:100%;background-size: calc(100% + 50px);}</style><body><div class="page login-page" id="bg" ><div class="container"><div id="thongbao"></div><div class="form-outer text-center d-flex align-items-center"><div class="form-inner animated flipInX" style="background: rgba(225, 234, 234, 0.9);"><div class="logo text-uppercase"><h3 style="font-weight: 300;" class="text-primary"><b style="font-size: 2.12rem;font-family:  sans-serif;font-weight: 500;">QUÊN MẬT KHẨU</b></h3></div><p style="font-size: 1.3rem;color: #000;">Nhập địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn một liên kết để đặt lại mật khẩu của bạn.</p><form method="POST" class="text-left form-validate"><div class="form-group-material"><input id="dk-mail" type="mail" name="mail" required data-msg="Vui lòng nhập mail người dùng" class="input-material"><label for="login-mail" class="label-material">Địa chỉ Email</label></div><div class="form-group text-center"></div><div class="form-group text-center"><a class="btn btn-primary" id="check">GỬI EMAIL ĐẶT LẠI MẬT KHẨU</a><br><br><a href="login.php" class="forgot-pass" style="color: #000;font-size: 0.9rem;"><< Quay lại trang đăng nhập</a></div></form></div></div></div></div><script src="vendor/jquery/jquery.min.js"></script><script src="vendor/bootstrap/js/bootstrap.min.js"></script><script src="vendor/jquery.cookie/jquery.cookie.js"> </script><script src="vendor/jquery-validation/jquery.validate.min.js"></script><script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script><script src="js/front.js"></script><script type="text/javascript" src="../js/sweetalert.min.js"></script><script type="text/javascript"> function khongthanhcong(chuoi){$.notify(chuoi,{animate:{enter:'animated fadeIn',exit:'animated fadeOut'},placement:{from:'top',align:'right'},type:'danger',delay:4000});};function thanhcong(chuoi){$.notify(chuoi,{animate:{enter:'animated fadeIn',exit:'animated fadeOut'},placement:{from:'top',align:'right'},type:'success',delay:3000});};$(document).ready(function(){var movementStrength = 25;var height = movementStrength / $(window).height();var width = movementStrength / $(window).width();$("#bg").mousemove(function(e){var pageX = e.pageX - ($(window).width() / 2);var pageY = e.pageY - ($(window).height() / 2);var newvalueX = width * pageX * -1 - 25;var newvalueY = height * pageY * -1 - 50;$('#bg').css("background-position", newvalueX+"px "+newvalueY+"px");});
	$('#check').click(function(){
		var mail= $('#dk-mail').val().trim();if(!mail){swal("Ôi! Lỗi", "Vui lòng nhập email", "error");;return;}
		$.ajax({
			url : 'ajax/ajax_reset_password.php',
			type : "post",
			dataType:"text",
			data : {
				mail: mail
			},
			beforeSend : function(){
				swal("Đợi đã!", "Vui lòng chờ đợi cho đến khi quá trình hoàn tất", "info");
			},
			success : function(data){
				var mang = $.parseJSON(data);
				if(mang.trangthai==1){
					swal("Tốt","Đường dẫn đặt lại mật khẩu đã được gửi đến email của bạn, vui lòng kiểm tra email","success");
					setTimeout(function(){ 
						location.href = "<?php echo $qlkh['HOSTADMIN']; ?>";
					}, 2000);
					$('.login-page').hide();
				}else{
					swal("Ôi! Lỗi", "Mail hoặc tên đăng nhập đã tồn tại, vui lòng kiểm tra lại", "error");
				}
			},
			error : function(){
				khongthanhcong('Có lỗi xảy ra, vui lòng thử lại sau');
			}
		});
	});
});
</script>
<script src="nonti/bootstrap-notify.min.js"></script>
</body>
</html>