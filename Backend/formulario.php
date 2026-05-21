<?php
    include("conexao.php");


    if(isset($_POST["tipo_acao"]) && !empty($_POST["tipo_acao"])){
        $tipo_acao = $_POST["tipo_acao"];

        if($tipo_acao === "cadastro"){
            ... 
        } elseif($tipo_acao === "leitura"){
            ...
        }
        
    }
?>