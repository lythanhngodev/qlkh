<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 12/04/2018
 * Time: 10:20 AM
 */
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
?>
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Bạn không có quyền truy cập trang này</h4>
    <p>Có vẻ như bạn chưa được cấp quyền sử dụng tính năng này. Vui lòng quay lại <a href="<?php echo $qlkh['HOSTADMIN']; ?>"><strong class="text-default">>> Trang chủ << </strong></a> </p>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.tieude').html('Bảo mật | Không quyền truy cập');
    });
</script>