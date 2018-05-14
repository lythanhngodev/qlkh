<div id="cottrai">
    <!-- CÁC CÔNG TRÌNH KHOA HỌC ĐÃ CÔNG BỐ -->
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: 170px;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a href="?p=detainghiemthu">Văn bản - Biểu mẫu</a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
    <div class="tin">
      <table id="bangbieumau" border="1">
        <tr style="background: #cee1ff;">
          <th>STT</th>
          <th>Mã</th>
          <th>Tên</th>
          <th>Tải xuống</th>
        </tr>
        <?php $stt=1;
        while ($row = mysqli_fetch_assoc($bieumau)) { ?>
        <tr>
          <td><?php echo $stt; ?></td>
          <td><?php echo $row['MABM'] ?></td>
          <td><?php echo $row['TENBM'] ?></td>
          <td><a href="<?php echo "files/".$row['FILE']; ?>">Tải xuống</a></td>
        </tr>
         <?php $stt++; } ?>
      </table>
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
        $('#bieumau').addClass('current');
    });
</script> 