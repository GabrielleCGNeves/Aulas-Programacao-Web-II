<?php
//foraech
    $nomes = array('Ana', 'Luiza', 'Lucas', 'Luiz');

    foreach ($nomes as $item){
        echo "</br>".$item;
    }

?>

<?php
    for($x = 1; $x < 100; $x++){
        if($x == 10)
            goto desvio;
        echo "</br>".$x. "</br>";
    }

    desvio:
    echo"</br> Pronto aqui está o desvio</br>";
?>

<?php

    for($x = 1; $x < 100; $x++){
        if($x % 2 == 0){
            continue;
        }
        echo "</br>".$x. "</br>";
    }

//API - PROGRAMA SEM INTERFACE, PROGRAMA FECHADO
?>
