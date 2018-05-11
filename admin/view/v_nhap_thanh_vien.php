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
                        <button class="btn btn-primary btn-sm" id="nhap"><i class="fas fa-plus"></i>&nbsp;&nbsp;Nhập từ file excel</button>
                        <br><br>
                        <input type="file" name="" id="filedl" hidden="hidden">
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
                                    <th class="giua">Loại tài khoản</th>
                                    <th class="giua" style="width: 100px">Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>

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
                return;
            }
            else{
                swal('Ôi! Lỗi','Vui lòng chọn định dạng Excel','error');
            }
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
        $('#bangthanhvien').DataTable();
    } );
</script>