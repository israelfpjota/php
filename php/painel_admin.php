<?php 
    session_start();
    if(!isset($_SESSION['admin_logado'])){
        header("location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do ADM</title>
</head>
<body>
    <h2>Bem vindo, corno!</h2>
    <a href="cadastrar_produto.php">
        <button>Cadastrar produto</button>
    </a>
</body>
</html>