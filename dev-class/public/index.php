<?php require("./bootstrap.php");     ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <title>Aula PHP</title>
</head>
<body>
    <div class="container">

    <?php 
    try{            
        include load();     //função para dar upload nas páginas
    } catch (Exception $e) { // mensagem de erro caso a página não exista 
        echo $e->getMessage();
    }
     
    ?>

    </div>
</body>
</html>