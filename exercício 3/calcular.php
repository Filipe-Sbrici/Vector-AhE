<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<h1>MENSAGEM ENCORAJADORA</h1>
<div class = "chickenjockey">

<?php
    $genero =$_POST["genero"]; 
    $homem = ["Um homem sempre cumpre suas promessas",
     "A máscara esconde a revolta de um ninja...",
     "Jockey de Galinha",
     "Minecraft é você conhece",
     "Player tauz mais uma vez..."];
    $mulher = ["Uma mulher sempre lava sua louça",
    "Já fez a janta?",
    "Pipokinha rainha da...",
    "Pelo jeito ela ta querendo ram fazendeirooooo",
    "Barbie"]; 

    $random = rand(0, 4);

    if ($genero== 1)
    {
        echo"$homem[$random]";
    }
    else 
    {
        echo"$mulher[$random]";
    }
?>
</div>
</body>
</html> 