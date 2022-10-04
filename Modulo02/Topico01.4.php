<?php
    // EGPCE - Chama o conectamoodle.php
    //require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.4';
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
            
                <div class="main-content container-fluid" id="#Apresentacao"> <!-- Begin main-content -->
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                            <div class="page-title Texto">

                            <!-- Sub Título -->
                            <p class="SubTitulo"> Solicitar Acesso ao Sistema</p>
                            <hr>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success">
                                <div class="row">
                                    <div class="col-2">
                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                                <img class="img-fluid"  src="imagens/Figuraa6.png" alt="Alt da imagem fica aqui">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <p> O SIGA/SGBM é um sistema corporativo acessado por intermédio da internet, não sendo necessário ser instalado na rede de computadores local do órgão/entidade. Essa característica permite a padronização de procedimentos operacionais e a atualização permanente do sistema na ocorrência de novas práticas estabelecidas por legislação ou por mudanças no processo operacional.</p>
                                    </div>
                                </div>
                            
                                <br><p>O sistema também permite acesso individualizado por intermédio de "login e senha" conforme o "perfil" do usuário. Cada "perfil" reúne uma série de funcionalidades adequadas às características operacionais e nível hierárquico do usuário. Um usuário pode ter apenas um "perfil" por versão no SIGA/SGBM.
                                <br><br>O SIGA/SGBM atualmente está sendo atualizado e encontra-se com duas versões em funcionamento: <strong>Versão 2</strong> suportando o processo de controle de almoxarifado e <strong>Versão 1</strong> suportando o processo de controle de patrimônio. </p>
                            </div>
                            

                            <br><p> Os "perfis" ou "grupos" definidos para o SIGA/SGBM são os seguintes:</p>

                            <br><!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Almoxarife</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">

                                                <div class="row">
                                                    <div class="col-2">
                                                        <!-- Titulo Figura -->
                                                        <div class="text-center"><br><br>
                                                                <img class="img-fluid" width="100" src="imagens/Figuraa7.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                            </a>
                                                        </div>
                                                        
                                                    </div>


                                                    <div class="col-10">
                                                        <p>É aquele que trabalha operacionalizando o controle de estoque, atualizando o cadastro de materiais, atendendo as requisições e procedendo a entrega dos materiais de consumo, assim como registrando as entradas de estoque originadas dos recebimentos de materiais de consumo e permanente. 
                                                        <br><br>Também é função desse perfil por intermédio do SIGA/SGBM monitorar a movimentação dos itens e encerrar mensalmente o ciclo do controle de estoque.  As permissões correspondentes a este perfil são:</p>
                                                        
                                                    </div>
                                                </div><br>
                                                
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <ul class="none">
                                                            <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Atender Requisição de Almoxarifado;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Baixa de Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Devolução;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Doação de Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Requisitar Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por Registro de Preço;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por Cotação Eletrônica;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por Nota Fiscal;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consultar Notas Fiscais Salvas;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Solicitar Cancelamento de Nota Fiscal;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Solicitar Cadastro de Material no Catálogo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar Material no SIGA/SGBM;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de 10 Itens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Consumo Geral do Período;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Consumo por Setor;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Consumo por Categoria;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Curva ABC de Estoque;</li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-sm">
                                                        <ul class="none">
                                                            <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Curva ABC de Giro de Estoque;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Entrada Período;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Entradas x Saídas;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Itens Parados;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Itens Cadastrados por Tipo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Movimentação de Estoque;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Posição de Estoque;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Razão Movimentação;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Baixas Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Doação Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Entradas;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Fornecedores;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Requisições;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Migrar Dados de Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consultar Migração Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Gerar Fechamento Almoxarifado.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Gestor Patrimonial</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">

                                                <div class="row">
                                                    <div class="col-2">
                                                        <!-- Titulo Figura -->
                                                        <div class="text-center">
                                                                <img class="img-fluid" width="150" src="imagens/Figuraa8.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                            </a>
                                                        </div>
                                                    </div>


                                                    <div class="col-10">
                                                        <p>É aquele que trabalha no controle e movimentação dos bens móveis, no tocante a: localização, uso, garantia, manutenção dos bens, assim como as cessões, transferências e doações, inclusive na preparação dos bens para o Leilão Público Estadual. As permissões correspondentes a este perfil são:</p>
                                                        
                                                    </div>
                                                </div><br>
                                               
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <ul class="none">
                                                            <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Atender Requisição de Patrimônio;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Baixa de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Doação de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cessão de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Transferência de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Movimento Interno Setor P/ Setor;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Solicitar Cadastro de Material no Catálogo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar Material no SIGA/SGBM;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ativar/Inativar Responsável Setor;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar/Pesquisar Responsável Bem;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ativar/Inativar Responsável Bem;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Transferir Responsável Bem;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar/Pesquisar Coordenador Jurídico;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar/Pesquisar Responsável Setor;</li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-sm">
                                                        <ul class="none">
                                                            <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Imprimir Relatório de Inventário de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Imprimir Guia de Movimentação de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Gerar Fechamento Patrimônio;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Inventário de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada de Inventário de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Listar Pendências de Inventário;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Enviar Arquivo de Implantação de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ler Planilha de Migração de bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Listar Pendências de Planilha de Migração de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Listar Relatório de Resultado de Migração de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Imprimir Termo de Responsabilidade;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Bens.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Almoxarife/ Gestor Patrimonial</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">

                                                <div class="row">
                                                    <div class="col-2">
                                                        <!-- Titulo Figura -->
                                                        <div class="text-center"><br>
                                                                <img class="img-fluid" width="150" src="imagens/Figuraa9.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                            </a>
                                                        </div>
                                                        
                                                    </div>


                                                    <div class="col-10">
                                                        <p>É aquele que trabalha tanto como Almoxarife quanto como Gestor Patrimonial, devido ao tamanho e simplicidade do órgão/entidade, para esses o SIGA/SGBM permitirá o acesso tanto para as funcionalidades de controle de estoque, como para as funcionalidades de controle e movimentação de bens. As permissões correspondentes a este perfil são: </p>
                                                    </div>
                                                </div>

                                                <!-- Importante -->
                                                <div class="ImportanteCaixa">
                                                    <p class="ImportanteTitulo"> Importante</p>
                                                    <p class="ImportanteTexto">Este perfil estará inativo durante a atualização da Versão 1 referente ao controle patrimonial. Enquanto estiver em atualização os usuários que necessitam desse perfil terão acesso às duas versões, sendo, Versão 1 como Gestor Patrimonial e Versão 2 como Almoxarife.</p>
                                                </div><br>
                                                        

                                                <div class="row">
                                                    <div class="col-sm">
                                                        <ul class="none">
                                                            <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Atender Requisição de Almoxarifado;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Atender Requisição de Patrimônio;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Baixa de Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Devolução;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Doação de Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Requisitar Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por OC de Registro de Preço;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por OC de Cotação Eletrônica;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ativar/Inativar Responsável Setor;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por Nota Fiscal;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consultar Notas Fiscais Salvas;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Solicitar Cancelamento de Nota Fiscal;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Baixa de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Doação de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cessão de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Transferência de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Movimento Interno Setor P/ Setor;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Requisição de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Solicitar Cadastro de Material no Catálogo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="5.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar Material no SIGA/SGBM;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="5.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar/Pesquisar Responsável Setor;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="5.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ativar/Inativar Responsável Setor;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="5.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar/Pesquisar Responsável Bem;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="6.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ativar/Inativar Responsável Bem;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="6.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Transferir Responsável Bem;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="6.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar/Pesquisar Coordenador Jurídico;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="6.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de 10 Itens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="7.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Consumo Geral do Período;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="7.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Consumo por Setor;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="7.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Consumo por Categoria;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="7.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Curva ABC de Estoque;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="8.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Curva ABC de Giro de Estoque;</li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-sm">
                                                        <ul class="none">
                                                            <li class="wow fadeInRight" data-wow-delay="0.2s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Entrada Período, Relatório de Entradas x Saídas;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Itens Parados;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.6"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Itens Cadastrados por Tipo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Movimentação de Estoque;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Posição de Estoque;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Razão Movimentação;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Imprimir Relatório de Inventário de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Imprimir Guia de Movimentação de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Imprimir Termo de Responsabilidade;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Imprimir Termo de Transferência de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Imprimir Termo de Doação de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Baixas (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Doação (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Entradas;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Fornecedores;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Requisições;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Migrar Dados Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consultar Migração de Material de Consumo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Gerar Fechamento Almoxarifado;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="5.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Gerar Fechamento Patrimônio;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="5.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Inventário de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="5.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada de Inventário de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="5.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Listar Pendências de Inventário;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="6.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Enviar Arquivo de Implantação de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="6.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ler Planilha de Migração de bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="6.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Listar Pendências de Planilha de Migração de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="6.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Listar Relatório de Resultado de Migração de Bens.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Gestor Administrativo</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">

                                                <div class="row">
                                                    <div class="col-2">
                                                        <!-- Titulo Figura -->
                                                        <div class="text-center">
                                                                <img class="img-fluid" width="150" src="imagens/Figuraa10.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                            </a>
                                                        </div>
                                                        
                                                    </div>


                                                    <div class="col-10">
                                                        <p>É aquele que acompanha a movimentação de materiais e bens nos centros de custos, enxergando as atividades efetuadas pelos requisitantes, almoxarifes e gestores patrimoniais, e coordenando os inventários físicos por intermédio do sistema. As permissões correspondentes a este perfil são:</p>
                                                        
                                                    </div>
                                                </div><br>
                                                
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <ul class="none">
                                                            <li class="wow fadeInRight" data-wow-delay="0.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Atender Requisição de Almoxarifado;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Baixa (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Devolução;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Doação (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Requisitar Material (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por Registro de Preço;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por Cotação Eletrônica;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por Nota Fiscal;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consultar Notas Fiscais Salvas;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Solicitar Cancelamento de Nota Fiscal;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Requisição de Bens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Solicitar Cadastro de Material no Catálogo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar Material no SIGA/SGBM;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar/Pesquisar Coordenador Jurídico;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de 10 Itens;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Consumo Geral do Período;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Consumo por Setor;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Consumo por Categoria;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Curva ABC de Estoque;</li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-sm">
                                                        <ul class="none">
                                                            <li class="wow fadeInRight" data-wow-delay="0.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Curva ABC de Giro de Estoque;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Entrada Período;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Entradas x Saídas;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Itens Parados;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Itens Cadastrados por Tipo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Movimentação de Estoque;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Posição de Estoque;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Razão Movimentação; </li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Baixas (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Doação (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Entradas;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Fornecedores;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Requisições;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consulta de Bens; </li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Migrar Dados (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="3.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consultar Migração (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Gerar Fechamento Almoxarifado;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Gerar Inventário (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="4.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Gerenciar Pessoas do Inventário (Consumo).</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <strong>Gestor Financeiro</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">

                                                <div class="row">
                                                    <div class="col-2">
                                                        <!-- Titulo Figura -->
                                                        <div class="text-center">
                                                                <img class="img-fluid" width="70" src="imagens/Figuraa11.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                            </a>
                                                        </div>
                                                        
                                                    </div>


                                                    <div class="col-10">
                                                        <p>É aquele que acompanha a movimentação de materiais e bens nos centros de custos, aprovando e validando operações de cancelamento de notas, fechamentos mensais, assim como retirando relatórios do sistema para conciliações e fechamentos financeiros do almoxarifado e patrimônio. As permissões correspondentes a este perfil são:</p>
                                                        
                                                    </div>
                                                </div>

                                            
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <ul class="none">
                                                            <li class="wow fadeInRight" data-wow-delay="0.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Validar Movimentos de Bens (Validação Financeiro);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Baixa (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Devolução;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Doação (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por Registro de Preço;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por Cotação Eletrônica;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Entrada por Nota Fiscal;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consultar Notas Fiscais Salvas;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Autorizar Cancelamento de Nota Fiscal;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Solicitar Cadastro de Material no Catálogo;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cadastrar Material no SIGA/SGBM;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de 10 Itens;</li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-sm">
                                                        <ul class="none">
                                                            <li class="wow fadeInRight" data-wow-delay="0.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Relatório de Consumo por Categoria;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Gerenciar Inventário (Consumo);</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Gerar Fechamento Almoxarifado;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Implantação de Bens > Entrada de Inventário;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Implantação de Bens > Pendências de Inventário;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Implantação de Bens > Relatório de Resultado de Migração;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Reavaliação > Cadastrar; </li>
                                                            <li class="wow fadeInRight" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Reavaliação > Pesquisar;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Redução ao Vlr Recuperável > Cadastrar;</li>
                                                            <li class="wow fadeInRight" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Redução ao Vlr Recuperável > Pesquisar.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item06">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            <strong>Requisitante</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">

                                                <div class="row">
                                                    <div class="col-2">
                                                        <!-- Titulo Figura -->
                                                        <div class="text-center">
                                                                <img class="img-fluid" width="90" src="imagens/Figuraa12.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                            </a>
                                                        </div>
                                                        
                                                    </div>


                                                    <div class="col-10">
                                                        <p>É aquele que solicita ao almoxarifado material de consumo ou material permanente. O SIGA/SGBM foi construído para que tais usuários façam seus pedidos de material por intermédio da rede de computadores possibilitando maior agilidade e controle e evitando a manipulação desnecessária de papel.</p>
                                                    </div>
                                                </div>
                                                        
                                                <p>Os requisitantes, limitam-se a fazer o pedido de materiais e não enxergam a quantidade de saldo no almoxarifado. O requisitante está vinculado a um único Centro de Custo, ou seja, cada setor do órgão deve ter um ou dois requisitantes para que através do computador façam os seus pedidos. As permissões correspondentes a este perfil são:</p>
                                                        
                                                                                                                                                    
                                                <ul class="none">
                                                    <li class="wow fadeInRight" data-wow-delay="0.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Requisitar Material de Consumo (vários setores); </li>
                                                    <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Requisitar Bens (vários setores);</li>
                                                    <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consultar Requisições de Material de Consumo.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item07">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                            <strong>Requisitante Multisetorial</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">

                                                <div class="row">
                                                    <div class="col-2">
                                                        <!-- Titulo Figura -->
                                                        <div class="text-center">
                                                                <img class="img-fluid" width="150" src="imagens/Figuraa13.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                            </a>
                                                        </div>
                                                        
                                                    </div>


                                                    <div class="col-10">
                                                        <p>É aquele que solicita materiais ou bens para mais de um Centro de Custo, isso deve-se a necessidade de alguns órgãos que abastecem células descentralizadas geograficamente, geralmente localizadas no interior do Estado, e efetuam tal distribuição para não acumularem no Almoxarife/Gestor Patrimonial o atendimento dessas demandas e assim ter maior celeridade. As permissões correspondentes a este perfil são:</p>
                                                        
                                                    </div>
                                                </div>

                                                
                                                <ul class="none">
                                                    <li class="wow fadeInRight" data-wow-delay="0.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Requisitar Material de Consumo (vários setores);  </li>
                                                    <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Requisitar Bens (vários setores);</li>
                                                    <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Consultar Requisições de Material de Consumo.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item08">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                            <strong>Validador</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">

                                                <div class="row">
                                                    <div class="col-2">
                                                        <!-- Titulo Figura -->
                                                        <div class="text-center">
                                                                <img class="img-fluid" width="150" src="imagens/Figuraa14.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                            </a>
                                                        </div>
                                                    </div>


                                                    <div class="col-10">
                                                        <p>É aquele que verifica se os processos de movimentação patrimonial estão de acordo com a legislação vigente e liberam no sistema para que as doações de bens sigam seu trâmite de aprovação. AS permissões correspondentes a este perfil são:</p>
                                                    </div>
                                                </div>
                                                
                                                <ul class="none">
                                                    <li class="wow fadeInRight" data-wow-delay="0.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Validação de doações de Bens;  </li>
                                                    <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Reversão de Status do Bem.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><br><p>Uma vez conhecidos os perfis de acesso ao SIGA/SGBM a solicitação de acesso deverá ser registrada no Sistema de Solicitação de Acesso - SSA, para que seja diferida pela Seplag. Vale ressaltar que o titular do órgão e entidade será quem solicitará o acesso por intermédio do SSA. 
                                <br><br>O acesso ao ser diferido, se dará por intermédio do "GUARDIÃO" que é um sistema corporativo que controla o acesso de todos os sistemas corporativos da SEPLAG. 
                                <br><br>O registro da solicitação no SSA deverá conter as seguintes informações: </p>

                                <ul class="none">
                                    <li class="wow fadeInRight" data-wow-delay="0.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Nome Completo</strong>: Informação obrigatória para identificação do usuário;  </li>
                                    <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>CPF Nº</strong>: Informação obrigatória no GUARDIÃO que funciona como código de individualização do usuário;</li>
                                    <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>E-mail</strong>: O e-mail deve ser funcional (.ce.gov.br) outras terminações serão indeferidas;</li>
                                    <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Telefone</strong>: Ramal ou telefone para facilitar a localização pelo setor de atendimento, caso seja necessário;</li>
                                    <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Setor no organograma</strong>: Centro de Custo onde serão alocadas as despesas de materiais de consumo e a localização dos bens;</li>
                                    <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Perfil</strong>: Um dos perfis acima identificados conforme a característica do usuário.</li>
                                </ul>

                                <br><p>O usuário solicitante receberá sua senha pelo e-mail informado e poderá acessar o SIGA/SGBM imediatamente.
                                <br><br>Deve ser utilizado preferencialmente o navegador Mozila Firefox e o acesso ocorrerá inicialmente por intermédio do site da Seplag conforme figura abaixo, mas o usuário poderá colocar o endereço no "Favoritos" do navegador:  </p><br>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s"  src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 1</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 01 - End --><br>

                                <br><center> <i class="fa fa-arrow-down CorVerdeClaroEstado fa-3x"></i></center><br>

                                <div class="text-center">
                                    <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 02 - MODAL -->
                                <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 2</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 02 - End --><br>

                                <br><center> <i class="fa fa-arrow-down CorVerdeClaroEstado fa-3x"></i></center><br>
                                
                                <div class="text-center">
                                    <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 3</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End --><br>

                                <br><center> <i class="fa fa-arrow-down CorVerdeClaroEstado fa-3x"></i></center><br>

                                <div class="text-center">
                                    <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                

                                <!-- Imagem 04 - MODAL -->
                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 4</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 04 - End --><br>

                                <br><center> <i class="fa fa-arrow-down CorVerdeClaroEstado fa-3x"></i></center><br>

                                <div class="text-center">
                                    <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                            

                                <!-- Imagem 05 - MODAL -->
                                <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 5</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 05 - End --><br>

                                <br><div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <p class="FiqueAtentoTexto">O SIGA/SGBM até momento está sendo submetido a uma mudança de versão para que tenha melhor desempenho, em função disso, haverão dois ícones no grupo GESTÃO de PROCESSOS:
                                        <ol>
                                            <li> SIGA / SGBM V2 é a versão mais recente e com um duplo clique acessará exclusivamente ao módulo de Almoxarifado.</li>
                                            <li> SIGA /SGBM é a versão original e com um duplo clique acessará as funcionalidades de controle patrimonial.</li>
                                        </ol>
                                    </p>
                                </div><br>

                                <br><p><strong>Tela de Entrada do SIGA/SGBM V2 - Módulo de Almoxarifado</strong></p><hr>

                                <br><div class="text-center">
                                    <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 06 - MODAL -->
                                <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 6</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 06 - End --><br>

                                <br><p><strong>Tela de Entrada do SIGA/SGBM Versão Original - Módulo de Controle Patrimonial</strong></p>
                                <hr>

                                <br><div class="text-center">
                                    <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 07 - MODAL -->
                                <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 7</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 07 - End -->


                           

                         

                      
                            

                                                             
                            
                            
                            <br><br><!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                            </div> <!-- End page-title -->                            
                        </div> <!-- End page-title -->

                        <div class="col-md-1"></div>
                    </div> <!-- End row -->
                    
                    <!-- Botões de navegação -->
                    <div class="text-center">
                        <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                        <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
