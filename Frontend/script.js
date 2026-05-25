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

function resultadoFormulario() {
    let respostas = {};

    $("input[type='radio']:checked").each(function () {
        let nome = $(this).attr("name");
        let valor = $(this).closest("label").find("span:last").text().trim();

        respostas[nome] = valor;
    });

    console.log(respostas);

    $.ajax({
        url: "../Backend/formulario.php",
        type: "post",
        data: {
            tipo_acao: "cadastro_resultado",
            empresa: $("#empresaSelect").val(),
        },
        success: function (result) {
                console.log("pesquisa salvou");
                alert('pesquisa salvouu');
            },
            error: function (data) {
                console.log(data);
                alert('OCorreu um erro eu acho');
            }
    });
}



function limparSelect() {
    document.getElementById('empresaSelect').options.length = 0;
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
    
    if (n == 1 && !validateForm()) return false;

    x[currentTab].style.display = "none";
    currentTab = currentTab + n;

    if (currentTab >= x.length) {
        document.getElementById("formulario").submit()
        return false;
    }

    showTab(currentTab);
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