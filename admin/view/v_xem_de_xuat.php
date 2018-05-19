<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
?>
<?php $trangthaidt = $detai['TRANGTHAI']; ?>
<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>(<span class="text-danger">*</span>) Những trường bắt buộc phải điền</h4>
                    <a href="?p=dieuchinhdetai&id=<?php echo $detai['IDDT'] ?>" class="btn btn-primary btn-sm" style="position:  absolute;top: 9px;right: 9px;"><i class="fas fa-edit"></i>&ensp;Điều chỉnh</a>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-thong-tin-chung" role="tab" aria-controls="nav-home" aria-selected="true">Thông tin chung</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-du-kien-tien-do" aria-selected="false">Dự kiến tiến độ</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-to-chuc-tham-gia" aria-selected="false">Tổ chức tham gia</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-thanh-vien" role="tab" aria-selected="false">Thành viên</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-kinh-phi" aria-selected="false">Kinh phí</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-tai-lieu-dinh-kem" aria-selected="false">TL đính kèm</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-xet-duyet" aria-selected="false">Xét duyệt</a>
                                <?php
                                if($trangthaidt!='Chờ gửi đề xuất' && $trangthaidt!='Đang xét duyệt'){
                                    echo "<a class='nav-item nav-link' data-toggle='tab' href='#nav-bao-cao-tien-do' aria-selected='false'>Báo cáo tiến độ</a>";
                                    echo "<a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#nav-nghiem-thu\" aria-selected=\"false\">Nghiệm thu</a>";
                                }
                                ?>
                            </div>
                        </nav>
                        <div class="tab-content" >
                            <!-- THÔNG TIN ChUNG -->
                            <div class="tab-pane show active" id="nav-thong-tin-chung" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="col-md-12">
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="category" class="font-weight-bold" >Mã đề tài (*)</label>
                                            <input type="text" class="form-control" id="madetai" value="<?php echo $detai['MADETAI']; ?>"><hr>
                                            <button class="btn btn-primary" id="luumdt">Lưu mã</button>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="category" class="font-weight-bold giua" >Điểm đề tài</label>
                                            <input type="number" min="0" max="100" class="form-control giua" id="diemdetai" value="<?php echo $detai['DIEM']; ?>"><hr>
                                            <button class="btn btn-primary" id="luuddt">Lưu điểm</button>
                                        </div>
                                        <?php if ($detai['DUYET']==0) { ?>
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Duyệt đề tài này nếu đề tài này đã từng có trước đây</label><hr>
                                            <input type="radio" name="đuyetaco" id="duyetdetaidaco" style="transform: scale(1.5); margin: 0px 10px;"> <b>DUYỆT</b><br><br>
                                            <input type="radio" checked name="đuyetaco" style="transform: scale(1.5); margin: 0px 10px;"> <b>KHÔNG DUYỆT (xóa đề tài)</b>
                                            <hr>
                                            <button class="btn btn-primary" id="luudetaidaco">Lưu xác nhận</button>
                                        </div> 
                                        <?php } ?>
                                        
                                    </div>
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
                                            <td>
                                                <?php echo trinh_do_chuyen_mon($chunhiem['IDND']); ?>
                                            </td>
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
                                                    while ($row = mysqli_fetch_assoc($thanhvien)) { 
                                                        if($stt==1){
                                                            echo "<tr>";
                                                            echo "<td>1 - Chủ nhiệm đề tài <br><b>".$row['HOTEN']."</b></td>";
                                                            echo "<td>- ".trinh_do_chuyen_mon($row['IDND'])."<br>- ".chuc_danh_giang_vien($row['IDND'])."<br>- ".$row['DIENTHOAIDD']."</td>";
                                                            echo "<td>".$row['CONGVIEC']."</td>";
                                                            echo "<tr><td colspan='4'>Thành viên tham gia:</td></tr>";
                                                        }else{
                                                            echo "<tr>";
                                                            echo "<th>".$stt." - ".$row['HOTEN']."</th>";
                                                            echo "<td>- ".trinh_do_chuyen_mon($row['IDND'])."<br>- ".chuc_danh_giang_vien($row['IDND'])."<br>- ".$row['DIENTHOAIDD']."</td>";
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
                            <?php
                            if($trangthaidt!='Chờ gửi đề xuất' && $trangthaidt!='Đang xét duyệt'){
                                ?>
                                <div class="tab-pane" id="nav-bao-cao-tien-do" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <br>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <p class="col-md-12"><strong>Bảng báo cáo tiến độ thực hiện</strong></p>
                                                <hr>
                                                <table id="bangbctiendo" class="table table-bordered table-hover" style="background: #fff;">
                                                    <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                                        <th>Công việc đã thực hiện</th>
                                                        <th>Công việc cần thực hiện</th>
                                                        <th>Các đề nghị (nếu có)</th>
                                                        <th>Ngày báo cáo</th>
                                                    </tr>
                                                    <?php
                                                    $bctd = lay_bao_cao_tien_do($iddt);
                                                    while ($row = mysqli_fetch_assoc($bctd)) {
                                                        echo "<tr>";
                                                        echo "<td><textarea rows='4' class='form-control' readonly>".$row['CVDATH']."</textarea></td>";
                                                        echo "<td><textarea rows='4' class='form-control' readonly>".$row['CVCANTH']."</textarea></td>";
                                                        echo "<td><textarea rows='4' class='form-control' readonly>".$row['DENGHI']."</textarea></td>";
                                                        echo "<td class='giua'>".$row['NGAYBC']."</td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            <?php } ?>
                            <!-- KẾT QUẢ XÉT DUYỆT ĐỀ TÀI -->
                            <div class="tab-pane" id="nav-xet-duyet" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="nav nav-tabs tabs-con" role="tablist">
                                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-phan-cong-btc" aria-selected="false">Phân công xét duyệt</a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-ket-qua-xet-duyet" aria-selected="false">Kết quả xét duyệt</a>
                                    </div>
                                    <div class="tab-content" >
                                        <div class="tab-pane" id="nav-phan-cong-btc" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <label class="font-weight-bold col-md-12">Hội đồng ban tổ chức</label>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="font-weight-bold col-md-12">Thành viên BTC (Cố định)</label>
                                                        <table id="bangbtc" class="table table-bordered table-hover" style="background: #fff;">
                                                            <tr style="background: #009688;color: #fff;">
                                                                <th class="giua">Tên thành viên</th>
                                                                <th class="an">IDTV</th>
                                                                <th>Nhiệm vụ</th>
                                                                <th>Ghi chú</th>
                                                            </tr>
                                                            <?php
                                                            while ($row = mysqli_fetch_assoc($tvbtc)){
                                                                echo "
                                            <tr>
                                                <td>".$row['HOTEN']." ".$row['NGAYSINH']."</td>
                                                <td class='an'>".$row['IDND']."</td>
                                                <td><textarea class='form-control' rows='2' disabled>".$row['NHIEMVU']."</textarea></td><td><textarea class='form-control' rows='2' disabled>".$row['GHICHU']."</textarea></td>";
                                                            }
                                                            ?>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="font-weight-bold col-md-12">Hội đồng xét duyệt đề tài</label>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="font-weight-bold col-md-12">Thành viên xét duyệt đã chọn</label>
                                                        <table id="bangtvdg" class="table table-bordered table-hover" style="background: #fff;">
                                                            <tr style="background: #009688;color: #fff;">
                                                                <th class="giua">Tên thành viên</th>
                                                                <th class="an">IDTV</th>
                                                                <th>Nhiệm vụ</th>
                                                                <th>Ghi chú</th>
                                                                <th class="giua" style="width: 50px;">Xóa</th>
                                                            </tr>
                                                            <?php
                                                            while ($row = mysqli_fetch_assoc($tvdc)){
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
                                                        <a class="btn btn-warning" href="word/phieu_danh_gia_de_cuong.php?id=<?php echo $detai['IDDT']; ?>" ><i class="far fa-file-excel"></i>&ensp;Xuất phiếu đánh giá</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="font-weight-bold col-md-12">Danh sách thành viên</label>
                                                        <select id="chonbtc" class="form-control selectpicker" data-live-search="true">
                                                            <option value="btc" selected>---- Chọn thành viên ---</option>
                                                            <?php
                                                            $thanhvienxetduyet = thanh_vien_xet_duyet($iddt);
                                                            while ($row = mysqli_fetch_assoc($thanhvienxetduyet)){
                                                                echo "<option value='".$row['IDND']."'>".$row['HOTEN']." ".$row['NGAYSINH']."</option>";
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="nav-ket-qua-xet-duyet" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <br>
                                                    <div class="col-md-12"><?php if($detai['TRANGTHAI']=='Đang thực hiện') echo "<span class='badge badge-success' style='font-size: 16px;'>Đề tài đã được duyệt</span>"; ?></div>
                                                    <hr>
                                                    <div class="col-md-12">
                                                        <input type="radio" <?php if($detai['TRANGTHAI']=='Đang thực hiện') echo "checked"; ?>  name="danhdauxd" id="duyet-de-tai" style="transform: scale(2); margin: 0px 10px;"> Đánh dấu nếu <b class="text-primary">DUYỆT</b> đề tài <br><br>
                                                        <input type="radio" <?php if($detai['TRANGTHAI']!='Đang thực hiện') echo "checked"; ?> name="danhdauxd" id="khong-duyet-de-tai" style="transform: scale(2); margin: 0px 10px;"> Đánh dấu nếu <b class="text-danger">KHÔNG DUYỆT</b> đề tài
                                                        <br>
                                                    </div>
                                                    <table class="table table-bordered table-hover" style="background: #fff;">
                                                        <tr style="background: #009688;color: #fff;">
                                                            <th class="giua">Tên thành viên</th>
                                                            <th class="giua">Nhiệm vụ</th>
                                                            <th class="giua">Ghi chú</th>
                                                        </tr>
                                                        <?php
                                                        while ($row = mysqli_fetch_assoc($kqxd)){
                                                            echo "<tr>";
                                                            echo "<td>".$row['HOTEN']."</td>";
                                                            echo "<td>".$row['NHIEMVU']."</td>";
                                                            echo "<td>".$row['GHICHU']."</td>";
                                                            echo "</tr>";
                                                        }
                                                        ?>
                                                    </table>
                                                        <button class="btn btn-primary" id="luukqxd"><i class="fas fa-save"></i>&ensp;Lưu kết quả xét duyệt</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <!-- NGHIỆM THU ĐỀ TÀI -->
                            <div class="tab-pane" id="nav-nghiem-thu" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="nav nav-tabs tabs-con" role="tablist">
                                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-phan-cong-nghiem-thu" aria-selected="false">Phân công nghiệm thu</a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-ket-qua-nghiem-thu" aria-selected="false">Kết quả nghiệm thu</a>
                                    </div>
                                    <div class="tab-content" >
                                        <div class="tab-pane" id="nav-phan-cong-nghiem-thu" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <label class="font-weight-bold col-md-12">Hội đồng nghiệm thu đề tài</label>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="font-weight-bold col-md-12">Thành viên nghiệm thu đã chọn</label>
                                                        <table id="bangtvnt" class="table table-bordered table-hover" style="background: #fff;">
                                                            <tr style="background: #009688;color: #fff;">
                                                                <th class="giua">Tên thành viên</th>
                                                                <th class="an">IDTV</th>
                                                                <th class="giua">Nhiệm vụ</th>
                                                                <th class="giua">Ghi chú</th>
                                                                <th class='giua' style='width: 50px;'>Xóa</th>
                                                            </tr>
                                                            <?php
                                                            while ($row = mysqli_fetch_assoc($tvnt)){
                                                                echo "
                                                                    <tr style='text-align:center'>
                                                                        <td>".$row['HOTEN']." ".$row['NGAYSINH']."</td>
                                                                        <td class='an'>".$row['IDND']."</td>
                                                                        <td><textarea class='form-control' rows='2'>".$row['NHIEMVU']."</textarea></td><td><textarea class='form-control' rows='2'>".$row['GHICHU']."</textarea></td>";
                                                                if ($trangthaidt=='Đang thực hiện')
                                                                echo "<td class='giua' style='width:50px;'><button class='xoatvnt'><i class='fas fa-times do'></i></button></td></tr>";
                                                                else echo "<td></td></tr>";
                                                                }
                                                            ?>
                                                        </table>
                                                        <button class="btn btn-primary" id="luutvnt"><i class="fas fa-save"></i>&ensp;Lưu danh sách</button>
                                                    </div>
                                                        <div class="col-md-6">
                                                            <label class="font-weight-bold col-md-12">Danh sách thành viên</label>
                                                            <select id="chontvnt" class="form-control selectpicker" data-live-search="true" >
                                                                <option value="bnt" selected>---- Chọn thành viên ---</option>
                                                                <?php
                                                                $thanhvienxetduyet = thanh_vien_xet_duyet($iddt);
                                                                while ($row = mysqli_fetch_assoc($thanhvienxetduyet)){
                                                                    echo "<option value='".$row['IDND']."'>".$row['HOTEN']." ".$row['NGAYSINH']."</option>";
                                                                } ?>
                                                            </select>
                                                        </div>   
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="nav-ket-qua-nghiem-thu" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <br>
                                                    <?php
                                                    if($trangthaidt=='Đang thực hiện'){
                                                        ?>
                                                        <div class="col-md-12"><label class="font-weight-bold">Kết quả nghiệm thu&ensp;</label></div>
                                                        <hr>
                                                    <?php } ?>
                                                    <div class="col-md-12"><?php echo "<span class='badge badge-success' style='font-size: 16px;'>Đề tài đã được nghiệm thu</span>"; ?></div>
                                                    Ngày nghiệm thu: <b><?php echo date("d-m-Y", strtotime($row['THOIGIANNGHIEMTHU'])); ?></b>
                                                    <hr>
                                                    <div class="col-md-12">
                                                        <input type="radio" name="danhdau" id="nghiem-thu-de-tai" style="transform: scale(2); margin: 0px 10px;"> Đánh dấu nếu <b>NGHIỆM THU</b> đề tài <br><br>
                                                        <input type="radio" checked name="danhdau" id="khong-nghiem-thu-de-tai" style="transform: scale(2); margin: 0px 10px;"> Đánh dấu nếu <b>KHÔNG NGHIỆM THU</b> đề tài <br><br>
                                                        Ngày nghiệm thu: <input type="date" name="" id="ngaynghiemthu">
                                                        <br>
                                                    </div>
                                                    <table class="table table-bordered table-hover" style="background: #fff;">
                                                        <tr style="background: #009688;color: #fff;">
                                                            <th class="giua">Tên thành viên</th>
                                                            <th class="giua">Nhiệm vụ</th>
                                                            <th class="giua">Ghi chú</th>
                                                        </tr>
                                                        <?php
                                                        while ($row = mysqli_fetch_assoc($kqnt)){
                                                            echo "<tr style='text-align:center'>";
                                                            echo "<td>".$row['HOTEN']."</td>";
                                                            echo "<td>".$row['NHIEMVU']."</td>";
                                                            echo "<td>".$row['GHICHU']."</td>";
                                                            echo "</tr>";
                                                        }
                                                        ?>
                                                    </table>
                                                        <button class="btn btn-primary" id="luukqnt"><i class="fas fa-save"></i>&ensp;Lưu kết quả nghiệm thu</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="tab-pane" id="nav-tai-lieu-dinh-kem" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12 giua">
                                    <?php if (!empty($detai['FILE'])) { ?>
                                    <a href="<?php echo $qlkh['HOSTGOC']."files/".$detai['FILE']; ?>" class="btn btn-success btn-lg"><i class='fas fa-download faa-float animated' ></i>&ensp;Tải về tài liệu đính kèm</a>
                                    <?php } else echo "Chưa có tài liệu."; ?>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="pull-right">
                        <a class="btn btn-default" href="?p=quanlydetaiduan"><< Quay lại trang trước</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#quanlydetaiduan').addClass('active');
        $('.tieude').html('Chi tiết đề xuất');
        $(function () {
            $('[data-toggle="tooltip"]').tooltip('show');
        });
        $('#bangtvdg').on('click','.xoabtc',function(){
            $(this).parents('tr').remove();
        });

        $('#bangtvnt').on('click','.xoatvnt',function(){
            $(this).parents('tr').remove();
        });
        $('#luumdt').click(function(){
            if (!$('#madetai').val().trim()) {
                swal('Ôi! Lỗi','Chưa nhập mã đề tài','error');
                return;
            }
            if (kiemtraketnoi()) {
                $.ajax({
                    url : "ajax/ajax_luu_ma_de_tai.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        dt: '<?php echo $iddt; ?>', ma: $('#madetai').val().trim()
                    },
                    beforeSend: function(){
                        swal('Đợi đã','Vui lòng chờ cho đến khi quá trình hoàn tất','info');
                    },
                    success : function (data){
                        var kq = $.parseJSON(data);
                        if(kq.trangthai==1){
                            swal('Tốt','Đã lưu mã đề tài','success');
                        }
                        else
                            swal('Ôi! Lỗi','Mã này đã tồn tại, vui lòng nhập mã khác','error');
                    },
                    error: function () {
                        swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                    }
                });
            }
            else
                swal('Ôi! Lỗi','Không có kết nối internet','error');
        });
        $('#luuddt').click(function(){
            if (!$('#diemdetai').val().trim()) {
                swal('Ôi! Lỗi','Chưa nhập điểm đề tài','error');
                return;
            }
            if (kiemtraketnoi()) {
                $.ajax({
                    url : "ajax/ajax_luu_diem_de_tai.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        dt: '<?php echo $iddt; ?>', diem: $('#diemdetai').val().trim()
                    },
                    beforeSend: function(){
                        swal('Đợi đã','Vui lòng chờ cho đến khi quá trình hoàn tất','info');
                    },
                    success : function (data){
                        var kq = $.parseJSON(data);
                        if(kq.trangthai==1){
                            swal('Tốt','Đã lưu điểm đề tài','success');
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
        // Xử lý phần thêm hội đồng xét duyệt
        $('#chonbtc').change(function(){
            if($(this).val()!='btc'){
                // xét thành viên đã tồn tại hay chưa nếu chưa thì thêm vào bảng
                var table = $('#bangtvdg');
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
                    if(sodong<10){
                        //them tac gia vao danh sach
                        var tr = "<tr><td>"+$('#chonbtc option:selected').text()+"</td><td class='an'>"+$(this).find('option:selected').val()+"</td><td><textarea class='form-control' rows='2'></textarea></td></td><td><textarea class='form-control' rows='2'></textarea></td><td class='giua' style='width:50px;'><button class='xoabtc'><i class='fas fa-times do'></i></button></td></tr>";
                        $('#bangtvdg').append(tr);
                    }else khongthanhcong('Chỉ được thêm 9 thành viên');
                }
                else
                    khongthanhcong('Bạn đã chọn thành viên này rồi!');
            }
        });
        // Xử lý phần thêm ban tổ chức
        // Xử lý phần hội đồng nghiệm thu
        $('#chontvnt').change(function(){
            if($(this).val()!='bnt'){
                // xét thành viên đã tồn tại hay chưa nếu chưa thì thêm vào bảng
                var table = $('#bangtvnt');
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
                        var tr = "<tr><td>"+$('#chontvnt option:selected').text()+"</td><td class='an'>"+$(this).find('option:selected').val()+"</td><td><textarea class='form-control' rows='2'></textarea></td><td><textarea class='form-control' rows='2' ></textarea></td><td class='giua' style='width:50px;'><button class='xoatvnt'><i class='fas fa-times do'></i></button></td></tr>";
                        $('#bangtvnt').append(tr);
                    }else khongthanhcong('Chỉ được thêm 4 thành viên');
                }
                else
                    khongthanhcong('Bạn đã chọn thành viên này rồi!');
            }
        });
        // Ajax xét duyệt đề tài
        $("#luutvdg").click(function(){
            // xử lý thành viên nghiệm thu
            var btc = [];
            $('#bangbtc').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                var dem = 1;
                $(this).find('td').each(function(i, col) {
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

            var tvdg = [];
            $('#bangtvdg').find('tr:not(:first)').each(function(i, row) {
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
                tvdg.push(cols);
            });
            if(!(jQuery.isEmptyObject(btc)) && !(jQuery.isEmptyObject(tvdg))){
                if (kiemtraketnoi()) {
                    $.ajax({
                        url : "ajax/ajax_thanh_vien_dang_gia_de_tai.php",
                        type : "post",
                        dataType:"text",
                        data : {
                            btc: btc,
                            tvdg: tvdg,
                            dt: '<?php echo $iddt; ?>'
                        },
                        success : function (data){
                            var kq = $.parseJSON(data);
                            if(kq.trangthai==1)
                                swal('Tốt', 'Đã lưu thành viên xét duyệt đề tài', 'success');
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
            else khongthanhcong('Chưa chọn thành viên ban tổ chức hoặc thành viên xét duyêt');
        });
        // Ajax nghiệm thu
        $("#luutvnt").click(function(){
            // xử lý thành viên nghiệm thu
            var nt = [];
            $('#bangtvnt').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                var dem = 1;
                $(this).find('td:not(:last)').each(function(i, col) {
                    if(dem == 3 || dem==4){
                        cols.push($(this).find('textarea').val());
                    }
                    else{
                        cols.push($(this).text());
                    }
                    dem++;
                });
                nt.push(cols);
            });
            if(!(jQuery.isEmptyObject(nt))){
                if (kiemtraketnoi()) {
                    $.ajax({
                        url : "ajax/ajax_thanh_vien_nghiem_thu_de_tai.php",
                        type : "post",
                        dataType:"text",
                        data : {
                            nt: nt,
                            dt: '<?php echo $iddt; ?>'
                        },
                        success : function (data){
                            var kq = $.parseJSON(data);
                            if(kq.trangthai==1){
                                swal('Tốt','Đã lưu thành viên nghiệm thu đề tài','success');
                            }
                            else
                                swal('Ôi! Lỗi','Không có kết nối internet','error');
                        },
                        error: function () {
                         swal('Ôi! Lỗi','Không có kết nối internet','error');
                        }
                    });
                }
                else
                    swal('Ôi! Lỗi','Không có kết nối internet','error');
            }
            else khongthanhcong('Chưa chọn thành viên nghiệm thu đề tài');
        });
        // Lưu kết quả xét duyệt
        $('#luukqxd').on('click',function () {
            var duyet = 0;
            var detai = '<?php echo $detai['TENDETAI']; ?>';
            // TH duyệt
           if($('#duyet-de-tai').is(':checked')){
                duyet = 1; //duyet
           }
            if (kiemtraketnoi()) {
                $.ajax({
                    url : "ajax/ajax_duyet_de_tai.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        duyet: duyet,dt: '<?php echo $iddt; ?>',cn: '<?php echo $chunhiem['HOTEN']; ?>',detai: detai.toUpperCase(),mail: '<?php echo $chunhiem['MAIL']; ?>'
                    },
                    beforeSend: function () {
                        swal('Đợi đã','Vui lòng chờ cho đến khi quá trình hoàn tất','info');
                    },
                    success : function (data){
                        var kq = $.parseJSON(data);
                        if(kq.trangthai==1){
                            swal('Tốt','Đã duyệt','success');
                            setTimeout(function () {
                                window.location.reload(true);
                            },800);                            
                            $('#luukqxd').prop("disabled",true);
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
        // Lưu kết nghiệm thu
        $('#luukqnt').on('click',function () {
            var nt = 0;
            var detai = '<?php echo $detai['TENDETAI']; ?>';
            var ngaynghiemthu = $('#ngaynghiemthu').val().trim();
            if(!ngaynghiemthu){
                swal('Ôi! Lỗi','Vui lòng chọn ngày nghiệm thu','error');
                return;
            }
           if($('#nghiem-thu-de-tai').is(':checked')){
                nt = 1; //duyet
           }
            if (kiemtraketnoi()) {
                $.ajax({
                    url : "ajax/ajax_nghiem_thu_de_tai.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        nt: nt,dt: '<?php echo $iddt; ?>',cn: '<?php echo $chunhiem['HOTEN']; ?>',detai: detai.toUpperCase(),mail: '<?php echo $chunhiem['MAIL']; ?>', ngaynghiemthu: ngaynghiemthu
                    },
                    beforeSend: function(){
                        swal('Đợi đã','Vui lòng chờ cho đến khi quá trình hoàn tất','info');
                    },
                    success : function (data){
                        var kq = $.parseJSON(data);
                        if(kq.trangthai==1){
                            swal('Tốt','Đã nghiệm thu','success');
                            setTimeout(function () {
                                window.location.reload(true);
                            },800);
                            $('#luukqxd').prop("disabled",true);
                        }
                        else
                            swal('Ôi! Lỗi','Không có kết nối internet','error');
                    },
                    error: function () {
                        swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                    }
                });
            }
            else
                swal('Ôi! Lỗi','Không có kết nối internet','error');
        });
        <?php if ($detai['DUYET']==0) { ?>
        $('#luudetaidaco').on('click',function () {
            var duyet = 0;
            var detai = '<?php echo $detai['TENDETAI']; ?>';
           if($('#duyetdetaidaco').is(':checked')){
                duyet = 1; //duyet
           }
            if (kiemtraketnoi()) {
                $.ajax({
                    url : "ajax/ajax_duyet_de_tai_da_co.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        duyet: duyet,dt: '<?php echo $iddt; ?>',cn: '<?php echo $chunhiem['HOTEN']; ?>',detai: detai.toUpperCase(),mail: '<?php echo $chunhiem['MAIL']; ?>'
                    },
                    beforeSend: function(){
                        swal('Đợi đã','Vui lòng chờ cho đến khi quá trình hoàn tất','info');
                    },
                    success : function (data){
                        var kq = $.parseJSON(data);
                        if(kq.trangthai==1){
                            swal('Tốt','Đã duyệt','success');
                            $('#luudetaidaco').prop("disabled",true);
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
        <?php } ?>
    });
</script>