<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
?>
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
                        <a href="?p=nhapthanhvien" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>&nbsp;&nbsp;Nhập thành viên từ file excel</a>
                        <br><br>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="bangthanhvien" class="table table-bordered table-hover">
                                <thead>
                                <tr style="background:#e9ecef;">
                                    <th class="giua">TT</th>
                                    <th class="giua">Họ & Tên</th>
                                    <th class="giua">Khoa / Phòng</th>
                                    <th class="giua">Mail</th>
                                    <th class="giua">Loại tài khoản</th>
                                    <th class="giua" style="width: 100px">Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $stt = 1;
                                while ($row = mysqli_fetch_assoc($tv)){ ?>
                                    <tr>
                                        <th class="giua"><?php echo $stt; ?></th>
                                        <td><?php echo $row['HOTEN'] ?></td>
                                        <td><?php 
                                        $_idnd = $row['IDND'];
                                        $_kbm = lay_khoa_phong($_idnd);
                                        while ($_kp = mysqli_fetch_assoc($_kbm)) {
                                            echo $_kp['TENKBM'];
                                        }
                                         ?></td>
                                        <td><?php echo $row['MAIL']; ?></td>
                                        <td>
                                            <select class="form-control chonltk" lydata="<?php echo $_idnd; ?>">
                                            <?php foreach ($ltk as $l){ ?>
                                            <option value="<?php echo $l['IDLTK'] ?>" <?php if($l['IDLTK']==$row['IDLTK']) echo "selected"; ?>><?php echo $l['TENCHITIETLTK'] ?></option>
                                            <?php } ?>
                                            </select>
                                        </td>
                                        <td class="giua">
                                            <a href="?p=suathanhvien&id=<?php echo $row['IDND'] ?>" target="_blank" rel="noopener" class='btn btn-primary btn-sm' title='Sửa'><i class="far fa-edit"></i></a>
                                            <button class='btn btn-danger btn-sm xoa' title='Xóa'><i class='fas fa-trash'></i></button>
                                        </td>
                                    </tr>
                                <?php $stt++; }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                  <div>
                    <button type="button" class="btn btn-primary" id="luuthaydoi"><i class="fas fa-save"></i>&nbsp;&nbsp;Lưu thay đổi</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>

<!-- Modal xóa chuyên mục -->
<div class="modal fade" id="modal-xoa-chuyen-muc" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa chuyên mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa chuyên mục này?</strong><hr>
                    <b>Chuyên mục:</b> <span id="xoaten"></span>
                </div>
            </div>
            <input type="text" hidden="hidden" name="" id="xoaid" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="xoacm">Xóa</button>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
<script src="../js/datatables.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    var obj;
    var obk;
    $(document).ready(function(){
        $('#thanhvien').addClass('active');
        $('.tieude').html('Thành viên');
        $('#themchuyenmuc').on('click',function () {
            $('#modal-them-chuyen-muc').modal('show');
        });
        $('#luuthaydoi').click(function(){
            var btv = [];
            $('#bangthanhvien').find('tr:not(:first)').each(function(i, row) {
              var cols = [];
              $(this).find('td:not(:last) select').each(function(i, col) {
                  cols.push($(this).attr('lydata'));
                  cols.push($(this).val());
              });
              btv.push(cols);
            });
            var conf = confirm('Bạn có chắc chắc lưu tất cả các thay đổi?');
            if (!conf) {
                return;
            }
            if (kiemtraketnoi()) {
                $.ajax({
                    url : "ajax/ajax_thay_doi_quyen_truy_cap.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        btv: btv
                    },
                    beforeSend: function(){
                        swal('Đợi đã','Vui lòng chờ cho đến khi quá trình hoàn tất','info');
                    },
                    success : function (data){
                        var kq = $.parseJSON(data);
                        if(kq.trangthai==1){
                            swal('Tốt','Thay đổi thành công','success');
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
                swal('Ôi! Lỗi','Không có kết nối internet','error');
        });
    });

    $(document).ready(function() {
        $('#bangthanhvien').DataTable({
        "scrollY":"350px",
        "scrollCollapse": true,
        "paging": false
        });
    } );
</script>