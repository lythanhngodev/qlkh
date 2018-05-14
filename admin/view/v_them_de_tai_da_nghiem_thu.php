<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<script type="text/javascript">
  var _data_ = <?php echo json_encode($rnd); ?>;
  var _cdt_ = <?php echo json_encode($rcdt); ?>;
  var _lv_ = <?php echo json_encode($rlv); ?>;
  var _lh_ = <?php echo json_encode($rlh); ?>;
  var _nddv_ = <?php echo json_encode($rnd_dv); ?>;
  var _ndtd_ = <?php echo json_encode($rnd_td); ?>;
</script>
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
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-thoi-gian-thuc-hien" aria-selected="false">Thời gian thực hiện</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-du-kien-tien-do" aria-selected="false">Dự kiến tiến độ</a>
                    <a class='nav-item nav-link' data-toggle='tab' href='#nav-bao-cao-tien-do' aria-selected='false'>Báo cáo tiến độ</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-kinh-phi" aria-selected="false">Kinh phí</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-xet-duyet" aria-selected="false">Xét duyệt</a>
                    <a class='nav-item nav-link' data-toggle='tab' href='#nav-nghiem-thu' aria-selected='false'>Nghiệm thu</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-tai-lieu-dinh-kem" aria-selected="false">TL đính kèm</a>
                    <!--<a class="nav-item nav-link" data-toggle="tab" href="#nav-tai-lieu-dinh-kem" aria-selected="false">TL đính kèm</a>-->
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <!-- THÔNG TIN ChUNG -->
              <div class="tab-pane show active" id="nav-thong-tin-chung" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="col-md-12">
                  <br>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <div class="form-group col-md-4" style="margin: 0;float: left;">
                        <label for="category" class="font-weight-bold" >Mã đề tài (<span class="text-danger">*</span>)</label>
                        <input type="text" class="form-control" id="madetai" value="">
                      </div>
                      <div class="form-group col-md-4" style="margin: 0;float: left;">
                        <label for="category" class="font-weight-bold" >Điểm đề tài (<span class="text-danger">*</span>)</label>
                        <input type="number" class="form-control" id="diemdetai" value="">
                      </div>
                      <div class="form-group col-md-4" style="margin: 0;float: left;">
                        <label for="category" class="font-weight-bold">Ngày nghiệm thu (<span class="text-danger">*</span>)</label>
                        <input type="date" class="form-control" id="ngaynghiemthu" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="category" class="font-weight-bold" >Tên đề tài (<span class="text-danger">*</span>)</label>
                    <input type="text" class="form-control" id="tendetai">
                  </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="category" class="font-weight-bold" >Mục tiêu đề tài (<span class="text-danger">*</span>)</label>
                        <textarea class="form-control" id="muctieudetai" rows="5"></textarea>
                        <small id="emailHelp" class="form-text text-muted">Ghi mục tiêu tổng quát cần đạt ở mức độ cụ thể hơn tên đề tài và mục tiêu chi tiết nhưng không diễn giải quá cụ thể thay cho nội dung cần thực hiện của đề tài</small>
                      </div>
                      <div class="col-md-12"><hr></div>
                      <div class="form-group col-md-4">
                        <label for="category" class="font-weight-bold" >Cấp đề tài</label>
                          <hr>
                          <?php while ($row = mysqli_fetch_assoc($cdt)) { ?>
                          <input type="radio" name="choncapdetai" id="capdetai-<?php echo $row['IDC'] ?>" value="<?php echo $row['TENCAP'] ?>" > <?php echo $row['TENCAP'] ?> <br>
                          <?php } ?>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="category" class="font-weight-bold" >Loại hình nghiên cứu</label>
                        <hr>
                        <?php while ($row = mysqli_fetch_assoc($lh)) { ?>
                        <input type="checkbox" id="loaihinh-<?php echo $row['IDLH'] ?>" value="<?php echo $row['TENLOAI'] ?>" > <?php echo $row['TENLOAI'] ?> <br>
                        <?php } ?>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="category" class="font-weight-bold" >Lĩnh vực khoa học</label>
                          <hr>
                          <?php while ($row = mysqli_fetch_assoc($lv)) { ?>
                          <input type="checkbox" id="linhvuc-<?php echo $row['IDLV'] ?>" value="<?php echo $row['TENLINHVUC'] ?>"> <?php echo $row['TENLINHVUC'] ?> <br>
                          <?php } ?>
                      </div>
                    <div class="col-md-12"><hr></div>
                      <div class="form-group col-md-4">
                        <label for="category" class="font-weight-bold" >Kinh phí dự kiến từ ngân sách (<span class="text-danger">*</span>)</label>
                        <input type="number" min="0" class="form-control giua" id="kinhphingansachdetai">
                        <small id="emailHelp" class="form-text text-muted">Từ ngân sách <strong>sự nghiệp KH&amp;CN của Trường</strong></small>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="category" class="font-weight-bold" >Kinh phí dự kiến từ nguồn khác (<span class="text-danger">*</span>)</label>
                        <input type="number" min="0" class="form-control giua" id="kinhphinguonkhacdetai">
                        <small id="emailHelp" class="form-text text-muted">Từ các <strong>nguồn khác</strong></small>
                      </div>
                      <div class="col-md-12"><hr></div>
                      <div class="form-group col-md-12">
                        <label for="category" class="font-weight-bold" >Thuộc chương trình (nếu có)</label>
                        <textarea class="form-control" id="thuocchuongtrinhdetai" rows="5"></textarea>
                      </div>
                      <div class="col-md-12"><hr></div>
                      <div class="form-group col-md-12">
                        <label for="category" class="font-weight-bold" >Dự kiến kết quả đề tài và địa chỉ ứng dụng</label>
                        <textarea class="form-control" id="ketquadetai" rows="8"></textarea><br>
                      </div>
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
                            <tr>
                              <td>1 - Chủ nhiệm đề tài:<br>
                                  <select id="chonchunhiem" class='form-control' onchange="chonthanhvien(this)">
                                  </select>
                              </td>
                              <td><textarea name="" class="form-control" rows="4" readonly></textarea></td>
                              <td><textarea class="form-control" rows="4"></textarea></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td colspan="4">Thành viên tham gia:</td>
                            </tr>
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
                    <textarea class="form-control" id="tinhinhnghiencuudetai" rows="5"></textarea>
                  </div>

                  <br>
                  <div class="col-md-12"><label for="category" class="font-weight-bold" >b)Liệt kê danh mục các công trình nghiên cứu có liên quan</label></div>
                  <div class="form-group col-md-12">
                    <p id="emailHelp" class="form-text text-muted">Ghi tên đầy đủ tài liệu (bài báo, ấn phẩm, ... ) đã tham khảo theo thứ tự. Chú ý, chỉ ghi những tài liệu (có thể của các tác giả khác trong và ngoài nước và / hoặc của bản thân tác giả) liên quan đến đề tài nghiên cứu, tránh ghi các tài liệu không liên quan đến nội dung nghiên cứu của đề tài.  Trường hợp có quá nhiều tài liệu liên quan, chỉ nêu những công trình chính mà tác giả tâm đắc nhất.</p>
                    <textarea class="form-control" id="congtrinhnghiencuudetai" rows="5"></textarea>
                  </div>

                  <br>

                  <div class="col-md-12"><label for="category" class="font-weight-bold" >c) Phân tích sự cần thiết nghiên cứu</label></div>
                  <div class="form-group col-md-12">
                    <p id="emailHelp" class="form-text text-muted">Rút ra kết luận cần thiết để trả lời câu hỏi về nhu cầu và tính bức xúc đối với đề tài nghiên cứu.</p>
                    <textarea class="form-control" id="sucanthietdetai" rows="5"></textarea>
                  </div>

                  <br>

                  <div class="col-md-12"><label for="category" class="font-weight-bold">d) Phân tích về tính mới, tính sáng tạo của đề tài</label></div>
                  <div class="form-group col-md-12">
                    <textarea class="form-control" id="moisangtaodetai" rows="5"></textarea>
                  </div>

                  <br>
                  <hr>
                  <br>

                  <div class="col-md-12"><label for="category" class="font-weight-bold">Cách tiếp cận, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng</label></div>

                  <div class="form-group col-md-12">
                    <p id="emailHelp" class="form-text text-muted">Luận cứ rõ cách tiếp cận - thiết kế nghiên cứu, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng - so sánh với các phương thức giải quyết tương tự khác, nêu được tính mới, tính độc đáo, tính sáng tạo của đề tài.</p>
                    <textarea class="form-control" id="phuongphapnghiencuudetai" rows="5"></textarea>
                  </div>

                  <br>

                  <div class="col-md-12"><label for="category" class="font-weight-bold">Nội dung nghiên cứu</label></div>

                  <div class="form-group col-md-12">
                    <p id="emailHelp" class="form-text text-muted">Liệt kê và mô tả những nội dung cần nghiên cứu, nêu bật được những nội dung mới và phù hợp để giải quyết vấn đề đặt ra, kể cả những dự kiến hoạt động phối hợp để chuyển
giao kết quả nghiên cứu đến người sử dụng. Phải nêu được những nội dung, giải pháp cụ thể cần thực hiện để đạt mục tiêu đề ra. So sánh với các nội dung, giải pháp đã giải quyết của các tác giả trong và ngoài nước để nêu được tính mới, tính độc đáo, tính sáng tạo của đề tài về nội dung nghiên cứu.</p>
                    <textarea class="form-control" id="noidungdetai" rows="5"></textarea>
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
                                      <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                          <th rowspan="2" class="giua">Các khoản chi</th>
                                          <th rowspan="2" class="giua">Từ nguồn NSNN</th>
                                          <th colspan="2" class="giua">Nguồn khác</th>
                                          <th rowspan="2" class="giua">Cộng</th>
                                          <th rowspan="2" style="width: 50px;" class="giua">Xóa</th>
                                      </tr>
                                      <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                          <th class="giua">Tự có</th>
                                          <th class="giua">Liên kết</th>
                                      </tr>
                                      <tr>
                                          <td><input type="text" value="Chi thuê khoán chuyên môn" class="form-control" readonly></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td class='giua'></td>
                                      </tr>
                                      <tr>
                                          <td><input type="text" value="Chi mua nguyên vật liệu" class="form-control" readonly></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td class='giua'></td>
                                      </tr>
                                      <tr>
                                          <td><input type="text" value="Chi sửa chữa, mua sắm TSCĐ" class="form-control" readonly></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td><input type='number' min='0' class='form-control giua' value="0"></td>
                                          <td class='giua'></td>
                                      </tr>
                                  </table>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-2">
                                  <button class="btn btn-default" id="themkinhphi">Thêm khoản kinh phí &ensp;<i class="fas fa-long-arrow-alt-right"></i></button>
                              </div>
                          </div>
                      </div>
                      <br>
                  </div>
                <!-- XÉT DUYỆT ĐỀ TÀI -->
                <div class="tab-pane" id="nav-xet-duyet" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <div class="tab-pane" id="nav-phan-cong-btc" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <div class="col-md-12">
                          <div class="form-group row">
                              <div class="col-md-12">
                                  <br>
                                  <label class="font-weight-bold col-md-12">Hội đồng ban tổ chức</label>
                                  <hr>
                              </div>

                              <div class="col-md-8">
                                  <label class="font-weight-bold col-md-12">Thành viên BTC đã chọn</label>
                                  <table id="bangbtc" class="table table-bordered table-hover" style="background: #fff;">
                                      <tr style="background: #009688;color: #fff;">
                                          <th class="giua">Tên thành viên</th>
                                          <th class="an">IDTV</th>
                                          <th>Vai trò</th>
                                          <th>File xét duyệt(nếu có)</th>
                                          <th class="giua" style="width: 50px;">Xóa</th>
                                      </tr>
                                  </table>
                              </div>
                              <div class="col-md-4">
                                  <label class="font-weight-bold col-md-12">Danh sách thành viên</label>
                                  <select id="chontvbtc" class="form-control select-chon">
                                  </select>
                              </div>

                              <div class="col-md-12">
                                  <label class="font-weight-bold col-md-12">Hội đồng xét duyệt đề tài</label>
                                  <hr>
                              </div>
                              <div class="col-md-8">
                                  <label class="font-weight-bold col-md-12">Thành viên xét duyệt đã chọn</label>
                                  <table id="bangtvdg" class="table table-bordered table-hover" style="background: #fff;">
                                      <tr style="background: #009688;color: #fff;">
                                          <th class="giua">Tên thành viên</th>
                                          <th class="an">IDTV</th>
                                          <th>Vai trò</th>
                                          <th>File xét duyệt(nếu có)</th>
                                          <th class="giua" style="width: 50px;">Xóa</th>
                                      </tr>
                                  </table>
                              </div>
                              <div class="col-md-4">
                                  <label class="font-weight-bold col-md-12">Danh sách thành viên</label>
                                  <select id="chontvdg" class="form-control select-chon"></select>
                              </div>
                          </div>
                      </div>
                  </div>
                  <br>
                </div>
                <!-- NGHIỆM THU -->
                  <div class="tab-pane" id="nav-nghiem-thu" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <br>
                                <label class="font-weight-bold col-md-12">Hội đồng nghiệm thu đề tài</label>
                                <hr>
                            </div>
                            <div class="col-md-8">
                                <label class="font-weight-bold col-md-12">Thành viên nghiệm thu đã chọn</label>
                                <table id="bangtvnt" class="table table-bordered table-hover" style="background: #fff;">
                                    <tr style="background: #009688;color: #fff;">
                                        <th class="giua">Tên thành viên</th>
                                        <th class="an">IDTV</th>
                                        <th>Ý kiến</th>
                                        <th>File nghiệm thu(nếu có)</th>
                                        <th class="giua" style="width: 50px;">Xóa</th>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold col-md-12">Danh sách thành viên</label>
                                <select id="chontvnt" class="form-control select-chon">
                                </select>
                            </div>
                        </div>
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
                                          <th>Tên và địa chỉ của tổ chức</th>
                                          <th style="width: 450px;">Nội dung tham gia</th>
                                          <th style="width: 250px;">Dự kiến kinh phí</th>
                                          <th style="width: 50px;">Xóa</th>
                                      </tr>
                                  </table>
                              </div>
                              <div class="col-md-2"><button class="btn btn-default" id="themtochuc">Thêm tổ chức &ensp;<i class="fas fa-long-arrow-alt-right"></i></button></div>
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
                                  <input id="thangthuchiendetai" type="number" min="1" max="120" class="form-control" value="">
                              </div>
                              <div class="form-group col-md-2">
                                  <label for="category" class="font-weight-bold" >Tháng/Năm bắt đầu (<span class="text-danger">*</span>)</label>
                                  <input class="form-control" type="month" name="" id="thangnambatdaudetai">
                              </div>

                              <div class="form-group col-md-2">
                                  <label for="category" class="font-weight-bold" >Tháng/Năm kết thúc (<span class="text-danger">*</span>)</label>
                                  <input class="form-control" type="month" name="" id="thangnamketthucdetai">
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
                            <tr style="background: #0275d8;color:  #fff; text-align: center;">
                              <th>Công việc</th>
                              <th>Sản phẩm đạt được</th>
                              <th style="width: 150px;">Thời gian bắt đầu</th>
                              <th style="width: 150px;">Thời gian kết thúc</th>
                              <th style="width: 50px;">Xóa</th>
                            </tr>
                        </table>
                      </div>
                        <div class="col-md-2"><button class="btn btn-default" id="themtiendo">Thêm tiến độ dự kiến&ensp;<i class="fas fa-long-arrow-alt-right"></i></button></div>
                    </div>
                  </div>
                  <br>
                </div>
                <!-- BÁO CÁO TIẾN ĐỘ -->
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
                                </table>
                            </div>
                            <div class="col-md-2"><button class="btn btn-default" id="thembctiendo">Thêm tiến độ &ensp;<i class="fas fa-long-arrow-alt-right"></i></button></div>
                        </div>
                    </div>
                    <br>
                </div>
                <!-- TÀI LIỆU ĐÍNH KÈM -->
                <div class="tab-pane" id="nav-tai-lieu-dinh-kem" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <br>
                  <div class="col-md-12 giua" id="tldk">
                      <a id='tailentailieu' class='btn btn-success btn-lg'><i class='fas fa-upload faa-float animated' ></i>&ensp;Tải lên tài liệu đề tài</a>
                      <input type="file" hidden="hidden" id="filetl" onchange="uptl(this)">
                      <input type='text' hidden='hidden' id='filetailieu'>
                  </div>
                  <br>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div>
              <button type="button" class="btn btn-primary" id="themdetai"><i class="fas fa-save"></i>&nbsp;&nbsp;Lưu đề tài & đợi xét duyệt</button>
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

<script type="text/javascript">var idduyet=0;
    for (var i = 0; i < _data_.length; i++)
        for (var j = 0; j< _data_[i].length; j++)
            (!_data_[i][j]) ? _data_[i][j] = '' : 1;
$(document).ready(function(){$('#themdetaidanghiemthu').addClass('active');$('.tieude').html('Thêm đề tài đã được nghiệm thu');var idnd = "<?php echo $idnd; ?>";var _option="<option value=''>Chọn thành viên</option>";_data_.forEach(function(d){_option+="<option value='"+d[0]+"'>"+d[1]+" "+d[2]+"</option>";});for (var i = 0; i < _data_.length; i++)for (var j = 0; j< _data_[i].length; j++)(!_data_[i][j])?_data_[i][j]='':1;var option="<option value=''>Chọn thành viên</option>";_data_.forEach(function(i){ (idnd==i[0])?option+="<option value='"+i[0]+"' selected>"+i[1]+" "+i[2]+"</option>" : option+="<option value='"+i[0]+"'>"+i[1]+" "+i[2]+"</option>"; });$('#chonchunhiem').append(option);$('#chonchunhiem').addClass('selectpicker');$('.selectpicker').selectpicker({ liveSearch: true });$('#bangtiendo').on('click','.xoatiendo',function(){$(this).parents('tr').remove();});$('#bangthanhvien').on('click','.xoathanhvien', function(){$(this).parents('tr').remove();});$('#bangtochuc').on('click','.xoatochuc',function(){$(this).parents('tr').remove();});$('#bangkinhphi').on('click','.xoakinhphi',function(){$(this).parents('tr').remove();});$('#bangbctiendo').on('click','.xoabctiendo',function(){$(this).parents('tr').remove();});$('#bangbtc').on('click','.xoabtc',function(){$(this).parents('tr').remove();});$('#bangtvdg').on('click','.xoatvdg',function(){$(this).parents('tr').remove();});$('#bangtvnt').on('click','.xoatvnt',function(){$(this).parents('tr').remove();});$('#themtochuc').click(function(){var tr="<tr><td><textarea rows='4' class='form-control'></textarea></td><td><textarea rows='4' class='form-control'></textarea></td><td><input type='number' min='0' class='form-control giua'></td><td><button class='xoatochuc'><i class='fas fa-times do'></i></button></td></tr>";$('#bangtochuc').append(tr);});$('#themtiendo').click(function(){var tr="<tr><td><textarea rows='4' class='form-control'></textarea></td><td><textarea rows='4' class='form-control'></textarea></td><td><input type='date' class='form-control'></td><td><input type='date' class='form-control'></td><td><button class='xoatiendo'><i class='fas fa-times do'></i></button></td></tr>";$('#bangtiendo').append(tr);});$('#thembctiendo').on('click',function(){$('#modal-them-bao-cao-tien-do').modal('show');});$('#thembctd').click(function(){if($('#cvdathuchien').val().trim()!=''&&$('#cvcanthuchien').val().trim()!=''){var tr="<tr><td><textarea rows='4' class='form-control'>"+$('#cvdathuchien').val().trim()+"</textarea></td><td><textarea rows='4' class='form-control'>"+$('#cvcanthuchien').val().trim()+"</textarea></td><td><textarea rows='4' class='form-control'>"+$('#cvdenghi').val()+"</textarea></td><td><input type='date' value='"+$('#cvngaybaocao').val()+"' class='form-control'></td><td><button class='xoabctiendo'><i class='fas fa-times do'></i></button></td></tr>";$('#bangbctiendo').append(tr);$('#modal-them-bao-cao-tien-do').find('textarea').val('');$('#modal-them-bao-cao-tien-do').modal('hide');}else khongthanhcong('Vui lòng điền đầy đủ các trường (*)');});$('#themkinhphi').click(function(){var tr="<tr><td><input type='text' class='form-control'></td><td><input type='number' min='0' class='form-control giua' value='0'></td><td><input type='number' min='0' class='form-control giua' value='0'></td><td><input type='number' min='0' class='form-control giua' value='0'></td><td><input type='number' min='0' class='form-control giua' value='0'></td><td class='giua'><button class='xoakinhphi'><i class='fas fa-times do'></i></button></td></tr>";$('#bangkinhphi').append(tr);});var stt_btv=1;$('#themthanhvien').click(function(){stt_btv=stt_btv+1;var tr = "<tr><td><select id='chon"+stt_btv+"' class='form-control' onchange='chonthanhvien(this)'>"+_option+"</select></td><td id='btv-tt-"+stt_btv+"'><textarea class='form-control' rows='4' readonly></textarea></td><td id='btv-cv-"+stt_btv+"'><textarea class='form-control' rows='4'></textarea></td><td class='giua'><button class='xoathanhvien'><i class='fas fa-times do'></i></button></td></tr>";$("#bangthanhvien").append(tr);$('#chon'+stt_btv).addClass('selectpicker');$('.selectpicker').selectpicker({liveSearch:true});});$('#chontvbtc,#chontvdg, #chontvnt').append(_option);$('#chonbtc').append(_option);$('.select-chon').addClass('selectpicker');$('.selectpicker').selectpicker({liveSearch:true});$('#tailentailieu').click(function(){$('#filetl').click();});
      $('#chontvbtc').change(function(){
          if($('#chontvbtc').val()!=''){
              var data = [];
              var sodong=0;
              $('#bangbtc').find('tr:not(:first)').each(function(i, row){
                  var cols = [], dr=0;
                  $(this).find('td:not(:last)').each(function(i, col){
                      if (dr==0||dr==1) cols.push($(this).text());
                      else if (dr==3) cols.push($(this).find('input').val());
                      else
                        cols.push($(this).find('textarea').val());
                      dr++;
                  });
                  sodong++;
                  data.push(cols);
              });
              var tontai = 0;
              for (var i = 0; i < data.length; i++) {
                  if ($(this).find('option:selected').val()==data[i][1]){tontai=1;break;};
              }
              if (tontai==0) {
                      //them tac gia vao danh sach
                      var tr = "<tr><td>"+$('#chontvbtc option:selected').text()+"</td><td class='an'>"+$(this).find('option:selected').val()+"</td><td><textarea class='form-control' rows='2'></textarea></td><td class='giua' id='duyet-"+idduyet+"'><a class='btn btn-success' onclick='upfileduyet(this)' id='taifilexong-"+idduyet+"'><i class='fas fa-upload'></i>&ensp;Tải lên file</a><input type='file' id='taifile-"+idduyet+"' onchange='tailen(this)' hidden><input type='text' hidden='hidden' id='fileduyet-"+idduyet+"'></td><td class='giua' style='width:50px;'><button class='xoabtc'><i class='fas fa-times do'></i></button></td></tr>";
                      $('#bangbtc').append(tr);
                      idduyet++;
              }
              else
                  khongthanhcong('Bạn đã chọn thành viên này rồi!');
          }
      });
      $('#chontvdg').change(function(){
          if($('#chontvdg').val()!=''){
              var data = [];
              var sodong=0;
              $('#bangtvdg').find('tr:not(:first)').each(function(i, row){
                  var cols = [], dr=0;
                  $(this).find('td:not(:last)').each(function(i, col){
                      if (dr==0||dr==1) cols.push($(this).text());
                      else if (dr==3) cols.push($(this).find('input').val());
                      else
                        cols.push($(this).find('textarea').val());
                      dr++;
                  });
                  sodong++;
                  data.push(cols);
              });
              var tontai = 0;
              for (var i = 0; i < data.length; i++) {
                  if ($(this).find('option:selected').val()==data[i][1]){tontai=1;break;};
              }
              if (tontai==0) {
                      //them tac gia vao danh sach
                      var tr = "<tr><td>"+$('#chontvdg option:selected').text()+"</td><td class='an'>"+$(this).find('option:selected').val()+"</td><td><textarea class='form-control' rows='2'></textarea></td><td class='giua' id='duyet-"+idduyet+"'><a class='btn btn-success' onclick='upfileduyet(this)' id='taifilexong-"+idduyet+"'><i class='fas fa-upload'></i>&ensp;Tải lên file</a><input type='file' id='taifile-"+idduyet+"' onchange='tailen(this)' hidden><input type='text' hidden='hidden' id='fileduyet-"+idduyet+"'></td><td class='giua' style='width:50px;'><button class='xoatvdg'><i class='fas fa-times do'></i></button></td></tr>";
                      $('#bangtvdg').append(tr);
                      idduyet++;
              }
              else
                  khongthanhcong('Bạn đã chọn thành viên này rồi!');
          }
      });
      $('#chontvnt').change(function(){
          if($('#chontvnt').val()!=''){
              var data = [];
              var sodong=0;
              $('#bangtvnt').find('tr:not(:first)').each(function(i, row){
                  var cols = [], dr=0;
                  $(this).find('td:not(:last)').each(function(i, col){
                      if (dr==0||dr==1) cols.push($(this).text());
                      else if (dr==3) cols.push($(this).find('input').val());
                      else
                        cols.push($(this).find('textarea').val());
                      dr++;
                  });
                  sodong++;
                  data.push(cols);
              });
              var tontai = 0;
              for (var i = 0; i < data.length; i++) {
                  if ($(this).find('option:selected').val()==data[i][1]){tontai=1;break;};
              }
              if (tontai==0) {
                      //them tac gia vao danh sach
                      var tr = "<tr><td>"+$('#chontvnt option:selected').text()+"</td><td class='an'>"+$(this).find('option:selected').val()+"</td><td><textarea class='form-control' rows='2'></textarea></td><td class='giua' id='duyet-"+idduyet+"'><a class='btn btn-success' onclick='upfileduyet(this)' id='taifilexong-"+idduyet+"'><i class='fas fa-upload'></i>&ensp;Tải lên file</a><input type='file' id='taifile-"+idduyet+"' onchange='tailen(this)' hidden><input type='text' hidden='hidden' id='fileduyet-"+idduyet+"'></td><td class='giua' style='width:50px;'><button class='xoatvnt'><i class='fas fa-times do'></i></button></td></tr>";
                      $('#bangtvnt').append(tr);
                      idduyet++;
              }
              else
                  khongthanhcong('Bạn đã chọn thành viên này rồi!');
          }
      });
    // Thêm đề tài
      $('#themdetai').click(function(){
        var madetai = $('#madetai').val().trim();
        var diemdetai = $('#diemdetai').val().trim();
        var ngaynghiemthu = $('#ngaynghiemthu').val().trim();
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
        if(!madetai){
            khongthanhcong('Chưa nhập mã đề tài');
            return;
        }
        if(!diemdetai){
            khongthanhcong('Chưa nhập điểm đề tài');
            return;
        }
        if(!ngaynghiemthu){
            khongthanhcong('Chưa nhập ngày nghiệm thu');
            return;
        }
        if(!tendetai) {
            khongthanhcong('Chưa nhập tên đề tài');
            return;
        }
        /*if(!muctieudetai){
            khongthanhcong('Chưa nhập mục tiêu đề tài');
            return;
        }
        if(!noidungdetai){
            khongthanhcong('Nhập nội dung đề tài');
            return;
        }*/
        _cdt_.forEach(function(c){
          ($('#capdetai-'+c[0]).is(':checked'))?capdetai = $('#capdetai-'+c[0]).val().trim():0;
        });
        /*if(!moisangtao){
            khongthanhcong('Chưa phân tích về tính mới, tính sáng tạo của đề tài');
            return;
        }
        if(!sucanthiet){
            khongthanhcong('Chưa phân tích sự cần thiết nghiên cứu');
            return;
        }
        if(!tinhhinhnghiencuu){
            khongthanhcong('Chưa nhập tình hình nghiên cứu thuộc lĩnh vực của đề tài');
            return;
        }
        if(!nghiencuulienquan){
            khongthanhcong('Chưa liệt kê danh mục các công trình nghiên cứu có liên quan');
            return;
        }
        if(!phuongphapkythuat){
            khongthanhcong('Chưa nhập cách tiếp cận, phương pháp nghiên cứu, kỹ thuật sẽ sử dụng');
            return;
        }
        if(!kinhphingansach){
            khongthanhcong('Chưa nhập kinh phí dự kiến từ ngân sách');
            return;
        }
        if(!kinhphinguonkhac){
            khongthanhcong('Chưa nhập kinh phí dự kiến từ nguồn khác');
            return;
        }*/
        if (!thangthuchien){
            khongthanhcong('Chưa nhập số tháng thực hiện đề tài');
            return;
        }
        if(!thangnambatdau){
            khongthanhcong('Chưa nhập tháng năm bắt đầu đề tài');
            return;
        }
        if(!thangnamketthuc){
            khongthanhcong('Chưa nhập tháng năm kêt thúc đề tài');
            return;
        }
        /*
        if(!ketqua){
            khongthanhcong('Chưa nhập dự kiến kết quả đề tài và địa chỉ ứng dụng');
            return;
        } 
        if(!$.isNumeric(kinhphingansach)){
          khongthanhcong('Kinh phí ngân sách không hợp lệ, kiểm tra lại');return;
        }
        if(!$.isNumeric(kinhphinguonkhac)){
          khongthanhcong('Kinh phí nguồn khác không hợp lệ, kiểm tra lại');return;
        } */ 
        var loaihinhnghiencuu = [];
        _lh_.forEach(function(c){
          ($('#loaihinh-'+c[0]).is(':checked'))?loaihinhnghiencuu.push(c[1].trim()):0;
        });
        if(jQuery.isEmptyObject(loaihinhnghiencuu)){
            khongthanhcong('Chưa chọn loại hình nghiên cứu');
            return;
        }
        var linhvuckhoahoc = [];
        _lv_.forEach(function(c){
          ($('#linhvuc-'+c[0]).is(':checked'))?linhvuckhoahoc.push(c[1].trim()):0;
        });
        if(jQuery.isEmptyObject(linhvuckhoahoc)){
              khongthanhcong('Chưa chọn lĩnh vực khoa học');
              return;
        }
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
          var thanhviendetai = [];
          if (btv[0][0]=='' || btv[0][1]=='') {
            khongthanhcong('Vui lòng điền đầy đủ thông tin thành viên của đề tài');
            return;
          }
          thanhviendetai.push(btv[0]);
          for(var i = 2;i<demdongdungtv;i++){
              if(btv[i][0]=='' || btv[i][1] == '' || btv[i][2] == ''){
                  khongthanhcong('Vui lòng điền đầy đủ thông tin thành viên của đề tài');
                  return;
              }
              thanhviendetai.push(btv[i]);
          }
          var  btc = [];
          var demdongdungtc = 0;
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
          });
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
          });
          for(var i = 0;i<demdongdungtd;i++){
              if(btd[i][0]=='' || btd[i][1] == '' || btd[i][2] == '' || btd[i][3] == ''){
                  khongthanhcong('Vui lòng điền đầy đủ thông tin dự kiến tiến độ của đề tài');
                  return;
              }
          }
          // Xét dự kiến tiến độ
          var  bctd = [];
          var demongdungbctd = 0;
          // Xóa dòng tổ chức chưa điền
          $('#bangbctiendo').find('tr:not(:first)').each(function (i, row) {
              var cols = [];
              $(this).find('td:not(:last) input, textarea').each(function (i, col) {
                  cols.push($(this).val());
              });
              if (cols[0]==''&&cols[1]==''&&cols[2]==''&&cols[3]=='') {
                  $(this).remove();
                  demongdungbctd--;
              }
              demongdungbctd++;
          });

          $('#bangbctiendo').find('tr:not(:first)').each(function (i, row) {
              var cols = [];
              $(this).find('td:not(:last) input, textarea').each(function (i, col) {
                  cols.push($(this).val().trim());
              });
              bctd.push(cols);
          }); // lưu vào bctd[[]];
          var  bkp = [];
          var demdongdungkp = 0;
          var demdong2trdau = 0;
          $('#bangkinhphi').find('tr:not(:first)').each(function(i, row) {
              var cols = [];
              if(demdong2trdau>0){
                  var dem=0;
                  $(this).find('td:not(:last) input').each(function(i, col) {
                    if(dem!=0)
                      if($.isNumeric($(this).val())) cols.push($(this).val()); else {khongthanhcong('Kinh phí nhập chưa hợp lệ, kiểm tra lại');return;}
                    else cols.push($(this).val());
                    dem++;
                  });
                  if (cols[0]=='' && cols[1]=='' && cols[2]=='' && cols[3]==''){
                      $(this).remove();
                      demdongdungkp--;
                  }
                  demdongdungkp++;
              }
              demdong2trdau++;
          });
          demdong2trdau = 0;
          $('#bangkinhphi').find('tr:not(:first)').each(function(i, row) {
              var cols = [];
              if(demdong2trdau>0){
                  $(this).find('td:not(:last) input').each(function(i, col) {
                      cols.push($(this).val());
                  });
                  bkp.push(cols);
              }
              demdong2trdau++;
          });
          // Xet duyet de tai
          // xử lý thành viên BTC duyệt đề tài
          var dgbtc = [];
          $('#bangbtc').find('tr:not(:first)').each(function(i, row) {
              var cols = [];
              var dem = 1;
              $(this).find('td:not(:last)').each(function(i, col) {
                  if(dem == 3) cols.push($(this).find('textarea').val());
                  else if(dem == 4) cols.push($(this).find('input[type="text"]').val().trim());
                  else{
                      cols.push($(this).text().trim());
                  }
                  dem++;
              });
              dgbtc.push(cols);
          });
          if(jQuery.isEmptyObject(dgbtc)){
              khongthanhcong('Chưa nhập ban tổ chức xét duyệt đề tài');
              return;
          }
          var dgtv = [];
          $('#bangtvdg').find('tr:not(:first)').each(function(i, row){
              var cols = [];
              var dem = 1;
              $(this).find('td:not(:last)').each(function(i, col){
                  if(dem == 3) cols.push($(this).find('textarea').val());
                  else if(dem == 4) cols.push($(this).find('input[type="text"]').val().trim());
                  else cols.push($(this).text().trim());
                  dem++;
              });
              dgtv.push(cols);
          });
          if(jQuery.isEmptyObject(dgtv)){
              khongthanhcong('Chưa nhập thành viên xét duyệt');
              return;
          }
          var nttv = [];
          $('#bangtvnt').find('tr:not(:first)').each(function(i, row) {
              var cols = [];
              var dem = 1;
              $(this).find('td:not(:last)').each(function(i, col){
                  if(dem == 3) cols.push($(this).find('textarea').val().trim());
                  else if(dem == 4) cols.push($(this).find('input[type="text"]').val().trim());
                  else cols.push($(this).text().trim());
                  dem++;
              });
              nttv.push(cols);
          });
          if(jQuery.isEmptyObject(nttv)){
              khongthanhcong('Chưa nhập thành viên nghiệm thu');
              return;
          }
          // Kiểm tra kết nối internet
          if (kiemtraketnoi()) {
              // Ajax
              $.ajax({
                  url: 'ajax/ajax_them_de_tai_da_nghiem_thu.php',
                  type: 'POST',
                  data: { diemdetai:diemdetai,madetai:madetai,ngaynghiemthu:ngaynghiemthu,tendetai: tendetai,muctieu: muctieudetai,noidung: noidungdetai,cap: capdetai,moisangtao: moisangtao,thuocchuongtrinh: thuocchuongtrinh,sucanthiet: sucanthiet,tinhhinhnghiencuu: tinhhinhnghiencuu,nghiencuulienquan: nghiencuulienquan,phuongphapkythuat: phuongphapkythuat,kinhphingansach: kinhphingansach,kinhphinguonkhac: kinhphinguonkhac,thangthuchien: thangthuchien,thangnambatdau: thangnambatdau,thangnamketthuc: thangnamketthuc,ketqua: ketqua,loaihinhnghiencuu: loaihinhnghiencuu,linhvuckhoahoc: linhvuckhoahoc,thanhvien: thanhviendetai,file: $('#filetailieu').val().trim(),tochucthamgia: btc,tiendodukien: btd,baocaotiendo: bctd,dgbtc: dgbtc,dgtv: dgtv,nttv: nttv,kinhphichitiet: bkp },
                  beforeSend: function(){
                      canhbao('Đang xử lý dữ liệu');
                  },
                  success: function(data){
                      $('body').append(data);
                  },
                  error: function(){
                      khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                  }
              });
          } else canhbao('Không có kết nối internet');
      });
    _data_.forEach(function(data){
      if (data[0]==$('#chonchunhiem').val()) {
        var td=""; _ndtd_.forEach(function(d){if (d[0]==idnd) {td = d[1];}});
        var dv=""; _nddv_.forEach(function(d){if (d[0]==idnd) {dv = d[1];}});
        $('#chonchunhiem').parent().parent('td').parent('tr').find('td:nth-child(2) textarea').val("- "+td+"\n- "+dv+"\n- "+data[3]);
      }
    });
  });
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
  function upfileduyet(t){
    //alert($(t).parent('td').find('input').attr('id'));
    $(t).parent('td').find('input[type="file"]').click();
  }
  function tailen(t){
    //Lấy ra files
    var file_data = $(t).prop('files')[0];
    var type = file_data.type;
    var match = ["application/msword","image/jpeg","image/png","application/pdf","application/vnd.openxmlformats-officedocument.wordprocessingml.document", "application/x-zip-compressed"];
    var tid = $(t).attr('id');
    var idid =tid.substr(8,tid.length);
    //alert(file_data.type);
    if(type == match[0] || type == match[1] || type == match[2] || type == match[3] || type == match[4] || type == match[5]){
        //khởi tạo đối tượng form data
        var form_data = new FormData();
        //thêm files vào trong form data
        form_data.append('file', file_data);
        //sử dụng ajax post
        if (kiemtraketnoi()){
            $.ajax({
                url: 'ajax/ajax_up_file_da_nghiem_thu.php', // gửi đến file upload.php
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                type: 'post',
                data: form_data,
                success: function(data){
                    var mang = JSON.parse(data);
                    if(mang.trangthai==1){
                        thanhcong('File đã tải lên');
                        $('#taifilexong-'+idid).hide();
                        $('#duyet-'+idid).append("<a id='xoafileup-"+idid+"' class='btn btn-danger' title='Xóa file' onclick='xoafile(this)'><i class='far fa-times-circle' ></i>&ensp;Xóa file</a>");
                        $('#fileduyet-'+idid).val(mang.tenfile);
                    }
                    else if (mang.trangthai==0){
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
  };
  function uptl(t){
    //Lấy ra files
    var file_data = $(t).prop('files')[0];
    var type = file_data.type;
    var match = ["application/msword","image/jpeg","image/png","application/pdf","application/vnd.openxmlformats-officedocument.wordprocessingml.document", "application/x-zip-compressed"];
    //alert(file_data.type);
    if(type == match[0] || type == match[1] || type == match[2] || type == match[3] || type == match[4] || type == match[5]){
        //khởi tạo đối tượng form data
        var form_data = new FormData();
        //thêm files vào trong form data
        form_data.append('file', file_data);
        //sử dụng ajax post
        if (kiemtraketnoi()){
            $.ajax({
                url: 'ajax/ajax_up_file_da_nghiem_thu.php', // gửi đến file upload.php
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                type: 'post',
                data: form_data,
                success: function(data){
                    var mang = JSON.parse(data);
                    if(mang.trangthai==1){
                        thanhcong('File đã tải lên');
                        $('#tailentailieu').hide();
                        $('#tldk').append("<a id='xoafiletl' class='btn btn-danger btn-lg' title='Xóa file' onclick='xoafiletl(this)'><i class='far fa-times-circle' ></i>&ensp;Xóa file tài liệu</a>");
                        $('#filetailieu').val(mang.tenfile);
                    }
                    else if (mang.trangthai==0){
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
  };
    function xoafile(t){
      if(kiemtraketnoi()){
          var tid = $(t).attr('id');
          var idid = tid.substr(10,tid.length);
          $('#xoafileup-'+idid).remove();
          $('#taifilexong-'+idid).show();
          $.ajax({
              url : "ajax/ajax_xoa_file_da_nghiem_thu.php",
              type : "post",
              dataType:"text",
              data : {
                  file: $('#fileduyet-'+idid).val()
              },
              success : function (data){
                  $.notifyClose();
                  thanhcong(data);
                  $('#fileduyet-'+idid).val('');
              }
          });
      }
      else
          khongthanhcong("Hiện không có kết nối internet");
    };
    function xoafiletl(t){
      if(kiemtraketnoi()){
          $('#xoafiletl').remove();
          $('#tailentailieu').show();
          $.ajax({
              url : "ajax/ajax_xoa_file_da_nghiem_thu.php",
              type : "post",
              dataType:"text",
              data : {
                  file: $('#filetailieu').val()
              },
              success : function (data){
                  thanhcong(data);
                  $('#filetailieu').val('');
              }
          });
      }
      else
          khongthanhcong("Hiện không có kết nối internet");
    };
</script>