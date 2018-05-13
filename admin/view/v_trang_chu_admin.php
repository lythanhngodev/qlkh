<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<div class="cach background-container">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header" style="border-top: 3px solid #ffc107;">
            <h4><i class="fas fa-bullhorn"></i>&ensp;Thông báo</h4>
          </div>
          <div class="card-body" id="thongbao-2bgf">

          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card line-chart-example">
                <div class="card-header giua">
                    <h4>Xét duyệt đề tài</h4>
                </div>
                <div class="card-body giua">
                    <a href="?p=quanlydetaiduan">
                        <img src="../images/kiem-tra-de-tai.png">
                    </a>
                </div>
                <div class="card-footer giua" style="padding: 0;padding-right: 10px;">	
                    <span style="font-size: 2.5rem;color: #000;">&ensp;<?php echo $_xddt; ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card line-chart-example">
                <div class="card-header giua">
                    <h4>Nghiệm thu đề tài</h4>
                </div>
                <div class="card-body giua">
                    <a href="?p=quanlydetaiduan">
                	   <img src="../images/de-tai-nghiem-thu.png">
                    </a>
                </div>
                <div class="card-footer giua" style="padding: 0;padding-right: 10px;">
                    <span style="font-size: 2.5rem;color: #000;">&ensp;<?php echo $_ntdt; ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card line-chart-example">
                <div class="card-header giua">
                    <h4>Đăng ký tài khoản</h4>
                </div>
                <div class="card-body giua">
                    <a href="?p=xacnhantaikhoan">
                        <img src="../images/nguoi-dung-moi.png">
                    </a>
                </div>
                <div class="card-footer giua" style="padding: 0;padding-right: 10px;">
                    <span style="font-size: 2.5rem;color: #000;">&ensp;<?php echo $_dknd; ?></span>
                </div>
            </div>
        </div>
    </div>
    <hr><br>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
              <div class="card-header giua">
                <h4>Nghiên cứu khoa học</h4>
              </div>
              <div class="card-body giua">
                <a href="?p=quanlydetai" class="col-12"><img src="../images/de-tai-khoa-hoc.png"></a>
              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
              <div class="card-header giua">
                <h4>Bài báo khoa học</h4>
              </div>
              <div class="card-body giua">
                <a href="?p=baokhoahoc" class="col-12"><img src="../images/bao-khoa-hoc.png"></a>
              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
              <div class="card-header giua">
                <h4>Thống kê</h4>
              </div>
              <div class="card-body giua">
                <a href="?p=baokhoahoc" class="col-12"><img src="../images/thong-ke.png"></a>
              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
              <div class="card-header giua">
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