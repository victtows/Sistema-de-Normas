<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.ico">

    <title>Auditoria ISO</title>

    <link rel="stylesheet" href="main.css">

</head>

<body>

    <div class="container">

        <section class="introducao">

            <h1>Auditoria ISO</h1>

            <p>
                Sistema para gestão e conformidade
                com normas ISO.
            </p>

        </section>

        <div class="recursos">

            <section class="card">

                <h2>Normas</h2>
                <div class="isos">
                <button
                    class="norma-btn iso27001"
                    onclick="abrirPagina('iso27001')">

                    <h3>ISO 27001</h3>

                    <p>
                        Gestão de Segurança da Informação
                    </p>

                </button>

                <button
                    class="norma-btn iso27701"
                    onclick="abrirPagina('iso27701')">

                    <h3>ISO 27701</h3>

                    <p>
                        Gestão de Privacidade da Informação
                    </p>

                </button>
                </div>
            </section>

            <section class="card" style="max-width: 50%;">

                <h2>Empresas</h2>

                <div style="align-content: center;">
                    <button onclick="abrirPagina('empresa')" class="norma-btn iso27001">
                        <h3>Cadastrar uma Empresa</h3>
                    </button>

                    <button onclick="abrirPagina('usuario')" class="norma-btn iso27701">
                        <h3>Abrir Perfil de Usuário</h3>
                    </buttn>
                </div>  

            </section>

        </div>  
    </div>

    

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>