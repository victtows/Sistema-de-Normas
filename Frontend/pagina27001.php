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

        <a href="index.html" class="menu-item">
            <span class="icon"><i class="fa-solid fa-solid fa-house"></i></span>
            <span class="text">Início</span>
        </a>
    
        <a href="pagina27001.html" class="menu-item">
            <span class="icon"><i class="fa-solid fa-shield-halved"></i></span>
            <span class="text">ISO 27001</span>
        </a>
    
        <a href="pagina27701.html" class="menu-item">
            <span class="icon"><i class="fa-solid fa-lock"></i></span>
            <span class="text">ISO 27701</span>
        </a>
    
        <a href="historico.html" class="menu-item">
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
                    A.5 - Políticas de segurança da informação
                </h3>

                <section class='question'>5.1 Existem políticas de segurança da informação definidas?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.1'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.1'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.1-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.1-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.1-ob">Observação</label>
                                    <input type="text" name="5.1-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.1-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>
                
                <section class='question'>5.2 Os papéis e responsabilidades pela segurança da informação estão definidos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.2'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.2'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.2-ob">Observação</label>
                                    <input type="text" name="5.2-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.2'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.3 Existe segregação de funções?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.3'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.3'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.3-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.3-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.3-ob">Observação</label>
                                    <input type="text" name="5.3-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.3'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>
                
                <section class='question'>5.4 A direção possui responsabilidades definidas sobre segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.4'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.4'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.4-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.4-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.4-ob">Observação</label>
                                    <input type="text" name="5.4-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.4'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  
            </div>

            <div class="tab">
                
                <section class='question'>5.5 Existe contato com autoridades?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.5'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.5'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.5-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.5-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.5-ob">Observação</label>
                                    <input type="text" name="5.5-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.5'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

                <section class='question'>5.6 Existe contato com grupos de interesse especial?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.6'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.6'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.6-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.6-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.6-ob">Observação</label>
                                    <input type="text" name="5.6-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.6'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

                <section class='question'>5.7 Existe inteligência de ameaças?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.7'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.7'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.7-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.7-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.7-ob">Observação</label>
                                    <input type="text" name="5.7-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.7'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

                <section class='question'>5.8 A segurança da informação é considerada no gerenciamento de projetos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.8'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.8'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.8-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.8-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.8-ob">Observação</label>
                                    <input type="text" name="5.8-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.8'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

            </div>

            <div class="tab">

                <section class='question'>5.9 Existe inventário de informações e outros ativos associados?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.9'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.9'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.9-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.9-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                            <label for="5.9-ob">Observação</label>
                            <input type="text" name="5.9-ob" style="display: inline;">
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.9'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 
                
                <section class='question'>5.10 Existe uso aceitável de informações e outros ativos associados?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.10'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.10'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.10-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.10-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.10-ob">Observação</label>
                                    <input type="text" name="5.10-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.10'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

                <section class='question'>5.11 Existe devolução de ativos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.11'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.11'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.11-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.11-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.11-ob">Observação</label>
                                    <input type="text" name="5.11-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.11'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section>  

                <section class='question'>5.12 As informações são classificadas?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.12'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.12'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.12-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.12-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.12-ob">Observação</label>
                                    <input type="text" name="5.12-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.12'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>5.13 As informações possuem rotulagem?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.13'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.13'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.13-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.13-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                                <label for="5.13-ob">Observação</label>
                                <input type="text" name="5.13-ob" style="display: inline;">
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.13'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.14 Existe transferência segura de informações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.14'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.14'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.14-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.14-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.14-ob">Observação</label>
                                    <input type="text" name="5.14-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.14'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.15 Existe controle de acesso?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.15'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.15'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.15-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.15-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.15-ob">Observação</label>
                                    <input type="text" name="5.15-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.15'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.16 Existe gestão de identidade?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.16'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.16'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.16-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.16-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.16-ob">Observação</label>
                                    <input type="text" name="5.16-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.16'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>5.17 As informações de autenticação são protegidas?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.17'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.17'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.17-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.17-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.17-ob">Observação</label>
                                    <input type="text" name="5.17-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.17'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.18 Os direitos de acesso são gerenciados?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.18'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.18'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.18-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.18-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.18-ob">Observação</label>
                                    <input type="text" name="5.18-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.18'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.19 Existe segurança da informação nas relações com fornecedores?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.19'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.19'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.19-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.19-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.19-ob">Observação</label>
                                    <input type="text" name="5.19-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.19'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.20 Existe abordagem de segurança da informação nos contratos de fornecedores?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.20'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.20'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.20-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.20-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.20-ob">Observação</label>
                                    <input type="text" name="5.20-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.20'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>5.21 Existe gestão da segurança da informação na cadeia de fornecimento de TIC?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.21'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.21'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.21-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.21-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.21-ob">Observação</label>
                                    <input type="text" name="5.21-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.21'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.22 Existe monitoramento, análise crítica e gestão de mudanças dos serviços de fornecedores?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.22'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.22'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.22-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.22-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.22-ob">Observação</label>
                                    <input type="text" name="5.22-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.22'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.23 Existe segurança da informação para uso de serviços em nuvem?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.23'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.23'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.23-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.23-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                            <label for="5.23-ob">Observação</label>
                            <input type="text" name="5.23-ob" style="display: inline;">
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.23'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.24 Existe planejamento e preparação da gestão de incidentes da segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.24'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.24'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.24-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.24-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                            </section>
                            <label for="5.24-ob">Observação</label>
                            <input type="text" name="5.24-ob" style="display: inline;">
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.24'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>5.25 Existe avaliação e decisão sobre eventos da segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.25'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.25'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.25-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.25-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.25-ob">Observação</label>
                                    <input type="text" name="5.25-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.25'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.26 Existe resposta a incidentes da segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.26'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.26'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.26-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.26-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                                <label for="5.26-ob">Observação</label>
                                <input type="text" name="5.26-ob" style="display: inline;">
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.26'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.27 Existe aprendizado com incidentes de segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.27'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.27'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.27-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.27-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.27-ob">Observação</label>
                                    <input type="text" name="5.27-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.27'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.28 Existe coleta de evidências?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.28'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.28'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.28-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.28-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.28-ob">Observação</label>
                                    <input type="text" name="5.28-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.28'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>5.29 Existe segurança da informação durante a disrupção?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.29'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.29'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.29-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.29-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.29-ob">Observação</label>
                                    <input type="text" name="5.29-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.29'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.30 Existe prontidão de TIC para continuidade de negócios?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.30'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.30'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.30-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.30-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.30-ob">Observação</label>
                                    <input type="text" name="5.30-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.30'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.31 Existem requisitos legais, estatutários, regulamentares e contratuais definidos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.31'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.31'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.31-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.31-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.31-ob">Observação</label>
                                    <input type="text" name="5.31-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.31'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.32 Existem direitos de propriedade intelectual protegidos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.32'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.32'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.32-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.32-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.32-ob">Observação</label>
                                    <input type="text" name="5.32-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.32'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>5.33 Existe proteção de registros?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.33'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.33'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.33-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.33-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.33-ob">Observação</label>
                                    <input type="text" name="5.33-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.33'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.34 Existe privacidade e proteção de dados pessoais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.34'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.34'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.34-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.34-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                </div>
                                <label for="5.34-ob">Observação</label>
                                <input type="text" name="5.34-ob" style="display: inline;">
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.34'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.56 Existe análise crítica independente da segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.35'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.35'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.35-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.35-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.35-ob">Observação</label>
                                    <input type="text" name="5.35-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.35'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>5.36 Existe compliance com políticas, regras e normas para segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.36'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.36'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.36-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.36-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.36-ob">Observação</label>
                                    <input type="text" name="5.36-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.36'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>5.37 Existe documentação dos procedimentos de operação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='5.37'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='5.37'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='5.37-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='5.37-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="5.37-ob">Observação</label>
                                    <input type="text" name="5.37-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='5.37'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <h3 class="norma-classe">
                    A.6 - Controles de pessoas
                </h3>

                <section class='question'>6.1 Existe processo de seleção?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='6.1'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='6.1'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='6.1-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='6.1-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="6.1-ob">Observação</label>
                                    <input type="text" name="6.1-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='6.1'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>6.2 Existem termos e condições de contratação definidos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='6.2'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='6.2'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='6.2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='6.2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="6.2-ob">Observação</label>
                                    <input type="text" name="6.2-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='6.2'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>6.3 Existe conscientização, educação e treinamento em segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='6.3'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='6.3'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='6.3-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='6.3-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="6.3-ob">Observação</label>
                                    <input type="text" name="6.3-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='6.3'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>6.4 Existe processo disciplinar?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='6.4'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='6.4'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='6.4-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='6.4-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="6.4-ob">Observação</label>
                                    <input type="text" name="6.4-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='6.4'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>6.5 Existem responsabilidades após encerramento ou mudança de contratação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='6.5'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='6.5'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='6.5-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='6.5-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="6.5-ob">Observação</label>
                                    <input type="text" name="6.5-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='6.5'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>6.6 Existem acordos de confidencialidade ou não divulgação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='6.6'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='6.6'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='6.6-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='6.6-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="6.6-ob">Observação</label>
                                    <input type="text" name="6.6-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='6.6'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>6.7 Existe política de trabalho remoto?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='6.7'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='6.7'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='6.7-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='6.7-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="6.7-ob">Observação</label>
                                    <input type="text" name="6.7-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='6.7'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>6.8 Existe relato de eventos de segurança da informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='6.8'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='6.8'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='6.8-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='6.8-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="6.8-ob">Observação</label>
                                    <input type="text" name="6.8-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='6.8'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <h3 class="norma-classe">
                    A.7 - Controles físicos 
                </h3> 

                <section class='question'>7.1 Existem perímetros de segurança física?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.1'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.1'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.1-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.1-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.1-ob">Observação</label>
                                    <input type="text" name="7.1-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.1'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>7.2 Existe controle de entrada física?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.2'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.2'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.2-ob">Observação</label>
                                    <input type="text" name="7.2-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.2'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>7.3 Existe segurança de escritórios, salas e instalações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.3'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.3'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.3-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.3-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.3-ob">Observação</label>
                                    <input type="text" name="7.3-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.3'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>7.4 Existe monitoramento de segurança física?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.4'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.4'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.4-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.4-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.4-ob">Observação</label>
                                    <input type="text" name="7.4-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.4'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>7.5 Existe proteção contra ameaças físicas e ambientais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.5'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.5'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.5-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.5-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.5-ob">Observação</label>
                                    <input type="text" name="7.5-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.5'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>7.6 Existe controle para trabalho em áreas seguras?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.6'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.6'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.6-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.6-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.6-ob">Observação</label>
                                    <input type="text" name="7.6-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.6'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>7.7 Existe política de mesa limpa e tela limpa?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.7.'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.7'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.7-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.7-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.7-ob">Observação</label>
                                    <input type="text" name="7.7-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.7'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>7.8 Existe localização e proteção adequada de equipamentos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.8'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.8'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.8-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.8-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.8-ob">Observação</label>
                                    <input type="text" name="7.8-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.8'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>7.9 Existe segurança de ativos fora das instalações da organização?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.9'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.9'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.9-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.9-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.9-ob">Observação</label>
                                    <input type="text" name="7.9-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.9'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>7.10 Existe controle sobre mídias de armazenamento?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.10'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.10'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.10-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.10-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.10-ob">Observação</label>
                                    <input type="text" name="7.10-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.10'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>7.11 Existem serviços de infraestrutura seguros?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.11'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.11'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.11-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.11-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.11-ob">Observação</label>
                                    <input type="text" name="7.11-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.11'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>7.12 Existe segurança do cabeamento?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.12'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.12'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.12-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.12-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.12-ob">Observação</label>
                                    <input type="text" name="7.12-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.12'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>7.13 Existe manutenção de equipamentos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.13'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.13'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.13-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.13-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.13-ob">Observação</label>
                                    <input type="text" name="7.13-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.13'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>7.14 Existe descarte seguro ou reutilização de equipamentos?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='7.14'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='7.14'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='7.14-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='7.14-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="7.14-ob">Observação</label>
                                    <input type="text" name="7.14-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='7.14'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <h3 class="norma-classe">
                    A.8 - Controles tecnológicos 
                </h3> 

                <section class='question'>8.1 Existem controles para dispositivos endpoint do usuário?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.1'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.1'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.1-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.1-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.1-ob">Observação</label>
                                    <input type="text" name="8.1-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.1'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>8.2 Existem direitos de acessos privilegiados controlados?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.2'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.2'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.2-ob">Observação</label>
                                    <input type="text" name="8.2-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.2'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.3 Existe restrição de acesso à informação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.3'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.3'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.3-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.3-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.3-ob">Observação</label>
                                    <input type="text" name="8.3-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.3'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.4 Existe controle de acesso ao código-fonte?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.4'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.4'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.4-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.4-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.4-ob">Observação</label>
                                    <input type="text" name="8.4-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.4'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.5 Existe autenticação segura?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.5'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.5'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.5-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.5-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.5-ob">Observação</label>
                                    <input type="text" name="8.5-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.5'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>8.6 Existe gestão de capacidade?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.6'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.6'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.6-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.6-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.6-ob">Observação</label>
                                    <input type="text" name="8.6-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.6'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.7 Existe proteção contra malware?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.7'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.7'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.7-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.7-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.7-ob">Observação</label>
                                    <input type="text" name="8.7-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.7'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.8 Existe gestão de vulnerabilidades técnicas?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.8'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.8'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.8-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.8-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.8-ob">Observação</label>
                                    <input type="text" name="8.8-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.8'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.9 Existe gestão de configuração?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.9'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.9q'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.9-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.9-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.9-ob">Observação</label>
                                    <input type="text" name="8.9-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.9'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>8.10 Existe exclusão de informações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.10'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.10'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.10-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.10-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.10-ob">Observação</label>
                                    <input type="text" name="8.10-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.10'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.11 Existe mascaramento de dados?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.11'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.11'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.11-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.11-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.11-ob">Observação</label>
                                    <input type="text" name="8.11-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NlA'>
                            <input type='radio' name='8.11'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.12 Existe prevenção de vazamento de dados?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.12'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.12'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.12-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.12-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.12-ob">Observação</label>
                                    <input type="text" name="8.12-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.12'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.13 Existe backup das informações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.13'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.13'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.13-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.13-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.13-ob">Observação</label>
                                    <input type="text" name="8.13-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.13'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>8.14 Existe redundância dos recursos de processamento de informações?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.14'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.14'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.14-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.14-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.14-ob">Observação</label>
                                    <input type="text" name="8.14-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.14'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.15 Existe geração de logs?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.15'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.15'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.15-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.15-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.15-ob">Observação</label>
                                    <input type="text" name="8.15-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.15'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.16 Existem atividades de monitoramento?
                    <div class='options'>   
                        <label class='radio-option sim'>
                            <input type='radio' name='8.16'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.16'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.16-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.16-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.16-ob">Observação</label>
                                    <input type="text" name="8.16-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.16'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.17 Existe sincronização do relógio?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.17'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.17'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.17-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.17-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.17-ob">Observação</label>
                                    <input type="text" name="8.17-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.17'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>8.18 Existe controle sobre o uso de programas utilitários privilegiados?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.18'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.18'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.18-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.18-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.18-ob">Observação</label>
                                    <input type="text" name="8.18-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.18'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.19 Existe controle de instalação de software em sistemas operacionais?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.19'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.19'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.19-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.19-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.19-ob">Observação</label>
                                    <input type="text" name="8.19-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.19'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.20 Existe segurança de redes?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.20'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.20'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.20-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.2-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.20-ob">Observação</label>
                                    <input type="text" name="8.20-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.20'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.21 Existe segurança dos serviços de rede?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.21'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.21'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.21-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.21-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.21-ob">Observação</label>
                                    <input type="text" name="8.21-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.21'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>8.22 Existe segregação de redes?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.22'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.22'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.22-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.22-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.22-ob">Observação</label>
                                    <input type="text" name="8.22-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.22'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.23 Existe filtragem da web?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.23'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.23'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.23-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.23-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.23-ob">Observação</label>
                                    <input type="text" name="8.23-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.23'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.24 Existe uso de criptografia?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.24'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.24'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.24-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.24-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.24-ob">Observação</label>
                                    <input type="text" name="8.24-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.24'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.25 Existe ciclo de vida de desenvolvimento seguro?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.25'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.25'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.25-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.25-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.25-ob">Observação</label>
                                    <input type="text" name="8.25-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.25'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>8.26 Existem requisitos de segurança da aplicação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.26'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.26'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.26-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.26-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.26-ob">Observação</label>
                                    <input type="text" name="8.26-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.26'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.27 Existem princípios de arquitetura e engenharia de sistemas seguros?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.27'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.27'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.27-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.27-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.27-ob">Observação</label>
                                    <input type="text" name="8.27-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.27-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.28 Existe codificação segura?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.28'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.28'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.28-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.28-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.28-ob">Observação</label>
                                    <input type="text" name="8.28-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.28'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.29 Existem testes de segurança em desenvolvimento e aceitação?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.29'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.29'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.29-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.29-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.29-ob">Observação</label>
                                    <input type="text" name="8.29-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.29'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>8.30 Existe desenvolvimento terceirizado controlado?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.30'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.30'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.30-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.30-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.30-ob">Observação</label>
                                    <input type="text" name="8.30-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.30'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.31 Existe separação dos ambientes de desenvolvimento, teste e produção?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.31'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.31'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.31-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.31-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.31-ob">Observação</label>
                                    <input type="text" name="8.31-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.31-q'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.32 Existe gestão de mudanças?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.32'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.32'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.32-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.32-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.32-ob">Observação</label>
                                    <input type="text" name="8.32-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.32'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

                <section class='question'>8.33 Existem informações de teste protegidas?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.33'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.33'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.33-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.33-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.33-ob">Observação</label>
                                    <input type="text" name="8.33-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.33'>
                            <span class='custom-radio'></span>
                            <span>Não Aplicavel</span>
                        </label>
                    </div>
                </section> 

            </div>

            <div class="tab">

                <section class='question'>8.34 Existe proteção de sistemas de informação durante os testes de auditoria?
                    <div class='options'>
                        <label class='radio-option sim'>
                            <input type='radio' name='8.34'>
                            <span class='custom-radio'></span>
                            <span>Conforme</span>
                        </label>
                        <label class='radio-option não'>
                            <input type='radio' name='8.34'>
                            <span class='custom-radio'></span>
                            <span>Não Conforme</span>
                            <section class='sub-question'>Está em Andamento? 
                                <div class='options'>
                                    <label class='radio-option sim'>
                                        <input type='radio' name='8.34-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Sim</span>
                                    </label>
                                    <label class='radio-option não'>
                                        <input type='radio' name='8.34-subq'>
                                        <span class='custom-radio'></span>
                                        <span>Não</span>
                                    </label>
                                    <label for="8.34-ob">Observação</label>
                                    <input type="text" name="8.34-ob" style="display: inline;">
                                </div>
                            </section>
                        </label>
                        <label class='radio-option NA'>
                            <input type='radio' name='8.34'>
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
                    <button type='button' id='submBtn' onclick='resultadoFormulario()'>Submit</button>
                </div>
            </div>
        </form>
        
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>selectEmpresa()</script>
</html>