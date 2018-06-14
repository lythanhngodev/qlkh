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
<hr>
<!-- BÀI BÁO KHOA HỌC -->
<div class="muccon">
    <h3>Báo khoa học</h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
        <?php $baibao = lay_bao_khoa_hoc(0,6);$stt=1;
        while ($row = mysqli_fetch_assoc($baibao)) {
          if($stt!=1){
            echo "<hr style='width: 90%;'>";
          }
         ?>
         <div class="noidungtin">
            <a class="tieu-de-tin" href="xembaibao/<?php echo to_slug($row['TENBAO']) ?>-<?php echo $row['IDBAO'] ?>.ltn" title="<?php echo $row['TENBAO'] ?>"><?php echo $row['TENBAO'] ?></a>
            <div class="thongtinchung">
              <ul>
                 <li>Tác giả : <?php echo lay_ten_tac_gia_bao_khoa_hoc($row['IDBAO']); ?></li> 
                 <li>Nhà xuất bản/ Tạp chí: <?php echo $row['TAPCHI'] ?></li> 
                 <li>Năm: <?php echo $row['NAMXUATBAN'] ?></li> 
              </ul>
            </div>
       </div>
         <?php $stt++;} ?>
        </div>
    <center style="bottom:-20px;"><button id="xemthem" class="nut-link btn">XEM THÊM</button></center>
    </div>
</div>
<script type="text/javascript">
    var tin = 2;
    $("document").ready(function() {
        $('#tintuc').addClass('active');
        $('#tieude').html('Báo khoa học');
    $('#xemthem').on('click',function(){
      $.ajax({
        url : "ajax/ajax_xem_them_bao_khoa_hoc_mb.php",
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