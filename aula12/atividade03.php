<?php
/*3. Criar um aplicativo em PHP que possibilite entrar com nome, sexo e idade de uma pessoa. 
a. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a 
mensagem: ACEITA. 
b. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA. */

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

?>