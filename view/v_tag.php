<div id="cottrai">
    <!-- CÁC CÔNG TRÌNH KHOA HỌC ĐÃ CÔNG BỐ -->
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: fit-content;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a>Kết quả tìm kiếm tag: <span id="tentag"></span></a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
    <div class="tin">
      <?php $dem = 0;$tentag="";
      if (!empty($tu)) {
          while ($row = mysqli_fetch_assoc($tag)) { ?>
           <div class="noidungtin">
              <h3>
                  <?php if($row['LOAI']=='bao'){ $tentag=$row['TENKHOA']; ?>
                  <a style="color: #252525 !important;" href="xembaibao/<?php echo to_slug($row['TEN']) ?>-<?php echo $row['ID'] ?>.ltn" title="<?php echo $row['TEN'] ?>"><?php echo '<u>Bài báo:</u> '.$row['TEN'] ?></a>
                  <?php } ?>
                  <?php if($row['LOAI']=='tin'){ $tentag=$row['TENKHOA']; ?>
                  <a style="color: #252525 !important;" href="xemtin/<?php echo to_slug($row['TEN']) ?>-<?php echo $row['ID'] ?>.ltn" title="<?php echo $row['TEN'] ?>"><?php echo '<u>Bài viết:</u> '.$row['TEN'] ?></a><hr style="width:  80%;margin: auto;margin-top: 10px;margin-bottom: 10px;border-top: 1px solid #b5b5b5 !important;border-bottom:  none;">
                  <?php } ?>
              </h3>
              <div class="clear"></div>
         </div>
           <?php $dem++; } if ($dem == 0) {
             echo "Không có kết quả tìm khấy.";
           }
      } else echo "Không có kết quả tìm khấy."; ?>
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
            <label>Email:</label>&nbsp;<a href="mailto:nckh@vlute.edu.vn" class="gr"><strong>nckh@vlute.edu.vn</strong></a>
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
                        <div class="hinhtin lazyload" data-src="_thumbs/<?php echo $row['HINHANH']; ?>" style="background-image: url();"></div>
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
                        <div class="hinhtin lazyload" data-src="_thumbs/<?php echo $row['HINHANH']; ?>" style="background-image: url();"></div>
                        <div class="tomtattin"><?php echo $row['TENBV'] ?></div>
                    </div>  
                </a>
               <?php } ?>
            </div>
        </div>
    </div>
    <!-- TỪ KHÓA NỔI BẬC -->
    <div class="muccon">
        <h3>Từ khóa nổi bật</h3>
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
  document.getElementById('trangchu').classList.add("current");
  document.getElementById('tentag').innerHTML = '<?php echo $tentag ?>';
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>