<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
    if ($loaitaikhoan=='admin'){
        include_once "model/m_trang_chu.php";
        $dknd = dang_ky_nguoi_dung();
        $_dknd = mysqli_num_rows($dknd);
        $xddt = xet_duyet_de_tai();
        $_xddt = mysqli_num_rows($xddt);
        $ntdt = nghiem_thu_de_tai();
        $_ntdt = mysqli_num_rows($ntdt);
        include_once "view/v_trang_chu.php";
    }
    else{
        echo "Đang nâng cấp";
    }
?>
