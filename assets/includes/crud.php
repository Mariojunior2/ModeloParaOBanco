<?php 
include 'conexao.php';

function criarConta($id_user, $saldo) {
    global $pdo;

    $stmt = $pdo->prepare("INSERT INTO contas (usuario_id, saldo) VALUES (:usuario_id, :saldo)");
    $stmt->execute([
        ':usuario_id' => $id_user,
        ':saldo' => $saldo
    ]);

    $idConta = $pdo->lastInsertId();

    $stmt = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
    $stmt->execute([':id' => $idConta]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function LerConta ($usuario_id) {
    global $pdo;
    $sql = "SELECT * FROM contas WHERE usuario_id = :usuario_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':usuario_id' => $usuario_id,
    ]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

?>