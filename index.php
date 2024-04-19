<?php
    session_start();

    // informações do formulário
    // $_POST
    // $_SESSION

    if(isset($_POST) && !empty($_POST))
    {
        $_SESSION['mensagens'][] = $_POST["mensagem"];
    }

    // Limpar a variavel $_SESSION['mensagens'] | $_SESSION['mensagens'] = null
    // unset($_SESSION['mensagens']);

    // var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body>
    <form action="/" method="post">
    <input type="text" name="mensagem">
    <button type="submit">Enviar</button>
    </form>
    <hr>
    <div>
        <?php
        
        if(isset($_SESSION['mensagens'])) 
        {
            foreach($_SESSION['mensagens'] as $mensagem) 
            {
                ?>
                    <p style="background-color: #00ff00"><?= $mensagem ?></p>
                <?php

                // echo $mensagem . "<br>";
            }
        }
     
        ?>
    </div>
</body>
</html>