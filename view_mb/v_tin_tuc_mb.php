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
<!-- HOẠT ĐỘNG HỢP TÁC QUỐC TẾ -->
<div class="muccon">
    <h3><?php echo ten_chuyen_muc($id); ?></h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
        <?php
        $d_tin = mysqli_num_rows($tin);
         if ($d_tin==0) {
            echo "Chuyên mục chưa có bài viết</div>";
        }else{ 
            while ($row = mysqli_fetch_assoc($tin)){ ?>
            <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
                <div class="tincon content">
                    <div class="hinhtin lazyload" data-src="_thumbs/<?php echo $row['HINHANH']; ?>" style="background-image: url();"></div>
                    <div class="tomtattin"><?php echo $row['TENBV'] ?><br><?php echo thoigiandangbai($row['NGAYDANG']); ?></div>
                </div>  
            </a>
           <?php } ?>
        </div>
    </div>
    <center style="bottom: -20px;" ><button id="xemthem" class="nut-link btn">XEM THÊM</button></center>
<?php } ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    var tin = 2;
    document.getElementById("tintuc").classList.add("active");
    document.getElementById("tieude").innerHTML = "Tin tức";
    $(document).on('click','#xemthem',function(){
      $.ajax({
        url : "ajax/ajax_xem_them_tin_tuc_mb.php",
        type : "post",
        dataType:"text",
        data : {
            tin: tin, cm: <?php echo $id; ?> 
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
</script> 