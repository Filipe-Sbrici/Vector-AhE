<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<h1>MENSAGEM ENCORAJADORA</h1>

<form action="calcular.php" method="post">
  <p>Clique para o sistema sortear uma cor aleatória</p>

  <?php
    $random = rand(0, 4);
    $radd = rand(0, 4);
  ?>

    <input type="hidden" name="random" value="<?php echo $random; ?>">
    <input type="hidden" name="randomico" value="<?php echo $radd; ?>">
    <button type="submit">Enviar</button>
</form>
</body>
</html> 