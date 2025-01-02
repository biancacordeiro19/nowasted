<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "weylerjorge5@gmail.com"; 
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $name = $_POST["name"];
    $from = $_POST["email"];
    
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    $message_body = "
    <html>
    <body>
    <h2>Contato de $name</h2>
    <p><strong>Assunto:</strong> $subject</p>
    <p><strong>Mensagem:</strong></p>
    <p>$message</p>
    </body>
    </html>
    ";
    
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
    }
} else {
    echo "Acesso não autorizado.";
}
?>
