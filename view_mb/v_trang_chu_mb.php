<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php $stt=1; while ($row = mysqli_fetch_assoc($slider)) { ?>
    <div class="carousel-item <?php if($stt==1) echo "active"; ?>">
      <img class="d-block w-100" src="<?php echo $row['hinhanh']; ?>" alt="<?php echo $row['tieude']; ?>" style="width: 100%" >
    </div>
    <?php $stt++; } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Trước</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Sau</span>
  </a>
</div>