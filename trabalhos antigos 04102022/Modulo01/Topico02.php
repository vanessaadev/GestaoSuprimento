<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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
                            <h2 class="Titulo">Diferenciação Entre Material de Consumo e Material Permanente</h2>
                            <hr>

                            <div class="bd-callout bd-callout-primary">
                                <p><strong>Objetivo:</strong> Compreender Os critérios de diferenciação entre material de consumo e material permanente estabelecidos pela Portaria Nº 448/2002 da Secretaria do Tesouro Nacional, de forma a classificar adequadamente as despesas com materiais.</p>
                            </div>

                            <p>Como regra geral, diferencia-se material de consumo e material permanente tomando como referência a durabilidade dentro de um período de dois anos.</p>

                            <!-- caixa em movimento para a direita com icones na esquerda -->
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>Material de Consumo:</strong> É aquele que, em razão de seu uso corrente, perde normalmente sua identidade física e/ou tem sua utilização a dois anos.</p>
                                    <p><strong>Material Permanente:</strong> É aquele que, em razão de seu uso corrente, não perde sua identidade física, mesmo quando incorporado a outro bem, e/ou apresenta uma durabilidade superior a dois anos.</p>
                                </div>
                            </div>

                            <p>Contudo, a Portaria STN n° 448/2002, assim como o Manual de Contabilidade Aplicado ao Setor Público – MCASP, ao interpretar a referida regra considera que alguns bens, apesar de terem durabilidade superior a dois anos, podem sofrer um desgaste significativo com o uso, ser perecíveis, frágeis ou mesmo destinados à incorporação ou transformação de outros bens, fator que os enquadraria como bens de consumo.</p>

                            <p>Dessa forma, devem-se analisar a adoção de cinco parâmetros excludentes para a identificação do material permanente, sendo classificado como material de consumo aquele que se enquadrar em um ou mais itens dos que se seguem:</p>

                            <ol type="I" class="Texto">
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><strong>Durabilidade</strong> - quando o material em uso normal perde ou tem reduzidas as suas condições de funcionamento, no prazo máximo de dois anos;</li>
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><strong>Fragilidade</strong> – material cuja estrutura esteja sujeita a modificação, por ser quebradiço ou deformável, caracterizando-se pela irrecuperabilidade e/ou perda de sua identidade ou funcionalidade;</li>
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"><strong>Perecibilidade</strong> – material sujeito a modificação (químicas ou físicas) ou que se deteriora ou perde sua característica normal de uso;</li>
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s"><strong>Incorporabilidade</strong> - quando destinado à incorporação a outro bem, não podendo ser retirado sem prejuízo das características físicas e funcionais do principal;</li>
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="1.9s"><strong>Transformabilidade</strong> - quando adquirido para fim de transformação.</li>
                                <br>
                            </ol>

                            <!-- SubTítulo -->
                            <p class="SubTitulo">Parâmetros Excludentes: Análise de Casos e Empregos Específicos</p>
                            <hr>

                            <p>Alguns bens públicos geram dúvidas quanto à sua correta classificação, nesse caso deverão ser observadas algumas características para que possam ser classificados adequadamente conforme o tipo e condições de uso a que se destinam, podendo estes serem classificados como bem permanente ou de consumo, como por exemplos:</p>

                            <ol type="a" class="Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"> <strong>Colchão:</strong> Via de regra, é classificado como um bem permanente. Contudo, se adquirido para utilização em um equipamento prisional ou em um hospital de emergência, este poderá ter deterioração acelerada com perda de suas características normais de uso, sendo afetado ainda por modificações físicas ou contaminações, o que permite ser enquadrado no fator excludente de perecibilidade. Nesse caso, o bem deverá ser classificado como material de consumo, e não permanente, tendo em vista a sua perecibilidade antes do prazo máximo de 2 anos.</li>
                                <br><li class="wow fadeInDown" data-wow-delay="0.6s"> <strong>Jarra de Vidro:</strong> Tem durabilidade superior a dois anos. Porém, quando adquirida para utilização em uma escola e por ser frágil, poderá perder totalmente a sua identidade, o que a torna passível de classificação como um bem de consumo, pelo critério de fragilidade.</li>
                                <br><li class="wow fadeInDown" data-wow-delay="0.9s"> <strong>Placa de memória:</strong> Em caso de substituição da placa de memória esta não pode ser classificada como uma despesa de natureza permanente, tendo em vista o critério da incorporabilidade, logo as peças adquiridas para reposição deverão ser classificadas como material de consumo.</li>
                                <br><li class="wow fadeInDown" data-wow-delay="1.3s"> <strong>Mesa para escritório:</strong> Classificada como material permanente, contudo, a aquisição de madeira e peças para a sua confecção deverá ser classificada como bem de consumo, tendo em vista o critério da transformabilidade. Por uma razão lógica, haverá a construção de um bem de capital, que, inclusive, será incorporado ao patrimônio. Dessa forma, trata-se de materiais de consumo, pelo critério da transformabilidade que contribuem para a formação de um bem de capital.</li>
                            </ol>

                            <br><br><!-- SubTítulo -->
                            <p class="SubTitulo">Exemplos de Itens Considerados Materiais Permanentes</p>
                            <hr>

                            <ol type="a" class="Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"> <strong>Aparelhos de medição e orientação:</strong> amperímetro, aparelho de medição meteorológica, balanças em geral, calibrador de pneus, cronômetro, hidrômetro, magnetômetro, manômetro, medidor de gás, níveis topográficos, osciloscópio, paquímetro, pirômetro, planímetro, psicrômetro, relógio medidor de luz, sonar, sonda, taquímetro, telêmetro, teodolito, turbímetro e afins.</li>
                                <br><li class="wow fadeInDown" data-wow-delay="0.6s"> <strong>Aparelhos e equipamentos de comunicação:</strong> antena parabólica, bloqueador telefônico, central telefônica, fac-símile, fonógrafo, PABX, rádio receptor, rádio telegrafia, rádio telex, rádio transmissor e afins.</li>
                                <br><li class="wow fadeInDown" data-wow-delay="0.9s"> <strong>Bens de informática equipamentos de processamento de dados:</strong> computador, data show, impressora, kit multimídia, micro e minicomputadores, mesa digitalizadora, modem, monitor de vídeo, scanner, urna eletrônica e afins.</li>
                                <br><li class="wow fadeInDown" data-wow-delay="1.3s"> <strong>Mobiliário em geral:</strong> armário, arquivo de aço ou madeira, balcão (tipo atendimento), banco, banqueta, cadeira, cama, carrinho fichário, carteira e banco escolar, estante de madeira ou aço, guarda-louça, guarda-roupa, mesa, penteadeira, poltrona, roupeiro, sofá e afins.</li>
                            </ol>

                            <br><br><!-- SubTítulo -->
                            <p class="SubTitulo">Exemplos de Itens Considerados Materiais de Consumo</p>
                            <hr>

                            <ol type="a" class="Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"> <strong>Material de expediente:</strong> agenda, alfinete de aço, almofada para carimbos, apagador, apontador de lápis, arquivo para disquete, bandeja para papéis, bloco para rascunho bobina papel para calculadoras, borracha, caderno, caneta, capa e processo, carimbos em geral, cartolina, classificador, clipe cola, colchete, corretivo, envelope, espátula, estêncil, estilete, extrator de grampos, fita adesiva, fita para máquina de escrever e calcular, giz, goma elástica, grafite, grampeador, grampos, guia para arquivo, guia de endereçamento postal, impressos e formulário em geral, intercalador para fichário, lacre, lápis, lapiseira, limpa tipos, livros de ata, de ponto e de protocolo, papéis, pastas em geral, percevejo, perfurador, pinça, placas de acrílico, plásticos, porta-lápis,registrador, régua, selos para correspondência, tesoura, tintas, toner, transparências e afins</li>
                                <br><li class="wow fadeInDown" data-wow-delay="0.6s"> <strong>Material de cozinha:</strong> abridor de garrafa, açucareiros, artigos de vidro e plástico, bandejas, coadores, colheres, copos, ebulidores, facas, farinheiras, fósforos, frigideiras, garfos, garrafas térmicas, paliteiros, panelas, panos de cozinha, papel alumínio, pratos, recipientes para água, suportes de copos para cafezinho, tigelas, velas, xícaras e afins.</li>
                                <br><li class="wow fadeInDown" data-wow-delay="0.9s"> <strong>Material de limpeza:</strong> álcool etílico, anticorrosivo, aparelho de barbear descartável, balde plástico, bomba para inseticida, capacho, cera, cesto para lixo, creme dental, desinfetante, desodorizante, detergente, escova de dente, escova para roupas e sapatos, espanador, esponja, estopa, flanela, inseticida, lustra-móveis, mangueira, naftalina, pá para lixo, palha de aço, panos para limpeza, papel higiênico, pasta para limpeza de utensílios, porta-sabão, removedor, rodo, sabão, sabonete, saco para lixo, saponáceo, soda cáustica, toalha de papel, vassoura e afins.</li>
                                <br><li class="wow fadeInDown" data-wow-delay="1.3s"> <strong>Combustíveis e lubrificantes:</strong> aditivos, álcool hidratado, fluido para amortecedor, fluido para transmissão hidráulica, gasolina, graxas, óleo diesel, óleo para cárter, óleo para freio hidráulico e afins.</li>
                            </ol>

                            <br>
                            <p>A diferenciação entre material de consumo e material permanente é a chave para que seja efetuado o cálculo da depreciação dos bens. Quando um material é classificado como material permanente (patrimônio) torna-se obrigatória a definição de outros parâmetros que são: a taxa de depreciação, a vida útil econômica do bem e o percentual de valor residual para que tal cálculo seja possível. O Decreto Estadual nº 31.340 de 05 de novembro de 2013 que aprova o regulamento para depreciação, amortização, exaustão, reavaliação e redução ao valor recuperável do patrimônio público do Estado do Ceará, traz em seu ANEXO I a tabela com a taxa de depreciação, vida útil e percentual de valor residual das classes de bens constantes no Catálogo de Bens, Materiais e Serviços do Governo Estadual do Ceará.</p>





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
                                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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