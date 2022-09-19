<?php
/*5. Faça um programa em PHP que leia a altura, a idade e o sexo de 50 pessoas e forneça 
as seguintes informações:
A maior altura e a menor altura;
A média de altura de mulheres;
A idade do homem mais velho e da mulher mais nova */

    $altura1 = 1.70;
    $idade1 = 15;
    $sexo1 = 1;

    $altura2 = 1.55;
    $idade2 = 30;
    $sexo2 = 2;

    $altura3 = 1.80;
    $idade3 = 19;
    $sexo3 = 1;

    if($altura1 > $altura2 && $altura2 > $altura3 ){
        echo "</br>A maior altura é de: " .$altura1;
        echo"</br>A menor altura é de: " .$altura3;
    }
    else if($altura2 > $altura1 && $altura1 > $altura3){
        echo "</br>A maior altura é de: " .$altura2;
        echo"</br>A menor altura é de: " .$altura3;
    }
    else if($altura3 > $altura1 && $altura1 > $altura2){
        echo "</br>A maior altura é de: " .$altura3;
        echo"</br>A menor altura é de: " .$altura2;
    }

    $media = ($altura1 + $altura3) / 2;


    echo "</br> a media de altura das mulheres é de " .$media;
?>
