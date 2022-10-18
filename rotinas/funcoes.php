<?php 

//Informar o local do projeto

date_default_timezone_get();
echo "<br>";
date_default_timezone_set("America/Sao_Paulo");
date_default_timezone_get();
echo "<br>";

function escreva_texto(){
  echo "<h4 style='text-align: center;'>Minha primeira função em PHP</h4>"; 
}

function escreva_texto2($qualquer_coisa){
  echo "<h4 style='text-align: center;'>$qualquer_coisa</h4>";
}

function hoje(){
  $agora = date('d/m/Y H:i');
  echo "<h4 style='text-align: center;'>$agora</h4>";
}


//Opção 1
function pularLinha($numero){
  // if($numero < 1){
   //    echo "-<br>";
  // } else {
   //    for($i=1; $i <= $numero; $i++){
    //       echo ".<br>";
    //   }
  // }


    //Opção 2 (melhor opção).

do{
        echo "<br>";
        $numero--;
}while($numero >= 1);


//Soma, subtração, divisão, multiplicação.

function soma($num1, $num2){
    $total = $num1 + $num2;
    echo "A soma de $num1 + $num2 = total";
    pularLinha(0);

}







}

