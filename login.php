<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './config/db.php';
session_start();

$database = new Database();
$conn = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Buscar usuário pelo e-mail
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuEmail = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se o usuário existe e a senha corresponde à hash armazenada
    if ($usuario && password_verify($senha, $usuario['usuSenha'])) {
        $_SESSION['usuID'] = $usuario['usuID'];
        $_SESSION['usuNome'] = $usuario['usuNome'];
        $_SESSION['usuTipo'] = $usuario['usuTipo'];
        header("Location: index.php");
        exit;
    } else {
        echo "E-mail ou senha inválidos.";
    }
}
?>

<!-- 
para restringir acesso 

?php
session_start();

if ($_SESSION['usuTipo'] != 'administrador') {
    echo "Acesso restrito.";
    exit;
}
?>

para verificar sesssao

?php
session_start();

if (!isset($_SESSION['usuID'])) {
    header("Location: login.php");
    exit;
}
?>

encerrar sessao 
?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit;
?> -->