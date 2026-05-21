<?php
$conexao = mysqli_connect("localhost", "root", "", "log");

if (!$conexao) {
    die("Conexão Falhou: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");
?>