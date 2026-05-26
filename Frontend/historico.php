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
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Gráfico Comparativo</title>
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
    <div class='container'>
        <section class="card">
            <div style="width: 100%; text-align: center;">
                <h2>Resultado da Auditoria</h2>
                <canvas id="grafico_historico"></canvas>
            </div>
        </section>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js"></script>

<script src="./script.js"></script>
<script>
    let idEmpresa = sessionStorage.getItem("idEmpresa");
    selectHistorico(idEmpresa);
</script>
</html>