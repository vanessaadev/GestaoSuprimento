<?php
    // EGPCE - Chama o conectamoodle.php
    //require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.1';
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
                        <p class="SubTitulo"> Recebimento por Ordem de Compra </p>
                        <hr>
                        
                        <br>

                        <p>O recebimento por Ordem de Compra evita a transcrição de informações da Nota Fiscal de compras para entrada de estoque, reduzindo a ocorrência de erros e possibilitando um melhor monitoramento do nível de atendimento na relação com os fornecedores. Pode ser efetuado em duas modalidades o recebimento de "Ordens de Compra" originadas no "Sistema de Registro de Preço" e o recebimento de "Ordens de Compra" originadas pelo "Sistema Licitaweb" que terá menus diferenciados.</p>

                        <br><h4 style="color: #FFA73E;">A) Recebimento de Ordens de Compra de Registro de Preços</h4><hr>

                        <p>Para efetuar o registro por intermédio de Ordem de Compra na modalidade de Registro de Preço, o "Perfil Almoxaife" deve executar na barra de menu o comando: <strong>"Movimentos, Almoxarifado, Entrada, Por Ordem de Compra, Registro de Preço".</strong></p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura115.png" data-bs-toggle="modal" data-bs-target="#Imagem115">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura115.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 115 - MODAL -->
                        <div class="modal fade text-center" id="Imagem115" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura115.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 115</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 115 - End --><br>

                        <p>Ao acionar o comando correspondente na "Barra de Menu" o SIGA/SGBM apresentará a tela "Entrada por Registro de Preço" para o preenchimento das seguintes informações:</p>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade.</li>No Campo "Número da Ata" preencher com o número da Ata de registro de preço de onde se origina a Ordem de Compra em questão.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade.</li>No campo "Ordem de Compra" preencher como o número da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade.</li>Acionar o botão "Pesquisar" para que o SIGA/SGBM apresente as informações correspondentes a Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura116.png" data-bs-toggle="modal" data-bs-target="#Imagem116">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura116.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 116 - MODAL -->
                            <div class="modal fade text-center" id="Imagem116" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura116.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 116</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 116 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade.</li>Ao acionar o botão "Pesquisar" o SIGA/SGBM apresenta o espelho da Ordem Compra identificando o Fornecedor que atende o referido pedido.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade.</li>Acionando o botão "Alterar" poderá ser informada uma nova combinação de Número de Ata e Número de Ordem de compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura117.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura117.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 117 - MODAL -->
                            <div class="modal fade text-center" id="Imagem117" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura117.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 117</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 117 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade.
                            No campo "Valor Total da Nota Fiscal" informar o valor total da Nota Fiscal do Fornecedor que refere-se ao atendimento da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Nota Fiscal" informar o número da Nota Fiscal do fornecedor que atende a Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Nota de Empenho" informar o número da Nota de Empenho correspondente ao pagamento da respectiva Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Número de série" informar a série da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Data Emissão" clicar no quadrículo a lado do campo que se abrirá o calendário do mês corrente para que seja selecionada a data correspondente àemissão da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Data de Entrada" informar a data em que a respectiva Nota Fiscal está sendo registrada no SIGA/SGBM.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Observação" descrever qualquer informação que se fará necessária para complementar a operação.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura118.png" data-bs-toggle="modal" data-bs-target="#Imagem118">
                                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="imagens/Figura118.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 118 - MODAL -->
                            <div class="modal fade text-center" id="Imagem118" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura118.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 118</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 118 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Marcar o quadrículo constante no cabeçalho da grade "Itens selecionados" caso queira marcar todos os itens constantes na Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Marcar cada quadrículo individualmente se optar por fazer o registro de entrada parcialmente.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Quantidade Entrada" informar a quantidade do item que está sendo recebida do fornecedor.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. As colunas: "Quantidade final" e "Valor Unitário Final" terão seus valores variáveis segundo o "Fator Multiplicador" caso este seja maior que "1" . A quantidade aumentará na proporção do "Fator Multiplicador" e o valor unitário diminuirá também na mesma proporção. Antes de acionar o botão "Salvar" efetivando a entrada da Nota Fiscal o usuário deverá certificar-se que a "Quantidade Final" que está dando entrada corresponde efetivamente ao que foi conferido fisicamente no ato do recebimento. No caso do material permanente foi orientado na ocasião do cadastro que o fator multiplicador sempre será igual a “1” uma vez que a distribuição desses itens não é fracionada.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. A medida que for sendo registrados o recebimentos o SIGA/SGBM procede o somatório dos valores que deverá "bater" com o valor da Nota Fiscal informado no "campo 06" anterior de forma a consistir a entrada de dados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Acionar o botão "Salvar" para efetivar o registro da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Caso o material constante na Ordem de Compra não estiver cadastrado no SIGA/SGBM como item de catálogo, na coluna "Ação" da grade "Itens selecionados" da Ordem de Compra aparecerá o ícone indicando que o material não está cadastrado, basta clicar nesse ícone para efetuar o cadastramento sem perder o foco do registro da Ordem de Compra.</li>
                            <br>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura119.png" data-bs-toggle="modal" data-bs-target="#Imagem119">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura119.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 119 - MODAL -->
                            <div class="modal fade text-center" id="Imagem119" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura119.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 119</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 119 - End --><br>
                        </ol><br>
                            
                        <p>Apesar dos exemplos demonstrados se tratarem de material de consumo, o mesmo procedimento será seguido para o material permanente. </p><br>

                        <ol class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade.</li>
                            <p class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ao acionar o botão "Salvar" o SIGA/SGBM apresentará uma janela "Pop up" com uma mensagem de confirmação da operação: acionando o botão Ok efetiva a operação caso contrário o botão Cancela não efetivará o registro. </p>
                        </ol><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura120.png" data-bs-toggle="modal" data-bs-target="#Imagem120">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura120.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 120 - MODAL -->
                        <div class="modal fade text-center" id="Imagem120" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura120.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 120</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 120 - End --><br>

                        <br><h4 style="color: #FFA73E;">B) Recebimento de Ordens de Compra do Licitaweb</h4><hr>

                        <p>Para efetuar o registro por intermédio de Ordem de Compra na modalidade do Licitaweb, o "Perfil Almoxarife" deve executar na barra de menu o comando: <strong>"Movimentos, Almoxarifado, Entrada, Por Ordem de Compra, Cotação"</strong>.</p><br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura2121png" data-bs-toggle="modal" data-bs-target="#Imagem121">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura121.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 121 - MODAL -->
                        <div class="modal fade text-center" id="Imagem121" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura121.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 121</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 121- End --><br>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Número da Ordem de Compra" informar o número da Ordem de Compra emitida na modalidade de compra por "Cotação de Compra Eletrárica".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade.</li>Acionar o botão "Pesquisar".

                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura122.png" data-bs-toggle="modal" data-bs-target="#Imagem122">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura122.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 122 - MODAL -->
                                <div class="modal fade text-center" id="Imagem122" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura122.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 122</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 122 - End --><br>


                            Ao acionar o botão "Pesquisar" o SIGA/SGBM efetuará a integração com o Sistema de Cotação Eletrárica e a partir dessa interação apresentará a tela de registro da Nota Fiscal originada a partir da Ordem de Compra já identificando o fornecedor na respectiva tela deverá ser informado o sguinte:</li><br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Vlr Total da Nota Fiscal" informar o valor total da Nota Fiscal, essa informação servirárde fechamento com os valores dos itens da Nota somados individualmente a partir do seu registro no sistema.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Nº Nota Fiscal" informar o número da Nota Fiscal emitida pelo fornecedor a partir da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Nº Nota Empenho" informar o número da Nota de Empenho que autorizou a emissão da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Nár. de Série" informar a série da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Data Emissão" informar o dia, már e ano de emissão da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Data Entrada" informar o dia, már e ano em que a Nota Fiscal está sendo registrada no sistema SIGA/SGBM.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Observações" informar qualquer informação que se faár necessária com relação ao processo de recebimento ou registro da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Quando na coluna "Ações" surgir um ícone em formato de "Lápis" significa que o item de material ainda não está cadastrado no SIGA/SGBM, o registro só poderá prosseguir se o item for cadastrado. Para cadastrar o item de material em questão basta clicar sobre o ícone.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura123.png" data-bs-toggle="modal" data-bs-target="#Imagem123">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura123.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 123 - MODAL -->
                            <div class="modal fade text-center" id="Imagem123" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura123.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 123</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 123 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. O SIGA/SGBM trás do catálogo de bens materiais e serviços a classificação do material já definida.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Fator Multiplicador" informar a quantidade que deverá ser fracionada a "Unidade de Fornecimento". No exemplo abaixo o material é adquirido em fardo, e será entregue também em fardo, então não haverá necessidade de fracionamento e o valor do "Fator Multiplicador" será igual a 1 .</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Uma vez cadastrada essa informação, toda vez que for registrada uma entrada de estoque na unidade de fornecimento "Fardo" o almoxarife deverá atentar que a quantidade, em termos nominais se manterá a mesma, assim como o valor da fardo  considerando o fator multiplicador que foi informado. Ou seja, a quantidade nominal será multiplicada por 1  e o valor do fardo por 1 . Dessa forma a Unidade de Fornecimento será igual a Unidade de consumo. Uma vez registrado o "Fator Multiplicador" do item este só poderá  ser alterado se o item ainda não tiver sido movimentado ou se o seu saldo estiver Zero.
                            <br><br>No campo "Unidade de consumo" informar a unidade na qual o item de material vai ser entregue ao requisitante.  No exemplo abaixo o material será entregue em fardo, na mesma unidade que ár adquirido. </li><br>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Limite Mínimo" informar a quantidade em estoque na qual deverá ser efetuado o pedido de ressuprimento, de forma ao atingir esse limite o SIGA/SGBM avise ao almoxarife que o estoque deve ser reposto mediante pedido.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Limite Mínimo" informar a quantidade mínima que poderá ser estocada do item..</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Localização" informar a sequência de endereçamento do armazém onde o material está localizado.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Informado todos os campos identificados como obrigatórios (*), acionar o botão "Salvar".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura124.png" data-bs-toggle="modal" data-bs-target="#Imagem124">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura124.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 124 - MODAL -->
                            <div class="modal fade text-center" id="Imagem124" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura124.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 124</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 124 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Uma vez acionado o botão "Salvar" o SIGA/SGBM apresentará uma mensagem de sucesso da operação e retornará a tela de registro, no entanto sem demonstrar mais o ícone de indicação de itens não cadastrados.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura125.png" data-bs-toggle="modal" data-bs-target="#Imagem125">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura125.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 125 - MODAL -->
                            <div class="modal fade text-center" id="Imagem125" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura125.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 125</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 125 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Na grade itens selecionados, clicar no quadrículo correspondente ao item em que será registrada a quantidade a receber da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. No campo "Qtde a receber" informar a quantidade efetivamente recebida da Ordem de Compra, sempre observando o campo "Qtde total da O.C.".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Nos campos "Qtd Final" e "Valor Unitário final" árapresentado na cor vermelha os valores de quantidade e valor unitário do item convertidos a partir da aplicação do "Fator Multiplicador". Tais valores serão apresentados com 4 casas decimais e poderão ser diferentes dos valores informados nos casos em que a "Unidade de Fornecimento" for diferente da "Unidade de Consumo". Uma vez confirmada a ação de entrada da Ordem de Compra os valores convertidos são os que efetivamente entrarão  no estoque.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Acionar o botão "Próximo" para salvar a Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura126.png" data-bs-toggle="modal" data-bs-target="#Imagem126">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura126.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 126 - MODAL -->
                            <div class="modal fade text-center" id="Imagem126" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura126.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 126</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 126 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Ao ser acionado o botão "Próximo" o Siga/Sgbm apresentará uma mensagem solicitando a conferência da Ordem de Compra em questão.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Acionar o botão "Confirmar" para salvar a Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura127.png" data-bs-toggle="modal" data-bs-target="#Imagem127">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura127.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 127 - MODAL -->
                            <div class="modal fade text-center" id="Imagem127" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura127.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 127</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 127 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar" o SIGA/SGBM atualiza a "Janela de Baixa" apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna ´"Ações" é formado um ícone em formato de "Lápis" que quando acionado retorna à janela de seleção para edição da quantidade a ser baixada caso haja necessidade. Acionar o botão "Confirmar" o Siga/Sgbm solicitará a confirmação para salvar definitivamente a Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura128.png" data-bs-toggle="modal" data-bs-target="#Imagem128">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura128.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 128 - MODAL -->
                            <div class="modal fade text-center" id="Imagem128" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura128.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 128</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 128 - End --><br>
                            
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
                    <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
