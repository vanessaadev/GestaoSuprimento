<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.3';
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
                            <p class="SubTitulo"> Consulta de Notas Fiscais Salvas </p>
                            <hr>

                            <br>

                            <p>Como vimos no procedimento 3.2 anterior o SIGA/SGBM permite que o registro da Nota Fiscal mesmo que não terminado, possa ser salvo para edição posterior. Isso será muito útil quando nos deparamos com situações em que as Notas Fiscais são extensas e para garantir que os registros até então realizados não sejam perdidos na eventualidade de uma queda de energia, um problema de conexão ou outra situação que obrigue a interrupção do registro. Para isso basta salvar a Nota à medida que se avança no processo de registro. Para consultar uma Nota Fiscal salva o "Perfil Almoxarife" deve acionar na barra de menu o comando <strong>“Consultas, Almoxarifado, Entradas”</strong>.</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura137.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura137.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 137 - MODAL -->
                            <div class="modal fade text-center" id="Imagem137" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura137.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 137</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 137 - End --><br>
                            <p>Acionado referido comando o SIGA/SGBM apresentará a tela "Consulta Entradas" de onde será localizada a Nota Fiscal. Esta tela já trará</p> <br>                            

                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Nota de Empenho" informar o número do empenho que gerou a respectiva Nota Fiscal. no campo "Período de Movimentação" as datas inicial e final delimitando o período e retroagindo 30 dias da data de formulação da consulta.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Nota de Empenho" informar o número do empenho que gerou a respectiva Nota Fiscal. No campo "Status da Nota" clicar na seta ao lado do campo e selecionar a condição "SALVA PARCIALMENTE".</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Nota de Empenho" informar o número do empenho que gerou a respectiva Nota Fiscal. No campo "Nota Fiscal" informar o número da Nota Fiscal que se deseja consultar.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Nota de Empenho" informar o número do empenho que gerou a respectiva Nota Fiscal. No campo "Número de Série" informar a série da Nota Fiscal que se deseja consultar.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Nota de Empenho" informar o número do empenho que gerou a respectiva Nota Fiscal. Acionar o botão "Pesquisar" para trazer a Nota Fiscal em questão.

                                    <br><br><!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura138.png" data-bs-toggle="modal" data-bs-target="#Imagem138">
                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura138.png" alt="Alt da imagem fica aqui">
                                        </a>
                                    </div>

                                    <!-- Imagem 138 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem138" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura138.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Figura 138</strong> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 138 - End --><br>

                                </li><br>
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Nota de Empenho" informar o número do empenho que gerou a respectiva Nota Fiscal. Ao acionar o botão "Pesquisar" o SIGA/SGBMdemonstrará uma "grade" contendo as seguintes informações da(s) Nota(s) Fiscal(is): Data de Emissão da Nota Fiscal, Fornecedor, Nár Nota Fiscal, Série da Nota e  Ação (onde serão demonstrados ícones que acionados executarão  funcionalidades ).</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Nota de Empenho" informar o número do empenho que gerou a respectiva Nota Fiscal. Ao acionar o ícone em formato de "Lupa" poderão ser acessados os dados da Nota Fiscal.</li>
                                
                                <p class="wow fadeInLeft" data-wow-delay="0.9s">7.1. - Na grade “Itens Selecionados para Entrada” (apresentada ao acionar o ícone em formato de "Lupa") será demonstrado o detalhe da Nota Fiscal, podendo a partir de botões específicos: Editar, Excluir ou Registrar uma nova Nota Fiscal.</p>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura139.png" data-bs-toggle="modal" data-bs-target="#Imagem139">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura139.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 139 - MODAL -->
                                <div class="modal fade text-center" id="Imagem139" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura139.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 139</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 139 - End --><br>
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Nota de Empenho" informar o número do empenho que gerou a respectiva Nota Fiscal. Ao acionar o ícone em formato de "X" poderá ser exclusão o registro da Nota no Sistema SIGA/SGBM.</li>                                
                                
                                <p class="wow fadeInLeft" data-wow-delay="0.6s"> 08.1 - Tela apresentada ao acionar o ícone em formato de "Lápis", pode-se  Editar a Nota Fiscal.</p>
                                <p class="wow fadeInLeft" data-wow-delay="0.9s"> 08.2 - Tela apresentada ao acionar o ícone em formato de "X", pode-se  Excluir a Nota Fiscal.</p>
                                <p class="wow fadeInLeft" data-wow-delay="1.3s"> 08.3 - Ao clicar no botão "Salvar" pode-se gravar as alterações efetuadas na Nota Fiscal e clicando no botão "Finalizar" efetiva o registro da Nota no Controle de Estoque.</p>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura140.png" data-bs-toggle="modal" data-bs-target="#Imagem140">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura140.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 140 - MODAL -->
                                <div class="modal fade text-center" id="Imagem140" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura140.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 140</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 140 - End --><br>                           
                                

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura141.png" data-bs-toggle="modal" data-bs-target="#Imagem141">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura141.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 141 - MODAL -->
                                <div class="modal fade text-center" id="Imagem141" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura141.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 141</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 141 - End --><br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Nota de Empenho" informar o número do empenho que gerou a respectiva Nota Fiscal. Ao acionar o ícone em formato de "Lápis" poderão ser acessados os dados da Nota Fiscal inclusive efetuar o registro da nota acionando o botão "Finalizar".</li>

                                
                                <p class="wow fadeInLeft" data-wow-delay="0.6s">9.1 - Ao ser comandada a operação na Nota Fiscal salva e não finalizada (item 8.1 e 8.2 anteriores) o SIGA/SGBM apresentará uma mensagem de confirmação da operação.</p>
                                
                                
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura142.png" data-bs-toggle="modal" data-bs-target="#Imagem142">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura142.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 142 - MODAL -->
                                <div class="modal fade text-center" id="Imagem142" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura142.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 142</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 142- End -->
                                <br>
                                

                            </ol>



                            
          
                            <br><br><!-- SCRIPT LIGHTBOX -->
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
                    <a href="Topico03.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
