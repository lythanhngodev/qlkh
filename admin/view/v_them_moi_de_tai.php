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
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-du-kien-tien-do" aria-selected="false">Dự kiến tiến độ</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-kinh-phi" aria-selected="false">Kinh phí</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-ket-qua" aria-selected="false">Kết quả</a>
                    <!--<a class="nav-item nav-link" data-toggle="tab" href="#nav-tai-lieu-dinh-kem" aria-selected="false">TL đính kèm</a>-->
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <!-- THÔNG TIN ChUNG -->
              <div class="tab-pane show active" id="nav-thong-tin-chung" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="col-md-12">
                  <br>
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
                          <label for="category" class="font-weight-bold" >Tổng tháng thực hiện (<span class="text-danger">*</span>)</label>
                          <input id="thangthuchiendetai" type="number" min="1" max="120" class="form-control" value="" onchange="return chonsothang(this);" onkeyup="return chonsothang(this);">
                      </div>
                      <div class="form-group col-md-4">
                          <label for="category" class="font-weight-bold" >Tháng/Năm bắt đầu (<span class="text-danger">*</span>)</label>
                          <input class="form-control" type="month" name="" id="thangnambatdaudetai" onchange="return chonthangbatdau(this);" onkeyup="return chonthangbatdau(this);">
                      </div>

                      <div class="form-group col-md-4">
                          <label for="category" class="font-weight-bold" >Tháng/Năm kết thúc (<span class="text-danger">*</span>)</label>
                          <input class="form-control" type="month" name="" id="thangnamketthucdetai" readonly="readonly">
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
                      <br><br>
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
                  <div class="form-group col-md-12">
                    <label for="category" class="font-weight-bold" >Thuộc chương trình (nếu có)</label>
                    <textarea class="form-control" id="thuocchuongtrinhdetai" rows="5"></textarea>
                  </div>
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
                                  <div class="row">
                                      <div class="col-md-12">
                                          <button class="btn btn-warning btn-sm" id="nhap-kinh-phi"><i class="far fa-file-excel"></i>&nbsp;&nbsp;Nhập file excel</button><br>
                                      Nếu chưa có mẫu nhập Excel vui lòng <a href="../files/02062018112112-du-tru-kinh-phi.xlsx"><b><i><u>tải xuống.</u></i></b></a>
                                          <br><br>
                                          <input type="file" name="" id="filedl" hidden="hidden" accept="application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                                      </div>
                                  </div>
                                  <div id="bangdanhsach">
                                    
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
                    <label for="category" class="font-weight-bold" >Dự kiến kết quả đề tài và địa chỉ ứng dụng</label>
                    <textarea class="form-control" id="ketquadetai" rows="8"></textarea>
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

                <div class="tab-pane" id="nav-tai-lieu-dinh-kem" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <br>
                  <div class="col-md-12 giua">
                    <input type="file" id="filedinhkem" hidden="hidden" name="" accept='application/zip,application/x-zip,application/x-zip-compressed,application/octet-stream'>
                    <button id="chonfile" class="btn btn-success btn-lg">Chọn tài liệu từ máy tính</button>
                  </div>
                  <br>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="pull-right">
              <button type="button" class="btn btn-primary" id="themdetai"><i class="fas fa-save"></i>&nbsp;&nbsp;Lưu đề tài</button>
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
</script>
<script type="text/javascript">
  var bkp=null;
  $(document).ready(function(){
    var idnd = "<?php echo $idnd; ?>";
    for (var i = 0; i < _data_.length; i++)
        for (var j = 0; j< _data_[i].length; j++)
            (!_data_[i][j]) ? _data_[i][j] = '' : 1;
    var option="<option value=''>Chọn thành viên</option>";
    _data_.map(function(i){
      if (idnd==i[0]) option+="<option value='"+i[0]+"' selected>"+i[1]+" - "+i[5]+"</option>"; 
      else
        option+="<option value='"+i[0]+"'>"+i[1]+" - "+i[5]+"</option>";
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

    $('#chonchunhiem').append(option);
    $('#chonchunhiem').addClass('selectpicker');
    $('.selectpicker').selectpicker({ liveSearch: true });
    $('#quanlydetaiduan').addClass('active');
    $('.tieude').html('Thêm đề tài NCKH');
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
          "<td><input type='number' min='0' class='form-control giua' value='0'></td>\n" +
          "<td><input type='number' min='0' class='form-control giua' value='0'></td>\n" +
          "<td><input type='number' min='0' class='form-control giua' value='0'></td>\n" +
          "<td class='giua'><button class='xoakinhphi'><i class='fas fa-times do'></i></button></td>\n" +
          "</tr>";
      $('#bangkinhphi').append(tr);
    });
    // Xem dữ liệu bảng thành viên đề tài
    //$('#xemthanhvien').click(function () {
        //var chuoi = $('#btv-ht-3 textarea').val().trim();
        //alert(chuoi);
    //});
    // Thêm thành viên thực hiện đề tài
    var stt_btv=1;
    $('#themthanhvien').click(function () {
        stt_btv=stt_btv+1;
        var tr = "<tr><td><select id='chon"+stt_btv+"' class='form-control' onchange='chonthanhvien(this)'>"+option+"</select></td><td id='btv-tt-"+stt_btv+"'><textarea class='form-control' rows='4' readonly></textarea></td><td id='btv-cv-"+stt_btv+"'><textarea class='form-control' rows='4'></textarea></td><td class='giua'><button class=\"btn btn-danger btn-sm xoathanhvien\"  title=\"Sửa\"><i class=\"fas fa-times\"></i></button></td></tr>";
        $("#bangthanhvien").append(tr);
    $('#chon'+stt_btv).addClass('selectpicker');
    $('.selectpicker').selectpicker({ liveSearch: true });
    });
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
    $('#chonfile').on('click',function(){
      $('#filedinhkem').click();
    });
    
    // Thêm đề tài
      $('#themdetai').click(function () {
        var tendetai = $('#tendetai').val().trim();
        var muctieudetai = $('#muctieudetai').val().trim();
        var noidungdetai = $('#noidungdetai').val().trim();
        var capdetai;
        var moisangtao = $('#moisangtaodetai').val().trim();
        var thuocchuongtrinh = $('#thuocchuongtrinhdetai').val().trim();
        var sucanthiet = $('#sucanthietdetai').val().trim();
        var tinhhinhnghiencuu = $('#tinhinhnghiencuudetai').val().trim();
        var nghiencuulienquan = $('#congtrinhnghiencuudetai').val().trim();
        var phuongphapkythuat = $('#phuongphapnghiencuudetai').val().trim();
        var kinhphingansach = ($.isNumeric($('#kinhphingansachdetai').val().trim())) ? $('#kinhphingansachdetai').val().trim() : '0';
        var kinhphinguonkhac = ($.isNumeric($('#kinhphinguonkhacdetai').val().trim())) ? $('#kinhphinguonkhacdetai').val().trim() : '0';
        var thangthuchien = $('#thangthuchiendetai').val().trim();
        var thangnambatdau = $('#thangnambatdaudetai').val().trim();
        var thangnamketthuc = $('#thangnamketthucdetai').val().trim();
        var ketqua = $('#ketquadetai').val().trim();
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
        _cdt_.map(function(c){
          ($('#capdetai-'+c[0]).is(':checked'))?capdetai = $('#capdetai-'+c[0]).val().trim():0;
        });
        if(!capdetai){
            khongthanhcong('Chưa chọn cấp đề tài');
            return;
        }
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
        /*if(!ketqua){
            khongthanhcong('Chưa nhập dự kiến kết quả đề tài và địa chỉ ứng dụng');
            return;
        }*/
        var loaihinhnghiencuu = [];
        _lh_.map(function(c){
          ($('#loaihinh-'+c[0]).is(':checked'))?loaihinhnghiencuu.push(c[1].trim()):0;
        });
        if(jQuery.isEmptyObject(loaihinhnghiencuu)){
            khongthanhcong('Chưa chọn loại hình nghiên cứu');
            return;
        }
        var linhvuckhoahoc = [];
        _lv_.map(function(c){
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
          //  Xét kinh phí

          // Kiểm tra kết nối internet

          if (kiemtraketnoi()) {
              // Ajax
              $.ajax({
                  url: 'ajax/ajax_them_de_tai_moi.php',
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
                      kinhphichitiet: bkp
                  },
                  beforeSend: function () {
                      canhbao('Đang xử lý dữ liệu');
                  },
                  success: function (data) {
                      $('body').append(data);
                  },
                  error: function () {
                      swal('Ôi! Lỗi','Vui lòng thử lại sau','error');
                  }
              });
          } else canhbao('Không có kết nối internet');
      });
    _data_.map(function(data){
      if (data[0]==$('#chonchunhiem').val()) {
        var td=""; _ndtd_.map(function(d){if (d[0]==idnd) {td = d[1];}});
        var dv=""; _nddv_.map(function(d){if (d[0]==idnd) {dv = d[1];}});
        $('#chonchunhiem').parent().parent('td').parent('tr').find('td:nth-child(2) textarea').val("- "+td+"\n- "+dv+"\n- "+data[3]);
      }
    });
  });
  function chonthanhvien(t){
    _data_.map(function(data){
      if (data[0]==t.value) {
        var td=""; _ndtd_.map(function(d){if (d[0]==t.value) {td = d[1];}});
        var dv=""; _nddv_.map(function(d){if (d[0]==t.value) {dv = d[1];}});
        $(t).parent().parent('td').parent('tr').find('td:nth-child(2) textarea').val("- "+td+"\n- "+dv+"\n- "+data[3]);
        return;
      }
    });
  }
  function chonsothang(th){
    try{
      var nbd = new Date($('#thangnambatdaudetai').val());
      var sothang = parseInt($(th).val());
      nbd.setMonth(nbd.getMonth() + sothang);
      var months = ["01", "02", "03", "04", "05", "06", "07",
           "08", "09", "10", "11", "12"];
      if (sothang>0) {
        $('#thangnamketthucdetai').val(nbd.getFullYear()+"-"+months[nbd.getMonth()]);
      }else{
        $('#thangnamketthucdetai').val('0000-00');
      }
    }catch(e){return;}
  }
  function chonthangbatdau(th){
    try{
      var nbd = new Date($(th).val());
      var sothang = parseInt($('#thangthuchiendetai').val());
      nbd.setMonth(nbd.getMonth() + sothang);
      var months = ["01", "02", "03", "04", "05", "06", "07",
           "08", "09", "10", "11", "12"];
      if (sothang>0) {
        $('#thangnamketthucdetai').val(nbd.getFullYear()+"-"+months[nbd.getMonth()]);
      }else{
        $('#thangnamketthucdetai').val('0000-00');
      }
    }catch(e){return;}
  }
</script>