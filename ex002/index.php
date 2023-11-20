<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP - Exercicio 002</title>
</head>

<body>
  <h1>Exemplo tags PHP</h1>

  <p>O PHP irá ignorar tudo que estiver fora de uma tag PHP. Isso significa que você pode usar HTML, CSS, e outros códigos em um documento PHP sem que o PHP os interprete.
  </p>

  <h2>Para exibir uma mensagem na tela</h2>
  <?php
  echo "<p>Olá, mundo!</p>";
  ?>

  <h2>Para definir uma variável</h2>
  <?php
  $nome = "Ayanara Nathane";
  print "$nome";
  ?>

  <h2>Para chamar uma função</h2>
  <?php
  function soma($a, $b)
  {
    return $a + $b;
  }

  echo soma(10, 20); // 30
  ?>

  <?php //Super tag PHP
  $nome = "Ayanara Nathane";
  echo "<p>O meu nome é $nome</p>";
  ?>

  <? //Short open tag
  $idade = "32";
  echo "<p>Eu tenho $idade anos</p>";
  ?>

  <!-- <% ASP tag
  $nome = "Ayanara Nathane";
  echo "<p>O meu nome é $nome</p>";
  %> -->

  <!-- Short Tag PHP -->
  <?= "Ayanara Nathane" ?>


</body>

</html>