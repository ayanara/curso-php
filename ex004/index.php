<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Formulário de Cadastro</title>

  <style>
    /* Estilos básicos para o formulário */

    body {
      font-family: sans-serif;
    }

    form {
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    label {
      font-size: 16px;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #000;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <form action="processar.php" method="post">

    <h1>Cadastro de Usuário</h1>

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Seu nome">

    <label for="sobrenome">Sobrenome:</label>
    <input type="text" name="sobrenome" id="nome" placeholder="Seu sobrenome">

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" placeholder="Seu e-mail">

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" placeholder="Sua senha" required pattern="^[a-zA-Z0-9]{6,12}$">

    <label for="confirmar_senha">Confirmar senha:</label>
    <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirme sua senha">

    <input type="submit" value="Cadastrar">

  </form>

</body>

</html>
