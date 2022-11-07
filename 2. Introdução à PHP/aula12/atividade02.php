<?php
/**2. Criar um aplicativo em PHP entrar com um número e informar
a. se ele é divisível por 10, por 5, por 2 ou 
b. se não é divisível por nenhum destes */

    $num = 1;

    if(($num % 10) == 0){
        echo "O número é divisível por 10 </br>";
    }

    if(($num % 5) == 0){
        echo "O número é divisível por 5 </br>";
    }

    if(($num % 2) == 0){
        echo "O número é divisível por 2 </br>";
    }

    if(($num % 10 != 0)  && ($num % 5 != 0) && ($num % 2 != 0)){
        echo "O número NÃO é divisível por 10, 5 ou 2.";
    }

?>
