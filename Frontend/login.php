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
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Mínimo 8 caracteres">
        <input type="password" placeholder="Confirme sua senha">
        <button>Cadastrar</button>
    </div>

</div>

<script src="./login.js"></script>
</body>
</html>