<?php
if(isset($_POST ['email'])) {

    include('conexao.php');

    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $mysqli->query("INSERT INTO senhas(email, senha) VALUES ('$email','$senha')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia</title>
</head>
<body>
    Cadastrar Senha
    <form action=""method="post">
        <input type="text" name="email">
        <input type="text" name="senha">
        <button type="submit">Salvar Senha</button>
        </form>
</body>
</html>