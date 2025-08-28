<?php include './assets/includes/header.php'; ?>

<h1>Registro</h1>
<form action="./assets/function/loginRegistro.php" method="post">
    <label for="nome">Nome</label><br>
    <input type="text" name="nome" id="nome"><br><br>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email"><br><br>
    <label for="senha">Senha</label><br>
    <input type="password" name="senha" id="senha"><br><br>
    <button type="submit">Enviar</button>
</form>
<a href="./index.php">Tem conta? clique aqui</a>

<?php include './assets/includes/footer.php'; ?>