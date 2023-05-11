<?php
header('Content-Type: text/html; charset=utf-8 Location: /index.html');
$nome = $_GET['name'];
$email = $_GET['email'];
$subject = $_GET['subject'];
$mensagem = $_GET['message'];
if ($nome == "teste") {
	$to = "sidney.miranda2013@gmail.com";
} else {
	$to = "sidney.miranda2013@gmail.com";
}
$subject = "Contato formulário site";
$body = "Nome: ".$nome. "\r\n".
		"Email: ".$email. "\r\n".
		"Assunto: ".$subject. "\r\n".
		"Mensagem: ".$mensagem;
$header = "From:hello@mobspot.com.br"."\r\n".
		"Reply-To:".$email."\r\n".
		"X=Mailer:PHP/".phpversion();
mail($to, $subject, $body, $header);
?>