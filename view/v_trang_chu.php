<!-- slider -->
<link rel="stylesheet" href="slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slider/demo/style.css" type="text/css" media="screen" />
<div id="cottrai">
    <!-- TRÌNH CHIẾU (SILDER) -->
    <div class="trinh-chieu" ><div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider"><?php while ($row = mysqli_fetch_assoc($slider)) { ?><a href="<?php echo $row['link']; ?>"><img src="<?php echo $row['hinhanh']; ?>" data-thumb="<?php echo $row['hinhanh']; ?>" data-transition="<?php echo $row['style']; ?>" alt="<?php echo $row['tieude']; ?>" title="<?php echo $row['tieude']; ?>" /></a><?php } ?></div></div></div>
    <!-- CÁC CÔNG TRÌNH KHOA HỌC ĐÃ CÔNG BỐ -->
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: 240px;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a href="?p=detainghiemthu">Công trình NCKH đã công bố</a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
    <div class="tin">
            <?php $nghiemthu = lay_de_tai_da_cong_bo();
            while ($row = mysqli_fetch_assoc($nghiemthu)) { ?>
             <div class="noidungtin">
                <h3>
                    <a href="#" title="<?php echo $row['TENDETAI'] ?>"><?php echo $row['TENDETAI'] ?></a>
                </h3>
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
                <div class="clear"></div>
           </div>
             <?php } ?>
      <center><a href="?p=detainghiemthu" class="nut-link">XEM THÊM</a></center>
    </div>

    <!-- CÁC CÔNG TRÌNH KHOA HỌC ĐÃ CÔNG BỐ -->
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: 180px;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a href="?p=baokhoahoc">Bài báo khoa học mới</a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
    <div class="tin">
      <?php $baibao = lay_bai_bao_khoa_hoc();
      while ($row = mysqli_fetch_assoc($baibao)) { ?>
      <div class="noidungtin">
          <h3>
              <a href="#" title="<?php echo $row['TENBAO'] ?>"><?php echo $row['TENBAO'] ?></a>
          </h3>
          <div class="thongtinchung">
              <ul>
                 <li>Tác giả : <?php echo lay_ten_tac_gia_bao_khoa_hoc($row['IDBAO']); ?></li> 
                 <li>Nhà xuất bản/ Tạp chí: <?php echo $row['TAPCHI'] ?></li> 
                 <li>Năm: <?php echo $row['NAMXUATBAN'] ?></li> 
              </ul>
          </div>
          <div class="clear"></div>
     </div>
     <?php } ?>
     <center><a href="?p=baokhoahoc" class="nut-link">XEM THÊM</a></center>
    </div>

</div>
<div id="cotphai">
    <!-- THÔNG TIN LIÊN HỆ -->
    <div class="thongtinlienhe">
        <div class="chitietlienhe">
          <h3>Thông tin liên hệ</h3>
          <div style="margin-bottom: 3px">
            <label>Hotline:</label><span class="t_hotline">&nbsp;0913.847.123</span>
          </div>
          <div>
            <label>Email:</label>&nbsp;<a href="#" class="gr"><strong>nckh@vlute.edu.vn</strong></a>
          </div>
        </div>
    </div>
    
    <!-- TIN MỚI -->
    <div class="muccon">
        <h3>Tin mới</h3>
        <div class="tieudemuccon">
            <div class="tinmoi">
                <?php 
                $tinmoi = lay_tin_moi();
                while ($row = mysqli_fetch_assoc($tinmoi)) { ?>
                <a href="?p=xemtin&id=<?php echo $row['IDBV']; ?>&tieude=<?php echo $row['LINKBV']; ?>">
                    <div class="tincon">
                        <div class="hinhtin" style="background-image: url('<?php echo $row['HINHANH']; ?>');"></div>
                        <div class="tomtattin"><?php echo $row['TENBV'] ?></div>
                    </div>  
                </a>
               <?php } ?>
            </div>
        </div>
    </div>
    <!-- HOẠT ĐỘNG HỢP TÁC QUỐC TẾ -->
    <div class="muccon">
        <h3>HĐ hợp tác quốc tế</h3>
        <div class="tieudemuccon">
            <div class="tinmoi">
                <?php 
                $htqt = lay_hoat_dong_hop_tac_quoc_te();
                while ($row = mysqli_fetch_assoc($htqt)) { ?>
                <a href="?p=xemtin&id=<?php echo $row['IDBV']; ?>&tieude=<?php echo $row['LINKBV']; ?>">
                    <div class="tincon">
                        <div class="hinhtin" style="background-image: url('<?php echo $row['HINHANH']; ?>');"></div>
                        <div class="tomtattin"><?php echo $row['TENBV'] ?></div>
                    </div>  
                </a>
               <?php } ?>
            </div>
        </div>
    </div>
    <!-- TỪ KHÓA NỔI BẬC -->
    <div class="muccon">
        <h3>Từ khóa nổi bậc</h3>
        <div class="tieudemuccon">
            <div class="tukhoa">
              <?php $tk = lay_tu_khoa();
              while ($row=mysqli_fetch_assoc($tk)) { ?>
              <div><a href="?p=tag&tag=<?php echo $row['IDKHOA'] ?>"><?php echo $row['TENKHOA'] ?></a></div>
              <?php } ?>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="slider/jquery.nivo.slider.js"></script> 
<script type="text/javascript">
    $("document").ready(function() {
        $('#trangchu').addClass('current');
        $('#slider').nivoSlider();
    });
</script> 