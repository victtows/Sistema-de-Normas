function abrirPagina(pagina){
    if(pagina === 'iso27001'){
        window.location.href = 'pagina27001.php';
    } else if(pagina === 'iso27701'){
        window.location.href = 'pagina27701.php';
    } else if(pagina === 'historico'){
        window.location.href = "historico.php";
    } else if(pagina === 'empresa') {
        window.location.href = 'empresa.php'
    } else if(pagina === 'usuario') {
        window.location.href = 'usuario.php'
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
                    email: $("#emailEmpresa").val(), 
                    descricao: $("#descricaoEmpresa").val(), 
                    endereco: $("#enderecoEmpresa").val(), 
                }
            },
            success: function (result) {
                console.log("Empresa salvou");
                alert('salvouu');
                limparSelect()
                selectEmpresa() 
            },
            error: function (data) {
                console.log(data);
                alert('OCorreu um erro eu acho');
            }
        });
}

function selectAuditoriaEmpresa(idEmpresa){
    console.log("ele verificou papai")
    $.ajax({
        url: "../Backend/formulario.php",
        type: "POST",
        dataType: "json",
        data: {
            tipo_acao: "select_auditoria",
            idEmpresa: idEmpresa
        },

        success: function(result){
            $("#auditoriasContainer").html("");
            if(result.length === 0){
                $("#auditoriasContainer").html(`
                    <section class="card">
                        Nenhuma auditoria encontrada
                    </section>
                `);
                return;
            }
            result.forEach((auditoria) => {
                $("#auditoriasContainer").append(`
                    <section class="card auditoria-card">
                        <h3>Auditoria #${auditoria.idAuditoria}</h3>
                        <p>Data: ${auditoria.dataAuditoria}</p>

                        <button onclick="abrirResultadoUser(${auditoria.idAuditoria})">
                            Ver Resultado
                        </button>
                    </section>
                `);
            });
        },

        error: function(xhr){
            console.log(xhr.responseText);
            alert("Erro ao buscar auditorias");
        }
    });
}

function abrirResultadoUser(idPesquisa){
    sessionStorage.setItem("idPesquisa", idPesquisa);
    window.location.href = "resultado.php";
}

function selectEmpresaUser(){
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
            console.log(result['idEmpresa'])

            $("#empresaSelect").on("change", function () {
                let idEmpresa = $(this).val();

                if(idEmpresa === ""){
                    $("#auditoriasContainer").html("");
                    return;
                }

                selectAuditoriaEmpresa(idEmpresa);
            });

        },
        error: function(xhr) {
            console.log(xhr.responseText);
            alert("Erro ao pesquisar empresas");
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

function resultadoFormulario() {
    // if (!validacaoSubmit()) {
    //     return;
    // }
    $.ajax({
        url: "../Backend/formulario.php",
        type: "post",
        dataType: "json",
        data: {
            tipo_acao: "cadastro_pesquisa",
            empresa: $("#empresaSelect").val(),
        },
        success: function (result) {
                console.log("Pesquisa salvou");
                let idPesquisa = result.idPesquisa;
                SalvarAuditoria(idPesquisa)
            },
            error: function (data) {
                console.log(data);
                alert('OCorreu um erro eu acho');
            }
    });
}

function SalvarAuditoria(idPesquisa) {
    let respostas = {};
    $("input[type='radio']:checked").each(function () {

        let nome = $(this).attr("name");

        if (nome.includes("-subq")) {
            return;
        }

        let numeroControle = nome;

        let resultado = $(this)
            .closest("label")
            .find("span:last")
            .text()
            .trim();

        let andamento = $(
            `input[name='${numeroControle}-subq']:checked`
        )
        .closest("label")
        .find("span:last")
        .text()
        .trim();

        let observacao = $(
            `input[name='${numeroControle}-ob']`
        ).val();

        respostas[numeroControle] = {
            resultado: resultado,
            andamento: andamento || null,
            observacao: observacao || null
        };
    });

    console.log(respostas);
    $.ajax({
        url: "../Backend/formulario.php",
        type: "post",
        dataType: "json",
        data: {
            tipo_acao: "cadastro_auditoria",
            filtros: respostas,
            idPesquisa: idPesquisa,
        },
        success: function (result) {
                console.log("auditoriaaasdasdasdasdasde me mataaaa salvou");
                alert('auditoria salvouu');
                sessionStorage.setItem("idPesquisa", result.idPesquisa);
                window.location.href = "resultado.php";

            },
            error: function (data) {
                console.log(data);
                alert('OCorreu um erro eu acho');
            }
    });
}

function resultadosPesquisa(idPesquisa) {
    $.ajax({
        url: "../Backend/formulario.php",
        type: "POST",
        data: {
            tipo_acao: "select_resultado",
            idPesquisa: idPesquisa
        },
        dataType: "json",
        
        success: function(result) {
            console.log(result);
            let html = "";
            gerarGraficoPizza(result);
            gerarBarraProgresso(result);

            result.observacoes.forEach(obs => {
                html += `<tr>
                        <td>${obs.numeroControle}</td>
                        <td>${obs.descricaoControle}</td>
                        <td>${obs.observacao}</td>
                        </tr>`;});
            $("#corpoObservacoes").html(html);
        },
        error: function(xhr) {
            console.log(xhr.responseText);
            alert("Erro ao pesquisar empresas");
        }
    });
}

function gerarGraficoPizza(resultado) {
    const data = {
        labels: [
            'Não Conforme',
            'Não Aplicavel',
            'Conforme',
        ],
        datasets: [{
            label: 'Distribuição de Conformidade',
            data: [(resultado['dados'].length - (resultado['estatisticas']['conforme']) - ( + resultado['estatisticas']['naoAplicavel'])), resultado['estatisticas']['naoAplicavel'], resultado['estatisticas']['conforme']],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 205, 86)',
                'rgb(86, 255, 205)'
                
            ],
            hoverOffset: 4
        }]
    }
    const config = {
        type: 'pie',
        data: data,
    }
    new Chart(document.getElementById('grafico_pizza'), config);
}

function percentage(partialValue, totalValue) {
   return (100 * partialValue) / totalValue;
} 

function gerarBarraProgresso(resultado) {

    document.getElementById('percentual').innerHTML = Math.round(percentage(resultado['estatisticas']['conforme'], resultado['dados'].length)) + '%';
    document.getElementById('barraProgresso').value = resultado['estatisticas']['conforme'];
    document.getElementById('barraProgresso').max = resultado['dados'].length;
}

function limparSelect() {
    document.getElementById('empresaSelect').options.length = 0;
}

function GerarPDF(){
    
}


/// CÓDIGO DAS TABS DO FORMULARIO ///

var currentTab = 0;
showTab(currentTab)
function showTab(n) {
    var x = document.getElementsByClassName('tab');
    x[n].style.display = "block";
    
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }

    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
        document.getElementById("submBtn").style.display = "inline";
    } else {
        document.getElementById("nextBtn").style.display = "inline";
        document.getElementById("submBtn").style.display = "none";
    }
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    
    

    x[currentTab].style.display = "none";
    currentTab = currentTab + n;

    if (currentTab >= x.length) {
        document.getElementById("formulario").submit()
        return false;
    }

    showTab(currentTab);
}

function validacaoSubmit(){
    let empresa = $("#empresaSelect").val();

    if (!empresa) {
        alert("Selecione uma empresa.");
        $("#empresaSelect").focus();
        return false;
    }

    let perguntas = new Set();

    $("input[type='radio']").each(function () {
        let nome = $(this).attr("name");
        if (nome.includes("-q") && !nome.includes("subq")) {
            perguntas.add(nome);
        }
    });

    for (let pergunta of perguntas) {
        let selecionado = $(`input[name="${pergunta}"]:checked`);
        if (selecionado.length === 0) {
            alert(`Falta responder a pergunta ${pergunta}`);
            $(`input[name="${pergunta}"]`)
                .first()[0]
                .scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                });

            return false;
        }
    }

    return true;
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");

  for (i = 0; i < y.length; i++) {

    if (y[i].value == "") {

      y[i].className += " invalid";

      valid = false;
    }
  }

  return valid; 
}

/// CONTADOR DE QUESTOES ///

const radios = document.querySelectorAll("input[type='radio']");

function updateProgress() {
    const questions = document.querySelectorAll(".question");
    const total = questions.length;

    let answered = 0;

    questions.forEach(question => {
        const inputs = question.querySelectorAll("input[type='radio']");
        const isAnswered = Array.from(inputs).some(input => input.checked);

        if (isAnswered) {
            answered++;
        }
    });

    const percent = total === 0 ? 0 : (answered / total) * 100;

    document.getElementById("progressText").innerText =
        `${answered} / ${total} respondidas`;

    document.getElementById("progressFill").style.width =
        percent + "%";
}

radios.forEach(radio => {
    radio.addEventListener("change", function () {

        const question = radio.closest(".question");

        const naoConformeRadio = question.querySelectorAll("input[type='radio']")[1];

        const subRadios = question.querySelectorAll("input[name$='subq']");

        if (!naoConformeRadio.checked) {
            subRadios.forEach(r => r.checked = false);
        }

        updateProgress();
    });
});

updateProgress();