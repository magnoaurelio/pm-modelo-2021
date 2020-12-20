<?php include_once 'app/config/Config.php'; ?>
<!DOCTYPE html>

<html lang="pt-BR">


    <?php include_once 'include/head.php';
    ?>  

    <body>

        <div id="page">
            <?php include_once 'include/header.php'; ?>
            <?php include_once 'include/logomarca.php'; ?>
            <?php include_once 'include/feed-noticia.php'; ?>  

            <div id="content" class="container">

                <div id="main" class="row-fluid">

                    <div id="sidebar" class="span3">;

                        <div class="widget widget_latestpost">
                            <h3 class="title"><span>DIÁRIO OFICIAL</span></h3>
                        </div>
                        <ul class="menu-diario">
                            <li><a title="" class="" href="diario.php?p=edicao"><i class="fa fa-book"></i>Edições </a></li>
                            <li><a title="" class="" href="diario.php?p=publicacao"><i class="fa fa-file-text"></i> Publicações </a></li>
                            <li><a title="" class="" href="diario.php?p=normas"><i class="fa fa-clone"></i> Normas de Publicação </a></li>
                            <li><a title="" class="" href="diario.php?p=perguntas"><i class="fa fa-info-circle"></i> Perguntas Frequentes </a></li>
                            <li><a title="" class="" href="diario.php?p=sobre"><i class="fa fa-info"></i> Sobre o Diário </a></li>
                        </ul>
                        <hr>
                        <div class="panel panel-primary" >
                            <div class="panel-heading">Publicação por atos</div>
                            <?php echo Layout::Atos(); ?>
                        </div>
                        <div class="panel panel-primary" >
                            <div class="panel-heading">Calendário</div>
                            <div style="margin: 0 auto;" class="calendario"></div>
                        </div>

                    </div><!-- sidebar -->
                    <div id="main-left" class="span9" id="conteudo-diario">
                        <?php
                        try {
                            $p = isset($_REQUEST['p']) ? $_REQUEST['p'] : 'publicacao';
                            Router::setPage($p);
                        } catch (Exception $ex) {
                            MErro($ex);
                        }
                        ?>



                    </div><!-- #main-left -->



                    <div class="clearfix"></div>

                </div><!-- #main -->

            </div><!-- #content -->

            <?php include_once 'include/footer.php'; ?><!-- #content rodape-->
            <script>
                $('.calendario').datepicker({
                    maxViewMode: 2,
                    todayBtn: "linked",
                    language: "pt-BR",
                    daysOfWeekHighlighted: "0",
                    todayHighlight: true,
                    toggleActive: true
                });
            </script>

        </div><!-- #wrapper -->

    </body>

</html>


