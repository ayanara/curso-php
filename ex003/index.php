<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP - Exercício 003</title>
</head>
<body>
  <h1>Exemplo de PHP</h1>
  <?php
    date_default_timezone_set("America/Sao_Paulo"); // GMT-3

    function hora_almoco() {
      $hora_atual = date("G:i:s");
      if ($hora_atual == "12:00:00") {
        return "É hora do almoço!";
      } else {
        return "A espera do proximo rango";
      }
    }

    function hora_janta() {
      $hora_atual = date("G:i:s");
      if ($hora_atual == "18:00:00") {
        return "É hora da janta!";
      } else {
        return "A espera do proximo rango";
      }
    }

    echo "Hoje é " . date("l") . ", " . date("d/m/Y"); // Usa o 'l' para o nome completo do dia
    echo " e a hora atual é " . date("G:i:s");

    echo hora_almoco();
    echo hora_janta();
  ?>
</body>
</html>
