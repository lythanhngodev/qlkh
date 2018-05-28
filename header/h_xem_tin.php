<?php
include_once 'model/m_xem_tin.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = intval($_GET['id']);
	$h_baiviet = lay_chi_tiet_tin($id);
	$hbv = mysqli_fetch_assoc($h_baiviet); ?>
	<meta name="description" content="Nghiên cứu khoa học &amp; Hợp tác quốc tế | Đại học Sư phạm Kỹ thuật Vĩnh Long" />
	<title><?php echo $hbv['TENBV'] ?> | Nghiên cứu khoa học &amp; Hợp tác quốc tế VLUTE</title>
	<!-- Facebook SEO -->
	<meta property="fb:app_id" content="2165745763451934" /> 
	<meta property="og:url" content="<?php echo "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content='<?php echo addslashes($hbv['TENBV']) ?> | Nghiên cứu khoa học &amp; Hợp tác quốc tế VLUTE' />
	<meta property="og:image" content="<?php echo $qlkh['HOSTGOC'].$hbv['HINHANH'] ?>" />
	<meta property="og:description" content="<?php echo addslashes($hbv['MOTA']) ?>" />
	<link rel="shortcut icon" href="<?php echo $qlkh['HOSTGOC'] ?>images/favicon.ico" />
	<!-- Google SEO -->
	<meta name="google" content="nositelinkssearchbox" />
	<meta name="google" content="notranslate" />
	<meta name="keywords" content="Phong nghien cuu khoa hoc truong dai hoc su pham ky thuat vinh long, nckh vlute, VLUTE SCIENTIFIC RESEARCH, VLUTE SCIENTIFIC RESEARCH, SR VLUTE, nckh vlute, nghien cuu khoa hoc vlute, nghien cuu khoa hoc su pham ky thuat vinh long, nghien cuu khoa hoc vlute" />
	<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "News",
		  "url": "<?php echo "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>",
		  "name": "<?php echo addslashes($hbv['TENBV']) ?>",
		  "image": "<?php echo $qlkh['HOSTGOC'].$hbv['HINHANH'] ?>"
		}
	</script>
<?php }else{ ?>
	<meta name="description" content="Nghiên cứu khoa học &amp; Hợp tác quốc tế | Đại học Sư phạm Kỹ thuật Vĩnh Long" />
	<title>Nghiên cứu khoa học &amp; Hợp tác quốc tế | Đại học Sư phạm Kỹ thuật Vĩnh Long</title>
	<!-- Facebook SEO -->
	<meta property="og:url" content="<?php echo $qlkh['HOSTGOC'] ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content='Nghiên cứu khoa học &amp; Hợp tác quốc tế | Đại học Sư phạm kỹ thuật Vĩnh Long' />
	<meta property="og:image" content="<?php echo $qlkh['HOSTGOC'] ?>images/vlute-o.jpg" />
	<meta property="fb:app_id" content="2165745763451934" /> 
	<link rel="shortcut icon" href="<?php echo $qlkh['HOSTGOC'] ?>images/favicon.ico" />
	<!-- Google SEO -->
	<meta name="google" content="nositelinkssearchbox" />
	<meta name="google" content="notranslate" />
	<meta name="keywords" content="Phong nghien cuu khoa hoc truong dai hoc su pham ky thuat vinh long, nckh vlute, VLUTE SCIENTIFIC RESEARCH, VLUTE SCIENTIFIC RESEARCH, SR VLUTE, nckh vlute, nghien cuu khoa hoc vlute, nghien cuu khoa hoc su pham ky thuat vinh long, nghien cuu khoa hoc vlute" />
<?php } ?>