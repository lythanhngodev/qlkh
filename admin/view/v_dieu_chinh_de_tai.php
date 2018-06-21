<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<script type="text/javascript">
    var _data_ = <?php echo json_encode($rnd); ?>;
    var _tv_ = <?php echo json_encode($rtv); ?>;
    var _cdt_ = <?php echo json_encode($rcdt); ?>;
    var _lv_ = <?php echo json_encode($rlv); ?>;
    var _lh_ = <?php echo json_encode($rlh); ?>;
    var _nddv_ = <?php echo json_encode($rnd_dv); ?>;
    var _ndtd_ = <?php echo json_encode($rnd_td); ?>;
    var bkp = <?php echo json_encode($_kp); ?>;
</script>
<?php $trangthaidt = $detai['TRANGTHAI']; ?>
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
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-tong-quan" role="tab" aria-selected="false">Tổng quan</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-thanh-vien" role="tab" aria-selected="false">Thành viên</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-to-chuc-tham-gia" aria-selected="false">Tổ chức tham gia</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-du-kien-tien-do" aria-selected="false">Dự kiến tiến độ</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-kinh-phi" aria-selected="false">Kinh phí</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-ket-qua" aria-selected="false">Kết quả</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-tai-lieu-dinh-kem" aria-selected="false">TL đính kèm</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- THÔNG TIN ChUNG -->
                            <div class="tab-pane show active" id="nav-thong-tin-chung" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="col-md-12">
                                    <br>
                                    <div class="form-group">
                                        <label for="category" class="font-weight-bold" >Tên đề tài (<span class="text-danger">*</span>)</label>
                                        <input type="text" class="form-control" id="tendetai" value="<?php echo $detai['TENDETAI'] ?>">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="category" class="font-weight-bold" >Mục tiêu đề tài (<span class="text-danger">*</span>)</label>
                                            <textarea class="form-control" id="muctieudetai" rows="5"><?php echo $detai['MUCTIEU'] ?></textarea>
                                            <small id="emailHelp" class="form-text text-muted">Ghi mục tiêu tổng quát cần đạt ở mức độ cụ thể hơn tên đề tài và mục tiêu chi tiết nhưng không diễn giải quá cụ thể thay cho nội dung cần thực hiện của đề tài</small>
                                        </div>
                                        <div class="col-md-12"><hr></div>
                                            <div class="form-group col-md-4">
                                                <label for="category" class="font-weight-bold" >Tổng tháng thực hiện (<span class="text-danger">*</span>)</label>
                                                <input id="thangthuchiendetai" type="number" min="1" max="120" class="form-control giua" value="<?php echo $detai['THANGTHUCHIEN'] ?>">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="category" class="font-weight-bold" >Tháng/Năm bắt đầu (<span class="text-danger">*</span>)</label>
                                                <input class="form-control" type="month" name="" id="thangnambatdaudetai" value="<?php echo $detai['THANGNAMBD'] ?>">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="category" class="font-weight-bold" >Tháng/Năm kết thúc (<span class="text-danger">*</span>)</label>
                                                <input class="form-control" type="month" name="" id="thangnamketthucdetai" value="<?php echo $detai['THANGNAMKT'] ?>">
                                            </div>
                                        <div class="col-md-12"><hr></div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Cấp đề tài</label>
                                            <hr>
                                          <?php while ($row = mysqli_fetch_assoc($cdt)) { ?>
                                          <input type="radio" name="choncapdetai" id="capdetai-<?php echo $row['IDC'] ?>" value="<?php echo $row['TENCAP'] ?>" <?php if($detai['CAPDETAI']==$row['TENCAP']) echo "checked"; ?>> <?php echo $row['TENCAP'] ?> <br>
                                          <?php } ?>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Loại hình nghiên cứu</label>
                                            <hr>
                        <?php while ($row = mysqli_fetch_assoc($lh)) { ?>
                        <input type="checkbox" id="loaihinh-<?php echo $row['IDLH'] ?>" value="<?php echo $row['TENLOAI'] ?>" <?php foreach ($manglh as $value) {if($value==$row['TENLOAI']) {echo "checked";break;}} ?>> <?php echo $row['TENLOAI'] ?> <br>
                        <?php } ?>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Lĩnh vực khoa học</label>
                                            <hr>
                          <?php while ($row = mysqli_fetch_assoc($lv)) { ?>
                          <input type="checkbox" id="linhvuc-<?php echo $row['IDLV'] ?>" value="<?php echo $row['TENLINHVUC'] ?>" <?php foreach ($mangkh as $value) {if($value==$row['TENLINHVUC']) {echo "checked";break;}} ?> > <?php echo $row['TENLINHVUC'] ?> <br>
                          <?php } ?>
                                        </div>
                                        <div class="col-md-12"><hr></div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Kinh phí dự kiến từ ngân sách (<span class="text-danger">*</span>)</label>
                                            <input type="number" min="0" class="form-control giua" id="kinhphingansachdetai" value="<?php echo $detai['KINHPHINGANSACH'] ?>">
                                            <small id="emailHelp" class="form-text text-muted">Từ ngân sách <strong>sự nghiệp KH&amp;CN của Trường</strong></small>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Kinh phí dự kiến từ nguồn khác (<span class="text-danger">*</span>)</label>
                                            <input type="number" min="0" class="form-control giua" id="kinhphinguonkhacdetai" value="<?php echo $detai['KINHPHINGUONKHAC'] ?>">
                                            <small id="emailHelp" class="form-text text-muted">Từ các <strong>nguồn khác</strong></small>
                                        </div>
                                        <div class="col-md-12"><hr></div>
                                        <div class="form-group col-md-12">
                                            <label for="category" class="font-weight-bold" >Thuộc chương trình (nếu có)</label>
                                            <textarea class="form-control" id="thuocchuongtrinhdetai" rows="5"><?php echo $detai['THUOCCHUONGTRINH'] ?></textarea>
                                        </div>
                                        <br>
                                    </div>
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
                                                <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                                    <th style="width: 200px;">Họ &amp; Tên</th>
                                                    <th style="width: 350px;">Trình độ chuyên môn, đơn vị công tác, thông tin liên hệ</th>
                                                    <th style="width: 350px;">Công việc được giao</th>
                                                    <th style="width: 50px;" class="giua">Xóa</th>
                                                </tr>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($chunhiem)) { ?>
                                                        <tr>
                                                        <td>Chủ nhiệm đề tài:
                                                            <select class="form-control selectpicker" data-live-search="true" id="chonchunhiem" onchange="chonthanhvien(this)">
                                                                <?php foreach ($rnd as $nd) {
                                                                    if ($row['IDND']==$nd[0]) {
                                                                        echo "<option value='".$nd[0]."' selected >".$row['HOTEN']." ".$nd[2]."</option>";
                                                                    }else{
                                                                        echo "<option value='".$nd[0]."'>".$nd[1]." ".$nd[2]."</option>";
                                                                    }
                                                                } ?>
                                                            </select>
                                                        </td>
                                                        <td><textarea rows='4' class='form-control' readonly></textarea></td>
                                                        <td><textarea rows='4' class='form-control'><?php echo $row['CONGVIEC']; ?></textarea></td>
                                                        <td></td>
                                                        <tr><th colspan='4'>Thành viên tham gia:</th></tr>
                                                    <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <button class="btn btn-default" id="themthanhvien">Thêm thành viên &ensp;<i class="fas fa-long-arrow-alt-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <!-- TỔNG QUAN -->
                            <div class="tab-pane" id="nav-tong-quan" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <br>
                                <div class="col-md-12"><label for="category" class="font-weight-bold">Tình hình nghiên cứu trong &amp; ngoài nước</label></div>

                                <hr>

                                <div class="col-md-12"><label for="category" class="font-weight-bold" >a)Tổng quan tình hình nghiên cứu thuộc lĩnh vực của đề tài</label></div>
                                <div class="form-group col-md-12">
                                    <p id="emailHelp" class="form-text text-muted">Ghi những hiểu biết của chủ nhiệm đề tài về lĩnh vực nghiên cứu - nắm được những công trình nghiên cứu đã có liên quan đến đề tài, những kết quả nghiên cứu mới nhất trong lĩnh vực nghiên cứu đề tài, nêu rõ quan điểm của tác giả đối với công trình nghiên cứu này. Ghi rõ đã có tổ chức khoa học công nghệ hoặc doanh nghiệp nào đã tiến hành nghiên cứu đề tài tương tự này chưa, nếu có thì bằng phương pháp, công nghệ nào và kết quả nghiên cứu đã được đánh giá định lượng hoặc định tính như thế nào.</p>
                                    <textarea class="form-control" id="tinhinhnghiencuudetai" rows="5"><?php echo $detai['TINHHINHNGHIENCUU'] ?></textarea>
                                </div>

                                <br>
                                <div class="col-md-12"><label for="category" class="font-weight-bold" >b)Liệt kê danh mục các công trình nghiên cứu có liên quan</label></div>
                                <div class="form-group col-md-12">
                                    <p id="emailHelp" class="form-text text-muted">Ghi tên đầy đủ tài liệu (bài báo, ấn phẩm, ... ) đã tham khảo theo thứ tự. Chú ý, chỉ ghi những tài liệu (có thể của các tác giả khác trong và ngoài nước và / hoặc của bản thân tác giả) liên quan đến đề tài nghiên cứu, tránh ghi các tài liệu không liên quan đến nội dung nghiên cứu của đề tài.  Trường hợp có quá nhiều tài liệu liên quan, chỉ nêu những công trình chính mà tác giả tâm đắc nhất.</p>
                                    <textarea class="form-control" id="congtrinhnghiencuudetai" rows="5"><?php echo $detai['NGHIENCUULIENQUAN'] ?></textarea>
                                </div>

                                <br>

                                <div class="col-md-12"><label for="category" class="font-weight-bold" >c) Phân tích sự cần thiết nghiên cứu</label></div>
                                <div class="form-group col-md-12">
                                    <p id="emailHelp" class="form-text text-muted">Rút ra kết luận cần thiết để trả lời câu hỏi về nhu cầu và tính bức xúc đối với đề tài nghiên cứu.</p>
                                    <textarea class="form-control" id="sucanthietdetai" rows="5"><?php echo $detai['SUCANTHIET'] ?></textarea>
                                </div>

                                <br>

                                <div class="col-md-12"><label for="category" class="font-weight-bold">d) Phân tích về tính mới, tính sáng tạo của đề tài</label></div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="moisangtaodetai" rows="5"><?php echo $detai['MOISANGTAO'] ?></textarea>
                                </div>

                                <br>
                                <hr>
                                <br>

                                <div class="col-md-12"><label for="category" class="font-weight-bold">Cách tiếp cận, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng</label></div>

                                <div class="form-group col-md-12">
                                    <p id="emailHelp" class="form-text text-muted">Luận cứ rõ cách tiếp cận - thiết kế nghiên cứu, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng - so sánh với các phương thức giải quyết tương tự khác, nêu được tính mới, tính độc đáo, tính sáng tạo của đề tài.</p>
                                    <textarea class="form-control" id="phuongphapnghiencuudetai" rows="5"><?php echo $detai['PHUONGPHAPKYTHUAT'] ?></textarea>
                                </div>

                                <br>

                                <div class="col-md-12"><label for="category" class="font-weight-bold">Nội dung nghiên cứu</label></div>

                                <div class="form-group col-md-12">
                                    <p id="emailHelp" class="form-text text-muted">Liệt kê và mô tả những nội dung cần nghiên cứu, nêu bật được những nội dung mới và phù hợp để giải quyết vấn đề đặt ra, kể cả những dự kiến hoạt động phối hợp để chuyển
                                        giao kết quả nghiên cứu đến người sử dụng. Phải nêu được những nội dung, giải pháp cụ thể cần thực hiện để đạt mục tiêu đề ra. So sánh với các nội dung, giải pháp đã giải quyết của các tác giả trong và ngoài nước để nêu được tính mới, tính độc đáo, tính sáng tạo của đề tài về nội dung nghiên cứu.</p>
                                    <textarea class="form-control" id="noidungdetai" rows="5"><?php echo $detai['NOIDUNG'] ?></textarea>
                                </div>

                                <br>
                            </div>
                            <!-- KINH PHÍ -->
                            <div class="tab-pane" id="nav-kinh-phi" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="col-md-12"><strong>Dự kiến kinh phí thực hiện và các khoản chi</strong></p>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-warning btn-sm" id="nhap-kinh-phi"><i class="far fa-file-excel"></i>&nbsp;&nbsp;Nhập file excel</button><br>
                                                Nếu chưa có mẫu nhập Excel vui lòng <a href="../files/02062018112112-du-tru-kinh-phi.xlsx"><b><i><u>tải xuống.</u></i></b></a>
                                                    <br><br>
                                                    <input type="file" name="" id="filedl" hidden="hidden" accept="application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                                                </div>
                                            </div>
                                            <div id="bangdanhsach">
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
                                </div>
                                <br>
                            </div>
                            <!-- KẾT QUẢ -->
                            <div class="tab-pane" id="nav-ket-qua" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <br>
                                <div class="form-group col-md-12">
                                    <label for="category" class="font-weight-bold" >Dự kiến kết quả đề tài và địa chỉ ứng dụng (<span class="text-danger">*</span>)</label>
                                    <textarea class="form-control" id="ketquadetai" rows="8"><?php echo $detai['KETQUA']; ?></textarea>
                                </div>
                                <br>
                            </div>
                            <div class="tab-pane" id="nav-to-chuc-tham-gia" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <p class="col-md-12"><strong>Bảng các tổ chức tham gia (nếu có)</strong></p>
                                            <hr>
                                            <table id="bangtochuc" class="table table-bordered table-hover" style="background: #fff;">
                                                <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                                    <th class="giua">Tên và địa chỉ của tổ chức</th>
                                                    <th style="width: 450px;" class="giua">Nội dung tham gia</th>
                                                    <th style="width: 250px;" class="giua">Dự kiến kinh phí</th>
                                                    <th style="width: 50px;" class="giua">Xóa</th>
                                                </tr>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($tochuc)) {
                                                    echo "<tr>";
                                                    echo "<td><textarea rows='4' class='form-control'>".$row['THONGTINTC']."</textarea></td>";
                                                    echo "<td><textarea rows='4' class='form-control'>".$row['NOIDUNGTHAMGIA']."</textarea></td>";
                                                    echo "<td><input type='number' min='0' class='form-control giua' value='".$row['KINHPHI']."'></td>";
                                                    echo "<td class='giua'><button class='xoatochuc'><i class='fas fa-times do'></i></button></td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </table>
                                        </div>
                                        <div class="col-md-2"><button class="btn btn-default" id="themtochuc">Thêm tổ chức &ensp;<i class="fas fa-long-arrow-alt-right"></i></button></div>
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
                                                <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                                    <th>Công việc</th>
                                                    <th>Sản phẩm đạt được</th>
                                                    <th style="width: 150px;">Thời gian bắt đầu</th>
                                                    <th style="width: 150px;">Thời gian kết thúc</th>
                                                    <th style="width: 50px;">Xóa</th>
                                                </tr>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($tiendo)) {
                                                    echo "<tr>";
                                                    echo "<td><textarea rows='4' class='form-control'>".$row['CONGVIEC']."</textarea></td>";
                                                    echo "<td><textarea rows='4' class='form-control'>".$row['SANPHAM']."</textarea></td>";
                                                    echo "<td class='giua'><input type='date' class='form-control' value='".$row['THOIGIANBD']."'></td>";
                                                    echo "<td class='giua'><input type='date' class='form-control' value='".$row['THOIGIANKT']."'></td>";
                                                    echo "<td><button class='xoatiendo'><i class='fas fa-times do'></i></button></td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </table>
                                        </div>
                                        <div class="col-md-2"><button class="btn btn-default" id="themtiendo">Thêm tiến độ dự kiến&ensp;<i class="fas fa-long-arrow-alt-right"></i></button></div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <?php
                            if($trangthaidt!='Chờ gửi đề xuất' && $trangthaidt!='Đang xét duyệt'){
                            ?>
                            <?php } ?>
                            <div class="tab-pane" id="nav-tai-lieu-dinh-kem" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12 giua" id="quanlyupfile">
                                    <?php $file = $detai['FILE'];
                                    if (!empty($file)){
                                        echo "<a id='filetaive' href='".$qlkh['HOSTGOC']."files/".$detai['FILE']."' class='btn btn-success btn-lg'><i class='fas fa-download faa-float animated' ></i>&ensp;Tải về tài liệu đính kèm</a>";
                                        echo "&ensp;<a id='xoafileup' class='btn btn-danger btn-lg' title='Xóa file đã tải lên' onclick='xoafiledatai()'><i class='far fa-times-circle  faa-burst animated' ></i>&ensp;Xóa file đã tải lên</a>";
                                        echo "<a id='taifile' class='btn btn-success btn-lg' style='display:none;'><i class='fas fa-upload faa-float animated' ></i>&ensp;Tải lên tài liệu đề tài</a>";
                                        echo "<input type='text' hidden='hidden' value='".$detai['FILE']."' id='tenfiledaup'>";
                                    }
                                    else{
                                        echo "<a id='taifile' class='btn btn-success btn-lg'><i class='fas fa-upload faa-float animated' ></i>&ensp;Tải lên tài liệu đề tài</a>";
                                        echo "<input type='text' hidden='hidden' value='' id='tenfiledaup'>";
                                    }
                                    ?>
                                    <input type='file' id='filetailen' hidden='hidden' name=''>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary" id="suadetai"><i class="fas fa-save"></i>&nbsp;&nbsp;Lưu thay đổi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>

<script type="text/javascript">
    function xoafile(){
        $('#linkfile').val('');
        $('#tenfile').html('Chưa chọn file');
    }
    $(document).ready(function(){
        $('#quanlydetaiduan').addClass('active');
        $('.tieude').html('Điều chỉnh đề tài NCKH');
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        for (var i = 0; i < _data_.length; i++)
            for (var j = 0; j< _data_[i].length; j++)
                (!_data_[i][j]) ? _data_[i][j] = '' : 1;
        var tr=null;
        if (_tv_!=null) {
            _tv_.forEach(function(tv){
                _data_.forEach(function(d){
                    if (tv[3]==d[0]) {
                        var option = "<option value=''>Chọn thành viên</option>";
                            _data_.forEach(function(i){
                              (tv[3]==i[0]) ? option+="<option value='"+i[0]+"' selected>"+i[1]+" "+i[2]+"</option>" : option+="<option value='"+i[0]+"'>"+i[1]+" "+i[2]+"</option>";
                            });
                        var td=""; _ndtd_.forEach(function(d){if (d[0]==tv[3]) {td = d[1];}});
                        var dv=""; _nddv_.forEach(function(d){if (d[0]==tv[3]) {dv = d[1];}});
                        tr+="<tr><td><select class='form-control select-chon'>"+option+"</select></td><td><textarea class='form-control' rows='4' readonly>"+"- "+td+"\n- "+dv+"\n- "+d[3]+"</textarea></td><td><textarea class='form-control' rows='4'>"+tv[2]+"</textarea></td><td class='giua'><button class='xoathanhvien'><i class='fas fa-times do'></i></button></td></tr>";
                    }
                });
            });
        }
        $('#bangthanhvien').append(tr);
        $('.select-chon').addClass('selectpicker');
        $('.selectpicker').selectpicker({ liveSearch: true });
        // Thêm thành viên thực hiện đề tài
        var option="<option value=''>Chọn thành viên</option>";
        _data_.forEach(function(i){
            option+="<option value='"+i[0]+"'>"+i[1]+" "+i[2]+"</option>";
        });
        var stt_btv=1;
        $('#themthanhvien').click(function () {
            stt_btv=stt_btv+1;
            var tr = "<tr><td><select id='chon"+stt_btv+"' class='form-control' onchange='chonthanhvien(this)'>"+option+"</select></td><td id='btv-tt-"+stt_btv+"'><textarea class='form-control' rows='4' readonly></textarea></td><td id='btv-cv-"+stt_btv+"'><textarea class='form-control' rows='4'></textarea></td><td class='giua'><button class='xoathanhvien'><i class='fas fa-times do'></i></button></td></tr>";
            $("#bangthanhvien").append(tr);
        $('#chon'+stt_btv).addClass('selectpicker');
        $('.selectpicker').selectpicker({ liveSearch: true });
        });

        $('#nhap-kinh-phi').click(function(){
            $('#filedl').click();
        });
        $('#filedl').change(function(){
            var file_data = $('#filedl').prop('files')[0];
            var type = file_data.type;
            var match = ["application/vnd.ms-excel", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"];
            if (type==match[0] || type==match[1]) {
                var form_data = new FormData();
                form_data.append('file', file_data);
                if (kiemtraketnoi()){
                    $.ajax({
                        url: 'ajax/ajax_import_file_nhap_kinh_phi.php',
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
                            $('#filedl').val('');
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

        var bctiendo = 0;
        if($('#nav-bao-cao-tien-do').length) bctiendo = 1;
        $('#bangtiendo').on('click','.xoatiendo',function(){
            $(this).parents('tr').remove();
        });
        // Xóa thành viên
        $('#bangthanhvien').on('click','.xoathanhvien',function(){
            $(this).parents('tr').remove();
        });
        // Xóa tổ chức
        $('#bangtochuc').on('click','.xoatochuc',function(){
            $(this).parents('tr').remove();
        });
        // Xóa kinh phí
        $('#bangkinhphi').on('click','.xoakinhphi',function(){
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
        // Thêm tổ chức tham gia
        $('#themtochuc').click(function () {
            var tr = "<tr>\n" +
                "<td><textarea rows='4' class='form-control'></textarea></td>\n" +
                "<td><textarea rows='4' class='form-control'></textarea></td>\n" +
                "<td><input type='number' min='0' class='form-control giua'></td>\n" +
                "<td><button class='xoatochuc'><i class='fas fa-times do'></i></button></td>\n" +
                "</tr>";
            $('#bangtochuc').append(tr);
        });
        // Thêm tiến độ
        $('#themtiendo').click(function () {
            var tr = "<tr>\n" +
                "<td><textarea rows='4' class='form-control'></textarea></td>\n" +
                "<td><textarea rows='4' class='form-control'></textarea></td>\n" +
                "<td><input type='date' class='form-control'></td>\n" +
                "<td><input type='date' class='form-control'></td>\n" +
                "<td><button class='xoatiendo'><i class='fas fa-times do'></i></button></td>\n" +
                "</tr>";
            $('#bangtiendo').append(tr);
        });
        // Thêm kinh phí
        $('#themkinhphi').click(function () {
            var tr = "<tr>\n" +
                "<td><input type='text' class='form-control'></td>\n" +
                "<td><input type='number' min='0' class='form-control giua'></td>\n" +
                "<td><input type='number' min='0' class='form-control giua'></td>\n" +
                "<td><input type='number' min='0' class='form-control giua'></td>\n" +
                "<td><input type='number' min='0' class='form-control giua'></td>\n" +
                "<td class='giua'><button class='xoakinhphi'><i class='fas fa-times do'></i></button></td>\n" +
                "</tr>";
            $('#bangkinhphi').append(tr);
        });
        // Xem dữ liệu bảng thành viên đề tài
        //$('#xemthanhvien').click(function () {
        //var chuoi = $('#btv-ht-3 textarea').val().trim();
        //alert(chuoi);
        //});
        // lấy dữ liệu trong bảng tiến độ
        var table = $('#bangtiendo'),
            button = $('#nuttiendo');
        button.click(function() {
            var data = [];
            table.find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                $(this).find('td:not(:last)').each(function(i, col) {
                    cols.push($(this).text());
                });
                data.push(cols);
            });
            alert(data);
        });
        $('#taifile').on('click',function(){
            $('#filetailen').click();
        });

        // Tải file lên sever
        $('#filetailen').on('change',function () {
            //Lấy ra files
            var file_data = $('#filetailen').prop('files')[0];
            var type = file_data.type;
            var match = ["application/msword","image/jpeg","image/png","application/pdf","application/vnd.openxmlformats-officedocument.wordprocessingml.document", "application/x-zip-compressed"];
            //alert(file_data.type);
            if(type == match[0] || type == match[1] || type == match[2] || type == match[3] || type == match[4] || type == match[5]){
                //khởi tạo đối tượng form data
                var form_data = new FormData();
                //thêm files vào trong form data
                form_data.append('file', file_data);
                form_data.append('dt',<?php echo trim($iddt," ")?>);
                //sử dụng ajax post
                if (kiemtraketnoi()){
                    $.ajax({
                        url: 'ajax/ajax_chu_nhiem_up_file.php', // gửi đến file upload.php
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
                                thanhcong('File đã được tải lên');
                                $('#taifile').hide();
                                $('#quanlyupfile').append("<a id='filetaive' href='<?php echo $qlkh['HOSTGOC']."files/"; ?>"+mang.tenfile+"' class='btn btn-success btn-lg'><i class='fas fa-download faa-float animated' ></i>&ensp;Tải về tài liệu đính kèm</a>&ensp;<a id='xoafileup' class='btn btn-danger btn-lg' title='Xóa file đã tải lên' onclick='xoafiledatai()'><i class='far fa-times-circle  faa-burst animated' ></i>&ensp;Xóa file đã tải lên</a>");
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

        // Sửa đề tài
        $('#suadetai').click(function () {
            var tendetai = $('#tendetai').val().trim();
            var muctieudetai = $('#muctieudetai').val().trim();
            var noidungdetai = $('#noidungdetai').val().trim();
            var capdetai;
            var moisangtao = $('#moisangtaodetai').val().trim();
            var thuocchuongtrinh = $('#thuocchuongtrinhdetai').val().trim();
            var sucanthiet = $('#sucanthietdetai').val().trim();
            var tinhhinhnghiencuu = $('#tinhinhnghiencuudetai').val().trim();
            var nghiencuulienquan = $('#tinhinhnghiencuudetai').val().trim();
            var phuongphapkythuat = $('#phuongphapnghiencuudetai').val().trim();

            var kinhphingansach = ($.isNumeric($('#kinhphingansachdetai').val().trim())) ? $('#kinhphingansachdetai').val().trim() : '0';
            var kinhphinguonkhac = ($.isNumeric($('#kinhphinguonkhacdetai').val().trim())) ? $('#kinhphinguonkhacdetai').val().trim() : '0';
            
            var thangthuchien = $('#thangthuchiendetai').val().trim();
            var thangnambatdau = $('#thangnambatdaudetai').val().trim();
            var thangnamketthuc = $('#thangnamketthucdetai').val().trim();
            var ketqua = $('#ketquadetai').val().trim();
            if(!tendetai) {khongthanhcong('Chưa nhập tên đề tài');return;}
            /*if(!muctieudetai){khongthanhcong('Chưa nhập mục tiêu đề tài');return;}
            if(!noidungdetai){khongthanhcong('Nhập nội dung đề tài');return;}*/
            _cdt_.forEach(function(c){
              ($('#capdetai-'+c[0]).is(':checked')) ? capdetai = $('#capdetai-'+c[0]).val().trim():0;
            });
            if(!capdetai){
                khongthanhcong('Chưa chọn cấp đề tài');
                return;
            }
            /*
            if(!moisangtao){khongthanhcong('Chưa phân tích về tính mới, tính sáng tạo của đề tài');return;}
            if(!sucanthiet){khongthanhcong('Chưa phân tích sự cần thiết nghiên cứu');return;}
            if(!tinhhinhnghiencuu){khongthanhcong('Chưa nhập tình hình nghiên cứu thuộc lĩnh vực của đề tài');return;}
            if(!nghiencuulienquan){khongthanhcong('Chưa liệt kê danh mục các công trình nghiên cứu có liên quan');return;}
            if(!phuongphapkythuat){khongthanhcong('Chưa nhập cách tiếp cận, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng');return;}
            if(!kinhphingansach){khongthanhcong('Chưa nhập kinh phí dự kiến từ ngân sách');return;}
            if(!kinhphinguonkhac){khongthanhcong('Chưa nhập kinh phí dự kiến từ nguồn khác');return;}*/
            if (!thangthuchien){khongthanhcong('Chưa nhập số tháng thực hiện đề tài');return;}
            if(!thangnambatdau){khongthanhcong('Chưa nhập tháng năm bắt đầu đề tài');return;}
            if(!thangnamketthuc){khongthanhcong('Chưa nhập tháng năm kêt thúc đề tài');return;}
            /*if(!ketqua){khongthanhcong('Chưa nhập dự kiến kết quả đề tài và địa chỉ ứng dụng');return;}
            if(!$.isNumeric(kinhphingansach)){khongthanhcong('Kinh phí ngân sách không hợp lệ, kiểm tra lại');return;}
            if(!$.isNumeric(kinhphinguonkhac)){khongthanhcong('Kinh phí nguồn khác không hợp lệ, kiểm tra lại');return;} */
            // Xét loại hình nghiên cứu
            var loaihinhnghiencuu = [];
            _lh_.forEach(function(c){
              ($('#loaihinh-'+c[0]).is(':checked'))?loaihinhnghiencuu.push(c[1].trim()):0;
            });
            if(jQuery.isEmptyObject(loaihinhnghiencuu)){
                khongthanhcong('Chưa chọn loại hình nghiên cứu');
                return;
            }
            // Xét lĩnh vực khoa học
            var linhvuckhoahoc = [];
            _lv_.forEach(function(c){
              ($('#linhvuc-'+c[0]).is(':checked'))?linhvuckhoahoc.push(c[1].trim()):0;
            });
            if(jQuery.isEmptyObject(linhvuckhoahoc)){
                khongthanhcong('Chưa chọn lĩnh vực khoa học');
                return;
            }
            // Xét thành viên tham gia đề tài
            //xóa hàng rỗng
            var btv = [];
            var demdongtv = 1;
            var demdongdungtv = 0;
            $('#bangthanhvien').find('tr:not(:first)').each(function(i, row) {
              var cols = [];
              $(this).find('td:not(:last) textarea, select').each(function(i, col) {
                  cols.push($(this).val());
              });
              // Xóa dòng thành viên chưa điền
              if (demdongtv > 2 && cols[0]=='' && cols[1]=='' && cols[2]==''){
                  $(this).remove();
                  demdongdungtv--;
              }
              demdongtv++;demdongdungtv++;
            });
            $('#bangthanhvien').find('tr:not(:first)').each(function(i, row) {
              var cols = [];
              $(this).find('td:not(:last) textarea, select').each(function(i, col) {
                  cols.push($(this).val());
              });
              btv.push(cols);
            });
            // Các thành viên còn lại
            var thanhviendetai = []; // mảng 2 chiều
            if (btv[0][0]=='' || btv[0][1]=='') {
            khongthanhcong('Vui lòng điền đầy đủ thông tin thành viên của đề tài');
            return;
            }
            thanhviendetai.push(btv[0]);
            for(var i = 2;i<demdongdungtv;i++){
              if(btv[i][0]=='' || btv[i][1] == ''){
                  khongthanhcong('Vui lòng điền đầy đủ thông tin thành viên của đề tài');
                  return;
              }
              thanhviendetai.push(btv[i]);
            }
            // Xét các tổ chức tham gia
            var  btc = [];
            var demdongdungtc = 0;
            // Xóa dòng tổ chức chưa điền
            $('#bangtochuc').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                $(this).find('td:not(:last) input, textarea').each(function(i, col) {
                    cols.push($(this).val());
                });
                if (cols[0]=='' && cols[1]=='' && cols[2]==''){
                    $(this).remove();
                    demdongdungtc--;
                }
                demdongdungtc++;
            });

            $('#bangtochuc').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                $(this).find('td:not(:last) input, textarea').each(function(i, col) {
                    cols.push($(this).val());
                });
                btc.push(cols);
            }); // lưu vào btc[[]];
            //  Xét dự kiến tiến độ
            var  btd = [];
            var demdongdungtd = 0;
            // Xóa dòng tổ chức chưa điền
            $('#bangtiendo').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                $(this).find('td:not(:last) input, textarea').each(function(i, col) {
                    cols.push($(this).val());
                });
                if (cols[0]=='' && cols[1]=='' && cols[2]=='' && cols[3]==''){
                    $(this).remove();
                    demdongdungtd--;
                }
                demdongdungtd++;
            });

            $('#bangtiendo').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                $(this).find('td:not(:last) input, textarea').each(function(i, col) {
                    cols.push($(this).val());
                });
                btd.push(cols);
            }); // lưu vào btd[[]];
            for(var i = 0;i<demdongdungtd;i++){
                if(btd[i][0]=='' || btd[i][1] == '' || btd[i][2] == '' || btd[i][3] == ''){
                    khongthanhcong('Vui lòng điền đầy đủ thông tin dự kiến tiến độ của đề tài');
                    return;
                }
            }
            //////////////////////////////////////////////////
            //  Xét dự kiến tiến độ
            //////////////////////////////////////////////////
            //  Xét kinh phí
            // Kiểm tra kết nối internet
            if (kiemtraketnoi()) {
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_dieu_chinh_de_tai.php',
                    type: 'POST',
                    data: {
                        tendetai: tendetai,
                        muctieu: muctieudetai,
                        noidung: noidungdetai,
                        cap: capdetai,
                        moisangtao: moisangtao,
                        thuocchuongtrinh: thuocchuongtrinh,
                        sucanthiet: sucanthiet,
                        tinhhinhnghiencuu: tinhhinhnghiencuu,
                        nghiencuulienquan: nghiencuulienquan,
                        phuongphapkythuat: phuongphapkythuat,
                        kinhphingansach: kinhphingansach,
                        kinhphinguonkhac: kinhphinguonkhac,
                        thangthuchien: thangthuchien,
                        thangnambatdau: thangnambatdau,
                        thangnamketthuc: thangnamketthuc,
                        ketqua: ketqua,
                        loaihinhnghiencuu: loaihinhnghiencuu,
                        linhvuckhoahoc: linhvuckhoahoc,
                        thanhvien: thanhviendetai,
                        tochucthamgia: btc,
                        tiendodukien: btd,
                        kinhphichitiet: bkp,
                        iddt: '<?php echo $iddt; ?>'
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        $('body').append(data);
                    },
                    error: function () {
                        khongthanhcong('Sửa không thành công');
                    }
                });
            } else canhbao('Không có kết nối internet');
        });
        _data_.forEach(function(data){
          if (data[0]==$('#chonchunhiem').val()) {
            var td=""; _ndtd_.forEach(function(d){if (d[0]==$('#chonchunhiem').val()) {td = d[1];}});
            var dv=""; _nddv_.forEach(function(d){if (d[0]==$('#chonchunhiem').val()) {dv = d[1];}});
            $('#chonchunhiem').parent().parent('td').parent('tr').find('td:nth-child(2) textarea').val("- "+td+"\n- "+dv+"\n- "+data[3]);
          }
        });
    });
    // xóa file đã tải CHƯA DUYỆT
    function xoafiledatai() {
        if(kiemtraketnoi()){
            $('#taifile').show();
            $('#xoafileup').remove();
            $('#filetaive').remove();
            // ajax
            $.ajax({
                url : "ajax/ajax_chu_nhiem_xoa_file.php",
                type : "post",
                dataType:"text",
                data : {
                    file: $('#tenfiledaup').val(),
                    dt: <?php echo trim($iddt," ")?>
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
    function chonthanhvien(t){
        _data_.forEach(function(data){
          if (data[0]==t.value) {
            var td=""; _ndtd_.forEach(function(d){if (d[0]==t.value) {td = d[1];}});
            var dv=""; _nddv_.forEach(function(d){if (d[0]==t.value) {dv = d[1];}});
            $(t).parent().parent('td').parent('tr').find('td:nth-child(2) textarea').val("- "+td+"\n- "+dv+"\n- "+data[3]);
            return;
          }
        });
    }
</script>