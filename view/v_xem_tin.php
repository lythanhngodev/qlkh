<div id="cottrai">
    <?php if (empty($bv)) {
        echo "Không tìm thấy bài viết";
    }else{  ?>
    <div class="chi-tiet-bai-viet">
        <div class="vlu-chi-tiet-header-bai-viet">
            <article class="vlu-chi-tiet-hinh-anh-tin" style="background-image: url('<?php echo $bv['HINHANH'] ?>')">
                <a>
                    <div class="vlu-chi-tiet-link-bai-viet">
                        <div class="vlu-chi-tieu-tieu-de-bai-viet"><?php echo $bv['TENBV'] ?></div>
                        <div class="vlu-chi-tiet-thoi-gian-bai-viet"><i class="far fa-clock"></i>&nbsp;
                            <?php if(empty($bv['NGAYDANG'])) echo "Đang cập nhật"; else echo $bv['NGAYDANG']; ?>&nbsp;&nbsp;|&nbsp;&nbsp;Lượt xem: <?php echo $bv['LUOTXEM'] ?></div>
                    </div>
                </a>
            </article>
        </div>
        <div class="vlu-chi-tiet-bai-viet">
            <?php echo $bv['NOIDUNG'] ?>
        </div>
        <br>
        <hr>
        <br>
    </div>   
    <?php } ?>
    <!-- BÀI VIẾT LIÊN QUAN -->
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: 150px;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a>Bài viết liên quan</a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
    <div class="tin">
      <?php $bvlq = lay_bai_viet_lien_quan($id);
      while ($row = mysqli_fetch_assoc($bvlq)) { ?>
      <div class="noidungtin-lq">
        <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
            <div class="tincon-lq">
                <div class="hinhtin-lq" style="background-image: url('<?php echo $row['HINHANH']; ?>');"></div>
                <div class="tomtattin-lq"><?php echo $row['TENBV'] ?></div>
            </div>  
        </a>
          <div class="clear"></div>
     </div>
     <?php } ?>
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
    $(document).ready(function() {
        $('#tintuc').addClass('current');
    });
</script>