<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<script src="../ckfinder/ckfinder.js"></script>
<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <?php
                        while ($row = mysqli_fetch_assoc($slider)) {
                            ?>
                            <div class="col-md-4 col-sm-6 col-6 khung-slider">
                                <div class="col-md-12 hinh-slider" style="background-image: url('../<?php echo $row['hinhanh'] ?>');"></div>
                                <div class="col-md-12">
                                    <br>
                                    <p class="cach-p"><b>Tiêu đề:</b> <i id="tieude-<?php echo $row['id']; ?>"><?php echo $row['tieude'] ?></i></p>
                                    <p class="cach-p"><b>Đường dẫn:&nbsp;</b><a><?php echo $row['link'] ?></a></p>
                                    <p><b>Style:</b>&nbsp;<?php echo $row['style'] ?></p>
                                    <p><b>Trạng thái:&nbsp;</b><?php if($row['kichhoat']=='1') echo "Kích hoạt"; else echo "<strike>Kích hoạt</strike>"; ?></p>
                                    <input type="text" hidden="hidden" value="<?php echo $row['hinhanh']; ?>" id="hinhanh-id-<?php echo $row['id'] ?>">
                                    <input type="text" hidden="hidden" value="<?php echo $row['tieude']; ?>" id="tieude-id-<?php echo $row['id'] ?>">
                                    <input type="text" hidden="hidden" value="<?php echo $row['link']; ?>" id="link-id-<?php echo $row['id']; ?>">
                                    <input type="text" hidden="hidden" value="<?php echo $row['style']; ?>" id="style-id-<?php echo $row['id']; ?>">
                                    <input type="checkbox" hidden="hidden" name="" <?php if($row['kichhoat']=='1') echo "checked=\"checked\""; ?> id="kichhoat-id-<?php echo $row['id']; ?>">
                                </div>
                                <div class="left">
                                    <button class="btn btn-primary vlute-edit-slider" data-vlute="<?php echo $row['id']; ?>" >Sửa</button>
                                    <button class="btn btn-danger vlute-delete-slider" data-vlute="<?php echo $row['id']; ?>" >Xóa</button>
                                </div>
                                <div class="cach"></div>
                            </div>
                            <?php
                        }
                        ?>
                        <!-- khởi tạo slider -->
                        <div class="col-md-3 col-ms-6 khung-them-slider">
                            <p style="font-size: 170px;">+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>

<!-- Modal thêm slider -->
<div class="modal" id="modal-them-slider" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Gửi đề xuất</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tiêu đề Slider</label>
                    <input type="text" class="form-control" name="" id="tieude-slider" placeholder="Tiêu đề Slider" required autocomplete="on">
                </div>
                <div class="form-group">
                    <label>Đường dẫn link</label>
                    <input type="text" class="form-control" name="" id="link-slider" placeholder="Đường dẫn link" required autocomplete="on">
                </div>
                <div class="form-group">
                    <label>Chọn Style hiển thị</label><br>
                    <select name="" id="style-slider" class="form-control">
                        <option value="sliceDown">sliceDown</option>
                        <option value="sliceDownLeft">sliceDownLeft</option>
                        <option value="sliceUp">sliceUp</option>
                        <option value="sliceUpLeft">sliceUpLeft</option>
                        <option value="sliceUpDown">sliceUpDown</option>
                        <option value="sliceUpDownLeft">sliceUpDownLeft</option>
                        <option value="fold">fold</option>
                        <option value="fade">fade</option>
                        <option value="random">random</option>
                        <option value="slideInRight">slideInRight</option>
                        <option value="slideInLeft">slideInLeft</option>
                        <option value="boxRandom">boxRandom</option>
                        <option value="boxRain">boxRain</option>
                        <option value="boxRainReverse">boxRainReverse</option>
                        <option value="boxRainGrow">boxRainGrow</option>
                        <option value="boxRainGrowReverse">boxRainGrowReverse</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Chọn hình ảnh</label><br>
                    <button class="btn btn-primary" id="" onclick="BrowseServer()">Chọn từ ...</button>
                    <p class="help-block">Nên chọn hình ảnh có kích thước 720px x 287px.</p>
                    <img src="../images/slider-mac-dinh.jpg" id="id-hinhanh">
                    <input type="text" hidden="hidden" name="" value="images/slider-mac-dinh.jpg" id="id-hinhanh-ct">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="them-slider">Hoàn tất</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal sửa slider -->
<div class="modal" id="modal-sua-slider" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tiêu đề Slider</label>
                    <input type="text" class="form-control" name="" id="tieude-slider-edit" placeholder="Tiêu đề Slider" required autocomplete="on">
                </div>
                <div class="form-group">
                    <label>Đường dẫn link</label>
                    <input type="text" class="form-control" name="" id="link-slider-edit" placeholder="Đường dẫn link" required autocomplete="on">
                </div>
                <div class="form-group">
                    <label>Chọn Style hiển thị</label><br>
                    <select name="" id="style-slider-edit" class="form-control">
                        <option value="sliceDown">sliceDown</option>
                        <option value="sliceDownLeft">sliceDownLeft</option>
                        <option value="sliceUp">sliceUp</option>
                        <option value="sliceUpLeft">sliceUpLeft</option>
                        <option value="sliceUpDown">sliceUpDown</option>
                        <option value="sliceUpDownLeft">sliceUpDownLeft</option>
                        <option value="fold">fold</option>
                        <option value="fade">fade</option>
                        <option value="random">random</option>
                        <option value="slideInRight">slideInRight</option>
                        <option value="slideInLeft">slideInLeft</option>
                        <option value="boxRandom">boxRandom</option>
                        <option value="boxRain">boxRain</option>
                        <option value="boxRainReverse">boxRainReverse</option>
                        <option value="boxRainGrow">boxRainGrow</option>
                        <option value="boxRainGrowReverse">boxRainGrowReverse</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kích hoạt: </label>&nbsp;
                    <input type="checkbox" id="kichhoat-slider-edit" value=""> Bật/Tắt
                </div>
                <div class="form-group">
                    <label>Chọn hình ảnh</label><br>
                    <button class="btn btn-primary" id="" onclick="BrowseServer_sua()">Chọn từ ...</button>
                    <p class="help-block">Nên chọn hình ảnh có kích thước 720px x 287px.</p>
                    <img src="../images/slider-mac-dinh.jpg" id="id-hinhanh-edit">
                    <input type="text" hidden="hidden" name="" value="images/slider-mac-dinh.jpg" id="id-hinhanh-ct-edit">
                </div>
            </div>
            <input type="text" hidden="hidden" name="" value="" id="id-id">
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="sua-slider">Hoàn tất</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal xóa slider -->
<div class="modal" id="modal-xoa-slider" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa Slider này?</strong><hr>
                    <b>Slider:</b> <span id="tenslider"></span>
                </div>
            </div>
            <input type="text" hidden="hidden" name="" id="id-id-xoa" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="xoa-slider">Xóa</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.title = "Quản lý Slider";
    var finder = new CKFinder();
    function BrowseServer() {
        finder.selectActionFunction = SetFileField;
        finder.popup();
    }
    function SetFileField(fileUrl) {
        document.getElementById('id-hinhanh').src = fileUrl;
        var host = "<?php echo $qlkh['HOSTGOC']; ?>";
        host = host.substr(0,host.lastIndexOf("\/"));
        //alert(fileUrl.substr(host.length+1,fileUrl.length-host.length));
        document.getElementById('id-hinhanh-ct').value=fileUrl.substr(host.length+1,fileUrl.length-host.length);
    }
    // Sua
    function BrowseServer_sua() {
        finder.selectActionFunction = SetFileField_sua;
        finder.popup();
    }
    function SetFileField_sua(fileUrl) {
        document.getElementById('id-hinhanh-edit').src = fileUrl;
        var host = "<?php echo $qlkh['HOSTGOC']; ?>";
        host = host.substr(0,host.lastIndexOf("\/"));
        //alert(fileUrl.substr(host.length+1,fileUrl.length-host.length));
        document.getElementById('id-hinhanh-ct-edit').value=fileUrl.substr(host.length+1,fileUrl.length-host.length);
    }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#slider').addClass('active');
    $('.tieude').html('Quản lý slider');
    $(".khung-them-slider").click(function(){
      $("#modal-them-slider").modal("show");
    });
    $("#them-slider").click(function(){
      var tieude = $("#tieude-slider").val();
      var link = $("#link-slider").val();
      var style = $("#style-slider").val();
      var hinhanh = $("#id-hinhanh-ct").val();
      // ajax
      $.ajax({
        url : "ajax/ajax_them_slider.php",
        type : "post",
        dataType:"text",
        data : {
          tieude: tieude,
          link: link,
          style: style,
          hinhanh: hinhanh
        },
        success : function (data){
            $('body').append(data);
            location.reload();
        }
      });
    });
    $(".vlute-edit-slider").click(function(){
      var id = $(this).attr("data-vlute");
      $("#tieude-slider-edit").val($("#tieude-id-"+id).val().trim());
      $("#style-slider-edit").val($("#style-id-"+id).val().trim());
      $("#link-slider-edit").val($("#link-id-"+id).val().trim());
      $("#id-hinhanh-edit").attr('src', "../"+$("#hinhanh-id-"+id).val().trim());
      $("#id-hinhanh-ct-edit").val($("#hinhanh-id-"+id).val().trim());
      $("#id-id").val(id);
      if(document.getElementById('kichhoat-id-'+id).checked){
        document.getElementById('kichhoat-slider-edit').checked=true;
      }
      $("#modal-sua-slider").modal("show");
    });
    $("#sua-slider").click(function(){
      var kh=0;
      if (document.getElementById('kichhoat-slider-edit').checked){
        kh=1;
      }
      $.ajax({
        url : "ajax/ajax_sua_slider.php",
        type : "post",
        dataType:"text",
        data : {
          tieude: $("#tieude-slider-edit").val(),
          link: $("#link-slider-edit").val(),
          style: $("#style-slider-edit").val(),
          hinhanh: $("#id-hinhanh-ct-edit").val(),
          kh: kh,
          id: $("#id-id").val()
        },
        success : function (data){
            $('body').append(data);
            location.reload();
        }
      });
    });
    // Xóa Slider
    $(".vlute-delete-slider").click(function(){
      var id = $(this).attr("data-vlute");
      $("#id-id-xoa").val(id);
      $("#tenslider").html($('#tieude-'+id).text());
      $("#modal-xoa-slider").modal('show');
    });
    $("#xoa-slider").click(function(){
      $.ajax({
        url : "ajax/ajax_xoa_slider.php",
        type : "post",
        dataType:"text",
        data : {
          id: $("#id-id-xoa").val()
        },
        success : function (data){
            $('body').append(data);
            location.reload();
        }
      });
    });
  });
</script>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#trangchu").addClass("active");
	});
</script>