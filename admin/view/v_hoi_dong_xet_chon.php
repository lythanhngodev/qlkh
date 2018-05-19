<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
?>
<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>(<span class="text-danger">*</span>) Những trường bắt buộc phải điền</h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="font-weight-bold col-md-12">Thành viên BTC (Cố định)</label>
                                <table id="bangbtc" class="table table-bordered table-hover" style="background: #fff;">
                                    <tr style="background: #009688;color: #fff;">
                                        <th class="giua">Tên thành viên</th>
                                        <th class="an">IDTV</th>
                                        <th>Nhiệm vụ</th>
                                        <th>Ghi chú</th>
                                        <th class="giua" style="width: 50px;">Xóa</th>
                                    </tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($hoidong)){
                                        echo "
                    <tr>
                        <td>".$row['HOTEN']." ".$row['NGAYSINH']."</td>
                        <td class='an'>".$row['IDND']."</td>
                        <td><textarea class='form-control' rows='2'>".$row['NHIEMVU']."</textarea></td><td><textarea class='form-control' rows='2'>".$row['GHICHU']."</textarea></td>";
                        echo "<td class='giua' style='width:50px;'><button class='xoabtc'><i class='fas fa-times do'></i></button></td></tr>";
                                    }
                                    ?>
                                </table>
                                <button class="btn btn-primary" id="luutvdg"><i class="fas fa-save"></i>&ensp;Lưu danh sách</button>
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold col-md-12">Danh sách thành viên</label>
                                <select id="chontvbtc" class="form-control selectpicker" data-live-search="true">
                                    <option value="btc" selected>---- Chọn thành viên ---</option>
                                    <?php
                                    $thanhvienxetduyet = thanh_vien_xet_duyet();
                                    while ($row = mysqli_fetch_assoc($thanhvienxetduyet)){
                                        echo "<option value='".$row['IDND']."'>".$row['HOTEN']." ".$row['NGAYSINH']."</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#hoidongxetchon').addClass('active');
        $('.tieude').html('Quản lý hội đồng xét chọn đề tài');
        $('#bangbtc').on('click','.xoabtc',function(){
            $(this).parents('tr').remove();
        });
        // Xử lý phần thêm ban tổ chức
        $('#chontvbtc').change(function(){
            if($(this).val()!='btc'){
                // xét thành viên đã tồn tại hay chưa nếu chưa thì thêm vào bảng
                var table = $('#bangbtc');
                var data = [];
                var sodong=0;
                table.find('tr:not(:first)').each(function(i, row) {
                    var cols = [];
                    $(this).find('td:not(:last)').each(function(i, col) {
                        cols.push($(this).text());
                    });
                    sodong++;
                    data.push(cols);
                });
                var tontai = 0;
                for (var i = 0; i < data.length; i++) {
                    if ($(this).find('option:selected').val()==data[i][1]){tontai=1;break;};
                }
                if (tontai==0) {
                    if(sodong<5){
                        //them tac gia vao danh sach
                        var tr = "<tr><td>"+$('#chontvbtc option:selected').text()+"</td><td class='an'>"+$(this).find('option:selected').val()+"</td><td><textarea class='form-control' rows='2'></textarea></td></td><td><textarea class='form-control' rows='2'></textarea></td><td class='giua' style='width:50px;'><button class='xoabtc'><i class='fas fa-times do'></i></button></td></tr>";
                        $('#bangbtc').append(tr);
                    }else khongthanhcong('Chỉ được thêm 4 thành viên');
                }
                else
                    khongthanhcong('Bạn đã chọn thành viên này rồi!');
            }
        });
        $("#luutvdg").click(function(){
            // xử lý thành viên nghiệm thu
            var btc = [];
            $('#bangbtc').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                var dem = 1;
                $(this).find('td:not(:last)').each(function(i, col) {
                    if(dem == 3 || dem == 4){
                        cols.push($(this).find('textarea').val());
                    }
                    else{
                        cols.push($(this).text());
                    }
                    dem++;
                });
                btc.push(cols);
            });
            if(!(jQuery.isEmptyObject(btc))){
                if (kiemtraketnoi()) {
                    $.ajax({
                        url : "ajax/ajax_hoi_dong_xet_chon.php",
                        type : "post",
                        dataType:"text",
                        data : {
                            btc: btc
                        },
                        success : function (data){
                            var kq = $.parseJSON(data);
                            if(kq.trangthai==1)
                                swal('Tốt', 'Đã lưu thành viên BTC', 'success');
                            else
                                khongthanhcong('Đã xảy ra lỗi, vui lòng thử lại');
                        },
                        error: function () {
                         khongthanhcong('Đã xảy ra lỗi, vui lòng thử lại');
                        }
                    });
                }
                else
                    canhbao("Hiện không có kết nối internet");
            }
            else khongthanhcong('Chưa thành viên BTC nào được chọn');
        });
    });
</script>