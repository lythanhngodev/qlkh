<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
  <div class="card cach background-container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách các bài báo khoa học</h4>
          </div>
          <div class="card-body">
            <a href="?p=thembaokhoahoc" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
              <table id="example" class="table table-hover table-bordered" style="width:100%">
                <thead>
                    <tr style="background:#e9ecef;">
                        <th class="giua" style="width: 28px;">STT</th>
                        <th>Tên bài báo</th>
                        <th style="width: 160px;">Tác giả</th>
                        <th style="width: 40px;">Điểm</th>
                        <th style="width: 60px;">Số tiết</th>
                        <th style="width: 75px;">Ngày đăng</th>
                        <th style="width: 90px;">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=1; while ($row = mysqli_fetch_assoc($bao)) { ?>
                    <tr>
                        <th class="giua"><?php echo $stt; ?></th>
                        <td><?php echo $row['TENBAO']; ?></td>
                        <td><?php 
                            $tg = lay_tac_gia($row['IDBAO']);
                            while ($row1 = mysqli_fetch_assoc($tg)) {
                            echo $row1['HOTEN']."<br>";
                        } ?></td>
                        <td class="giua"><?php echo $row['DIEM']; ?></td>
                        <td class="giua"><?php echo $row['SOTIET']; ?></td>
                        <td class="giua"><?php echo $row['NGAYDANGBAI']; ?></td>
                        <td class="giua">
                            <a href="?p=suabaibao&id=<?php echo $row['IDBAO'] ?>" class="btn btn-primary btn-sm" title="Sửa"><i class="far fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm" id="" title="Xóa" onclick="xoa(<?php echo $row['IDBAO'] ?>)"><i class="fa fa-trash"></i></button>
                            <?php if ($row['FILE']!=''): ?>
                                <a href="../files/<?php echo $row['FILE'] ?>" title="Tải bài báo" target="_blank" class="btn btn-default btn-sm" ><i class="far fa-download"></i></a>
                            <?php endif ?>
                        </td>
                    </tr>
                    <?php  $stt++; } ?>
                </tbody>
                <tfoot>
                    <tr style="background:#e9ecef;">
                        <th class="giua" style="width: 28px;">STT</th>
                        <th>Tên bài báo</th>
                        <th style="width: 160px;">Tác giả</th>
                        <th style="width: 40px;">Điểm</th>
                        <th style="width: 60px;">Số tiết</th>
                        <th style="width: 75px;">Ngày đăng</th>
                        <th style="width: 90px;">Thao tác</th>
                    </tr>
                </tfoot>
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
    $('#baokhoahoc').addClass('active');
    $('.tieude').html('Bài báo khoa học');
  });
  $(document).ready(function() {
    $('#example').DataTable();
} );
  function xoa(id){
    if (!confirm('Bạn có chắc xoá bài báo này?')) {
      return;
    }
    $.ajax({
        url : "ajax/ajax_xoa_bao_khoa_hoc.php",
        type : "post",
        dataType:"text",
        data : {
            id: id
        },
        success : function (data){
            $.notifyClose();
            var mang = $.parseJSON(data);
            if (mang.trangthai==1) {
              swal('Tốt', 'Đã xoá bài báo', 'success');
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