<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Cadastro de Empresas</title>
</head>
<body>

    <div class="floating-sidebar">

        <a href="index.php" class="menu-item">
            <span class="icon"><i class="fa-solid fa-solid fa-house"></i></span>
            <span class="text">Início</span>
        </a>
    
        <a href="pagina27001.php" class="menu-item">
            <span class="icon"><i class="fa-solid fa-shield-halved"></i></span>
            <span class="text">ISO 27001</span>
        </a>
    
        <a href="pagina27701.php" class="menu-item">
            <span class="icon"><i class="fa-solid fa-lock"></i></span>
            <span class="text">ISO 27701</span>
        </a>

        <a href="empresa.php" class="menu-item">
            <span class="icon"><i class="fa-solid fa-building"></i></span>
            <span class="text">Empresas</span>
        </a>
    
        <a href="usuario.php" class="menu-item">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <span class="text">Usuário</span>
        </a>
    
    </div>
    
    <div class="container">
        <section class="card formulario">
            <h2> Cadastro de Empresa</h2>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                <div>
                    <label for='nomeEmpresa'>Nome:</label>
                    <input type='text' name='nomeEmpresa' id="novaEmpresa">
                </div>
                <div>
                    <label for='enderecoEmpresa'>Endereço:</label>
                    <input type='text' name='enderecoEmpresa' id="enderecoEmpresa">
                </div>
                <div>
                    <label for='emailEmpresa'>Email:</label>
                    <input type='text' name='emailEmpresa' id="emailEmpresa">
                </div>
                <div>
                    <label for='cnpjEmpresa'>CNPJ:</label>
                    <input type='text' name='cnpjEmpresa' id="cnpjEmpresa">
                </div>
            </div>
            <div>
                <label for='descricaoEmpresa'>Descrição:</label>
                <input type='text' name='descricaoEmpresa' id="descricaoEmpresa">
            </div>
            <button type='button' id='submBtn' onclick='cadastrarEmpresa()'>Submit</button>
        </section>
    </body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js"></script>

<script src="./script.js"></script>
</html>