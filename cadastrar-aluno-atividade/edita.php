<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

<div class="box1">
<div class="formulario">
        <form class="form" method="post" action="edita.php">
                <div class="nome">
                    <label for="nome">Nome: </label><br>
                    <input type="text" id="nome" name="nome" value= <?php echo $_POST ['nome']; ?> required><br>
                </div>
                <div class="rg">
                    <label for="rg">RG:</label><br>
                    <input type="rg" id="rg" name="rg" value= <?php echo  $_POST ['rg']; ?> required><br>
                </div>
            </div>

            <div class="box2">
                <div class="cpf">
                    <label for="cpf">CPF:</label><br>
                    <input type="number" id="cpf" name="cpf" value= <?php echo  $_POST ['cpf']; ?> required><br>
                </div>
                <div class="matricula">
                    <label for="matricula">Matrícula:</label><br>
                    <input type="number" id="matricula" name="matricula" value= <?php echo  $_POST ['matricula']; ?> required><br>
                </div>
            </div>

           
</body>
</html>

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("footer.php");
?>