<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
?>
<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Danh sách thành viên đã lưu trữ</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="bangthanhvien" class="table table-bordered table-hover">
                                <thead>
                                <tr style="background:#e9ecef;">
                                    <th class="giua">TT</th>
                                    <th class="giua">Họ & Tên</th>
                                    <th class="giua">Khoa / Phòng</th>
                                    <th class="giua">Mail</th>
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
                                        <td class="giua" lydata="<?php echo $row['IDND'] ?>">
                                            <button class='btn btn-primary btn-sm luutru' title='Xoá lưu trữ'><i class="fa fa-box"></i></button>
                                        </td>
                                    </tr>
                                <?php $stt++; }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>

<!-- Modal xóa chuyên mục -->
<div class="modal" id="modal-luu-tru" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xoá lưu trữ thành viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    <strong>Bạn có chắc xoá lưu trữ thành viên này?</strong><hr>
                    <b>Họ &amp; Tên:</b> <span id="luutruten"></span><br>
                    <b>Địa chỉ mail:</b> <span id="luutrumail"></span><br>
                    <b>Đơn vị công tác:</b> <span id="luutrudvct"></span>
                    <input type="text" id="luutruid" hidden="hidden">
                </div>
                <div class="alert alert-info" role="alert">
                    <p>Sau khi <b>XOÁ</b> lưu trữ tài khoản thành viên sẽ <b>ĐƯỢC</b> phép đăng nhập vào hệ thống.</p>
                </div>
            </div>
            <input type="text" hidden="hidden" name="" id="xoaid" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-success" id="xnluutru">Xoá lưu trữ</button>
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
        $('#thanhvienluutru').addClass('active');
        $('.tieude').html('Thành viên đã lưu trữ');
        $(document).on('click','.luutru',function(){
            $('#luutruten').text($(this).parent('td').parent('tr').find('td:nth-child(2)').text().trim());
            $('#luutrudvct').text($(this).parent('td').parent('tr').find('td:nth-child(3)').text().trim());
            $('#luutrumail').text($(this).parent('td').parent('tr').find('td:nth-child(4)').text().trim());
            $('#luutruid').val($(this).parent('td').attr('lydata'));
            $('#modal-luu-tru').modal('show');
        });
        $(document).on('click','#xnluutru',function(){
            $.ajax({
                url: 'ajax/ajax_xoa_luu_tru_thanh_vien.php',
                type: 'POST',
                data: {
                    id: $('#luutruid').val().trim()
                },
                success: function (data) {
                    var mang = $.parseJSON(data);
                    if(mang.trangthai==1){
                        swal('Tốt','Thành viên đã được xoá lưu trữ','success');
                        setTimeout(function () {
                            window.location.reload(true);
                        },1500);
                    }else
                        swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                },
                error: function () {
                    swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                }
            });
        });
    });

    $(document).ready(function() {
        $('#bangthanhvien').DataTable({
        "scrollY":"400px",
        "scrollCollapse": true,
        "paging": false
        });
    } );
</script>