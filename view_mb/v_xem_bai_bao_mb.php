
    <div class="tin-con-phai">
        <table class="table table-hover table-bordered" border="1">
            <tr style="background: #1dadd0;color: #fff;">
                <th colspan="2" style="text-align: left;background: linear-gradient(120deg, #3693f1 0%, #54b1d3 100%);"><h4 style="font-size: 1.2rem;"><u>Bài báo:</u> <?php echo $bb['TENBAO'] ?></h4></th>
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
        <div class="tin">
          <div class="detailienquan">Các bài báo liên quan:</div>
          <?php $baibaolienquan = lay_bai_bao_lien_quan($idbb);
          while ($row = mysqli_fetch_assoc($baibaolienquan)) { ?>
          <div class="lienquan content">
              <h3><a href="xembaibao/<?php echo to_slug($row['TENBAO']) ?>-<?php echo $row['IDBAO'] ?>.ltn"><img src="images/icon_dot.gif" style="width: 25px;margin-top: -5px;"><?php echo $row['TENBAO'] ?></a>
              </h3>
              <div class="clear"></div>
         </div>
         <?php } ?>
        </div>
    </div>
<script type="text/javascript">document.getElementById("baokhoahoc").classList.add("active");document.getElementById("tieude").innerHTML = "Báo khoa học";</script>