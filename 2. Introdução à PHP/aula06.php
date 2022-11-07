<?php
//função sem parametro - se executa por si mesma
/*
$ano + 2; 
$ano = $ano + 2;
*/ 

    echo "</br> Olá! Seja bem-vindo(a)" .$_SERVER['REMOTE_ADDR'];
    echo"</br> Você está utilizando o navegador: " .$_SERVER['HTTP_USER_AGENT']."</br>"; 

?>

    <?php
        $ano = 2020; //variavel local no script

        //implementação de uma função
        function exibirAno(){
            GLOBAL $ano;
            $ano++;
            return $ano; 
        }

        echo "</br> Ano: " .$ano;
        echo "</br> Ano: " .exibirAno();
        echo "</br> Ano: " .exibirAno();
        echo "</br> Ano: " .$ano;
    ?>

    <?php
        $ano = 2020; //variavel local no script

        //implementação de uma função
        function exibirAnoStatic(){
            STATIC $ano;
            $ano++;
            echo "</br>" .$ano; 
    }

        echo "</br> Ano: " .exibirAnoStatic();
        echo "</br> Ano: </br>" .exibirAnoStatic()
    ?>

    <?php
        define("PI", 3.14);
        define("DISC", "Matematica");

        echo "</br> Valor de PI: " .PI;
        echo "</br> Disciplina: " .DISC;
    ?>

    <?php
    //4/2 
    //4%2 modulo
    ?>