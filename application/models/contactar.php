<?php

require_once ("Mail-1.1.12/Mail.php");

$recipients = "info@accesoriosranyelagomez.com.ve";

$headers["nombre"] =addslashes($_POST['nombre']);

$headers["email"] =addslashes($_POST['email']);

$headers["asunto"] =addslashes($_POST['asunto']);

$body["mensaje"]=addslashes($_POST['mensaje']);

$params["host"] = "localhost";

//puerto smtp
$params["port"] = "25";

//activamos la autenticacion, siempre a true
$params["auth"] = true;

//usuario del correo desde el que enviamos, la que se creo o utiliza en la parte numero 1.
$params["username"] = "info@accesoriosranyelagomez.com.ve";

//clave de la cuenta de correo anterior
$params["password"] = "13288507";

// Creamos el objeto mail usando el metodo Mail::factory
$mail_object =& Mail::factory("smtp", $params);

// Enviamos el correo con los datos anteriores
 $mail_object->send($recipients, $headers, $body);