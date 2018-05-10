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
        <div class="col-md-3 col-sm-6">
            <div class="card line-chart-example">
                <div class="card-header giua">
                    <h4><i class="fas fa-check"></i>&ensp;Xét duyệt đề tài</h4>
                </div>
                <div class="card-body giua">
                	<span style="font-size: 3rem;"><?php echo $_xddt; ?></span>
                </div>
                <div class="card-footer giua">
            		<a href="?p=quanlydetaiduan">Xem chi tiết >></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card line-chart-example">
                <div class="card-header giua">
                    <h4><i class="fas fa-check"></i>&ensp;Nghiệm thu đề tài</h4>
                </div>
                <div class="card-body giua">
                	<span style="font-size: 3rem;"><?php echo $_ntdt; ?></span>
                </div>
                <div class="card-footer giua">
            		<a href="?p=quanlydetaiduan">Xem chi tiết >></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card line-chart-example">
                <div class="card-header giua">
                    <h4><i class="fas fa-user"></i>&ensp;Đăng ký tài khoản</h4>
                </div>
                <div class="card-body giua">
                	<span style="font-size: 3rem;"><?php echo $_dknd; ?></span>
                </div>
                <div class="card-footer giua">
            		<a href="?p=xacnhantaikhoan">Xem chi tiết >></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>
<script>
    $('.tieude').html('Trang chủ');
</script>