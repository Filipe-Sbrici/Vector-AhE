<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">
<h1>NÚMERO ALEATÓRIA</h1>
<form method="post">
    <button type="submit" name="sortear">Girar</button>
</form>

<?php
$base = rand(0, 99);

echo "<h2>Número aleatório: $base</h2>";

?>
</div>
</body>
</html>  