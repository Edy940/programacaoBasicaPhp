<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula PHP</title>
</head>

<body>
  <?php

  echo "<h2>Estrutura de repetição <i>while</i></h2>";

  $contador = 3;

  while ($contador >= 0) {
    echo "<p>Valor da variável de controle [contador] = $contador</p>";
    $contador--;
  }

  ?>
</body>

</html>
