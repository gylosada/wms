<?php

$name = $_REQUEST['nombre']
$email = $_REQUEST['email']
$recipient = $_REQUEST['recipient']
$subject = "envio mail"
$message = $_REQUEST['message']
$from = "Enviado desde la web"

echo ($recipient, $subject, $message, $email);
mail($recipient, $subject, $message, $from);

//mail(to,subject,message,headers,parameters);
?>