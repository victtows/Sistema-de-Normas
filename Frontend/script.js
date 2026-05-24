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

            for (var i = 0; i < (result.length-1); i+4) {
                document.getElementById('formulario').innerHTML += "<div class='tab' id='" + String(i) + "'></div>";
                for (var j = i; j < (i+4); j++) {
                    document.getElementById(i).innerHTML += "<section class='question'>"+ result[j]['descricaoControle'] + "<div class='options'><label class='radio-option sim'><input type='radio' name='q1'><span class='custom-radio'></span><span>Conforme</span></label><label class='radio-option não'><input type='radio' name='q1'><span class='custom-radio'></span><span>Não Conforme</span></label><label class='radio-option NA'><input type='radio' name='q1'><span class='custom-radio'></span><span>Não Aplicavel</span></label></div></section>";
                }
            }
            document.getElementById('formulario').innerHTML += "<div style='overflow:auto;'> <div style='float:right; display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;'>  <button type='button' id='prevBtn' onclick='nextPrev(-1)'>Previous</button><button type='button' id='nextBtn' onclick='nextPrev(1)'>Next</button></div></div>"
        },
        error: function(xhr) {
            console.log(xhr.responseText);
            alert("Erro ao pesquisar os Controles");
        }
    });
}

selectNorma()

function limparSelect() {
    document.getElementById('empresaSelect').options.length = 0;
}


/// CÓDIGO DAS TABS DO FORMULARIO ///

var currentTab = 0;
showTab(currentTab)
function showTab(n) {
    var x = document.getElementsByClassName('tab');
    console.log(x)
    x[n].style.display = "block";
    
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none"
    } else {
        document.getElementById("prevBtn").style.display = "inline"
    }

    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none"
    } else {
        document.getElementById("nextBtn").style.display = "inline"
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
