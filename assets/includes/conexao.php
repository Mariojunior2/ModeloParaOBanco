<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "banco_sistema";


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro ao se comunicar com o banco". $e->getMessage());
}
?>