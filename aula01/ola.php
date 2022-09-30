<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $linguagem = "HTML, CSS e PHP";
    echo "<h1>Olá, meu primeiro programa em " . $linguagem . "</h1>";

    $linguagem = "HTML, CSS e PHP";
    echo "Olá, meu primeiro programa em . $linguagem";

    printf ("<br>Olá, meu primeiro programa em . $linguagem");

    ?>

    <?php
    //Declaração de variável//
    $num1;
    //Atribuição de valor a variável//
    $num=10;
    //Declarando a variável e atribuindo valor.
    $num2 ="5"; //Varável do tipo string
    //Soma realizada com sucesso, mesmo sendo uma das variáveis string.
    $total= ($num1 + $num2);
    echo " A soma de ".$num1." + ".$num2." = ". ($num1 + $num2);
 
    ?>

    
</body>
</html>