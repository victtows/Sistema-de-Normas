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
        <input type="text" placeholder="Email" id="login_email">
        <input type="password" placeholder="Senha" id="login_senha">
        <button onclick="login()">Login</button>
    </div>

    <div id="register" class="form">
        <h2>Criar conta</h2>
        <input type="text" placeholder="Nome" id="cad_nome">
        <input type="email" placeholder="Email" id="cad_email">
        <input type="password" placeholder="Mínimo 8 caracteres" id="cad_senha">
        <input type="password" placeholder="Confirme sua senha" id="cad_senhaconfirmar">
        <button onclick="cadastro()">Cadastrar</button>
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

function cadastro(){
    let nome = $("#cad_nome").val().trim();
    let email = $("#cad_email").val().trim();
    let senha = $("#cad_senha").val();
    let confirmarSenha = $("#cad_senhaconfirmar").val();

    if(!nome || !email || !senha || !confirmarSenha){
        alert("Campos vazios");
        return;
    }
    if(senha.length < 8){
        alert("A senha deve ter no mínimo 8 caracteres.");
        return;
    }

    if(senha !== confirmarSenha){
        alert("As senhas não coincidem.");
        return;
    }

    $.ajax({
        url: "../Backend/auth.php",
        type: "post",
        dataType: "json",
        data: {
            tipo_acao: "cadastro",
            nome: nome,
            email: email,
            senha: senha
        },
        success: function(result){
            if(result.success){
                alert("Conta criada!");
                window.location.href =
                    "login.php";
            } else {
                alert(result.mensagem);
            }
        }
    });
}

function login(){
    $.ajax({
        url: "../Backend/auth.php",
        type: "post",
        dataType: "json",
        data: {
            tipo_acao: "login",
            email: $("#login_email").val(),
            senha: $("#login_senha").val()
        },
        success: function(result){
            if(result.success){
                window.location.href = "index.php";
            } else {
                alert(result.mensagem);
            }
        }
    });
}

</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>
</html>