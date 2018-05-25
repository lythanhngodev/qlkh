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
                <th colspan="2" style="text-align: left;padding: 0.5rem;">Thông tin chung</th>
            </tr>
            <tr>
                <th>Tên đề tài</th>
                <td><?php echo $bb['TENBAO'] ?></td>
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
                <td><?php echo date('m - Y', strtotime($bb['NAMXUATBAN'])) ?></td>
            </tr>
            <tr>
                <th>Nội dung sơ lược</th>
                <td><?php echo $bb['NOIDUNG'] ?></td>
            </tr>
        </table>
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
    <!-- HOẠT ĐỘNG HỢP TÁC QUỐC TẾ -->
    <div class="muccon">
        <h3>HĐ hợp tác quốc tế</h3>
        <div class="tieudemuccon">
            <div class="tinmoi">
                <?php 
                $htqt = lay_hoat_dong_hop_tac_quoc_te();
                while ($row = mysqli_fetch_assoc($htqt)) { ?>
                <a href="?p=xemtin&id=<?php echo $row['IDBV']; ?>&tieude=<?php echo $row['LINKBV']; ?>">
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
        document.title = "<?php echo $bb['TENBAO'] ?> | Phòng nghiên cứu khoa học & Hợp tác quốc tế VLUTE";
    });
</script> 