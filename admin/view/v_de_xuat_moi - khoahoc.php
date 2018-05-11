<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
  <div class="card cach background-container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách đề tài</h4>
          </div>
          <div class="card-body">
              <table id="example" class="table table-hover table-bordered" style="width:100%">
                <thead>
                    <tr style="background:#e9ecef;">
                        <th class="giua" style="width: 28px;">STT</th>
                        <th>Tên đề tài</th>
                        <th style="width: 160px;">Người đề xuất</th>
                        <th style="width: 120px;">Thời gian gửi</th>
                        <th style="width: 100px;">Trạng thái</th>
                        <th style="width: 70px;" class="giua">Xem xét</th>
                    </tr>
                </thead>
                <tbody>
                <?php $stt=1; while ($row = mysqli_fetch_assoc($detai)){ ?>
                    <tr>
                        <th><?php echo $stt; ?></th>
                        <td><?php echo $row['TENDETAI']; ?></td>
                        <td><?php echo lay_ten_chu_nhiem_de_tai($row['IDDT']); ?></td>
                        <td class="giua"><?php echo date("d-m-Y H:m:s", strtotime($row['NGAYDEXUAT'])); ?></td>
                        <td>
                          <span class="badge badge-dark" style='font-size:1rem;'>Chờ xét duyệt</span>
                        </td>
                        <td class="giua">
                            <a href="?p=xemdexuat&id=<?php echo $row['IDDT']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php $stt++; } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tên đề xuất</th>
                        <th>Người đề xuất</th>
                        <th>Ngày gửi</th>
                        <th>Trạng thái</th>
                        <th>Xem xét</th>
                    </tr>
                </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cach"></div>
<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
<script src="../js/datatables.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#dexuatmoi').addClass('active');
    $('.tieude').html('Đề xuất đề tài nghiên cứu khao học mới');
  });
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>