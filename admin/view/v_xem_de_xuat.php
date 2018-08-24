<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
$nhiemvu_btc = ['Chủ tịch HĐ', 'Trưởng BTC', 'Phó BTC', 'UV TT', 'Ủy viên', 'Thư ký'];
$nhiemvu_hd_duyet = ['Ủy viên'];
$nhiemvu_nghiemthu = ['Chủ tịch HĐ', 'Ủy viên', 'Thư ký'];
?>
<?php $trangthaidt = $detai['TRANGTHAI']; ?>
<header style="position: relative;">
    <a id="antientrinh" style="position: absolute;top: 0;right: 0;cursor: pointer;"><u>Ẩn tiến trình</u></a>
    <section class="timeline" id="caytientrinh">
        <ol>
            <li>
                <div>
                    Tạo đề tài&ensp;<i class="text-success fas fa-check-circle"></i>
                </div>
            </li>
            <?php if ($trangthaidt=='Đang xét duyệt') { ?>
            <li>
                <div>
                    <time><?php echo thoi_gian_duyet($detai['IDDT']); ?></time>
                    Xét duyệt
                </div>
            </li>
            <?php } ?>
            <?php if ($trangthaidt=='Đang thực hiện') { ?>
            <li>
                <div>
                    <time><?php echo thoi_gian_duyet($detai['IDDT']); ?></time>
                    Xét duyệt&ensp;<i class="text-success fas fa-check-circle"></i>
                </div>
            </li>
            <li>
                <div>
                    <time><?php echo thoi_gian_nghiem_thu($detai['IDDT']); ?></time>
                    Nghiệm thu
                </div>
            </li>
            <?php } ?>
            <?php if ($trangthaidt=='Đã nghiệm thu') { ?>
            <li>
                <div>
                    <time><?php echo thoi_gian_duyet($detai['IDDT']); ?></time>
                    Xét duyệt&ensp;<i class="text-success fas fa-check-circle"></i>
                </div>
            </li>
            <li>
                <div>
                    <time><?php echo thoi_gian_nghiem_thu($detai['IDDT']); ?></time>
                    Nghiệm thu&ensp;<i class="text-success fas fa-check-circle"></i>
                </div>
            </li>
            <li>
                <div>
                    Đã nghiệm thu&ensp;<i class="text-success fas fa-check-circle"></i>
                </div>
            </li>
            <?php } ?>
            <li></li>
        </ol>
    </section>
</header>
<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin: 0;">
                <div class="card-body" style="padding-bottom: 0;">
                    <span style="float: right;top: 9px;right: 9px;">
                        <button data-toggle="modal" data-target="#modal-mail" class="btn btn-primary btn-sm"><i class="far fa-envelope-open"></i>&ensp;Gửi mail thông báo</button>
                        <a href="?p=dieuchinhdetai&id=<?php echo $iddt; ?>" class="btn btn-primary btn-sm"><i class="far fa-edit"></i>&ensp;Điều chỉnh</a>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-xoa-de-tai"><i class="fa fa-trash"></i>&ensp;Xoá đề tài</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Đề tài: <?php echo $detai['TENDETAI'] ?></h4>
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
                                        <?php if ($trangthaidt!='Đang xét duyệt') { ?>
                                        <div class="form-group col-md-3">
                                            <label for="category" class="font-weight-bold giua" >Điểm đề tài</label>
                                            <input type="number" min="0" max="100" class="form-control giua" id="diemdetai" value="<?php echo $detai['DIEM']; ?>"><hr>
                                            <button class="btn btn-primary" id="luuddt">Lưu điểm</button>
                                        </div>
                                        <?php } ?>

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
                                            <th colspan="2" style="background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);color: #fff;color: #fff;">THÔNG TIN CHUNG</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 250px;">1. Tên đề tài</th>
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
                                            <th colspan="2" style="background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);color: #fff;color: #fff;">ĐỀ CƯƠNG ĐỀ TÀI</th>
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
                                                            echo "<td>- ".trinh_do_chuyen_mon($row['IDND'])."<br>- ".don_vi_cong_tac($row['IDND'])."<br>- ".$row['DIENTHOAIDD']."</td>";
                                                            echo "<td>".$row['CONGVIEC']."</td>";
                                                            echo "<tr><td colspan='4'>Thành viên tham gia:</td></tr>";
                                                        }else{
                                                            echo "<tr>";
                                                            echo "<th>".$stt." - ".$row['HOTEN']."</th>";
                                                            echo "<td>- ".trinh_do_chuyen_mon($row['IDND'])."<br>- ".don_vi_cong_tac($row['IDND'])."<br>- ".$row['DIENTHOAIDD']."</td>";
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
                                                        <th colspan="7">I. Chi công lao động/ thuê khoán chuyên môn</th>
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
                                                        <th colspan="7">II. Chi mua nguyên vật liệu</th>
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
                                                        <th colspan="7">III. Chi sữa chữa, mua sắm Tài sản cố định</th>
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
                                                        <th colspan="7">IV. Chi khác</th>
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
                                                    <th style="width: 50px;">Xóa</th>
                                                </tr>
                                                <?php 
                                                    $bctd = lay_bao_cao_tien_do($iddt);
                                                    while ($row = mysqli_fetch_assoc($bctd)) {
                                                        echo "<tr>";
                                                        echo "<td><textarea rows='4' class='form-control'>".$row['CVDATH']."</textarea></td>";
                                                        echo "<td><textarea rows='4' class='form-control'>".$row['CVCANTH']."</textarea></td>";
                                                        echo "<td><textarea rows='4' class='form-control'>".$row['DENGHI']."</textarea></td>";
                                                        echo "<td><input type='date' class='form-control' value='".$row['NGAYBC']."'></td>";
                                                        echo "<td><button class='xoabctiendo'><i class='fas fa-times do'></i></button></td>";
                                                        echo "</tr>";
                                                    }
                                                 ?>
                                            </table>
                                        </div>
                                        <div class="col-md-2"><button class="btn btn-default" id="thembctiendo">Thêm tiến độ &ensp;<i class="fas fa-long-arrow-alt-right"></i></button><br><br><button class="btn btn-primary" id="luubctiendo"><i class="fas fa-save"></i>&ensp;Lưu tiến độ</button></div>
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
                                                                <th class="giua" style="width: 50px;">Xóa</th>
                                                            </tr>
                                                            <?php
                                                            while ($row = mysqli_fetch_assoc($tvbtc)){
                                                                echo "
                                            <tr>
                                                <td>".$row['HOTEN']." ".$row['NGAYSINH']."</td>
                                                <td class='an'>".$row['IDND']."</td><td><select class='form-control'>";
                                                foreach ($nhiemvu_btc as $value){
                                                    if ($value==$row['NHIEMVU'])
                                                        echo "<option value='".$value."' selected >".$value."</option>";
                                                    else
                                                        echo "<option value='".$value."' >".$value."</option>";
                                                }
                                                echo "</select></td><td><textarea class='form-control' rows='2'>".$row['GHICHU']."</textarea></td>";
                                                echo "<td class='giua' style='width:50px;'><button class='xoabtc'><i class='fas fa-times do'></i></button></td></tr>";
                                                            }
                                                            ?>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="font-weight-bold col-md-12">Danh sách thành viên</label>
                                                        <select id="chontvbtc" class="form-control selectpicker" data-live-search="true">
                                                            <option value="btc" selected>---- Chọn thành viên ---</option>
                                                            <?php
                                                            $thanhvienxetduyet = thanh_vien_xet_duyet($iddt);
                                                            while ($row = mysqli_fetch_assoc($thanhvienxetduyet)){
                                                                echo "<option value='".$row['IDND']."'>".$row['HOTEN']." ".$row['NGAYSINH']."</option>";
                                                            } ?>
                                                        </select>
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
                                                <td class='an'>".$row['IDND']."</td><td><select class='form-control'>";
                                                                foreach ($nhiemvu_hd_duyet as $value){
                                                                    if ($value==$row['NHIEMVU'])
                                                                        echo "<option value='".$value."' selected >".$value."</option>";
                                                                    else
                                                                        echo "<option value='".$value."' >".$value."</option>";
                                                                }
                                                                echo "</select></td><td><textarea class='form-control' rows='2'>".$row['GHICHU']."</textarea></td>";
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
                                                                        <td><select class='form-control'>";
                                                                foreach ($nhiemvu_nghiemthu as $value){
                                                                    echo "So sánh: ".$value." với ".$row['NHIEMVU'];
                                                                    if ($value==$row['NHIEMVU']){

                                                                        echo "<option value='".$value."' selected >".$value."</option>";
                                                                    }
                                                                    else
                                                                        echo "<option value='".$value."' >".$value."</option>";
                                                                }
                                                                //<textarea class='form-control' rows='2'>".$row['NHIEMVU']."</textarea></td>
                                                                echo "</select></select></td><td><textarea class='form-control' rows='2'>".$row['GHICHU']."</textarea></td>";
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
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>
<!-- Modal thêm báo cáo tiến độ -->
<div class="modal fade" id="modal-them-bao-cao-tien-do" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm báo cáo tiến độ </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags" class="font-weight-bold">Công việc đã thực hiện (<span class="text-danger">*</span>)</label>
                    <textarea class="form-control" id="cvdathuchien" style="border-radius: 0;" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="tags" class="font-weight-bold">Công việc cần thực hiện (<span class="text-danger">*</span>)</label>
                    <textarea class="form-control" id="cvcanthuchien" style="border-radius: 0;" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="tags" class="font-weight-bold">Các đề nghị (nếu có)</label>
                    <textarea class="form-control" id="cvdenghi" style="border-radius: 0;" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="tags" class="font-weight-bold">Ngày báo cáo</label>
                    <input type="date" class="form-control" id="cvngaybaocao" value="<?php echo date('Y-m-d'); ?>" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="thembctd">Lưu</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal-mail" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Gửi mail đến <?php echo $chunhiem['HOTEN']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags" class="font-weight-bold">Tiêu đề mail</label>
                    <textarea class="form-control" id="tieudemail" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="tags" class="font-weight-bold">Nội dung mail</label>
                    <textarea class="form-control" id="noidungmail" rows="5"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="guimail"><i class="fa fa-paper-plane"></i>&ensp;Gửi mail</button>
            </div>
        </div>
    </div>
</div>
  <!-- Modal -->
  <div class="modal" id="modal-xoa-de-tai" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Xoá đề tài</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xoá vĩnh viễn đề tài này?</strong><hr>
                    <b>Đề tài: </b><span><?php echo $detai['TENDETAI'] ?></span>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  <button type="button" class="btn btn-danger" id="xoadetai">Xoá</button>
              </div>
          </div>
      </div>
  </div>
<script type="text/javascript">
    var mailchunhiem = '<?php echo $chunhiem['MAIL']; ?>';
    $(document).ready(function(){
        $('#quanlydetaiduan').addClass('active');
        $('.tieude').html('Chi tiết đề tài');
        $(function () {
            $('[data-toggle="tooltip"]').tooltip('show');
        });
        $('#bangtvdg').on('click','.xoabtc',function(){
            $(this).parents('tr').remove();
        });
        $('#bangbtc').on('click','.xoabtc',function(){
            $(this).parents('tr').remove();
        });
        $('#bangtvnt').on('click','.xoatvnt',function(){
            $(this).parents('tr').remove();
        });
        // Xóa báo cáo tiến độ
        $('#bangbctiendo').on('click','.xoabctiendo',function(){
            $(this).parents('tr').remove();
        });
        // Thêm báo cáo tiến độ
        $('#thembctiendo').on('click',function () {
            $('#modal-them-bao-cao-tien-do').modal('show');
        });
        var bctiendo = 0;
        if($('#nav-bao-cao-tien-do').length) bctiendo = 1;
        $('#thembctd').on('click',function () {
            if($('#cvdathuchien').val().trim()!='' && $('#cvcanthuchien').val().trim()!=''){
                var tr = "<tr>\n" +
                    "<td><textarea rows='4' class='form-control'>"+$('#cvdathuchien').val().trim()+"</textarea></td>\n" +
                    "<td><textarea rows='4' class='form-control'>"+$('#cvcanthuchien').val().trim()+"</textarea></td>\n" +
                    "<td><textarea rows='4' class='form-control'>"+$('#cvdenghi').val()+"</textarea></td>\n" +
                    "<td><input type='date' value='"+$('#cvngaybaocao').val()+"' class='form-control'></td>\n" +
                    "<td><button class='xoabctiendo'><i class='fas fa-times do'></i></button></td>\n" +
                    "</tr>";
                $('#bangbctiendo').append(tr);
                $('#modal-them-bao-cao-tien-do').find('textarea').val('');
                $('#modal-them-bao-cao-tien-do').modal('hide');
            }
            else
                khongthanhcong('Vui lòng điền đầy đủ các trường (*)');
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
                        $('body').append(data);
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
        $(document).on('click','#guimail',function(){
            if(!$('#tieudemail').val().trim()){
                swal('Ôi! Lỗi', 'Vui lòng nhập tiêu đề mail', 'error');
                return;
            }
            if(!$('#noidungmail').val().trim()){
                swal('Ôi! Lỗi', 'Vui lòng nhập nội dung mail', 'error');
                return;
            }
            if(jQuery.isEmptyObject(mailchunhiem)){
                swal('Ôi! Lỗi', 'Chủ nhiệm này chưa cập nhật địa chỉ mail', 'error');
                return;
            }
            if (kiemtraketnoi()) {
                $.ajax({
                    url : "ajax/ajax_gui_mail_chu_nhiem.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        tieude: $('#tieudemail').val().trim(),
                        noidung: $('#noidungmail').val().trim(),
                        mail: mailchunhiem
                    },
                    beforeSend: function(){
                        swal('Đợi đã','Vui lòng chờ cho đến khi quá trình hoàn tất','info');
                    },
                    success : function (data){
                        var kq = $.parseJSON(data);
                        if(kq.trangthai==1){
                            swal('Tốt','Đã gửi mail','success');
                            $('#modal-mail').modal('hide');
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
                        var tr = "<tr><td>"+$('#chonbtc option:selected').text()+"</td><td class='an'>"+$(this).find('option:selected').val()+"</td><td><select class='form-control'><option value='Ủy viên'>Ủy viên</option></select></td></td><td><textarea class='form-control' rows='2'></textarea></td><td class='giua' style='width:50px;'><button class='xoabtc'><i class='fas fa-times do'></i></button></td></tr>";
                        $('#bangtvdg').append(tr);
                    }else khongthanhcong('Chỉ được thêm 9 thành viên');
                }
                else
                    khongthanhcong('Bạn đã chọn thành viên này rồi!');
            }
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
                    if(sodong<15){
                        //them tac gia vao danh sach
                        var tr = "<tr><td>"+$('#chontvbtc option:selected').text()+"</td><td class='an'>"+$(this).find('option:selected').val()+"</td><td><select class='form-control'><option value='Chủ tịch HĐ'>Chủ tịch HĐ</option><option value='Trưởng BTC'>Trưởng BTC</option><option value='Phó BTC'>Phó BTC</option><option value='UV TT'>UV TT</option><option value='Ủy viên'>Ủy viên</option><option value='Thư ký'>Thư ký</option></select></td><td><textarea class='form-control' rows='2'></textarea></td><td class='giua' style='width:50px;'><button class='xoabtc'><i class='fas fa-times do'></i></button></td></tr>";
                        $('#bangbtc').append(tr);
                    }else khongthanhcong('Chỉ được thêm 4 thành viên');
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
                    if(sodong<15){
                        //them tac gia vao danh sach
                        var tr = "<tr><td>"+$('#chontvnt option:selected').text()+"</td><td class='an'>"+$(this).find('option:selected').val()+"</td><td><select class='form-control'><option value='Chủ tịch HĐ'>Chủ tịch HĐ</option><option value='Ủy viên'>Ủy viên</option><option value='Thư ký'>Thư ký</option></select></td><td><textarea class='form-control' rows='2' ></textarea></td><td class='giua' style='width:50px;'><button class='xoatvnt'><i class='fas fa-times do'></i></button></td></tr>";
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
                $(this).find('td:not(:last)').each(function(i, col) {
                    if(dem == 3){
                        cols.push($(this).find('select').val());
                    }else
                    if(dem == 4){
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
                    if(dem == 3){
                        cols.push($(this).find('select').val());
                    }else
                    if(dem == 4){
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
                    if(dem == 3){
                        cols.push($(this).find('select').val());
                    }else
                    if(dem == 4){
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
        $('#luubctiendo').on('click',function(){
            //  Xét dự kiến tiến độ
            var  bctd = [];
            var demongdungbctd = 0;
            if(bctiendo==1) {
                // Xóa dòng tổ chức chưa điền
                $('#bangbctiendo').find('tr:not(:first)').each(function (i, row) {
                    var cols = [];
                    $(this).find('td:not(:last) input, textarea').each(function (i, col) {
                        cols.push($(this).val());
                    });
                    if (cols[0] == '' && cols[1] == '' && cols[2] == '' && cols[3] == '') {
                        $(this).remove();
                        demongdungbctd--;
                    }
                    demongdungbctd++;
                });
                $('#bangbctiendo').find('tr:not(:first)').each(function (i, row) {
                    var cols = [];
                    $(this).find('td:not(:last) input, textarea').each(function (i, col) {
                        cols.push($(this).val());
                    });
                    bctd.push(cols);
                }); // lưu vào bctd[[]];
            }
            if (kiemtraketnoi()) {
                $.ajax({
                    url : "ajax/ajax_bao_cao_tien_do.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        bctd: bctd,dt: '<?php echo $iddt; ?>'
                    },
                    beforeSend: function(){
                        swal('Đợi đã','Vui lòng chờ cho đến khi quá trình hoàn tất','info');
                    },
                    success : function (data){
                        var kq = $.parseJSON(data);
                        if(kq.trangthai==1){
                            swal('Tốt','Đã lưu báo cáo tiến độ','success');
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
        $('#xoadetai').on('click',function () {
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_de_tai_du_an.php',
                    type: 'POST',
                    data: {
                        token: '<?php echo $token; ?>',
                        id: '<?php echo $detai['IDDT']; ?>'
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var result = $.parseJSON(data);
                        if(result.trangthai == 1){
                            swal('Tốt','Xóa đề tài thành công','success');
                            setTimeout(function(){
                                location.href = '<?php echo $qlkh['HOSTADMIN']."?p=quanlydetaiduan" ?>';
                            }, 3000);
                        }
                    },
                    error: function () {
                        swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                    }
                });
            }
            else
                swal('Ôi! Lỗi','Không có kết nối internet','error');
        });
        $('#antientrinh').click(function(){
            if($('#antientrinh').text().trim()=='Ẩn tiến trình'){
                $('#caytientrinh').hide(400);
                $('#antientrinh u').text('Hiện tiến trình');
            }
            else{
                $('#caytientrinh').show(400);
                $('#antientrinh u').text('Ẩn tiến trình');
            }
        });
    });
</script>