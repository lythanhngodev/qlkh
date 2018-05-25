<div id="cottrai">
    <!-- CÁC CÔNG TRÌNH KHOA HỌC ĐÃ CÔNG BỐ -->
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: 235px;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a>Công trình NCKH đã công bố</a>
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
          $nghiemthu = lay_de_tai_da_cong_bo($tu,$sotin);
          while ($row = mysqli_fetch_assoc($nghiemthu)) { ?>
           <div class="noidungtin">
              <h3>
                  <a href="?p=xemdetai&id=<?php echo $row['IDDT'] ?>" title="<?php echo $row['TENDETAI'] ?>"><?php echo $row['TENDETAI'] ?></a>
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
    <center>
      <ul class="phantrang">
        <?php $sodetai = dem_de_tai_da_cong_bo();
        if ($sodetai!=0) {
          for ($i=1; $i < $sodetai/$sotin; $i++) { 
            echo "<li><a href='?p=detainghiemthu&trang=".$i."'>".$i."</a></li>";
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
        $('#nckh').addClass('current');
        document.title = "Đề xuất mới nghiên cứu khoa học | Phòng nghiên cứu khoa học & Hợp tác quốc tế VLUTE";
    });
</script> 