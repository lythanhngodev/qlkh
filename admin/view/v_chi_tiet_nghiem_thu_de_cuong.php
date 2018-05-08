<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>(<span class="text-danger">*</span>) Những trường bắt buộc phải điền</h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-thong-tin-chung" role="tab" aria-controls="nav-home" aria-selected="true">Thông tin chung</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-du-kien-tien-do" aria-selected="false">Dự kiến tiến độ</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-to-chuc-tham-gia" aria-selected="false">Tổ chức tham gia</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-thanh-vien" role="tab" aria-selected="false">Thành viên</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-kinh-phi" aria-selected="false">Kinh phí</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-tai-lieu-dinh-kem" aria-selected="false">TL đính kèm</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-tai-lieu-nghiem-thu" aria-selected="false">Đánh giá nghiệm thu</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- THÔNG TIN ChUNG -->
                            <div class="tab-pane show active" id="nav-thong-tin-chung" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="col-md-12">
                                    <br>
                                    <table class="table table-hover table-bordered" style="background: #fff;">
                                        <tr>
                                            <th colspan="2" class="giua" style="background: #009688;color: #fff;">THÔNG TIN CHUNG</th>
                                        </tr>
                                        <tr>
                                            <th>1. Tên đề tài</th>
                                            <td style="text-transform: uppercase;"><?php echo $detai['TENDETAI']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Cấp đề tài</th>
                                            <td>
                                                <?php echo $detai['CAPDETAI']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">2. Chủ nhiệm đề tài</th>
                                        </tr>
                                        <tr>
                                            <th>Họ &amp; Tên</th>
                                            <td><?php echo $chunhiem['HOTEN']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Trình độ chuyên môn</th>
                                            <td><?php echo $chunhiem['TRINHDOCHUYENMON']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Chức danh giảng viên</th>
                                            <td><?php echo $chunhiem['CHUCDANHGIANGVIEN']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Đơn vị công tác</th>
                                            <td><?php echo don_vi_cong_tac($chunhiem['IDND']); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Điện thoại</th>
                                            <td><?php echo $chunhiem['DIENTHOAIDD']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo $chunhiem['MAIL']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>3. Cơ quan chủ trì đề tài</th>
                                            <td>Trường Đại học Sư phạm Kỹ thuật Vĩnh Long</td>
                                        </tr>
                                        <tr>
                                            <th>4. Mục tiêu đề tài</th>
                                            <td><?php echo $detai['MUCTIEU']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>5. Dự kiến kết quả và địa chỉ ứng dụng</th>
                                            <td><?php echo $detai['KETQUA']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>6. Loại hình nghiên cứu</th>
                                            <td>
                                                <?php foreach ($manglh as $value) { echo " - ".$value."<br>"; } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>7. Lĩnh vực khoa học</th>
                                            <td>
                                                <?php foreach ($mangkh as $value) { echo " - ".$value."<br>"; } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">8. Thời gian thực hiện</th>
                                        </tr>
                                        <tr>
                                            <th>Tổng số tháng</th>
                                            <td><?php echo $detai['THANGTHUCHIEN']; ?> tháng</td>
                                        </tr>
                                        <tr>
                                            <th>Tháng năm bắt đầu</th>
                                            <td>Tháng <?php echo date('m - Y', strtotime($detai['THANGNAMBD'])); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tháng năm kết thúc</th>
                                            <td>Tháng <?php echo date('m - Y', strtotime($detai['THANGNAMKT'])); ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">9. Dự kiến kinh phí thực hiện</th>
                                        </tr>
                                        <tr>
                                            <th>Chi phí dự kiến từ ngân sách</th>
                                            <td><?php echo $detai['KINHPHINGANSACH']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Kinh phí dự kiến từ nguồn khác</th>
                                            <td><?php echo $detai['KINHPHINGUONKHAC']; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="giua" style="background: #009688;color: #fff;">ĐỀ CƯƠNG ĐỀ TÀI</th>
                                        </tr>
                                        <tr>
                                            <th>10. Thuộc chương trình</th>
                                            <td><?php echo $detai['THUOCCHUONGTRINH']; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">11. Tình hình nghiên cứu trong &amp; nước</th>
                                        </tr>
                                        <tr>
                                            <th>Tổng quan tình hình nghiên cứu thuộc lĩnh vực của đề tài</th>
                                            <td><?php echo $detai['TINHHINHNGHIENCUU']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Liệt kê danh mục các công trình nghiên cứu có liên quan</th>
                                            <td><?php echo $detai['NGHIENCUULIENQUAN']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Phân tích sự cần thiết nghiên cứu</th>
                                            <td><?php echo $detai['SUCANTHIET']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Phân tích về tính mới, tính sáng tạo của đề tài</th>
                                            <td><?php echo $detai['MOISANGTAO']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>12. Cách tiếp cận, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng</th>
                                            <td><?php echo $detai['PHUONGPHAPKYTHUAT']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>13. Nội dung nghiên cứu</th>
                                            <td><?php echo $detai['NOIDUNG']; ?></td>
                                        </tr>
                                    </table>
                                    <br>
                                </div>
                            </div>
                            <!-- THÀNH VIÊN -->
                            <div class="tab-pane" id="nav-thanh-vien" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <div class="col-md-12"><label for="category" class="font-weight-bold">Các thành viên thực hiện đề tài</label></div>
                                            <hr>
                                            <table id="bangthanhvien" class="table table-bordered table-hover" style="background: #fff;">
                                                <tr style="background: #009688;color: #fff;">
                                                    <th style="width: 200px;" class="giua">Họ &amp; Tên</th>
                                                    <th style="width: 350px;" class="giua">Trình độ chuyên môn, đơn vị công tác, thông tin liên hệ</th>
                                                    <th style="width: 350px;" class="giua">Công việc được giao</th>
                                                </tr>
                                                <?php 
                                                    $stt = 1;
                                                    while ($row = mysqli_fetch_assoc($thanhvien)) { 
                                                        if($stt==1){
                                                            echo "<tr>";
                                                            echo "<td>1 - Chủ nhiệm đề tài <br><b>".$row['HOTEN']."</b></td>";
                                                            echo "<td>- ".$row['TRINHDOCHUYENMON']."<br>- ".$row['DONVICONGTAC']."<br>- ".$row['DIENTHOAIDD']."</td>";
                                                            echo "<td>".$row['CONGVIEC']."</td>";
                                                            echo "<tr><td colspan='4'>Thành viên tham gia:</td></tr>";
                                                        }else{
                                                            echo "<tr>";
                                                            echo "<th>".$stt." - ".$row['HOTEN']."</th>";
                                                            echo "<td>- ".$row['TRINHDOCHUYENMON']."<br>- ".$row['DONVICONGTAC']."<br>- ".$row['DIENTHOAIDD']."</td>";
                                                            echo "<td>".$row['CONGVIEC']."</td>";
                                                        } ?>
                                                        
                                                 <?php $stt++; } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>

                            <!-- KINH PHÍ -->
                            <div class="tab-pane" id="nav-kinh-phi" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <p class="col-md-12"><strong>Dự kiến kinh phí thực hiện và các khoản chi</strong></p>
                                            <hr>
                                            <table id="bangkinhphi" class="table table-bordered table-hover" style="background: #fff;">
                                                <tr style="background: #009688;color: #fff;">
                                                    <th rowspan="2" class="giua" style="width: 90px;">TT</th>
                                                    <th rowspan="2" class="giua">Các khoản chi</th>
                                                    <th rowspan="2" class="giua">Từ nguồn NSNN</th>
                                                    <th colspan="2" class="giua">Nguồn khác</th>
                                                    <th rowspan="2" class="giua">Cộng</th>
                                                </tr>
                                                <tr style="background: #009688;color: #fff;">
                                                    <th class="giua">Tự có</th>
                                                    <th class="giua">Liên kết</th>
                                                </tr>
                                                <?php
                                                $stt = 1;$nsnn=0;$tuco=0;$lienket=0; $tong=0;
                                                while ($row = mysqli_fetch_assoc($kinhphi)) {
                                                    $nsnn+=intval($row['NGUONNSNN']);
                                                    $tuco+=intval($row['NGUONTUCO']);
                                                    $lienket+=intval($row['NGUONLIENKET']);
                                                    $congdong=$nsnn+$tuco+$lienket;
                                                    echo "<tr>";
                                                    echo "<td>".$stt."</td>";
                                                    echo "<td>".$row['KHOANCHI']."</td>";
                                                    echo "<td class='giua'>".$row['NGUONNSNN']."</td>";
                                                    echo "<td class='giua'>".$row['NGUONTUCO']."</td>";
                                                    echo "<td class='giua'>".$row['NGUONLIENKET']."</td>";
                                                    echo "<th class='giua'>".$congdong."</th>";
                                                    echo "</tr>";
                                                    $tong+=$congdong;
                                                    $stt++;
                                                }
                                                ?>
                                                <tr>
                                                    <th colspan="2" class="giua">Tổng cộng:</th>
                                                    <th class="giua"><?php echo $nsnn ?></th>
                                                    <th class="giua"><?php echo $tuco ?></th>
                                                    <th class="giua"><?php echo $lienket ?></th>
                                                    <th class="giua"><?php echo $tong; ?></th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <!-- CÁC TỔ CHỨC -->
                            <div class="tab-pane" id="nav-to-chuc-tham-gia" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <p class="col-md-12"><strong>Bảng các tổ chức tham gia (nếu có)</strong></p>
                                            <hr>
                                            <table id="bangtochuc" class="table table-bordered table-hover" style="background: #fff;">
                                                <tr style="background: #009688;color: #fff;">
                                                    <th class="giua" style="width: 90px;">TT</th>
                                                    <th class="giua">Tên và địa chỉ của tổ chức</th>
                                                    <th style="width: 450px;" class="giua">Nội dung tham gia</th>
                                                    <th style="width: 250px;" class="giua">Dự kiến kinh phí</th>
                                                </tr>
                                                <?php
                                                $stt = 1;
                                                while ($row = mysqli_fetch_assoc($tochuc)) {
                                                    echo "<tr>";
                                                    echo "<td>".$stt."</td>";
                                                    echo "<td>".$row['THONGTINTC']."</td>";
                                                    echo "<td>".$row['NOIDUNGTHAMGIA']."</td>";
                                                    echo "<td>".$row['KINHPHI']."</td>";
                                                    echo "</tr>";
                                                    $stt++;
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="tab-pane" id="nav-thoi-gian-thuc-hien" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="category" class="font-weight-bold" >Tổng tháng thực hiện (<span class="text-danger">*</span>)</label>
                                            <input id="thangthuchiendetai" type="number" min="1" max="120" class="form-control giua" value="<?php echo $detai['THANGTHUCHIEN']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="category" class="font-weight-bold" >Tháng/Năm bắt đầu (<span class="text-danger">*</span>)</label>
                                            <input class="form-control" type="month" name="" id="thangnambatdaudetai" value="<?php echo $detai['THANGNAMBD']; ?>">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="category" class="font-weight-bold" >Tháng/Năm kết thúc (<span class="text-danger">*</span>)</label>
                                            <input class="form-control" type="month" name="" id="thangnamketthucdetai" value="<?php echo $detai['THANGNAMKT']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <br>
                            </div>
                            <div class="tab-pane" id="nav-du-kien-tien-do" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <p class="col-md-12"><strong>Bảng dự kiến tiến độ thực hiện</strong></p>
                                            <hr>
                                            <table id="bangtiendo" class="table table-bordered table-hover" style="background: #fff;">
                                                <tr style="background: #009688;color: #fff;">
                                                    <th style="width: 90px;" class="giua">TT</th>
                                                    <th class="giua">Công việc</th>
                                                    <th class="giua">Sản phẩm đạt được</th>
                                                    <th style="width: 150px;" class="giua">Thời gian bắt đầu</th>
                                                    <th style="width: 150px;" class="giua">Thời gian kết thúc</th>
                                                </tr>
                                                <?php
                                                $stt = 1;
                                                while ($row = mysqli_fetch_assoc($tiendo)) {
                                                    echo "<tr>";
                                                    echo "<td>".$stt."</td>";
                                                    echo "<td>".$row['CONGVIEC']."</td>";
                                                    echo "<td>".$row['SANPHAM']."</td>";
                                                    echo "<td class='giua'>".$row['THOIGIANBD']."</td>";
                                                    echo "<td class='giua'>".$row['THOIGIANKT']."</td>";
                                                    echo "</tr>";
                                                    $stt++;
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="tab-pane" id="nav-tai-lieu-dinh-kem" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12 giua h">
                                    <?php $file = $detai['FILE'];
                                        if (!empty($file)){
                                            echo "<a href='".$qlkh['HOSTGOC']."files/".$detai['FILE']."' class='btn btn-success btn-lg'><i class='fas fa-download faa-float animated' ></i>&ensp;Tải về tài liệu đính kèm</a>";
                                        }
                                        else
                                            echo "Không có tài liệu tải xuống.";
                                    ?>
                                </div>
                                <br>
                            </div>
                            <!-- Tài liệu nghiệm thu -->
                            <div class="tab-pane" id="nav-tai-lieu-nghiem-thu" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="font-weight-bold col-md-12">Ý kiến về bản nghiệm thu</label>
                                            <textarea class="form-control" id="ykien"><?php echo $detai['YKIEN'] ?></textarea><br>
                                            <button class="btn btn-primary" id="luuykien"><i class="fas fa-save"></i>&ensp;Lưu ý kiến</button>
                                        </div>
                                        <div id="quanlyupfile" class="col-md-6">
                                            <label class="font-weight-bold col-md-12">File nghiệm thu</label>
                                            <?php if($detai['NTFILE']!=''){
                                                echo "<a id='xoafileup' class='btn btn-danger btn-lg' title='Xóa file vừa upload' onclick='xoafiledatai()'><i class='far fa-times-circle  faa-burst animated' ></i>&ensp;Xóa file vừa tải lên</a>";
                                                echo "<a id='taifile' class='btn btn-success btn-lg' style='display: none;'><i class='fas fa-upload faa-float animated' ></i>&ensp;Tải lên tài liệu nghiệm thu</a>";
                                                echo "<input type='text' hidden='hidden' value='".$detai['NTFILE']."' id='tenfiledaup'>";
                                            }else{
                                                echo "<a id='taifile' class='btn btn-success btn-lg'><i class='fas fa-upload faa-float animated' ></i>&ensp;Tải lên tài liệu nghiệm thu</a>";
                                                echo "<input type='text' hidden='hidden' value='' id='tenfiledaup'>";
                                            } ?>
                                            <input type="file" id="filetailen" hidden="hidden">
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="cach"></div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.tieude').html('Chi tiết đề cương đề tài');
        $('#danhgianghiemthu').addClass('active');
        $('#taifile').on("click",function () {
            $('#filetailen').click();
        });
        $('#filetailen').on('change',function () {
            //Lấy ra files
            var file_data = $('#filetailen').prop('files')[0];
            var type = file_data.type;
            var match = ["application/msword","image/jpeg","image/png","application/pdf","application/vnd.openxmlformats-officedocument.wordprocessingml.document", "application/x-zip-compressed","rar/zip"];
            //alert(file_data.type);
            if(type == match[0] || type == match[1] || type == match[2] || type == match[3] || type == match[4] || type == match[5] || type == match[6]){
                //khởi tạo đối tượng form data
                var form_data = new FormData();
                //thêm files vào trong form data
                form_data.append('file', file_data);
                form_data.append('dt',<?php echo trim($detai['IDNT']," ")?>);
                //sử dụng ajax post
                if (kiemtraketnoi()){
                    $.ajax({
                        url: 'ajax/ajax_danh_gia_nghiem_thu_up_file.php', // gửi đến file upload.php
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
                            //$('body').append(data);
                            var mang = JSON.parse(data);
                            if(mang.trangthai=='1'){
                                $('#taifile').hide();
                                thanhcong('File đã được tải lên');
                                $('#quanlyupfile').append("<a id='xoafileup' class='btn btn-danger btn-lg' title='Xóa file vừa upload' onclick='xoafiledatai()'><i class='far fa-times-circle  faa-burst animated' ></i>&ensp;Xóa file vừa tải lên</a>");
                                $('#tenfiledaup').val(mang.tenfile);
                            }
                            else if (mang.trangthai == '0'){
                                khongthanhcong(mang.thongbao);
                            }
                        },
                        error: function () {
                            $.notifyClose();
                            khongthanhcong('Không thể tải file');
                        }
                    });

                } else
                    khongthanhcong("Hiện không có kết nối internet");
            }
            else canhbao("Vui lòng chọn file hình ảnh, pdf hoặc word");

        });
        $('#luuykien').click(()=>{
          if (kiemtraketnoi()) {
            $.ajax({
              url : "ajax/ajax_y_kien_nghiem_thu.php",
              type : "post",
              dataType:"text",
              data : {
                dt: '<?php echo $detai['IDDT'] ?>',
                nd: '<?php echo $idnd ?>',
                yk: $("#ykien").val().trim()
              },
              success : function (data){
                  $("body").append(data);
              }
            });
          }
          else alert("Hiện không có kết nối internet");
        });
    });
    function xoafiledatai() {
        if(kiemtraketnoi()){
            $('#taifile').show();
            $('#xoafileup').remove();
            // ajax
            $.ajax({
                url : "ajax/ajax_danh_gia_nghiem_thu_xoa_file.php",
                type : "post",
                dataType:"text",
                data : {
                    file: $('#tenfiledaup').val().trim(),
                    dt: <?php echo trim($detai['IDNT']," ")?>
                },
                success : function (data){
                    $.notifyClose();
                    thanhcong(data);
                }
            });
        }
        else
            khongthanhcong("Hiện không có kết nối internet");
    }
</script>