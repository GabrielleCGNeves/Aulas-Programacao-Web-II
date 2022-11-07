<?php
    $salario = 1200;
    $salLiq = 0;
    $INSS = 0.09;
    $IR = 0.00;
    $COOP = 0.05;
    $descINSS;
    $descIR;
    $descCOOP;

   
    echo "O salário bruto é de " . $salario . "</br>";
    echo "O valor do desconto do INSS é de " . descontoINSS($salario, $INSS) . "</br>";
    echo "O valor do desconto do IR é de " . descontoIR($salario, $IR) . "</br>";
    echo "O valor do desconto da cooperativa é de " . descontoCOOP($salario, $COOP) . "</br>";
    echo "Após os descontos, o salário líquido é de " . "</br>";

    function descontoINSS($salario, $INSS){
        $descINSS = $salario * $INSS; 
        return ($descINSS);
    }

    function descontoIR($salario, $IR){
        $descIR = $salario * $IR;
        return ($descIR);
    }

    function descontoCOOP($salario, $COOP){
        $descCOOP = $salario * $COOP;
        return ($descCOOP);
    }
?>