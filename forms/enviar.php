<?php

require("class.phpmailer.php");
require("class.smtp.php");

$mail = new PHPMailer();
$mail->isSMTP();

$mail->Host = "mail.bairesrealestate.com.ar";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = true;

$mail->Username = 'prueba-hr@bairesrealestate.com.ar';
$mail->Password = '6ZB5G5JtHkMpmtQ';

$mail->From = 'prueba-hr@bairesrealestate.com.ar';
$mail->FromName = "remitente";
$mail->AddAddress('informatica.diaz@gmail.com', "destinatario");

$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->Subject = "Asunto .....";
$mail->Body = "Nombre: ".$_POST['nombre']."<br>Email: ".$_POST['email']."<br>Asunto: ".$_POST['asunto']."<br>Mensaje: ".$_POST['mensaje'];



$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);


if(!$mail->Send())

{
   echo "Error al enviar. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Mensaje enviado!";

?> 
