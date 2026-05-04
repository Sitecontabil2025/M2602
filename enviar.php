<?php
// ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

ob_start();
session_start();


/* 
if (empty($_POST['g-recaptcha-response'])):
    $retorno = "";
    $retorno .= "O campo <strong>Re'Captcha</strong> é de preenchimento obrigatório.<br>";
    $resposta = array('tipo' => 'blue', 'mensagem' => $retorno);
    echo json_encode($resposta);
else:
    $captcha = $_POST['g-recaptcha-response'];
    $secret_key = '6LenHswpAAAAANV2onVScenPGA_y9jOOmnw2h8F-';
    $response = $captcha;
    $remoteip = $_SERVER['HTTP_CLIENT_IP'];

    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $response . '&remoteip=' . $remoteip;
    $file = file_get_contents($url);
    $data = json_decode($file);

    if ($data->success != '1'):
        $retorno = "";
        $retorno .= "O campo <strong>Re'Captcha</strong> foi negado.<br>";
        $resposta = array('tipo' => 'blue', 'mensagem' => $retorno);
        echo json_encode($resposta);
    else:
*/
        // Pegando os dados do formulário de contato
        $formnome = $_POST['nome'] ?? '';
        $formemail = $_POST['email'] ?? '';
        $formcelular = $_POST['telefone'] ?? '';
        $formmensagem = $_POST['mensagem'] ?? '';

        // verificando se os campos foram todos digitados
        if (empty($formnome) || empty($formemail) || empty($formcelular) || empty($formmensagem)) :
            $campos = array();
            if (empty($formnome)) $campos[] = "nome";
            if (empty($formemail)) $campos[] = "email";
            if (empty($formcelular)) $campos[] = "celular";
            if (empty($formmensagem)) $campos[] = "mensagem";

            $retorno = "";
            foreach ($campos as $campo):
                $retorno .= "O campo <strong>$campo</strong> é de preenchimento obrigatório.<br>";
            endforeach;

            // passando o tipo do alerta e a mensagem
            $resposta = array('tipo' => 'blue', 'mensagem' => $retorno);
            echo json_encode($resposta);
        elseif (!filter_var($formemail, FILTER_VALIDATE_EMAIL)) :
            // passando o tipo do alerta e a mensagem
            $resposta = array('tipo' => 'blue', 'mensagem' => 'O e-mail inserido não é válido.');
            echo json_encode($resposta);
        else :
            // Não esquecer de alterar esta linha com o domínio do cliente
            $site = "https://dominio.com.br"; // URL completa do site com o http:// ou https://

            // E-mail que irá receber o formulário
            $destinatario = "contato@dominio.com";

            // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
            require_once("phpmailer/PHPMailerAutoload.php");

            // Inicia a classe PHPMailer
            $mail = new PHPMailer();

            // SMTPDebug 0, 1, 2 e 3
            $mail->SMTPDebug = 0;

            // Conexões menos seguras
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Define os dados do servidor e tipo de conexão
            $mail->IsSMTP(); // Define que a mensagem será SMTP
            $mail->Host = "mail.dominio.com.br"; // Endereço do servidor SMTP
            $mail->SMTPAuth = true; // Usa autenticação SMTP?

            // Usuário do servidor SMTP
            $mail->Username = 'formulario@dominio.com.br';

            // Senha do servidor SMTP
            $mail->Password = 'email@1234';

            // Caso o servidor use uma porta e uma autenticação diferente
            $mail->Port = 587;
            // $mail->SMTPSecure = 'ssl';
            // $mail->SMTPSecure = "tls";
            $mail->SMTPAutoTLS = false;

            // Define o remetente
            $mail->setFrom('formulario@dominio.com.br'); // E-mail do destinatário

            // Copia Oculta
            // $mail->AddBCC("");

            // Define os destinatário(s) (Tem de estar no mesmo servidor)
            $mail->AddAddress($destinatario); // Quem vai receber o e-mail
            $mail->AddReplyTo($formemail);

            // Define os dados técnicos da Mensagem
            $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
            $mail->CharSet = 'utf-8'; // Charset da mensagem
            //$mail->CharSet = 'iso-8859-1'; // Charset da mensagem

            // Define os anexos (Basta colocar o caminho do arquivo)
            //$mail->AddAttachment('caminho-do-arquivo.txt');

            date_default_timezone_set('America/Sao_Paulo');
            if (date('H') > 0 && date('H') < 12):
                $saudacao = "Bom dia";
            elseif (date('H') >= 12 && date('H') < 18):
                $saudacao = "Boa tarde";
            else:
                $saudacao = "Boa noite";
            endif;

            // Escrevendo a mensagem do e-mail
            $mensagem = "<html>";
            $mensagem .= "<head>";
            $mensagem .= '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />';
            $mensagem .= "<title></title>";
            $mensagem .= "</head>";
            $mensagem .= "<body style='font-size:16px; background-color:#f7f7f7; margin:0; padding:0; overflow:hidden;'>";
            $mensagem .= "<div style='font-family:sans-serif; width:610px; padding:15px; border-radius:5px; background-color:#fff; margin-top:30px; margin-bottom:30px; margin-left:auto; margin-right:auto;'>";
            $mensagem .= "<h1 style='font-size:20px; margin-top:0;'>E-MAIL ENVIADO DE UM FORMULÁRIO DE CONTATO</h1>";
            $mensagem .= "<hr>";
            $mensagem .= "<p>$saudacao,</p>
                <p>Foi preenchido um novo formulário de contato no site <a href='$site'>$site</a>.</p>
                <p><strong>Nome:</strong> $formnome<br>
                <strong>E-mail:</strong> $formemail<br>
                <strong>Celular:</strong> $formcelular<br></p>
                <p>
                $formmensagem</p>";
            $mensagem .= "<hr>";
            $mensagem .= "<p style='margin:0; font-size:14px;'>Este e-mail foi enviado pelo formulário de contato do site <a href='$site'>$site</a>.</p>";
            $mensagem .= "</div>";
            $mensagem .= "</body>";
            $mensagem .= "</html>";

            // Escrevendo a mensagem alternativa caso o cliente de e-mail não suporte html
            $mensagem2 = "E-MAIL ENVIADO DE UM FORMULÁRIO DE CONTATO
 
";
            $mensagem2 .= "$saudacao,
 

                Foi preenchido um novo formulário de contato no site $site.
 

                Nome: $formnome

                E-mail: $formemail

                Celular: $formcelular
;
                Mensagem enviada:

                $formmensagem
 

                Este e-mail foi enviado pelo formulário de contato do site $site.";

            // Define a mensagem (Texto e Assunto)
            $mail->Subject = "FORMULÁRIO DE CONTATO"; // Assunto da mensagem
            $mail->Body = $mensagem;
            $mail->AltBody = $mensagem2;

            // Envia o e-mail
            $enviado = $mail->Send();

            // Limpa os destinatários e os anexos
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();

            // verifica se o e-mail foi enviado
            if ($enviado) :
                // passando o tipo do alerta e a mensagem
                $resposta = array('tipo' => 'green', 'mensagem' => 'Seu e-mail foi enviado com sucesso.');
                echo json_encode($resposta);
            else :
                // passando o tipo do alerta e a mensagem
                $resposta = array('tipo' => 'red', 'mensagem' => 'Seu e-mail não pode ser enviado. Erro: ' . $mail->ErrorInfo);
                echo json_encode($resposta);
            endif;
        endif;
/* 
    endif;
endif;
*/
?>
