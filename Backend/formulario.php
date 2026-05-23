<?php
    include("conexao.php");

    if(isset($_POST["tipo_acao"]) && !empty($_POST["tipo_acao"])){
        $tipo_acao = $_POST["tipo_acao"];
        $filtros = $_POST["filtros"];

        if($tipo_acao === "cadastro"){
            var_dump("Estou aqui");
            $CNPJ = $filtros['cnpj'];
            $nomeEmpresa = $filtros['nomeEmpresa'];
            var_dump($CNPJ, $nomeEmpresa);

            $sql = "INSERT INTO Empresa (CNPJ, nomeEmpresa)
            VALUES ('$CNPJ', '$nomeEmpresa');";

            if (mysqli_query($conexao, $sql)) {
                echo "Novo registro criado com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
            }

        } elseif($tipo_acao === "leitura"){

        }

    }
?>