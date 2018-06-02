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
<div id="phong-nen" style="float:none;display: block;position: fixed;width: 100%;height: 100%; top: 0;left: 0;bottom: 0;right: 0;display: none;background: #000; opacity: 0.678;"></div>
<div id="hien-hinh" style="float:none;display: block;position: fixed;width: 100%;height: 100%; top: 0;left: 0;bottom: 0;right: 0;display: none;">
    <div class="than-hien-hinh" style="position: relative;width: 60%;left: 50%;top: 50%;transform: translate(-50%, -50%);border: 8px outset #e6e8e5;border-radius: 8px;">
        <span style="display: block;position: absolute;top: 0;right: 0;color:  #fff;background: #939492;font-size: 20px;padding: 6px 13px;text-align:  center;border-radius: 0 0 0 10px;font-family:  cursive;cursor:  pointer;">X</span>
        <img src="" id="hien-hinh-ct" style="width: 100%; opacity: 1;">
    </div>
</div>
<script type="text/javascript">$(document).ready(function() {$('#tintuc').addClass('current');$(document).on('click','.vlu-chi-tiet-bai-viet img', function(){$('#hien-hinh-ct').attr('src',$(this).attr('src'));$('#phong-nen').fadeIn(234);$('#hien-hinh').fadeIn(234);});$(document).on('click','#hien-hinh', function(){$(this).fadeOut(200);$('#phong-nen').fadeOut(200);});$(document).keyup(function(e) {if (e.keyCode == 27) { $('#hien-hinh').fadeOut(200);$('#phong-nen').fadeOut(200);}});});</script>