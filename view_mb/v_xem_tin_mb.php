<?php if (empty($bv)) {
    echo "Không tìm thấy bài viết";
}else{  ?>
<div class="chi-tiet-bai-viet">
    <div class="vlu-chi-tiet-header-bai-viet">
        <article class="vlu-chi-tiet-hinh-anh-tin" style="background-image: url('<?php echo $bv['HINHANH'] ?>')">
            <a>
                <div class="vlu-chi-tiet-link-bai-viet">
                    <div class="vlu-chi-tieu-tieu-de-bai-viet"><?php echo $bv['TENBV'] ?></div>
                    <div class="vlu-chi-tiet-thoi-gian-bai-viet"><i class="far fa-clock"></i>&nbsp;
                        <?php if(empty($bv['NGAYDANG'])) echo "Đang cập nhật"; else echo $bv['NGAYDANG']; ?>&nbsp;&nbsp;|&nbsp;&nbsp;Lượt xem: <?php echo $bv['LUOTXEM'] ?></div>
                </div>
            </a>
        </article>
    </div>
    <div class="vlu-chi-tiet-bai-viet">
        <?php echo $bv['NOIDUNG'] ?>
    </div>
    <br>
    <hr>
    <br>
</div>   
<!-- TIN MỚI -->
<div class="muccon">
    <h3>Bài viết liên quan</h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
      <?php $bvlq = lay_bai_viet_lien_quan($id);
      while ($row = mysqli_fetch_assoc($bvlq)) { ?>
            <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
                <div class="tincon">
                    <div class="hinhtin" style="background-image: url('<?php echo $row['HINHANH']; ?>');"></div>
                    <div class="tomtattin"><?php echo $row['TENBV'] ?></div>
                </div> 
            </a>
           <?php } ?>
        </div>
    </div>
</div>
<?php } ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tintuc').addClass('active');
    });
</script>