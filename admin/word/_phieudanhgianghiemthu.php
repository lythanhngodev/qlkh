<?php session_start(); if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<?php include_once "../../config.php"; ?>
<?php 
	sleep(1);
	function lay_de_xuat_du_an(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT dx.IDDT, dt.MADETAI,`TENDETAI` FROM dexuatdetai dx, detai dt WHERE dx.IDDT = dt.IDDT AND (dt.TRANGTHAI = N'Đang thực hiện') ORDER BY dx.IDDX DESC";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
    function lay_ten_chu_nhiem_de_tai($iddt){
        $ketnoi = new clsKetnoi();
        $conn = $ketnoi->ketnoi();
        $query = "SELECT CONCAT(nd.HO,' ',nd.TEN) as HOTEN FROM thanhviendetai tv, nguoidung nd WHERE tv.IDND = nd.IDND AND tv.IDDT = '$iddt' AND tv.TRACHNHIEM=N'Chủ nhiệm'";
        $result = mysqli_query($conn, $query);
        $fetch = mysqli_fetch_assoc($result);
        $hotenchunhiem = $fetch['HOTEN'];
        mysqli_close($conn);
        return $hotenchunhiem;
    }
 ?>
 <div class="card">
 	<div class="card-header">
 		<h4>Phiếu giao nhận sản phẩm</h4>
 		<p>(Ấn nút "Xuất file" để tải file về máy)</p>
 	</div>
 	<div class="card-body">
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  <strong>Lưu ý!</strong> Danh sách các đề tài dưới đây không bao gồm những đề tài chờ xét duyệt hoặc đề tài đã nghiệm thu<br>
		</div>
		<table id="bangnoidung" class="table table-hover table-bordered" style="width:100%">
		    <thead>
		        <tr style="background:#e9ecef;">
		            <th class="giua" style="width: 28px;">STT</th>
		            <th class="giua">Mã đề tài</th>
		            <th>Tên đề tài</th>
		            <th style="width: 160px;">Chủ nhiệm đề tài</th>
		            <th style="width: 70px;" class="giua">Xuất file</th>
		        </tr>
		    </thead>
		    <tbody>
		    <?php $stt=1;
		    $detai = lay_de_xuat_du_an();
		     while ($row = mysqli_fetch_assoc($detai)){ ?>
		        <tr>
		            <th class="giua"><?php echo $stt; ?></th>
		            <th class="giua"><?php echo $row['MADETAI']; ?></th>
		            <td><?php echo $row['TENDETAI']; ?></td>
		            <td><?php echo lay_ten_chu_nhiem_de_tai($row['IDDT']); ?></td>
		            <td class="giua">
		                <a href="word/phieu_danh_gia_nghiem_thu.php?id=<?php echo $row['IDDT']; ?>" target="_blank" class="btn btn-warning btn-sm"><i class="far fa-file-word"></i> Xuất file</a>
		            </td>
		        </tr>
		    <?php $stt++; } ?>
		    </tbody>
		    <tfoot>
		        <tr style="background:#e9ecef;">
		            <th class="giua" style="width: 28px;">STT</th>
		            <th class="giua">Mã đề tài</th>
		            <th>Tên đề tài</th>
		            <th style="width: 160px;">Chủ nhiệm đề tài</th>
		            <th style="width: 70px;" class="giua">Xuất file</th>
		        </tr>
		    </tfoot>
		</table>
 	</div>
 </div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#bangnoidung').DataTable({
        "scrollY":"380px",
        "scrollCollapse": true,
        "paging": false,
        responsive : true
        });
} );
</script>