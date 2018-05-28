<div id="ltn-slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php $stt=1;$slider=lay_slider(); while ($row = mysqli_fetch_assoc($slider)) { ?>
    <div class="carousel-item <?php if($stt==1) echo "active"; ?>">
      <img class="d-block w-100" src="<?php echo $row['hinhanh']; ?>" alt="<?php echo $row['tieude']; ?>" style="width: 100%" >
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
<div class="muccon" style="padding-bottom: 0;margin-bottom: 1rem;">
    <h3>Biểu mẫu</h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
          <table class="table table-bordered table-hover" border="1">
            <thead>
              <tr style="text-align: center;">
                <th style="width: 120px;">Mã</th>
                <th>Tên</th>
                <th style="width: 90px;">Tải xuống</th>
              </tr>
            </thead>
            <?php $stt=1;
            while ($row = mysqli_fetch_assoc($bieumau)) { ?>
            <tr style="text-align: center;">
              <td><?php echo $row['MABM'] ?></td>
              <td><?php echo $row['TENBM'] ?></td>
              <td><a href="<?php echo "files/".$row['FILE']; ?>">Tải xuống</a></td>
            </tr>
             <?php $stt++; } ?>
          </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("document").ready(function() {
        $('#bieumau').addClass('active');
    });
</script> 