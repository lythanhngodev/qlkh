<?php
include('class.smtp.php');
include "class.phpmailer.php"; 
function guimail($tieude,$than,$dc,$user,$pass,$port){
    $mail = new PHPMailer();
    $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
    $mail->CharSet = "UTF-8";
    $mail->isSMTP();                         // Set mailer to use SMTP
    $mail->Host = gethostbyname('smtp.gmail.com');          // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                  // Enable SMTP authentication
    $mail->Username = $user;                 // SMTP username
    $mail->Password = $pass;                 // SMTP password
    $mail->SMTPSecure = 'tls';               // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                       // TCP port to connect to
    $mail->setFrom($user, 'Phòng NCKH & HTQT | ĐH SPKT Vĩnh Long');
    $mail->addAddress($dc);     // Add a recipient
    //$mail->addBCC($dc);
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $tieude;
    $mail->Body    = $than;
    $mail->AltBody = 'Thư NCKH HTQT VLUTE';
    if(!$mail->Send())
        return false;
    else
        return true;
}
function guimailnhom($tieude,$than,$dc,$user,$pass,$port){
    $mail = new PHPMailer();
    $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
    $mail->CharSet = "UTF-8";
    $mail->isSMTP();                         // Set mailer to use SMTP
    $mail->Host = gethostbyname('smtp.gmail.com');          // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                  // Enable SMTP authentication
    $mail->Username = $user;                 // SMTP username
    $mail->Password = $pass;                 // SMTP password
    $mail->SMTPSecure = 'tls';               // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                       // TCP port to connect to
    $mail->setFrom($user, 'Phòng NCKH & HTQT | ĐH SPKT Vĩnh Long');
    //$mail->addAddress($dc);     // Add a recipient
    for ($i=0,$l=count($dc);$i<$l;$i++){
        $mail->addBCC($dc[$i]);
    }
    if (empty($dc)) return false;
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $tieude;
    $mail->Body    = $than;
    $mail->AltBody = 'Thư NCKH HTQT VLUTE';
    if(!$mail->Send())
        return false;
    else
        return true;
}
?>