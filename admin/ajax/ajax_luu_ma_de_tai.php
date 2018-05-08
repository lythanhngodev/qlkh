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
    $dt = $_POST['dt'];
    $ma = $_POST['ma'];
    $time = time();
    $matime = $ma.$time;
    $ma = mysqli_real_escape_string($conn,$ma);
    $dt = mysqli_real_escape_string($conn,$dt);
    $dt = intval($dt);
    $sql = "
        UPDATE detai
        SET
          MADETAI = '$matime'
        WHERE
          IDDT = '$dt' AND
          ((NOT EXISTS (SELECT * FROM (SELECT * FROM detai) AS t WHERE t.MADETAI = N'$ma') OR EXISTS (SELECT * FROM (SELECT * FROM detai) AS t WHERE t.MADETAI = N'$ma' AND t.IDDT = '$dt')));
    ";
    $sql.= "
        UPDATE detai
        SET
          MADETAI = '$ma'
        WHERE
          IDDT = '$dt' AND
          ((NOT EXISTS (SELECT * FROM (SELECT * FROM detai) AS t WHERE t.MADETAI = N'$ma') OR EXISTS (SELECT * FROM (SELECT * FROM detai) AS t WHERE t.MADETAI = N'$ma' AND t.IDDT = '$dt')))
    ";
    if(mysqli_multi_query($conn, $sql)===TRUE){
        $row = mysqli_affected_rows($conn);
        if($row==0) $result['trangthai'] = 0;
        else
            $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>