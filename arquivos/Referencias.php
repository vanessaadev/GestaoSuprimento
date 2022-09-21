<?php
// HEADER
$page = 'Referencias';
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
        <div class="main-content container-fluid">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">
                        <div class="bd-callout bd-callout-success">
                            <h5 class="Titulo"><i class="fas fa-book CorVerdeEstado"></i> REFERÊNCIAS</h5>
                            
                            <br>

                            <ul>
                                <li><i class="fa fa-circle CorVerdeClaroEstado" style="font-size: 5em;"></i>vanessa</li>
                            </ul>

                            <p> <a href="https://www.seplag.ce.gov.br/wp-content/uploads/sites/14/2020/07/Guia-Metodol%C3%B3gico-de-Formula%C3%A7%C3%A3o-de-Agenda-Estrat%C3%A9gica-Setorial.pdf" target="_blank">https://www.seplag.ce.gov.br/wp-content/uploads/sites/14/2020/07/Guia-Metodol%C3%B3gico-de-Formula%C3%A7%C3%A3o-de-Agenda-Estrat%C3%A9gica-Setorial.pdf</a>
                            </p>

                            <br>
                        </div>

                        <br><p>Parabéns, <?php echo $NomeUsuario ?>! Você concluiu o módulo 01 do curso <strong>Divisão do Guia Metodológico de Formulação das Agendas Estratégicas Setoriais</strong>. Agora você já pode responder a avaliação do módulo 01. Clique em “Realizar Avaliação”. Boa sorte e até o próximo módulo! </p>
                        
                        <br><br>

                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->

                <div class="col-md-1"></div>
            </div> <!-- End row-->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="#" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realizar Avaliação 01 </a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>