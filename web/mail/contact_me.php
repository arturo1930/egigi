<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "�El correo no es valido, mensaje sin cuerpo!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'arturomv1930@gmail.com.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "E-GIGI.COM:  $name";
$email_body = "Recibiste un nuevo mensaje de tu sitio web e-gigi.com.\n\n"."Detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTel&eacute;fono: $phone\n\nMensage:\n$message";
$headers = "From: arturomv1930@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>