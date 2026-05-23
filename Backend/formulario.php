<?php
    include("conexao.php");

    if(isset($_POST["tipo_acao"]) && !empty($_POST["tipo_acao"])){
        $tipo_acao = $_POST["tipo_acao"];

        if($tipo_acao === "cadastro"){
            $filtros = $_POST["filtros"];
            $CNPJ = $filtros['cnpj'];
            $nomeEmpresa = $filtros['nomeEmpresa'];

            $sql = "INSERT INTO Empresa (CNPJ, nomeEmpresa)
            VALUES ('$CNPJ', '$nomeEmpresa');";

            if (mysqli_query($conexao, $sql)) {
                echo "Novo registro criado com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
            }

        } elseif($tipo_acao === "select"){
            $sql = "SELECT * FROM empresa";
            $resultado = mysqli_query($conexao, $sql);
            if($resultado){
                $empresas = [];
                while($linha = mysqli_fetch_assoc($resultado)){
                    $empresas[] = $linha;
                }
                echo json_encode($empresas);
            } else {
                echo "Erro: " . mysqli_error($conexao);
            }
        }

    }
?>