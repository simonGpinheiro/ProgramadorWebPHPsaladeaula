<?php

$hostname = "localhost";
$banco_de_dados = "projeto";
$usuario = "root";
$senha = "";

//$hostname = "localhost";
//$banco_de_dados = "id19904110_projetobd";
//$usuario = "id19904110_desenvolvedor";
//$senha = "B47UN3#{DJ+v_X[V";

$conexao = new mysqli($hostname, $usuario, $senha, $banco_de_dados);
if($conexao->connect_errno){ // error + number = errno
    echo "Falha ao conectar: (" . $conexao->connect_errno .")" . $conexao->connect_error;
} else {
    // echo "Conectado ao Banco.<br>";
}


