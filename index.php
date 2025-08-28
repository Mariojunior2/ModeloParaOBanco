<?php include './assets/includes/header.php'; ?>

<h1>Login</h1>
<form action="./assets/function/loginProcess.php" method="get">
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email"><br><br>
    <label for="senha">Senha</label><br>
    <input type="password" name="senha" id="senha"><br><br>
    <button type="submit">Enviar</button>
</form>
<a href="./registro.php">Sem conta? clique aqui</a>

<?php include './assets/includes/footer.php'; ?>