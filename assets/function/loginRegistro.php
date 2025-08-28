<?php 
session_start();
require '../includes/conexao.php';

if ($_POST) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $verificar = $pdo->prepare("SELECT * FROM usuarios WHERE email=:email");
    $verificar->execute([':email' => $email]);

    if($verificar->rowCount() > 0) {
        header('Location: ../../registro.php?erro=1');
        exit();
    } else {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        try {
            $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha ) VALUES (:nome, :email, :senha)");
            $executando = $stmt->execute([
                ':nome' => $nome,
                ':senha' => $senhaHash,
                ':email' => $email
            ]);

            if($executando) {
                header('Location: ../../registro.php?sucesso=1');
                exit();
            }
        } catch (PDOException $e) {
            header('Location: ../../registro.php?erro=1');
            exit();
        }
    }
}

?>