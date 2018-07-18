<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
  <div class="card cach background-container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách đề tài</h4>
          </div>
          <div class="card-body">
            <a href="?p=themdexuat" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
              <table id="example" class="table table-hover table-bordered" style="width:100%">
                <thead>
                    <tr style="background:#e9ecef;">
                        <th class="giua" style="width: 28px;">STT</th>
                        <th class="giua">Mã đề tài</th>
                        <th>Tên đề tài</th>
                        <th style="width: 200px;">Lĩnh vực khoa học</th>
                        <th style="width: 100px;">Ngày tạo</th>
                        <th style="width: 100px;">Trạng thái</th>
                        <th style="width: 80px;">Gửi đề xuất</th>
                        <th style="width: 110px;">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $stt = 1;
                    while ($row = mysqli_fetch_assoc($detai)){
                ?>
                    <tr id="dong-<?php echo $row['IDDT']; ?>">
                        <td><?php echo $stt; ?></td>
                        <th class="giua"><?php echo $row['MADETAI'] ?></th>
                        <td id="tendetai-<?php echo $row['IDDT']; ?>"><?php echo $row['TENDETAI'] ?></td>
                        <td>
                        <?php
                        $iddtt = $row['IDDT'];
                        $linhvuc = linh_vuc_de_tai($iddtt);
                         while ($lv = mysqli_fetch_assoc($linhvuc)) { ?>
                            <?php echo " - ".$lv['TENLV']."<br>" ?>
                        <?php } ?>
                        </td>
                        <td><?php echo $row['NGAYTHEM']; ?></td>
                        <td><?php echo $row['TRANGTHAI']; ?></td>
                        <td class="giua" id="trangthai-<?php echo $row['IDDT']; ?>">
                          <?php if ($row['TRANGTHAI']=='Chờ gửi đề xuất'): ?>
                            <button class="btn btn-success btn-sm guidexuat" title="Gửi đề xuất đề tài" lydata="<?php echo $row['IDDT'];?>"><i class="fas fa-paper-plane"></i></button>
                          <?php endif ?>
                        </td>
                        <td class="giua">
                          <a href="?p=suadetai&id=<?php echo $row['IDDT'] ?>" class="btn btn-primary btn-sm" title="Sửa"><i class="far fa-edit"></i></a>
                            <?php if ($row['TRANGTHAI']=='Chờ gửi đề xuất' || $row['TRANGTHAI']=='Không nghiệm thu'){
                                echo "<button class='btn btn-danger btn-sm xoa' lydata='".$iddtt."' title='Xóa đề tài'><i class='fas fa-trash'></i></button>";
                            } ?>
                        </td>
                    </tr>
                <?php  $stt++; } ?>
                </tbody>
                <tfoot>
                    <tr style="background:#e9ecef;">
                        <th class="giua" style="width: 28px;">STT</th>
                        <th class="giua">Mã đề tài</th>
                        <th>Tên đề tài</th>
                        <th style="width: 200px;">Lĩnh vực khoa học</th>
                        <th style="width: 100px;">Ngày tạo</th>
                        <th style="width: 100px;">Trạng thái</th>
                        <th style="width: 80px;">Gửi đề xuất</th>
                        <th style="width: 110px;">Thao tác</th>
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
  <!-- Modal -->
  <div class="modal fade" id="modal-Gui-de-xuat" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Gửi đề xuất</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="alert alert-info" role="alert">
                    <strong>Bạn có chắc gửi đi đề xuất này?</strong><hr>
                    <b>Đề tài: </b><span id="tendexat"></span>
                  </div>
                  <div class="alert alert-warning" role="alert">
                    <strong>Lưu ý</strong><hr>
                    <b>Sau khi gửi đề xuất bạn sẽ <u>KHÔNG</u> có quyền chỉnh sửa bất kỳ thông tin gì liên quan đến đề tài.</b>
                  </div>
                  <input type="text" value="" id="iddx" hidden="hidden">
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  <button type="button" class="btn btn-primary" id="guididexuat">Gửi</button>
              </div>
          </div>
      </div>
  </div>

  <!-- Modal xóa đề xuất -->
  <div class="modal fade" id="modal-xoa-de-tai" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Xóa đề tài</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="alert alert-danger" role="alert">
                      <strong>Bạn có chắc xóa đề tài này?</strong><hr>
                      <b>Đề tài:</b> <span id="tendetai"></span>
                  </div>
              </div>
              <input type="text" hidden="hidden" name="" id="id-id-xoa" value="">
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                  <button type="button" class="btn btn-danger" id="xoa-de-tai">Xóa</button>
              </div>
          </div>
      </div>
  </div>
<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
<script src="../js/datatables.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#quanlydetai').addClass('active');
    $('.tieude').html('Quản lý đề tài');
    $('.guidexuat').click(function () {
        $('#iddx').val($(this).attr('lydata'));
        $('#tendexat').html($('#tendetai-'+$(this).attr('lydata')).text().trim());
        $('#modal-Gui-de-xuat').modal('show');
    });
    $('#guididexuat').click(function () {
        if(kiemtraketnoi()){
            // Ajax
            $.ajax({
                url: 'ajax/ajax_gui_de_xuat.php',
                type: 'POST',
                data: {
                    token: '<?php echo $token; ?>',
                    id: $('#iddx').val().trim()
                },
                beforeSend: function () {
                    canhbao('Đang xử lý dữ liệu');
                },
                success: function (data) {
                    $.notifyClose();
                    $('#trangthai-'+$('#iddx').val().trim()).html(data);
                },
                error: function () {
                   swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                }
            });
        }
        else
            swal('Ôi! Lỗi','Không có kết nối internet','error');
    });
    $('.xoa').on('click',function () {
        $('#tendetai').html($('#tendetai-'+$(this).attr('lydata')).text().trim());
        $('#id-id-xoa').val($(this).attr('lydata'));
        $('#modal-xoa-de-tai').modal('show');
    });
    $('#xoa-de-tai').on('click',function () {
        if(kiemtraketnoi()){
            // Ajax
            $.ajax({
                url: 'ajax/ajax_xoa_de_tai_binh_thuong.php',
                type: 'POST',
                data: {
                    token: '<?php echo $token; ?>',
                    id: $('#id-id-xoa').val().trim()
                },
                success: function (data) {
                    $.notifyClose();
                    var result = $.parseJSON(data);
                    if(result.trangthai == 1){
                        $('#modal-xoa-de-tai').modal('hide');
                        swal('Tốt','Xóa đề tài thành công','success');
                        setTimeout(function(){
                          location.href = "<?php echo $qlkh['HOSTADMIN']."?p=quanlydetai" ?>";
                        }, 1000);
                    }
                },
                error: function () {
                    swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                }
            });
        }
        else
            swal('Ôi! Lỗi','Không có kết nối internet','error');
    });
  });
  $(document).ready(function() {
    $('#example').DataTable({
        "scrollX": true
        });
} );
</script>