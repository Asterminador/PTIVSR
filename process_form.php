<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "root"; // Deixe em branco
$dbname = "vida_sem_restricoes";

// Tentar conectar
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!<br>";
}

// Obter dados do formulário
$nome = $_POST['username'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

// Verificar se os dados foram enviados corretamente
if(empty($nome) || empty($idade) || empty($sexo) || empty($cidade) || empty($estado)) {
    die("Erro: Preencha todos os campos do formulário.");
}

// Preparar e executar a consulta SQL de inserção
$sql = "INSERT INTO usuarios (nome, idade, sexo, cidade, estado) VALUES ('$nome', $idade, '$sexo', '$cidade', '$estado')";

// Verificar se a consulta foi construída corretamente
if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
    header("Location: index.php");
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fechar conexão
$conn->close();
?>

