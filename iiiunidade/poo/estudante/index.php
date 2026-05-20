<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Estudante</title>
</head>
<body>
<form method="POST" action="processaestudante.php">
    <label for="name">Nome:</label>
    <input type="text" name="nome" id="name"><br><br>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf"><br><br>
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone"><br><br>
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email"><br><br>
    <input type="submit" value="Cadastrar">
</form>
<?php
    if(isset($_GET["erro"])){
        if($_GET["erro"] == "email"){
            echo "<p>Só é possível cadastro de email institucional.</p>";
        }
        if($_GET["erro"] == "cpf"){
            echo "CPF inválido.";
        }
    }
?>


</body>
</html>