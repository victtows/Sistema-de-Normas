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
                console.log("Empresa salvou");
                alert('Empresa salvouu');
                limparSelect()
                selectEmpresa() 
            },
            error: function (data) {
                console.log(data);
                alert('OCorreu um erro eu acho');
            }
        });
}

function selectEmpresa() {
    $.ajax({
        url: "../Backend/formulario.php",
        type: "POST",
        data: {
            tipo_acao: "select_empresa"
        },
        dataType: "json",
        
        success: function(result) {
            console.log(result);

            result.forEach((element) => {
                document.getElementById('empresaSelect').innerHTML += '\n\n<option value="' + element['idEmpresa'] + '">\n' + element['nomeEmpresa'] + '\n</option>\n\n'
            });


        },
        error: function(xhr) {
            console.log(xhr.responseText);
            alert("Erro ao pesquisar empresas");
        }
    });
}

function selectNorma() {
    $.ajax({
        url: "../Backend/formulario.php",
        type: "POST",
        data: {
            tipo_acao: "select_norma"
        },
        dataType: "json",
        
        success: function(result) {
            console.log(result);
        },
        error: function(xhr) {
            console.log(xhr.responseText);
            alert("Erro ao pesquisar os Controles");
        }
    });
}

function limparSelect() {
    document.getElementById('empresaSelect').options.length = 0;
}