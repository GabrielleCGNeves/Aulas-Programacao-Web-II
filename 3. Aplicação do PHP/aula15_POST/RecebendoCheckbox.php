<?php

    echo "<h3>Recebendo Dados - Elemento Checkbox</h3>";

    if(isset($_POST['asp'])){
        echo $_POST['asp'];
        echo "</br>";
    }
    
    if(isset($_POST['php'])){
        echo $_POST['php'];
        echo "</br>";
    }

    if(isset($_POST['java'])){
        echo $_POST['java'];
        echo "</br>";
    }


?>