<?php
include_once('controller/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marcas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="center">
        <h1>marca</h1>
        <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
    <form action="insere-marca.php" method="post">
        <label for="">Descrição:</label>
        <input type="text" name="descricao">
        <input type="submit" value="cadastrar">
        
       
    </form>
    </section>
</body>
</html>