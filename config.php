<?php 
	$qlkh = array(
		'HOSTGOC' => 'http://localhost/qlkh/',
		'HOSTADMIN' => 'http://localhost/qlkh/admin/'
		//'HOSTGOC' => 'http://115.79.120.115:8080/qlkh/',
		//'HOSTADMIN' => 'http://115.79.120.115:8080/qlkh/admin/'
	);
	class clsKetnoi
	{
		private $maychu ="localhost";
		private $tendangnhap="root";
		private $matkhau="";
		private $csdl="nckh";

		public function ketnoi(){
			$conn=@mysqli_connect($this->maychu, $this->tendangnhap, $this->matkhau);
			mysqli_select_db($conn, $this->csdl);
			mysqli_query($conn, "SET character_set_results=utf8");
			mb_language('uni');
			mb_internal_encoding('UTF-8');
			mysqli_query($conn, "set names 'utf8'");
			return $conn;
		}
		public function tontai($hoi){
			$conn = $this->ketnoi();
			$ex  = mysqli_query($conn,$hoi);
			$dem = mysqli_num_rows($ex);
			mysqli_close($conn);
			if ($dem>0)
				return true;
			else
				return false;
		}
		public function lay1giatri($hoi){
			$conn = $this->ketnoi();
			$ex  = mysqli_query($conn,$hoi);
			$kq = mysqli_fetch_array($ex);
			return $kq[0];
		}
		public function checklogin($tdn,$pas)
		{
			$conn = $this->ketnoi();
			$tdn = mysqli_real_escape_string($conn,$tdn);
			$pas = mysqli_real_escape_string($conn,$pas);
			if(!($this->tontai("SELECT * FROM nguoidung WHERE (BINARY MAIL = '$tdn' OR BINARY TENDANGNHAP = '$tdn') AND (BINARY MATKHAU = '".md5($pas)."') AND TRANGTHAI='binhthuong'"))){
				mysqli_close($conn);
				return false;
			}
			else{
				mysqli_close($conn);
				return true;
			}
		}
		public function chuoingaunhien($sokytu){
		    $bangchucai = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		    $matkhauduoctao = array();
		    $chieudaimang = strlen($bangchucai) - 1;
		    for ($i = 0; $i < $sokytu; $i++) {
		        $n = rand(0, $chieudaimang);
		        $matkhauduoctao[] = $bangchucai[$n];
		    }
		    return implode($matkhauduoctao); //turn the array into a string
		}
		public function to_slug($str) {
		    $str = trim(mb_strtolower($str));
		    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
		    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
		    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
		    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
		    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
		    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
		    $str = preg_replace('/(đ)/', 'd', $str);
		    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
		    $str = preg_replace('/([\s]+)/', '-', $str);
		    $str = str_replace(' ', '', $str);
		    return $str;
		}
	}
	
 ?>