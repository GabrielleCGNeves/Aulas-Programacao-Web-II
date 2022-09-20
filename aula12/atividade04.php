<?php
/**4. Criar um aplicativo que possibilite entrar com 3 números e possa imprimi-los em ordem 
decrescente (insira números diferentes).
 */

  $num = array(5, 90, 50);

  //Função própria do PHP para ordernar
  rsort($num);

  echo $num[0]. ", " .$num[1]. " e " .$num[2]. "</br>";

  //bubble sort PS: COLOCAR EM UMA FUNÇÃO
  for($i = 0; $i <= sizeof($num); $i++){ //percorre o vetor
    for($j = 0; $j < sizeof($num); $j++){ // percorre o vetor e ordena os numeros
      if($num[$j] < ($num[$j+ 1])){
        $aux = $num[$j];
        $num[$j] = $num[$j+1];
        $num[$j+1] = $aux;        
      }
    }
  }
  echo $num[0]. ", " .$num[1]. " e " .$num[2];


  //for each
  


  // Jeito que fiz na aula
  $n1 = 90;
  $n2 = 10;
  $n3 = 60;

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
