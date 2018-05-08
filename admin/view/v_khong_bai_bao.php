<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Không tìm thấy trang</h4>
  <p>Có vẻ như bạn đang sai đường dẫn. Vui lòng quay lại <a href="<?php echo $qlkh['HOSTADMIN']; ?>"><strong class="text-default">>> Trang chủ << </strong></a> </p>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.tieude').html('Lỗi trang');
  });
</script>