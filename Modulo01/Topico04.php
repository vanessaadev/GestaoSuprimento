<?php
$page = 'Topico04';
include('layout/header.php');
?>

<html>
<meta charset="utf-8">
<!-- PLUGIN DO FADE IN -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<body>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <!--INÍCIO CONTEUDO PARTE 01-->
        <section id="pt01">
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <!-- LINHA pt01 -->
                        <div class="col-md-1"></div>
                        <div class="col-md-10">


                            <!-- INICIO CONTEUDO -->

                            <!-- Título -->
                            <h2 class="Titulo">Controle de Estoque e Ressuprimento de Materiais</h2>
                            <hr>

                            <div class="bd-callout bd-callout-primary">
                                <p><strong>Objetivo:</strong> Compreender a principal atividade do Almoxarifado que é controlar os níveis de estoque para atendimento às necessidades de consumo, assim como as técnicas usuais para identificar o momento e a quantidade de ressuprimento dos estoques de materiais.</p>
                            </div>

                            <br>
                            <p class="SubTitulo">Razões para Manter Estoques e Quais os Tipos de Estoque</p>
                            <hr>

                            <p>Uma das variáveis que definem o sucesso ou fracasso de muitas organizações é a gestão de estoques, que é constituída por gestão de materiais, recursos humanos e financeiros. A gestão de estoques permite ao administrador verificar se os estoques estão sendo bem utilizados, bem localizados em relação aos setores que deles utilizam, bem manuseados e bem controlados.</p>
                            <p>Uma boa gestão de estoque obtém importantes ganhos, com eficiência, redução de falhas e custos, rapidez, confiabilidade e capacidade de rastreamento. Devido à complexidade dos processos que a envolvem, dois aspectos da organização são influenciados: a disponibilidade do produto e o custo, ambos com impacto direto no resultado das operações.</p>
                            <p>Portanto é fundamental para qualquer organização, definir uma política de estoque que consistirá em um conjunto de atos diretivos que estabelecem, de forma global e específica, princípios, diretrizes e normas relacionadas ao gerenciamento dos estoques. Em qualquer organização, a preocupação da gestão de estoques está em manter o equilíbrio entre as diversas variáveis componentes do sistema, tais como: custos de aquisição, de estocagem e de distribuição; nível de atendimento das necessidades dos usuários consumidores etc. Logo, gerir estoques economicamente consiste essencialmente na procura da racionalidade e equilíbrio com o consumo, de tal maneira que:</p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> As necessidades efetivas de seus consumidores sejam satisfeitas com mínimo custo e menor risco de falta possível;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Seja assegurada a seus consumidores e continuidade de fornecimento;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> O valor obtido pela continuidade de fornecimento deve ser inferior a sua própria falta.</li>
                            </ul>

                            <p>O grande desafio é encontrar o equilíbrio entre essas variáveis, se a política de estoque adotada tenta assegurar a disponibilidade aumentando o estoque, provoca um impacto diretamente nos custos relativos à sua manutenção, como capital e armazenamento; por outro lado, se para cortar os custos os estoques são demasiadamente reduzidos, corre-se o grande risco de não atender as necessidades de consumo mínimas para a organização operar. Mas quando encontramos o equilíbrio os resultados são significativos em termos de gestão.</p>

                            <p>A manutenção dos estoques se faz necessária por que existe uma diferença de ritmo ou de taxa entre o fornecimento e a demanda dos materiais necessários à produção de um bem ou serviço, ou seja, se o fornecimento de qualquer item ocorresse exatamente no momento em que fosse demandado, o item nunca necessitaria ser estocado. Por esta razão algumas questões justificam a manutenção dos estoques:</p>

                            <br><br><!-- SubSubTítulo -->
                            <p class="SubSubTitulo">Melhorar o Nível de Serviço Oferecido</p>
                            <hr>

                            <p> Estoques auxiliam a função de prestação de serviço. Estes podem ser localizados mais próximos aos pontos de demanda e com quantidades mais adequadas. Isto é vantajoso para operações que precisam de disponibilidade imediata ou tempos de ressuprimento pequenos. Para a firma fornecedora, isto significa vantagem competitiva e menores custos de ofertas perdidas, especialmente para produtos particularmente elásticos quanto ao nível de serviço.</p>

                            <br><br><!-- SubSubTítulo -->
                            <p class="SubSubTitulo">Incentivar Economias na Produção</p>
                            <hr>

                            <p> O mínimo custo unitário de produção geralmente ocorre para grandes lotes de produção com o mesmo tamanho. Estoques agem como amortecedores entre oferta e demanda, possibilitando uma produção mais constante, que não oscila com as flutuações de demanda. A força de trabalho pode ser mantida em níveis estáveis e os custos de preparação de lotes podem ser diminuídos.</p>

                            <br><br><!-- SubSubTítulo -->
                            <p class="SubSubTitulo">Permitir Economias de Escala nas Compras e no Transporte</p>
                            <hr>

                            <p> Muitas vezes, pequenos lotes de compra são gerados para satisfazer necessidades de produção ou para abastecerem diretamente requisitantes. Isto implica maiores custos de frete, pois não há volume suficiente para obter os descontos oferecidos aos lotes maiores. Entretanto, uma das finalidades do estoque é possibilitar descontos no transporte pelo emprego de grandes lotes equivalentes à capacidade dos veículos e gerar, portanto, fretes unitários menores. De modo similar, menores preços podem ser obtidos na compra de mercadorias com o uso de lotes maiores que as demandas imediatas.</p>

                            <br><br><!-- SubSubTítulo -->
                            <p class="SubSubTitulo">Proteção Contra Alterações nos Preços</p>
                            <hr>

                            <p> Bens comprados em mercados abertos têm seus preços ditados pelas curvas de oferta e demanda. Minérios, produtos agrícolas e petróleo são bons exemplos. Compras podem ser antecipadas em função de aumentos previstos nos preços. Isto acaba criando estoques que tem que ser gerenciados.</p>

                            <br><br><!-- SubSubTítulo -->
                            <p class="SubSubTitulo">Proteção Contra Oscilações na Demanda ou no Tempo de Ressuprimento</p>
                            <hr>

                            <p> Na maioria das ocasiões, não é possível conhecer com certeza as demandas de produtos ou os tempos de ressuprimento no sistema logístico. Para garantir disponibilidade de produto, deve-se manter um estoque adicional (estoque de segurança). Estoques de segurança são adicionados aos estoques regulares para atender as necessidades de produção ou de consumo.</p>

                            <br><br><!-- SubSubTítulo -->
                            <p class="SubSubTitulo">Proteção Contra Contingências</p>
                            <hr>

                            <p> Greves, incêndios e inundações são apenas algumas das contingências que podem atingir uma organização. Manter estoques de reserva é uma maneira de garantir o fornecimento normal nessas ocasiões.</p>

                            <p>Quando a taxa de fornecimento excede a taxa de demanda, o estoque aumenta; quando a taxa de demanda excede a taxa de fornecimento, o estoque diminui. Assim, se uma operação conseguir controlar as taxas de fornecimento e de demanda, também conseguirá reduzir seus níveis de estoque. O estoque é criado para compensar diferenças de ritmo entre fornecimento e demanda.</p>

                            <br><br><!-- SubSubTítulo -->
                            <p class="SubSubTitulo">Tipos de Estoque</p>
                            <hr>

                            <p>O desequilíbrio entre as taxas de fornecimento e de demanda leva a operação a diferentes tipos de estoque ao longo da cadeia produtiva.</p>

                            <p><strong class="CorVerdeClaroEstado">Estoque de segurança:</strong> Compensa as incertezas relacionadas ao fornecimento e demanda. Por exemplo, uma operação de varejo não consegue prever exatamente a demanda, mesmo que tenha uma ideia de seu nível mais provável. Portanto, sempre vai fazer pedidos em maiores quantidades para manter um nível mínimo de estoque para atender sua demanda, caso seja maior do que a esperada. Da mesma forma, os estoques podem compensar as incertezas do fornecimento e a falta de confiabilidade de alguns fornecedores ou empresas de transporte.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <p><strong class="CorVerdeClaroEstado">Estoque de antecipação:</strong> Utilizado quando as flutuações da demanda são significativas, mas previsíveis, ou quando as variações de fornecimento são significativas, como para produtos de época, por exemplo: ovos de chocolate na páscoa, artigos da ceia de natal, etc.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <p><strong class="CorVerdeClaroEstado">Estoques de canal (de distribuição):</strong> Esse tipo de estoque existe quando o material não pode ser transportado instantaneamente entre o ponto de fornecimento e o ponto de demanda. Por exemplo: se uma loja de varejo encomenda itens de um de seus fornecedores, o fornecedor vai alocar estoque para a loja de varejo em seu próprio armazém, embalá-lo, carregá-lo em seus caminhões, transportá-lo para o seu destino e descarregá-lo no estoque do varejista. Do momento em que o estoque é alocado (e, portanto, passa a estar indisponível para qualquer outro consumidor) até o momento em que se torna disponível para a loja de varejo, ele passa a ser estoque no canal de distribuição.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <p>Desta forma, vemos que não existe a possibilidade de ignorar os estoques, pois eles são gerados pelo próprio processo de deslocamento físico dos produtos entre o produtor e o consumidor final e são necessários para suprir eventuais irregularidades que poderão ocorrer durante esse ciclo.</p>

                            <br><br><!-- SubTitulo -->
                            <p class="SubTitulo">Custos Relacionados Aos Estoques</p>
                            <hr>

                            <p>O aumento ou redução nos custos de estocagem e armazenagem, muitas vezes é uma variável que não se coloca de modo muito claro. O fato é que armazenar mercadorias e bens envolve uma série de despesas que, muitas vezes, não são contabilizadas e consideradas por organizações em geral, e podem acarretar tenebrosos prejuízos com os quais os gestores sequer contavam num primeiro momento. Manter produtos parados, além de todos esses custos, envolve um grande risco em algumas situações e ter consciência de tudo isso pode ampliar seus resultados e reduzir as chances de danos para a organização.</p>

                            <p>Em uma primeira análise, podemos distinguir dois tipos de custo decorrentes da existência ou não de estoques: o primeiro é seu próprio custo de manutenção e o segundo, mais ligado ao “custo de oportunidade” sob os olhos da economia, seria o custo da falta de estoques.</p>

                            <p>O custo de manutenção de estoques é algo caro e cada vez menos desejável. Rotinas logísticas de entrega just-in-time e processos integrados que amarram a produção de bens à venda e escoamento dos mesmos visam cada dia mais, reduzir a necessidade de estoques e inventários físicos. Mercadoria parada, na maioria dos casos, é também dinheiro parado.</p>

                            <p>Os custos de manutenção de estoques podem ser subdivididos em diferentes classes:</p>

                            <ul class="none Texto">
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Custo de espaço:</strong> desde simples contratos de aluguel de armazéns e galpões até cobranças por metro quadrado ocupado, no caso de contratos de terceirização, muitas vezes esses custos também são atrelados aos períodos de tempo a serem utilizados.</li>
                                <br>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Custo de capital:</strong> refere-se ao capital diretamente investido no estoque e também do custo de oportunidade de não tê-lo investido em outra aplicação qualquer.</li>
                                <br>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Custo de pessoal envolvido:</strong> é o custo mensal de toda a mão de obra envolvida em atividades diretamente relacionadas aos estoques, tais como: o pessoal de manuseio, controle e gerenciamento, inclusive encargos trabalhistas.</li>
                                <br>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Custos de equipamento e manutenção:</strong> São as despesas mensais para manter os estoques, incluindo a depreciação dos equipamentos, maquinários ali utilizados e suas despesas de manutenção.</li>
                                <br>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Custo de serviço:</strong> enquadram diversas taxas cobradas por serviços de gestão das mais variadas naturezas, além de impostos decorrentes da armazenagem e uso do espaço e também seguros da carga ali mantida.</li>
                                <br>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Custo de Pedido:</strong> Cada vez que uma requisição ou pedido é emitido, incorrem custos fixos e variáveis referentes a esse processo. Os custos fixos são os associados aos salários do pessoal envolvido na emissão dos pedidos e não são afetados pela política existente de estoque. Os custos variáveis consistem nas fichas de pedidos e nos processos de enviar esses pedidos aos fornecedores, bem como, todos os recursos necessários para tal procedimento. Portanto, o custo de pedido está diretamente determinado com base no volume das requisições ou pedidos que ocorrem no período.</li>
                                <br>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Custo de risco:</strong> manter estoques pode causar enormes prejuízos. Primeiro, no caso de mercadorias perecíveis, a manutenção de altos estoques pode gerar excesso de produtos para posterior distribuição, gerando sobre-ofertas e fazendo com que esses itens estraguem ou sejam desperdiçados antes de repassados ao consumidor. Riscos ainda afligem aqueles que mantêm produtos de rápida evolução, como celulares – o lançamento de novos modelos pode reduzir o valor de revenda ou mesmo tornar completamente obsoletos produtos estocados em excesso.</li>
                            </ul>


                            <p>Também se associa aos estoques o custo da falta de produtos. Ainda que isso possa soar estranho, manter produtos insuficientes em estoque gera não apenas o custo decorrente da perda de ofertas, mas também custos excedentes decorrentes de requisições fechadas que não podem ser atendidas, por indisponibilidade de produtos. Para atender pedidos já efetuados em atraso, além do desgaste das relações com o consumidor.</p>

                            <!-- SubTitulo -->
                            <p class="SubTitulo">Tipos de Demanda de Materiais e Sua Relação com os Estoques</p>
                            <hr>

                            <p>Os níveis de estoque podem ser controlados, adotando-se diversos tipos de critérios. Se considerarmos a natureza de sua demanda, teremos as seguintes classificações:</p>

                            <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong class="CorVerdeClaroEstado">Demanda permanente:</strong> Muitos produtos têm ciclo de vida muito longo, de forma que parecem que vão ser comercializados para sempre. Exemplo: Maisena e Nescau, entre outros. Estoques para demanda permanente são aqueles que requerem ressuprimento contínuo ou periódico. O controle de estoques orienta-se para:</p>

                            <ol class="Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"> A previsão de demanda de cada item do inventário,</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"> A determinação de quando o ressuprimento deve ser efetuado e</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"> Definir o tamanho do lote de ressuprimento.</li>
                            </ol>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong class="CorVerdeClaroEstado">Demanda sazonal (somente em determinada época do ano):</strong> Grande número de produtos tem tal sazonalidade na demanda que não podem ser controlados da mesma forma que produtos com demanda permanente. A administração dos níveis de estoque de produtos com elevada sazonalidade está associada com a previsão acurada do nível de demanda futuro. É necessário não apenas uma previsão precisa da quantidade a ser requisitada, mas também da época na qual ocorrerá o pico. Assim, o estoque acompanha a previsão, estando sujeito aos erros intrínsecos à mesma.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->


                            <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong class="CorVerdeClaroEstado">Demanda irregular:</strong> Alguns produtos têm comportamento tão irregular que a projeção de suas demandas é muito difícil. Um dos melhores exemplos de irregularidade no comportamento da demanda nos últimos anos é o caso de automóveis pequenos versus grandes. O controle de estoques para produtos com demanda irregular está amarrado com a previsão precisa de consumo, principalmente quando o comportamento irregular está combinado com tempos de ressuprimento muito longos ou pouco flexíveis.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->


                            <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong class="CorVerdeClaroEstado">Demanda em declínio:</strong> Algum dia, a demanda de um produto acaba e, então, um produto novo vem em seu lugar. O declínio da demanda é geralmente gradual e os estoques excedentes podem ser diminuídos pouco a pouco. Para alguns produtos, entretanto, o final ocorre subitamente, mas de modo planejado. Caso típico é o de peças de reposição para produtos com vida útil planejada ou produtos que não são vendidos há muito tempo, mas que ainda estão em uso.</p>

                            <p>O problema aqui se concentra muito menos em prever a demanda por peças de reposição e mais em planejar quando e quanto deve ser estocado período a período (semana, mês ou ano). Deve-se, entretanto, prever a demanda para todos os períodos até o final das vendas.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->



                            <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong class="CorVerdeClaroEstado">Demanda derivada:</strong> Para alguns produtos, sua demanda é conhecida se a demanda dos produtos acabados puder ser determinada. Por exemplo, a partir da previsão de demanda de automóveis novos pode-se calcular facilmente a necessidade de pneus. A demanda por pneus é dita derivada.</p>

                            <p>O estoque necessário para atender uma demanda derivada também é derivado. Quanto e quando comprar ou produzir pode ser determinado com precisão a partir da demanda por produtos acabados. Ela serve como base para efetuar a programação final de compras.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <!-- SubTitulo -->
                            <p class="SubTitulo">Rotatividade dos Estoques</p>
                            <hr>

                            <p>A Rotatividade de Estoque é um tipo de indicador que demonstra o desempenho de um Estoque. A Rotatividade de Estoque serve para medir, de uma forma padronizada, a qualidade de um estoque. O indicador de rotatividade de estoque pode ser aplicado a qualquer tipo de estoque, independente da sua complexidade ou tamanho.</p>

                            <p>O resultado apresentado pela rotatividade de estoque representa a quantidade de vezes que cada um dos itens, foi renovado dentro de um determinado período. Dizer que a rotatividade de um estoque foi 1, durante um mês, significa dizer que tudo que tinha no estoque foi consumido e o estoque foi reposto por produtos novos. O cálculo da rotatividade de estoque é bastante simples, durante um determinado período, somamos tudo o que foi consumido, então, divide pela média de estoque.</p>


                            <p>Assim, se tivermos em média um estoque de 2 mil unidades, consumimos mil e compramos outras mil, tivemos um giro de 0,5; isto é, metade do estoque foi renovada. O resultado final do giro de estoque deve ser interpretado caso a caso, porém, de uma forma geral, podemos dizer que quanto maior for o giro, melhor.</p>

                            <p>Vejamos um exemplo:</p>

                            <ol type="1)" class="Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"> Imagine um estoque de bebidas, com um único tipo de bebida. Vamos supor que no início do mês, tenhamos 10 garrafas em estoque.</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"> Durante alguns dias, 5 garrafas foram consumidas.</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"> Notando a diminuição do nível de estoque, o Fornecedor foi acionado e foram compradas mais 10 garrafas.</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"> O mês continuou e mais 5 garrafas foram vendidas, totalizando 10 vendas no mês.</li>
                            </ol>

                            <p>Dessa forma, o mês terminou com 10 garrafas no estoque. Como o mês iniciou com 10 garrafas e terminou com 10 garrafas, podemos dizer que a média de estoque neste mês foi de 10 garrafas.</p>

                            <p>Sendo assim, podemos calcular o Giro de Estoque como sendo o consumo médio do período dividido pela média de estoque, isto é:</p>

                            <p> Período = 1 (mês),</p>

                            <table class="table table-bordered text-center" style="width: 40% !important; margin: auto; border-color: #44833d; margin-bottom: 25px">
                                <tbody>
                                    <tr>
                                        <td>Consumo médio =</td>
                                        <td class="text-center">5 + 5 / 1<br></td>
                                        <td>= 10</td>
                                    </tr>
                                    <tr>
                                        <td>Média de Estoque =</td>
                                        <td class="text-center">10 + 10 / 2<br></td>
                                        <td>= 10</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>10 dividido por 10, que é igual a 1. Nesse caso, a Rotatividade de Estoque igual a 1 significa que todos os produtos foram renovados 1 vez durante o mês. Se o número fosse menor do que 1, teríamos uma indicação de que alguns dos produtos que iniciaram o mês na prateleira, ainda estão lá.</p>

                            <p>Um fator que costuma gerar dúvidas ao se calcular a rotatividade de estoque é o cálculo da média de estoque. Nesse caso, a média de estoque é calculada pela média entre o estoque no início e no final do mês, ou simplesmente somando o estoque percebido no início com o estoque do fim do período e o resultado, se divide por 2.</p>

                            <p>Nem sempre o estoque é formado por um único tipo de produto, muitas vezes, um estoque é composto por materiais pequenos e grandes, caros e baratos, ai fica a dúvida: como calcular a rotatividade do estoque total? Nesse caso, podemos calcular de várias formas, uma delas é ao invés de se utilizar a quantidade de produtos, utilizar o custo total, assim, o cálculo da rotatividade de estoque fica sendo o custo total do consumo dividido pela média do custo do estoque.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->


                            <p>Outras questões também devem ser consideradas quando se usa a rotatividade de estoque como um indicador padrão para a gestão de estoques:</p>

                            <ol type="a)" class="Texto">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> A disponibilidade de capital para investir em estoque é que vai determinar a taxa de rotatividade-padrão.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Não se devem utilizar taxas de rotatividade iguais para materiais de preços diferenciados. Deve-se usar de preferência a classificação ABC, indicando cada classe com seu índice; se não for suficiente, deve ser subdividida em D, E etc.;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> Baseado na política da organização, no planejamento das operações e na previsão de consumo, deve ser determinada a rotatividade que atenda às necessidades ao menor custo total;</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"> Deve ser estabelecida uma periodicidade para comparação entre a rotatividade padrão e a rotatividade real.</li>
                            </ol>

                            <p>Dentre as tantas vantagens de se ter um estoque com alta rotatividade, podemos citar:</p>

                            <ol type="a)" class="Texto">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> O produto não envelhece na prateleira.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Não precisa de muito espaço para armazenamento.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> O pagamento ao Fornecedor é fracionado.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"> Em caso de acidente, incêndio ou roubo, perde-se menos; etc.</li>
                            </ol>

                            <!-- SubTitulo -->
                            <p class="SubTitulo">Ressuprimento Dos Estoques</p>
                            <hr>

                            <p>Diante dos diversos métodos existentes para o controle de estoques, os mais tradicionalmente utilizados são:</p>

                            <p>Métodos de empurrar estoques (Push): Um método popular de gestão de estoque, especialmente quando há mais de um depósito no sistema de distribuição, é alocar estoques aos armazéns conforme a necessidade esperada nos mesmos. Este enfoque é particularmente vantajoso quando os lotes econômicos de produção ou compra são maiores que as necessidades de curto prazo dos depósitos. As questões básicas que o método deve responder são:</p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quanto estoque deve ser enviado para cada depósito?</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Como alocar as sobras do balanço entre oferta (produção) e demanda entre os diversos armazéns?</li>
                            </ul>

                            <p>Método de puxar estoques (Pull): Pode-se manter controle mais apurado dos estoques se cada local de armazenagem for tratado separadamente dos outros. Apenas o estoque necessário para atender a demanda daquele ponto precisa ser mantido. Assim, as quantidades mantidas podem ser menores no método de puxar estoques do que no método de empurrar.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <p>O nosso interesse neste curso está focalizado no método de puxar estoques sendo o mais adequado para a atividade pública, uma vez que os armazéns na Administração Pública não são Centros de Distribuição e nem esta atua como canal de distribuição de qualquer fabricante.</p>

                            <p>Nesse contexto a Administração Pública é o cliente e faz as suas “Ordens de Compras” com base no “<strong>Planejamento de Compras no Sistema de Registro de Preço</strong>” o qual veremos com mais detalhes no item 4.5.4 adiante.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <p>Então dois fatores são determinantes para um bom sistema de controle a partir do método de puxar estoque, são eles: o estoque mínimo e o tempo de ressuprimento.</p>

                            <!-- SubSubTitulo -->
                            <p class="SubSubTitulo">Estoque Mínimo - EMIN</p>
                            <hr>

                            <p>A determinação do estoque mínimo é uma das mais importantes informações para a administração do estoque. Essa importância está diretamente ligada ao grau de imobilização financeira da organização. O estoque mínimo, também chamado de estoque de segurança, por definição, é a quantidade mínima que deve existir em estoque, que se destina a cobrir eventuais atrasos no ressuprimento, objetivando a garantia do funcionamento ininterrupto e eficiente das operações.</p>

                            <p>Entre as causas que ocasionam essas faltas, podemos citar:</p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Oscilação de consumo,</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Oscilação nas épocas de aquisição (atraso no tempo de reposição),</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Variação na qualidade, quando o controle de qualidade rejeita um lote,</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Remessas por parte do fornecedor, divergentes do solicitado,</li>
                                <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Diferenças de estoque.</li>
                            </ul>

                            <p>A importância do estoque mínimo é a chave para o adequado estabelecimento do ponto de pedido. De maneira utópica, o estoque mínimo poderia ser tão alto, que jamais haveria, para todas as finalidades práticas, ocasião de falta de material em estoque.</p>

                            <p>Entretanto, desde que, em média, a quantidade de material representada pela margem de segurança não seja usada e, portanto, torne-se permanente no estoque, a armazenagem e os outros custos seriam elevados. E, ao contrário, estabelecer uma margem de segurança demasiado baixa acarretaria custos de ruptura, que são os custos de não possuir os materiais disponíveis quando necessários.</p>

                            <p>O estabelecimento de uma margem de segurança ou estoque mínimo é o risco que a organização está disposta a assumir com relação à ocorrência de falta de estoque. No item 4.4.3 veremos alguns métodos de cálculo do estoque mínimo.</p>

                            <!-- SubSubTitulo -->
                            <p class="SubSubTitulo">Tempo de Ressuprimento TR</p>
                            <hr>

                            <p>É uma das informações básicas para calcular o estoque mínimo, o tempo de ressuprimento é o tempo gasto desde a verificação de que o estoque precisa ser reposto até a chegada efetiva do material no almoxarifado. Esse tempo pode ser dividido em três partes:</p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Tempo de emissão do pedido: É o tempo que leva desde a emissão do pedido de compra até ele chegar ao fornecedor.</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Tempo de preparação do pedido: É o tempo que leva desde o fornecedor fabricar os produtos, separar os produtos, emitir faturamento até deixá-los em condições de serem transportados.</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Tempo de transporte: É o tempo que leva da saída do fornecedor até o recebimento do material no almoxarifado.</li>
                            </ul>

                            <p>Em virtude de sua grande importância, o tempo de ressuprimento deve ser determinado de modo mais realista possível, pois as variações ocorridas durante esse tempo podem alterar toda a estrutura do sistema de estoque. Também deve ser observado que o tempo de ressuprimento deve ser estimado proporcional ao consumo, ou seja, se o consumo for mensal e o tempo de ressuprimento for em dias este deve ser fracionado tendo como denominador a base mensal.</p>

                            <!-- Exemplo -->
                            <div class="ExemploCaixa">
                                <p class="ExemploTitulo"> Exemplo</p>
                                <div class="ExemploTexto">
                                    <p>Consumo Médio em Meses e Tempo de Ressuprimento em 45 dias, então:</p>
                                    <center>
                                        <p>TR = 45/30.<br>TR = 1,5.</p>
                                    </center>
                                </div>
                            </div>

                            <!-- SubSubTitulo -->
                            <p class="SubSubTitulo">Métodos de Cálculo do Estoque Mínimo</p>
                            <hr>

                            <div class="card">
                                <div class="card-body">
                                    <p><strong>a) Fórmula Simples:</strong></p>

                                    <p><strong>EMIN = C x K</strong><br> onde,<br> <strong>EMIN = Estoque mínimo</strong></p>

                                    <p>C = Consumo médio mensal</p>

                                    <p>K = Fator de segurança arbitrário com o qual se deseja garantia contra um risco de ruptura.</p>

                                    <p>Como foi dito o fator K é arbitrário ele é proporcional ao grau de atendimento desejado para o item. Por exemplo: se quisermos que determinado material tenha um grau de atendimento de 90%, ou seja, queremos uma garantia de que somente 10% das vezes o estoque deste material esteja a zero, sabendo que o consumo mensal é 60 unidades, o estoque mínimo será:</p>

                                    <p><strong>EMIN = 60 x 0,9</strong></p>

                                    <p><strong>EMIN = 54 unidades</strong></p>

                                    <br><br>
                                    <p><strong>b) Método da porcentagem de consumo:</strong></p>

                                    <p>Esse método considera os consumos passados, e são medidos em uma tabela de distribuição acumulativa da seguinte maneira:</p>

                                    <p>&nbsp;&nbsp;b.1) O consumo diário do ano anterior de determinado material foi de 90, 80, 70, 65, 60, 50, 40, 30, 20 unidades</p>

                                    <p>&nbsp;&nbsp;b.2) O número de dias em que ocorreu esse consumo foram: 4, 8,12, 28, 49, 80, 110, 44 e 30 respectivamente.</p>


                                    <p>Analisando os dados distribuídos na tabela podemos ver que o consumo médio é aproximadamente de 46 unidades por dia (resultado de 16920/365). Um consumo de 70 unidades por dia só ocorrerá em aproximadamente 10% das vezes. Considerando esse número de peças como consumo máximo, o estoque mínimo seria:</p>

                                    <p><strong>EMIN = (C. Max - C.Médio) x TR</strong></p>

                                    <p>Se o TR (tempo de ressuprimento) for de 10 dias, o estoque mínimo para esse caso será:</p>

                                    <p><strong>EMIN = (70 – 46) x 10</strong></p>

                                    <p><strong>EMIN = 24 x10 = 240</strong></p>

                                    <p>Este método só poderá ser aplicado quando o tempo de ressuprimento TR não for variável.</p>
                                </div>
                            </div>

                            <!-- SubSubTitulo -->
                            <p class="SubSubTitulo">O Planejamento de Compras e o Sistema de Registro de Preço</p>
                            <hr>

                            <p>A função de suprimentos é essencial e tem por finalidade prover as necessidades de materiais de consumo, planeja-las quantitativamente e satisfaze-las no momento certo e nas quantidades corretas, verificar a efetividade do recebimento e providenciar o armazenamento. Também é fundamental a qualidade dos materiais que devem ser de acordo com as exigências e atender ao propósito a que se destinam. A inadequação de especificações, prazos, desempenho e preços causam transtorno ao processo operacional com atrasos, não atendimento da qualidade, elevação de custos e insatisfação dos consumidores dos materiais.</p>

                            <p>A função de suprimentos é uma atividade de apoio fundamental ao processo produtivo, suprindo-o com todas as necessidades de materiais. Além dessa atuação primordial, também é um excelente e substancial sistema de redução de custos de uma organização, por meio de negociações de preços, na busca de materiais alternativos e de incessante desenvolvimento de novos fornecedores. A visão moderna de suprimentos está ligada ao sistema logístico como atividades-pares envolvidas em ações estritamente homogêneas, voltada para a finalidade comum de operação efetiva e posição competitiva no cenário.</p>

                            <p>São objetivos da função de suprimentos:</p>

                            <ol type="a" class="Texto">
                                <li> Permitir continuidade de suprimentos para o perfeito fluxo produtivo.</li>
                                <li> Coordenar os fluxos com o mínimo de gastos em estoques e adequado ao cumprimento dos programas de produção.</li>
                                <li> Comprar materiais e produtos aos mais baixos custos, dentro das especificações predeterminadas em qualidade, prazos e preços.</li>
                                <li> Evitar desperdícios e obsolescência de materiais por meio de avaliação e percepção do mercado fornecedor.</li>
                                <li> Permitir a organização uma posição de destaque, mediante negociações justas e de credibilidade.</li>
                                <li> Manter bom relacionamento com fornecedores para garantir contínuo suprimento. </li>
                            </ol>

                            <p>O planejamento de compras por intermédio do Sistema de Registro de Preços – SRP trata de um conjunto de procedimentos para seleção de proposta mais vantajosa visando o registro formal de preços para futuras e eventuais contratações de bens, produtos e serviços. O Sistema de Registro de Preço é regulamentado pelo art. 15 da lei federal nº 8.666 de 21 de Junho de 1993 e pelo art. 11 da lei federal nº 10.520 de 17 de julho de 2002.</p>

                            <p>O SRP é adequado para compra de bens, materiais e serviços que apresentem as seguintes características:</p>

                            <ul class="none Texto">
                                <li>Necessitem de contratações frequentes;</li>
                                <li>Quando for conveniente para administração a contratação com entrega parcelada;</li>
                                <li>Quando for conveniente para administração a contratação para mais de um órgão ou entidade da Administração Pública.</li>
                                <li>Quando pela natureza do objeto não for possível definir previamente o quantitativo exato a ser demandado pela administração.</li>
                            </ul>

                            <p>Considerando essas quatro características, é efetuado um único processo licitatório por intermédio do Órgão Central Gestor de Compras, contemplando vários órgãos e entidades do ente federativo, cujo objeto da licitação é um determinado bem, material ou serviço que terá seu preço fixado por um ano com uma estimativa de consumo para esse período, onde os órgão e entidades participantes do registro de preço poderão efetuar suas Ordens de Compra de forma parcelada à medida que lhe convier, sem que necessariamente se obrigue a adquirir o total da quantidade estimada para o período.</p>

                            <p>O documento que regula essa modalidade de aquisição é a Ata de Registro de preços onde são registrados: o Órgão Gestor os Órgãos e Entidades participantes, a especificação dos bens, materiais ou serviços, os preços unitários, a unidade de medida, as quantidades, a marca, o fornecedor detentor do registro e as condições a serem observadas nas possíveis contratações, conforme as disposições contidas no instrumento convocatório (Edital de Licitação) e as respectivas propostas dos fornecedores licitantes.</p>

                            <p>Cada Órgão e Entidade participante do Registro de Preço efetuarão seu contrato individualmente pela estimativa registrada na Ata de Registro de Preço e à medida que necessitar do Bem, Material ou Serviço emitirá um documento denominado “Ordem de Compra” para formalizar o quantitativo exato que irá adquirir.</p>

                            <p>O Órgão Gestor da Ata de Registro de Preço irá monitorar durante o período o saldo da Ata de Registro de Preço apurando a efetividade entre o quantitativo que foi estimado e o que foi realmente adquirido. Assim como negociará durante a vigência da Ata as ocasionais necessidades de realinhamento de preço decorrente de desequilíbrio econômico-financeiro dos contratos.</p>

                            <p>Evidentemente que para que tal modalidade de aquisição tenha credibilidade junto ao mercado fornecedor, e efetivamente os preços fixados após o processo licitatório sejam preços de mercado configurando assim a aquisição mais vantajosa para a administração pública, algumas premissas tornam-se fundamentais:</p>

                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <br>
                            <!-- Início Section Modal-->
                            <section id="Modal">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Seleção e monitoramento adequado dos fornecedores
                                    </button>
                                    <!-- Modal -->

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>Por se tratar de compras corporativas onde o volume adquirido é substancial, mesmo que a entrega ocorra de forma parcelada e em vários órgãos e entidades participantes do Registro de Preço. O fornecedor detentor do registro de preço de determinado bem ou material, necessita manter certo nível de estoque para atender eventualmente as Ordens de Compras dos participantes sem que haja risco de descontinuidade nas operações em decorrência de ocasionais faltas de material por parte do fornecedor. Nesse caso é fundamental uma boa elaboração do instrumento convocatório da licitação, considerando o aspecto econômico-financeiro que identifique aqueles fornecedores que possuem investimentos em estoques compatíveis com a demanda estimada. Outra questão é o registro histórico dos fornecimentos anteriores e durante a execução da Ata referente aos quesitos de quantidade e prazo de entrega em conformidade com a Ordem de Compra de forma que se possa estabelecer uma relação entre a capacidade e o nível de atendimento do fornecedor.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
                                        Bom nível de acerto na previsão de consumo
                                    </button>
                                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p> A modalidade de Registro de Preço funciona semelhante à operação de ECR - Efficient Customer Response (Resposta Eficiente ao Consumidor) muito comum no setor supermercadista, onde o comprador tem garantido no fornecedor um determinado nível de estoque equivalente à flutuação da sua demanda e efetua a Ordem de Compra somente para uma quantidade que irá consumir em um curto período de tempo. Na verdade o que ocorre é que o estoque está sendo puxado de trás ao longo da Cadeia de Suprimentos onde a maior mobilização de recursos financeiros de capital para investimentos em estoque fica a cargo do fornecedor. Para que isso funcione de forma satisfatória é necessário uma conduta “ganha-ganha” (ganha comprador e ganha fornecedor), favorecendo um relacionamento comercial saudável e de longo prazo, portanto é fundamental que o planejamento de compras seja o mais realista possível com uma variação suportável entre previsão e consumo para que os estoques não fiquem encalhados no armazém do fornecedor fazendo com que a ineficiência de um componente da cadeia seja transferida para outro, não favorecendo uma relação satisfatória e duradoura.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
                                        Gestão sistemática da Ata de Registro de Preço
                                    </button>
                                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p> Por se tratar de uma operação de preço fixado por um período determinado sem a obrigatoriedade de compra por parte do Órgão e Entidade participante, a operação requer o monitoramento sistemático sobre o saldo das Atas de Registro de Preço e o balanceamento entre os saldos de cada participante de forma a remanejar entre estes os saldos remanescentes daqueles que não efetivaram suas previsões para aqueles participantes que se encontram com saldos esgotados. Assim como apurar as distorções significativas entre previsto e realizado de forma a disponibilizar mecanismos para melhorar o planejamento de compras dos participantes e consequentemente melhor o planejamento de compras.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Fim section -->

                            <p>Na figura a seguir, encontra-se representado o fluxograma do planejamento de compras no Sistema de Registro de Preço.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                    <p class="TituloFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
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
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <!-- SubSubTitulo -->
                            <p class="SubSubTitulo">Métodos de Reposição de Estoques</p>
                            <hr>

                            <p>Uma vez iniciada a Ata de Registro de Preço e os seus respectivos contratos, poderão ser emitidas as Ordens de Compras correspondentes aos pedidos de materiais para estoque por intermédio do método de “puxar estoque”.</p>

                            <p>a) Estoque para demanda. Um dos sistemas de puxar estoque mais simples e comum é o método de estoque para demanda. Muitos métodos de fácil entendimento, apesar de não serem os teoricamente mais eficientes, são os melhores na prática, pois são sempre bem executados.</p>

                            <p>A idéia básica do método é manter os níveis de estoque proporcionais à sua demanda.</p>

                            <p>Procedimentos:</p>

                            <ol class="Texto">
                                <li>1) Deve-se verificar a duração do tempo de ressuprimento para o item considerado.</li>
                                    <li>2) Deve-se fazer uma previsão da demanda do item a cada período.</li>
                                    <li>3) Deve-se adicionar um estoque de segurança para compensar as incertezas da previsão da demanda e do tempo de ressuprimento.</li>
                                    <li>4) Considerando essas informações projetar o nível de demanda que o estoque deverá cobrir e emitir as Ordens de Compra conforme estas projeções.</li>
                            </ol>

                            <p>b) Ponto de Reposição - PR: Conhecido, também, como Método do Estoque Mínimo, objetiva reduzir os custos de manutenção de estoques, mas sem correr o risco de não se atender a demanda. O objetivo é encontrar o nível ótimo de estoques para um determinado produto.</p>

                            <p>Para isso, é necessário que o estoque esteja devidamente controlado e que determine o ponto de reposição.</p>

                            <p>A finalidade do ponto de reposição é iniciar o processo de ressuprimento com segurança suficiente para que não ocorra a falta do material. O PR é calculado multiplicando-se a taxa de consumo pelo tempo de ressuprimento.</p>

                            <p>Pode ser determinado pela seguinte fórmula:</p>
                            
                            <p>PR = C x TR + EMIN</p>
                            
                            <p>Onde: PR = Ponto de Reposição.</p>
                            
                            <p>C = Consumo Médio Mensal.</p>
                            
                            <p>TR = Tempo de Ressuprimento</p>
                            
                            <p>EMIN = Estoque Mínimo.</p>

                            <p>Procedimentos:</p>
                            
                            <p>1) Identificar o Estoque Total ET: ET = Estoque Físico + Saldo de Fornecimento + Estoque em Inspeção</p>
                            
                            <p>2) Calcular o Estoque Mínimo (usando a fórmula simples): EMIN = C x K</p>
                            
                            <p>Onde:</p>
                            
                            <p>C = Consumo Médio</p>
                            
                            <p>K = Fator de segurança proporcional ao grau de atendimento desejado com relação ao Consumo Médio em percentual.</p>
                            
                            <p>3) Estimar o TR com base na média de tempo de atendimento da série de Ordens de Compra passadas.</p>
                            
                            <p>4) Aplicar a fórmula do PR.</p>
                            
                            <p>5) Monitorar o nível de Estoque Total e quando o ET atingir o PR efetuar a Ordem de Compra com o quantitativo resultante da fórmula.</p>
                            

















                            <br><br>
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });
                                $('#myModal').on('shown.bs.modal', function() {
                                    $('#myInput').trigger('focus')
                                })
                            </script>

                            <!-- FIM SCRIPT LIGHTBOX -->

                            <!-- Botões de navegação -->

                            <div class="text-center">
                                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <!-- Fim Botões de navegação -->

                            <!-- FIM DIV col-md-10 -->
                        </div>
                        <div class="col-md-1"></div>
                    </div><!--  FIM ROW -->
                    <!--  FIM PAGE TITULO -->
                </div>
                <!-- FIM DIV CONTEINE  -->
            </div>
            <!--FIM SELECTION-->
        </section>





    </div> <!--  FIM DIV MAIN -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>