<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-thong-tin-chung" role="tab" aria-controls="nav-home" aria-selected="true">Thông tin chung</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-du-kien-tien-do" aria-selected="false">Dự kiến tiến độ</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-to-chuc-tham-gia" aria-selected="false">Tổ chức tham gia</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-thanh-vien" role="tab" aria-selected="false">Thành viên</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-kinh-phi" aria-selected="false">Kinh phí</a>
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
                                            <th style="width: 400px;">1. Tên đề tài</th>
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
                                            <td><?php echo trinh_do_chuyen_mon($chunhiem['IDND']); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Chức danh giảng viên</th>
                                            <td><?php echo chuc_danh_giang_vien($chunhiem['IDND']); ?></td>
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
                                                    while ($rowb = mysqli_fetch_assoc($thanhvien)) { 
                                                        if($stt==1){
                                                            echo "<tr>";
                                                            echo "<td>1 - Chủ nhiệm đề tài <br><b>".$rowb['HOTEN']."</b></td>";
                                                            echo "<td>- ".trinh_do_chuyen_mon($rowb['IDND'])."<br>- ".don_vi_cong_tac($rowb['IDND'])."<br>- ".$rowb['DIENTHOAIDD']."</td>";
                                                            echo "<td>".$rowb['CONGVIEC']."</td>";
                                                            echo "<tr><td colspan='4'>Thành viên tham gia:</td></tr>";
                                                        }else{
                                                            echo "<tr>";
                                                            echo "<th>".$stt." - ".$rowb['HOTEN']."</th>";
                                                            echo "<td>- ".trinh_do_chuyen_mon($rowb['IDND'])."<br>- ".don_vi_cong_tac($rowb['IDND'])."<br>- ".$rowb['DIENTHOAIDD']."</td>";
                                                            echo "<td>".$rowb['CONGVIEC']."</td>";
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
                                                <thead>
                                                    <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                                        <th>STT</th>
                                                        <th>Các khoản chi</th>
                                                        <th>ĐVT</th>
                                                        <th>Số lượng</th>
                                                        <th>Đơn giá</th>
                                                        <th>Thành tiền</th>
                                                        <th>Ghi chú</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);color: #fff;">
                                                        <th class="giua">I</th>
                                                        <th colspan="6">Chi công lao động/ thuê khoán chuyên môn</th>
                                                    </tr>
                                        <?php $tongkinhphi=0;$stt=1;if(!empty($kinhphi)){foreach ($kinhphi as $row) {
                                                        if($row['LOAI']=='conglaodong'){
                                                        ?>
                                                        <tr>
                                                            <td class="giua"><?php echo $stt; ?></td>
                                                            <td><?php echo $row['KHOANCHI'] ?></td>
                                                            <td class="giua"><?php echo $row['DONVITINH'] ?></td>
                                                            <td class="giua"><?php echo $row['SOLUONG'] ?></td>
                                                            <td class="giua"><?php echo $row['DONGIA'] ?></td>
                                                            <td class="giua"><?php echo $row['THANHTIEN'] ?></td>
                                                            <td><?php echo $row['GHICHU'] ?></td>
                                                        </tr>
                                                    <?php
                                                            $stt++;  
                                                        }
                                                        $tongkinhphi+=$row['SOLUONG']*$row['DONGIA'];
                                                    }}
                                                 ?>
                                                    <tr style="background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);color: #fff;">
                                                        <th class="giua">II</th>
                                                        <th colspan="6">Chi mua nguyên vật liệu</th>
                                                    </tr>
                                        <?php $stt=1;if(!empty($kinhphi)){foreach ($kinhphi as $row) {
                                                        if($row['LOAI']=='nguyenvatlieu'){
                                                        ?>
                                                        <tr>
                                                            <td class="giua"><?php echo $stt; ?></td>
                                                            <td><?php echo $row['KHOANCHI'] ?></td>
                                                            <td class="giua"><?php echo $row['DONVITINH'] ?></td>
                                                            <td class="giua"><?php echo $row['SOLUONG'] ?></td>
                                                            <td class="giua"><?php echo $row['DONGIA'] ?></td>
                                                            <td class="giua"><?php echo $row['THANHTIEN'] ?></td>
                                                            <td><?php echo $row['GHICHU'] ?></td>
                                                        </tr>
                                                    <?php
                                                            $stt++;  
                                                        }
                                                    }}
                                                 ?>
                                                    <tr style="background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);color: #fff;">
                                                        <th class="giua">III</th>
                                                        <th colspan="6">Chi sữa chữa, mua sắm Tài sản cố định</th>
                                                    </tr>
                                        <?php $stt=1;if(!empty($kinhphi)){foreach ($kinhphi as $row) {
                                                        if($row['LOAI']=='suachua'){
                                                        ?>
                                                        <tr>
                                                            <td class="giua"><?php echo $stt; ?></td>
                                                            <td><?php echo $row['KHOANCHI'] ?></td>
                                                            <td class="giua"><?php echo $row['DONVITINH'] ?></td>
                                                            <td class="giua"><?php echo $row['SOLUONG'] ?></td>
                                                            <td class="giua"><?php echo $row['DONGIA'] ?></td>
                                                            <td class="giua"><?php echo $row['THANHTIEN'] ?></td>
                                                            <td><?php echo $row['GHICHU'] ?></td>
                                                        </tr>
                                                    <?php
                                                            $stt++;  
                                                        }
                                                    }}
                                                 ?>
                                                    <tr style="background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);color: #fff;">
                                                        <th class="giua">IV</th>
                                                        <th colspan="6">Chi khác</th>
                                                    </tr>
                                        <?php $stt=1;if(!empty($kinhphi)){foreach ($kinhphi as $row) {
                                                        if($row['LOAI']=='chikhac'){
                                                        ?>
                                                        <tr>
                                                            <td class="giua"><?php echo $stt; ?></td>
                                                            <td><?php echo $row['KHOANCHI'] ?></td>
                                                            <td class="giua"><?php echo $row['DONVITINH'] ?></td>
                                                            <td class="giua"><?php echo $row['SOLUONG'] ?></td>
                                                            <td class="giua"><?php echo $row['DONGIA'] ?></td>
                                                            <td class="giua"><?php echo $row['THANHTIEN'] ?></td>
                                                            <td><?php echo $row['GHICHU'] ?></td>
                                                        </tr>
                                                    <?php
                                                            $stt++;  
                                                        }
                                                    }}
                                                 ?>
                                                    <tr>
                                                        <td></td>
                                                        <th colspan="4"><i>Tổng cộng</i></th>
                                                        <th class="giua" style="background: #FFF59D;"><?php echo $tongkinhphi ?></th>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
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
        $('.tieude').html('Thông tin đề tài đang nghiệm thu');
        $('#danhgianghiemthu').addClass('active');
    });
</script>