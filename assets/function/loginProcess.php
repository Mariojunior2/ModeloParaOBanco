<?php 
session_start();
require '../includes/conexao.php';

if ($_GET) {
    $email = $_GET['email'];
    $senha = $_GET['senha'];

    $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE email = :email');
    $stmt->execute([
        ':email' => $email,
    ]);

    $user = $stmt->fetch();

    if($user && password_verify($senha, $user['senha'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nome'];

        header('Location: ../views/hub.php?sucesso=1');
        exit();
    } else {
        header('Location: ../../index.php?erro=1');
        exit();
    }
}
?>