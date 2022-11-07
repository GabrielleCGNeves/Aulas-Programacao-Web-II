<?php
    $salario = 1200;
    $salLiq = 0;
    $INSS = 0.09;
    $IR = 0.00;
    $COOP = 0.05;
    $descINSS= 0;
    $descIR = 0;
    $descCOOP = 0;

    if ($sal <= 1045){
        $descINSS = $salario * 0.075; 
        echo "O desconto do INSS é de " . $descINSS . "</br>";
    }

    else if ($salario <= 2089.60){
        $descINSS = $salario * 0.09; 
        echo "O desconto do INSS é de " . $descINSS . "</br>";
    }

    else if ($salario <= 3134.40){
        $descINSS = $salario * 0.12; 
        echo "O desconto do INSS é de " . $descINSS . "</br>";
    }

    else if ($salario <= 6101.06){
        $descINSS = $salario * 0.14; 
        echo "O desconto do INSS é de " . $descINSS . "</br>";
    }
?>