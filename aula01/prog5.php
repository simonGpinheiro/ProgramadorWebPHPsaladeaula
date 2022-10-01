<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
    <div>
    <p>
    Escreva um programa que leia o nome, a idade e o sexo de uma pessoa. O programa deverá imprimir as informações lidas.
    </p>


        <?php
        $nome = $_GET["v1"];
        $idade = $_GET["v2"];
        $SEXO = $_GET["v3"];

        echo "O seu nome:" . $nome . ", a sua idade é:" . $idade . ", do sexo:". $sexo; 

        ?>

    <br/>
    <br/>
    <a href="index.php"><h3>Voltar</h3><a/>

    </div>







    
</body>
</html>