<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
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
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <!--CONTEUDO-->
                    <h2 class="Titulo"> Apresentação</h2>
                    <hr>

                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/banner.jpg" data-bs-toggle="modal" data-bs-target="#Banner">
                            <img class="img-fluid" src="imagens/banner.jpg" alt="Apresentação do curso">
                        </a>
                    </div>

                    <br><p>A Escola de Gestão Pública do Estado do Ceará - EGPCE, em parceria com a Secretaria do Planejamento e Gestão - Seplag-CE, disponibiliza à sociedade o curso <strong>Guia Metodológico de Formulação de Agenda Estratégica Setorial</strong>, que visa assessorar e orientar os órgãos governamentais na concepção e elaboração de planos estratégicos setoriais, concedendo às políticas públicas maior previsão de efetividade.</p>

                    <p>A centralidade deste curso, a Agenda Estratégica Setorial (AES), entendida como produto de planejamento de médio prazo, é um instrumento estratégico, com o objetivo de desdobrar e organizar a Estratégia de Desenvolvimento de Longo Prazo do Estado em planos setoriais. Sua formulação consta no novo ciclo de gestão do Governo do Ceará, no âmbito da Gestão para Resultados (GpR).</p>

                    <p>Posto isso, e entendendo a Seplag como responsável pelo sistema de planejamento do Governo do Estado do Ceará e orientadora do fortalecimento desse novo paradigma de gestão, é de suma importância que a secretaria se corresponsabilize e subsidie as setoriais com ferramentas, métodos e técnicas de planejamento quando essas demandarem seu auxílio. Esse papel, inclusive, está em conformidade com o Decreto N° 32.216 de 2017, que regulamenta a GpR.</p>

                    <p>É importante, também, pontuar que até o momento não há um método que normatize a criação de Agendas Setoriais, ou seja, inexiste um documento que concretize as boas práticas eventualmente adotadas, criando memória institucional, e que oriente as unidades setoriais de planejamento à melhoria contínua da gestão.</p>

                    <p>Portanto, espera-se, com a utilização adequada desse instrumento, e orientação contínua da Seplag, </p>
                        
                    <ul class="none">
                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Otimizar o processo de planejamento setorial e alinhá-lo à GpR; </li>
                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Fortalecer o nível técnico na elaboração de Agendas; </li>
                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Conectar o planejamento setorial ao desenvolvimento de longo prazo do Estado; </li>
                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Qualificar os instrumentos de planejamento de curto prazo; e 
                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A gestão do conhecimento.</li>
                    </ul>

                    <!-- SCRIPT INTERAÇAO COM ALUNO-->
                    <ul class="none ">
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                            <h4>
                                Olá! <?php echo $NomeUsuario ?>, Bem-vindo(a) ao módulo 01 do curso <strong>Divisão do Guia Metodológico de Formulação das Agendas Estratégicas Setoriais</strong>! Esperamos que o conteúdo proposto contribua para aprimorar o seu conhecimento acerca do tema. Bons estudos!
                            </h4>
                        </li>
                    </ul>
                    <!-- FIM SCRIPT INTERAÇAO COM ALUNO-->


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
                    <!--  FIM SCRIPT LIGHTBOX -->
                    <!-- Botões de navegação -->
                    <div class="text-center">

                        <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!--  Fim Botões de navegação -->

                    <!-- FIM DIV col-md-10 -->
                </div>
                <div class="col-md-1"></div>
                <!--  FIM DIV ROW -->
            </div>
            <!-- FIM DIV CONTEINER  -->
        </div>
        <!-- FIM DIV MAIN  -->
    </div>

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>