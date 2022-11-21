<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloqueando Paginas por Sessoes</title>
        <?php
            session_start();

            $_SESSION["nome"] =  $_POST["nome"];
            $_SESSION["senha"] =  $_POST["senha"];
        ?>
</head>
<body>
    <b>Funcionário: </b> <?php echo $_SESSION["nome"]?>, logado com sucesso.<br>
    <b>Data de Conexão: </b> <?php echo date("d/m/Y")?> <br>
    <b>Hora da Conexão: </b> <?php echo date("H:i:s")?> <br> <br>

    <a href="sessaoVerifica.html">ADM Page</a>
</body>
</html>