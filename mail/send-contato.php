<?php


$nome=$_POST["nome"];
$email=$_POST["email"];
$assunto=$_POST["assunto"];
$mensagem=$_POST["mensagem"];

require 'PHPMailerAutoload.php';

$mail = new PHPMailer();

//$mail->SMTPDebug = 3;
$mail->Charset = 'UTF-8'; //Linguagem				// Enable verbose debug output
$mail->isSMTP();									// Set mailer to use SMTP
$mail->Host = 'gateway3.0net.com.br';				// Specify main and backup SMTP servers
$mail->SMTPAuth = true;								// Enable SMTP authentication
$mail->Username = 'caio@magnificodigital.com';				// SMTP username
$mail->Password = 'coxinha#2016';					// SMTP password
//$mail->SMTPSecure = 'tls';						// Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;									// TCP port to connect to

$mail->From = 'caio@magnificodigital.com';
$mail->FromName = 'Contato - Maximus';
//$mail->addAddress('willy@magnificodigital.com');	// Add a recipient
$mail->addAddress('caio@magnificodigital.com');	        // Name is optional
//$mail->addReplyTo('contato@ekoconstrutora.com.br', 'Eko Construtora');
//$mail->addCC('caiocs93@gmail.com');
//$mail->addBCC('bcc@example.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $assunto;
$mail->Body    = 'Nome: ' . $nome . '<br> E-mail: ' . $email. '<br> <br> '. $mensagem;
$mail->AltBody = 'Nome: '. $nome . '\n E-mail: ' . $email . '\n\n ' . $mensagem;

if(!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo "<script> alert('Mensagem enviada com sucesso!'); </script>";
	echo "<script> window.location.href('http://ekoconstrutora.com.br/manual-do-proprietario/jm600/'); </script>";
}
	

?>