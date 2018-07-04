<?php
session_start();

// Inclui o arquivo de inicialização
require_once 'init.php';

// Resgata variáveis do formulário
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if (empty($usuario) || empty($senha)) {
    $_SESSION['loginError'] = "Usuario ou senha invalidos.";
    header("Location: ../index.php");
    exit();
}

// Cria o hash da senha
$senhaHash = make_hash($senha);

$PDO = db_connect();

$sql = "SELECT id, nome FROM usuarios WHERE nome = :usuario AND senha = :senha";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senha', $senhaHash);

$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($usuarios) <= 0)
{
    $_SESSION['loginError'] = "Usuario ou senha invalidos.";
    header("Location: ../index.php");
}

// Pega o primeiro usuário
$user = $usuarios[0];

$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['nome'];

header('Location: ../restricted/home.php');
?>
