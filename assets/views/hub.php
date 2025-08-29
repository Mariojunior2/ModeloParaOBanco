<?php 
session_start();
include '../includes/header.php'; 
include '../includes/crud.php';


$usuario_id = $_SESSION['user_id'];
$logado = $_SESSION['logado'];


$conta = LerConta($usuario_id);
if($logado == false) {
    header('Location: ../../index.php');
    exit();
}

?>
<h1><?php echo "" . $_SESSION['user_name']; ?></h1>

<?php if($conta == ""):?>
    <h1>Sem conta bancaria para você!</h1>
    <h2>Deseja Criar a Conta?</h2>
    <form action="../function/ContaGerar.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $usuario_id; ?>">

        <input type="submit" value="sim">
    </form>
    <button><a href="../function/loginLogout.php">nao</a></button><br>
    <?php else: ?>
        <h3>Conta: <?php echo $conta['numero_conta'] ?></h3>
        <h3>Saldo: <?php echo "R$" . $conta['saldo'] ?></h3>

<?php endif ?>
<a href="../function/loginLogout.php">Deseja sair clique aqui!</a>
<?php 
include '../includes/footer.php'; 
?>