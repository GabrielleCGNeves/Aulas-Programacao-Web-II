<?php
/*4. Criar um aplicativo que possibilite entrar com 3 números e possa imprimi-los em ordem 
decrescente (insira números diferentes).*/

  //$num = array(10, 5, 19);

  //for each



  //Função própria do PHP para ordernar
 /* rsort($num);

  echo $num[0]. ", " .$num[1]. " e " .$num[2]. "</br>";


  //bubble sort

    $n = array (3, 6, 9);

    for($i = 0; $i < sizeof($n); $i++){ //percorre o vetor
      for($j = 0; $j < sizeof($n) - 1; $j++){ // percorre o vetor e ordena os numeros
        if($n[$j] < ($n[$j+ 1])){
          $aux = $n[$j];
          $n[$j] = $n[$j+1];
          $n[$j+1] = $aux;        
        }
      }
    }
    echo $n[0]. ", " .$n[1]. " e " .$n[2];*/


  // Jeito feito em aula
  $n1 = 90;
  $n2 = 10;
  $n3 = 60;

  if($n1 > $n2 && $n2 > $n3){
      echo $n1. ", " .$n2. " e " .$n3;
  }

  else if($n1 > $n2 && $n3 > $n2){
      echo $n1. ", " .$n3. " e " .$n2;
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
