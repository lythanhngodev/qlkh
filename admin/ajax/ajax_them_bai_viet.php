<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
        exit();
    }
}
$result = Array(
    'trangthai' => 0,
    'ma' => 0
);
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $tenbv = $_POST['ten'];
    $mota = $_POST['mota'];
    $tukhoa = $_POST['tukhoa'];
    $chuyenmuc = $_POST['loaitin'];
    $noidung = $_POST['noidung'];
    $ngaydang = $_POST['ngaydang'];
    $hinhanh = $_POST['hinhanh'];
    $tenbv = mysqli_real_escape_string($conn,$tenbv);
    $linkbv = $ketnoi->to_slug($tenbv);
    $noidung = mysqli_real_escape_string($conn,$noidung);
    $hinhanh = mysqli_real_escape_string($conn,$hinhanh);
    if (empty($hinhanh)) $hinhanh = "images/news.png";
    $sql="";
    if(empty($ngaydang)){
        $sql = "INSERT INTO `baiviet`(`TENBV`, `HINHANH`, `MOTA`, `NOIDUNG`, `LINKBV`,`NGAYDANG`) VALUES ('$tenbv','$hinhanh','$mota','$noidung','$linkbv',null);";
    }
    else{
        $sql = "INSERT INTO `baiviet`(`TENBV`, `HINHANH`, `MOTA`, `NOIDUNG`, `LINKBV`,`NGAYDANG`) VALUES ('$tenbv','$hinhanh','$mota','$noidung','$linkbv','$ngaydang');";
    }
    $mang = explode(',', $tukhoa);
        for ($i=0; $i < count($mang); $i++) { 
            $tv = "SELECT * FROM `tukhoa` WHERE `tenkhoa` = N'$mang[$i]'";
            $kttv = mysqli_query($conn, $tv);
            $demkq = mysqli_num_rows($kttv);
            if ($demkq==0) {
                $tv1="INSERT INTO `tukhoa` (`tenkhoa`) VALUES ('$mang[$i]')";
                mysqli_query($conn, $tv1);
            }
        }
    if(mysqli_query($conn, $sql)===TRUE){
        $idbv = mysqli_insert_id($conn);
        if ($idbv > 0) {
            $mang = explode(',', $tukhoa);
            for ($i=0; $i < count($mang); $i++) { 
                $tv="SELECT idkhoa FROM `tukhoa` WHERE `tenkhoa`=N'$mang[$i]';";
                $kttv = mysqli_query($conn, $tv);
                $kqkq = mysqli_fetch_array($kttv);
                $idtag = $kqkq[0];
                $tv3 = "INSERT INTO `baiviet_tukhoa`(`IDKHOA`, `IDBV`) VALUES ('$idtag','$idbv');";
                mysqli_query($conn, $tv3);
            }
            $sql="INSERT INTO baiviet_chuyenmuc(IDBV, IDCM) VALUES ('$idbv', '$chuyenmuc');";
            mysqli_query($conn, $sql);
            $result['trangthai'] = 1;
        }
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>