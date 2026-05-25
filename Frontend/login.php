<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

<div class="container">

    <div class="tabs">
        <div class="tab active" onclick="showTab('login')">Login</div>
        <div class="tab" onclick="showTab('register')">Cadastro</div>
    </div>

    <div id="login" class="form active">
        <h2>Entrar</h2>
        <input type="text" placeholder="Usuário">
        <input type="password" placeholder="Senha">
        <button>Login</button>
    </div>

    <div id="register" class="form">
        <h2>Criar conta</h2>
        <input type="text" placeholder="Nome">
        <input type="text" placeholder="Usuário">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Mínimo 8 caracteres">
        <input type="password" placeholder="Confirme sua senha">
        <button>Cadastrar</button>
    </div>

</div>

<script>
function showTab(tab) {
    document.querySelectorAll(".form").forEach(f => f.classList.remove("active"));
    document.querySelectorAll(".tab").forEach(t => t.classList.remove("active"));

    document.getElementById(tab).classList.add("active");

    if(tab === "login"){
        document.querySelectorAll(".tab")[0].classList.add("active");
    } else {
        document.querySelectorAll(".tab")[1].classList.add("active");
    }
}
</script>

</body>
</html>