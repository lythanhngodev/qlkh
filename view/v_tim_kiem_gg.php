<div id="cottrai">
    <!-- CÁC CÔNG TRÌNH KHOA HỌC ĐÃ CÔNG BỐ -->
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: 175px;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a>Tìm kiếm với google</a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
    <div class="tin">
      <div><script>(function() {var cx = '011375218569618766485:2vgaz9qfk-w';var gcse = document.createElement('script');gcse.type = 'text/javascript';gcse.async = true;gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(gcse, s);})();</script><gcse:search enableAutoComplete="true"></gcse:search>
      </div>
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
<script type="text/javascript">document.getElementById('timkiemggg').classList.add("current");</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>