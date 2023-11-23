<?php

// Verifica se o método de solicitação é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Obtém o número do formulário
  $numero = $_POST['numero'];

  // Obtém o número anterior
  $numero_anterior = $numero - 1;

  // Obtém o número sucessor
  $numero_sucessor = $numero + 1;

  // Obtém os divisores do número
  $divisores = array();
  for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
      $divisores[] = $i;
    }
  }

  // Exibe os resultados
  echo "Número anterior: $numero_anterior";
  echo "<br>";
  echo "Número sucessor: $numero_sucessor";
  echo "<br>";
  echo "Divisores: " . implode(", ", $divisores);

}

?>
