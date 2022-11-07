<?php
/*1. Construir um app em PHP que leia 2 números e efetue a adição. 
a. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8;
b. Caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5*/

    $n1 = 10;
    $n2 = 20;
    $novoValor = 0;
    $soma = $n1 + $n2;


    if ($soma > 20){
        $novoValor = $soma + 8;
        echo "O resultado da soma foi de " .$soma. ", sendo maior que 20 fora acrescido 8. Resultado final: " .$novoValor. "<br>";
    }

    else{
        $soma - 5;
        echo "O resultado da soma foi de " .$soma. ", sendo menor ou igual à fora subtraido 5. Resultado final: " .$novoValor. "<br>";
    }


?>