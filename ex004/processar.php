<?php

// Este código verifica se o formulário foi enviado usando o método POST.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Este código obtém os dados do formulário de cadastro usando as superglobais `$_POST`.
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $confirmar_senha = $_POST['confirmar_senha'];

  // Valida os dados do formulário
  if (empty($nome)) {
    echo "O campo 'nome' é obrigatório.";
    exit;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "O campo 'e-mail' deve conter um endereço de e-mail válido.";
    exit;
  }

  if ($senha != $confirmar_senha) {
    echo "As senhas não coincidem.";
    exit;
  }

  // Salva os dados do usuário no banco de dados
  // (código omitido)
?>

  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <title>Cadastro Realizado com Sucesso</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <h1>Cadastro Realizado com Sucesso</h1>

    <?php

    // Obtém o nome do usuário
    $nome = $_POST['nome'];

    // Exibe uma mensagem de boas-vindas
    echo "<h1>Olá, $nome!</h1>";
    echo "<p>Seu cadastro foi realizado com sucesso. Você receberá um e-mail de confirmação em breve.</p>";

    ?>
    <!-- Este código redireciona o usuário para a página inicial. -->
    <a href="index.php">Voltar para a página inicial</a>

  </body>

  </html>
<?php
}

?>