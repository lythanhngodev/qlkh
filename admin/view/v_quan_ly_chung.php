<?php if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<div class="row background-container">
    <div class="col-md-6">
        <!-- KHOA BỘ MÔN -->
        <div class="card">
            <div class="card-header">
                <h4>Khoa / Phòng</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm themkbm"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                <table id="bangkbm" class="table table-hover table-bordered">
                    <thead>
                        <tr style="background:#e9ecef;">
                            <th class="giua">Khoa bộ môn</th>
                            <th class="giua" style="width: 100px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($kbm)) { ?>
                        <tr>
                            <td><?php echo $row['TENKBM'] ?></td>
                            <td id="<?php echo $row['IDKBM'] ?>">
                                <button class='btn btn-primary btn-sm suatdcm' onclick='suakbm(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                <button class='btn btn-danger btn-sm xoatdcm' onclick='xoakbm(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- TRÌNH ĐỘ CHUYÊN MÔN -->
        <div class="card">
            <div class="card-header">
                <h4>Trình độ chuyên môn</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm themtdcm"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                <table id="bangtdcm" class="table table-hover table-bordered">
                    <thead>
                        <tr style="background:#e9ecef;">
                            <th class="giua">Trình độ chuyên môn</th>
                            <th class="giua" style="width: 100px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($tdcm)) { ?>
                        <tr>
                            <td><?php echo $row['TENTRINHDO'] ?></td>
                            <td id="<?php echo $row['IDTD'] ?>">
                                <button class='btn btn-primary btn-sm suatdcm' onclick='sua(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                <button class='btn btn-danger btn-sm xoatdcm' onclick='xoa(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- CHỨC DANH GIẢNG VIÊN -->
        <div class="card">
            <div class="card-header">
                <h4>Chức danh giảng viên</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm themcdgv"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                <table id="bangcdgv" class="table table-bordered table-hover">
                    <thead>
                        <tr style="background:#e9ecef;">
                            <th class="giua">Chức danh giảng viên</th>
                            <th class="giua" style="width: 100px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($cdgv)) { ?>
                        <tr>
                            <td><?php echo $row['TENCHUCDANH'] ?></td>
                            <td id="<?php echo $row['IDCD'] ?>">
                                <button class='btn btn-primary btn-sm' onclick='suacdgv(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                <button class='btn btn-danger btn-sm' onclick='xoacdgv(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- HỌC VỊ -->
        <div class="card">
            <div class="card-header">
                <h4>Học vị</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm themhv"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                <table id="banghv" class="table table-bordered table-hover">
                    <thead>
                        <tr style="background:#e9ecef;">
                            <th class="giua">Học vị</th>
                            <th class="giua" style="width: 100px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($hv)) { ?>
                        <tr>
                            <td><?php echo $row['TENHOCVI'] ?></td>
                            <td id="<?php echo $row['IDHV'] ?>">
                                <button class='btn btn-primary btn-sm' onclick='suahv(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                <button class='btn btn-danger btn-sm' onclick='xoahv(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- CẤP ĐỀ TÀI -->
        <div class="card">
            <div class="card-header">
                <h4>Cấp đề tài nghiên cứu khoa học</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm themcdt"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                <table id="bangcdt" class="table table-bordered table-hover">
                    <thead>
                        <tr style="background:#e9ecef;">
                            <th class="giua">Cấp đề tài NCKH</th>
                            <th class="giua" style="width: 100px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($cdt)) { ?>
                        <tr>
                            <td><?php echo $row['TENCAP'] ?></td>
                            <td id="<?php echo $row['IDC'] ?>">
                                <button class='btn btn-primary btn-sm' onclick='suacdt(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                <button class='btn btn-danger btn-sm' onclick='xoacdt(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- MAIL -->
        <div class="card">
            <div class="card-header">
                <h4>Cấu hình mail</h4>
            </div>
            <div class="card-body">
                <br>
                <table id="bangcdt" class="table table-bordered table-hover">
                    <thead>
                    <tr style="background:#e9ecef;">
                        <th class="giua">Địa chỉ email</th>
                        <th class="giua">Mật khẩu</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="text" id="tenmail" value="<?php echo $rmail['0']; ?>" class="form-control"></td>
                        <td><input type="password" id="matkhaumail" class="form-control"></td>
                        <td><button class="btn btn-primary" id="bluumail">Lưu mail</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <!-- CHỨC DANH KHOA HỌC -->
            <div class="card">
                <div class="card-header">
                    <h4>Chức danh khoa học</h4>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary btn-sm themcdkh"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                    <table id="bangcdkh" class="table table-bordered table-hover">
                        <thead>
                            <tr style="background:#e9ecef;">
                                <th class="giua">Chức danh khoa học</th>
                                <th class="giua" style="width: 100px;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($cdkh)) { ?>
                            <tr>
                                <td><?php echo $row['TENCHUCDANH'] ?></td>
                                <td id="<?php echo $row['IDCD'] ?>">
                                    <button class='btn btn-primary btn-sm' onclick='suacdkh(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                    <button class='btn btn-danger btn-sm' onclick='xoacdkh(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <!-- CHỨC VỤ -->
        <div class="card">
            <div class="card-header">
                <h4>Chức vụ</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm themcv"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                <table id="bangcv" class="table table-bordered table-hover">
                    <thead>
                        <tr style="background:#e9ecef;">
                            <th class="giua">Chức vụ</th>
                            <th class="giua" style="width: 100px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($cv)) { ?>
                        <tr>
                            <td><?php echo $row['TENCHUCVU'] ?></td>
                            <td id="<?php echo $row['IDCV'] ?>">
                                <button class='btn btn-primary btn-sm' onclick='suacv(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                <button class='btn btn-danger btn-sm' onclick='xoacv(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- CẤP BÀI BÁO KHOA HỌC -->
        <div class="card">
            <div class="card-header">
                <h4>Cấp bài báo khoa học</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm themcbb"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                <table id="bangc" class="table table-bordered table-hover">
                    <thead>
                        <tr style="background:#e9ecef;">
                            <th class="giua">Cấp bài báo khoa học</th>
                            <th class="giua" style="width: 100px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($cbb)) { ?>
                        <tr>
                            <td><?php echo $row['TENCAP'] ?></td>
                            <td id="<?php echo $row['IDC'] ?>">
                                <button class='btn btn-primary btn-sm' onclick='suac(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                <button class='btn btn-danger btn-sm' onclick='xoac(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- LOẠI HÌNH NGHIÊN CỨU NCKH -->
        <div class="card">
            <div class="card-header">
                <h4>Cấp loại hình nghiên cứu khoa học</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm themlh"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                <table id="banglh" class="table table-bordered table-hover">
                    <thead>
                        <tr style="background:#e9ecef;">
                            <th class="giua">Loại hình NCKH</th>
                            <th class="giua" style="width: 100px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($lh)) { ?>
                        <tr>
                            <td><?php echo $row['TENLOAI'] ?></td>
                            <td id="<?php echo $row['IDLH'] ?>">
                                <button class='btn btn-primary btn-sm' onclick='sualh(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                <button class='btn btn-danger btn-sm' onclick='xoalh(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- LĨNH VỰC NGHIÊN CỨU KHOA HỌC -->
        <div class="card">
            <div class="card-header">
                <h4>Cấp lĩnh vực nghiên cứu khoa học</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm themlv"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                <table id="banglv" class="table table-bordered table-hover">
                    <thead>
                        <tr style="background:#e9ecef;">
                            <th class="giua">Cấp lĩnh vực NCKH</th>
                            <th class="giua" style="width: 100px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($lv)) { ?>
                        <tr>
                            <td><?php echo $row['TENLINHVUC'] ?></td>
                            <td id="<?php echo $row['IDLV'] ?>">
                                <button class='btn btn-primary btn-sm' onclick='sualv(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                <button class='btn btn-danger btn-sm' onclick='xoalv(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- SỐ TIẾT QUY ĐỔI -->
        <div class="card">
            <div class="card-header">
                <h4>Số tiết qui đổi</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm themstqd"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm mới</a><br><br>
                <table id="bangstqd" class="table table-bordered table-hover">
                    <thead>
                        <tr style="background:#e9ecef;">
                            <th class="giua">Từ số</th>
                            <th class="giua">Đến số</th>
                            <th class="giua">Hệ số</th>
                            <th class="giua">Số tiết tối đa</th>
                            <th class="giua" style="width: 100px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($stqd)) { ?>
                        <tr>
                            <td class="giua"><?php echo $row['BATDAU'] ?></td>
                            <td class="giua"><?php echo $row['KETTHUC'] ?></td>
                            <td class="giua"><?php echo $row['HESO'] ?></td>
                            <td class="giua"><?php echo $row['TOIDA'] ?></td>
                            <td id="<?php echo $row['IDS'] ?>">
                                <button class='btn btn-primary btn-sm' onclick='suastqd(this)' title='Sửa'><i class="fas fa-edit"></i></button>&ensp;
                                <button class='btn btn-danger btn-sm' onclick='xoastqd(this)' title='Xóa'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>
<!-- Modal thêm khoa bộ môn -->
<div class="modal fade" id="modal-them-khoa-bo-mon" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm khoa bộ môn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên khoa bộ môn</label>
                    <input type="text" class="form-control" id="tenkbm" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themkbm">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa khoa bộ môn -->
<div class="modal fade" id="modal-sua-khoa-bo-mon" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa khoa bộ môn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên khoa bộ môn</label>
                    <input type="text" class="form-control" id="tenkbmsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="suakbm">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa khoa bộ môn -->
<div class="modal fade" id="modal-xoa-khoa-bo-mon" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa khoa bộ môn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa trình độ này?</strong><hr>
                    <b>Trình độ:</b> <span id="tenkbmxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="xoakbm">Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal thêm trình độ chuyên môn -->
<div class="modal fade" id="modal-them-trinh-do-chuyen-mon" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm trình độ chuyên môn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên trình độ chuyên môn</label>
                    <input type="text" class="form-control" id="tentdcm" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themtdcm">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa trình độ chuyên môn -->
<div class="modal fade" id="modal-sua-trinh-do-chuyen-mon" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa trình độ chuyên môn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên trình độ chuyên môn</label>
                    <input type="text" class="form-control" id="tentdcmsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="suatdcm">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa trình độ chuyên môn -->
<div class="modal fade" id="modal-xoa-trinh-do-chuyen-mon" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa trình độ chuyên môn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa trình độ này?</strong><hr>
                    <b>Trình độ:</b> <span id="tentdcmxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="xoatdcm">Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal thêm chức danh giảng viên -->
<div class="modal fade" id="modal-them-chuc-danh-giang-vien" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm chức danh giảng viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên chức danh</label>
                    <input type="text" class="form-control" id="tencdgv" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themcdgv">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa chức danh giảng viên -->
<div class="modal fade" id="modal-sua-chuc-danh-giang-vien" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa chức danh giảng viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên chức danh giảng viên</label>
                    <input type="text" class="form-control" id="tencdgvsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="bsuacdgv">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa chứ danh giảng viên -->
<div class="modal fade" id="modal-xoa-chuc-danh-giang-vien" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa chức danh giảng viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa chức danh này?</strong><hr>
                    <b>Chức danh:</b> <span id="tencdgvxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="bxoacdgv">Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal thêm học vị -->
<div class="modal fade" id="modal-them-hoc-vi" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm học vị</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên học vị</label>
                    <input type="text" class="form-control" id="tenhv" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themhv">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa học vị -->
<div class="modal fade" id="modal-sua-hoc-vi" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa học vị</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên học vị</label>
                    <input type="text" class="form-control" id="tenhvsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="bsuahv">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa học vị -->
<div class="modal fade" id="modal-xoa-hoc-vi" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa học vị</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa học vị này?><hr>
                    <b>Học vị:</b> <span id="tenhvxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="bxoahv">Xóa</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal thêm chức danh khoa học -->
<div class="modal fade" id="modal-them-chuc-danh-khoa-hoc" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm chức danh khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên chức danh</label>
                    <input type="text" class="form-control" id="tencdkh" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themcdkh">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa chức danh khoa học -->
<div class="modal fade" id="modal-sua-chuc-danh-khoa-hoc" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa chức danh khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên chức danh</label>
                    <input type="text" class="form-control" id="tencdkhsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="bsuacdkh">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa chứ danh khoa học -->
<div class="modal fade" id="modal-xoa-chuc-danh-khoa-hoc" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa chức danh khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa chức danh này?</strong><hr>
                    <b>Chức danh:</b> <span id="tencdkhxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="bxoacdkh">Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal thêm chức vụ -->
<div class="modal fade" id="modal-them-chuc-vu" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm chức vụ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên chức vụ</label>
                    <input type="text" class="form-control" id="tencv" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themcv">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa chức vụ -->
<div class="modal fade" id="modal-sua-chuc-vu" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa chức vụ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên chứ vụ</label>
                    <input type="text" class="form-control" id="tencvsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="bsuacv">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa chức vụ -->
<div class="modal fade" id="modal-xoa-chuc-vu" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa học vị</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa học vị này?><hr>
                    <b>Học vị:</b> <span id="tencvxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="bxoacv">Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal thêm cấp bài báo -->
<div class="modal fade" id="modal-them-cap-bai-bao" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm cấp bài báo khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên cấp bài báo</label>
                    <input type="text" class="form-control" id="tenc" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themc">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa cấp bài báo -->
<div class="modal fade" id="modal-sua-cap-bai-bao" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa cấp bài báo khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên cấp bài báo</label>
                    <input type="text" class="form-control" id="tencsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="bsuac">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa cấp bài báo -->
<div class="modal fade" id="modal-xoa-cap-bai-bao" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa cấp bài báo khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa cấp bài báo này?</strong><hr>
                    <b>Cấp bài báo:</b> <span id="tencxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="bxoac">Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal thêm cấp đề tài -->
<div class="modal fade" id="modal-them-cap-de-tai" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm cấp nghiên cứu khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên cấp nghiên cứu khoa học</label>
                    <input type="text" class="form-control" id="tencdt" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themcdt">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa cấp đề tài -->
<div class="modal fade" id="modal-sua-cap-de-tai" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa cấp nghiên cứu khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên cấp nghiên cứu khoa học</label>
                    <input type="text" class="form-control" id="tencdtsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="bsuacdt">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa cấp đề tài -->
<div class="modal fade" id="modal-xoa-cap-de-tai" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa cấp nghiên cứu khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa cấp NCKH này?</strong><hr>
                    <b>Cấp nghiên cứu:</b> <span id="tencdtxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="bxoacdt">Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal thêm lĩnh vực khoa học -->
<div class="modal fade" id="modal-them-linh-vuc-khoa-hoc" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm vĩnh vực nghiên cứu khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên lĩnh vực</label>
                    <input type="text" class="form-control" id="tenlv" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themlv">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa lĩnh vực khoa học -->
<div class="modal fade" id="modal-sua-linh-vuc-khoa-hoc" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa lĩnh vực nghiên cứu khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên cấp bài báo</label>
                    <input type="text" class="form-control" id="tenlvsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="bsualv">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa lĩnh vực khoa học -->
<div class="modal fade" id="modal-xoa-linh-vuc-khoa-hoc" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa lĩnh vực nghiên cứu khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa lĩnh vực này?</strong><hr>
                    <b>Tên lĩnh vực:</b> <span id="tenlvxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="bxoalv">Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal thêm loại hình nghiên cứu khoa học -->
<div class="modal fade" id="modal-them-loai-hinh-khoa-hoc" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm loại hình nghiên cứu khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên loại hình</label>
                    <input type="text" class="form-control" id="tenlh" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themlh">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa loại hình nghiên cứu khoa học -->
<div class="modal fade" id="modal-sua-loai-hinh-khoa-hoc" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa loại hình nghiên cứu khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Tên loại hình</label>
                    <input type="text" class="form-control" id="tenlhsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="bsualh">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa loại hình nghiên cứu khoa học -->
<div class="modal fade" id="modal-xoa-loai-hinh-khoa-hoc" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa loại hình nghiên cứu khoa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa loại hình này?</strong><hr>
                    <b>Tên loại hình:</b> <span id="tenlhxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="bxoalh">Xóa</button>
            </div>
        </div>
    </div>
</div>





<!-- Modal thêm số tiết qui đổi -->
<div class="modal fade" id="modal-them-so-tiet-qui-doi" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm số tiết qui đổi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Từ số</label>
                    <input type="text" class="form-control" id="tusostqd" />
                </div>
                <div class="form-group">
                    <label for="tags">Đến số</label>
                    <input type="text" class="form-control" id="densostqd" />
                </div>
                <div class="form-group">
                    <label for="tags">Hệ số tương ứng</label>
                    <input type="text" class="form-control" id="hesostqd" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="themstqd">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal sửa số tiết qui đổi -->
<div class="modal fade" id="modal-sua-so-tiet-qui-doi" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa số tiết qui đổi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tags">Từ số</label>
                    <input type="text" class="form-control" id="tusostqdsua" />
                </div>
                <div class="form-group">
                    <label for="tags">Đến số</label>
                    <input type="text" class="form-control" id="densostqdsua" />
                </div>
                <div class="form-group">
                    <label for="tags">Hệ số tương ứng</label>
                    <input type="text" class="form-control" id="hesostqdsua" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="bsuastqd">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal xóa số tiết qui đổi -->
<div class="modal fade" id="modal-xoa-so-tiet-qui-doi" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xóa số tiết qui đổi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <strong>Bạn có chắc xóa số tiết qui đổi?</strong><hr>
                    <b>Tên loại hình:</b> <span id="tenstqdxoa"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="bxoastqd">Xóa</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var thiskbm,thistdcm,thiscdgv,thishv,thiscdkh,thiscv,thisc,thiscdt,thislv,thislh,thisstqd;
    $(document).ready(function(){
        $('#quanlychung').addClass('active');
        $('.tieude').html('Quản lý chung');
        $('.themkbm').on('click',function(){
            $('#modal-them-khoa-bo-mon').modal('show');
        });
        $('.themtdcm').on('click',function(){
            $('#modal-them-trinh-do-chuyen-mon').modal('show');
        });
        $('.themcdgv').on('click',function(){
            $('#modal-them-chuc-danh-giang-vien').modal('show');
        });
        $('.themhv').on('click',function(){
            $('#modal-them-hoc-vi').modal('show');
        });
        $('.themcdkh').on('click',function(){
            $('#modal-them-chuc-danh-khoa-hoc').modal('show');
        });
        $('.themcv').on('click',function(){
            $('#modal-them-chuc-vu').modal('show');
        });
        $('.themcbb').on('click',function(){
            $('#modal-them-cap-bai-bao').modal('show');
        });
        $('.themcdt').on('click',function(){
            $('#modal-them-cap-de-tai').modal('show');
        });
        $('.themlv').on('click',function(){
            $('#modal-them-linh-vuc-khoa-hoc').modal('show');
        });
        $('.themlh').on('click',function(){
            $('#modal-them-loai-hinh-khoa-hoc').modal('show');
        });
        $('.themstqd').on('click',function(){
            $('#modal-them-so-tiet-qui-doi').modal('show');
        });
        // TRÌNH ĐỘ CHUYÊN MÔN
        $('#themkbm').on('click',function(){
            if ($('#tenkbm').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên khoa bộ môn');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_khoa_bo_mon.php',
                    type: 'POST',
                    data: {
                        ten: $('#tenkbm').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tenkbm').val().trim()+"</td><td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='suakbm(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoakbm(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#bangkbm tbody").append(tr);
                            thanhcong('Thêm khoa bộ môn thành công');
                            $('#modal-them-khoa-bo-mon').find('input').val('');
                            $('#modal-them-khoa-bo-mon').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#suakbm').on('click',function(){
            if ($('#tenkbmsua').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên khoa bộ môn');
                return;
            }
            if(kiemtraketnoi()){
                $.ajax({
                    url: 'ajax/ajax_sua_khoa_bo_mon.php',
                    type: 'POST',
                    data: {
                        ten: $('#tenkbmsua').val().trim(),
                        ma: $(thiskbm).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thiskbm).parent('td').parent('tr').find('td:nth-child(1)').text($('#tenkbmsua').val().trim());
                            thiskbm=null;
                            thanhcong('Sửa khoa bộ môn thành công');
                            $('#modal-sua-khoa-bo-mon').find('input').val('');
                            $('#modal-sua-khoa-bo-mon').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });

        $('#xoakbm').on('click',function(){
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_khoa_bo_mon.php',
                    type: 'POST',
                    data: {
                        ma: $(thiskbm).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thiskbm).parent('td').parent('tr').remove();
                            thiskbm=null;
                            thanhcong('Xóa khoa bộ môn thành công');
                            $('#modal-xoa-khoa-bo-mon').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // TRÌNH ĐỘ CHUYÊN MÔN
        $('#themtdcm').on('click',function(){
            if ($('#tentdcm').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên trình độ');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_trinh_do_chuyen_mon.php',
                    type: 'POST',
                    data: {
                        ten: $('#tentdcm').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tentdcm').val().trim()+"</td><td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='sua(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoa(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#bangtdcm tbody").append(tr);
                            thanhcong('Thêm trình độ thành công');
                            $('#modal-them-trinh-do-chuyen-mon').find('input').val('');
                            $('#modal-them-trinh-do-chuyen-mon').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#suatdcm').on('click',function(){
            if ($('#tentdcmsua').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên trình độ');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_trinh_do_chuyen_mon.php',
                    type: 'POST',
                    data: {
                        ten: $('#tentdcmsua').val().trim(),
                        ma: $(thistdcm).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thistdcm).parent('td').parent('tr').find('td:nth-child(1)').text($('#tentdcmsua').val().trim());
                            thistdcm=null;
                            thanhcong('Sửa trình độ thành công');
                            $('#modal-sua-trinh-do-chuyen-mon').find('input').val('');
                            $('#modal-sua-trinh-do-chuyen-mon').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#xoatdcm').on('click',function(){
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_trinh_do_chuyen_mon.php',
                    type: 'POST',
                    data: {
                        ma: $(thistdcm).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thistdcm).parent('td').parent('tr').remove();
                            thistdcm=null;
                            thanhcong('Sửa trình độ thành công');
                            $('#modal-xoa-trinh-do-chuyen-mon').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // CHỨC DANH GIẢNG VIÊN
        $('#themcdgv').on('click',function(){
            if ($('#tencdgv').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên chứ danh');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_chuc_danh_giang_vien.php',
                    type: 'POST',
                    data: {
                        ten: $('#tencdgv').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tencdgv').val().trim()+"</td><td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='suacdgv(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoacdgv(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#bangcdgv tbody").append(tr);
                            thanhcong('Thêm chức danh thành công');
                            $('#modal-them-chuc-danh-giang-vien').find('input').val('');
                            $('#modal-them-chuc-danh-giang-vien').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bsuacdgv').on('click',function(){
            if ($('#tencdgvsua').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên chức danh');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_chuc_danh_giang_vien.php',
                    type: 'POST',
                    data: {
                        ten: $('#tencdgvsua').val().trim(),
                        ma: $(thiscdgv).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thiscdgv).parent('td').parent('tr').find('td:nth-child(1)').text($('#tencdgvsua').val().trim());
                            thiscdgv=null;
                            thanhcong('Sửa chức danh thành công');
                            $('#modal-sua-chuc-danh-giang-vien').find('input').val('');
                            $('#modal-sua-chuc-danh-giang-vien').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bxoacdgv').on('click',function(){
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_chuc_danh_giang_vien.php',
                    type: 'POST',
                    data: {
                        ma: $(thiscdgv).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thiscdgv).parent('td').parent('tr').remove();
                            thiscdgv=null;
                            thanhcong('Xóa chức danh thành công');
                            $('#modal-xoa-chuc-danh-giang-vien').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // HỌC VỊ
        $('#themhv').on('click',function(){
            if ($('#tenhv').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên chứ danh');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_hoc_vi.php',
                    type: 'POST',
                    data: {
                        ten: $('#tenhv').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tenhv').val().trim()+"</td><td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='suahv(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoahv(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#banghv tbody").append(tr);
                            thanhcong('Thêm học vị thành công');
                            $('#modal-them-hoc-vi').find('input').val('');
                            $('#modal-them-hoc-vi').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bsuahv').on('click',function(){
            if ($('#tenhvsua').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên chức danh');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_hoc_vi.php',
                    type: 'POST',
                    data: {
                        ten: $('#tenhvsua').val().trim(),
                        ma: $(thishv).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thishv).parent('td').parent('tr').find('td:nth-child(1)').text($('#tenhvsua').val().trim());
                            thishv=null;
                            thanhcong('Sửa học vị thành công');
                            $('#modal-sua-hoc-vi').find('input').val('');
                            $('#modal-sua-hoc-vi').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bxoahv').on('click',function(){
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_hoc_vi.php',
                    type: 'POST',
                    data: {
                        ma: $(thishv).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thishv).parent('td').parent('tr').remove();
                            thishv=null;
                            thanhcong('Xóa học vị thành công');
                            $('#modal-xoa-hoc-vi').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // MAIL 
        $('#bluumail').click(()=>{
            if(!$('#tenmail').val().trim() || !$('#matkhaumail').val().trim()){
                khongthanhcong('Vui lòng nhập đầy đủ thông tin mail');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_cau_hinh_mail.php',
                    type: 'POST',
                    data: {
                        ten:$('#tenmail').val().trim(),
                        mk:$('#matkhaumail').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1){
                            thanhcong('Thêm chứ danh thành công');
                        }
                        else{
                            khongthanhcong('Hiện tại bạn đang sử dụng mail này');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // CHỨC DANH KHOA HỌC
        $('#themcdkh').on('click',function(){
            if ($('#tencdkh').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên chức danh');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_chuc_danh_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tencdkh').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tencdkh').val().trim()+"</td><td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='suacdkh(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoacdkh(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#bangcdkh tbody").append(tr);
                            thanhcong('Thêm chứ danh thành công');
                            $('#modal-them-chuc-danh-khoa-hoc').find('input').val('');
                            $('#modal-them-chuc-danh-khoa-hoc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bsuacdkh').on('click',function(){
            if ($('#tencdkhsua').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên chức danh');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_chuc_danh_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tencdkhsua').val().trim(),
                        ma: $(thiscdkh).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thiscdkh).parent('td').parent('tr').find('td:nth-child(1)').text($('#tencdkhsua').val().trim());
                            thiscdkh=null;
                            thanhcong('Sửa chức danh thành công');
                            $('#modal-sua-chuc-danh-khoa-hoc').find('input').val('');
                            $('#modal-sua-chuc-danh-khoa-hoc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bxoacdkh').on('click',function(){
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_chuc_danh_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ma: $(thiscdkh).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thiscdkh).parent('td').parent('tr').remove();
                            thiscdkh=null;
                            thanhcong('Xóa chức danh thành công');
                            $('#modal-xoa-chuc-danh-khoa-hoc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // CHỨC VỤ
        $('#themcv').on('click',function(){
            if ($('#tencv').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên chức vụ');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_chuc_vu.php',
                    type: 'POST',
                    data: {
                        ten: $('#tencv').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tencv').val().trim()+"</td><td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='suacv(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoacv(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#bangcv tbody").append(tr);
                            thanhcong('Thêm chức vụ thành công');
                            $('#modal-them-chuc-vu').find('input').val('');
                            $('#modal-them-chuc-vu').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bsuacv').on('click',function(){
            if ($('#tencvsua').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên chức vụ');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_chuc_vu.php',
                    type: 'POST',
                    data: {
                        ten: $('#tencvsua').val().trim(),
                        ma: $(thiscv).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thiscv).parent('td').parent('tr').find('td:nth-child(1)').text($('#tencvsua').val().trim());
                            thiscv=null;
                            thanhcong('Sửa chức vụ thành công');
                            $('#modal-sua-chuc-vu').find('input').val('');
                            $('#modal-sua-chuc-vu').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bxoacv').on('click',function(){
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_chuc_vu.php',
                    type: 'POST',
                    data: {
                        ma: $(thiscv).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thiscv).parent('td').parent('tr').remove();
                            thiscv=null;
                            thanhcong('Xóa chức vụ thành công');
                            $('#modal-xoa-chuc-vu').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // CẤP BÀI BÁO KHOA HỌC
        $('#themc').on('click',function(){
            if ($('#tenc').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên cấp');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_cap_bao_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tenc').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tenc').val().trim()+"</td><td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='suac(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoac(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#bangc tbody").append(tr);
                            thanhcong('Thêm cấp bài báo thành công');
                            $('#modal-them-cap-bai-bao').find('input').val('');
                            $('#modal-them-cap-bai-bao').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bsuac').on('click',function(){
            if ($('#tencsua').val().trim()==''){
                khongthanhcong('Vui lòng nhập cấp báo khoa học');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_cap_bao_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tencsua').val().trim(),
                        ma: $(thisc).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thisc).parent('td').parent('tr').find('td:nth-child(1)').text($('#tencsua').val().trim());
                            thisc=null;
                            thanhcong('Sửa cấp bài báo thành công');
                            $('#modal-sua-cap-bai-bao').find('input').val('');
                            $('#modal-sua-cap-bai-bao').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bxoac').on('click',function(){
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_cap_bao_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ma: $(thisc).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thisc).parent('td').parent('tr').remove();
                            thisc=null;
                            thanhcong('Xóa cấp bài báo thành công');
                            $('#modal-xoa-cap-bai-bao').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // CẤP BÀI BÁO KHOA HỌC
        $('#themcdt').on('click',function(){
            if ($('#tencdt').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên cấp NCKH');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_cap_nghien_cuu_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tencdt').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tencdt').val().trim()+"</td><td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='suacdt(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoacdt(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#bangcdt tbody").append(tr);
                            thanhcong('Thêm cấp bài báo thành công');
                            $('#modal-them-cap-de-tai').find('input').val('');
                            $('#modal-them-cap-de-tai').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bsuacdt').on('click',function(){
            if ($('#tencdtsua').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên cấp NCKH');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_cap_de_tai_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tencdtsua').val().trim(),
                        ma: $(thiscdt).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thiscdt).parent('td').parent('tr').find('td:nth-child(1)').text($('#tencdtsua').val().trim());
                            thiscdt=null;
                            thanhcong('Sửa cấp bài báo thành công');
                            $('#modal-sua-cap-de-tai').find('input').val('');
                            $('#modal-sua-cap-de-tai').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bxoacdt').on('click',function(){
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_cap_nghien_cuu_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ma: $(thiscdt).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thiscdt).parent('td').parent('tr').remove();
                            thiscdt=null;
                            thanhcong('Xóa cấp NCKH thành công');
                            $('#modal-xoa-cap-de-tai').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // LĨNH VỰC NGHIÊN CỨU KHOA HỌC
        $('#themlv').on('click',function(){
            if ($('#tenlv').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên lĩnh vực');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_linh_vuc_nghien_cuu_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tenlv').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tenlv').val().trim()+"</td><td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='sualv(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoalv(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#banglv tbody").append(tr);
                            thanhcong('Thêm cấp đề tài thành công');
                            $('#modal-them-linh-vuc-khoa-hoc').find('input').val('');
                            $('#modal-them-linh-vuc-khoa-hoc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bsualv').on('click',function(){
            if ($('#tenlvsua').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên cấp NCKH');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_linh_vuc_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tenlvsua').val().trim(),
                        ma: $(thislv).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thislv).parent('td').parent('tr').find('td:nth-child(1)').text($('#tenlvsua').val().trim());
                            thislv=null;
                            thanhcong('Sửa lĩnh vực nghiên cứu khoa học thành công');
                            $('#modal-sua-linh-vuc-khoa-hoc').find('input').val('');
                            $('#modal-sua-linh-vuc-khoa-hoc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bxoalv').on('click',function(){
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_linh_vuc_nghien_cuu_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ma: $(thislv).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thislv).parent('td').parent('tr').remove();
                            thislv=null;
                            thanhcong('Xóa lĩnh vực nghiên cứu khoa học thành công');
                            $('#modal-xoa-linh-vuc-khoa-hoc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        // LOẠI HÌNH NGHIÊN CỨU KHOA HỌC
        $('#themlh').on('click',function(){
            if ($('#tenlh').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên loại hình');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_loai_hinh_nghien_cuu_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tenlh').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tenlh').val().trim()+"</td><td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='sualh(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoalh(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#banglh tbody").append(tr);
                            thanhcong('Thêm loại hình NCKH thành công');
                            $('#modal-them-loai-hinh-khoa-hoc').find('input').val('');
                            $('#modal-them-loai-hinh-khoa-hoc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bsualh').on('click',function(){
            if ($('#tenlhsua').val().trim()==''){
                khongthanhcong('Vui lòng nhập tên loại hình NCKH');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_loai_hinh_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ten: $('#tenlhsua').val().trim(),
                        ma: $(thislh).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thislh).parent('td').parent('tr').find('td:nth-child(1)').text($('#tenlhsua').val().trim());
                            thislh=null;
                            thanhcong('Sửa loại hình NCKH thành công');
                            $('#modal-sua-loai-hinh-khoa-hoc').find('input').val('');
                            $('#modal-sua-loai-hinh-khoa-hoc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bxoalh').on('click',function(){
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_xoa_loai_hinh_nghien_cuu_khoa_hoc.php',
                    type: 'POST',
                    data: {
                        ma: $(thislh).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thislh).parent('td').parent('tr').remove();
                            thislh=null;
                            thanhcong('Xóa loại hình NCKH thành công');
                            $('#modal-xoa-loai-hinh-khoa-hoc').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });

        // SỐ TIẾT QUI ĐỔI
        $('#themstqd').on('click',function(){
            if ($('#tusostqd').val().trim()=='' || $('#densostqd').val().trim()=='' || $('#hesostqd').val().trim()=='' || !jQuery.isNumeric($('#tusostqd').val().trim())|| !jQuery.isNumeric($('#densostqd').val().trim()) || !jQuery.isNumeric($('#hesostqd').val().trim())){
                khongthanhcong('Vui lòng nhập đủ thông tin số tiết qui đổi');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_them_so_tiet_qui_doi.php',
                    type: 'POST',
                    data: {
                        tu: $('#tusostqd').val().trim(),
                        den: $('#densostqd').val().trim(),
                        he: $('#hesostqd').val().trim()
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            var tr = "<tr><td>"+$('#tusostqd').val().trim()+"</td><td>"+$('#densostqd').val().trim()+"</td><td>"+$('#hesostqd').val().trim()+"</td><td></td>80<td id='"+mang.ma+"'><button class='btn btn-primary btn-sm suatdcm' onclick='suastqd(this)' title='Sửa'><i class='fas fa-edit'></i></button>&ensp;<button class='btn btn-danger btn-sm xoatdcm' onclick='xoastqd(this)' title='Xóa'><i class='fas fa-trash'></i></button></td></tr>";
                            $("#bangstqd tbody").append(tr);
                            thanhcong('Thêm số tiết qui đổi thành công');
                            $('#modal-them-so-tiet-qui-doi').find('input').val('');
                            $('#modal-them-so-tiet-qui-doi').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bsuastqd').on('click',function(){
            if ($('#tusostqdsua').val().trim()=='' || $('#densostqdsua').val().trim()=='' || $('#hesostqdsua').val().trim()=='' || !jQuery.isNumeric($('#tusostqdsua').val().trim())|| !jQuery.isNumeric($('#densostqdsua').val().trim()) || !jQuery.isNumeric($('#hesostqdsua').val().trim())){
                khongthanhcong('Vui lòng nhập đủ thông tin số tiết qui đổi');
                return;
            }
            if(kiemtraketnoi()){
                // Ajax
                $.ajax({
                    url: 'ajax/ajax_sua_so_tiet_qui_doi.php',
                    type: 'POST',
                    data: {
                        tu: $('#tusostqdsua').val().trim(),
                        den: $('#densostqdsua').val().trim(),
                        he: $('#hesostqdsua').val().trim(),
                        ma: $(thisstqd).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thisstqd).parent('td').parent('tr').find('td:nth-child(1)').text($('#tusostqdsua').val().trim());
                            $(thisstqd).parent('td').parent('tr').find('td:nth-child(2)').text($('#densostqdsua').val().trim());
                            $(thisstqd).parent('td').parent('tr').find('td:nth-child(3)').text($('#hesostqdsua').val().trim());
                            thisstqd=null;
                            thanhcong('Sửa số tiết qui đổi thành công');
                            $('#modal-sua-so-tiet-qui-doi').find('input').val('');
                            $('#modal-sua-so-tiet-qui-doi').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
        $('#bxoastqd').on('click',function(){
            if(kiemtraketnoi()){
                $.ajax({
                    url: 'ajax/ajax_xoa_so_tiet_qui_doi.php',
                    type: 'POST',
                    data: {
                        ma: $(thisstqd).parent('td').attr('id')
                    },
                    beforeSend: function () {
                        canhbao('Đang xử lý dữ liệu');
                    },
                    success: function (data) {
                        $.notifyClose();
                        var mang = $.parseJSON(data);
                        if(mang.trangthai==1 && mang.ma!=0){
                            $(thisstqd).parent('td').parent('tr').remove();
                            thisstqd=null;
                            thanhcong('Xóa số tiết qui đổi thành công');
                            $('#modal-xoa-so-tiet-qui-doi').modal('hide');
                        }
                        else{
                            khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                        }
                    },
                    error: function () {
                        khongthanhcong('Xảy ra lỗi! Vui lòng thử lại');
                    }
                });
            }
            else
                khongthanhcong('Không có kết nối internet');
        });
    });
    suakbm=(t)=>{
        $('#tenkbmsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());
        thiskbm = t;
        $('#modal-sua-khoa-bo-mon').modal('show');
    }
    xoakbm=(t)=>{
        $('#tenkbmxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());
        thiskbm = t;
        $('#modal-xoa-khoa-bo-mon').modal('show');
    }
    sua=(t)=>{
        $('#tentdcmsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());
        thistdcm = t;
        $('#modal-sua-trinh-do-chuyen-mon').modal('show');
    }
    xoa=(t)=>{
        $('#tentdcmxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());
        thistdcm = t;
        $('#modal-xoa-trinh-do-chuyen-mon').modal('show');
    }
    suacdgv=(t)=>{
        $('#tencdgvsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());
        thiscdgv = t;
        $('#modal-sua-chuc-danh-giang-vien').modal('show');
    }
    xoacdgv=(t)=>{
        $('#tencdgvxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());
        thiscdgv = t;
        $('#modal-xoa-chuc-danh-giang-vien').modal('show');
    }
    suahv=(t)=>{
        $('#tenhvsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());
        thishv = t;
        $('#modal-sua-hoc-vi').modal('show');
    }
    xoahv=(t)=>{
        $('#tenhvxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());
        thishv = t;
        $('#modal-xoa-hoc-vi').modal('show');
    }
    suacdkh=(t)=>{$('#tencdkhsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thiscdkh = t;$('#modal-sua-chuc-danh-khoa-hoc').modal('show');
    }
    xoacdkh=(t)=>{$('#tencdkhxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thiscdkh = t;$('#modal-xoa-chuc-danh-khoa-hoc').modal('show');
    }
    suacv=(t)=>{$('#tencvsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thiscv = t;$('#modal-sua-chuc-vu').modal('show');
    }
    xoacv=(t)=>{$('#tencvxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thiscv = t;$('#modal-xoa-chuc-vu').modal('show');
    }
    suac=(t)=>{$('#tencsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thisc = t;$('#modal-sua-cap-bai-bao').modal('show');
    }
    xoac=(t)=>{$('#tencxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thisc = t;$('#modal-xoa-cap-bai-bao').modal('show');
    }
    suacdt=(t)=>{$('#tencdtsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thiscdt = t;$('#modal-sua-cap-de-tai').modal('show');
    }
    xoacdt=(t)=>{$('#tencdtxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thiscdt = t;$('#modal-xoa-cap-de-tai').modal('show');
    }
    sualv=(t)=>{$('#tenlvsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thislv = t;$('#modal-sua-linh-vuc-khoa-hoc').modal('show');
    }
    xoalv=(t)=>{$('#tenlvxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thislv = t;$('#modal-xoa-linh-vuc-khoa-hoc').modal('show');
    }
    sualh=(t)=>{$('#tenlhsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thislh = t;$('#modal-sua-loai-hinh-khoa-hoc').modal('show');
    }
    xoalh=(t)=>{$('#tenlhxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thislh = t;$('#modal-xoa-loai-hinh-khoa-hoc').modal('show');
    }
    suastqd=(t)=>{$('#tusostqdsua').val($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());$('#densostqdsua').val($(t).parent('td').parent('tr').find('td:nth-child(2)').text().trim());$('#hesostqdsua').val($(t).parent('td').parent('tr').find('td:nth-child(3)').text().trim());thisstqd = t;$('#modal-sua-so-tiet-qui-doi').modal('show');
    }
    xoastqd=(t)=>{$('#tenstqdxoa').text($(t).parent('td').parent('tr').find('td:nth-child(1)').text().trim());thisstqd = t;$('#modal-xoa-so-tiet-qui-doi').modal('show');
    }
</script>