<?php
/**4. Criar um aplicativo que possibilite entrar com 3 números e possa imprimi-los em ordem 
decrescente (insira números diferentes).
 */

    $n1 = 120;
    $n2 = 100;
    $n3 = 90;

    if($n1 > $n2 && $n2 > $n3){
        echo $n1. ", " .$n2. " e " .$n3;
    }

    else if($n1 > $n2 && $n3 > $n2){
        echo $n2. ", " .$n3. " e " .$n1;
    }

    else if($n2 > $n3 && $n3 > $n1){
        echo $n2. ", " .$n3. " e " .$n1;
    }

    else if($n2 > $n1 && $n1 > $n3){
        echo $n2. ", " .$n1. " e " .$n3;
    }

    else if($n3 > $n2 && $n2 > $n1){
        echo $n3. ", " .$n2. " e " .$n1;
    }

    else{
        echo $n3. ", " .$n1. " e " .$n2;
    }

?>