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
    <title>Painel do Usuário</title>
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
        <section class="card">
            <div style="display: flex; flex-direction: row; align-items: center; gap: 1rem;">
                <img src="../assets/img/avatar.webp" style="max-width: 10rem; border-radius: 40px;">
                <div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.4rem; align-items: center;">
                        <h2 style="margin: auto;"><?php echo $_SESSION['usuario']['nome'];?></h2>
                        <button type="button" id="submBtn" onclick="logout()">Deslogar</button>
                    </div>
                    <p><?php echo $_SESSION['usuario']['email'] ?></p>
                </div>
            </div>
        </section>
        <section class="card formulario">
            <div>
                <p>Selecione a empresa</p>

                <select id="empresaSelect">
                    <option value="">
                        Nenhuma empresa selecionada
                    </option>
                </select>
            </div>
        </section>
        <div id="auditoriasContainer" style="display: grid; grid-template-columns:1fr 1fr; gap: 1rem;"></div>
    </body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js"></script>

<script src="./script.js"></script>
<script>
    selectEmpresaUser()
    function logout(){
        window.location.href = "logout.php";
    }
</script>
</html>