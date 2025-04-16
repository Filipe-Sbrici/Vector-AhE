<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">
<h1>NÚMERO ALEATÓRIO</h1>
<form method="post">

<?php
$num = $_POST["num"];
$base = rand(0, $num);

echo "<h2>Número aleatório: $base</h2>";

?>

<input type="hidden" name="num" value="<?php echo $num; ?>">
<button type="submit">Denovo</button>

</form>
</div>
</body>
</html> 