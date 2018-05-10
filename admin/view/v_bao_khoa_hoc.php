<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
  <div class="card cach background-container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách các bài báo khoa học</h4>
          </div>
          <div class="card-body">
            <a href="?p=thembaokhoahoc" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
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
                        <td><a href="?p=suabaibao&id=<?php echo $row['IDBAO'] ?>"><?php echo $row['TENBAO']; ?></a></td>
                        <td><?php 
                            $tg = lay_tac_gia($row['IDBAO']);
                            while ($row1 = mysqli_fetch_assoc($tg)) {
                            echo $row1['HOTEN']."<br>";
                        } ?></td>
                        <td class="giua"><?php echo $row['DIEM']; ?></td>
                        <td class="giua"><?php echo $row['SOTIET']; ?></td>
                        <td class="giua"><?php echo $row['NGAYDANGBAI']; ?></td>
                        <td class="giua">
                            <a href="?p=suabaibao&id=<?php echo $row['IDBAO'] ?>" class="btn btn-primary btn-sm" title="Sửa"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm" id="" title="Xóa"><i class="fas fa-trash"></i></button>
                            <?php if ($row['FILE']!=''): ?>
                                <a href="../files/<?php echo $row['FILE'] ?>" title="Tải bài báo" target="_blank" class="btn btn-default btn-sm" ><i class="fas fa-download"></i></a>
                            <?php endif ?>
                        </td>
                    </tr>
                    <?php  $stt++; } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tên bài báo</th>
                        <th>Tác giả</th>
                        <th>Điểm</th>
                        <th>Số tiết</th>
                        <th>Ngày đăng</th>
                        <th>Thao tác</th>
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
</script>