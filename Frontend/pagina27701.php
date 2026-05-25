<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Controles ISO 27001</title>
</head>
<body>

    <div class="floating-sidebar">

        <a href="index.php" class="menu-item">
            <span class="icon"><i class="fa-solid fa-solid fa-house"></i></span>
            <span class="text">Início</span>
        </a>
    
        <a href="pagina27001.php" class="menu-item">
            <span class="icon"><i class="fa-solid fa-shield-halved"></i></span>
            <span class="text">ISO 27001</span>
        </a>
    
        <a href="pagina27701.php" class="menu-item">
            <span class="icon"><i class="fa-solid fa-lock"></i></span>
            <span class="text">ISO 27701</span>
        </a>
    
        <a href="historico.php" class="menu-item">
            <span class="icon"><i class="fa-solid fa-clock-rotate-left"></i></span>
            <span class="text">Histórico</span>
        </a>
    
    </div>
    
    <div class="container">
        <section class="card formulario">
            <div>
                <p>
                    Selecione a empresa
                </p>
                <select id="empresaSelect">
                    <option value="">
                        Nenhuma empresa selecionada
                    </option>
                </select>
            </div>
        </section>

        <div class="progress-container">

            <div class="progress-info">
        
                <span id="progressText">

                </span>
        
        </div>
        
            <div class="progress-bar">
        
                <div class="progress-fill" id="progressFill"></div>
        
            </div>
        
        </div>
        <form id="formulario" class="question-card">
            <div class="tab">
                
                <h3 class="norma-classe">
                    A.1 - condições para coleta e tratamento
                </h3>

                <section class='question'>A.1.2.2 A organização identifica e documenta os propósitos específicos para o tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='1-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='1-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='1-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='1-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='1-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>
                
                <section class='question'>A.1.2.3 A organização determina e documenta as bases legais aplicáveis para o tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='2-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='2-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='2-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.2.4 A organização determina quando e como o consentimento deve ser obtido?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='3-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='3-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='3-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='3-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='3-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>
                
                <section class='question'>A.1.2.5 A organização obtém e registra o consentimento dos titulares de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='4-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='4-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='4-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='4-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='4-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  
            </div>

            <div class="tab">
                
                <section class='question'>A.1.2.6 A organização realiza avaliação de impacto de privacidade quando necessário?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

                <section class='question'>A.1.2.7 A organização possui contratos com operadores de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='6-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='6-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='6-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='6-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='6-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

                <section class='question'>A.1.2.8 A organização define papéis e responsabilidades em casos de controlador conjunto?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

                <section class='question'>A.1.2.9 A organização mantém registros relacionados ao tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

            </div>

            <div class="tab">

                <h3 class="norma-classe">
                    A.1 - Obrigações com os titulares de dados pessoais
                </h3>

                <section class='question'>'A.1.3.2 A organização determina e cumpre obrigações relacionadas aos titulares de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='9-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='9-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='9-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='9-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='9-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 
                
                <section class='question'>A.1.3.3 A organização determina as informações que devem ser fornecidas aos titulares de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='10-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='10-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='10-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='10-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='10-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

                <section class='question'>A.1.3.4 A organização fornece informações claras aos titulares de dados pessoais sobre o tratamento realizado?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='11-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='11-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='11-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='11-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='11-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

                <section class='question'>A.1.3.5 A organização fornece mecanismo para modificar ou retirar o consentimento?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='12-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='12-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='12-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='12-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='12-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.1.3.6 A organização fornece mecanismo para oposição ao tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='13-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='13-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='13-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='13-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='13-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.3.7 A organização possui mecanismos para acesso, correção ou exclusão de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='14-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='14-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='14-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='14-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='14-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.3.8 A organização informa terceiros sobre alterações, retirada ou oposição relacionadas aos dados pessoais compartilhados?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='15-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='15-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='15-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='15-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='15-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.3.9 A organização fornece cópia dos dados pessoais tratados quando solicitado?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='16-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='16-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='16-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='16-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='16-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.1.3.10 A organização possui procedimentos para tratamento de solicitações dos titulares de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='17-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='17-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='17-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='17-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='17-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.3.11 A organização possui controles relacionados à tomada de decisão automatizada?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='18-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='18-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='18-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='18-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='18-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>
                
                <h3 class="norma-classe">
                    A.1 - Privacidade por design e privacidade por default
                </h3>

                <section class='question'>A.1.4.2 A organização aplica limitação na coleta de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='19-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='19-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='19-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='19-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='19-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.4.3 A organização aplica limitação no tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='20-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='20-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='20-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='20-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='20-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.1.4.4 A organização garante precisão e qualidade dos dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='21-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='21-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='21-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='21-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='21-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.4.5 A organização aplica objetivos de minimização de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='22-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='22-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='22-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='22-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='22-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.4.6 A organização realiza desidentificação ou exclusão de dados pessoais ao final do tratamento?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='23-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='23-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='23-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='23-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='23-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.4.7 A organização controla arquivos temporários contendo dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='24-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='24-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='24-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='24-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='24-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.1.4.8 A organização possui política de retenção de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='25-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='25-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='25-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='25-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='25-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.4.9 A organização realiza descarte seguro de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='26-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='26-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='26-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='26-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='26-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.4.10 A organização aplica controles para transmissão de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='27-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='27-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='27-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='27-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='27-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <h3 class="norma-classe">
                    A.1 - Compatilhamento, transferência e divulgação de dados pessoais
                </h3>

                <section class='question'>A.1.5.2 A organização identifica bases legais para transferência internacional de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='28-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='28-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='28-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='28-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='28-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.1.5.3 A organização identifica os países e organizações internacionais para os quais os dados pessoais podem ser transferidos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='29-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='29-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='29-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='29-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='29-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.5.4 A organização mantém registros de transferência de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='30-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='30-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='30-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='30-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='30-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.1.5.5 A organização mantém registros de divulgação de dados pessoais a terceiros?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='31-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='31-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='31-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='31-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='31-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <h3 class="norma-classe">
                    A.2 - condições para coleta e tratamento
                </h3>

                <section class='question'>A.2.2.2 A organização possui acordo formal com o cliente sobre o tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='32-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='32-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='32-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='32-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='32-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.2.2.3 A organização define claramente os propósitos relacionados ao tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='33-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='33-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='33-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='33-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='33-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.2.2.4 A organização controla o uso de dados pessoais para marketing e propaganda?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='34-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='34-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='34-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='34-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='34-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A2.2.5 A organização possui controles para lidar com instruções infratoras?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='35-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='35-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='35-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='35-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='35-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.2.2.6 A organização define obrigações do cliente relacionadas ao tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='36-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='36-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='36-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='36-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='36-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.2.2.7 A organização mantém registros relativos ao tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='37-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='37-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='37-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='37-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='37-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <h3 class="norma-classe">
                    A.2 - Obrigação com os titulares de dados pessoais
                </h3>

                <section class='question'>A.2.3.2 A organização cumpre obrigações relacionadas aos titulares de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='38-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='38-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='38-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='38-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='38-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.2.4.2 A organização controla arquivos temporários contendo dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='39-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='39-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='39-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='39-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='39-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.2.4.3 A organização realiza devolução, transferência ou descarte seguro de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='40-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='40-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='40-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='40-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='40-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.2.4.4 A organização aplica controles para transmissão de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='41-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='41-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='41-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='41-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='41-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <h3 class="norma-classe">
                    A.2 - Compartilhamento, transferência e divulgação de dados pessoais
                </h3>

                <section class='question'>A.2.5.2 A organização possui fundamentação para transferência internacional de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='42-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='42-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='42-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='42-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='42-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.2.5.3 A organização identifica países e organizações internacionais para os quais os dados pessoais podem ser transferidos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='43-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='43-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='43-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='43-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='43-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.2.5.4 A organização mantém registros de divulgação de dados pessoais a terceiros?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='44-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='44-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='44-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='44-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='44-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.2.5.5 A organização notifica solicitações de divulgação de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='45-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='45-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='45-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='45-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='45-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.2.5.6 A organização controla divulgações de dados pessoais legalmente obrigatórias?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='46-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='46-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='46-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='46-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='46-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.2.5.7 A organização divulga os subcontratados utilizados no tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='47-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='47-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='47-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='47-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='47-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.2.5.8 A organização controla o envolvimento de subcontratados no tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='48-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='48-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='48-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='48-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='48-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.2.5.9 A organização controla a troca de subcontratados envolvidos no tratamento de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='49-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='49-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='49-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='49-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='49-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>
                
                <h3 class="norma-classe">
                    A.3 - Considerações de segurança para controladores e operadores de dados pessoais
                </h3>

                <section class='question'>A.3.3 A organização possui políticas de segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='50-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='50-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='50-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='50-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='50-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.4 A organização define papéis e responsabilidades em segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='51-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='51-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='51-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='51-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='51-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.5 A organização realiza classificação das informações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='52-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='52-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='52-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='52-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='52-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.3.6 A organização aplica rotulagem das informações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='53-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='53-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='53-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='53-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='53-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.7 A organização controla a transferência de informações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='54-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='54-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='54-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='54-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='54-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.8 A organização realiza gestão de identidade?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='55-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='55-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='55-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='55-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='55-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.9 A organização controla os direitos de acesso?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='56-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='56-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='56-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='56-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='56-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.3.10 A organização aplica requisitos de segurança da informação em contratos com fornecedores?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='57-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='57-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='57-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='57-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='57-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.11 A organização realiza planejamento e preparação para gestão de incidentes de segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='58-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='58-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='58-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='58-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='58-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.12 A organização possui resposta a incidentes de segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='59-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='59-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='59-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='59-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='59-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.13 A organização atende requisitos legais, estatutários, regulatórios e contratuais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='60-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='60-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='60-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='60-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='60-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.3.14 A organização protege registros e informações documentadas?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='61-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='61-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='61-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='61-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='61-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.15 A organização realiza análise crítica independente da segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='62-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='62-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='62-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='62-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='62-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.16 A organização verifica compliance com políticas e normas de segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='63-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='63-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='63-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='63-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='63-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.17 A organização promove conscientização, educação e treinamento em segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='64-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='64-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='64-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='64-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='64-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.3.18 A organização utiliza acordos de confidencialidade ou não divulgação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='65-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='65-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='65-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='65-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='65-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.19 A organização aplica política de mesa limpa e tela limpa?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='66-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='66-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='66-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='66-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='66-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.20 A organização controla mídias de armazenamento?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='67-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='67-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='67-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='67-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='67-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.21 A organização realiza descarte seguro ou reutilização adequada de equipamentos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='68-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='68-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='68-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='68-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='68-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.3.22 A organização protege dispositivos endpoint dos usuários?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='69-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='69-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='69-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='69-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='69-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.23 A organização aplica autenticação segura?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='70-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='70-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='70-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='70-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='70-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.24 A organização realiza backup das informações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='71-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='71-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='71-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='71-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='71-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.25 A organização mantém registros de log?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='72-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='72-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='72-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='72-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='72-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.3.26 A organização utiliza criptografia para proteção das informações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='73-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='73-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='73-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='73-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='73-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.27 A organização aplica ciclo de vida de desenvolvimento seguro?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='74-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='74-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='74-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='74-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='74-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.28 A organização define requisitos de segurança para aplicações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='75-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='75-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='75-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='75-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='75-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.29 A organização aplica princípios de arquitetura e engenharia de sistemas seguros?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='76-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='76-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='76-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='76-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='76-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>A.3.30 A organização controla o desenvolvimento terceirizado?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='77-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='77-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='77-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='77-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='77-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>A.3.31 A organização protege as informações utilizadas em testes?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='78-q'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='78-q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='78-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='78-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='78-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div style='overflow:auto;'> 
                <div style='float:right; display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 1rem;'>  
                    <button type='button' id='prevBtn' onclick='nextPrev(-1)'>Previous</button>
                    <button type='button' id='nextBtn' onclick='nextPrev(1)'>Next</button>
                    <button type='button' id='submBtn' onclick=''>Submit</button>
                </div>
            </div>
        </form>
        
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>selectEmpresa()</script>
</html>