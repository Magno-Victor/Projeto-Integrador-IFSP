<?php


require __DIR__ ."/vendor/autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //evitar e injeção de html e limpar espaços em branco.
    $nome = htmlspecialchars(trim($_POST["nome"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $telefone = htmlspecialchars(trim($_POST["telefone"] ?? ""));
    $mensagem = htmlspecialchars(trim($_POST["mensagem"] ?? ""));

    // verifica se todos os campos estão preenchidos.
    if ($nome !== "" && $email !== "" && $mensagem !== "" && $telefone !== "") {
        
      //api do Resend para enviar email.
        $resend = Resend::client('re_fH8ff4f8_EtV5YFFPZgL4UVm1YTG19inP');
        
        // parametros de envio da api.
        $resend->emails->send([
        'from' => 'Xudadoces <onboarding@resend.dev>',
        'to' => ['victormagno0001@gmail.com'],
        'subject' => 'Email enviado por' . $nome,
        'html' => '<p>De:' . $nome . '<br> Email: ' . $email . '<br>Telefone: ' . $telefone . '<br>Mensagem: <br>' . $mensagem .'</p>'
        ]);
        
        header('Location: index.html?status=sucesso');
        exit();

    } else {
        // os campos estiver em branco retorna para o JS
        header('Location: index.html?status=erro_campos'); 
        exit();
    }
}


?>