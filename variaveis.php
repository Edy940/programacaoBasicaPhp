<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-type">
  <title>Curso PHP</title>
</head>
<body>
  <?php
  $PrimeiroValor = 16353;
  echo "<p>Valor original da variável [PrimeiroValor] = $PrimeiroValor</p>";
  $SegundoValor = ++$PrimeiroValor;
  echo "<p>Valor novo da variável [PrimeiroValor] = $PrimeiroValor</p>";
  echo "<p>Valor da variável [SegundoValor] = $SegundoValor</p>";
  $TerceiroValor = --$PrimeiroValor;
  echo "<p>Valor da variável [TerceiroValor] = $TerceiroValor</p>";
  $QuartoValor = --$SegundoValor;
  echo "<p>Valor da variável [QuartoValor] = $QuartoValor </p>";
  $QuartoValor = --$SegundoValor;
  echo "<p>Valor da variável [QuartoValor] = $QuartoValor</p>"
  ?>
</body>
</html>
