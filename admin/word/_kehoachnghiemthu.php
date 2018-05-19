<?php session_start(); if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<?php include_once "../../config.php"; ?>
<?php 
	sleep(1);
	function lay_de_xuat_du_an(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT dx.IDDT, dt.MADETAI,`TENDETAI` FROM dexuatdetai dx, detai dt WHERE dx.IDDT = dt.IDDT AND dt.TRANGTHAI = N'Đang thực hiện' ORDER BY dx.IDDX DESC";
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
 <style type="text/css">
 	#bangnoidung tr{
 		cursor: pointer;
 	}
 	.btn{
 		margin-top: 0.5rem;
 	}
 </style>
 <div class="card">
 	<div class="card-header">
 		<h4>Kế hoạch xét chọn</h4>
 		<p>(Chọn/Check đề tài sau đó nhấn nút "Xuất file" để tải file về máy)</p>
 	</div>
 	<div class="card-body">
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  <strong>Lưu ý!</strong><br>
		  1. Cần cập nhật thông tin về HĐ nghiệm thu đề tài tại trang <a href="?p=quanlydetaiduan"><b><u>Quản lý đề tài - dự án</u></b></a> (Tab Xét duyệt)<br>
		  2. Danh sách các đề tài dưới đây không bao gồm những đề tài chờ xét duyệt hoặc đề tài đã nghiệm thu<br>
		  3. Chọn/Check vào đề tài sau đó nút "Xuất file" để tải file về máy
		</div>
		<form action="word/ke_hoach_nghiem_thu.php" method="POST" target="_blank">
			<input type="text" name="dachon" id="i_dachon" hidden="hidden">
			<span>Số đề tài đã chọn: <b class="dachon">0</b></span><br>
			<button type="submit" class="btn btn-warning"><i class="far fa-file-word"></i> Xuất file</button>
			<hr>
		<table id="bangnoidung" class="table table-hover table-bordered" style="width:100%">
		    <thead>
		        <tr style="background:#e9ecef;">
		        	<th class="giua"><input type="checkbox" id="checkall" style="transform: scale(1.5);"></th>
		            <th class="giua" style="width: 28px;">STT</th>
		            <th class="giua">Mã đề tài</th>
		            <th>Tên đề tài</th>
		            <th style="width: 160px;">Chủ nhiệm đề tài</th>
		        </tr>
		    </thead>
		    <tbody>
		    <?php $stt=1;
		    $detai = lay_de_xuat_du_an();
		     while ($row = mysqli_fetch_assoc($detai)){ ?>
		        <tr>
		        	<th class="giua"><input type="checkbox" lydata="<?php echo $row['IDDT'] ?>" style="transform: scale(1.5);"></th>
		            <th class="giua"><?php echo $stt; ?></th>
		            <th class="giua"><?php echo $row['MADETAI']; ?></th>
		            <td><?php echo $row['TENDETAI']; ?></td>
		            <td><?php echo lay_ten_chu_nhiem_de_tai($row['IDDT']); ?></td>
		        </tr>
		    <?php $stt++; } ?>
		    </tbody>
		</table>
		<hr>
		<span>Số đề tài đã chọn: <b class="dachon">0</b></span><br>
		<button type="submit" class="btn btn-warning"><i class="far fa-file-word"></i> Xuất file</button>
		</form>
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
	});
    $(document).on('click','#checkall',function(){
        $(':checkbox').each(function() {
            if($('#checkall').is(':checked')) this.checked = true;
            else this.checked = false;
        });
    });
    $(document).on('click', 'input', function(){
	    var dt = 0, mang=[];
	    $('#bangnoidung').find('tr:not(:first)').each(function(i, row) {
	        var cols = [];
	        var dem = 1;
	        $(this).each(function(i, col) {
	            if(dem == 1) if ($(this).find('input[type="checkbox"]').is(':checked')){
	            	dt++;
	            	mang.push($(this).find('input[type="checkbox"]').attr('lydata'));
	            }
	            else return;
	            dem++;
	        });
	    });
	    $('.dachon').text(dt);
	    if (dt > 0) {
	    	$('#i_dachon').val(mang);
	    }
    });
</script>

