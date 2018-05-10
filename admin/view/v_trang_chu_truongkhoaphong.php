<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<div class="cach background-container">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header" style="border-top: 3px solid #ffc107;">
            <h4><i class="fas fa-bullhorn"></i>&ensp;Thông báo</h4>
          </div>
          <div class="card-body giua">

          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
              <div class="card-header">
                <h4>Nghiên cứu khoa học</h4>
              </div>
              <div class="card-body giua">
                <a href="?p=quanlydetai" class="col-12"><img src="../images/dang-ky-de-tai.png"></a>
              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
              <div class="card-header">
                <h4>Bài báo khoa học</h4>
              </div>
              <div class="card-body giua">
                <a href="?p=baokhoahoc" class="col-12"><img src="../images/bao-khoa-hoc.png"></a>
              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
              <div class="card-header">
                <h4>Thông tin cá nhân</h4>
              </div>
              <div class="card-body giua">
                <a href="?p=thongtincanhan" class="col-12"><img src="../images/thong-tin-tai-khoan.png"></a>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>
<script>
    $('.tieude').html('Trang chủ');
</script>