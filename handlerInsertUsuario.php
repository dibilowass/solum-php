<?php 

require_once "config/db.php";
require_once "model/Usuario.php";

// Cria a conexão com PDO
$database = new Database();
$conn = $database->getConnection();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $usuNome = $_POST['nome'];
    $usuEmail = $_POST['email'];
    $usuSenha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha
    $usuEndereco = $_POST['endereco'];

    // Query com PDO
    $sql = "INSERT INTO usuarios (usuNome, usuEmail, usuSenha, usuEndereco)
            VALUES (:nome, :email, :senha, :endereco)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nome', $usuNome);
    $stmt->bindParam(':email', $usuEmail);
    $stmt->bindParam(':senha', $usuSenha); // Já está criptografada
    $stmt->bindParam(':endereco', $usuEndereco);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
    } else {
        echo "<div class='alert alert-danger'>Erro ao cadastrar: " . implode(" | ", $stmt->errorInfo()) . "</div>";
    }
}
?>
