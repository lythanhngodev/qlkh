<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
?>
<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Nhập danh sách thành viên</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        <button class="btn btn-primary btn-sm" id="nhap"><i class="fas fa-plus"></i>&nbsp;&nbsp;Nhập từ file excel</button><br>
                        Nếu chưa có mẫu nhập Excel vui lòng <a href="../files/20180514075706-dangkynguoidung.xlsx"><b><i><u>tải xuống.</u></i></b></a>
                        <br><br>
                        <input type="file" name="" id="filedl" hidden="hidden" accept="application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="bangdanhsach">
                            <table id="bangthanhvien" class="table table-bordered table-hover">
                                <thead>
                                    <tr style="background:#e9ecef;">
                                    <th class="giua">TT</th>
                                    <th class="giua">Họ</th>
                                    <th class="giua">Tên</th>
                                    <th class="giua">Mail / Tên đăng nhập</th>
                                    <th class="giua">Loại tài khoản</th>
                                </tr>
                                </thead>
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

<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
<script src="../js/datatables.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    var obj;
    var obk;
    $(document).ready(function(){
        $('#nhapthanhvien').addClass('active');
        $('.tieude').html('Nhập danh sách thành viên');
        $('#nhap').click(function(){
            $('#filedl').click();
        });
        $('#filedl').change(function(){
            var file_data = $('#filedl').prop('files')[0];
            var type = file_data.type;
            var match = ["application/vnd.ms-excel", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"];
            if (type==match[0] || type==match[1]) {
                var form_data = new FormData();
                //thêm files vào trong form data
                form_data.append('file', file_data);
                if (kiemtraketnoi()){
                    $.ajax({
                        url: 'ajax/ajax_import_file_thanh_vien.php', // gửi đến file upload.php
                        dataType: 'text',
                        cache: false,
                        contentType: false,
                        processData: false,
                        type: 'post',
                        data: form_data,
                        beforeSend: function () {
                            swal("Đợi đã!", "Vui lòng chờ đợi cho đến khi hoàn tất", "info");
                        },
                        success: function(data){
                            swal("Tốt!", "Tải dữ liệu hoàn tất", "success");
                            $('#bangdanhsach').html(data);
                        },
                        error: function () {
                            $.notifyClose();
                            khongthanhcong('Không thể tải file');
                        }
                    });
                } else
                    khongthanhcong("Hiện không có kết nối internet");
            }
            else{
                swal('Ôi! Lỗi','Vui lòng chọn định dạng Excel','error');
            }
        });
        $('#luuthaydoi').click(function(){
            var btv = [];
            $('#bangthanhvien').find('tr:not(:first)').each(function(i, row) {
              var cols = [];
              $(this).find('td:not(:first) input, select').each(function(i, col) {
                  cols.push($(this).val().trim());
              });
              btv.push(cols);
            });
            var conf = confirm('Bạn có chắc chắc lưu tất cả các thay đổi?');
            if (!conf) {
                return;
            }
            if (kiemtraketnoi()) {
                $.ajax({
                    url : "ajax/ajax_nap_thanh_vien.php",
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
                            swal('Tốt','Nhập thành công ('+kq.so+' thành viên)','success');
                        }
                        else
                            swal('Ôi! Lỗi','Các thành viên này đã tồn tại, vui lòng thử lại','error');
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
        $('#bangthanhvien').DataTable();
    } );
</script>