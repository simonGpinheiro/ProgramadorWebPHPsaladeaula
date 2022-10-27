<?php
    function verifica_cpf($cpf){
        $cpf = str_replace(".", "", $cpf);
        $cpf = str_replace("-", "", $cpf);
        $cpf = str_replace($cpf);
        $cpf_v[11];
        // for | do while | while | foreatch
        111.222.333-44
        1 1 1 2 2 2 3 3 3 44
        x 10 9 8 7 6 5 4 3 2
        = 10 9 8 14 12....
        //$resultado = total % 11;
        //10 ou 11 = 0
        //$resultado < 2 = 0
        return true;
    }
   
    function validarCPF(){

        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];
        $n4 = $_GET['n4'];
        $n5 = $_GET['n5'];
        $n6 = $_GET['n6'];
        $n7 = $_GET['n7'];
        $n8 = $_GET['n8'];
        $n9 = $_GET['n9'];
        $n10 = $_GET['n10'];
        $n11 = $_GET['n11'];

        $somaCPF = ($n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10 + $n11);

        if($somaCPF == 10){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==11){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==12){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==21){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==22){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==23){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==32){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==33){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==34){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==43){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==44){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==45){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==54){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==55){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==56){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==65){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==66){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==67){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==76){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==77){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==78){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==87){
            $somaCPF = true;
            echo 'CPF válido!';
        }elseif($somaCPF ==88){
            $somaCPF = true;
            echo 'CPF válido!';
        }else{
            $somaCPF = false;
            echo 'CPF inválido!';
        }
    }
    $resultadoCPF = validarCPF();
    return $resultadoCPF;
?>