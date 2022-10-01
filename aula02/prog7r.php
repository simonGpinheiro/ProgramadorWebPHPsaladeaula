<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>


<?php
$valor = $_POST["valor"];
$quantidade = $_POST["quantidade"] ;


echo "<h3>Informações do usuário</h3>";

echo "Valor: $valor, Quantidade: $quantidade ";

?>
    
</body>
</html>