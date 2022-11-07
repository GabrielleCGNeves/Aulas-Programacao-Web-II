<?php
/*3. Criar um aplicativo em PHP que possibilite entrar com nome, sexo e idade de uma pessoa. 
a. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a 
mensagem: ACEITA. 
b. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA. */

  $qtdPessoas = 3;
  $nome = array("Ana", "Isaac", "Carolina");
  $sexo = array(1, 2, 1);
  $idade = array(17, 20, 46);

  for($i = 0; $i < $qtdPessoas; $i++){
    if($sexo[$i] == 1 && $idade[$i] < 25){
        echo "Parabéns " .$nome[$i]. "! você foi aceita </br>";
    }

    else if($sexo[$i] == 1 && $idade[$i] > 25){
        echo $nome[$i]. ", invelizmente você não foi aceita pois possui mais de 25 anos </br>";
    }
      
    else{
      echo $nome[$i]. ", infelizmente você não atendeu aos requisitos. </br>";
    }
  }

/*
    $nome1 = "Isaac";
    $idade1 = 17;
    $sexo1 = 1;

    $nome2 = "Karla";
    $idade2 = 20;
    $sexo2 = 2;

    $nome3 = "Carolina";
    $idade3 = 46;
    $sexo3 = 2;

    if($sexo3 == 2 && $idade3 < 25){
        echo "Parabéns " .$nome3. ", você foi aceita";
    }

    else{
        echo $nome3. ", infelizmente você não atendeu aos requisitos.";
    }
*/
?>
