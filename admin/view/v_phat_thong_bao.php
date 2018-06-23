<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
?>
<style type="text/css">
    input[type='checkbox']{transform: scale(1.8);}
</style>
<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="../ckfinder/ckfinder.js" type="text/javascript"></script> 
<div class="cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">                
                <div class="card-header">
                    <h4>Phát thông báo nhóm</h4>
                </div>
                <div class="card-body">
                    <?php 
                    $nhom = lay_nhom_thong_bao();
                    while ($row = mysqli_fetch_assoc($nhom)) { ?>
                        <span class="tb-nhom" lydata="<?php echo $row['IDNTB'] ?>"><?php echo $row['TENNHOM'] ?> <button class="btn btn-success btn-sm guinhom"><i class="fa fa-paper-plane"></i></button> <button class="btn btn-danger btn-sm xoanhom"><i class="fa fa-times"></i></button></span>
                    <?php }
                     ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 1rem;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Phát thông báo thành viên</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="bangxacnhan" class="table table-bordered table-hover">
                                <thead>
                                <tr style="background:#e9ecef;">
                                    <td class="giua" style="width: 50px;"><input type="checkbox" id="checkall"></td>
                                    <th>Họ & Tên</th>
                                    <th>Khoa / Phòng</th>
                                    <th>Mail</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($tv)){ ?>
                                    <tr>
                                        <td class="giua"><input type="checkbox"></td>
                                        <td><?php echo $row['HOTEN'] ?></td>
                                        <td><?php 
                                        $_idnd = $row['IDND'];
                                        $_kbm = lay_khoa_phong($_idnd);
                                        while ($_kp = mysqli_fetch_assoc($_kbm)) {
                                            echo $_kp['TENKBM'];
                                        }
                                         ?></td>
                                        <td><?php echo $row['MAIL']; ?></td>
                                    </tr>
                                <?php }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                  <div>
                    <button type="button" class="btn btn-primary" id="xacnhan">Phát thông báo mục đã chọn (<span class="soluong">0</span>)</button>
                    &ensp;<a id="taonhom" class="btn btn-primary">Tạo nhóm mục đã chọn (<span class="soluong">0</span>)</a>
                    &ensp;<a id="bocheckall" class="btn btn-primary">Bỏ chọn tất cả (<span class="soluong">0</span>)</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>

<div class="modal" id="modal-tao-nhom" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tạo nhóm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tên nhóm</label>
                    <input type="text" class="form-control" id="ten-nhom">
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12" id="body-tao-nhom"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themnhom">Tạo nhóm</button>
            </div>
        </div>
    </div>
</div>

<div class="modal animated fadeIn" id="modal-mail" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thông tin thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" id="danh-sach-mail"></div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="text-bold">Tiêu đề</label>
                    <input type="text" class="form-control" id="tieudemail">
                </div>
                <div class="form-group">
                    <label class="text-bold">Nội dung</label>
                    <textarea class="form-control" id="noidungmail"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="guimail"><i class="fa fa-paper-plane"></i>&ensp;Gửi thông báo</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    CKEDITOR.replace( 'noidungmail', {
      filebrowserBrowseUrl : '../ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl : '../ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl : '../ckfinder/ckfinder.html?type=Flash',
      filebrowserImageUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
</script>
<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
<script src="../js/datatables.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#phatthongbao').addClass('active');
        $('.tieude').html('Phát thông báo');
        $('#checkall').on('click',function(){
            $(':checkbox').map(function() {
                if($('#checkall').is(':checked')) this.checked = true;
                else this.checked = false;
            });
        });
        $('#bocheckall').on('click',function(){
            $(':checkbox').map(function() {
                this.checked = false;
            });
            $('.soluong').html('0');
        });
    $(document).on('click','input[type="checkbox"]',function(){
      var bxn = [], d=0;
      $('#bangxacnhan').find('tr:not(:first)').each(function(i, row) {
        var cols = [],dem=0;
        $(this).find('td').each(function(i, col) {
           if(dem==0){if($(this).find('input[type="checkbox"]').is(':checked')) cols.push(1); else cols.push(0);}
            dem++;
        });
        bxn.push(cols);
      });
      bxn.forEach(function(t){
        if(t[0]==1) d++;
      });
      $('.soluong').html(d);
    });
    $(document).on('click','#taonhom',function () {
      $('#body-tao-nhom').html('');
      var bxn = [],xn = [];
      $('#bangxacnhan').find('tr:not(:first)').each(function(i, row) {
        var cols = [],dem=0;
        $(this).find('td').each(function(i, col) {
           if(dem==0){if($(this).find('input[type="checkbox"]').is(':checked')) cols.push(1); else cols.push(0);}
           else if(dem==3)cols.push($(this).text());
            dem++;
        });
        bxn.push(cols);
      });
      bxn.forEach(function(t){
        if(t[0]==1) xn.push(t[1]);
      });
      if(jQuery.isEmptyObject(xn)){
          swal('Ôi! Lỗi','Không có mục nào được chọn','error');
          return;
      }
      if(xn.length==1){
            swal('Ôi! Lỗi','Nhóm ít nhất 2 thành viên, vui lòng làm lại','error');
            $('#modal-tao-nhom').modal('hide');
            return;
        }
      xn.map(function(v){
        if (!jQuery.isEmptyObject(v)) {
            $('#body-tao-nhom').append('<span class="tb-tao-nhom">'+v+' <button class="btn btn-danger btn-sm xoa-tv-nhom"><i class="fa fa-times"></i></button></span>');
        }
      });
      $('#modal-tao-nhom').modal('show');
    });
    $(document).on('click','.xoa-tv-nhom',function(){
        $(this).parent('span').remove();
    });
    $(document).on('click','#themnhom',function(){
        if($('#ten-nhom').val().trim()==''){
            swal('Ôi! Lỗi','Vui lòng nhập tên nhóm','error');
            return;
        }
        var tv=$('#body-tao-nhom').find('.tb-tao-nhom').map(function(){
            return($(this).text().trim());
        }).toArray();
        if(jQuery.isEmptyObject(tv)){
            swal('Ôi! Lỗi','Nhóm chưa có thành viên, vui lòng làm lại','error');
            $('#modal-tao-nhom').modal('hide');
            return;
        }
        if(tv.length==1){
            swal('Ôi! Lỗi','Nhóm ít nhất 2 thành viên, vui lòng làm lại','error');
            $('#modal-tao-nhom').modal('hide');
            return;
        }
      if(kiemtraketnoi()){
          $.ajax({
              url: 'ajax/ajax_tao_nhom_phat_thong_bao.php',
              type: 'POST',
              data: {
                  tv: tv,
                  tennhom: $('#ten-nhom').val().trim()
              },
              beforeSend: function () {
                  swal("Đợi đã!", "Vui lòng chờ đợi cho đến khi hoàn tất.", "info");
              },
              success: function (data) {
                  var result = $.parseJSON(data);
                  if(result.trangthai == 1){
                      swal('Thành công','Đã tạo nhóm thành công','success');
                      setTimeout(function(){
                        location.reload();
                    }, 2000);
                  }
                  else
                    swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
              },
              error: function () {
                  swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
              }
          });
      }
      else
          khongthanhcong('Không có kết nối internet');
    });
    $(document).on('click','.guinhom',function(){
      if($('#modal-chi-tiet-nhom').length) $('#modal-chi-tiet-nhom').remove();  
      $.ajax({
          url: 'ajax/ajax_chi_tiet_nhom.php',
          type: 'POST',
          data: {
              tennhom: $(this).parent('span').text().trim(),
              nhom: $(this).parent('span').attr('lydata')
          },
          success: function (data) {
              $('body').append(data);
              $('#modal-chi-tiet-nhom').modal('show');
                CKEDITOR.replace( 'noidungmail2', {
                  filebrowserBrowseUrl : '../ckfinder/ckfinder.html',
                  filebrowserImageBrowseUrl : '../ckfinder/ckfinder.html?type=Images',
                  filebrowserFlashBrowseUrl : '../ckfinder/ckfinder.html?type=Flash',
                  filebrowserImageUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                  filebrowserFlashUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
          },
          error: function () {
              swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
          }
      });
    });
    $('#xacnhan').on('click',function () {
      $('#danh-sach-mail').html('');
      var bxn = [],xn = [];
      $('#bangxacnhan').find('tr:not(:first)').each(function(i, row) {
        var cols = [],dem=0;
        $(this).find('td').each(function(i, col) {
           if(dem==0){if($(this).find('input[type="checkbox"]').is(':checked')) cols.push(1); else cols.push(0);}
           else if(dem==3)cols.push($(this).text());
            dem++;
        });
        bxn.push(cols);
      });
      bxn.forEach(function(t){
        if(t[0]==1) xn.push(t[1]);
      });
      if(jQuery.isEmptyObject(xn)){
          swal('Ôi! Lỗi','Không có mục nào được chọn','error');
          return;
      }
      $('#modal-mail').modal('show');
      xn.map(function(v){
        $('#danh-sach-mail').append('<span class="danhsachmail">'+v+' <button class="btn btn-danger btn-sm xoa-tv-nhom"><i class="fa fa-times"></i></button></span>');
      });
      //var noidung =  CKEDITOR.instances['noidungmail'].getData();
    });
    });
    $(document).ready(function() {
        $('#bangxacnhan').DataTable({
        "scrollY":"350px",
        "scrollCollapse": true,
        "paging": false
        });
    } );
</script>