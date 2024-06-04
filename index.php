<?php
session_start();

$usuarios = [
    'matheus' => [
        'senha' => '123',
    ],
    'joao' => [
        'senha' => 'joao1',
    ],
    'maria' => [
        'senha' => 'maria2',
    ],
];

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario]['senha'] === $senha) {
        $_SESSION['usuario'] = $usuario;
        header("Location: ./perfil/index.html"); // Redireciona para a área logada
        exit;
    } else {
        $mensagem = "Usuário ou senha incorretos";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vida sem restrições</title>
</head>

<body>
    <div class="container">
        <img class="logo" src="./assets/images/logosf.png" alt="Logo" />
        <h1>Faça seu login!</h1>
        <?php if (isset($mensagem)) : ?>
            <p><?php echo $mensagem; ?></p>
        <?php endif; ?>
        <form action="" method="post" class="form">
            <label for="usuario" class="label">Usuário:</label>
            <input type="text" id="usuario" name="usuario" class="input" placeholder="Digite o usuário">
            <label for="senha" class="label">Senha:</label>
            <input type="password" id="senha" name="senha" class="input" placeholder="Digite a senha">
            <button type="submit" class="button">Login</button>
        </form>
        <p class="registerText">Não possui cadastro? <a href="cadastro.php">Clique aqui</a></p> <!-- Ajustado o link para cadastro.php -->
    </div>
   <!-- <script src="./assets/javascript/app.js"></script> -->
</body>

</html>
