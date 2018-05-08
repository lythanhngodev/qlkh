<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<script src="../ckeditor/ckeditor.js"></script>
<script src="../ckfinder/ckfinder.js"></script> 
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
                                      <div class="col-md-7">
                                        <div class="col" style="padding: 0;">
                                            <div class="form-group">
                                                <label for="tags" class="font-weight-bold" >
                                                    Tên bài viết <span class="text-danger">(*)</span></label>
                                                <input type="text" class="form-control" id="tenbaibao" />
                                            </div>
                                        </div>
                                        <div class="col" style="padding: 0;">
                                            <div class="form-group">
                                                <label for="tags" class="font-weight-bold" >
                                                    Mổ tả</label>
                                                <textarea class="form-control" rows="4" id="mota"></textarea>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-5">
                                        <div id="f-tukhoa" class="form-group">
                                          <label class="font-weight-bold" >Từ khóa</label>
                                          <input name="tags" id="tukhoa" value="" />
                                          <p class="help-block">Các từ khóa cách nhau bằng dấu phẩy.</p>
                                        </div>
                                      </div>
                                      <div class="col-md-7">
                                        <div id="f-tukhoa" class="form-group">
                                          <label class="font-weight-bold">Chọn loại tin tức</label>
                                          <select class="form-control" id="loaitin">
                                            <option value="1">Tin tức sự kiện</option>
                                            <option value="2">Công nghệ mới</option>
                                            <option value="3">Khám phá</option>
                                            <option value="4">Đời sống</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="col-md-7" style="padding: 0;">
                                            <div class="form-group">
                                                <label for="tags" class="font-weight-bold" >
                                                    Nội dung tóm tắt</label>
                                                <textarea class="form-control" rows="5" id="noidungbaibao"></textarea>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="tags" class="font-weight-bold" >Ngày đăng bài</label>
                                            <input type="date" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                            <br>
                                              <label for="tags" class="font-weight-bold" >
                                                  Hình ảnh</label>&nbsp;
                                              <button class="btn btn-success" onclick="duyetfile()">Chọn hình ảnh... </button>&ensp;<button class="btn btn-danger" id="xoahinh"><i class="fas fa-times"></i></button>
                                              <input type="text" name="" value="" id="linkfile" hidden="hidden">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                        <img src="" id="hinh-anh-ht" style="width: 100%;">
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
                <button type="button" class="btn btn-primary" id="luubaiviet"><i class="fas fa-save"></i>&nbsp;&nbsp;Lưu tin tức</button>
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
    });
    CKEDITOR.replace( 'noidungbaibao', {
      filebrowserBrowseUrl : '../ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl : '../ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl : '../ckfinder/ckfinder.html?type=Flash',
      filebrowserImageUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
</script>
<script type="text/javascript">
    var finder = new CKFinder();
    function duyetfile() {
        finder.selectActionFunction = SetFileField;
        finder.popup();
    }
    function SetFileField(fileUrl) {
        document.getElementById('hinh-anh-ht').src = fileUrl;
        var host = "<?php echo $qlkh['HOSTGOC']; ?>";
        host = host.substr(0,host.lastIndexOf("\/"));
        //alert(fileUrl.substr(host.length+1,fileUrl.length-host.length));
        document.getElementById('linkfile').value=fileUrl.substr(host.length+1,fileUrl.length-host.length);
    }
  $(document).ready(function(){
    $('#themtintuc').addClass('active');
    $('.tieude').html('Thêm bài viết');
    $('#xoahinh').click(function(){
      document.getElementById('hinh-anh-ht').src = '';
      document.getElementById('linkfile').value= '';
    });
    $("#luubaiviet").click(function(){
      if (kiemtraketnoi()) {
        $.ajax({
          url : "ajax/ajax_them_tac_gia",
          type : "post",
          dataType:"text",
          data : {
            t: $("#tenbaibao").val().trim(),
            ns: $("#mota").val().trim(),
            mt: $("#motatg").val().trim(),
            dc: $("#diachitg").val().trim()
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
</script>