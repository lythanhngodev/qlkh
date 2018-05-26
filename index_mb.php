<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include_once "header.php" ?>
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<base href="<?php echo $qlkh['HOSTGOC'] ?>" /><script defer src="fontawesome/svg-with-js/js/fontawesome-all.js"></script><link rel="stylesheet" type="text/css" href="css/style.css"><script src="js/jquery-3.3.1.min.js"></script>
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

</body>
</html>