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
                        <th class="giua">Mã đề tài</th>
                        <th>Tên đề tài</th>
                        <th style="width: 160px;">Chủ nhiệm đề tài</th>
                        <th style="width: 120px;">Thời gian</th>
                        <th style="width: 100px;">Trạng thái</th>
                        <th style="width: 70px;" class="giua">Xem xét</th>
                    </tr>
                </thead>
                <tbody>
                <?php $stt=1; while ($row = mysqli_fetch_assoc($detai)){ ?>
                    <tr>
                        <th><?php echo $stt; ?></th>
                        <th class="giua"><?php echo $row['MADETAI']; ?></th>
                        <td><?php echo $row['TENDETAI']; ?></td>
                        <td><?php echo lay_ten_chu_nhiem_de_tai($row['IDDT']); ?></td>
                        <td class="giua"><?php if(!empty($row['THOIGIANNGHIEMTHU'])) echo date("d-m-Y", strtotime($row['THOIGIANNGHIEMTHU'])); ?></td>
                        <td>
                          <span class="badge badge-dark" style='font-size:1rem;'>Chờ xét duyệt đã nghiệm thu</span>
                        </td>
                        <td class="giua">
                            <a href="?p=xemdexuat&id=<?php echo $row['IDDT']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php $stt++; } ?>
                </tbody>
                <tfoot>
                    <tr style="background:#e9ecef;">
                        <th class="giua" style="width: 28px;">STT</th>
                        <th class="giua">Mã đề tài</th>
                        <th>Tên đề tài</th>
                        <th style="width: 160px;">Chủ nhiệm đề tài</th>
                        <th style="width: 120px;">Thời gian</th>
                        <th style="width: 100px;">Trạng thái</th>
                        <th style="width: 70px;" class="giua">Xem xét</th>
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
    $('#duyetnghiemthudanhap').addClass('active');
    $('.tieude').html('Duyệt đề tài khoa học từng nghiệm thu trước đây');
  });
  $(document).ready(function() {
    $('#example').DataTable({
        "scrollY":"300px",
        "scrollCollapse": true,
        "paging": false
        });
} );
</script>