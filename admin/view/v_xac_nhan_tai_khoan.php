<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<div class="card cach background-container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách tài khoản cần xác nhận</h4>
          </div>
          <div class="card-body">
              <table id="bangxacnhan" class="table table-hover table-bordered" style="width:100%">
                <thead>
                    <tr style="background:#e9ecef;">
                        <th class="giua" style="width: 28px;">STT</th>
                        <th class="giua" style="width: 140px;"><input type="checkbox" id="checkall" style="transform: scale(1.8);">&ensp;&ensp;Xác nhận</th>
                        <th>Tên người dùng</th>
                        <th>Tên đăng nhập</th>
                        <th>Mail</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $stt = 1;
                    while ($row = mysqli_fetch_assoc($xn)){
                ?>
                    <tr x="<?php echo $row['IDND']; ?>">
                        <td class="giua"><?php echo $stt; ?></td>
                        <td class="giua"><input type="checkbox" style="transform: scale(1.8);"></td>
                        <td><?php echo $row['HOTEN']; ?></td>
                        <td><?php echo $row['TENDANGNHAP']; ?></td>
                        <td><?php echo $row['MAIL']; ?></td>
                    </tr>
                <?php  $stt++; } ?>
                </tbody>
            </table>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-primary" id="xacnhan"><i class="fas fa-save"></i>&nbsp;&nbsp;Xác nhận mục đã chọn</button>
            &ensp;
            <button type="button" class="btn btn-danger" id="xoaxacnhan"><i class="far fa-times-circle"></i>&nbsp;&nbsp;Xoá mục đã chọn</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cach"></div>
  <!-- Modal -->
<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
<script src="../js/datatables.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#xacnhantaikhoan').addClass('active');
    $('.tieude').html('Xác nhận người dùng đăng ký');
    $('.guidexuat').click(function () {
        $('#iddx').val($(this).attr('lydata'));
        $('#tendexat').html($('#tendetai-'+$(this).attr('lydata')).text().trim());
        $('#modal-Gui-de-xuat').modal('show');
    });
    $('#checkall').on('click',function(){
        $(':checkbox').each(function() {
            if($('#checkall').is(':checked')) this.checked = true;
            else this.checked = false;
        });
    });
    $('#xacnhan').on('click',function () {
      var bxn = [],xn = [];
      $('#bangxacnhan').find('tr:not(:first)').each(function(i, row) {
        var cols = [],dem=0;
        $(this).find('td:not(:first)').each(function(i, col) {
            if(dem!=0)cols.push($(this).text());
          else{if($(this).find('input[type="checkbox"]').is(':checked')) cols.push(1); else cols.push(0);}
            dem++;
        });cols.push($(this).attr('x'));
        bxn.push(cols);
      });
      bxn.forEach(function(t){
        if(t[0]==1) xn.push(t);
      });
      if(jQuery.isEmptyObject(xn)){
          swal('Ôi! Lỗi','Không có mục nào được chọn','error');
          return;
      }
      if(kiemtraketnoi()){
          $.ajax({
              url: 'ajax/ajax_xac_nhan_tai_khoan.php',
              type: 'POST',
              data: {
                  xn: xn
              },
              beforeSend: function () {
                  swal("Đợi đã!", "Vui lòng chờ đợi cho đến khi hoàn tất", "info");
              },
              success: function (data) {
                  var result = $.parseJSON(data);
                  if(result.trangthai == 1){
                      swal('Thành công','Đã xác nhận người dùng','success');
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
    $('#xoaxacnhan').on('click',function () {
      var hoi = confirm('Bạn có chắc xoá những mục đã chọn');
      if (!hoi) {return;}
      var bxn = [],xn = [];
      $('#bangxacnhan').find('tr:not(:first)').each(function(i, row) {
        var cols = [],dem=0;
        $(this).find('td:not(:first)').each(function(i, col) {
            if(dem!=0)cols.push($(this).text());
          else{if($(this).find('input[type="checkbox"]').is(':checked')) cols.push(1); else cols.push(0);}
            dem++;
        });cols.push($(this).attr('x'));
        bxn.push(cols);
      });
      bxn.forEach(function(t){
        if(t[0]==1) xn.push(t);
      });
      if(jQuery.isEmptyObject(xn)){
          swal('Ôi! Lỗi','Không có mục nào được chọn','error');
          return;
      }
      if(kiemtraketnoi()){
          $.ajax({
              url: 'ajax/ajax_xoa_xac_nhan_tai_khoan.php',
              type: 'POST',
              data: {
                  xn: xn
              },
              beforeSend: function () {
                  swal("Đợi đã!", "Vui lòng chờ đợi cho đến khi hoàn tất", "info");
              },
              success: function (data) {
                  var result = $.parseJSON(data);
                  if(result.trangthai == 1){
                      swal('Thành công','Đã xoá mục đã chọn','success');
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
        "scrollY":"300px",
        "scrollCollapse": true,
        "paging": false
        });
} );
</script>
