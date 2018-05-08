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
    'trangthai' => 0
);
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $ten = $_POST['ten'];
    $ma = $_POST['ma'];
    $sql = "
        UPDATE chucdanhkhoahoc 
        SET 
            TENCHUCDANH = '$ten' 
        WHERE 
            IDCD = '$ma' AND 
            (NOT EXISTS (SELECT * FROM (SELECT * FROM chucdanhkhoahoc) AS t WHERE t.TENCHUCDANH = N'$ten'))
    ";
    if(mysqli_query($conn, $sql)===TRUE){
        $row = mysqli_affected_rows($conn);
        if($row==0) $result['trangthai'] = 0;
        else
            $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>