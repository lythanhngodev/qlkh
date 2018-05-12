<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 26/04/2018
 * Time: 9:52 AM
 */
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
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-thong-tin-chung" role="tab" aria-controls="nav-home" aria-selected="true">Lý lịch sơ lược</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-qua-trinh-dao-tao" role="tab" aria-selected="false">Quá trình đào tạo</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-cong-tac-chuyen-mon" role="tab" aria-selected="false">Công tác chuyên môn</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-nghien-cuu-khoa-hoc" aria-selected="false">Nghiên cứu khoa học</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-bao-mat" aria-selected="false">Tài khoản &amp; Bảo mật</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- THÔNG TIN ChUNG -->
                            <div class="tab-pane show active" id="nav-thong-tin-chung" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="col-md-12">
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Họ &amp; Tên (<span class="text-danger">*</span>)</label>
                                            <input type="text" class="form-control" id="hoten" value="<?php echo $nd['HO']." ".$nd['TEN'] ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Gới tính (<span class="text-danger">*</span>)</label>
                                            <select id="gioitinh" class="form-control">
                                                <option value="Nam" <?php if ($nd['GIOITINH']=='Nam') echo "selected" ?>>Nam</option>
                                                <option value="Nữ" <?php if ($nd['GIOITINH']=='Nữ') echo "selected" ?>>Nữ</option>
                                                <option value="Khác" <?php if ($nd['GIOITINH']=='Khác') echo "selected" ?>>Khác</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Ngày, tháng, năm sinh (<span class="text-danger">*</span>)</label>
                                            <input type="date" class="form-control" id="ngaysinh" value="<?php echo $nd['NGAYSINH'] ?>">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="category" class="font-weight-bold" >Nơi sinh</label>
                                            <input type="text" class="form-control" id="noisinh" value="<?php echo $nd['NOISINH'] ?>">
                                        </div>
                                        <div class="form-group col-md-8">
                                          <label for="category" class="font-weight-bold" >Quê quán</label>
                                          <textarea class="form-control" id="quequan" rows="2"><?php echo $nd['QUEQUAN'] ?></textarea>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Dân tộc</label>
                                            <input type="text" class="form-control" id="dantoc" value="<?php echo $nd['DANTOC'] ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Chức danh giảng viên</label>
                                            <select class="form-control" id="chucdanhgiangvien">
                                                <option value=''>---</option>
                                            <?php 
                                            $ndcdgv = lay_nguoi_dung_chuc_danh_giang_vien($idnd);
                                            $rndcdgv = mysqli_fetch_row($ndcdgv);
                                            $_ndcdgv = $rndcdgv[0];
                                            while ($row = mysqli_fetch_assoc($cdgv)) {
                                                if ($row['IDCD']==$_ndcdgv)
                                                    echo "<option value='".$row['IDCD']."' selected>".$row['TENCHUCDANH']."</option>";
                                                else
                                                    echo "<option value='".$row['IDCD']."'>".$row['TENCHUCDANH']."</option>";
                                            } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Trình độ chuyên môn</label>
                                            <select class="form-control" id="trinhdochuyenmon">
                                                <option value='0'>---</option>
                                            <?php 
                                            $ndtdcm = lay_nguoi_dung_trinh_do_chuyen_mon($idnd);
                                            $rndtdcm = mysqli_fetch_row($ndtdcm);
                                            $_ndtdcm = $rndtdcm[0];
                                            while ($row = mysqli_fetch_assoc($tdcm)) {
                                                if ($row['IDTD']==$_ndtdcm)
                                                    echo "<option value='".$row['IDTD']."' selected>".$row['TENTRINHDO']."</option>";
                                                else
                                                    echo "<option value='".$row['IDTD']."'>".$row['TENTRINHDO']."</option>";
                                            } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Học vị cao nhất</label>
                                            <select class="form-control" id="hocvicaonhat">
                                                <option value='0'>---</option>
                                            <?php 
                                            $ndhv = lay_nguoi_dung_hoc_vi($idnd);
                                            $rndhv = mysqli_fetch_row($ndhv);
                                            $_ndhv = $rndhv[0];
                                            while ($row = mysqli_fetch_assoc($hv)) {
                                                if ($row['IDHV']==$_ndhv)
                                                    echo "<option value='".$row['IDHV']."' selected>".$row['TENHOCVI']."</option>";
                                                else
                                                    echo "<option value='".$row['IDHV']."'>".$row['TENHOCVI']."</option>";
                                            } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Năm, nước nhận học vị</label>
                                            <input type="text" class="form-control" id="namnuocnhanhocvi" value="<?php echo $nd['NAMNUOCHOCVI'] ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Chức danh khoa học cao nhất</label>
                                            <select class="form-control" id="chucdanhkhoahoc">
                                                <option value='0'>---</option>
                                            <?php 
                                            $ndcd = lay_nguoi_dung_chuc_danh_khoa_hoc($idnd);
                                            $rndcd = mysqli_fetch_row($ndcd);
                                            $_ndcd = $rndcd[0];
                                            while ($row = mysqli_fetch_assoc($cdkh)) {
                                                if ($row['IDCD']==$_ndcd)
                                                    echo "<option value='".$row['IDCD']."' selected>".$row['TENCHUCDANH']."</option>";
                                                else
                                                    echo "<option value='".$row['IDCD']."'>".$row['TENCHUCDANH']."</option>";
                                            } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Năm bổ nhiệm</label>
                                            <input type="text" class="form-control" id="nambonhiem" value="<?php echo $nd['NAMBONHIEM'] ?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="category" class="font-weight-bold" >Chức vụ (hiện tại hoặc trước khi nghỉ hưu)</label>
                                            <select class="form-control" id="chucvu">
                                                <option value='0'>---</option>
                                            <?php 
                                            $ndcv = lay_nguoi_dung_chuc_vu($idnd);
                                            $rndcv = mysqli_fetch_row($ndcv);
                                            $_ndcv = $rndcv[0];
                                            while ($row = mysqli_fetch_assoc($cv)) {
                                                if ($row['IDCV']==$_ndcv)
                                                    echo "<option value='".$row['IDCV']."' selected>".$row['TENCHUCVU']."</option>";
                                                else
                                                    echo "<option value='".$row['IDCV']."'>".$row['TENCHUCVU']."</option>";
                                            } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="category" class="font-weight-bold" >Đơn vị công tác (hiện tại hoặc trước khi nghỉ hưu)</label>
                                            <select class="form-control" id="donvicongtac">
                                                <option value='0'>---</option>
                                            <?php 
                                            $ndkbm = lay_nguoi_dung_don_vi_cong_tac($idnd);
                                            $rndkbm = mysqli_fetch_row($ndkbm);
                                            $_ndkbm = $rndkbm[0];
                                            while ($row = mysqli_fetch_assoc($kbm)) {
                                                if ($row['IDKBM']==$_ndkbm)
                                                    echo "<option value='".$row['IDKBM']."' selected>".$row['TENKBM']."</option>";
                                                else
                                                    echo "<option value='".$row['IDKBM']."'>".$row['TENKBM']."</option>";
                                            } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label for="category" class="font-weight-bold" >Chỗ ở riêng hoặc địa chỉ liên lạc (<span class="text-danger">*</span>)</label>
                                            <textarea class="form-control" id="choorieng" rows="2"><?php echo $nd['CHOORIENG'] ?></textarea>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Điện thoại cơ quan</label>
                                            <input type="text" class="form-control" id="dienthoaicq" value="<?php echo $nd['DIENTHOAICQ'] ?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Điện thoại nhà riêng</label>
                                            <input type="text" class="form-control" id="dienthoainr" value="<?php echo $nd['DIENTHOAINR'] ?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Điện thoại di động (<span class="text-danger">*</span>)</label>
                                            <input type="text" class="form-control" id="dienthoaidd" value="<?php echo $nd['DIENTHOAIDD'] ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Fax</label>
                                            <input type="text" class="form-control" id="fax" value="<?php echo $nd['FAX'] ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category" class="font-weight-bold" >Email</label>
                                            <input type="text" class="form-control" id="mail" value="<?php echo $nd['MAIL'] ?>"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- QUÁ TRÌNH ĐÀO TẠO -->
                            <div class="tab-pane" id="nav-qua-trinh-dao-tao" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="nav nav-tabs tabs-con" role="tablist">
                                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-dai-hoc" aria-selected="false">Đại học</a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-sau-dai-hoc" aria-selected="false">Sau đại học</a>
                                    </div>
                                    <div class="tab-content" >
                                        <div class="tab-pane" id="nav-dai-hoc" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <br>
                                            <p class="col-md-12"><strong>Thông tin đại học</strong></p>
                                            <hr>
                                            <table id="bangdaotaodaihoc" class="table table-bordered table-hover" style="background: #fff;">
                                                <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                                    <th>Hệ đào tạo</th>
                                                    <th>Nơi đào tạo</th>
                                                    <th>Ngành học</th>
                                                    <th>Nước đào tạo</th>
                                                    <th>Năm tốt nghiệp</th>
                                                    <th>Xóa</th>
                                                </tr>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($daihoc)){
                                                    echo "<tr>";
                                                    echo "
                                                        <td><textarea rows='4' class='form-control'>".$row['HEDAOTAO']."</textarea></td>
                                                        <td><textarea rows='4' class='form-control'>".$row['NOIDAOTAO']."</textarea></td>
                                                        <td><textarea rows='4' class='form-control'>".$row['NGANHHOC']."</textarea></td>
                                                        <td><textarea rows='4' class='form-control'>".$row['NUOCDAOTAO']."</textarea></td>
                                                        <td><input type='number' min='1960' class='form-control giua' value='".$row['NAMTOTNGHIEP']."'></td>
                                                        <td><button class='xoadaotao'><i class='fas fa-times do'></i></button></td>
                                                        ";
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </table>
                                            <div class="col-md-2"><button class="btn btn-default" id="themdaotaodaihoc">Thêm mới&ensp;<i class="fas fa-long-arrow-alt-right"></i></button></div>
                                            <br>
                                        </div>
                                        <div class="tab-pane" id="nav-sau-dai-hoc" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <br>
                                            <p class="col-md-12"><strong>Thông tin sau đại học</strong></p>
                                            <hr>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="category" class="font-weight-bold" >Thạc sĩ chuyên ngành</label>
                                                    <input type="text" class="form-control" id="thacsichuyennganh" value="<?php echo $nd['THACSICHUYENNGANH'] ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="category" class="font-weight-bold" >Năm cấp bằng</label>
                                                    <input type="text" class="form-control" id="namcapbangtscn" value="<?php echo $nd['NAMCAPBANGTSCN'] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="category" class="font-weight-bold" >Nơi đào tạo</label>
                                                    <input type="text" class="form-control" id="noidaotaotscn" value="<?php echo $nd['NOIDAOTAOTSCN'] ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="category" class="font-weight-bold" >Tiến sĩ chuyên ngành</label>
                                                    <input type="text" class="form-control" id="tiensichuyennganh" value="<?php echo $nd['TIENSICHUYENNGANH'] ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="category" class="font-weight-bold" >Năm cấp bằng</label>
                                                    <input type="text" class="form-control" id="namcapbangtscn2" value="<?php echo $nd['NAMCAPBANGTSCN2'] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="category" class="font-weight-bold" >Nơi đào tạo</label>
                                                    <input type="text" class="form-control" id="noidaotaotscn2" value="<?php echo $nd['NOIDAOTAOTSCN2'] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="category" class="font-weight-bold" >Tên luận án</label>
                                                    <input type="text" class="form-control" id="tenluanan" value="<?php echo $nd['TENLUANAN'] ?>">
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CÔNG TÁC CHUYÊN MÔN -->
                            <div class="tab-pane" id="nav-cong-tac-chuyen-mon" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <br>
                                    <p class="col-md-12"><strong>Quá trình công tác chuyên môn</strong></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="bangcongtacchuyenmon" class="table table-bordered table-hover" style="background: #fff;">
                                                <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                                    <th>Thời gian</th>
                                                    <th>Nơi công tác</th>
                                                    <th>Công việc đảm nhiệm</th>
                                                    <th style="width: 50px;">Xóa</th>
                                                </tr>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($congtac)){
                                                    echo "<tr>";
                                                    echo "
                                                            <td><input type='DATE' class='form-control giua' value='".$row['THOIGIAN']."'></td>
                                                            <td><textarea rows='4' class='form-control'>".$row['NOICONGTAC']."</textarea></td>
                                                            <td><textarea rows='4' class='form-control'>".$row['CONGVIEC']."</textarea></td>
                                                            <td><button class='xoacongtac'><i class='fas fa-times do'></i></button></td>
                                                            ";
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </table>
                                            <div class="col-md-2"><button class="btn btn-default" id="themcongtacchuyenmon">Thêm mới&ensp;<i class="fas fa-long-arrow-alt-right"></i></button></div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                            </div>
                            <!-- NGHIÊN CỨU KHOA HỌC -->
                            <div class="tab-pane" id="nav-nghien-cuu-khoa-hoc" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="nav nav-tabs tabs-con" role="tablist">
                                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-de-tai-nghien-cuu-khoa-hoc" aria-selected="false">Nghiên cứu khoa học</a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-cong-trinh-khoa-hoc" aria-selected="false">Công trình khoa học</a>
                                    </div>
                                    <div class="tab-content" >
                                        <div class="tab-pane" id="nav-de-tai-nghien-cuu-khoa-hoc" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <br>
                                            <p class="col-md-12"><strong>Các đề tài nghiên cứu khoa học đã và đang tham gia</strong></p>
                                            <hr>
                                            <table id="" class="table table-bordered table-hover" style="background: #fff;">
                                                <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                                    <th>TT</th>
                                                    <th>Tên đề tài nghiên cứu</th>
                                                    <th>Năm bắt đầu / Năm hoàn thành</th>
                                                    <th>Đề tài cấp (NN, Bộ, ngành, trường)</th>
                                                    <th>Trách nhiệm tham gia trong đề tài</th>
                                                </tr>
                                                <?php 
                                                $stt = 1;
                                                while ($row=mysqli_fetch_assoc($nckh)) {?>
                                                <tr>
                                                    <th class="giua"><?php echo $stt; ?></th>
                                                    <th><?php echo $row['TENDETAI']; ?></th>
                                                    <td class="giua"><?php echo $row['THANGNAMBD']. "đến ".$row['THANGNAMKT']; ?></td>
                                                    <td class="giua"><?php echo $row['CAPDETAI']; ?></td>
                                                    <td class="giua"><?php echo $row['TRACHNHIEM']; ?></td>
                                                </tr>
                                                <?php $stt++; } ?>
                                            </table>
                                            <br>
                                        </div>
                                        <div class="tab-pane" id="nav-cong-trinh-khoa-hoc" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <br>
                                            <p class="col-md-12"><strong>Các công trình khoa học đã công bố</strong></p>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-bordered table-hover" style="background: #fff;">
                                                        <tr style="background: #0275d8;color:  #fff; text-align: center;">
                                                            <th>TT</th>
                                                            <th>Tên công trình</th>
                                                            <th>Năm công bố</th>
                                                            <th>Tên tạp chí</th>
                                                        </tr>
                                                    <?php 
                                                    $stt = 1;
                                                    while ($row=mysqli_fetch_assoc($ntnc)) {?>
                                                    <tr>
                                                        <th class="giua"><?php echo $stt; ?></th>
                                                        <th><?php echo $row['TENBAO']; ?></th>
                                                        <td class="giua"><?php echo date("d-m-Y", strtotime($row['NAMXUATBAN'])); ?></td>
                                                        <td class="giua"><?php echo $row['TAPCHI']; ?></td>
                                                    </tr>
                                                    <?php $stt++; } ?>
                                                    </table>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BẢO MẬT -->
                            <div class="tab-pane" id="nav-bao-mat" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Tên đăng nhập</label>
                                            <input type="text" id="tendangnhap" class="form-control" value="<?php echo $nd['TENDANGNHAP'] ?>" >
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="category" class="font-weight-bold">.</label><br>
                                            <button class="btn btn-primary" id="doitendangnhap">Lưu</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Mật khẩu mới</label>
                                            <input type="password" id="mk" class="form-control">
                                            
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="category" class="font-weight-bold" >Xác nhận mật khẩu mới</label>
                                            <input type="password" id="mk2" class="form-control">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="category" class="font-weight-bold">.</label><br>
                                            <button class="btn btn-primary" id="doimatkhau">Lưu</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary" id="luuthongtin"><i class="fas fa-save"></i>&nbsp;&nbsp;Lưu thông tin</button>
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
    $(document).ready(function(){
        $('#thongtincanhan').addClass('active');
        $('.tieude').html('Thông tin cá nhân');
        $('#bangdaotaodaihoc').on('click','.xoadaotao',function(){
            $(this).parents('tr').remove();
        });
        $('#bangcongtacchuyenmon').on('click','.xoacongtac',function(){
            $(this).parents('tr').remove();
        });
        $('#doimatkhau').click(function(){
            var mk = $('#mk').val().trim();
            var mk2 = $('#mk2').val().trim();
            if(!mk||!mk2){khongthanhcong('Điền đầy đủ thông tin mật khẩu');return;}
            if(mk!=mk2){khongthanhcong('Mật khẩu xác nhận không trùng khớp');return;}
            // Kiểm tra kết nối internet
            if (kiemtraketnoi()) {
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_doi_mat_khau.php',
                    type: 'POST',
                    data: {
                        mk: mk,
                        idnd: '<?php echo $idnd; ?>'
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1){
                            swal('Tốt','Mật khẩu đã được thay đổi','success');
                        }else
                            swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                    },
                    error: function () {
                        swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                    }
                });
            } else swal('Ôi! Lỗi','Không có kết nối internet','error');
        });
        $('#doitendangnhap').click(function(){
            var tdn = $('#tendangnhap').val().trim();
            if(!tdn){khongthanhcong('Vui lòng nhập tên đăng nhập');return;}
            // Kiểm tra kết nối internet
            if (kiemtraketnoi()) {
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_doi_ten_dang_nhap.php',
                    type: 'POST',
                    data: {
                        tdn: tdn,
                        idnd: '<?php echo $idnd; ?>'
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1){
                            swal('Tốt','Tên đang nhập đã được thay đổi','success');
                        }else
                            swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                    },
                    error: function () {
                        swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                    }
                });
            } else swal('Ôi! Lỗi','Không có kết nối internet','error');
        });
        // Thêm tổ chức đào tạo đại học
        $('#themdaotaodaihoc').click(function () {
            var tr = "<tr>\n" +
                "<td><textarea rows='4' class='form-control'></textarea></td>\n" +
                "<td><textarea rows='4' class='form-control'></textarea></td>\n" +
                "<td><textarea rows='4' class='form-control'></textarea></td>\n" +
                "<td><textarea rows='4' class='form-control'></textarea></td>\n" +
                "<td><input type='number' min='1960' class='form-control giua'></td>\n" +
                "<td><button class='xoadaotao'><i class='fas fa-times do'></i></button></td>\n" +
                "</tr>";
            $('#bangdaotaodaihoc').append(tr);
        });
        // Thêm công tác chuyên môn
        $('#themcongtacchuyenmon').click(function () {
            var tr = "<tr>\n" +
                "<td><input type='date' class='form-control'></td>\n" +
                "<td><textarea rows='4' class='form-control'></textarea></td>\n" +
                "<td><textarea rows='4' class='form-control'></textarea></td>\n" +
                "<td class='giua'><button class='xoacongtac'><i class='fas fa-times do'></i></button></td>\n" +
                "</tr>";
            $('#bangcongtacchuyenmon').append(tr);
        });
        // Lưu thông tin
        $('#luuthongtin').click(function () {
            var ho, ten;
            var hoten = $('#hoten').val().trim();
            var gioitinh = $('#gioitinh').val().trim();
            var ngaysinh = $('#ngaysinh').val().trim();
            var noisinh = $('#noisinh').val().trim();
            var quequan = $('#quequan').val().trim();
            var dantoc = $('#dantoc').val().trim();
            var chucdanhgiangvien = $('#chucdanhgiangvien').val().trim();
            var trinhdochuyenmon = $('#trinhdochuyenmon').val().trim();
            var hocvicaonhat = $('#hocvicaonhat').val().trim();
            var namnuocnhanhocvi = $('#namnuocnhanhocvi').val().trim();
            var chucdanhkhoahoc = $('#chucdanhkhoahoc').val().trim();
            var nambonhiem = $('#nambonhiem').val().trim();
            var chucvu = $('#chucvu').val().trim();
            var donvicongtac = $('#donvicongtac').val().trim();
            var choorieng = $('#choorieng').val().trim();
            var dienthoaicq = $('#dienthoaicq').val().trim();
            var dienthoainr = $('#dienthoainr').val().trim();
            var dienthoaidd = $('#dienthoaidd').val().trim();
            var fax = $('#fax').val().trim();
            var mail = $('#mail').val().trim();
            // SAU ĐẠI HỌC //
            var thacsichuyennganh = $('#thacsichuyennganh').val().trim();
            var namcapbang = $('#namcapbangtscn').val().trim();
            var noidaotaotscn = $('#noidaotaotscn').val().trim();
            var tiensichuyennganh = $('#tiensichuyennganh').val().trim();
            var namcapbangtscn2 = $('#namcapbangtscn2').val().trim();
            var noidaotaotscn2 = $('#noidaotaotscn2').val().trim();
            var tenluanan = $('#tenluanan').val().trim();
            while (hoten.search('  ')!=-1)
                hoten = hoten.replace('  ',' ');
            if(hoten.search(' ')==-1){
                khongthanhcong('Chưa nhập đúng họ và tên');
                return;
            }
            ho = hoten.substring(0,hoten.lastIndexOf(' ')).trim();
            ten = hoten.substring(hoten.lastIndexOf(' ')+1,hoten.length);
            // Xét thông tin đại học
            //xóa hàng rỗng
            var bdt = [];
            var demdongtv = 1;
            var demdongdungtv = 0;
            $('#bangdaotaodaihoc').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                $(this).find('td:not(:last) textarea, input').each(function(i, col) {
                    cols.push($(this).val());
                });
                // Xóa dòng thành viên chưa điền
                if (cols[0]=='' && cols[1]=='' && cols[2]=='' && cols[3]=='' && cols[4]==''){
                    $(this).remove();
                    demdongdungtv--;
                }
                demdongtv++;demdongdungtv++;
            });
            $('#bangdaotaodaihoc').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                $(this).find('td:not(:last) textarea, input').each(function(i, col) {
                    cols.push($(this).val());
                });
                bdt.push(cols); // lưu bảng đào tạo
            });

            // Xét quá trình công tác
            //xóa hàng rỗng
            var bct = [];
            var demdongtv = 1;
            var demdongdungtv = 0;
            $('#bangcongtacchuyenmon').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                $(this).find('td:not(:last) textarea, input').each(function(i, col) {
                    cols.push($(this).val());
                });
                // Xóa dòng thành viên chưa điền
                if (cols[0]=='' && cols[1]=='' && cols[2]==''){
                    $(this).remove();
                    demdongdungtv--;
                }
                demdongtv++;demdongdungtv++;
            });
            $('#bangcongtacchuyenmon').find('tr:not(:first)').each(function(i, row) {
                var cols = [];
                $(this).find('td:not(:last) textarea, input').each(function(i, col) {
                    cols.push($(this).val());
                });
                bct.push(cols); // lưu bảng đào tạo
            });

            // Kiểm tra kết nối internet
            if (kiemtraketnoi()) {
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_luu_thong_tin_nguoi_dung.php',
                    type: 'POST',
                    data: {
                        ho: ho,
                        ten: ten,
                        gioitinh: gioitinh,
                        ngaysinh: ngaysinh,
                        noisinh: noisinh,
                        quequan: quequan,
                        dantoc: dantoc,
                        chucdanhgiangvien: chucdanhgiangvien,
                        trinhdochuyenmon: trinhdochuyenmon,
                        hocvicaonhat: hocvicaonhat,
                        namnuocnhanhocvi: namnuocnhanhocvi,
                        chucdanhkhoahoc: chucdanhkhoahoc,
                        nambonhiem: nambonhiem,
                        chucvu: chucvu,
                        donvicongtac: donvicongtac,
                        choorieng: choorieng,
                        dienthoaicq: dienthoaicq,
                        dienthoainr: dienthoainr,
                        dienthoaidd: dienthoaidd,
                        fax: fax,
                        mail: mail,
                        thacsichuyennganh: thacsichuyennganh,
                        namcapbang: namcapbang,
                        noidaotaotscn: noidaotaotscn,
                        tiensichuyennganh: tiensichuyennganh,
                        namcapbangtscn2: namcapbangtscn2,
                        noidaotaotscn2: noidaotaotscn2,
                        tenluanan: tenluanan,
                        bdt: bdt,
                        bct: bct,
                        idnd: '<?php echo $idnd; ?>'
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1){
                            swal('Tốt','Lưu thông tin thành công','success');
                        }else
                            khongthanhcong(mang.thongbao);
                    },
                    error: function () {
                        swal('Ôi! Lỗi','Xảy ra lỗi, vui lòng thử lại','error');
                    }
                });
            } else swal('Ôi! Lỗi','Không có kết nối internet','error');
        });
    });
</script>
