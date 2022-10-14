<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.1';
include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid Texto">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                                            
                            <!-- Sub Título -->
                            <p class="SubTitulo">Cadastramento de Itens de Material de Consumo e Material Permanente</p>    
                            <hr>

                            <br><p>Consiste na associação do item de material (consumo ou permanente) ao código correspondente no Catálogo de Bens Materiais e Serviços. Uma questão importante a ser considerada durante esse trabalho é a diferenciação entre “estoques” e “imobilizado”. Alguns órgãos governamentais, em decorrência da sua atividade, mantêm por algum tempo itens de material permanente estocados até que sejam efetivamente distribuídos. Enquanto esse item de material, permanecer em estoque ele não será depreciado e será caracterizado como estoque, somente a partir da sua distribuição e definição do responsável e da localização departamental este passará a imobilizado. É importante identificar o quantitativo desses itens estocados e à medida que sejam distribuídos efetuar o seu registro como patrimônio mensurado a custo histórico (valor de aquisição). </p>

                            <br><p>Outra questão importante a ser observada quando se implanta o SIGA/SGBM, é a origem do registro escritural de onde as informações serão migradas, ou seja, se a migração será originada de um outro sistema informatizado de controle patrimonial ou se a migração será efetuada a partir das planilhas de inventário. O SIGA/SGBM permite que a migração seja feita das duas formas. Para fins didáticos denominamos: <strong>“Migração com Sistema”</strong> e <strong>“Migração sem Sistema”</strong>.</p>
                            
                            <br><h5 style="color: #FFA73E;"><strong>Migração com Sistema:</strong><hr></h5> 
                            <p>Ainda existem sistemas proprietários de controle de bens móveis utilizados por alguns órgãos e entidades do governo do Estado, tais sistemas não utilizam o Federal Supply Classification que é o sistema de classificação de materiais adotado pelo Sistema de Catálogo de Bens Materiais e Serviços, isso é justificável por que tais sistemas são desenvolvidos para atender a necessidade de apenas um órgãos ou entidade, abrindo mão dos ganhos que podem ser obtidos a partir da integração com outros sistemas do Governo do Estado do Ceará.
                            <br><br>Para fazer a implantação do SIGA/SGBM a partir desses sistemas é necessário fazer a correspondência com a codificação e especificação contida no Catálogo, de forma que possa migrar os dados de um sistema para outro por intermédio de uma “planilha DE & PARA”. Quando a catalogação de materiais utilizadas nestes sistemas, não segue o mesmo padrão do Federal Supply Classification, utilizando-se de uma catalogação mais simples, na maioria dos casos, um item de material (código), nesses sistemas corresponde a mais de um item de material (código) do Federal Supply. Deve-se então ajustar a catalogação de tais sistemas para que não ocorra inconsistências no programa de crítica da migração.
                            <br><br>Também é necessário distinguir entre os itens de material de permanente àqueles que são "itens corporativos" daqueles que são "itens específicos".
                            <br><br>Denominam-se "itens corporativos" àqueles que são adquiridos pelo Governo do Estado do Ceará para que sejam utilizados por todos os órgãos e entidades, tais itens são adquiridos por intermédio do Sistema de Registro de Preços em decorrência disso estão previamente codificados no Catálogo de Bens Materiais e Serviços. Já os itens específicos são àqueles materiais que são adquiridos individualmente pelo órgão/entidade, ou seja, não são adquiridos por intermédio de Ata de Registro de Preço. Tais itens podem ou não ter codificação no Catálogo de Bens Materiais e Serviços.</p>

                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <p class="ImportanteTexto">Tal distinção se torna necessária porque nos casos dos itens corporativos a obtenção do código do “item de material” poderá ser facilmente obtida na Ata de Registro de Preço.
                                <br><br>Vale lembrar que esta frente de trabalho tratará apenas da identificação prévia dos “Itens de Material”, os quantitativos de cada item serão lançados à medida que é realizado o inventário.</p>
                            </div><br>

                            
                            <p>Para cadastramento dos itens na "Migração com sistema" deverá ser acionado na versão 2 do SIGA/SGBM módulo de Almoxarifado o comando: <strong>PROCESSOS >>  Almoxarifado >> Migração >> Migrar Dados:</strong></p><br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 08 - MODAL -->
                            <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 8</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 08 - End -->

                            <br><p>No caso dos "itens corporativos", o seu código pode ser identificado por intermédio da Ata de Registro de Preços. Dessa forma o cadastramento do item será feito por intermédio do <strong>"Código"</strong>.</p><br>

                            <!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Pesquisa por Código</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <ol>
                                                    <li>Informar no campo "Código" o número de identificação do item retirado da Ata de Registro de Preço.</li>
                                                    <li>Acionar o botão "Pesquisar".</li>

                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 09 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 9</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 09 - End --><br>
                                                    
                                                    <li>Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará a grade "Migração de Produtos Almoxarifado", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.</li>
                                                    <li>Acionar o ícone em formato de lápis no campo "Ação" para proceder o cadastramento do item.</li>
                                                </ol>

                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                                            <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="750" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 10 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 10</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 10 - End -->
                                                

                                                <br><p>Já os itens específicos são àqueles adquiridos individualmente pelo órgão/entidade e podem ou não ter codificação no Catálogo de Bens, Materiais e Serviços. Nesses casos a identificação do item no referido Catálogo se dará por intermédio da sua especificação de maneira que as características demonstradas na especificação correspondam às características físicas do item. Dessa forma o cadastramento do item será feito por intermédio da "Descrição".</p>

                                                <p>Quando não for identificada nenhuma especificação que corresponda é características do item, o mesmo deve ser incluído no Catálogo por intermédio da funcionalidade "Solicitação Catálogo". </p>
                                                </div>
                                            </div>
                                        </div>
                                    

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Pesquisa por Descrição </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <ol>
                                                    <li>Para cadastrar preencher no campo "Descrição" com "palavras chave" que supostamente constem na descrição do item.</li>
                                                    <li>Em seguida acionar o botão "Pesquisar".</li>

                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 11 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 11</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 10 - End -->
                                                    <br><li>Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará a grade "Materiais encontrados", com diversos itens que possuem as "palavras chave" em sua descrição, na referida grade serão demonstrados os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.</li>
                                                    <li>Acionar o ícone em formato de lápis no campo "Ação" daquele item selecionado para cadastramento e caso o item já esteja cadastrado o SIGA/SGBM apresentará uma mensagem informando que o item já foi cadastrado. Senão passará para a tela de edição dos campos para cadastramento.</li>
                                                </ol>

                                                <br><!-- Titulo Figura -->
                                                <div class="text-center">
                                                        <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 12 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 12</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 12 - End -->

                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Edição dos Campos de Cadastramento </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Uma vez acionado o ícone de edição no campo "Ações" o SIGA/SGBM apresentará a tela "Migrar Dados" para que sejam editadas as informações de cadastramento do item, quer seja a pesquisa por código ou por descrição.</p>
                                                <ol class="none">
                                                    <li>5 - No campo "Fator Multiplicador" informar a quantidade igual a 1, uma vez no caso de material permanente a "Unidade de Fornecimento" não é fracionada.</li>
                                                    <li>6 - No campo "Código Atual" informar o número de identificação do item no sistema informatizado de origem da migração. O SIGA/SGBM necessita desta informação para poder fazer a correspondência por intermédio da “planilha DE & PARA”</li>
                                                    <li>7 - Informado todos os campos identificados como obrigatórios (*), acionar o botão <strong>"Salvar"</strong>.</li>

                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                                            <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="750" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 13 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 13</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 13 - End -->

                                                    <br><li>8 - Ao acionar o botão "Salvar" o SIGA/SGBM apresentará uma janela de confirmação da operação que poderá ser cancelada ou confirmada.</li>

                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 14 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 14</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 14 - End -->

                                                    <br><li>9 -Uma vez confirmada a operação, será apresentada a tela "Detalhe da Migração" com as informações sobre o item, a partir dessa tela poderão ser executadas duas operações: "Novo" iniciando um novo cadastramento a partir do item e "Editar" permitindo alterar as informações de “fator multiplicador” e “Código Atual” itens 5 e 6 anteriores.</li>

                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura15.jpg" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura15.jpg" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 15 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura15.jpg" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 15</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 15 - End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><br><h5 style="color: #FFA73E;"><strong> Migração sem Sistema</strong><hr></h5>
                                <p>Para fazer a implantação do SIGA/SGBM sem sistema, será utilizado a funcionalidade de “MANUTENÇÃO” do SIGA/SGBM. Esta funcionalidade é útil tanto para o processo de migração, quanto na atualização permanente dos novos itens de material que surgirão, uma vez que a obsolescência tecnológica naturalmente trará materiais substitutos aos atualmente em uso. Seguindo o procedimento de integração com o Federal Supply Classification,  é necessário fazer a correspondência com a codificação e especificação contida no Catálogo, para isso você deverá distinguir entre seus itens de material permanente àqueles que são "itens corporativos" daqueles que são "itens específicos".
                                <br><br>O cadastramento dos itens na "Migração sem sistema" deverá ser efetuado pelo perfil "Almoxarife" ou "Almoxarife/Gestor Patrimonial" utilizando o comando <strong>MANUTENÇÃO >> Almoxarifado >> Material >> Cadastro</strong>.</p>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 16 - MODAL -->
                                <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" width="750" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 16</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 16 - End -->

                                <br><br><p>No caso dos "itens corporativos" que são àqueles adquiridos pelo Governo do Estado do Ceará para que sejam utilizados por todos os órgãos e entidades, tais itens são adquiridos por intermédio do Sistema de Registro de Preços por isso o seu código no Catálogo de Bens Materiais e Serviços pode ser facilmente identificado por intermédio da Ata de Registro de Preços. Dessa forma o cadastramento do item será feito por intermédio do "Código".</p>

                                <br><!-- Accordion Fase 02 - Begin  -->
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <div class="text-center">
                                        <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </div>
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                                <strong>Pesquisa por Código </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <ol>
                                                    <li>Para cadastrar preencher no campo "Código" o número de identificação do item no Catálogo.</li>
                                                    <li>Em seguida acionar o botão "Pesquisar".</li>

                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura17.jpg" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura17.jpg" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 17 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura17.jpg" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 17</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 17 - End -->

                                                    <br><li>Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.</li>
                                                    <li>Acionar o ícone em formato de lápis no campo "Ação" para proceder o cadastramento do item.</li>
                                                </ol>
                                                    
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 18 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 18</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 18 - End -->
                                                

                                                <br><p>Já os itens específicos são àqueles adquiridos individualmente pelo órgão/entidade e podem ou não ter codificação no Catálogo de Bens, Materiais e Serviços. Nesses casos a identificação do item no referido Catálogo se dará por intermédio da sua especificação de maneira que as características demonstradas na especificação correspondam é características físicas do item. Dessa forma o cadastramento do item será feito por intermédio da "Descrição".
                                                <br><br>Quando não for identificada nenhuma especificação que corresponda é características do item, o mesmo deve ser incluído no Catálogo por intermédio da funcionalidade "Solicitação Catálogo".</p>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <strong> Pesquisa por Descrição </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <ol>
                                                    <li>Para cadastrar preencher no campo "Descrição" com "palavras chave" que supostamente constem na descrição do item.</li>
                                                    <li>Em seguida acionar o botão "Pesquisar".</li>

                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 19 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 19</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 19 - End -->
                                                    <br><li>Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará a grade "Materiais encontrados", com diversos itens que possuem as "palavras chave" em sua descrição, na referida grade serão demonstrados os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.</li>
                                                    <li>Acionar o ícone em formato de lápis no campo "Ação" daquele item selecionado para cadastramento e caso o item já esteja cadastrado o SIGA/SGBM apresentará uma mensagem informando que o item já foi cadastrado. Senão passará para a tela de edição dos campos para cadastramento.</li>
                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 20 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 20</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 20 - End -->
                                                    <br><p>Na tela Cadastro de Material deverão ser informados os seguintes campos:</p>
                                                    <li>No campo "Fator Multiplicador" informar a quantidade igual a 1, uma vez que, no caso de material permanente a "Unidade de Fornecimento" não é fracionada. </li>
                                                    <li>No campo "Código Atual" informar o número de identificação do item na planilha utilizada pelo usuário como origem da migração.</li>
                                                    <li>Informado todos os campos identificados como obrigatórios (*), acionar o botão "Salvar".</li>

                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura21.png" data-bs-toggle="modal" data-bs-target="#Imagem21">
                                                            <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="750" src="imagens/Figura21.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 21 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura21.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 21</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 21 - End -->
                                                    <br><li>Ao acionar o botão "Salvar" o SIGA/SGBM apresentará uma janela de confirmação da operação que poderá ser cancelada ou confirmada.</li>

                                                    <br><!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura22.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                    </div>

                                                    <!-- Imagem 22 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Figura 22</strong> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Imagem 22 - End -->
                                                    <br><li>Uma vez confirmada a operação, será apresentada a tela "Detalhe do Material" com as informações sobre o item, a partir dessa tela poderão ser executadas três operações: "Novo" iniciando um novo cadastramento a partir do item, "Editar" permitindo alterar as informações de “Fator multiplicador” e “código atual”, itens 5 e 6 anterior e "Inativar" tornando o item inativo.</li>
                                                </ol>
                                                    
                                                <br><!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura23.jpg" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura23.jpg" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>

                                                <!-- Imagem 23 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura23.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Figura 23</strong> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Imagem 23 - End -->

                                                <br><p>Terminada esta atividade o SIGA/SGBM terá o cadastro de todos os códigos dos itens de material permanente do universo do Catálogo que fazem correspondência aos itens físicos em utilização no órgão e entidade. Mais adiante serão registrados os saldos que corresponderão a quantidade física de cada item cadastrado, mas antes disso deverão ser cadastrados também no SIGA/SGBM os responsáveis pelo uso deste acervo patrimonial.
                                                <br><br>Vale ressaltar que o comando de <strong>Migração com Sistema</strong> somente será utilizado no período de implantação, no entanto o comando de <strong>Migração sem sistema (Manutenção >> Almoxarifado >> Material >> Cadastro)</strong> sempre será utilizado toda vez que, durante o uso do Siga/Sbbm, necessitar incluir um novo código de material permanente trazido do Catálogo (Federal Supply Classification).
                                                </p>
                                            </div>
                                        </div>
                                    </div> 

                                    <br><br>

                           
                            
                        
                           
                            

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });                    
                        </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->                        
                    </div> <!-- End col-md-10 -->
                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico02.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
