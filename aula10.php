<?php   
    //executando função

    function validaNome(){
        echo "Teste </br>";
    }

    function somaValor($num1, $num2){
        return ($num1 + $num2);
    }

    $v1 = 10;
    $v2 = 2;

    echo validaNome(). "</br>";
    echo "A soma de " .$v1. " e " .$v2. " é de " .somaValor($v1, $v2);

?>