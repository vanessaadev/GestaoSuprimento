<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'index';
include('layout/header.php');
?>

<?php
// HEADER
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
                            
                            <h2 class="Titulo">Apresentação</h2>
                            <hr>

                            <br>
                         
                            <p>O advento da promulgação da Lei Complementar nº 101, de 04 de maio de 2000 (Lei de Responsabilidade Fiscal) assim como o processo de convergência das normas de contabilidade pública aos padrões internacionais do IFRS - <em>International Financial Reporting Standards</em>, iniciado no ano de 2008, trouxeram uma maior atenção para alguns aspectos teóricos e práticos relativos à gestão patrimonial implantando inovações que contribuíram para uma maior transparência nas contas públicas, um maior controle e além de solidificar o cumprimento da Lei nº 4.320/64.
                            <br><br>Dentre as principais alterações implantadas, está a previsão de depreciação para os bens públicos. Sendo que a maioria dos órgãos da administração pública, não executava este procedimento, embora houvesse previsão legal no Art. 104 da Lei nº 4.320/64. O desprezo até então dado às informações de custos, entre os quais se encontra a depreciação, impossibilitava ao gestor e a sociedade a real mensuração dos custos do poder público e o impacto destes no patrimônio das entidades.
                            <br><br>Desde o ano de 2013 o Governo do Estado do Ceará, vem realizando um esforço no desenvolvimento de novos sistemas informatizados e capacitação de seus agentes públicos para adequação às novas práticas.
                            <br><br>A Secretaria do Planejamento e Gestão – Seplag em colaboração com a Escola de Gestão Pública do Ceará – Egpce apresentam neste curso a reunião de aspectos teóricos, procedimentos práticos e legislação até então desenvolvidos com relação a gestão de materiais permanentes (bens móveis) e seu sistema informatizado de controle, de forma a oferecer a atualização permanente aos órgãos e entidades do Poder Executivo Estadual</p>

                            <br>

                            <h2 class="Titulo">Objetivo</h2>
                            <hr>

                            <br>
                                                                       
                            <p>Compreender as técnicas usuais de gestão de materiais permanentes, assim como a legislação vigente e sua aplicabilidade no cotidiano operacional da administração pública estadual.</p>
                                                                       
                                          
                            
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
                        <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
