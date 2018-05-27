<!-- CÔNG TRÌNH NGHIÊN CỨU KHOA HỌC -->
<div class="muccon">
    <h3>Công trình NCKH đã công bố</h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
        <?php $nghiemthu = lay_de_tai_da_cong_bo();$stt=1;
        while ($row = mysqli_fetch_assoc($nghiemthu)) {
          if($stt!=1){
            echo "<hr style='width: 90%;'>";
          }
         ?>
         <div class="noidungtin">
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
         <?php $stt++;} ?>
        </div>
    <center><a href="nckhdacongbo" class="nut-link">XEM THÊM</a></center>
    </div>
</div>