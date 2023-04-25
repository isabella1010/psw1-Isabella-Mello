<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("header.php");

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];

echo "Nome: $nome<br>";
echo "RG: $rg<br>";
echo " Email: $email <br>";
echo "Matrícula: $matricula<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form class="form" method="post" action="edita.php">
     <input type="hidden" name="nome" value=<?php echo $nome ?>>
     <input type="hidden" name="rg" value=<?php echo $rg ?>>
     <input type="hidden" name="email" value=<?php echo $email ?>>
     <input type="hidden" name="matricula" value=<?php echo $matricula ?>>
    

<button type="submit" class="btn">
<b>Modificar</b></button> 
<br>
</form>

</body>
</html>

<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("footer.php");
?>