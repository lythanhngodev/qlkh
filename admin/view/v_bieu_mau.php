<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 16/04/2018
 * Time: 11:22 PM
 */
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
?>
<style>
    table td:first-child {
        text-align: center;
        font-weight: bold;
    }</style>
<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Danh sách biểu mẫu</h4>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary btn-sm thembm"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="bang-bieu-mau" class="table table-bordered table-hover">
                                <thead>
                                    <tr style="background:#e9ecef;">
                                        <th class="giua">Mã số</th>
                                        <th class="giua">Tên biểu mẫu</th>
                                        <th class="giua" style="width: 80px;">Tải về</th>
                                        <th class="giua" style="width: 50px;">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($bm)){
                                    echo "<tr>";
                                    echo "<th class='giua'>".$row['MABM']."</th>";
                                    echo "<td>".$row['TENBM']."</td>";
                                    if($row['FILE']!=''){
                                        echo "<td class='giua'><a href='".$qlkh['HOSTGOC']."files/".$row['FILE']."'>Tải về</a></td>";
                                    }
                                    else{
                                        echo "<td class='giua'>Không có file</td>";
                                    }
                                    echo "<td>
                            <button class='btn btn-danger btn-sm' onclick='xoabm(this,".$row['IDBM'].")' title='Xóa' lydata='".$row['FILE']."'><i class='fas fa-trash'></i></button></td>";
                                    echo "</tr>";
                                }
                                ?>
                                <tfoot>
                                    <tr style="background:#e9ecef;">
                                        <th class="giua">Mã số</th>
                                        <th class="giua">Tên biểu mẫu</th>
                                        <th class="giua">Tải về</th>
                                        <th class="giua">Thao tác</th>
                                    </tr>
                                </tfoot>
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

<!-- Modal -->
<div class="modal fade" id="modal-them-bieu-mau" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm biểu mẫu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Mã biểu mẫu</label>
                    <input type="text" class="form-control" id="mabm" />
                </div>
                <div class="form-group">
                    <label for="tags">Tên biểu mẫu <span class="text-danger">(*)</span></label>
                    <input type="text" class="form-control" id="tenbm" />
                </div>
                <div class="form-group">
                    <label for="tags">File biểu mẫu <span class="text-danger">(*)</span></label>
                    <input type="file" class="form-control" id="filebm" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="luubm">Lưu</button>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
<script src="../js/datatables.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#bieumau').addClass('active');
        $('.tieude').html('Biểu mẫu');
        $('.thembm').on('click',function () {
            $('#modal-them-bieu-mau').modal('show');
        });
        $('#luubm').on('click',function () {
            // Xét mã
            var ma = $('#mabm').val().trim();
            // Xét tên
            var ten = $('#tenbm').val().trim();
            if(ten==''){
                khongthanhcong('Vui lòng nhập tên biểu mẫu');
                return;
            }
            // Xét file
            var file_data = $('#filebm').prop('files')[0];
            if(jQuery.isEmptyObject(file_data)){
                alert('chọn file');
                return;
            }
            var type = file_data.type;
            var match = ["application/msword","application/pdf","application/vnd.openxmlformats-officedocument.wordprocessingml.document"];
            if(type == match[0] || type == match[1] || type == match[2]){
                var form_data = new FormData();
                form_data.append('ma',ma);
                form_data.append('ten',ten);
                form_data.append('file',file_data);
                //sử dụng ajax post
                if (kiemtraketnoi()){
                    $.ajax({
                        url: 'ajax/ajax_them_bieu_mau.php', // gửi đến file
                        dataType: 'text',
                        cache: false,
                        contentType: false,
                        processData: false,
                        type: 'post',
                        data: form_data,
                        beforeSend: function () {
                            canhbao('Đang xử lý dữ liệu ...');
                        },
                        success: function(data){
                            $.notifyClose();
                            var mang = JSON.parse(data);
                            if(mang.trangthai==1){
                                thanhcong('Đã thêm biểu mẫu');
                                $('#bang-bieu-mau').DataTable().row.add( [
                                        ma,
                                        ten,
                                    "<a href='<?php echo $qlkh['HOSTGOC']."files/" ?>"+mang.tenfile+"'>Tải về</a>",
                                    "<button class='btn btn-danger btn-sm' onclick='xoabm(this,"+mang.ma+")' title='Xóa' lydata='"+mang.tenfile+"' ><i class='fas fa-trash'></i></button>"
                                ] ).draw(false);

                                $('#mabm').val('');
                                $('#tenbm').val('');
                                $('#filebm').val('');
                                $('#modal-them-bieu-mau').modal('hide');
                            }
                            else if (mang.trangthai == 0)
                                khongthanhcong(mang.thongbao);
                        },
                        error: function () {
                            $.notifyClose();
                            khongthanhcong('Không thể thêm biểu mẫu');
                        }
                    });

                } else
                    khongthanhcong("Hiện không có kết nối internet");
            }
            else canhbao("Vui lòng chọn file hình ảnh, pdf hoặc word");

        });
    });
    function xoabm(th,ma){
        //sử dụng ajax post
        var dialog = confirm('Bạn cá chắc xóa biểu mẫu này không?');
        if(!dialog) return;
        if (kiemtraketnoi()){
            $.ajax({
                url: 'ajax/ajax_xoa_bieu_mau.php', // gửi đến file
                dataType: 'text',
                type: 'post',
                data: {
                    ma: ma,
                    file: $(th).attr('lydata')
                },
                beforeSend: function () {
                    canhbao('Đang xử lý dữ liệu ...');
                },
                success: function(data){
                    $.notifyClose();
                    var mang = JSON.parse(data);
                    if(mang.trangthai==1){
                        thanhcong('Đã xóa biểu mẫu');
                        $(th).parent().parent('tr').remove();
                    }
                    else if (mang.trangthai == 0)
                        khongthanhcong(mang.thongbao);
                },
                error: function () {
                    $.notifyClose();
                    khongthanhcong('Không thể thêm biểu mẫu');
                }
            });

        } else
            khongthanhcong("Hiện không có kết nối internet");
    };
    $(document).ready(function() {
        $('#bang-bieu-mau').DataTable({
        "scrollY":"300px",
        "scrollCollapse": true,
        "paging": false
        });
    } );

</script>
