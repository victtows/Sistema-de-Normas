<?php

session_start();
include("conexao.php");

$tipo_acao = $_POST["tipo_acao"] ?? "";

if($tipo_acao === "cadastro"){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario WHERE emailUsuario = '$email'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

        echo json_encode([
            "success" => false,
            "mensagem" => "Email já cadastrado",
            "resposta" => "1"
        ]);

        exit;
    }

    $senhaHash = password_hash(
        $senha,
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO usuario
    (nomeUsuario , emailUsuario, senhaUsuario )
    VALUES
    ('$nome', '$email', '$senhaHash')";

    if(mysqli_query($conexao, $sql)){

        echo json_encode([
            "success" => true,
            "mensagem" => "Usuário criado",
            "resposta" => "2"
        ]);

    } else {

        echo json_encode([
            "success" => false,
            "mensagem" => mysqli_error($conexao)
        ]);
    }
}

elseif($tipo_acao === "login"){

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario
    WHERE emailUsuario = '$email'";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

        $usuario = mysqli_fetch_assoc(
            $resultado
        );

        if(password_verify(
            $senha,
            $usuario["senhaUsuario"]
        )){

            $_SESSION["usuario"] = [
                "id" => $usuario["idUsuario"],
                "nome" => $usuario["nomeUsuario"],
                "email" => $usuario["emailUsuario"]
            ];

            echo json_encode([
                "success" => true
            ]);

        } else {

            echo json_encode([
                "success" => false,
                "mensagem" => "Senha incorreta",
                "resposta" => "3"
            ]);
        }

    } else {

        echo json_encode([
            "success" => false,
            "mensagem" => "Usuário não encontrado",
            "resposta" => "4"
        ]);
    }
}