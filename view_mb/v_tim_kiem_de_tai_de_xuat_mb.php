  <div class="tieudechinh">
      <h4 class="ketquatimkiem">Kết quả tìm kiếm: <?php echo $tu; ?></h4>
      <hr>
  </div>
<div class="tin">
  <?php $dem = 0;
  if (!empty($tu)) {
      while ($row = mysqli_fetch_assoc($detai)) { ?>
       <div class="noidungtin content">
          <h3>
              <a href="xemdetai/<?php echo $row['TENDETAI'] ?>-id=<?php echo $row['IDDT'] ?>.ltn" title="<?php echo $row['TENDETAI'] ?>"><?php echo $row['TENDETAI'] ?></a>
          </h3>
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
          <div class="clear"></div>
     </div>
       <?php $dem++; } if ($dem == 0) {
         echo "Không đề tài nào được tìm khấy!";
       }
  } else echo "Không đề tài nào được tìm khấy!"; ?>
</div>
<br>
<script type="text/javascript">document.getElementById("trangchu").classList.add("active");document.getElementById("tieude").innerHTML = "Tìm kiếm";</script> 