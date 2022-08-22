<?php

    $nome = "Armando"; //variavel local no script

    //implementação de uma função
    function exibir(){
        nome = "Josefina";

        echo "Valor da variável dentro da função " .$nome;
    }

    exibir(); //chamada de função
    
    echo "<br/> Valor da variável fora da função " .$nome;

?>

<?php

    $ano = 2020; //variavel local no script

    //implementação de uma função
    function exibir($parametro){
        $parametro = $parametro + 4;
        return $parametro; 
    }

    echo "Estamos em " .$ano. " e daqui a 4 anos."

?>