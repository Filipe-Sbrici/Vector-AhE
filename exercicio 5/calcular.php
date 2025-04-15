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
<div class = "chickenjockey">

<?php
    $random = $_POST["random"];
    $radd = $_POST["randomico"];
    $azul = [
        "A cor azul representa a serenidade e a força! Vamos juntos conquistar nossos objetivos!",
        "Com determinação e coragem, o céu é o limite! Avante, azul!",
        "A união faz a força! Juntos, podemos alcançar grandes vitórias!",
        "O azul é a cor da confiança! Vamos em frente, sempre acreditando!",
        "Cada desafio é uma oportunidade de brilhar! Vamos, azul!"
    ];
    
    $vermelho = [
        "A paixão e a garra do vermelho nos impulsionam a lutar até o fim!",
        "Com coragem e determinação, podemos superar qualquer obstáculo!",
        "O vermelho é a cor da vitória! Vamos juntos em busca do sucesso!",
        "A força da nossa união é imbatível! Avante, vermelho!",
        "Cada passo dado é uma conquista! Vamos, vermelho!"
    ];
    
    $verde = [
        "A esperança e a renovação estão na cor verde! Vamos em busca de novos horizontes!",
        "Com garra e determinação, podemos alcançar grandes conquistas!",
        "O verde simboliza a força da natureza! Vamos juntos vencer!",
        "Cada desafio é uma nova oportunidade de crescimento! Avante, verde!",
        "A união faz a força! Juntos, somos imbatíveis! Vamos, verde!"
    ];
    
    $amarelo = [
        "A cor amarela brilha como o sol! Vamos iluminar nosso caminho rumo à vitória!",
        "Com otimismo e alegria, podemos conquistar o mundo!",
        "O amarelo é a cor da felicidade! Vamos juntos celebrar nossas conquistas!",
        "Cada dia é uma nova chance de brilhar! Avante, amarelo!",
        "A energia do amarelo nos impulsiona a seguir em frente! Vamos, amarelo!"
    ];
    
    $roxo = [
        "A cor roxa representa a criatividade e a sabedoria! Vamos inovar e vencer!",
        "Com determinação e coragem, podemos alcançar grandes alturas!",
        "O roxo é a cor da transformação! Vamos juntos fazer a diferença!",
        "Cada desafio é uma oportunidade de mostrar nossa força! Avante, roxo!",
        "A união e a força do roxo nos levam a grandes conquistas! Vamos, roxo!"
    ];

    if ($random == 0)
    {
        echo"$azul[$radd]";
    }
    else if ($random == 1)
    {
        echo"$vermelho[$radd]";
    }
    else if ($random == 2)
    {
        echo"$verde[$radd]";
    }
    else if ($random == 3)
    {
        echo"$roxo[$radd]";
    }
    else 
    {
        echo"$amarelo[$radd]";
    }

?>
</div>
</body>
</html> 