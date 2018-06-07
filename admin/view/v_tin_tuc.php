<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
  <div class="card cach background-container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Tin tức</h4>
          </div>
          <div class="card-body">
            <a href="?p=themtintuc" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
              <table id="example" class="table table-hover table-bordered" style="width:100%">
                <thead>
                    <tr style="background:#e9ecef;">
                        <th class="giua" style="width: 28px;">STT</th>
                        <th>Tên bài báo</th>
                        <th style="width: 300px;">Mô tả</th>
                        <th style="width: 90px;">Ngày đăng</th>
                        <th style="width: 55px;">Ẩn/Hiện</th>
                        <th style="width: 90px;">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=1; while ($row = mysqli_fetch_assoc($tintuc)) { ?>
                    <tr>
                        <th class="giua"><?php echo $stt; ?></th>
                        <td><?php echo $row['TENBV']; ?></td>
                        <td><?php echo $row['TENBV']; ?></td>
                        <td class="giua"><?php echo $row['NGAYDANG']; ?></td>
                        <td class="giua" onclick="alert('Đang phát triển')">
                            <?php if ($row['HIENTHI']=='1'): ?>
                                <a class="mat"><i class="fas fa-eye"></i></a>
                            <?php endif ?>
                            <?php if ($row['HIENTHI']=='0'): ?>
                                <a class="mat"><i class="fas fa-eye-slash"></i></a>
                            <?php endif ?>
                        </td>
                        <td class="giua">
                            <a href="?p=suabaiviet&id=<?php echo $row['IDBV'] ?>" class="btn btn-primary btn-sm" title="Sửa"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm" id="" title="Xóa" onclick="xoa(<?php echo $row['IDBV'] ?>)"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php  $stt++; } ?>
                </tbody>
            </table>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cach"></div>

<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
<script src="../js/datatables.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#tintuc').addClass('active');
    $('.tieude').html('Tin tức');
  });
  $(document).ready(function() {
    $('#example').DataTable();
} );
  function xoa(id){
    if (!confirm('Bạn có chắc xoá bài báo này?')) {
      return;
    }
    $.ajax({
        url : "ajax/ajax_xoa_bai_viet.php",
        type : "post",
        dataType:"text",
        data : {
            id: id
        },
        success : function (data){
            $.notifyClose();
            var mang = $.parseJSON(data);
            if (mang.trangthai==1) {
              swal('Tốt', 'Đã xoá bài viết', 'success');
              setTimeout(function(){
                  location.reload();
              }, 2000);
            }
            else swal('Ôi lỗi!', 'Xảy ra lỗi, vui lòng thử lại sau', 'error');
        },
        error : function(){
          swal('Ôi lỗi!', 'Xảy ra lỗi, vui lòng thử lại sau', 'error');
        }
    });
  }
</script>