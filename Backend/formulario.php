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

        } elseif($tipo_acao === "select_empresa"){
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

        } elseif($tipo_acao === "cadastro_pesquisa"){
            $empresa = $_POST["empresa"];

            $sql = "INSERT INTO pesquisa (Empresa, dataPesquisa)
            VALUES ('$empresa', CURDATE())";

            if (mysqli_query($conexao, $sql)) {
                $idPesquisa = mysqli_insert_id($conexao);
                echo json_encode([
                    "success" => true,
                    "idPesquisa" => $idPesquisa,
                    "mensagem" => "Pesquisa feita"
                ]);

            } else {
                echo json_encode([
                    "success" => false,
                    "erro" => mysqli_error($conexao)
                ]);
            }
        } elseif($tipo_acao === "cadastro_auditoria"){
            $idPesquisa = $_POST["idPesquisa"];
            $filtros = $_POST["filtros"];

            foreach($filtros as $controle => $resultado){
                $NomeControle = explode("-", $controle)[0];

                $sql = "INSERT INTO Resultado
                (idPesquisa, NomeControle, resultado, andamento)
                VALUES
                ('$idPesquisa', '$NomeControle', '$resultado', 'Pendente')";

                mysqli_query($conexao, $sql);
            }

            echo json_encode([
                "success" => true,
                "mensagem" => "Auditoria salva"
            ]);
        }

    }
?>