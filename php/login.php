<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Administrador</title>
</head>
<body>
    <h2>Login do Administrador</h2>
    <form action="processa_login.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <p></p>
        <label for="senha">Senha secreta:</label>
        <input type="password" id="senha" name="senha" required>
        <p></p>
        <input type="submit" value="Entrar">

        <?php 
        if(isset($_GET['erro'])){
            echo '<p style="color:red;">Nome de usuário ou senha incorreta!</p>';
        };
        ?>
    </form>
</body>
</html>