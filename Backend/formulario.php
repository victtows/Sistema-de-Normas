<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: login.php");
    exit;
}
?>
<?php
    include("conexao.php");

    if(isset($_POST["tipo_acao"]) && !empty($_POST["tipo_acao"])){
        $tipo_acao = $_POST["tipo_acao"];

        if($tipo_acao === "cadastro"){
            $filtros = $_POST["filtros"];
            $CNPJ = mysqli_real_escape_string($conexao, $filtros['cnpj']);
            $nomeEmpresa = mysqli_real_escape_string($conexao, $filtros['nomeEmpresa']);
            $email = mysqli_real_escape_string($conexao, $filtros['email']);
            $descricao = mysqli_real_escape_string($conexao, $filtros['descricao']);
            $endereco = mysqli_real_escape_string($conexao, $filtros['endereco']);
            $idUsuario = $_SESSION["usuario"]["id"];

            $sql = "INSERT INTO Empresa (CNPJ, nomeEmpresa, emailEmpresa, descricaoEmpresa, enderecoEmpresa, idUsuario)
            VALUES ('$CNPJ', '$nomeEmpresa', '$email', '$descricao', '$endereco', '$idUsuario');";

            if (mysqli_query($conexao, $sql)) {
                echo "Novo registro criado com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
            }

        } elseif($tipo_acao === "select_empresa"){
            $idUsuario = $_SESSION["usuario"]["id"];

            $sql = "SELECT * FROM empresa WHERE idUsuario = '$idUsuario'";
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

            $sql = "INSERT INTO Auditoria (idEmpresa, dataAuditoria)
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

            foreach($filtros as $numeroControle => $dados){
                switch($dados["resultado"]){
                    case "Conforme":
                        $resultado = 1;
                        break;
                    case "Não Conforme":
                        $resultado = 2;
                        break;
                    case "Não Aplicavel":
                        $resultado = 3;
                        break;
                    default:
                        $resultado = 0;
                }
                switch($dados["andamento"] ?? ""){
                    case "Sim":
                        $andamento = 1;
                        break;
                    case "Não":
                        $andamento = 2;
                        break;
                    default:
                        $andamento = 0;
                }
                $observacao = mysqli_real_escape_string(
                    $conexao,
                    $dados["observacao"] ?? ""
                );
                $sql = "INSERT INTO Resultado(idAuditoria, numeroControle, resultado, andamento, observacao)
                VALUES('$idPesquisa', '$numeroControle', '$resultado', '$andamento', '$observacao')";

                if(!mysqli_query($conexao, $sql)){
                    echo json_encode([
                        "success" => false,
                        "controle" => $numeroControle
                    ]);
                    exit;
                }
            }

            echo json_encode([
                "success" => true,
                "mensagem" => "Auditoria salva",
                "idPesquisa" => $idPesquisa,
            ]);
        } elseif($tipo_acao === "select_resultado"){
            $auditoria = $_POST["idPesquisa"];
            $sqlResultado = "SELECT 
                r.*,
                c.descricaoControle
            FROM resultado r
            INNER JOIN controle c
                ON c.numero = r.numeroControle
            WHERE r.idAuditoria = '$auditoria';";

            $queryResultado = mysqli_query(
                $conexao, 
                $sqlResultado
            );

            $dados = [];

            while($linha = mysqli_fetch_assoc($queryResultado)){
                $dados[] = $linha;
            }

            $sqlEstatistica = "SELECT
                COUNT(CASE WHEN resultado = 1 THEN 1 END) AS conforme,
                COUNT(CASE WHEN resultado = 2 THEN 1 END) AS naoConforme,
                COUNT(CASE WHEN resultado = 3 THEN 1 END) AS naoAplicavel
            FROM resultado
            WHERE idAuditoria = '$auditoria'";

            $queryEstatistica = mysqli_query(
                $conexao,
                $sqlEstatistica
            );

            $estatisticas = mysqli_fetch_assoc(
                $queryEstatistica
            );

            $sqlData = "SELECT dataAuditoria
            FROM auditoria
            WHERE idAuditoria = '$auditoria'";

            $queryData = mysqli_query(
                $conexao,
                $sqlData
            );

            $dataAuditoria = mysqli_fetch_assoc(
                $queryData
            );

            $sqlObservacoes = "SELECT
                r.numeroControle,
                c.descricaoControle,
                r.observacao
            FROM resultado r
            INNER JOIN controle c
                ON c.numero = r.numeroControle
            WHERE r.idAuditoria = '$auditoria'
            AND r.observacao IS NOT NULL
            AND r.observacao != ''";

            $queryObservacoes = mysqli_query(
                $conexao,
                $sqlObservacoes
            );

            $observacoes = [];

            while($linha = mysqli_fetch_assoc($queryObservacoes)){
                $observacoes[] = $linha;
            }

            echo json_encode([
                "success" => true,
                "estatisticas" => $estatisticas,
                "dados" => $dados,
                "dataAuditoria" => $dataAuditoria["dataAuditoria"],
                "observacoes" => $observacoes
            ]);
        } else if ($tipo_acao == "select_resultado_segregado") {
            
            $auditoria = $_POST["idPesquisa"];

            $categorias_encontradas = "SELECT DISTINCT (
                SELECT categoria
                FROM Controle
                WHERE Controle.numero = Resultado.numeroControle
                LIMIT 1
            ) AS categoria
            FROM resultado
            WHERE idAuditoria = '$auditoria';";
            
            $queryCategorias = mysqli_query(
                $conexao,
                $categorias_encontradas
            );

            $categorias = [];

            while ($linha = mysqli_fetch_assoc($queryCategorias)){
                $categorias[] = $linha;
            };
            
            $estatisticas = [];

            $cat = "categoria";

            foreach($categorias as $categoria) {
                $sqlEstatistica = "SELECT 
	                COUNT(CASE WHEN resultado = 1 THEN 1 END) AS conforme,
                    COUNT(CASE WHEN resultado = 0 THEN 1 END) AS naoConforme,
	                COUNT(CASE WHEN resultado = 3 THEN 1 END) AS naoAplicavel,
                    controle.categoria
                FROM resultado, controle
	                WHERE idAuditoria = '$auditoria' AND controle.categoria = '$categoria[$cat]' AND controle.numero = resultado.numeroControle";

                $queryCategoria = mysqli_query(
                    $conexao,
                    $sqlEstatistica
                );

                $estatisticas[] = mysqli_fetch_assoc(
                    $queryCategoria
                );
            }


            echo json_encode([
                "success" => true,
                "estatisticas" => $estatisticas
            ]);
        } elseif($tipo_acao === "select_auditoria"){
            $idEmpresa = $_POST["idEmpresa"];
            $sql = "SELECT 
                    a.*,
                    e.nomeEmpresa,
                    e.CNPJ,
                    e.emailEmpresa,
                    e.descricaoEmpresa,
                    e.enderecoEmpresa
                FROM Auditoria a
                INNER JOIN Empresa e
                    ON e.idEmpresa = a.idEmpresa
                WHERE a.idEmpresa = '$idEmpresa'
                ORDER BY a.dataAuditoria DESC;";

            $resultado = mysqli_query($conexao, $sql);

            $auditorias = [];

            while($linha = mysqli_fetch_assoc($resultado)){
                $auditorias[] = $linha;
            }

            echo json_encode($auditorias);
        } elseif($tipo_acao === "select_historico"){
            $idEmpresa = $_POST["idEmpresa"];
            $sql = "SELECT DISTINCT auditoria.idAuditoria FROM auditoria, resultado, controle WHERE idEmpresa = '$idEmpresa' 
                AND resultado.idAuditoria = auditoria.idAuditoria 
	            AND resultado.numeroControle = controle.numero AND controle.norma = '27701'
	            ORDER BY idAuditoria DESC LIMIT 3";
            $resultado = mysqli_query($conexao, $sql);
            
            if($resultado){
                $todasAuditorias = [];
                while($row = mysqli_fetch_assoc($resultado)){
                    $auditoria = $row['idAuditoria'];
                    $sqlResultado = "SELECT r.*, c.descricaoControle FROM resultado r INNER JOIN controle c ON c.numero = r.numeroControle WHERE r.idAuditoria = '$auditoria'";
                    $queryResultado = mysqli_query($conexao, $sqlResultado);
                    $dados = [];

                    while($linha = mysqli_fetch_assoc($queryResultado)){
                        $dados[] = $linha;
                    }

                    $sqlEstatistica = "SELECT COUNT(CASE WHEN resultado = 1 THEN 1 END) AS conforme, COUNT(CASE WHEN resultado = 0 THEN 1 END) AS naoConforme, COUNT(CASE WHEN resultado = 3 THEN 1 END) AS naoAplicavel FROM resultado WHERE idAuditoria = '$auditoria'";
                    $queryEstatistica = mysqli_query($conexao, $sqlEstatistica);
                    $estatisticas = mysqli_fetch_assoc($queryEstatistica);

                    $sqlData = "SELECT dataAuditoria FROM auditoria WHERE idAuditoria = '$auditoria'";
                    $queryData = mysqli_query($conexao, $sqlData);
                    $dataAuditoria = mysqli_fetch_assoc($queryData);
                    $sqlObservacoes = "SELECT r.numeroControle, c.descricaoControle, r.observacao FROM resultado r INNER JOIN controle c ON c.numero = r.numeroControle WHERE r.idAuditoria = '$auditoria' AND r.observacao IS NOT NULL AND r.observacao != ''";
                    $queryObservacoes = mysqli_query($conexao, $sqlObservacoes);
                    $observacoes = [];
                    
                    while($linha = mysqli_fetch_assoc($queryObservacoes)){
                        $observacoes[] = $linha;
                    }

                    $todasAuditorias[] = [
                        "success" => true,
                        "estatisticas" => $estatisticas,
                        "dados" => $dados,
                        "dataAuditoria" => $dataAuditoria["dataAuditoria"],
                        "observacoes" => $observacoes
                    ];
                }

                echo json_encode($todasAuditorias);
            } else {
                echo json_encode(["success" => false, "error" => mysqli_error($conexao)]);
            }
        }
}   
?>