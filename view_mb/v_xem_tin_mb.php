<?php if (empty($bv)) {
    echo "Không tìm thấy bài viết";
}else{  ?>
<div id="fb-root"></div><script>window.fbAsyncInit = function() {FB.init({appId: '2165745763451934',xfbml: true,version: 'v3.0'});FB.AppEvents.logPageView();};(function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) {return;}js = d.createElement(s); js.id = id;js.src = "https://connect.facebook.net/en_US/sdk.js";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
<style type="text/css">
    .muccon{
        padding-bottom: 0px !important;
    }
</style>
<div class="chi-tiet-bai-viet">
    <div class="vlu-chi-tiet-header-bai-viet">
        <article class="vlu-chi-tiet-hinh-anh-tin lazyload" data-src="<?php echo $bv['HINHANH'] ?>" style="background-image: url()">
            <a>
                <div class="vlu-chi-tiet-link-bai-viet">
                    <div class="vlu-chi-tieu-tieu-de-bai-viet"><?php echo $bv['TENBV'] ?></div>
                    <div class="vlu-chi-tiet-thoi-gian-bai-viet">
                        <?php echo thoigiandangbai($bv['NGAYDANG']); ?>&nbsp;&nbsp;|&nbsp;&nbsp;Lượt xem: <?php echo $bv['LUOTXEM'] ?></div>
                </div>
            </a>
        </article>
    </div>
<div style="float: left;margin-top: 10px;" class="fb-like" data-href="<?php echo "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    <div class="vlu-chi-tiet-bai-viet">
        <article>
            <?php echo $bv['NOIDUNG'] ?>
        </article>
    </div>
</div>   
<!-- TIN MỚI -->
<div class="muccon">
    <h3>Bài viết liên quan</h3>
    <div class="tieudemuccon">
        <div class="tinmoi">
      <?php $bvlq = lay_bai_viet_lien_quan($id);
      while ($row = mysqli_fetch_assoc($bvlq)) { ?>
            <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
                <div class="tincon content">
                    <div class="hinhtin lazyload" data-src="_thumbs/<?php echo $row['HINHANH']; ?>" style="background-image: url();"></div>
                    <div class="tomtattin"><?php echo $row['TENBV'] ?><br><?php echo thoigiandangbai($row['NGAYDANG']); ?></div>
                </div> 
            </a>
           <?php } ?>
        </div>
    </div>
</div>
<?php } ?>
<script type="text/javascript">
    document.getElementById("tintuc").classList.add("active");
    document.getElementById("tieude").innerHTML = "Tin tức";
</script>