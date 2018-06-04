<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<script src="../ckeditor/ckeditor.js"></script>
<script src="../ckfinder/ckfinder.js"></script>
<style type="text/css">
  #bangtacgia tr {
    width: 100%;
    display: inline-table;
    table-layout: fixed;
  }

  #bangtacgia{
    display: -moz-groupbox;
    margin: 0;
  }
  #bangtacgia tbody{
    overflow-y: scroll;
    border-left: 1px solid #dadada;
    border-bottom: 1px solid #dadada;
  }
  #bangtacgia td{
    padding: 4px;
  }
    .progress {
      position: relative;
    }

    .progress-text {
      position: absolute;
      width: 100%;
      height: 100%;
      text-align: right;
      padding-right: 5px;
      color: #333;
    }
</style>
  <div class="card cach background-container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4><span class="text-danger">(*)</span> Những trường bắt buộc phải điền</h4>
          </div>
          <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="line"></div>
                              <div class="panel-body" style="margin-top: 1rem">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="tags" class="font-weight-bold" >
                                                  Tên bài báo <span class="text-danger">(*)</span></label>
                                              <input type="text" class="form-control" id="tenbaibao" value="<?php echo $rbaibao['TENBAO']; ?>" />
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div id="f-tukhoa" class="form-group">
                                          <label class="font-weight-bold" >Từ khóa</label>
                                          <input name="tags" id="tukhoa" value="<?php echo lay_tu_khoa($id); ?>" />
                                          <p class="help-block">Các từ khóa cách nhau bằng dấu phẩy.</p>
                                        </div>
                                      </div>
                                      <div class="form-group col-md-3">
                                        <label for="tags" class="font-weight-bold" >Tác giả đã chọn</label>
                                        <table id="bangtacgia" class="table table-hover table-bordered">
                                          <thead style="background:#e9ecef;">
                                            <th style="padding: 8px;border: none;">Tên tác giả</th>
                                            <th class="an">IDTG</th>
                                            <th  style="width: 50px;padding: 8px;border:none;" class="giua">Xóa</th>
                                          </thead>
                                          <tbody>
                                          <?php 
                                            while ($row1 = mysqli_fetch_assoc($tacgiabaiviet)) { ?>
                                              <tr>
                                                <td><?php echo $row1['HOTEN'].' '.$row1['NGAYSINH']; ?></td>
                                                <td class="an"><?php echo $row1['IDND']; ?></td>
                                                <td class="giua" style="width:50px;"><button class="xoatacgia"><i class="fas fa-times do"></i></button></td>
                                              </tr>
                                          <?php } ?>
                                          </tbody>
                                        </table>
                                      </div>
                                      <div class="form-group col-md-3">
                                          <label for="tags" class="font-weight-bold" >Tên tác giả <span class="text-danger">(*)</span></label>
                                          <select id="tacgia" data-live-search="true" class="selectpicker form-control" title="Chọn tác giả">
                                            <option value="chontacgia">-- Chọn tác giả --</option>
                                            <?php while ($row=mysqli_fetch_assoc($tacgia)) {
                                              echo '<option value="'.$row['IDND'].'" idtgdata="'.$row['IDND'].'">'.$row['HOTEN'].' '.$row['NGAYSINH'].'</option>';
                                            } ?>
                                          </select>
                                      </div>
                                      <div class="form-group col-md-4">
                                          <label for="tags" class="font-weight-bold" >Chọn quốc gia</label>
                                          <select id="quocgia" data-live-search="true" class="selectpicker form-control" title="Chọn quốc gia">
                                            <?php while ($row=mysqli_fetch_assoc($quocgia)) {
                                              if ($rbaibao['TENQG'] == $row['ten']) {
                                                echo '<option value="'.$row['ten'].'" selected>'.$row['ten'].'</option>';
                                              }
                                              else
                                              echo '<option value="'.$row['ten'].'">'.$row['ten'].'</option>';
                                            } ?>
                                          </select>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="tags" class="font-weight-bold" >Chọn cấp bài báo</label>
                                          <select id="capbaibao" data-live-search="true" class="selectpicker form-control">
                                            <?php while ($row1=mysqli_fetch_assoc($cbb)) {
                                              if ($row1['TENCAP'] == $rbaibao['CAPBAIBAO']) {
                                                echo '<option value="'.$row1['TENCAP'].'" selected>'.$row1['TENCAP'].'</option>';
                                              }
                                              else
                                              echo '<option value="'.$row1['TENCAP'].'">'.$row1['TENCAP'].'</option>';
                                            } ?>
                                          </select>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="category" class="font-weight-bold" >
                                                  Tạp chí, Hội nghị, Tổ chức, KH & CN công bố kết quả NC</label>
                                              <input type="text" class="form-control" id="tapchi" value="<?php echo $rbaibao['TAPCHI']; ?>" />
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="category" class="font-weight-bold" >
                                                  Năm xuất bản</label>
                                              <input type="month" class="form-control" id="namxuatban" value="<?php echo $rbaibao['NAMXUATBAN']; ?>" />
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="tags" class="font-weight-bold" >
                                                  Nội dung tóm tắt</label>
                                              <textarea class="form-control" rows="5" id="noidungbaibao"><?php echo $rbaibao['NOIDUNG']; ?></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="tags" class="font-weight-bold" >Code Bib Text</label>
                                          <textarea name="" id="codebib" rows="5" class="form-control" style="border-radius: 0;"><?php echo $rbaibao['BIB']; ?></textarea>
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-6">
                                          <div id="quanlyupfile" class="form-group">
                                            <br>
                                              <label for="tags" class="font-weight-bold" >
                                                  File nguồn</label><br>
                                              <div id="quanlyupfile">
                                              <?php if($rbaibao['FILE']!=''){
                                              echo "<a id='xoafileup' class='btn btn-danger btn-lg' title='Xóa file vừa upload' onclick='xoafiledatai()'><i class='far fa-times-circle  faa-burst animated' ></i>&ensp;Xóa file vừa tải lên</a>";
                                              echo "<a id='taifile' class='btn btn-success btn-lg' style='display: none;'><i class='fas fa-upload faa-float animated' ></i>&ensp;Tải lên file nguồn</a>";
                                              echo "<input type='text' hidden='hidden' value='".$rbaibao['FILE']."' id='tenfiledaup'>";
                                          }else{
                                              echo "<a id='taifile' class='btn btn-success btn-lg'><i class='fas fa-upload faa-float animated' ></i>&ensp;Tải lên file nguồn</a>";
                                              echo "<input type='text' hidden='hidden' value='' id='tenfiledaup'>";
                                          } ?>
                                          <input type="file" id="filetailen" hidden="hidden">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label for="category" class="font-weight-bold" >
                                                  Điểm số</label>
                                              <input type="number" class="form-control giua" id="diem" value="<?php echo $rbaibao['DIEM'] ?>" />
                                          </div>
                                      </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label for="category" class="font-weight-bold" >
                                                  Số tiết quy đổi</label>
                                              <input type="number" class="form-control giua" id="sotiet" value="<?php echo $rbaibao['SOTIET'] ?>" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="card-footer">
              <div>
                <button type="button" class="btn btn-primary" id="luubaibao"><i class="fas fa-save"></i>&nbsp;&nbsp;Lưu</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cach"></div>

<script src="../js/jquery.tagsinput.js"></script>
<link rel="stylesheet" type="text/css" href="../css/jquery.tagsinput.min.css">

<script type="text/javascript">
    $(function(){
      $('#tukhoa').tagsInput({width:'auto'});
      $('#tacgia-tk').tagsInput({width:'auto'});
    });
    CKEDITOR.replace( 'noidungbaibao', {
      filebrowserBrowseUrl : '../ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl : '../ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl : '../ckfinder/ckfinder.html?type=Flash',
      filebrowserUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#taifile').on("click",function () {
            $('#filetailen').click();
        });
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
                //sử dụng ajax post
                if (kiemtraketnoi()){
                    $.ajax({
                        url: 'ajax/ajax_file_nguon_bai_bao.php', // gửi đến file upload.php
                        dataType: 'text',
                        cache: false,
                        contentType: false,
                        processData: false,
                        type: 'post',
                        data: form_data,
                        beforeSend: function () {
                            canhbao('Đang xử lý file ...');
                        },
                        success: function(data){
                            $.notifyClose();
                            //$('body').append(data);
                            var mang = JSON.parse(data);
                            if(mang.trangthai=='1'){
                                thanhcong('File đã được tải lên');
                                $('#quanlyupfile').append("<a id='xoafileup' class='btn btn-danger btn-lg' title='Xóa file vừa upload' onclick='xoafiledatai()'><i class='far fa-times-circle  faa-burst animated' ></i>&ensp;Xóa file vừa tải lên</a>");
                                $('#tenfiledaup').val(mang.tenfile);
                                $('#taifile').hide();
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
    $('#baokhoahoc').addClass('active');
    $('.tieude').html('Sửa bài báo khoa học');
    $('#bangtacgia').on('click','.xoatacgia',function(){
      $(this).parents('tr').remove();
    });
    // Xử lý phần thêm tác giả
    $('#tacgia').change(function(){
       if (this.value != 'chontacgia'){
        // xét tác giã đã tồn tại hay chua nếu chưa thì thêm vào bảng
        var table = $('#bangtacgia');
        var data = [];
        table.find('tr:not(:first)').each(function(i, row) {
          var cols = [];
          $(this).find('td:not(:last)').each(function(i, col) {
            cols.push($(this).text());
          });
          data.push(cols);
        });
        var tontai = 0;
        for (var i = 0; i < data.length; i++) {
          if ($(this).find('option:selected').attr('idtgdata')==data[i][1]){tontai=1;break;};
        }
        if (tontai==0) {
          //them tac gia vao danh sach
          var tr = "<tr><td>"+$('#tacgia option:selected').text()+"</td><td class=\"an\">"+$(this).find('option:selected').attr('idtgdata')+"</td><td class=\"giua\" style=\"width:50px;\"><button class=\"xoatacgia\"><i class=\"fas fa-times do\"></i></button></td></tr>";
          $('#bangtacgia').append(tr);
        }
        else
          khongthanhcong('Bạn đã chọn tác giả này rồi!');
      }
    });
    $("#luubaibao").click(function(){
      if(!$('#namxuatban').val()){
          khongthanhcong('Chưa chọn ngày công bố bài báo');
          return;
      }
      if (kiemtraketnoi()) {
        // xử lý tác giả
        var table = $('#bangtacgia');
        var tacgia = [];
        table.find('tr:not(:first)').each(function(i, row) {
          var cols = [];
          $(this).find('td:not(:last)').each(function(i, col) {
            cols.push($(this).text());
          });
          tacgia.push(cols);
        });
        var mtacgia=[];
        for (var i = 0; i < tacgia.length; i++) {
          mtacgia[i]=tacgia[i][1];
        }
        $.ajax({
          url : "ajax/ajax_sua_bai_bao_khoa_hoc.php",
          type : "post",
          dataType:"text",
          data : {
            tbb: $("#tenbaibao").val().trim(),
            tg: mtacgia,
            qg: $("#quocgia").val().trim(),
            tc: $("#tapchi").val().trim(),
            namxb: $("#namxuatban").val().trim(),
            nd: CKEDITOR.instances['noidungbaibao'].getData(),
            bib: $("#codebib").val().trim(),
            tk: $("#tukhoa").val().trim(),
            idbb: '<?php echo $id; ?>',
            cap: $('#capbaibao').val().trim(),
            file: $('#tenfiledaup').val().trim(),
            diem: $("#diem").val().trim(),
            sotiet: $('#sotiet').val().trim()
          },
          success : function (data){
              $("body").append(data);
              //alert(data);
          }
        });
      }
      else{
        alert("Hiện không có kết nối internet");
      }
    });
  });
  function xoafiledatai() {
      if(kiemtraketnoi()){
          $('#taifile').show();
          // ajax
          $.ajax({
              url : "ajax/ajax_xoa_file_nguon_bai_bao.php",
              type : "post",
              dataType:"text",
              data : {
                  file: $('#tenfiledaup').val()
              },
              success : function (data){
                  $.notifyClose();
                  thanhcong(data);
                  $('#tenfiledaup').val('');
                  $('#xoafileup').remove();
              }
          });
      }
      else
          khongthanhcong("Hiện không có kết nối internet");
  }
</script>