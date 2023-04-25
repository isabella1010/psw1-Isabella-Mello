<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("header.php");
?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylealuno.css">
    <title>FORMULÁRIO PARA O ALUNO CADASTRAR</title>
</head>

<body>
    <div class="formulario">
        <form class="form" method="post" action="mostra.php">
        
            <div class="caixa1">
                <div class="nome">
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome" required><br>
                </div>
                <div class="rg">
                    <label for="rg">RG:</label><br>
                    <input type="rg" id="rg" name="rg" required><br>
                </div>
            </div>

            <div class="caixa2">
                <div class="email">
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email" required><br>
                </div>
                <div class="matricula">
                    <label for="matricula">Matrícula:</label><br>
                    <input type="number" id="matricula" name="matricula" required><br>
                </div>
            </div>

           
            <br>

            <button type="submit" class="btn">
                <b>Salvar</b></button>
            <br>
    </div>

    <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("footer.php");

?> 

</body>

</html>