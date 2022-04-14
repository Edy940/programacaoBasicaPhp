<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula PHP</title>
</head>

<body>
  <?php

  echo "<h2>Estrutura de repetição <i>do/while</i></h2>";

  $resultado = 1;
  $numero = 5;
  do{
    $resultado *=$numero--;
  }while($numero >1);
  echo "<p>O fatorial de 5 é $resultado</b></p>";
  ?>
</body>

</html>
