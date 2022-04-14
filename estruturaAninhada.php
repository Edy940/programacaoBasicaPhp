<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula PHP</title>
</head>

<body>
  <?php

  echo "<h2>Estrutura de repetição <i>for/Aninhado</i></h2>";

  for($i=0; $i<4; $i++){ // Horas
    for ($j=0; $j<5; $j++){ //Minutos
      echo "$i $j<br>";
    }
  }

  ?>
</body>

</html>

