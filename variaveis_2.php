<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-type">
  <title>Curso PHP</title>
</head>
<body>
  <?php
  //string
  $nome = "Ed Wander Alves";

  //int
  $idade = 37;

  //float
  $peso = 87.5;

  //boolean
  $fumante_sn = false;

  //.....Lógica...//
  $idade = 30; // Poderia ser uma string também. pois como a tipagem é fraca, o valor é o mesmo.
  ?>

<h1>Ficha do candidato</h1>
<br/>
<p>Nome: <?= $nome ?> </p>
<p>Idade: <?= $idade ?> </p>
<p>Peso: <?= $peso ?> </p>
<p>Fumante: <?= $fumante_sn ?> </p>
</body>
</html>
