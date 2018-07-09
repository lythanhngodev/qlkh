    <div class="tin-con-phai">
        <table class="table table-hover table-bordered" border="1">
            <tr style="background: #1dadd0;color: #fff;">
                <th colspan="2" style="text-align: left;background: linear-gradient(120deg, #3693f1 0%, #54b1d3 100%);"><h4 style="font-size: 1.2rem;"><u>Đề tài:</u> <?php echo $dt['TENDETAI'] ?></h4></th>
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
          <div class="lienquan content">
              <h3>
                  <a href="xemdetai/<?php echo to_slug($row['TENDETAI']); ?>-<?php echo $row['IDDT'] ?>.ltn"><img src="images/icon_dot.gif" style="width: 25px;margin-top: -5px;"><?php echo $row['TENDETAI'] ?></a>
              </h3>
              <div class="clear"></div>
         </div>
         <?php } ?>
        </div>
    </div>
<script type="text/javascript">document.getElementById("tieude").innerHTML = "Chi tiết đề tài";</script>