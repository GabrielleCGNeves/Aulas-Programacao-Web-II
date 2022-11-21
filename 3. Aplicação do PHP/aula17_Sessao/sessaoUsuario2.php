<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página WEB - Sessao de ID</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['nome'] = 'Gabrielle';

        //elimina a varuavek da sessao mas a mantem ativa
        session_unset();

        //elimina toda a sessao
        //session_destroy();
    ?>

    <h3>Sessão de Usuário</h3>
    Bem vinda <?php echo $_SESSION['nome'];?>
</body>
</html>
