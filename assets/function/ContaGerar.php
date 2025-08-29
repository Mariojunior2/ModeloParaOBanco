<?php
session_start();
require '../includes/conexao.php';
require '../includes/crud.php';

if($_POST) {
    $usuario_id = $_POST['usuario_id'];
    $saldo = 0;


    $contaAtiva = criarConta($usuario_id, $saldo);

    if($contaAtiva) {
        $_SESSION['contaAtiva'] = $contaAtiva;

        header("Location: ../views/hub.php?numberCont=" . urlencode($contaAtiva['numero_conta']));
        exit();
    } else {
        header("Location: ../views/hub.php?erro=3");
        exit();
    }
}
?>
