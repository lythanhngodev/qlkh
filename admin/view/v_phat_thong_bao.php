<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
?>
<style type="text/css">
    input[type='checkbox']{transform: scale(1.8);}
</style>
<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="../ckfinder/ckfinder.js" type="text/javascript"></script> 
<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Danh sách thành viên</h4>
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
                    <button type="button" class="btn btn-primary" id="xacnhan"><i class="fas fa-save"></i>&nbsp;&nbsp;Phát thông báo mục đã chọn</button>
                    &ensp;<a id="bocheckall"><u>Bỏ chọn tất cả</u></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>
<div class="modal" id="modal-mail" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nội dung thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="noidungmail"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="guimail"><i class="fa fa-paper-plane"></i>&ensp;Gửi mail</button>
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
            $(':checkbox').each(function() {
                if($('#checkall').is(':checked')) this.checked = true;
                else this.checked = false;
            });
        });
        $('#bocheckall').on('click',function(){
            $(':checkbox').map(function() {
                this.checked = false;
            });
        });
    $('#xacnhan').on('click',function () {
        $('#modal-mail').modal('show');
        return;
      var hoi = confirm('Bạn có chắc phát thông báo những mục đã chọn');
      if (!hoi) {return;}
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
      if(kiemtraketnoi()){
          $.ajax({
              url: 'ajax/ajax_phat_thong_bao.php',
              type: 'POST',
              data: {
                  xn: xn
              },
              beforeSend: function () {
                  swal("Đợi đã!", "Vui lòng chờ đợi cho đến khi hoàn tất. Quá trình này có thể mất vài phút", "info");
              },
              success: function (data) {
                  var result = $.parseJSON(data);
                  if(result.trangthai == 1){
                      swal('Thành công','Đã phát thông báo thành công','success');
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
    });
    $(document).ready(function() {
        $('#bangxacnhan').DataTable({
        "scrollY":"350px",
        "scrollCollapse": true,
        "paging": false
        });
    } );
</script>