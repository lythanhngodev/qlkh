<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<style type="text/css">
  .btn{
    margin-bottom: 1rem;
  }
</style>
<div class="row">
    <div class="col-md-3 col-sm-4">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Lưu ý!</strong> Chọn 1 trong các chức năng để thao tác.
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
                        <h4>HỒ SƠ XÉT DUYỆT</h4>
                    </div>
                    <div class="card-body">
                        <div id="ls-nckh" class="list-group">
                          <button class="list-group-item" id="phieudanhgiadecuong">Phiếu đánh giá đề cương</button>
                          <button class="list-group-item" id="danhsachhoidongxetchon">Danh sách HĐ xét chọn</button>
                          <button class="list-group-item" id="kehoachxetchon">Kế hoạch xét duyệt đề tài</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card line-chart-example">
                    <div class="card-header giua">
                        <h4>HỒ SƠ NGHIỆM THU</h4>
                    </div>
                    <div class="card-body">
                        <div id="ls-nckh" class="list-group">
                          <button class="list-group-item" id="danhsachhoidongnghiemthu">Danh sách HĐ nghiệm thu</button>
                          <button class="list-group-item" id="kehoachnghiemthu">Kế hoạch nghiệm thu đề tài</button>
                          <button class="list-group-item" id="phieudanhgianghiemthu">Phiếu đánh giá nghiệm thu</button>
                          <button class="list-group-item" id="">Tổng hợpHĐ đánh giá NT</button>
                          <button class="list-group-item" id="">Bảng kê chi tiền tham dự (NT)</button>
                          <button class="list-group-item" id="phieugiaonhansanpham">Phiếu giao nhận sản phẩm (NT)</button>
                          <button class="list-group-item" id="phieugiaonhansanphamthietbi">Phiếu giao nhận sản phẩm (NT - Thiết bị)</button>
                          <button class="list-group-item" id="phieuxacnhantrienkhaiungdung">Phiếu xác nhận triển khai ứng dụng</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-9 col-sm-8">
        <div id="tuychon"></div>
        <div id="noidung"></div>
    </div>
</div>
  <div class="cach"></div>

<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
<script src="../js/datatables.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#quanlyhoso').addClass('active');
    $('.tieude').html('Quản lý hồ sơ');
    $('.list-group-item').click(function() {
        $('.list-group-item').removeClass('active');
        $('#tuychon').html('');
        $('#noidung').html('');
        $(this).addClass('active');
        var id = $(this).attr('id');
        switch (id){
            case "phieudanhgiadecuong":
                laydulieu(id);
                break;
            case "kehoachxetchon":
                laydulieu(id);
                break;
            case "danhsachhoidongnghiemthu":
                laydulieu(id);
                break;
            case "danhsachhoidongxetchon":
                laydulieu(id);
                break;
            case "phieudanhgianghiemthu":
                laydulieu(id);
                break;
            case "kehoachnghiemthu":
                laydulieu(id);
                break;
            case "phieugiaonhansanpham":
                laydulieu(id);
                break;
            case "phieugiaonhansanphamthietbi":
                laydulieu(id);
                break;
            case "phieuxacnhantrienkhaiungdung":
                laydulieu(id);
                break;
        }
    });
  });
function laydulieu(id){
    if (kiemtraketnoi()){
        $.ajax({
            url: 'word/_'+id+'.php',
            dataType: 'text',
            type: 'post',
            beforeSend: function () {$('#noidung').html('<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div>'); },
            success: function(data){
                $.notifyClose();
                thanhcong('Tải dữ liệu thành công');
                $('#noidung').html(data);
            },
            error: function () {
                $.notifyClose();
                $('#tuychon').html('');
                $('#noidung').html('');
               swal('Ôi! Lỗi','Vui lòng thử lại sau','error');
            }
        });
    } else
        swal('Ôi! Lỗi','Không có kết nối internet','error');
}
</script>
