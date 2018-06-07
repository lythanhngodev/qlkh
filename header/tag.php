<?php
include_once 'model/m_tag.php';
if (isset($_GET['tag']) && !empty($_GET['tag'])) {
	$tu = $_GET['tag'];
	$ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $tu = mysqli_real_escape_string($conn,$tu);
    mysqli_close($conn);
	$tag = tim_tag($tu);
	$row = mysqli_fetch_assoc($tag);
	$tentag=$row['TENKHOA'];
 ?>
	<meta name="description" content="Nghiên cứu khoa học &amp; Hợp tác quốc tế | Đại học Sư phạm Kỹ thuật Vĩnh Long" />
	<title>Tag: <?php echo $tentag ?> | Nghiên cứu khoa học &amp; Hợp tác quốc tế VLUTE</title>
	<!-- Facebook SEO -->
	<meta property="fb:app_id" content="2165745763451934" /> 
	<meta property="og:url" content="<?php echo "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content='<?php echo addslashes($tentag) ?> | Nghiên cứu khoa học &amp; Hợp tác quốc tế VLUTE' />
	<meta property="og:image" content="<?php echo $qlkh['HOSTGOC'] ?>images/vlute-o.jpg" />
	<meta property="og:description" content="<?php echo addslashes("Tag: ".$tentag) ?>" />
	<link rel="shortcut icon" href="<?php echo $qlkh['HOSTGOC'] ?>images/favicon.ico" />
	<!-- Google SEO -->
	<meta name="google" content="nositelinkssearchbox" />
	<meta name="google" content="notranslate" />
	<meta name="keywords" content="Phong nghien cuu khoa hoc truong dai hoc su pham ky thuat vinh long, nckh vlute, VLUTE SCIENTIFIC RESEARCH, VLUTE SCIENTIFIC RESEARCH, SR VLUTE, nckh vlute, nghien cuu khoa hoc vlute, nghien cuu khoa hoc su pham ky thuat vinh long, nghien cuu khoa hoc vlute" />
<?php }
else{ ?>
	<meta name="description" content="Nghiên cứu khoa học &amp; Hợp tác quốc tế | Đại học Sư phạm Kỹ thuật Vĩnh Long" />
	<title>Tag | Nghiên cứu khoa học &amp; Hợp tác quốc tế VLUTE</title>
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