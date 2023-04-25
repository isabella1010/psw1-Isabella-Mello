<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylehome.css">
</head>
<body>

<div class="container">
    
  <h2>Entre na sua conta!</h2>
  <form action="cadaluno.php" >
    <div class="form" method="post">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
    </div>
    <br>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Digite sua senha" name="senha">
    </div><br>
    <div class="checkbox">
      <label><input type="checkbox" name="guardar">Salvar</label><br>
    </div>
    <button type="submit" class="btn btn-default">Entrar</button><br>
  </form>
</div>
<br>
</body>
</html>


<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("footer.php");
?>