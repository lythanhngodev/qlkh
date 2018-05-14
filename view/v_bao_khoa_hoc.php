<div id="cottrai">
    <!-- CÁC CÔNG TRÌNH KHOA HỌC ĐÃ CÔNG BỐ -->
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: 170px;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a>Văn bản - Biểu mẫu</a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
    <div class="tin">
          <?php 
          $sotin = 8;
          $bd=1;
          if (isset($_GET['trang']) && !empty($_GET['trang'])) {
            $bd = intval($_GET['trang']);
            if ($bd<1) {
              $bd=1;
            }
          }
          $tu = ($bd-1)*$sotin;
          $bao = lay_bao_khoa_hoc($tu,$sotin);
          while ($row = mysqli_fetch_assoc($bao)) { ?>
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
    <center>
      <ul class="phantrang">
        <?php $sobaibao = dem_bao_khoa_hoc();
        if ($sobaibao!=0) {
          for ($i=1; $i < $sobaibao/$sotin; $i++) { 
            echo "<li><a href='?p=baokhoahoc&trang=".$i."'>".$i."</a></li>";
          }
        }
        ?>
      </ul>
    </center>
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
                <a href="?p=xemtin&id=<?php echo $row['IDBV']; ?>&tieude=<?php echo $row['TENBV']; ?>">
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
<script type="text/javascript">
    $("document").ready(function() {
        $('#baokhoahoc').addClass('current');
        document.title = "Bài báo khoa học | Phòng nghiên cứu khoa học & Hợp tác quốc tế VLUTE";
    });
</script> 