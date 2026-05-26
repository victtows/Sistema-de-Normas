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
    <title>Relatório</title>
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

        <a href="#" class="menu-item" onclick="gerarPDF(idPesquisa)">
            <span class="icon"><i class="fa-solid fa-file-pdf"></i></span>
            <span class="text">Gerar PDF</span>
        </a>
    
        <a href="usuario.php" class="menu-item">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <span class="text">Usuário</span>
        </a>
    
    </div>
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 1rem;">
            <section class="card">
                <div style="width: 100%; text-align: center;">
                    <h2>Resultado da Auditoria</h2>
                    <canvas id="grafico_pizza"></canvas>
                </div>
            </section>
            <section class="card">
                <div style="width: 100%; text-align: center;">
                    <h2>Resultado Parcial</h2>
                    <canvas id="grafico_barra"></canvas>
                </div>
            </section>
        </div>
        <section class="card">
            <div style="display: flex; flex-direction: row; gap: 1rem;">
                <h2>Percentual de Conformidade:</h2> <h2 id="percentual"></h2>
            </div>
            <progress id="barraProgresso" value="0" max="93" style="width: 100%; height: 1rem;"> </progress>
        </section>
    </div>
    <div class="tabela-container">
        <table id="tabelaObservacoes">
            <thead>
                <tr>
                    <th>Controle</th>
                    <th>Pergunta</th>
                    <th>Observação</th>
                </tr>
            </thead>
        <tbody id="corpoObservacoes">
    </tbody>
</table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let idPesquisa = sessionStorage.getItem("idPesquisa");
    console.log(idPesquisa);
    resultadosPesquisa(idPesquisa); 
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js"></script>

<script src="./script.js"></script>
</html>