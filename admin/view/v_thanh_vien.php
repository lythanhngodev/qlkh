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
                            <table id="bang-chuyen-muc" class="table table-bordered table-hover">
                                <thead>
                                <tr style="background:#e9ecef;">
                                    <th class="giua">TT</th>
                                    <th class="giua">Họ & Tên</th>
                                    <th class="giua">Khoa / Phòng</th>
                                    <th class="giua">Loại tài khoản</th>
                                    <th class="giua" style="width: 80px;">Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $stt = 1;
                                while ($row = mysqli_fetch_assoc($tv)){ ?>
                                    <tr>
                                        <th><?php echo $stt; ?></th>
                                        <td><?php echo $row['HOTEN'] ?></td>
                                        <td><?php 
                                        $_idnd = $row['IDND'];
                                        $_kbm = lay_khoa_phong($_idnd);
                                        while ($_kp = mysqli_fetch_assoc($_kbm)) {
                                            echo $_kp['TENKBM'];
                                        }
                                         ?></td>
                                        <td>
                                            <select class="form-control chonltk">
                                            <?php foreach ($ltk as $l){ ?>
                                            <option value="<?php echo $l['IDLTK'] ?>"><?php echo $l['TENCHITIETLTK'] ?></option>
                                            <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <a class='btn btn-primary btn-sm' onclick='sua(this)' title='Sửa' lydata='".$row['IDCM']."'><i class="fas fa-edit"></i></a>
                                            <button class='btn btn-danger btn-sm xoa' title='Xóa' onclick='xoa(this)' lydata='".$row['IDCM']."'><i class='fas fa-trash'></i></button>
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
        $('.tieude').html('Chuyên mục tin tức - sự kiện');
        $('#themchuyenmuc').on('click',function () {
            $('#modal-them-chuyen-muc').modal('show');
        });
        $('#themcm').on('click',function () {
            if ($('#tencm').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên chuyên mục'.trim());
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_chuyen_muc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tencm').val().trim(),
                        mota: $('#motacm').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1){
                            thanhcong('Thêm chuyên mục thành công');
                            $('#bang-chuyen-muc').DataTable().row.add([
                                $('#tencm').val().trim(),
                                $('#motacm').val().trim(),
                                "<a class='btn btn-primary btn-sm' onclick='sua(this)' title='Sửa' lydata='"+mang.ma+"'><i class='fas fa-edit'></i></a>" +
                                "&ensp;<button class='btn btn-danger btn-sm' title='Xóa' onclick='xoa(this)' lydata='"+mang.ma+"'><i class='fas fa-trash'></i></button>"
                            ]).draw(false);
                            $('#modal-them-chuyen-muc').find('input').val('');
                            $('#modal-them-chuyen-muc').find('textarea').val('');
                            $('#modal-them-chuyen-muc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // Sửa chuyên mục
        $('#suacm').on('click',function () {
            if ($('#suatencm').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên chuyên mục'.trim());
                return;
            }
            if(jQuery.isEmptyObject(obj)) return;
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_chuyen_muc.php',
                    type: 'POST',
                    data: {
                        ten: $('#suatencm').val().trim(),
                        mota: $('#suamotacm').val().trim(),
                        ma: $('#suaid').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1){
                            thanhcong('Sửa chuyên mục thành công');
                            $(obj).parent('td').parent('tr').find('td:nth-child(1)').text($('#suatencm').val().trim());
                            $(obj).parent('td').parent('tr').find('td:nth-child(2)').text($('#suamotacm').val().trim());
                            $('#modal-sua-chuyen-muc').find('input').val('');
                            $('#modal-sua-chuyen-muc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // Xóa chuyên mục
        $('#xoacm').on('click',function () {
            if(jQuery.isEmptyObject(obk)) return;
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_chuyen_muc.php',
                    type: 'POST',
                    data: {
                        ma: $('#xoaid').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1){
                            thanhcong('Xóa chuyên mục thành công');
                            location.reload();
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
    });
    function sua(t) {
        lydata=$(t).attr('lydata');
        $('#suatencm').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());
        $('#suamotacm').val($(t).parent('td').parent('tr').find('td:nth-child(2)').text().trim());
        $('#suaid').val(lydata);
        obj = t;
        $('#modal-sua-chuyen-muc').modal('show');
    }
    function xoa(t) {
        lydata=$(t).attr('lydata');
        $('#xoaten').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());
        $('#xoaid').val(lydata);
        obk = t;
        $('#modal-xoa-chuyen-muc').modal('show');
    }
    $(document).ready(function() {
        $('#bang-chuyen-muc').DataTable();
    } );
</script>