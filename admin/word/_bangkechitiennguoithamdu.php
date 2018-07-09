<?php session_start(); if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();} ?>
<?php sleep(1); ?>
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
 		<h4>Kê chi tiền người tham dự</h4>
 	</div>
 	<div class="card-body">
		<form action="word/bangkechitiennguoithamdu.php" method="POST" target="_blank" id="fr_khnt">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="font-weight-bold">Chủ đề hội nghị</label>
						<input type="text" name="chude" id="cd" class="form-control">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="font-weight-bold">Nội dung tham dự</label>
						<input type="text" name="noidung" id="nd" class="form-control">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="font-weight-bold">Địa điểm</label>
						<input type="text" name="diadiem" id="dd" class="form-control">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="font-weight-bold">Ngày / tháng / năm diễn ra hội nghị</label>
						<input type="date" name="ngaythang" id="nt" class="form-control col-md-4">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="font-weight-bold">Loại kê chi</label>
						<hr>
						<input type="checkbox" id="xetduyet" name="xetduyet" style="transform: scale(2);" checked="checked" onclick="return chon('xetduyet')">&ensp;&ensp;Xét duyệt đề tài
						&ensp;&ensp;
						<input type="checkbox" id="nghiemthu" name="nghiemthu" style="transform: scale(2);" onclick="return chon('nghiemthu')">&ensp;&ensp;Nghiệm thu đề tài
					</div>
				</div>	
			</div>
			<hr>
		<button type="submit" class="btn btn-warning xuat_bkct" onclick="return kiemtra()"><i class="far fa-file-word"></i> Xuất file</button>
		</form>
 	</div>
 </div>
 <script type="text/javascript">
 	function chon(t){
 		if (t=='xetduyet') {
 			if (document.getElementById(t).checked) {
 				document.getElementById(t).checked = true;
 				document.getElementById('nghiemthu').checked=false;
 			}
 		}else{
 			if (document.getElementById(t).checked) {
 				document.getElementById(t).checked = true;
 				document.getElementById('xetduyet').checked=false;
 			}
 		}
 	}
 	function kiemtra(){
 		if (jQuery.isEmptyObject($('#nt').val().trim())) {
 			khongthanhcong("Chưa chọn ngày tháng năm diễ ra hội nghị");
 			return false;
 		}
 		if (!document.getElementById('nghiemthu').checked && !document.getElementById('xetduyet').checked){
 			khongthanhcong("Chưa chọn loại kê chi");
 			return false;
 		}

 	}
 </script>