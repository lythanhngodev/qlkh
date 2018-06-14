    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: fit-content;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a><?php echo ten_chuyen_muc($id); ?></a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
<div id="cottrai">
      <?php 
      $sotin = 6;
      $bd=1;
      if (isset($_GET['trang']) && !empty($_GET['trang'])) {
        $bd = intval($_GET['trang']);
        if ($bd<1) {
          $bd=1;
        }
      }
      $tu = ($bd-1)*$sotin;
      $nghiemthu = lay_tin_them($id,$tu,$sotin);
      while ($row = mysqli_fetch_assoc($nghiemthu)) { ?>
        <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
            <div class="tin-con-phai">
                <div class="hinh-anh-tin-con-phai" style="background-image: url('<?php echo $row['HINHANH'] ?>');"></div>
                <div class="tin-con-phai-phai">
                    <div class="tieu-de-tin-con-phai"><?php echo $row['TENBV'] ?></div>
                    <div class="ngay-tin-con-phai"><i class="far fa-clock"></i>&nbsp;&nbsp;<?php echo thoigiandangbai($row['NGAYDANG']); ?></div>
                </div>
            </div>
        </a>
    <?php
    }   ?>
    <center>
      <ul class="phantrang">
        <?php $sodetai = dem_de_tai($id);
        if ($sodetai!=0) {
          for ($i=1; $i <= ceil($sodetai/$sotin); $i++) { 
            $str = "";
            if($bd==$i) $str = "tranghientai";
            echo "<li class='".$str."'><a href='tintuc/".$id."/".$i."'>".$i."</a></li>";
          }
        }
        ?>
      </ul>
    </center>
</div>
<div id="cotphai">
    <!-- THÔNG TIN LIÊN HỆ -->
    <div class="thongtinlienhe">
        <div class="chitietlienhe">
          <h3>Thông tin liên hệ</h3>
          <div style="margin-bottom: 3px">
            <label>Hotline:</label><span class="t_hotline">&nbsp;+84 2703 862457</span>
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
                <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
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
                <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
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
              <div><a href="tag/<?php echo $row['IDKHOA'] ?>"><?php echo $row['TENKHOA'] ?></a></div>
              <?php } ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("document").ready(function() {
        $('#tintuc').addClass('current');
    });
</script> 