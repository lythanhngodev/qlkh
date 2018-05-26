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
        <img src="images/chi-muc.png" width="27" height="27" align="absmiddle">Chi tiết đề tài
    </div>
    <div class="clear"></div>
    <div class="line"></div>
</div>
<div id="cottrai">
    <div class="tin-con-phai">
        <table style="width: 100%;" border="1">
            <tr style="background: #1dadd0;color: #fff;">
                <th colspan="2" style="text-align: left;padding: 0.5rem;"><h3>Đề tài: <?php echo $dt['TENDETAI'] ?></h3></th>
            </tr>
            <tr>
                <th>Cơ quan chủ trì</th>
                <td>Trường Đại Học Sư phạm Kỹ thuật Vĩnh Long</td>
            </tr>
            <tr>
                <th>Loại hình nghiên cứu</th>
                <td><?php $lh = loai_hinh_nghien_cuu($iddt);
                    switch (count($lh)) {
                        case 0:
                            echo "Không";
                            break;
                        case  1:
                            echo $lh[0][0];
                            break;
                        default:
                            $str = "";
                            for ($i=0; $i < count($lh)-1; $i++) { 
                                $str.=$lh[$i][0].", ";
                            }
                            $str.=end($lh)[0];
                            echo $str;
                            break;
                    }
                 ?></td>
            </tr>
            <tr>
                <th>Lĩnh vựa khoa học</th>
                <td><?php $kh = linh_vuc_khoa_hoc($iddt);
                    switch (count($kh)) {
                        case 0:
                            echo "Không";
                            break;
                        case  1:
                            echo $kh[0][0];
                            break;
                        default:
                            $str = "";
                            for ($i=0; $i < count($kh)-1; $i++) { 
                                $str.=$kh[$i][0].", ";
                            }
                            $str.=end($kh)[0];
                            echo $str;
                            break;
                    }
                 ?></td>
            </tr>
            <tr>
                <th>Chủ nhiệm đề tài</th>
                <td><?php echo lay_ten_chu_nhiem_de_tai($iddt); ?></td>
            </tr>
            <?php $str="";
                $tv = thanh_vien_de_tai($iddt);
                switch (count($tv)) {
                    case 0:
                        $str = "Không";
                        break;
                    case 1:
                        $str = "<b>".$tv[0]['HOTEN']."</b>";
                        break;
                    default:
                        for ($ii=0; $ii < count($tv) - 1; $ii++) { 
                            $str.="<b>".$tv[$ii]['HOTEN']."</b>, ";
                        }
                        $str.="<b>".end($tv)['HOTEN']."</b>";
                        break;
                }
             ?>
            <tr>
                <th>Thành viên đề tài</th>
                <td><?php echo $str; ?></td>
            </tr>
            <tr>
                <th>Mục tiêu</th>
                <td><?php echo $dt['MUCTIEU'] ?></td>
            </tr>
            <tr>
                <th>PP nghiên cứu</th>
                <td><?php echo $dt['PHUONGPHAPKYTHUAT'] ?></td>
            </tr>
            <tr>
                <th>Kết quả & Địa chỉ ứng dụng</th>
                <td><?php echo $dt['KETQUA'] ?></td>
            </tr>
            <tr>
                <th>Tháng năm bắt đầu</th>
                <td><?php echo date('m-Y', strtotime($dt['THANGNAMBD'])) ?></td>
            </tr>
            <tr>
                <th>Tháng năm kết thúc</th>
                <td><?php echo date('m-Y', strtotime($dt['THANGNAMKT'])) ?></td>
            </tr>
        </table>

        <div class="tin">
          <div class="detailienquan">Các đề tài liên quan:</div>
          <?php $baibaolienquan = lay_de_tai_lien_quan($iddt, $dt['TRANGTHAI']);
          while ($row = mysqli_fetch_assoc($baibaolienquan)) { ?>
          <div class="lienquan">
              <h3>
                  <a href="?p=xemdetai&id=<?php echo $row['IDDT'] ?>" title="<?php echo $row['TENDETAI'] ?>"><?php echo $row['TENDETAI'] ?></a>
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
              <div><a href="?p=tag&tag=<?php echo $row['IDKHOA'] ?>"><?php echo $row['TENKHOA'] ?></a></div>
              <?php } ?>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    $("document").ready(function() {
        $('#nckh').addClass('current');
    });
</script> 