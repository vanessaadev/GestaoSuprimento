<?php
$page = 'Topico03';
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
                            <h2 class="Titulo">Classificação E Catalogação De Materiais</h2>
                            <hr>

                            <div class="bd-callout bd-callout-primary">
                                <p><strong>Objetivo:</strong> Compreender os benefícios de classificar os materiais para fins de padronização e manejo segundo suas características.
                            </div>

                            <p>Abordamos aqui o tema classificação e catalogação de materiais que é um assunto importante tanto para gestão dos materiais de consumo (almoxarifado) quanto para os materiais permanentes (bens móveis).</p>

                            <p>O objetivo da classificação de materiais e bens é catalogar, simplificar, especificar, normalizar, padronizar e codificar todos os materiais geralmente utilizados pela organização nas suas operações seja este material de consumo ou material permanente (bens). A necessidade de um sistema de classificação é primordial para qualquer organização, pois a sua ausência impede o controle eficiente dos estoques, a criação de procedimentos de armazenagem adequados e a correta operacionalização do almoxarifado e do controle patrimonial.</p>

                            <p>Simplificar material é, por exemplo, reduzir a diversidade de um item empregado para o mesmo fim. Quando houver duas peças para uma finalidade qualquer, aconselha-se a simplificação, ou seja, a opção pelo uso de uma delas. Ao simplificarmos um material, favorecemos sua normalização, reduzimos as despesas e suas flutuações. Por exemplo cadernos com capa, números de folhas e formato idênticos contribuem para que haja a normalização. Ao requisitar uma quantidade desse material, o usuário irá fornecer todos os dados (tipo de capa, número de folhas e formato), o que facilitará sobremaneira não somente sua aquisição, como também o desempenho daqueles que se servem do material, pois se este um dia apresentar uma forma e outro dia outra forma de maneira totalmente diferente será imediatamente identificado.</p>

                            <p>Aliada a simplificação, é necessária uma especificação do material, que é uma descrição minuciosa que possibilita melhor entendimento entre o consumidor e fornecedor quanto ao tipo de material a ser adquirido.</p>

                            <p>A normalização se ocupa de maneira pela qual devem ser utilizados os materiais em suas diversas finalidades, bem como da padronização e identificação do material, de modo que tanto o usuário como o almoxarifado possa requisitar e atender os itens utilizando a mesma terminologia. A normalização é aplicada também no caso de peso, medida e formato.</p>

                            <p>Classificar um material é agrupá-lo segunda sua forma, dimensão, peso tipo, uso etc. A classificação não deve gerar confusão, ou seja, um produto não poderá ser classificado de modo que seja confundido com outro, mesmo havendo semelhanças. A classificação, ainda deve ser feita de maneira que cada gênero de material ocupe seu respectivo local. Por exemplo: produtos químicos poderão estragar produtos alimentícios se estiverem próximos entre si. Classificar material, em outras palavras, significa ordená-lo segundo critérios adotados, agrupando-o de acordo com a semelhança, sem causar confusão ou dispersão no espaço e alteração na qualidade.</p>

                            <p>Em função de uma boa classificação do material, pode-se partir para a codificação dele, ou seja, representar todas as informações necessárias, suficientes e desejadas por meio de números e/ou letras. Os sistemas de codificação mais comumente usados são: o alfabético, o alfanumérico e o numérico.</p>

                            <p>É de extrema importância manter os citados benefícios da classificação de materiais, isso pode ser obtido por intermédio da Catalogação que consiste em registrar os dados que dizem respeito aos materiais em um sistema de informações que facilite a consulta por parte dos usuários pela sua classificação, especificação ou código. Na tabela abaixo é apresentada a conceituação de cada etapa da classificação de materiais:</p>

                            <table class="table table-bordered1">
                                <tbody>
                                    <tr>
                                    <td scope="col">Catalogação:</td>
                                    <td>É o arrolamento de todos os itens de material utilizados, permitindo uma ideia geral do conjunto. Consiste em ordenar, de forma lógica, todo um conjunto de dados relativos aos itens identificados, codificados e cadastrados, de modo a facilitar a sua consulta pelas diversas áreas da entidade. </td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Simplificação:</td>
                                    <td>Simplificar material é, por exemplo, reduzir a grande diversidade de um item empregado para o mesmo fim. É a redução da diversidade de itens de material que se destinam a um fim idêntico. Caso existam dois itens de material que são empregados para a mesma finalidade, com o mesmo resultado – indiferentemente, opta-se pela inclusão no catálogo de materiais de apenas um deles. É uma etapa que antecede a padronização. Da mesma forma, podemos dizer que a simplificação favorece a normalização. </td>
                                    </tr>

                                    <tr>
                                    <td>Especificação:</td>
                                    <td>É a descrição minuciosa do material possibilitando sua individualização em uma linguagem familiar ao mercado. Possibilita melhor entendimento entre consumidor e o fornecedor quanto ao tipo de material a ser requisitado. </td>
                                    </tr>

                                    <tr>
                                    <td>Normalização:</td>
                                    <td>É o estabelecimento de normas técnicas para os itens de material em si, ou para seu emprego com segurança. É necessária para a consecução da padronização em sua completude. Possibilita melhor entendimento entre consumidor e o fornecedor quanto ao tipo de material a ser requisitado. A entidade oficial de normalização no Brasil é a Associação Brasileira de Normas Técnicas (ABNT). </td>
                                    </tr>

                                    <tr>
                                    <td>Padronização:</td>
                                    <td>Uniformização do emprego e do tipo do material. Facilita o diálogo com o mercado, o controle e permite a intercambialidade de sobressalentes ou demais materiais de consumo (peças, cartuchos de impressoras padronizadas, bobinas de fax etc.) assim como os serviços de assistência técnica; </td>
                                    </tr>

                                    <tr>
                                    <td>Codificação:</td>
                                    <td>Atribuição de uma série de números e/ou letras a cada item de material, de forma que essa informação, compilada em um único código, represente as características do item. Cada item terá, assim, um único código. </td>
                                    </tr>

                                    <tr>
                                    <td>Catalogação:</td>
                                    <td>É o arrolamento de todos os itens de material utilizados, permitindo uma ideia geral do conjunto. Consiste em ordenar, de forma lógica, todo um conjunto de dados relativos aos itens identificados, codificados e cadastrados, de modo a facilitar a sua consulta pelas diversas áreas da entidade. </td>
                                    </tr>
                                </tbody>
                            </table>


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