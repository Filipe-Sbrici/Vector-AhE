<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<h1>NÚMERO DA SORTE</h1>
<div class = "chickenjockey">

<?php
    $time =$_POST["time"]; 
    $pau = ["Avante, Palmeiras! A força da nossa torcida é o combustível para a vitória!", "Cada jogo é uma nova oportunidade de brilhar! Vamos em frente, Verdão!", "A história do Palmeiras é feita de superações. Vamos juntos escrever mais um capítulo de glórias!", "A garra e a determinação do nosso time são imbatíveis! Rumo à vitória, Palmeiras!", "Com a nossa união e paixão, não há desafio que não possamos superar! Vamos, Verdão!"];
    $cor = ["Vai, Corinthians! A Fiel está com vocês em cada passo rumo à vitória!", "A força do Timão é inigualável! Vamos mostrar nossa garra em campo!", "Cada jogo é uma batalha, e juntos somos invencíveis! Avante, Corinthians!", "A história do Corinthians é feita de conquistas! Vamos em busca de mais uma!", "Com coragem e determinação, vamos superar todos os desafios! Vai, Timão!"]; 
    $spau = ["São Paulo, a nossa paixão é a sua força! Vamos juntos em busca da vitória!", "A tradição do Tricolor é de grandes conquistas! Vamos fazer história mais uma vez!", "Cada jogo é uma nova chance de brilhar! Vamos, São Paulo!", "A união e a garra do nosso time são a chave para o sucesso! Rumo à vitória, Tricolor!", "Com a força da nossa torcida, não há limites para o que podemos conquistar! Vamos, São Paulo!"];
    $sant = ["Santos, a magia do futebol está em nossas veias! Vamos em busca de mais uma vitória!", "A história do Peixe é repleta de lendas! Vamos juntos criar mais um capítulo de glórias!", "Cada jogo é uma nova chance de mostrar nossa força! Avante, Santos!", "A paixão da nossa torcida é o que nos move! Vamos juntos em busca do triunfo!", "Com talento e determinação, o Santos sempre brilha! Vamos, Peixe!"];
    $random = rand(0, 4);

    if (time == 1)
    {
        echo"$pau[$random]";
    }
    else if (time == 2)
    {
        echo"$cor[$random]";
    }
    else if (time == 3)
    {
        echo"$spau[$random]";
    }
    else 
    {
        echo"$sant[$random]";
    }
?>
</div>
</body>
</html> 