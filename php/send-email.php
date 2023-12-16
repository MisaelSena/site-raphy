<?php 
require("./PHPMailer-master/src/PHPMailer.php");
require("./PHPMailer-master/src/SMTP.php");

$nome = $_POST["nome"];
$emailContato = $_POST["email"];
$mensagem = $_POST["mensagem"];
$phone = $_POST["phone"];

if(empty($nome)||empty($emailContato)||empty($mensagem)||empty($phone)){
    echo "Todos os Campos devem ser Preenchidos!";
}else{

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "mail.vortex36.tech";//Servidor SMTP do email da hospedagem da Raphy
    $mail->Port = 465;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "suporte@vortex36.tech";//E-mail de contato da Raphy
    $mail->Password = "123123";//Senha do E-mail de contato da Raphy. Obs.: A senha ao lado é fictícia.
    $mail->SetFrom("suporte@vortex36.tech");//E-mail de contato da Raphy
    $mail->Subject = "Formulário de Contato - Site Raphy";
    $mail->Body = "Nome: $nome<br>Email de Contato: $emailContato<br>Phone: $phone<br>Mensagem: $mensagem";
    $mail->AddAddress("misaellsena@gmail.com");

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        header("Location: erro.php");
        exit;
    } else {
        header("Location: obrigado.php");
        exit;
    }
}


?> 