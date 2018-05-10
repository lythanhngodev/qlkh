<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<div class="cach background-container">
    <div class="row">
        <div class="col-md-3 col-sm-4">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Lưu ý!</strong> Chọn 1 trong các chức năng thống kê dưới đây để xem chi tiết thống kê.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card line-chart-example">
                        <div class="card-header giua">
                            <h4>NGHIÊN CỨU KHOA HỌC</h4>
                        </div>
                        <div class="card-body">
                            <div id="ls-nckh" class="list-group">
                              <button class="list-group-item" id="nckh-tat-ca-da-nghiem-thu">Tất cả đề tài đã nghiệm thu</button>
                              <button class="list-group-item" id="nckh-thoi-gian-nghiem-thu">Đề tài nghiệm thu theo thời gian</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card line-chart-example">
                        <div class="card-header giua">
                            <h4>BÀI BÁO KHOA HỌC</h4>
                        </div>
                        <div class="card-body">
                            <div id="ls-nckh" class="list-group">
                              <button class="list-group-item" id="bkh-tat-ca-da-bao-khoa-hoc">Tất cả bài báo đã công bố</button>
                              <button class="list-group-item" id="bkh-thoi-gian-bao-khoa-hoc">Bài báo đã công bố theo thời gian</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-9 col-sm-8">
            <div id="tuychon">
                
            </div>
            <div id="noidungthongke"></div>
        </div>
    </div>
</div>
<div class="cach"></div>
<script>
$(document).ready(()=>{
    $('#thongke').addClass('active');
    $('.tieude').html('Thống kê');
    $('.list-group-item').click(function() {
        $('.list-group-item').removeClass('active');
        $(this).addClass('active');
        var id = $(this).attr('id');
        if (id=="nckh-tat-ca-da-nghiem-thu") {
            $('#tuychon').html('');
            $('#noidungthongke').html('');
            if (kiemtraketnoi()){
                $.ajax({
                    url: 'export/export_tat_ca_de_tai_nghiem_thu.php',
                    dataType: 'text',
                    type: 'post',
                    data: {_token: '<?php echo $token; ?>'},
                    beforeSend: function () {$('#noidungthongke').html('<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div>'); },
                    success: function(data){
                        $.notifyClose();
                        swal('Tốt','Tải dữ liệu thành công','success');
                        $('#noidungthongke').html(data);
                    },
                    error: function () {
                        $.notifyClose();
                       swal('Ôi! Lỗi','Vui lòng thử lại sau','error');
                    }
                });
            } else
                swal('Ôi! Lỗi','Không có kết nối internet','error');
        }
        else if (id=='nckh-thoi-gian-nghiem-thu') {
            $('#tuychon').html('');
            $('#noidungthongke').html('');
            $('#tuychon').html('<div class="card"><div class="card-header"><h4>Chọn thời gian</h4></div><div class="card-body"><div class="row"><div class="col-md-4"><div class="form-group"><label for="tags">Tháng năm bắt đầu</label><input type="month" class="form-control" id="batdau"></div>   </div><div class="col-md-4"><div class="form-group"><label for="tags">Tháng năm kết thúc</label><input type="month" class="form-control" id="ketthuc"></div></div></div><button class="btn btn-primary" id="nckh-tg-xemdulieu">Xem thống kê</button></div></div>');
        }
        else if (id=='bkh-tat-ca-da-bao-khoa-hoc'){
            if (kiemtraketnoi()){
                $.ajax({
                    url: 'export/export_tat_ca_bai_bao_khoa_hoc.php',
                    dataType: 'text',
                    type: 'post',
                    data: {_token: '<?php echo $token; ?>'},
                    beforeSend: function () {$('#noidungthongke').html('<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div>'); },
                    success: function(data){
                        $.notifyClose();
                        swal('Tốt','Tải dữ liệu thành công','success');
                        $('#noidungthongke').html(data);
                    },
                    error: function () {
                        $.notifyClose();
                       swal('Ôi! Lỗi','Vui lòng thử lại sau','error');
                    }
                });
            } else
                swal('Ôi! Lỗi','Không có kết nối internet','error');
        }
    });
    $(document).on('click','#nckh-tg-xemdulieu',function(){
        var bd = $('#batdau').val().trim();
        var kt = $('#ketthuc').val().trim();
        if(!bd || !kt){
            swal('Ôi! Lỗi','Vui lòng nhập thông ngày tháng','error');
            return;
        }
        var nbd = new Date(bd);
        var nkt = new Date(kt);
        if(nbd > nkt){
            swal('Ôi! Lỗi','Tháng năm bắt đầu phải nhỏ hơn tháng năm kết thúc','error');
            return;
        }
        if (kiemtraketnoi()){
            $.ajax({
                url: 'export/export_tat_ca_de_tai_nghiem_thu_theo_thoi_gian.php',
                dataType: 'text',
                type: 'post',
                data: {_token: '<?php echo $token; ?>',bd:bd,kt,kt},
                beforeSend: function () {$('#noidungthongke').html('<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div>'); },
                success: function(data){
                    $.notifyClose();
                    swal('Tốt','Tải dữ liệu thành công','success');
                    $('#noidungthongke').html(data);
                },
                error: function () {
                    $.notifyClose();
                   swal('Ôi! Lỗi','Vui lòng thử lại sau','error');
                }
            });
        } else
            swal('Ôi! Lỗi','Không có kết nối internet','error');
    });
});
</script>