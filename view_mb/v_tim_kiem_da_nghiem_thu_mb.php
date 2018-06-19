
    <div class="tieudechinh">
        <h4 class="ketquatimkiem">Kết quả tìm kiếm: <?php echo $tu; ?></h4>
        <hr>
    </div>
    <div class="tin">
      <?php $dem = 0;
      if (!empty($tu)) {
          while ($row = mysqli_fetch_assoc($detai)) { if ($dem > 0) {
            echo "<hr>";
          } ?>
         <div class="noidungtin content">
            <a class="tieu-de-tin" href="xemdetai/<?php echo to_slug($row['TENDETAI']); ?>-<?php echo $row['IDDT'] ?>.ltn" title="<?php echo $row['TENDETAI'] ?>"><?php echo $row['TENDETAI'] ?></a>
            <div class="thongtinchung">
                <ul>
                   <li>Thành viên : <?php echo $row['HOTEN'] ?></li> 
                   <li>Thời gian nghiệm thu: <?php echo date("d-m-Y", strtotime($row['THOIGIANNGHIEMTHU'])); ?></li>
                   <li>Lĩnh vực nghiên cứu: <?php $lv = linh_vuc_de_tai($row['IDDT']);
                   while ($rlv = mysqli_fetch_assoc($lv)) {
                       echo $rlv['TENLV'].", ";
                   }
                    ?></li>  
                </ul>
            </div>
        </div>
           <?php $dem++; } if ($dem == 0) {
             echo "Không đề tài nào được tìm khấy!";
           }
      } else echo "Không đề tài nào được tìm khấy!"; ?>
    </div>
<br>
<script type="text/javascript">
    $("document").ready(function() {
        $('#trangchu').addClass('current');
        $('#tieude').html('Tìm kiếm');
    });
</script> 