<?php
/*5. Faça um programa em PHP que leia a altura, a idade e o sexo de 50 pessoas e forneça 
as seguintes informações:
A maior altura e a menor altura;
A média de altura de mulheres;
A idade do homem mais velho e da mulher mais nova */

  $nome = array("Bianca", "Lucas", "Beatriz", "Erick");
  $sexo = array(1, 2, 1, 2);
  $altura = array(1.80, 1.55, 1.92, 1.67);
  $idade = array(49, 20, 18, 40);
  $qtdPessoas = 4;
  $qtdMulher = 0;
  $idMulher = 150;
  $idHomem = 0;
  $media = 0;

  for($i = 0; $i < $qtdPessoas; $i++){
    if($sexo[$i] == 1){
      $qtdMulher++;
      $media += $altura[$i];
    }   
  }

  echo "A média de altura das mulheres é de " .$media / $qtdMulher. "</br>";

  rsort($altura);
  echo "A maior altura é " .$altura[0]. " e a menor altura é de " .$altura[$qtdPessoas - 1]. "</br>";

  for($i = 0; $i < $qtdPessoas; $i++){
    if($sexo[$i] == 1 && $idMulher > $idade[$i]){
      $idMulher = $idade[$i]; 
    }
      
    if($sexo[$i] == 2 && $idHomem < $idade[$i]){
      $idHomem = $idade[$i];
    }
  }

  echo "A mulher mais nova tem " . $idMulher. " anos </br>";
  echo "O homem mais velho tem " . $idHomem. " anos </br>"; 

    /*$altura1 = 1.70;
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


    echo "</br> a media de altura das mulheres é de " .$media;*/

?>
