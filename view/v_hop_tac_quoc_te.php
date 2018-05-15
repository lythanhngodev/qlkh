<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 15/05/2018
 * Time: 8:28 AM
 */
?>
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: fit-content;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a><?php echo ten_chuyen_muc($id); ?></a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
<div id="cottrai">
    <?php
    $d_tin = mysqli_num_rows($tin);
     if ($d_tin==0) {
        echo "Chuyên mục chưa có bài viết";
    }else{ 
        while ($row = mysqli_fetch_assoc($tin)){ ?>
        <a href="?p=xemtin&id=<?php echo $row['IDBV']?>">
            <div class="tin-con-phai">
                <div class="hinh-anh-tin-con-phai" style="background-image: url('<?php echo $row['HINHANH'] ?>');"></div>
                <div class="tin-con-phai-phai">
                    <div class="tieu-de-tin-con-phai"><?php echo $row['TENBV'] ?></div>
                    <div class="ngay-tin-con-phai"><i class="fas fa-calendar"></i>&nbsp;&nbsp;<?php if(empty($row['NGAYDANG'])) echo "Đang cập nhật"; else echo $row['NGAYDANG']; ?></div>
                </div>
            </div>
        </a>
    <?php 
        }
    }   ?>

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
        $('#htqt').addClass('current');
        document.title = "<?php echo ten_chuyen_muc($id); ?> | Phòng nghiên cứu khoa học & Hợp tác quốc tế VLUTE";
    });
</script> 