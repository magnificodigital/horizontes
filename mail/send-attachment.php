<?php
	
	require 'PHPMailerAutoload.php';
	require '../../../../wp-load.php';

	//Recebe os dados do lightbox
	$nome=$_POST["nome"];
	$email=$_POST["email"];

	//Docs
	$manual=$_POST["manual"];
	$termo=$_POST["termo"];
	$manutencao=$_POST["manutencao"];
	$fornecedores=$_POST["fornecedores"];
	$doc1=$_POST["personalize"];
	$doc2=$_POST["instalacoes"];

	//Tira o endereço http (70 é o numero de caracteres para tirar a url)
	$manual = substr($manual, 70);
	$termo = substr($termo, 70);
	$manutencao = substr($manutencao, 70);
	$fornecedores = substr($fornecedores, 70);
	$doc1 = substr($doc1, 70);
	$doc2 = substr($doc2, 70);

	//Coloca o diretório do arquivo
	$link1 = (WP_CONTENT_DIR . '' . $manual);
	$link2 = (WP_CONTENT_DIR . '' . $termo);
	$link3 = (WP_CONTENT_DIR . '' . $manutencao);
	$link4 = (WP_CONTENT_DIR . '' . $fornecedores);
	$link5 = (WP_CONTENT_DIR . '' . $doc1);
	$link6 = (WP_CONTENT_DIR . '' . $doc2);

	//inicia PHP MAILER
	$mail = new PHPMailer();
	$mail->Charset = 'UTF-8';
	$mail->isSMTP();
	$mail->Host = 'gateway3.0net.com.br';
	$mail->SMTPAuth = true;
	$mail->Username = 'caio@magnificodigital.com';
	$mail->Password = 'coxinha#2016';
	$mail->Port = 587;
	$mail->From = 'caio@magnificodigital.com';
	$mail->FromName = 'Manual do Proprietario - Maximus Residence';
	$mail->addAddress($email);
	$mail->isHTML(true);

	//Adiciona anexos
	$mail->addAttachment($link1);
	$mail->addAttachment($link2);
	$mail->addAttachment($link3);
	$mail->addAttachment($link4);
	$mail->addAttachment($link5);
	$mail->addAttachment($link6);

	$mail->Subject = "Solicitacao de Arquivos";
	$mail->Body    = 'Olá, ' . $nome . '<br>Você solicitou os documentos na área do manual do proprietário do Maximus Residence.<br><br>Em anexo, os arquivos.<br><br>Atenciosamente!<br>Equipe Maximus Residence';
	$mail->AltBody = 'Olá, '. $nome . '\n Você solicitou os documentos na área do manual do proprietário do Maximus Residence.\n\nEm anexo, os arquivos.\n\nAtenciosamente!\nEquipe JM600 ';

	if(!$mail->send()) {
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo "<script> alert('Mensagem enviada com sucesso!'); </script>";
	}

	echo "<script>window.location.href = 'http://ekoconstrutora.com.br/manual-do-proprietario/jm600/'; </script>";

?>