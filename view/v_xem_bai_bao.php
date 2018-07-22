<style type="text/css">
    table{
        border-collapse: collapse;
        border: 1px solid #e8e8e8;
    }
    table th, table td{
        padding: 0.4rem 0.5rem;
    }
    table th{
        text-align: right;
        padding-right: 0.5rem;
        width: 222px;
    }
</style>
<div class="tieudechinh">
    <div class="tentieudechinh" style="width: fit-content;color: #fff;">
        <img src="images/chi-muc.png" width="27" height="27" align="absmiddle">Chi tiết bài báo khoa học
    </div>
    <div class="clear"></div>
    <div class="line"></div>
</div>
<div id="cottrai">
    <div class="tin-con-phai">
        <table style="width: 100%;" border="1">
            <tr style="background: #1dadd0;color: #fff;">
                <th colspan="2" style="text-align: left;padding: 0.5rem;"><h3>Bài báo: <?php echo $bb['TENBAO'] ?></h3></th>
            </tr>
            <tr>
                <th>Tác giả</th>
                <td><?php $b = lay_ten_tac_gia_bai_viet($idbb);
                    switch (count($b)) {
                        case 0:
                            echo "Không";
                            break;
                        case  1:
                            echo $b[0][1];
                            break;
                        default:
                            $str = "";
                            for ($i=0; $i < count($b)-1; $i++) { 
                                $str.=$b[$i][1].", ";
                            }
                            $str.=end($b)[1];
                            echo $str;
                            break;
                    }
                 ?></td>
            </tr>
            <tr>
                <th>Tạp chí, Hội nghị, Tổ chức, KH & CN công bố kết quả NC</th>
                <td><?php echo $bb['TAPCHI'] ?></td>
            </tr>
            <tr>
                <th>Quốc gia</th>
                <td><?php echo $bb['TENQG'] ?></td>
            </tr>
            <tr>
                <th>Cấp bài báo</th>
                <td><?php echo $bb['CAPBAIBAO'] ?></td>
            </tr>
            <tr>
                <th>Năm xuất bản</th>
                <td><?php if(empty($bb['NAMXUATBAN'])||$bb['NAMXUATBAN']=='null') echo "Đang cập nhật"; else echo date('m - Y', strtotime($bb['NAMXUATBAN'])) ?></td>
            </tr>
            <tr>
                <th>Nội dung sơ lược</th>
                <td><?php echo $bb['NOIDUNG'] ?></td>
            </tr>
        </table>
        <div class="tin">
          <div class="detailienquan">Các bài báo liên quan:</div>
          <?php $baibaolienquan = lay_bai_bao_lien_quan($idbb);
          while ($row = mysqli_fetch_assoc($baibaolienquan)) { ?>
          <div class="lienquan">
              <h3>
                  <img src="images/icon_dot.gif" style="width: 25px;float: left;"><a href="xembaibao/<?php echo to_slug($row['TENBAO']) ?>-<?php echo $row['IDBAO'] ?>.ltn"><?php echo $row['TENBAO'] ?></a>
              </h3>
              <div class="clear"></div>
         </div>
         <?php } ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $("document").ready(function() {
        $('#baokhoahoc').addClass('current');
    });
</script> 