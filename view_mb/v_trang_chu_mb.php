<div id="ltn-slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php $stt=1; while ($row = mysqli_fetch_assoc($slider)) { ?>
    <div class="carousel-item <?php if($stt==1) echo "active"; ?>">
      <img async class="d-block w-100" src="<?php echo $row['hinhanh']; ?>" alt="<?php echo $row['tieude']; ?>" style="width: 100%" >
    </div>
    <?php $stt++; } ?>
  </div>
  <a class="carousel-control-prev" href="#ltn-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Trước</span>
  </a>
  <a class="carousel-control-next" href="#ltn-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Sau</span>
  </a>
</div>
<hr>
<div class="row" style="margin: 0 -5px;">
  <div class="col-12">
    <form action="timkiem" method="POST">
      <input class="form-control" type="search" placeholder="Tìm kiếm" name="tu" style="margin-top: 5px;" >
      <select class="form-control" id="searchType" name="loai" style="margin-top: 5px;" >
        <option value="1">Đề tài NCKH đã công bố</option>
        <option value="2">Đề xuất NCKH</option>
        <!--<option value="3">Bài báo khoa học</option>-->
      </select>
      <center><button class="btn btn-outline-success form-control col-6" type="submit" style="margin-top: 5px;" >Tìm kiếm</button></center>
    </form>
  </div>  
</div>
<hr>
<!-- TIN MỚI -->
<div class="muccon">
    <h3>Tin tức</h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
            <?php 
            $tinmoi = lay_tin_moi();
            while ($row = mysqli_fetch_assoc($tinmoi)) { ?>
            <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
                <div class="tincon content">
                    <div class="hinhtin" style="background-image: url('_thumbs/<?php echo $row['HINHANH']; ?>');"></div>
                    <div class="tomtattin"><?php echo $row['TENBV'] ?><br><?php echo thoigiandangbai($row['NGAYDANG']); ?></div>
                </div> 
            </a>
           <?php } ?>
        </div>
    </div>
    <center><a href="chuyenmuc/tin-tuc-1" class="nut-link">XEM THÊM</a></center>
</div>
<!-- HOẠT ĐỘNG HỢP TÁC QUỐC TẾ -->
<div class="muccon">
    <h3>Hoạt động hợp tác quốc tế</h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
            <?php 
            $htqt = lay_hoat_dong_hop_tac_quoc_te();
            while ($row = mysqli_fetch_assoc($htqt)) { ?>
            <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
                <div class="tincon content">
                    <div class="hinhtin" style="background-image: url('_thumbs/<?php echo $row['HINHANH']; ?>');"></div>
                    <div class="tomtattin"><?php echo $row['TENBV'] ?><br><?php echo thoigiandangbai($row['NGAYDANG']); ?></div>
                </div>  
            </a>
           <?php } ?>
        </div>
    </div>
    <center><a href="hoptacquocte/hoat-dong-hop-tac-quoc-te-19" class="nut-link">XEM THÊM</a></center>
</div>

<!-- CÔNG TRÌNH NGHIÊN CỨU KHOA HỌC -->
<div class="muccon">
    <h3>Công trình NCKH đã công bố</h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
        <?php $nghiemthu = lay_de_tai_da_cong_bo();$stt=1;
        while ($row = mysqli_fetch_assoc($nghiemthu)) {
          if($stt!=1){
            echo "<hr style='width: 90%;'>";
          }
         ?>
         <div class="noidungtin content">
            <a class="tieu-de-tin" href="xemdetai/<?php echo to_slug($row['TENDETAI']); ?>-<?php echo $row['IDDT'] ?>.ltn" title="<?php echo $row['TENDETAI'] ?>"><?php echo $row['TENDETAI'] ?></a>
            <div class="thongtinchung">
                <ul>
                   <li>Thành viên : <?php echo $row['HOTEN'] ?></li> 
                   <li>Thời gian nghiệm thu: <?php echo date("d-m-Y", strtotime($row['THOIGIANNGHIEMTHU'])); ?></li>
                   <li>Lĩnh vực nghiên cứu: <?php $lv = linh_vuc_de_tai($row['IDDT']);
                   while ($rlv = mysqli_fetch_assoc($lv)) {
                       echo $rlv['TENLV'].", ";
                   }
                    ?></li>  
                </ul>
            </div>
        </div>
         <?php $stt++;} ?>
        </div>
    <center><a href="nckhdacongbo" class="nut-link">XEM THÊM</a></center>
    </div>
</div>

<!-- BÀI BÁO KHOA HỌC -->
<div class="muccon">
    <h3>Báo khoa học</h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
        <?php $baibao = lay_bai_bao_khoa_hoc();$stt=1;
        while ($row = mysqli_fetch_assoc($baibao)) {
          if($stt!=1){
            echo "<hr style='width: 90%;'>";
          }
         ?>
         <div class="noidungtin content">
            <a class="tieu-de-tin" href="xembaibao/<?php echo to_slug($row['TENBAO']) ?>-<?php echo $row['IDBAO'] ?>.ltn" title="<?php echo $row['TENBAO'] ?>"><?php echo $row['TENBAO'] ?></a>
            <div class="thongtinchung">
              <ul>
                 <li>Tác giả : <?php echo lay_ten_tac_gia_bao_khoa_hoc($row['IDBAO']); ?></li> 
                 <li>Nhà xuất bản/ Tạp chí: <?php echo $row['TAPCHI'] ?></li> 
                 <li>Năm: <?php echo $row['NAMXUATBAN'] ?></li> 
              </ul>
            </div>
       </div>
         <?php $stt++;} ?>
        </div>
    <center><a href="baokhoahoc" class="nut-link">XEM THÊM</a></center>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#trangchu').addClass('active');
    });
</script>