<div id="ltn-slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php $stt=1;$slider=lay_slider(); while ($row = mysqli_fetch_assoc($slider)) { ?>
    <div class="carousel-item <?php if($stt==1) echo "active"; ?>">
      <img async class="d-block w-100" src="<?php echo $row['hinhanh']; ?>" alt="<?php echo $row['tieude']; ?>" style="width: 100%" >
    </div>
    <?php $stt++; } ?>
  </div>
  <a class="carousel-control-prev" href="#ltn-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Trước</span>
  </a>
  <a class="carousel-control-next" href="#ltn-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Sau</span>
  </a>
</div>
<div class="row" style="margin: 0 -5px;">
  <div class="col-12">
    <form action="timkiem" method="POST" style="margin-top: 15px;">
      <input class="form-control" type="search" placeholder="Tìm kiếm" name="tu" style="margin-top: 5px;" >
      <select class="form-control" id="searchType" name="loai" style="margin-top: 5px;" hidden="hidden" >
        <option value="1" selected>Đề tài NCKH đã công bố</option>
        <option value="2">Đề xuất NCKH</option>
      </select>
      <center><button class="btn btn-outline-success form-control col-6" type="submit" style="margin-top: 5px;" >Tìm kiếm</button></center>
    </form>
  </div>  
</div>
<hr>
<!-- CÔNG TRÌNH NGHIÊN CỨU KHOA HỌC -->
<div class="muccon">
    <h3>Đề tài NCKH đã công bố</h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
        <?php $nghiemthu = lay_de_tai_da_cong_bo(0,6);$stt=1;
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
    <center style="bottom: -20px;"><button class="nut-link btn" id="xemthem" style="color:#fff;">XEM THÊM</button></center>
    </div>
</div>
<script type="text/javascript">
  var tin = 2;
  $(document).ready(function(){
    $('#nckh').addClass('active');
    $('#tieude').html('NCKH đã công bố');
    $('#xemthem').on('click',function(){
      $.ajax({
        url : "ajax/ajax_xem_them_nckh_da_cong_bo_mb.php",
        type : "post",
        dataType:"text",
        data : {
            tin: tin 
        },
        beforeSent : function(){
          $('#xemthem').html('ĐANG TẢI ...');
        },
        success : function (data){
            tin++;
            $('#xemthem').html('XEM THÊM');
            if(jQuery.isEmptyObject(data)){
              alert('Hết dữ liệu');
              $('#xemthem').remove();
            }else{
              $('.tinmoi').append(data);
            }
        },
        error: function () {
            alert('Lỗi khi tải tin');
        }
    });
    });
  });

</script>