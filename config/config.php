<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "folktaledb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
