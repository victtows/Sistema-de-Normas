function abrirPagina(pagina){
    if(pagina === 'iso27001'){
        window.location.href = 'pagina27001.html';
    } else if(pagina === 'iso27701'){
        window.location.href = 'pagina27701.html';
    } else if(pagina === 'historico'){
        window.location.href = "historico.html";
    } else {
        alert("Página não encontrada");
    }
}

function cadastrarEmpresa(){
    $.ajax({
            url: "../Backend/formulario.php",
            type: "post",
            data: {
                tipo_acao: "cadastro",
                filtros: {
                    cnpj: $("#cnpjEmpresa").val(),
                    nomeEmpresa: $("#novaEmpresa").val(), 
                }
            },
            success: function (result) {
                console.log("EMppresa salvou");
                alert('Empresa salvouu');
            },
            error: function (data) {
                console.log(data);
                alert('OCorreu um erro eu acho');
            }
        });
}

function selectEmpresa() {
    console.log("teste2");

    $.ajax({
        url: "../Backend/formulario.php",
        type: "POST",
        data: {
            tipo_acao: "select"
        },
        dataType: "json",
        
        success: function(result) {
            console.log(result);


        },
        error: function(xhr) {
            console.log(xhr.responseText);
            alert("Erro ao pesquisar empresas");
        }
    });
}
