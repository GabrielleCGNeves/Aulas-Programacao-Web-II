<?php

    $nome = "Armando </br>"; //variavel local no script

    //implementação de uma função
    function exibir(){
        $nome = "Josefina </br>";

        echo "Valor da variável dentro da função </br>" .$nome;
    }

    exibir(); //chamada de função
    
    echo "<br/> Valor da variável fora da função </br>" .$nome;

?>

<?php

    $ano = 2020; //variavel local no script

    //implementação de uma função
    function exibirTexto($parametro){
        $parametro = $parametro + 4;
        return $parametro; 
    }

    echo "Estamos em " .$ano. " e daqui a 4 anos. </br>" .exibir($ano);

?>


