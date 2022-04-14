<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula PHP</title>
</head>

<body>
<center>
<h1>Programa que calcula as médias dos alunos.</h1>
<hr>
  <table>
  <form action="Exercicio.php" method="$_POST">
  <tr><td>Digite a primeira nota:</td><td><input type="number" min="0" max="10" name="Nota1"></td></tr>
  <tr><td>Digite a segunda nota:</td><td><input type="number" min="0" max="10" name="Nota2"></td></tr>
  <tr><td>Digite a terceira nota:</td><td><input type="number" min="0" max="10" name="Nota3"></td></tr>

  <tr><td align="right"><input type="submit" value="Calcular"/></td></tr>
  </form>
  </table>
  </center>
  <?php
  $primeiraNota = $_POST['Nota1'];
  $segundaNota = $_POST['Nota2'];
  $terceiraNota = $_POST['Nota3'];
  $media=($primeiraNota+$segundaNota+$terceiraNota)/3;
  $mensagem = " ";

  if($media>=6){

    echo "APROVADO";
  }elseif ($media<6 && $media<5) {
    echo "recuperação";
  }

  ?>
</body>

</html>
